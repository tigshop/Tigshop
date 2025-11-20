<?php

namespace AlibabaCloud\Domain\V20180208;

use AlibabaCloud\Client\Resolver\ApiResolver;

/**
 * @method AcceptDemand acceptDemand(array $options = [])
 * @method BidDomain bidDomain(array $options = [])
 * @method ChangeAuction changeAuction(array $options = [])
 * @method CheckDomainStatus checkDomainStatus(array $options = [])
 * @method CheckSelectedDomainStatus checkSelectedDomainStatus(array $options = [])
 * @method CreateFixedPriceDemandOrder createFixedPriceDemandOrder(array $options = [])
 * @method CreateFixedPriceSelectedOrder createFixedPriceSelectedOrder(array $options = [])
 * @method FailDemand failDemand(array $options = [])
 * @method FinishDemand finishDemand(array $options = [])
 * @method GetIntlDomainDownloadUrl getIntlDomainDownloadUrl(array $options = [])
 * @method GetReserveDomainUrl getReserveDomainUrl(array $options = [])
 * @method PurchaseIntlDomain purchaseIntlDomain(array $options = [])
 * @method QueryAuctionDetail queryAuctionDetail(array $options = [])
 * @method QueryAuctions queryAuctions(array $options = [])
 * @method QueryBidRecords queryBidRecords(array $options = [])
 * @method QueryBookingDomainInfo queryBookingDomainInfo(array $options = [])
 * @method QueryBrokerDemand queryBrokerDemand(array $options = [])
 * @method QueryBrokerDemandRecord queryBrokerDemandRecord(array $options = [])
 * @method QueryDomainTransferStatus queryDomainTransferStatus(array $options = [])
 * @method QueryExchangeRate queryExchangeRate(array $options = [])
 * @method QueryExportDomainExpireSnatchs queryExportDomainExpireSnatchs(array $options = [])
 * @method QueryPurchasedDomains queryPurchasedDomains(array $options = [])
 * @method RecordDemand recordDemand(array $options = [])
 * @method RefuseDemand refuseDemand(array $options = [])
 * @method RequestPayDemand requestPayDemand(array $options = [])
 * @method ReserveDomain reserveDomain(array $options = [])
 * @method ReserveIntlDomain reserveIntlDomain(array $options = [])
 * @method SelectedDomainList selectedDomainList(array $options = [])
 * @method SubmitPurchaseInfo submitPurchaseInfo(array $options = [])
 * @method UpdatePartnerReservePrice updatePartnerReservePrice(array $options = [])
 */
class DomainApiResolver extends ApiResolver
{
}

class Rpc extends \AlibabaCloud\Client\Resolver\Rpc
{
    /** @var string */
    public $product = 'Domain';

    /** @var string */
    public $version = '2018-02-08';

    /** @var string */
    public $method = 'POST';

    /** @var string */
    public $serviceCode = 'domain';
}

/**
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class AcceptDemand extends Rpc
{
}

/**
 * @method string getAuctionId()
 * @method string getMaxBid()
 * @method string getCurrency()
 */
class BidDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuctionId($value)
    {
        $this->data['AuctionId'] = $value;
        $this->options['form_params']['AuctionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withMaxBid($value)
    {
        $this->data['MaxBid'] = $value;
        $this->options['form_params']['MaxBid'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrency($value)
    {
        $this->data['Currency'] = $value;
        $this->options['form_params']['Currency'] = $value;

        return $this;
    }
}

/**
 * @method array getAuctionList()
 */
class ChangeAuction extends Rpc
{

    /**
     * @param array $auctionList
     *
     * @return $this
     */
	public function withAuctionList(array $auctionList)
	{
	    $this->data['AuctionList'] = $auctionList;
		foreach ($auctionList as $depth1 => $depth1Value) {
			if(isset($depth1Value['Winner'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.Winner'] = $depth1Value['Winner'];
			}
			if(isset($depth1Value['ReserveRange'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.ReserveRange'] = $depth1Value['ReserveRange'];
			}
			if(isset($depth1Value['DomainName'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.DomainName'] = $depth1Value['DomainName'];
			}
			if(isset($depth1Value['EndTime'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.EndTime'] = $depth1Value['EndTime'];
			}
			if(isset($depth1Value['TimeLeft'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.TimeLeft'] = $depth1Value['TimeLeft'];
			}
			foreach ($depth1Value['BidRecords'] as $depth2 => $depth2Value) {
				if(isset($depth2Value['CreateTime'])){
					$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.BidRecords.' . ($depth2 + 1) . '.CreateTime'] = $depth2Value['CreateTime'];
				}
				if(isset($depth2Value['Price'])){
					$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.BidRecords.' . ($depth2 + 1) . '.Price'] = $depth2Value['Price'];
				}
				if(isset($depth2Value['UserId'])){
					$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.BidRecords.' . ($depth2 + 1) . '.UserId'] = $depth2Value['UserId'];
				}
			}
			if(isset($depth1Value['IsReserve'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.IsReserve'] = $depth1Value['IsReserve'];
			}
			if(isset($depth1Value['Status'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.Status'] = $depth1Value['Status'];
			}
			if(isset($depth1Value['WinnerPrice'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.WinnerPrice'] = $depth1Value['WinnerPrice'];
			}
			if(isset($depth1Value['ReservePrice'])){
				$this->options['form_params']['AuctionList.' . ($depth1 + 1) . '.ReservePrice'] = $depth1Value['ReservePrice'];
			}
		}

		return $this;
    }
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CheckDomainStatus extends Rpc
{

    /** @var string */
    public $method = 'GET';
}

/**
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CheckSelectedDomainStatus extends Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getSource()
 * @method $this withSource($value)
 * @method string getDomain()
 * @method $this withDomain($value)
 */
class CreateFixedPriceDemandOrder extends Rpc
{
}

/**
 * @method string getCode()
 * @method $this withCode($value)
 * @method string getContactId()
 * @method $this withContactId($value)
 * @method string getExpectedPrice()
 * @method $this withExpectedPrice($value)
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getSource()
 * @method $this withSource($value)
 */
class CreateFixedPriceSelectedOrder extends Rpc
{
}

/**
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class FailDemand extends Rpc
{
}

/**
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class FinishDemand extends Rpc
{
}

class GetIntlDomainDownloadUrl extends Rpc
{
}

class GetReserveDomainUrl extends Rpc
{
}

/**
 * @method string getAuctionId()
 * @method string getPrice()
 * @method string getCurrency()
 */
class PurchaseIntlDomain extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuctionId($value)
    {
        $this->data['AuctionId'] = $value;
        $this->options['form_params']['AuctionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPrice($value)
    {
        $this->data['Price'] = $value;
        $this->options['form_params']['Price'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrency($value)
    {
        $this->data['Currency'] = $value;
        $this->options['form_params']['Currency'] = $value;

        return $this;
    }
}

/**
 * @method string getAuctionId()
 */
class QueryAuctionDetail extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuctionId($value)
    {
        $this->data['AuctionId'] = $value;
        $this->options['form_params']['AuctionId'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrentPage()
 * @method string getPageSize()
 * @method string getStatuses()
 * @method string getAuctionEndTimeOrder()
 * @method string getStatus()
 */
class QueryAuctions extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatuses($value)
    {
        $this->data['Statuses'] = $value;
        $this->options['form_params']['Statuses'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuctionEndTimeOrder($value)
    {
        $this->data['AuctionEndTimeOrder'] = $value;
        $this->options['form_params']['AuctionEndTimeOrder'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStatus($value)
    {
        $this->data['Status'] = $value;
        $this->options['form_params']['Status'] = $value;

        return $this;
    }
}

/**
 * @method string getCurrentPage()
 * @method string getAuctionId()
 * @method string getPageSize()
 */
class QueryBidRecords extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withAuctionId($value)
    {
        $this->data['AuctionId'] = $value;
        $this->options['form_params']['AuctionId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }
}

/**
 * @method string getDomainName()
 */
class QueryBookingDomainInfo extends Rpc
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
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 * @method string getStatus()
 * @method $this withStatus($value)
 */
class QueryBrokerDemand extends Rpc
{
}

/**
 * @method string getCurrentPage()
 * @method $this withCurrentPage($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class QueryBrokerDemandRecord extends Rpc
{
}

/**
 * @method string getDomainName()
 */
class QueryDomainTransferStatus extends Rpc
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
}

/**
 * @method string getToCurrency()
 * @method $this withToCurrency($value)
 * @method string getFromCurrency()
 * @method $this withFromCurrency($value)
 */
class QueryExchangeRate extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getCurrentId()
 * @method $this withCurrentId($value)
 * @method string getNextToken()
 * @method $this withNextToken($value)
 * @method string getPageSize()
 * @method $this withPageSize($value)
 * @method string getMaxResults()
 * @method $this withMaxResults($value)
 */
class QueryExportDomainExpireSnatchs extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method string getUpdateTimeOrder()
 * @method string getDomainName()
 * @method string getCurrentPage()
 * @method string getProductType()
 * @method string getOperationStatus()
 * @method string getStartOperationTime()
 * @method string getPageSize()
 * @method string getEndOperationTime()
 * @method string getOpTimeOrder()
 */
class QueryPurchasedDomains extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withUpdateTimeOrder($value)
    {
        $this->data['UpdateTimeOrder'] = $value;
        $this->options['form_params']['UpdateTimeOrder'] = $value;

        return $this;
    }

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
    public function withCurrentPage($value)
    {
        $this->data['CurrentPage'] = $value;
        $this->options['form_params']['CurrentPage'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withProductType($value)
    {
        $this->data['ProductType'] = $value;
        $this->options['form_params']['ProductType'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOperationStatus($value)
    {
        $this->data['OperationStatus'] = $value;
        $this->options['form_params']['OperationStatus'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withStartOperationTime($value)
    {
        $this->data['StartOperationTime'] = $value;
        $this->options['form_params']['StartOperationTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPageSize($value)
    {
        $this->data['PageSize'] = $value;
        $this->options['form_params']['PageSize'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withEndOperationTime($value)
    {
        $this->data['EndOperationTime'] = $value;
        $this->options['form_params']['EndOperationTime'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withOpTimeOrder($value)
    {
        $this->data['OpTimeOrder'] = $value;
        $this->options['form_params']['OpTimeOrder'] = $value;

        return $this;
    }
}

/**
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RecordDemand extends Rpc
{
}

/**
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RefuseDemand extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method $this withDomainName($value)
 * @method string getProduceType()
 * @method $this withProduceType($value)
 * @method string getMessage()
 * @method $this withMessage($value)
 * @method string getPrice()
 * @method $this withPrice($value)
 * @method string getBizId()
 * @method $this withBizId($value)
 */
class RequestPayDemand extends Rpc
{
}

/**
 * @method string getDomainName()
 * @method array getChannels()
 */
class ReserveDomain extends Rpc
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
     * @param array $channels
     *
     * @return $this
     */
	public function withChannels(array $channels)
	{
	    $this->data['Channels'] = $channels;
		foreach ($channels as $i => $iValue) {
			$this->options['form_params']['Channels.' . ($i + 1)] = $iValue;
		}

		return $this;
    }
}

/**
 * @method string getDomainName()
 */
class ReserveIntlDomain extends Rpc
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
}

/**
 * @method string getListDate()
 * @method $this withListDate($value)
 */
class SelectedDomainList extends Rpc
{

    /** @var string */
    public $scheme = 'https';
}

/**
 * @method array getPurchaseProofs()
 * @method string getPurchasePrice()
 * @method string getPurchaseCurrency()
 * @method string getBizId()
 */
class SubmitPurchaseInfo extends Rpc
{

    /** @var string */
    public $scheme = 'https';

    /**
     * @param array $purchaseProofs
     *
     * @return $this
     */
	public function withPurchaseProofs(array $purchaseProofs)
	{
	    $this->data['PurchaseProofs'] = $purchaseProofs;
		foreach ($purchaseProofs as $i => $iValue) {
			$this->options['form_params']['PurchaseProofs.' . ($i + 1)] = $iValue;
		}

		return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchasePrice($value)
    {
        $this->data['PurchasePrice'] = $value;
        $this->options['form_params']['PurchasePrice'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPurchaseCurrency($value)
    {
        $this->data['PurchaseCurrency'] = $value;
        $this->options['form_params']['PurchaseCurrency'] = $value;

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
 * @method string getPartnerType()
 * @method string getDomainName()
 * @method string getBiddingId()
 * @method string getReservePrice()
 */
class UpdatePartnerReservePrice extends Rpc
{

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withPartnerType($value)
    {
        $this->data['PartnerType'] = $value;
        $this->options['form_params']['PartnerType'] = $value;

        return $this;
    }

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
    public function withBiddingId($value)
    {
        $this->data['BiddingId'] = $value;
        $this->options['form_params']['BiddingId'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function withReservePrice($value)
    {
        $this->data['ReservePrice'] = $value;
        $this->options['form_params']['ReservePrice'] = $value;

        return $this;
    }
}
