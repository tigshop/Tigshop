<?php

namespace AlibabaCloud\Cas\V20200630;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method CreateClientCertificate createClientCertificate(array $options = [])
 * @method CreateClientCertificateWithCsr createClientCertificateWithCsr(array $options = [])
 * @method CreateCustomCertificate createCustomCertificate(array $options = [])
 * @method CreateExternalCACertificate createExternalCACertificate(array $options = [])
 * @method CreateRevokeClientCertificate createRevokeClientCertificate(array $options = [])
 * @method CreateRootCACertificate createRootCACertificate(array $options = [])
 * @method CreateServerCertificate createServerCertificate(array $options = [])
 * @method CreateServerCertificateWithCsr createServerCertificateWithCsr(array $options = [])
 * @method CreateSubCACertificate createSubCACertificate(array $options = [])
 * @method DeleteClientCertificate deleteClientCertificate(array $options = [])
 * @method DescribeCACertificate describeCACertificate(array $options = [])
 * @method DescribeCACertificateCount describeCACertificateCount(array $options = [])
 * @method DescribeCACertificateList describeCACertificateList(array $options = [])
 * @method DescribeCertificatePrivateKey describeCertificatePrivateKey(array $options = [])
 * @method DescribeClientCertificate describeClientCertificate(array $options = [])
 * @method DescribeClientCertificateStatus describeClientCertificateStatus(array $options = [])
 * @method GetCAInstanceStatus getCAInstanceStatus(array $options = [])
 * @method ListCert listCert(array $options = [])
 * @method ListClientCertificate listClientCertificate(array $options = [])
 * @method ListPcaCaCertificate listPcaCaCertificate(array $options = [])
 * @method ListRevokeCertificate listRevokeCertificate(array $options = [])
 * @method UpdateCACertificateStatus updateCACertificateStatus(array $options = [])
 * @method UploadPcaCertToCas uploadPcaCertToCas(array $options = [])
 */
class CasApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'cas';

    /** @var string */
    public $version = '2020-06-30';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'cas';
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getMonths()
 * @method $this withMonths($value)
 * @method string getEnableCrl()
 * @method $this withEnableCrl($value)
 * @method string getAfterTime()
 * @method $this withAfterTime($value)
 * @method string getLocality()
 * @method $this withLocality($value)
 * @method string getImmediately()
 * @method $this withImmediately($value)
 * @method string getYears()
 * @method $this withYears($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getDays()
 * @method $this withDays($value)
 * @method string getBeforeTime()
 * @method $this withBeforeTime($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getParentIdentifier()
 * @method $this withParentIdentifier($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getSanType()
 * @method $this withSanType($value)
 * @method string getSanValue()
 * @method $this withSanValue($value)
 */
class CreateClientCertificate extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getMonths()
 * @method $this withMonths($value)
 * @method string getEnableCrl()
 * @method $this withEnableCrl($value)
 * @method string getAfterTime()
 * @method $this withAfterTime($value)
 * @method string getLocality()
 * @method $this withLocality($value)
 * @method string getImmediately()
 * @method $this withImmediately($value)
 * @method string getYears()
 * @method $this withYears($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getDays()
 * @method $this withDays($value)
 * @method string getBeforeTime()
 * @method $this withBeforeTime($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getParentIdentifier()
 * @method $this withParentIdentifier($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCsr()
 * @method $this withCsr($value)
 * @method string getSanType()
 * @method $this withSanType($value)
 * @method string getSanValue()
 * @method $this withSanValue($value)
 */
class CreateClientCertificateWithCsr extends Rpc
{
}

/**
 * @method string getCsr()
 * @method $this withCsr($value)
 * @method string getEnableCrl()
 * @method $this withEnableCrl($value)
 * @method string getImmediately()
 * @method $this withImmediately($value)
 * @method string getParentIdentifier()
 * @method $this withParentIdentifier($value)
 * @method string getValidity()
 * @method $this withValidity($value)
 * @method string getApiPassthrough()
 * @method $this withApiPassthrough($value)
 */
class CreateCustomCertificate extends Rpc
{
}

/**
 * @method string getCsr()
 * @method $this withCsr($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getAutoTesting()
 * @method $this withAutoTesting($value)
 * @method string getValidity()
 * @method $this withValidity($value)
 * @method string getApiPassthrough()
 * @method $this withApiPassthrough($value)
 */
class CreateExternalCACertificate extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 */
class CreateRevokeClientCertificate extends Rpc
{
}

/**
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getLocality()
 * @method $this withLocality($value)
 * @method string getYears()
 * @method $this withYears($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class CreateRootCACertificate extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getMonths()
 * @method $this withMonths($value)
 * @method string getEnableCrl()
 * @method $this withEnableCrl($value)
 * @method string getAfterTime()
 * @method $this withAfterTime($value)
 * @method string getLocality()
 * @method $this withLocality($value)
 * @method string getImmediately()
 * @method $this withImmediately($value)
 * @method string getYears()
 * @method $this withYears($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getDays()
 * @method $this withDays($value)
 * @method string getBeforeTime()
 * @method $this withBeforeTime($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getParentIdentifier()
 * @method $this withParentIdentifier($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateServerCertificate extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getMonths()
 * @method $this withMonths($value)
 * @method string getEnableCrl()
 * @method $this withEnableCrl($value)
 * @method string getAfterTime()
 * @method $this withAfterTime($value)
 * @method string getLocality()
 * @method $this withLocality($value)
 * @method string getImmediately()
 * @method $this withImmediately($value)
 * @method string getYears()
 * @method $this withYears($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getDays()
 * @method $this withDays($value)
 * @method string getBeforeTime()
 * @method $this withBeforeTime($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getParentIdentifier()
 * @method $this withParentIdentifier($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 * @method string getCsr()
 * @method $this withCsr($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateServerCertificateWithCsr extends Rpc
{
}

/**
 * @method array getExtendedKeyUsages()
 * @method string getEnableCrl()
 * @method $this withEnableCrl($value)
 * @method string getCountryCode()
 * @method $this withCountryCode($value)
 * @method string getLocality()
 * @method $this withLocality($value)
 * @method string getPathLenConstraint()
 * @method $this withPathLenConstraint($value)
 * @method string getYears()
 * @method $this withYears($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getCommonName()
 * @method $this withCommonName($value)
 * @method string getOrganization()
 * @method $this withOrganization($value)
 * @method string getCrlDay()
 * @method $this withCrlDay($value)
 * @method string getParentIdentifier()
 * @method $this withParentIdentifier($value)
 * @method string getState()
 * @method $this withState($value)
 * @method string getOrganizationUnit()
 * @method $this withOrganizationUnit($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class CreateSubCACertificate extends Rpc
{

    /**
     * @param array $extendedKeyUsages
     *
     * @return $this
     */
	public function withExtendedKeyUsages(array $extendedKeyUsages)
	{
	    $this->data['ExtendedKeyUsages'] = $extendedKeyUsages;
		foreach ($extendedKeyUsages as $i => $iValue) {
			$this->options['query']['ExtendedKeyUsages.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 */
class DeleteClientCertificate extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 */
class DescribeCACertificate extends Rpc
{
}

class DescribeCACertificateCount extends Rpc
{
}

/**
 * @method string getCaStatus()
 * @method $this withCaStatus($value)
 * @method string getCertType()
 * @method $this withCertType($value)
 * @method string getValidStatus()
 * @method $this withValidStatus($value)
 * @method string getIssuerType()
 * @method $this withIssuerType($value)
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 */
class DescribeCACertificateList extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getEncryptedCode()
 * @method $this withEncryptedCode($value)
 */
class DescribeCertificatePrivateKey extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 */
class DescribeClientCertificate extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 */
class DescribeClientCertificateStatus extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 */
class GetCAInstanceStatus extends Rpc
{
}

/**
 * @method string getBeforeDate()
 * @method $this withBeforeDate($value)
 * @method string getShowSize()
 * @method $this withShowSize($value)
 * @method string getInstanceUuid()
 * @method $this withInstanceUuid($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getType()
 * @method $this withType($value)
 * @method string getAfterDate()
 * @method $this withAfterDate($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class ListCert extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getShowSize()
 * @method $this withShowSize($value)
 */
class ListClientCertificate extends Rpc
{
}

/**
 * @method string getInnerAccessToken()
 * @method $this withInnerAccessToken($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class ListPcaCaCertificate extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getShowSize()
 * @method $this withShowSize($value)
 */
class ListRevokeCertificate extends Rpc
{
}

/**
 * @method string getIdentifier()
 * @method $this withIdentifier($value)
 * @method string getClientToken()
 * @method $this withClientToken($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class UpdateCACertificateStatus extends Rpc
{
}

/**
 * @method string getIds()
 * @method $this withIds($value)
 */
class UploadPcaCertToCas extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}
