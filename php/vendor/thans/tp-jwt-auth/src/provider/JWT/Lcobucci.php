<?php


namespace thans\jwt\provider\JWT;

use Exception;
use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Signer\Ecdsa;
use Lcobucci\JWT\Signer\Key\InMemory;
use Lcobucci\JWT\Signer\Ecdsa\Sha256 as ES256;
use Lcobucci\JWT\Signer\Ecdsa\Sha384 as ES384;
use Lcobucci\JWT\Signer\Ecdsa\Sha512 as ES512;
use Lcobucci\JWT\Signer\Hmac\Sha256 as HS256;
use Lcobucci\JWT\Signer\Hmac\Sha384 as HS384;
use Lcobucci\JWT\Signer\Hmac\Sha512 as HS512;
use Lcobucci\JWT\Signer\Keychain;
use Lcobucci\JWT\Signer\Rsa;
use Lcobucci\JWT\Signer\Rsa\Sha256 as RS256;
use Lcobucci\JWT\Signer\Rsa\Sha384 as RS384;
use Lcobucci\JWT\Signer\Rsa\Sha512 as RS512;
use Lcobucci\JWT\Token\RegisteredClaims;
use Lcobucci\JWT\Validation\Constraint\SignedWith;
use DateTimeImmutable;
use DateTimeInterface;
use thans\jwt\exception\JWTException;
use thans\jwt\exception\TokenInvalidException;

class Lcobucci extends Provider
{
    protected $signer;

    protected $keys;

    protected $signers
    = [
        'HS256' => HS256::class,
        'HS384' => HS384::class,
        'HS512' => HS512::class,
        'RS256' => RS256::class,
        'RS384' => RS384::class,
        'RS512' => RS512::class,
        'ES256' => ES256::class,
        'ES384' => ES384::class,
        'ES512' => ES512::class,
    ];

    protected $configuration;

    public function __construct($algo, $keys)
    {
        $this->algo = $algo;
        $this->signer = $this->getSign();
        $this->keys = $keys;
        $this->configuration = $this->buildConfiguration();
    }


    public function encode(array $payload)
    {
        $builder = $this->getBuilderFromClaims($payload);
        try {
            return $builder->getToken($this->configuration->signer(), $this->configuration->signingKey())
                ->toString();
        } catch (Exception $e) {
            throw new JWTException(
                'Could not create token :' . $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        return (string) $builder->getToken();
    }

    public function decode($token)
    {
        try {
            $token = $this->configuration->parser()->parse($token);
        } catch (Exception $e) {
            throw new TokenInvalidException('Could not decode token: '
                . $e->getMessage(), $e->getCode(), $e);
        }

        if (!$this->configuration->validator()->validate($token, ...$this->configuration->validationConstraints())) {
            throw new TokenInvalidException('Token Signature could not be verified.');
        }

        $claims = [];
        foreach ($token->claims()->all() as $key => $claim) {
            if ($claim instanceof DateTimeInterface) {
                $claims[$key] = (int) $claim->getTimestamp();
            } else {
                $claims[$key] = is_object($claim) && method_exists($claim, 'getValue')
                    ? $claim->getValue()
                    : $claim;
            }
        }
        return $claims;
    }

    /**
     * Create an instance of the builder with all of the claims applied.
     *
     * @param  array  $payload
     * @return \Lcobucci\JWT\Token\Builder
     */
    protected function getBuilderFromClaims(array $payload)
    {
        $builder = $this->configuration->builder();
        foreach ($payload as $key => $value) {
            $value = $value->getValue();
            switch ($key) {
                case RegisteredClaims::ID:
                    $builder->identifiedBy($value);
                    break;
                case RegisteredClaims::EXPIRATION_TIME:
                    $builder->expiresAt(DateTimeImmutable::createFromFormat('U', $value));
                    break;
                case RegisteredClaims::NOT_BEFORE:
                    $builder->canOnlyBeUsedAfter(DateTimeImmutable::createFromFormat('U', $value));
                    break;
                case RegisteredClaims::ISSUED_AT:
                    $builder->issuedAt(DateTimeImmutable::createFromFormat('U', $value));
                    break;
                case RegisteredClaims::ISSUER:
                    $builder->issuedBy($value);
                    break;
                case RegisteredClaims::AUDIENCE:
                    $builder->permittedFor($value);
                    break;
                case RegisteredClaims::SUBJECT:
                    $builder->relatedTo($value);
                    break;
                default:
                    $builder->withClaim($key, $value);
            }
        }

        return $builder;
    }

    protected function buildConfiguration()
    {
        $config = $this->isAsymmetric()
            ? Configuration::forAsymmetricSigner(
                $this->signer,
                $this->getSigningKey(),
                $this->getVerificationKey()
            )
            : Configuration::forSymmetricSigner($this->signer, $this->getSigningKey());

        $config->setValidationConstraints(
            new SignedWith($this->signer, $this->getVerificationKey())
        );

        return $config;
    }

    protected function isAsymmetric()
    {
        return is_subclass_of($this->signer, Rsa::class)
            || is_subclass_of($this->signer, Ecdsa::class);
    }

    protected function getSigningKey()
    {
        if ($this->isAsymmetric()) {
            if (!$privateKey = $this->getPrivateKey()) {
                throw new JWTException('Private key is not set.');
            }

            return $this->getKey($privateKey, $this->getPassword() ?? '');
        }

        if (!$secret = $this->getSecret()) {
            throw new JWTException('Secret is not set.');
        }
        return $this->getKey($secret);
    }

    protected function getVerificationKey()
    {
        if ($this->isAsymmetric()) {
            if (!$public = $this->getPublicKey()) {
                throw new JWTException('Public key is not set.');
            }

            return $this->getKey($public);
        }

        if (!$secret = $this->getSecret()) {
            throw new JWTException('Secret is not set.');
        }

        return $this->getKey($secret);
    }


    protected function getSign()
    {
        if (!isset($this->signers[$this->algo])) {
            throw new JWTException('Cloud not find ' . $this->algo . ' algo');
        }

        $signer = $this->signers[$this->algo];

        if (is_subclass_of($signer, Ecdsa::class)) {
            return $signer::create();
        }

        return new $signer();
    }
    /**
     * Get the signing key instance.
     */
    protected function getKey(string $contents, string $passphrase = '')
    {
        return InMemory::plainText($contents, $passphrase);
    }
}
