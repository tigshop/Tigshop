<?php


namespace thans\jwt\claim;

use think\Request;

class Factory
{
    protected $request;

    protected $classMap
        = [
            'aud' => Audience::class,
            'exp' => Expiration::class,
            'iat' => IssuedAt::class,
            'iss' => Issuer::class,
            'jti' => JwtId::class,
            'nbf' => NotBefore::class,
            'sub' => Subject::class,
        ];

    protected $ttl;
    protected $claim = [];
    protected $refreshTtl;

    public function __construct(Request $request, $ttl, $refreshTtl)
    {
        $this->request    = $request;
        $this->ttl        = $ttl;
        $this->refreshTtl = $refreshTtl;
    }

    public function customer($key, $value)
    {
        $this->claim[$key] = isset($this->classMap[$key])
            ? new $this->classMap[$key]($value)
            : new Customer($key, $value);

        return $this;
    }

    public function builder()
    {
        foreach ($this->classMap as $key => $class) {
            $claim[$key] = new $class(method_exists($this, $key)
                ? $this->$key() : '');
        }
        $this->claim = array_merge($this->claim, $claim);

        return $this;
    }

    public function validate($refresh = false)
    {
        foreach ($this->claim as $key => $claim) {
            if (! $refresh && method_exists($claim, 'validatePayload')) {
                $claim->validatePayload();
            }
            if ($refresh && method_exists($claim, 'validateRefresh')) {
                $claim->validateRefresh($this->refreshTtl);
            }
        }
    }

    public function getClaims()
    {
        return $this->claim;
    }

    public function aud()
    {
        return $this->request->url();
    }

    public function exp()
    {
        return time() + $this->ttl;
    }

    public function iat()
    {
        return time();
    }

    public function iss()
    {
        return $this->request->url();
    }

    public function jti()
    {
        return md5(uniqid().time().rand(100000, 9999999));
    }

    public function nbf()
    {
        return time();
    }
}
