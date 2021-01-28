<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Metadata for Store Sales Direct.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.StoreSalesMetadata</code>
 */
class StoreSalesMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * This is the fraction of all transactions that are identifiable (i.e.,
     * associated with any form of customer information).
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue loyalty_fraction = 1;</code>
     */
    protected $loyalty_fraction = null;
    /**
     * This is the ratio of sales being uploaded compared to the overall sales
     * that can be associated with a customer. Required.
     * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     * upload half the sales that you are able to associate with a customer, this
     * would be 0.5.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_upload_fraction = 2;</code>
     */
    protected $transaction_upload_fraction = null;
    /**
     * Name of the store sales custom variable key. A predefined key that
     * can be applied to the transaction and then later used for custom
     * segmentation in reporting.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_key = 4;</code>
     */
    protected $custom_key = null;
    /**
     * Metadata for a third party Store Sales upload.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
     */
    protected $third_party_metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $loyalty_fraction
     *           This is the fraction of all transactions that are identifiable (i.e.,
     *           associated with any form of customer information).
     *           Required.
     *           The fraction needs to be between 0 and 1 (excluding 0).
     *     @type \Google\Protobuf\DoubleValue $transaction_upload_fraction
     *           This is the ratio of sales being uploaded compared to the overall sales
     *           that can be associated with a customer. Required.
     *           The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     *           upload half the sales that you are able to associate with a customer, this
     *           would be 0.5.
     *     @type \Google\Protobuf\StringValue $custom_key
     *           Name of the store sales custom variable key. A predefined key that
     *           can be applied to the transaction and then later used for custom
     *           segmentation in reporting.
     *           Accessible only to customers on the allow-list.
     *     @type \Google\Ads\GoogleAds\V5\Common\StoreSalesThirdPartyMetadata $third_party_metadata
     *           Metadata for a third party Store Sales upload.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * This is the fraction of all transactions that are identifiable (i.e.,
     * associated with any form of customer information).
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue loyalty_fraction = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getLoyaltyFraction()
    {
        return isset($this->loyalty_fraction) ? $this->loyalty_fraction : null;
    }

    public function hasLoyaltyFraction()
    {
        return isset($this->loyalty_fraction);
    }

    public function clearLoyaltyFraction()
    {
        unset($this->loyalty_fraction);
    }

    /**
     * Returns the unboxed value from <code>getLoyaltyFraction()</code>

     * This is the fraction of all transactions that are identifiable (i.e.,
     * associated with any form of customer information).
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue loyalty_fraction = 1;</code>
     * @return float|null
     */
    public function getLoyaltyFractionUnwrapped()
    {
        return $this->readWrapperValue("loyalty_fraction");
    }

    /**
     * This is the fraction of all transactions that are identifiable (i.e.,
     * associated with any form of customer information).
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue loyalty_fraction = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setLoyaltyFraction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->loyalty_fraction = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * This is the fraction of all transactions that are identifiable (i.e.,
     * associated with any form of customer information).
     * Required.
     * The fraction needs to be between 0 and 1 (excluding 0).
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue loyalty_fraction = 1;</code>
     * @param float|null $var
     * @return $this
     */
    public function setLoyaltyFractionUnwrapped($var)
    {
        $this->writeWrapperValue("loyalty_fraction", $var);
        return $this;}

    /**
     * This is the ratio of sales being uploaded compared to the overall sales
     * that can be associated with a customer. Required.
     * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     * upload half the sales that you are able to associate with a customer, this
     * would be 0.5.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_upload_fraction = 2;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getTransactionUploadFraction()
    {
        return isset($this->transaction_upload_fraction) ? $this->transaction_upload_fraction : null;
    }

    public function hasTransactionUploadFraction()
    {
        return isset($this->transaction_upload_fraction);
    }

    public function clearTransactionUploadFraction()
    {
        unset($this->transaction_upload_fraction);
    }

    /**
     * Returns the unboxed value from <code>getTransactionUploadFraction()</code>

     * This is the ratio of sales being uploaded compared to the overall sales
     * that can be associated with a customer. Required.
     * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     * upload half the sales that you are able to associate with a customer, this
     * would be 0.5.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_upload_fraction = 2;</code>
     * @return float|null
     */
    public function getTransactionUploadFractionUnwrapped()
    {
        return $this->readWrapperValue("transaction_upload_fraction");
    }

    /**
     * This is the ratio of sales being uploaded compared to the overall sales
     * that can be associated with a customer. Required.
     * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     * upload half the sales that you are able to associate with a customer, this
     * would be 0.5.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_upload_fraction = 2;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setTransactionUploadFraction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->transaction_upload_fraction = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * This is the ratio of sales being uploaded compared to the overall sales
     * that can be associated with a customer. Required.
     * The fraction needs to be between 0 and 1 (excluding 0). For example, if you
     * upload half the sales that you are able to associate with a customer, this
     * would be 0.5.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue transaction_upload_fraction = 2;</code>
     * @param float|null $var
     * @return $this
     */
    public function setTransactionUploadFractionUnwrapped($var)
    {
        $this->writeWrapperValue("transaction_upload_fraction", $var);
        return $this;}

    /**
     * Name of the store sales custom variable key. A predefined key that
     * can be applied to the transaction and then later used for custom
     * segmentation in reporting.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_key = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCustomKey()
    {
        return isset($this->custom_key) ? $this->custom_key : null;
    }

    public function hasCustomKey()
    {
        return isset($this->custom_key);
    }

    public function clearCustomKey()
    {
        unset($this->custom_key);
    }

    /**
     * Returns the unboxed value from <code>getCustomKey()</code>

     * Name of the store sales custom variable key. A predefined key that
     * can be applied to the transaction and then later used for custom
     * segmentation in reporting.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_key = 4;</code>
     * @return string|null
     */
    public function getCustomKeyUnwrapped()
    {
        return $this->readWrapperValue("custom_key");
    }

    /**
     * Name of the store sales custom variable key. A predefined key that
     * can be applied to the transaction and then later used for custom
     * segmentation in reporting.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_key = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCustomKey($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->custom_key = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Name of the store sales custom variable key. A predefined key that
     * can be applied to the transaction and then later used for custom
     * segmentation in reporting.
     * Accessible only to customers on the allow-list.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_key = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCustomKeyUnwrapped($var)
    {
        $this->writeWrapperValue("custom_key", $var);
        return $this;}

    /**
     * Metadata for a third party Store Sales upload.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
     * @return \Google\Ads\GoogleAds\V5\Common\StoreSalesThirdPartyMetadata
     */
    public function getThirdPartyMetadata()
    {
        return isset($this->third_party_metadata) ? $this->third_party_metadata : null;
    }

    public function hasThirdPartyMetadata()
    {
        return isset($this->third_party_metadata);
    }

    public function clearThirdPartyMetadata()
    {
        unset($this->third_party_metadata);
    }

    /**
     * Metadata for a third party Store Sales upload.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v5.common.StoreSalesThirdPartyMetadata third_party_metadata = 3;</code>
     * @param \Google\Ads\GoogleAds\V5\Common\StoreSalesThirdPartyMetadata $var
     * @return $this
     */
    public function setThirdPartyMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V5\Common\StoreSalesThirdPartyMetadata::class);
        $this->third_party_metadata = $var;

        return $this;
    }

}

