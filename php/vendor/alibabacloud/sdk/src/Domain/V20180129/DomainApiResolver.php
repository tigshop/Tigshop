<?php

namespace AlibabaCloud\Domain\V20180129;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcknowledgeTaskResult acknowledgeTaskResult(array $options = [])
 * @method BatchFuzzyMatchDomainSensitiveWord batchFuzzyMatchDomainSensitiveWord(array $options = [])
 * @method CancelDomainVerification cancelDomainVerification(array $options = [])
 * @method CancelOperationAudit cancelOperationAudit(array $options = [])
 * @method CancelQualificationVerification cancelQualificationVerification(array $options = [])
 * @method CancelTask cancelTask(array $options = [])
 * @method ChangeResourceGroup changeResourceGroup(array $options = [])
 * @method CheckDomain checkDomain(array $options = [])
 * @method CheckDomainSunriseClaim checkDomainSunriseClaim(array $options = [])
 * @method CheckIntlFixPriceDomainStatus checkIntlFixPriceDomainStatus(array $options = [])
 * @method CheckMaxYearOfServerLock checkMaxYearOfServerLock(array $options = [])
 * @method CheckProcessingServerLockApply checkProcessingServerLockApply(array $options = [])
 * @method CheckTransferInFeasibility checkTransferInFeasibility(array $options = [])
 * @method ConfirmTransferInEmail confirmTransferInEmail(array $options = [])
 * @method CreateIntlFixedPriceDomainOrder createIntlFixedPriceDomainOrder(array $options = [])
 * @method DeleteContactTemplates deleteContactTemplates(array $options = [])
 * @method DeleteDomainGroup deleteDomainGroup(array $options = [])
 * @method DeleteEmailVerification deleteEmailVerification(array $options = [])
 * @method DeleteRegistrantProfile deleteRegistrantProfile(array $options = [])
 * @method DomainSpecialBizCancel domainSpecialBizCancel(array $options = [])
 * @method EmailVerified emailVerified(array $options = [])
 * @method FuzzyMatchDomainSensitiveWord fuzzyMatchDomainSensitiveWord(array $options = [])
 * @method GetIntlFixPriceDomainListUrl getIntlFixPriceDomainListUrl(array $options = [])
 * @method GetOperationOssUploadPolicy getOperationOssUploadPolicy(array $options = [])
 * @method GetQualificationUploadPolicy getQualificationUploadPolicy(array $options = [])
 * @method ListEmailVerification listEmailVerification(array $options = [])
 * @method ListServerLock listServerLock(array $options = [])
 * @method LookupTmchNotice lookupTmchNotice(array $options = [])
 * @method PollTaskResult pollTaskResult(array $options = [])
 * @method QueryAdvancedDomainList queryAdvancedDomainList(array $options = [])
 * @method QueryArtExtension queryArtExtension(array $options = [])
 * @method QueryChangeLogList queryChangeLogList(array $options = [])
 * @method QueryContactInfo queryContactInfo(array $options = [])
 * @method QueryDnsHost queryDnsHost(array $options = [])
 * @method QueryDomainAdminDivision queryDomainAdminDivision(array $options = [])
 * @method QueryDomainByDomainName queryDomainByDomainName(array $options = [])
 * @method QueryDomainByInstanceId queryDomainByInstanceId(array $options = [])
 * @method QueryDomainGroupList queryDomainGroupList(array $options = [])
 * @method QueryDomainList queryDomainList(array $options = [])
 * @method QueryDomainRealNameVerificationInfo queryDomainRealNameVerificationInfo(array $options = [])
 * @method QueryDomainSpecialBizDetail queryDomainSpecialBizDetail(array $options = [])
 * @method QueryDomainSpecialBizInfoByDomain queryDomainSpecialBizInfoByDomain(array $options = [])
 * @method QueryDomainSuffix queryDomainSuffix(array $options = [])
 * @method QueryDSRecord queryDSRecord(array $options = [])
 * @method QueryEmailVerification queryEmailVerification(array $options = [])
 * @method QueryEnsAssociation queryEnsAssociation(array $options = [])
 * @method QueryFailingReasonListForQualification queryFailingReasonListForQualification(array $options = [])
 * @method QueryFailReasonForDomainRealNameVerification queryFailReasonForDomainRealNameVerification(array $options = [])
 * @method QueryFailReasonForRegistrantProfileRealNameVerification queryFailReasonForRegistrantProfileRealNameVerification(array $options = [])
 * @method QueryIntlFixedPriceOrderList queryIntlFixedPriceOrderList(array $options = [])
 * @method QueryLocalEnsAssociation queryLocalEnsAssociation(array $options = [])
 * @method QueryOperationAuditInfoDetail queryOperationAuditInfoDetail(array $options = [])
 * @method QueryOperationAuditInfoList queryOperationAuditInfoList(array $options = [])
 * @method QueryQualificationDetail queryQualificationDetail(array $options = [])
 * @method QueryRegistrantProfileRealNameVerificationInfo queryRegistrantProfileRealNameVerificationInfo(array $options = [])
 * @method QueryRegistrantProfiles queryRegistrantProfiles(array $options = [])
 * @method QueryServerLock queryServerLock(array $options = [])
 * @method QueryTaskDetailHistory queryTaskDetailHistory(array $options = [])
 * @method QueryTaskDetailList queryTaskDetailList(array $options = [])
 * @method QueryTaskInfoHistory queryTaskInfoHistory(array $options = [])
 * @method QueryTaskList queryTaskList(array $options = [])
 * @method QueryTransferInByInstanceId queryTransferInByInstanceId(array $options = [])
 * @method QueryTransferInList queryTransferInList(array $options = [])
 * @method QueryTransferOutInfo queryTransferOutInfo(array $options = [])
 * @method RegistrantProfileRealNameVerification registrantProfileRealNameVerification(array $options = [])
 * @method ResendEmailVerification resendEmailVerification(array $options = [])
 * @method ResetQualificationVerification resetQualificationVerification(array $options = [])
 * @method SaveBatchDomainRemark saveBatchDomainRemark(array $options = [])
 * @method SaveBatchTaskForApplyQuickTransferOutOpenly saveBatchTaskForApplyQuickTransferOutOpenly(array $options = [])
 * @method SaveBatchTaskForCreatingOrderActivate saveBatchTaskForCreatingOrderActivate(array $options = [])
 * @method SaveBatchTaskForCreatingOrderRedeem saveBatchTaskForCreatingOrderRedeem(array $options = [])
 * @method SaveBatchTaskForCreatingOrderRenew saveBatchTaskForCreatingOrderRenew(array $options = [])
 * @method SaveBatchTaskForCreatingOrderTransfer saveBatchTaskForCreatingOrderTransfer(array $options = [])
 * @method SaveBatchTaskForDomainNameProxyService saveBatchTaskForDomainNameProxyService(array $options = [])
 * @method SaveBatchTaskForGenerateDomainCertificate saveBatchTaskForGenerateDomainCertificate(array $options = [])
 * @method SaveBatchTaskForModifyingDomainDns saveBatchTaskForModifyingDomainDns(array $options = [])
 * @method SaveBatchTaskForReserveDropListDomain saveBatchTaskForReserveDropListDomain(array $options = [])
 * @method SaveBatchTaskForTransferProhibitionLock saveBatchTaskForTransferProhibitionLock(array $options = [])
 * @method SaveBatchTaskForUpdateProhibitionLock saveBatchTaskForUpdateProhibitionLock(array $options = [])
 * @method SaveBatchTaskForUpdatingContactInfoByNewContact saveBatchTaskForUpdatingContactInfoByNewContact(array $options = [])
 * @method SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId saveBatchTaskForUpdatingContactInfoByRegistrantProfileId(array $options = [])
 * @method SaveDomainGroup saveDomainGroup(array $options = [])
 * @method SaveRegistrantProfile saveRegistrantProfile(array $options = [])
 * @method SaveRegistrantProfileRealNameVerification saveRegistrantProfileRealNameVerification(array $options = [])
 * @method SaveSingleTaskForAddingDSRecord saveSingleTaskForAddingDSRecord(array $options = [])
 * @method SaveSingleTaskForApplyQuickTransferOutOpenly saveSingleTaskForApplyQuickTransferOutOpenly(array $options = [])
 * @method SaveSingleTaskForApprovingTransferOut saveSingleTaskForApprovingTransferOut(array $options = [])
 * @method SaveSingleTaskForAssociatingEns saveSingleTaskForAssociatingEns(array $options = [])
 * @method SaveSingleTaskForCancelingTransferIn saveSingleTaskForCancelingTransferIn(array $options = [])
 * @method SaveSingleTaskForCancelingTransferOut saveSingleTaskForCancelingTransferOut(array $options = [])
 * @method SaveSingleTaskForCreatingDnsHost saveSingleTaskForCreatingDnsHost(array $options = [])
 * @method SaveSingleTaskForCreatingOrderActivate saveSingleTaskForCreatingOrderActivate(array $options = [])
 * @method SaveSingleTaskForCreatingOrderRedeem saveSingleTaskForCreatingOrderRedeem(array $options = [])
 * @method SaveSingleTaskForCreatingOrderRenew saveSingleTaskForCreatingOrderRenew(array $options = [])
 * @method SaveSingleTaskForCreatingOrderTransfer saveSingleTaskForCreatingOrderTransfer(array $options = [])
 * @method SaveSingleTaskForDeletingDnsHost saveSingleTaskForDeletingDnsHost(array $options = [])
 * @method SaveSingleTaskForDeletingDSRecord saveSingleTaskForDeletingDSRecord(array $options = [])
 * @method SaveSingleTaskForDisassociatingEns saveSingleTaskForDisassociatingEns(array $options = [])
 * @method SaveSingleTaskForDomainNameProxyService saveSingleTaskForDomainNameProxyService(array $options = [])
 * @method SaveSingleTaskForGenerateDomainCertificate saveSingleTaskForGenerateDomainCertificate(array $options = [])
 * @method SaveSingleTaskForModifyingDnsHost saveSingleTaskForModifyingDnsHost(array $options = [])
 * @method SaveSingleTaskForModifyingDSRecord saveSingleTaskForModifyingDSRecord(array $options = [])
 * @method SaveSingleTaskForQueryingTransferAuthorizationCode saveSingleTaskForQueryingTransferAuthorizationCode(array $options = [])
 * @method SaveSingleTaskForReserveDropListDomain saveSingleTaskForReserveDropListDomain(array $options = [])
 * @method SaveSingleTaskForSaveArtExtension saveSingleTaskForSaveArtExtension(array $options = [])
 * @method SaveSingleTaskForSynchronizingDnsHost saveSingleTaskForSynchronizingDnsHost(array $options = [])
 * @method SaveSingleTaskForSynchronizingDSRecord saveSingleTaskForSynchronizingDSRecord(array $options = [])
 * @method SaveSingleTaskForTransferProhibitionLock saveSingleTaskForTransferProhibitionLock(array $options = [])
 * @method SaveSingleTaskForUpdateProhibitionLock saveSingleTaskForUpdateProhibitionLock(array $options = [])
 * @method SaveSingleTaskForUpdatingContactInfo saveSingleTaskForUpdatingContactInfo(array $options = [])
 * @method SaveTaskForSubmittingDomainDelete saveTaskForSubmittingDomainDelete(array $options = [])
 * @method SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential saveTaskForSubmittingDomainRealNameVerificationByIdentityCredential(array $options = [])
 * @method SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID saveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID(array $options = [])
 * @method SaveTaskForUpdatingRegistrantInfoByIdentityCredential saveTaskForUpdatingRegistrantInfoByIdentityCredential(array $options = [])
 * @method SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID saveTaskForUpdatingRegistrantInfoByRegistrantProfileID(array $options = [])
 * @method ScrollDomainList scrollDomainList(array $options = [])
 * @method SetDefaultRegistrantProfile setDefaultRegistrantProfile(array $options = [])
 * @method SetupDomainAutoRenew setupDomainAutoRenew(array $options = [])
 * @method SubmitDomainSpecialBizCredentials submitDomainSpecialBizCredentials(array $options = [])
 * @method SubmitEmailVerification submitEmailVerification(array $options = [])
 * @method SubmitOperationAuditInfo submitOperationAuditInfo(array $options = [])
 * @method SubmitOperationCredentials submitOperationCredentials(array $options = [])
 * @method TransferInCheckMailToken transferInCheckMailToken(array $options = [])
 * @method TransferInReenterTransferAuthorizationCode transferInReenterTransferAuthorizationCode(array $options = [])
 * @method TransferInRefetchWhoisEmail transferInRefetchWhoisEmail(array $options = [])
 * @method TransferInResendMailToken transferInResendMailToken(array $options = [])
 * @method UpdateDomainToDomainGroup updateDomainToDomainGroup(array $options = [])
 * @method VerifyContactField verifyContactField(array $options = [])
 * @method VerifyEmail verifyEmail(array $options = [])
 */
class DomainApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Domain';

    /** @var string */
    public $version = '2018-01-29';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'domain';
}

/**
 * @method array getTaskDetailNo()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class AcknowledgeTaskResult extends Rpc
{

    /**
     * @param array $taskDetailNo
     *
     * @return $this
     */
	public function withTaskDetailNo(array $taskDetailNo)
	{
	    $this->data['TaskDetailNo'] = $taskDetailNo;
		foreach ($taskDetailNo as $i => $iValue) {
			$this->options['query']['TaskDetailNo.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class BatchFuzzyMatchDomainSensitiveWord extends Rpc
{
}

/**
 * @method string getActionType()
 * @method $this withActionType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CancelDomainVerification extends Rpc
{
}

/**
 * @method string getAuditRecordId()
 * @method $this withAuditRecordId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CancelOperationAudit extends Rpc
{
}

/**
 * @method string getQualificationType()
 * @method $this withQualificationType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CancelQualificationVerification extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CancelTask extends Rpc
{
}

/**
 * @method string getResourceId()
 * @method $this withResourceId($value)
 * @method string getResourceType()
 * @method $this withResourceType($value)
 * @method string getNewResourceGroupId()
 * @method $this withNewResourceGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ChangeResourceGroup extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getFeeCurrency()
 * @method $this withFeeCurrency($value)
 * @method string getFeePeriod()
 * @method $this withFeePeriod($value)
 * @method string getFeeCommand()
 * @method $this withFeeCommand($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckDomain extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckDomainSunriseClaim extends Rpc
{
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CheckIntlFixPriceDomainStatus extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getCheckAction()
 * @method $this withCheckAction($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckMaxYearOfServerLock extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getFeePeriod()
 * @method $this withFeePeriod($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckProcessingServerLockApply extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTransferAuthorizationCode()
 * @method $this withTransferAuthorizationCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class CheckTransferInFeasibility extends Rpc
{
}

/**
 * @method array getDomainName()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ConfirmTransferInEmail extends Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getAutoPay()
 * @method $this withAutoPay($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getExpectedPrice()
 * @method $this withExpectedPrice($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateIntlFixedPriceDomainOrder extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantProfileIds()
 * @method $this withRegistrantProfileIds($value)
 */
class DeleteContactTemplates extends Rpc
{
}

/**
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteDomainGroup extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class DeleteEmailVerification extends Rpc
{
}

/**
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class DeleteRegistrantProfile extends Rpc
{
}

/**
 * @method string getBizId()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class DomainSpecialBizCancel extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class EmailVerified extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getKeyword()
 * @method $this withKeyword($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class FuzzyMatchDomainSensitiveWord extends Rpc
{
}

/**
 * @method string getListDate()
 * @method $this withListDate($value)
 */
class GetIntlFixPriceDomainListUrl extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getAuditType()
 * @method $this withAuditType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class GetOperationOssUploadPolicy extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class GetQualificationUploadPolicy extends Rpc
{
}

/**
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getVerificationStatus()
 * @method $this withVerificationStatus($value)
 * @method string getBeginCreateTime()
 * @method $this withBeginCreateTime($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ListEmailVerification extends Rpc
{
}

/**
 * @method string getLockProductId()
 * @method $this withLockProductId($value)
 * @method string getEndExpireDate()
 * @method $this withEndExpireDate($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBeginStartDate()
 * @method $this withBeginStartDate($value)
 * @method string getOrderByType()
 * @method $this withOrderByType($value)
 * @method string getServerLockStatus()
 * @method $this withServerLockStatus($value)
 * @method string getStartExpireDate()
 * @method $this withStartExpireDate($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getOrderBy()
 * @method $this withOrderBy($value)
 * @method string getEndStartDate()
 * @method $this withEndStartDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class ListServerLock extends Rpc
{
}

/**
 * @method string getClaimKey()
 * @method $this withClaimKey($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class LookupTmchNotice extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getTaskResultStatus()
 * @method $this withTaskResultStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class PollTaskResult extends Rpc
{
}

/**
 * @method string getProductDomainType()
 * @method $this withProductDomainType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getExcluded()
 * @method $this withExcluded($value)
 * @method string getStartLength()
 * @method $this withStartLength($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getExcludedSuffix()
 * @method $this withExcludedSuffix($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExcludedPrefix()
 * @method $this withExcludedPrefix($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getProductDomainTypeSort()
 * @method $this withProductDomainTypeSort($value)
 * @method string getEndExpirationDate()
 * @method $this withEndExpirationDate($value)
 * @method string getSuffixs()
 * @method $this withSuffixs($value)
 * @method string getDomainNameSort()
 * @method $this withDomainNameSort($value)
 * @method string getExpirationDateSort()
 * @method $this withExpirationDateSort($value)
 * @method string getStartExpirationDate()
 * @method $this withStartExpirationDate($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getKeyWordSuffix()
 * @method $this withKeyWordSuffix($value)
 * @method string getKeyWordPrefix()
 * @method $this withKeyWordPrefix($value)
 * @method string getTradeType()
 * @method $this withTradeType($value)
 * @method string getEndRegistrationDate()
 * @method $this withEndRegistrationDate($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getIsPremiumDomain()
 * @method $this withIsPremiumDomain($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrationDateSort()
 * @method $this withRegistrationDateSort($value)
 * @method string getStartRegistrationDate()
 * @method $this withStartRegistrationDate($value)
 * @method string getEndLength()
 * @method $this withEndLength($value)
 */
class QueryAdvancedDomainList extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryArtExtension extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getStartDate()
 * @method $this withStartDate($value)
 * @method string getEndDate()
 * @method $this withEndDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryChangeLogList extends Rpc
{
}

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryContactInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDnsHost extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainAdminDivision extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainByDomainName extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainByInstanceId extends Rpc
{
}

/**
 * @method string getShowDeletingGroup()
 * @method $this withShowDeletingGroup($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainGroupName()
 * @method $this withDomainGroupName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainGroupList extends Rpc
{
}

/**
 * @method string getProductDomainType()
 * @method $this withProductDomainType($value)
 * @method string getCcompany()
 * @method $this withCcompany($value)
 * @method string getOrderKeyType()
 * @method $this withOrderKeyType($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getOrderByType()
 * @method $this withOrderByType($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method array getTag()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getQueryType()
 * @method $this withQueryType($value)
 * @method string getEndExpirationDate()
 * @method $this withEndExpirationDate($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getStartExpirationDate()
 * @method $this withStartExpirationDate($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getEndRegistrationDate()
 * @method $this withEndRegistrationDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStartRegistrationDate()
 * @method $this withStartRegistrationDate($value)
 */
class QueryDomainList extends Rpc
{

    /**
     * @param array $tag
     *
     * @return $this
     */
	public function withTag(array $tag)
	{
	    $this->data['Tag'] = $tag;
		foreach ($tag as $depth1 => $depth1Value) {
			if(isset($depth1Value['Value'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Value'] = $depth1Value['Value'];
			}
			if(isset($depth1Value['Key'])){
				$this->options['query']['Tag.' . ($depth1 + 1) . '.Key'] = $depth1Value['Key'];
			}
		}

		return $this;
    }
}

/**
 * @method string getFetchImage()
 * @method $this withFetchImage($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainRealNameVerificationInfo extends Rpc
{
}

/**
 * @method string getBizId()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class QueryDomainSpecialBizDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainName()
 * @method string getBizType()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class QueryDomainSpecialBizInfoByDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withDomainName($value)
    {
        $this->data['DomainName'] = $value;
        $this->options['form_params']['DomainName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizType($value)
    {
        $this->data['BizType'] = $value;
        $this->options['form_params']['BizType'] = $value;

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDomainSuffix extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryDSRecord extends Rpc
{
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class QueryEmailVerification extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryEnsAssociation extends Rpc
{
}

/**
 * @method string getQualificationType()
 * @method $this withQualificationType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLimit()
 * @method $this withLimit($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryFailingReasonListForQualification extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRealNameVerificationAction()
 * @method $this withRealNameVerificationAction($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryFailReasonForDomainRealNameVerification extends Rpc
{
}

/**
 * @method string getRegistrantProfileID()
 * @method $this withRegistrantProfileID($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryFailReasonForRegistrantProfileRealNameVerification extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryIntlFixedPriceOrderList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryLocalEnsAssociation extends Rpc
{
}

/**
 * @method string getAuditRecordId()
 * @method $this withAuditRecordId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryOperationAuditInfoDetail extends Rpc
{
}

/**
 * @method string getAuditStatus()
 * @method $this withAuditStatus($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getAuditType()
 * @method $this withAuditType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryOperationAuditInfoList extends Rpc
{
}

/**
 * @method string getQualificationType()
 * @method $this withQualificationType($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryQualificationDetail extends Rpc
{
}

/**
 * @method string getFetchImage()
 * @method $this withFetchImage($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryRegistrantProfileRealNameVerificationInfo extends Rpc
{
}

/**
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getRealNameStatus()
 * @method $this withRealNameStatus($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getRegistrantProfileType()
 * @method $this withRegistrantProfileType($value)
 * @method string getDefaultRegistrantProfile()
 * @method $this withDefaultRegistrantProfile($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class QueryRegistrantProfiles extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryServerLock extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getTaskDetailNoCursor()
 * @method $this withTaskDetailNoCursor($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainNameCursor()
 * @method $this withDomainNameCursor($value)
 */
class QueryTaskDetailHistory extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getTaskStatus()
 * @method $this withTaskStatus($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getTaskNo()
 * @method $this withTaskNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryTaskDetailList extends Rpc
{
}

/**
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getBeginCreateTime()
 * @method $this withBeginCreateTime($value)
 * @method string getTaskNoCursor()
 * @method $this withTaskNoCursor($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getCreateTimeCursor()
 * @method $this withCreateTimeCursor($value)
 */
class QueryTaskInfoHistory extends Rpc
{
}

/**
 * @method string getEndCreateTime()
 * @method $this withEndCreateTime($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getBeginCreateTime()
 * @method $this withBeginCreateTime($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryTaskList extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryTransferInByInstanceId extends Rpc
{
}

/**
 * @method string getSubmissionStartDate()
 * @method $this withSubmissionStartDate($value)
 * @method string getSubmissionEndDate()
 * @method $this withSubmissionEndDate($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getPageNum()
 * @method $this withPageNum($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getSimpleTransferInStatus()
 * @method $this withSimpleTransferInStatus($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryTransferInList extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class QueryTransferOutInfo extends Rpc
{
}

/**
 * @method string getIdentityCredentialType()
 * @method $this withIdentityCredentialType($value)
 * @method string getRegistrantProfileID()
 * @method $this withRegistrantProfileID($value)
 * @method string getIdentityCredential()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 */
class RegistrantProfileRealNameVerification extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityCredential($value)
    {
        $this->data['IdentityCredential'] = $value;
        $this->options['form_params']['IdentityCredential'] = $value;

        return $this;
    }
}

/**
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class ResendEmailVerification extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class ResetQualificationVerification extends Rpc
{
}

/**
 * @method string getRemark()
 * @method $this withRemark($value)
 * @method string getInstanceIds()
 * @method $this withInstanceIds($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchDomainRemark extends Rpc
{
}

/**
 * @method array getDomainNames()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchTaskForApplyQuickTransferOutOpenly extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param array $domainNames
     *
     * @return $this
     */
	public function withDomainNames(array $domainNames)
	{
	    $this->data['DomainNames'] = $domainNames;
		foreach ($domainNames as $i => $iValue) {
			$this->options['query']['DomainNames.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getOrderActivateParam()
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderActivate extends Rpc
{

    /**
     * @param array $orderActivateParam
     *
     * @return $this
     */
	public function withOrderActivateParam(array $orderActivateParam)
	{
	    $this->data['OrderActivateParam'] = $orderActivateParam;
		foreach ($orderActivateParam as $depth1 => $depth1Value) {
			if(isset($depth1Value['Country'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Country'] = $depth1Value['Country'];
			}
			if(isset($depth1Value['SubscriptionDuration'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.SubscriptionDuration'] = $depth1Value['SubscriptionDuration'];
			}
			if(isset($depth1Value['PermitPremiumActivation'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.PermitPremiumActivation'] = $depth1Value['PermitPremiumActivation'];
			}
			if(isset($depth1Value['City'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.City'] = $depth1Value['City'];
			}
			if(isset($depth1Value['Dns2'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Dns2'] = $depth1Value['Dns2'];
			}
			if(isset($depth1Value['Dns1'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Dns1'] = $depth1Value['Dns1'];
			}
			if(isset($depth1Value['RegistrantProfileId'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantProfileId'] = $depth1Value['RegistrantProfileId'];
			}
			if(isset($depth1Value['AliyunDns'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.AliyunDns'] = $depth1Value['AliyunDns'];
			}
			if(isset($depth1Value['ZhCity'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhCity'] = $depth1Value['ZhCity'];
			}
			if(isset($depth1Value['ResourceGroupId'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ResourceGroupId'] = $depth1Value['ResourceGroupId'];
			}
			if(isset($depth1Value['TelExt'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.TelExt'] = $depth1Value['TelExt'];
			}
			if(isset($depth1Value['ZhRegistrantName'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhRegistrantName'] = $depth1Value['ZhRegistrantName'];
			}
			if(isset($depth1Value['Province'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Province'] = $depth1Value['Province'];
			}
			if(isset($depth1Value['PostalCode'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.PostalCode'] = $depth1Value['PostalCode'];
			}
			if(isset($depth1Value['Email'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Email'] = $depth1Value['Email'];
			}
			if(isset($depth1Value['ZhRegistrantOrganization'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhRegistrantOrganization'] = $depth1Value['ZhRegistrantOrganization'];
			}
			if(isset($depth1Value['Address'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Address'] = $depth1Value['Address'];
			}
			if(isset($depth1Value['TelArea'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.TelArea'] = $depth1Value['TelArea'];
			}
			if(isset($depth1Value['DomainName'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
			}
			if(isset($depth1Value['RegistrantType'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantType'] = $depth1Value['RegistrantType'];
			}
			if(isset($depth1Value['ZhAddress'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhAddress'] = $depth1Value['ZhAddress'];
			}
			if(isset($depth1Value['Telephone'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.Telephone'] = $depth1Value['Telephone'];
			}
			if(isset($depth1Value['TrademarkDomainActivation'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.TrademarkDomainActivation'] = $depth1Value['TrademarkDomainActivation'];
			}
			if(isset($depth1Value['ZhProvince'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.ZhProvince'] = $depth1Value['ZhProvince'];
			}
			if(isset($depth1Value['RegistrantOrganization'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantOrganization'] = $depth1Value['RegistrantOrganization'];
			}
			if(isset($depth1Value['EnableDomainProxy'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.EnableDomainProxy'] = $depth1Value['EnableDomainProxy'];
			}
			if(isset($depth1Value['RegistrantName'])){
				$this->options['query']['OrderActivateParam.' . ($depth1 + 1) . '.RegistrantName'] = $depth1Value['RegistrantName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method array getOrderRedeemParam()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderRedeem extends Rpc
{

    /**
     * @param array $orderRedeemParam
     *
     * @return $this
     */
	public function withOrderRedeemParam(array $orderRedeemParam)
	{
	    $this->data['OrderRedeemParam'] = $orderRedeemParam;
		foreach ($orderRedeemParam as $depth1 => $depth1Value) {
			if(isset($depth1Value['CurrentExpirationDate'])){
				$this->options['query']['OrderRedeemParam.' . ($depth1 + 1) . '.CurrentExpirationDate'] = $depth1Value['CurrentExpirationDate'];
			}
			if(isset($depth1Value['DomainName'])){
				$this->options['query']['OrderRedeemParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
			}
		}

		return $this;
    }
}

/**
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getOrderRenewParam()
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderRenew extends Rpc
{

    /**
     * @param array $orderRenewParam
     *
     * @return $this
     */
	public function withOrderRenewParam(array $orderRenewParam)
	{
	    $this->data['OrderRenewParam'] = $orderRenewParam;
		foreach ($orderRenewParam as $depth1 => $depth1Value) {
			if(isset($depth1Value['SubscriptionDuration'])){
				$this->options['query']['OrderRenewParam.' . ($depth1 + 1) . '.SubscriptionDuration'] = $depth1Value['SubscriptionDuration'];
			}
			if(isset($depth1Value['CurrentExpirationDate'])){
				$this->options['query']['OrderRenewParam.' . ($depth1 + 1) . '.CurrentExpirationDate'] = $depth1Value['CurrentExpirationDate'];
			}
			if(isset($depth1Value['DomainName'])){
				$this->options['query']['OrderRenewParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
			}
		}

		return $this;
    }
}

/**
 * @method array getOrderTransferParam()
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveBatchTaskForCreatingOrderTransfer extends Rpc
{

    /**
     * @param array $orderTransferParam
     *
     * @return $this
     */
	public function withOrderTransferParam(array $orderTransferParam)
	{
	    $this->data['OrderTransferParam'] = $orderTransferParam;
		foreach ($orderTransferParam as $depth1 => $depth1Value) {
			if(isset($depth1Value['PermitPremiumTransfer'])){
				$this->options['query']['OrderTransferParam.' . ($depth1 + 1) . '.PermitPremiumTransfer'] = $depth1Value['PermitPremiumTransfer'];
			}
			if(isset($depth1Value['AuthorizationCode'])){
				$this->options['query']['OrderTransferParam.' . ($depth1 + 1) . '.AuthorizationCode'] = $depth1Value['AuthorizationCode'];
			}
			if(isset($depth1Value['RegistrantProfileId'])){
				$this->options['query']['OrderTransferParam.' . ($depth1 + 1) . '.RegistrantProfileId'] = $depth1Value['RegistrantProfileId'];
			}
			if(isset($depth1Value['DomainName'])){
				$this->options['query']['OrderTransferParam.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
			}
		}

		return $this;
    }
}

/**
 * @method array getDomainName()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveBatchTaskForDomainNameProxyService extends Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDomainNames()
 * @method $this withDomainNames($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchTaskForGenerateDomainCertificate extends Rpc
{
}

/**
 * @method array getDomainName()
 * @method string getAliyunDns()
 * @method $this withAliyunDns($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method array getDomainNameServer()
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchTaskForModifyingDomainDns extends Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param array $domainNameServer
     *
     * @return $this
     */
	public function withDomainNameServer(array $domainNameServer)
	{
	    $this->data['DomainNameServer'] = $domainNameServer;
		foreach ($domainNameServer as $i => $iValue) {
			$this->options['query']['DomainNameServer.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getDomains()
 * @method string getContactTemplateId()
 * @method $this withContactTemplateId($value)
 */
class SaveBatchTaskForReserveDropListDomain extends Rpc
{

    /**
     * @param array $domains
     *
     * @return $this
     */
	public function withDomains(array $domains)
	{
	    $this->data['Domains'] = $domains;
		foreach ($domains as $depth1 => $depth1Value) {
			if(isset($depth1Value['Dns2'])){
				$this->options['query']['Domains.' . ($depth1 + 1) . '.Dns2'] = $depth1Value['Dns2'];
			}
			if(isset($depth1Value['Dns1'])){
				$this->options['query']['Domains.' . ($depth1 + 1) . '.Dns1'] = $depth1Value['Dns1'];
			}
			if(isset($depth1Value['DomainName'])){
				$this->options['query']['Domains.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
			}
		}

		return $this;
    }
}

/**
 * @method array getDomainName()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveBatchTaskForTransferProhibitionLock extends Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method array getDomainName()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveBatchTaskForUpdateProhibitionLock extends Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method array getDomainName()
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 */
class SaveBatchTaskForUpdatingContactInfoByNewContact extends Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method array getDomainName()
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveBatchTaskForUpdatingContactInfoByRegistrantProfileId extends Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDomainGroupName()
 * @method $this withDomainGroupName($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveDomainGroup extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getRegistrantProfileType()
 * @method $this withRegistrantProfileType($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getDefaultRegistrantProfile()
 * @method $this withDefaultRegistrantProfile($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 */
class SaveRegistrantProfile extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getIdentityCredentialType()
 * @method $this withIdentityCredentialType($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getIdentityCredential()
 * @method $this withIdentityCredential($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getRegistrantProfileType()
 * @method $this withRegistrantProfileType($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 */
class SaveRegistrantProfileRealNameVerification extends Rpc
{
}

/**
 * @method string getKeyTag()
 * @method $this withKeyTag($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDigestType()
 * @method $this withDigestType($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class SaveSingleTaskForAddingDSRecord extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForApplyQuickTransferOutOpenly extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForApprovingTransferOut extends Rpc
{
}

/**
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForAssociatingEns extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForCancelingTransferIn extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForCancelingTransferOut extends Rpc
{
}

/**
 * @method array getIp()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDnsName()
 * @method $this withDnsName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForCreatingDnsHost extends Rpc
{

    /**
     * @param array $ip
     *
     * @return $this
     */
	public function withIp(array $ip)
	{
	    $this->data['Ip'] = $ip;
		foreach ($ip as $i => $iValue) {
			$this->options['query']['Ip.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getDns2()
 * @method $this withDns2($value)
 * @method string getDns1()
 * @method $this withDns1($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 * @method string getSubscriptionDuration()
 * @method $this withSubscriptionDuration($value)
 * @method string getPermitPremiumActivation()
 * @method $this withPermitPremiumActivation($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getAliyunDns()
 * @method $this withAliyunDns($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getTrademarkDomainActivation()
 * @method $this withTrademarkDomainActivation($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getEnableDomainProxy()
 * @method $this withEnableDomainProxy($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class SaveSingleTaskForCreatingOrderActivate extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getCurrentExpirationDate()
 * @method $this withCurrentExpirationDate($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveSingleTaskForCreatingOrderRedeem extends Rpc
{
}

/**
 * @method string getSubscriptionDuration()
 * @method $this withSubscriptionDuration($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getCurrentExpirationDate()
 * @method $this withCurrentExpirationDate($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveSingleTaskForCreatingOrderRenew extends Rpc
{
}

/**
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getCouponNo()
 * @method $this withCouponNo($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUseCoupon()
 * @method $this withUseCoupon($value)
 * @method string getPermitPremiumTransfer()
 * @method $this withPermitPremiumTransfer($value)
 * @method string getPromotionNo()
 * @method $this withPromotionNo($value)
 * @method string getAuthorizationCode()
 * @method $this withAuthorizationCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getUsePromotion()
 * @method $this withUsePromotion($value)
 */
class SaveSingleTaskForCreatingOrderTransfer extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDnsName()
 * @method $this withDnsName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForDeletingDnsHost extends Rpc
{
}

/**
 * @method string getKeyTag()
 * @method $this withKeyTag($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForDeletingDSRecord extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForDisassociatingEns extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveSingleTaskForDomainNameProxyService extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForGenerateDomainCertificate extends Rpc
{
}

/**
 * @method array getIp()
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getDnsName()
 * @method $this withDnsName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForModifyingDnsHost extends Rpc
{

    /**
     * @param array $ip
     *
     * @return $this
     */
	public function withIp(array $ip)
	{
	    $this->data['Ip'] = $ip;
		foreach ($ip as $i => $iValue) {
			$this->options['query']['Ip.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getKeyTag()
 * @method $this withKeyTag($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getDigestType()
 * @method $this withDigestType($value)
 * @method string getDigest()
 * @method $this withDigest($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getAlgorithm()
 * @method $this withAlgorithm($value)
 */
class SaveSingleTaskForModifyingDSRecord extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForQueryingTransferAuthorizationCode extends Rpc
{
}

/**
 * @method string getDns2()
 * @method $this withDns2($value)
 * @method string getDns1()
 * @method $this withDns1($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getContactTemplateId()
 * @method $this withContactTemplateId($value)
 */
class SaveSingleTaskForReserveDropListDomain extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getSubject()
 * @method $this withSubject($value)
 * @method string getTitle()
 * @method $this withTitle($value)
 * @method string getDateOrPeriod()
 * @method $this withDateOrPeriod($value)
 * @method string getReference()
 * @method $this withReference($value)
 * @method string getFeatures()
 * @method $this withFeatures($value)
 * @method string getInscriptionsAndMarkings()
 * @method $this withInscriptionsAndMarkings($value)
 * @method string getObjectType()
 * @method $this withObjectType($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getMaker()
 * @method $this withMaker($value)
 * @method string getMaterialsAndTechniques()
 * @method $this withMaterialsAndTechniques($value)
 * @method string getDimensions()
 * @method $this withDimensions($value)
 */
class SaveSingleTaskForSaveArtExtension extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForSynchronizingDnsHost extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForSynchronizingDSRecord extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveSingleTaskForTransferProhibitionLock extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class SaveSingleTaskForUpdateProhibitionLock extends Rpc
{
}

/**
 * @method string getContactType()
 * @method $this withContactType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getAddTransferLock()
 * @method $this withAddTransferLock($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveSingleTaskForUpdatingContactInfo extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveTaskForSubmittingDomainDelete extends Rpc
{
}

/**
 * @method string getIdentityCredentialType()
 * @method $this withIdentityCredentialType($value)
 * @method string getIdentityCredential()
 * @method array getDomainName()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 */
class SaveTaskForSubmittingDomainRealNameVerificationByIdentityCredential extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityCredential($value)
    {
        $this->data['IdentityCredential'] = $value;
        $this->options['form_params']['IdentityCredential'] = $value;

        return $this;
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveTaskForSubmittingDomainRealNameVerificationByRegistrantProfileID extends Rpc
{
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getIdentityCredentialType()
 * @method $this withIdentityCredentialType($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getIdentityCredential()
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method array getDomainName()
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getIdentityCredentialNo()
 * @method $this withIdentityCredentialNo($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 */
class SaveTaskForUpdatingRegistrantInfoByIdentityCredential extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withIdentityCredential($value)
    {
        $this->data['IdentityCredential'] = $value;
        $this->options['form_params']['IdentityCredential'] = $value;

        return $this;
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method array getDomainName()
 * @method string getTransferOutProhibited()
 * @method $this withTransferOutProhibited($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SaveTaskForUpdatingRegistrantInfoByRegistrantProfileID extends Rpc
{

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getProductDomainType()
 * @method $this withProductDomainType($value)
 * @method string getExcluded()
 * @method $this withExcluded($value)
 * @method string getStartLength()
 * @method $this withStartLength($value)
 * @method string getResourceGroupId()
 * @method $this withResourceGroupId($value)
 * @method string getExcludedSuffix()
 * @method $this withExcludedSuffix($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getExcludedPrefix()
 * @method $this withExcludedPrefix($value)
 * @method string getKeyWord()
 * @method $this withKeyWord($value)
 * @method string getEndExpirationDate()
 * @method $this withEndExpirationDate($value)
 * @method string getSuffixs()
 * @method $this withSuffixs($value)
 * @method string getStartExpirationDate()
 * @method $this withStartExpirationDate($value)
 * @method string getDomainStatus()
 * @method $this withDomainStatus($value)
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getKeyWordSuffix()
 * @method $this withKeyWordSuffix($value)
 * @method string getScrollId()
 * @method $this withScrollId($value)
 * @method string getKeyWordPrefix()
 * @method $this withKeyWordPrefix($value)
 * @method string getTradeType()
 * @method $this withTradeType($value)
 * @method string getEndRegistrationDate()
 * @method $this withEndRegistrationDate($value)
 * @method string getForm()
 * @method $this withForm($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getStartRegistrationDate()
 * @method $this withStartRegistrationDate($value)
 * @method string getEndLength()
 * @method $this withEndLength($value)
 */
class ScrollDomainList extends Rpc
{
}

/**
 * @method string getRegistrantProfileId()
 * @method $this withRegistrantProfileId($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class SetDefaultRegistrantProfile extends Rpc
{
}

/**
 * @method string getInstanceId()
 * @method $this withInstanceId($value)
 * @method string getOperation()
 * @method $this withOperation($value)
 */
class SetupDomainAutoRenew extends Rpc
{
}

/**
 * @method string getCredentials()
 * @method string getExtend()
 * @method string getBizId()
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 */
class SubmitDomainSpecialBizCredentials extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCredentials($value)
    {
        $this->data['Credentials'] = $value;
        $this->options['form_params']['Credentials'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withExtend($value)
    {
        $this->data['Extend'] = $value;
        $this->options['form_params']['Extend'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withBizId($value)
    {
        $this->data['BizId'] = $value;
        $this->options['form_params']['BizId'] = $value;

        return $this;
    }
}

/**
 * @method string getSendIfExist()
 * @method $this withSendIfExist($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 */
class SubmitEmailVerification extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getAuditInfo()
 * @method $this withAuditInfo($value)
 * @method string getAuditType()
 * @method $this withAuditType($value)
 * @method string getId()
 * @method $this withId($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SubmitOperationAuditInfo extends Rpc
{
}

/**
 * @method string getCredentials()
 * @method $this withCredentials($value)
 * @method string getAuditRecordId()
 * @method $this withAuditRecordId($value)
 * @method string getRegType()
 * @method $this withRegType($value)
 * @method string getAuditType()
 * @method $this withAuditType($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class SubmitOperationCredentials extends Rpc
{
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TransferInCheckMailToken extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTransferAuthorizationCode()
 * @method $this withTransferAuthorizationCode($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TransferInReenterTransferAuthorizationCode extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TransferInRefetchWhoisEmail extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class TransferInResendMailToken extends Rpc
{
}

/**
 * @method string getFileToUpload()
 * @method string getReplace()
 * @method $this withReplace($value)
 * @method array getDomainName()
 * @method string getDomainGroupId()
 * @method $this withDomainGroupId($value)
 * @method string getDataSource()
 * @method $this withDataSource($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class UpdateDomainToDomainGroup extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withFileToUpload($value)
    {
        $this->data['FileToUpload'] = $value;
        $this->options['form_params']['FileToUpload'] = $value;

        return $this;
    }

    /**
     * @param array $domainName
     *
     * @return $this
     */
	public function withDomainName(array $domainName)
	{
	    $this->data['DomainName'] = $domainName;
		foreach ($domainName as $i => $iValue) {
			$this->options['query']['DomainName.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getCountry()
 * @method $this withCountry($value)
 * @method string getCity()
 * @method $this withCity($value)
 * @method string getZhCity()
 * @method $this withZhCity($value)
 * @method string getTelExt()
 * @method $this withTelExt($value)
 * @method string getProvince()
 * @method $this withProvince($value)
 * @method string getZhRegistrantName()
 * @method $this withZhRegistrantName($value)
 * @method string getPostalCode()
 * @method $this withPostalCode($value)
 * @method string getLang()
 * @method $this withLang($value)
 * @method string getEmail()
 * @method $this withEmail($value)
 * @method string getZhRegistrantOrganization()
 * @method $this withZhRegistrantOrganization($value)
 * @method string getAddress()
 * @method $this withAddress($value)
 * @method string getTelArea()
 * @method $this withTelArea($value)
 * @method string getZhAddress()
 * @method $this withZhAddress($value)
 * @method string getRegistrantType()
 * @method $this withRegistrantType($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getTelephone()
 * @method $this withTelephone($value)
 * @method string getZhProvince()
 * @method $this withZhProvince($value)
 * @method string getRegistrantOrganization()
 * @method $this withRegistrantOrganization($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getRegistrantName()
 * @method $this withRegistrantName($value)
 */
class VerifyContactField extends Rpc
{
}

/**
 * @method string getToken()
 * @method $this withToken($value)
 * @method string getUserClientIp()
 * @method $this withUserClientIp($value)
 * @method string getLang()
 * @method $this withLang($value)
 */
class VerifyEmail extends Rpc
{
}
