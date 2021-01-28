<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V3\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying keyword recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.ApplyRecommendationOperation.KeywordParameters</code>
 */
class KeywordParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * The ad group resource to add keyword to. This is a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 1;</code>
     */
    protected $ad_group = null;
    /**
     * The match type of the keyword. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 2;</code>
     */
    protected $match_type = 0;
    /**
     * Optional, CPC bid to set for the keyword. If not set, keyword will use
     * bid based on bidding strategy used by target ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_micros = 3;</code>
     */
    protected $cpc_bid_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The ad group resource to add keyword to. This is a required field.
     *     @type int $match_type
     *           The match type of the keyword. This is a required field.
     *     @type \Google\Protobuf\Int64Value $cpc_bid_micros
     *           Optional, CPC bid to set for the keyword. If not set, keyword will use
     *           bid based on bidding strategy used by target ad group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ad group resource to add keyword to. This is a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return isset($this->ad_group) ? $this->ad_group : null;
    }

    public function hasAdGroup()
    {
        return isset($this->ad_group);
    }

    public function clearAdGroup()
    {
        unset($this->ad_group);
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * The ad group resource to add keyword to. This is a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 1;</code>
     * @return string|null
     */
    public function getAdGroupUnwrapped()
    {
        return $this->readWrapperValue("ad_group");
    }

    /**
     * The ad group resource to add keyword to. This is a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The ad group resource to add keyword to. This is a required field.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group", $var);
        return $this;}

    /**
     * The match type of the keyword. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 2;</code>
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The match type of the keyword. This is a required field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\KeywordMatchTypeEnum\KeywordMatchType::class);
        $this->match_type = $var;

        return $this;
    }

    /**
     * Optional, CPC bid to set for the keyword. If not set, keyword will use
     * bid based on bidding strategy used by target ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_micros = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCpcBidMicros()
    {
        return isset($this->cpc_bid_micros) ? $this->cpc_bid_micros : null;
    }

    public function hasCpcBidMicros()
    {
        return isset($this->cpc_bid_micros);
    }

    public function clearCpcBidMicros()
    {
        unset($this->cpc_bid_micros);
    }

    /**
     * Returns the unboxed value from <code>getCpcBidMicros()</code>

     * Optional, CPC bid to set for the keyword. If not set, keyword will use
     * bid based on bidding strategy used by target ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_micros = 3;</code>
     * @return int|string|null
     */
    public function getCpcBidMicrosUnwrapped()
    {
        return $this->readWrapperValue("cpc_bid_micros");
    }

    /**
     * Optional, CPC bid to set for the keyword. If not set, keyword will use
     * bid based on bidding strategy used by target ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_micros = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCpcBidMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cpc_bid_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Optional, CPC bid to set for the keyword. If not set, keyword will use
     * bid based on bidding strategy used by target ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cpc_bid_micros = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCpcBidMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("cpc_bid_micros", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordParameters::class, \Google\Ads\GoogleAds\V3\Services\ApplyRecommendationOperation_KeywordParameters::class);

