<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/campaign.proto

namespace Google\Ads\GoogleAds\V4\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Campaign-level settings for App Campaigns.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.Campaign.AppCampaignSetting</code>
 */
class AppCampaignSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     */
    protected $bidding_strategy_goal_type = 0;
    /**
     * Immutable. A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $app_id = null;
    /**
     * Immutable. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $app_store = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $bidding_strategy_goal_type
     *           Represents the goal which the bidding strategy of this app campaign
     *           should optimize towards.
     *     @type \Google\Protobuf\StringValue $app_id
     *           Immutable. A string that uniquely identifies a mobile application.
     *     @type int $app_store
     *           Immutable. The application store that distributes this specific app.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     * @return int
     */
    public function getBiddingStrategyGoalType()
    {
        return $this->bidding_strategy_goal_type;
    }

    /**
     * Represents the goal which the bidding strategy of this app campaign
     * should optimize towards.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AppCampaignBiddingStrategyGoalTypeEnum.AppCampaignBiddingStrategyGoalType bidding_strategy_goal_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBiddingStrategyGoalType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\AppCampaignBiddingStrategyGoalTypeEnum\AppCampaignBiddingStrategyGoalType::class);
        $this->bidding_strategy_goal_type = $var;

        return $this;
    }

    /**
     * Immutable. A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getAppId()
    {
        return isset($this->app_id) ? $this->app_id : null;
    }

    public function hasAppId()
    {
        return isset($this->app_id);
    }

    public function clearAppId()
    {
        unset($this->app_id);
    }

    /**
     * Returns the unboxed value from <code>getAppId()</code>

     * Immutable. A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string|null
     */
    public function getAppIdUnwrapped()
    {
        return $this->readWrapperValue("app_id");
    }

    /**
     * Immutable. A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. A string that uniquely identifies a mobile application.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue app_id = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string|null $var
     * @return $this
     */
    public function setAppIdUnwrapped($var)
    {
        $this->writeWrapperValue("app_id", $var);
        return $this;}

    /**
     * Immutable. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * Immutable. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.AppCampaignAppStoreEnum.AppCampaignAppStore app_store = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\AppCampaignAppStoreEnum\AppCampaignAppStore::class);
        $this->app_store = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppCampaignSetting::class, \Google\Ads\GoogleAds\V4\Resources\Campaign_AppCampaignSetting::class);

