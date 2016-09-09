<?php

namespace Easybill\ZUGFeRD\Model\Trade;

use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * Class Agreement
 *
 * @XmlNamespace(uri="urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12", prefix="ram")
 *
 * @package Easybill\ZUGFeRD\Model\Trade
 */
class Agreement
{

    public function __construct(TradeParty $seller, TradeParty $buyer)
    {
        $this->seller = $seller;
        $this->buyer = $buyer;
    }

    /**
     * @var TradeParty
     * @Type("Easybill\ZUGFeRD\Model\Trade\TradeParty")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("SellerTradeParty")
     */
    private $seller;

    /**
     * @var TradeParty
     * @Type("Easybill\ZUGFeRD\Model\Trade\TradeParty")
     * @XmlElement(cdata = false, namespace = "urn:un:unece:uncefact:data:standard:ReusableAggregateBusinessInformationEntity:12")
     * @SerializedName("BuyerTradeParty")
     */
    private $buyer;

    /**
     * @return \Easybill\ZUGFeRD\Model\Trade\TradeParty
     */
    public function getSeller()
    {
        return $this->seller;
    }

    /**
     * @param \Easybill\ZUGFeRD\Model\Trade\TradeParty $seller
     *
     * @return self
     */
    public function setSeller($seller)
    {
        $this->seller = $seller;
        return $this;
    }

    /**
     * @return \Easybill\ZUGFeRD\Model\Trade\TradeParty
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @param \Easybill\ZUGFeRD\Model\Trade\TradeParty $buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
        return $this;
    }



}