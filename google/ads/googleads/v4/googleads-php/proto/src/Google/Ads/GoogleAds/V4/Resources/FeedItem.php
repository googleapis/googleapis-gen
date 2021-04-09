<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/feed_item.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed item.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.FeedItem</code>
 */
class FeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the feed item.
     * Feed item resource names have the form:
     * `customers/{customer_id}/feedItems/{feed_id}~{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The feed to which this feed item belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $feed = null;
    /**
     * Output only. The ID of this feed item.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     */
    protected $start_date_time = null;
    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     */
    protected $end_date_time = null;
    /**
     * The feed item's attribute values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemAttributeValue attribute_values = 6;</code>
     */
    private $attribute_values;
    /**
     * Geo targeting restriction specifies the type of location that can be used
     * for targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GeoTargetingRestrictionEnum.GeoTargetingRestriction geo_targeting_restriction = 7;</code>
     */
    protected $geo_targeting_restriction = 0;
    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.CustomParameter url_custom_parameters = 8;</code>
     */
    private $url_custom_parameters;
    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemStatusEnum.FeedItemStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. List of info about a feed item's validation and approval state for active
     * feed mappings. There will be an entry in the list for each type of feed
     * mapping associated with the feed, e.g. a feed with a sitelink and a call
     * feed mapping would cause every feed item associated with that feed to have
     * an entry in this list for both sitelink and call.
     * This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemPlaceholderPolicyInfo policy_infos = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $policy_infos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the feed item.
     *           Feed item resource names have the form:
     *           `customers/{customer_id}/feedItems/{feed_id}~{feed_item_id}`
     *     @type \Google\Protobuf\StringValue $feed
     *           Immutable. The feed to which this feed item belongs.
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of this feed item.
     *     @type \Google\Protobuf\StringValue $start_date_time
     *           Start time in which this feed item is effective and can begin serving. The
     *           time is in the customer's time zone.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Protobuf\StringValue $end_date_time
     *           End time in which this feed item is no longer effective and will stop
     *           serving. The time is in the customer's time zone.
     *           The format is "YYYY-MM-DD HH:MM:SS".
     *           Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *     @type \Google\Ads\GoogleAds\V4\Resources\FeedItemAttributeValue[]|\Google\Protobuf\Internal\RepeatedField $attribute_values
     *           The feed item's attribute values.
     *     @type int $geo_targeting_restriction
     *           Geo targeting restriction specifies the type of location that can be used
     *           for targeting.
     *     @type \Google\Ads\GoogleAds\V4\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $url_custom_parameters
     *           The list of mappings used to substitute custom parameter tags in a
     *           `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *     @type int $status
     *           Output only. Status of the feed item.
     *           This field is read-only.
     *     @type \Google\Ads\GoogleAds\V4\Resources\FeedItemPlaceholderPolicyInfo[]|\Google\Protobuf\Internal\RepeatedField $policy_infos
     *           Output only. List of info about a feed item's validation and approval state for active
     *           feed mappings. There will be an entry in the list for each type of feed
     *           mapping associated with the feed, e.g. a feed with a sitelink and a call
     *           feed mapping would cause every feed item associated with that feed to have
     *           an entry in this list for both sitelink and call.
     *           This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Resources\FeedItem::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the feed item.
     * Feed item resource names have the form:
     * `customers/{customer_id}/feedItems/{feed_id}~{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the feed item.
     * Feed item resource names have the form:
     * `customers/{customer_id}/feedItems/{feed_id}~{feed_item_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Immutable. The feed to which this feed item belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getFeed()
    {
        return isset($this->feed) ? $this->feed : null;
    }

    public function hasFeed()
    {
        return isset($this->feed);
    }

    public function clearFeed()
    {
        unset($this->feed);
    }

    /**
     * Returns the unboxed value from <code>getFeed()</code>

     * Immutable. The feed to which this feed item belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getFeedUnwrapped()
    {
        return $this->readWrapperValue("feed");
    }

    /**
     * Immutable. The feed to which this feed item belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The feed to which this feed item belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedUnwrapped($var)
    {
        $this->writeWrapperValue("feed", $var);
        return $this;}

    /**
     * Output only. The ID of this feed item.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value|null
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of this feed item.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of this feed item.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of this feed item.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getStartDateTime()
    {
        return isset($this->start_date_time) ? $this->start_date_time : null;
    }

    public function hasStartDateTime()
    {
        return isset($this->start_date_time);
    }

    public function clearStartDateTime()
    {
        unset($this->start_date_time);
    }

    /**
     * Returns the unboxed value from <code>getStartDateTime()</code>

     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @return string|null
     */
    public function getStartDateTimeUnwrapped()
    {
        return $this->readWrapperValue("start_date_time");
    }

    /**
     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Start time in which this feed item is effective and can begin serving. The
     * time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date_time = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setStartDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("start_date_time", $var);
        return $this;}

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getEndDateTime()
    {
        return isset($this->end_date_time) ? $this->end_date_time : null;
    }

    public function hasEndDateTime()
    {
        return isset($this->end_date_time);
    }

    public function clearEndDateTime()
    {
        unset($this->end_date_time);
    }

    /**
     * Returns the unboxed value from <code>getEndDateTime()</code>

     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @return string|null
     */
    public function getEndDateTimeUnwrapped()
    {
        return $this->readWrapperValue("end_date_time");
    }

    /**
     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->end_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * End time in which this feed item is no longer effective and will stop
     * serving. The time is in the customer's time zone.
     * The format is "YYYY-MM-DD HH:MM:SS".
     * Examples: "2018-03-05 09:15:00" or "2018-02-01 14:34:30"
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date_time = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setEndDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("end_date_time", $var);
        return $this;}

    /**
     * The feed item's attribute values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemAttributeValue attribute_values = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttributeValues()
    {
        return $this->attribute_values;
    }

    /**
     * The feed item's attribute values.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemAttributeValue attribute_values = 6;</code>
     * @param \Google\Ads\GoogleAds\V4\Resources\FeedItemAttributeValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttributeValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Resources\FeedItemAttributeValue::class);
        $this->attribute_values = $arr;

        return $this;
    }

    /**
     * Geo targeting restriction specifies the type of location that can be used
     * for targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GeoTargetingRestrictionEnum.GeoTargetingRestriction geo_targeting_restriction = 7;</code>
     * @return int
     */
    public function getGeoTargetingRestriction()
    {
        return $this->geo_targeting_restriction;
    }

    /**
     * Geo targeting restriction specifies the type of location that can be used
     * for targeting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.GeoTargetingRestrictionEnum.GeoTargetingRestriction geo_targeting_restriction = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setGeoTargetingRestriction($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\GeoTargetingRestrictionEnum\GeoTargetingRestriction::class);
        $this->geo_targeting_restriction = $var;

        return $this;
    }

    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.CustomParameter url_custom_parameters = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUrlCustomParameters()
    {
        return $this->url_custom_parameters;
    }

    /**
     * The list of mappings used to substitute custom parameter tags in a
     * `tracking_url_template`, `final_urls`, or `mobile_final_urls`.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.common.CustomParameter url_custom_parameters = 8;</code>
     * @param \Google\Ads\GoogleAds\V4\Common\CustomParameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUrlCustomParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Common\CustomParameter::class);
        $this->url_custom_parameters = $arr;

        return $this;
    }

    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemStatusEnum.FeedItemStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the feed item.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemStatusEnum.FeedItemStatus status = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\FeedItemStatusEnum\FeedItemStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. List of info about a feed item's validation and approval state for active
     * feed mappings. There will be an entry in the list for each type of feed
     * mapping associated with the feed, e.g. a feed with a sitelink and a call
     * feed mapping would cause every feed item associated with that feed to have
     * an entry in this list for both sitelink and call.
     * This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemPlaceholderPolicyInfo policy_infos = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPolicyInfos()
    {
        return $this->policy_infos;
    }

    /**
     * Output only. List of info about a feed item's validation and approval state for active
     * feed mappings. There will be an entry in the list for each type of feed
     * mapping associated with the feed, e.g. a feed with a sitelink and a call
     * feed mapping would cause every feed item associated with that feed to have
     * an entry in this list for both sitelink and call.
     * This field is read-only.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.resources.FeedItemPlaceholderPolicyInfo policy_infos = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V4\Resources\FeedItemPlaceholderPolicyInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPolicyInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Resources\FeedItemPlaceholderPolicyInfo::class);
        $this->policy_infos = $arr;

        return $this;
    }

}

