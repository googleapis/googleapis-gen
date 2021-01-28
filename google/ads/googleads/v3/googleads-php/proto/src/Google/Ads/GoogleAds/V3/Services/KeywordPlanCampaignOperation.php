<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/keyword_plan_campaign_service.proto

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create, update, remove) on a Keyword Plan campaign.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.KeywordPlanCampaignOperation</code>
 */
class KeywordPlanCampaignOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * The FieldMask that determines which resource fields are modified in an
     * update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     */
    protected $update_mask = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The FieldMask that determines which resource fields are modified in an
     *           update.
     *     @type \Google\Ads\GoogleAds\V3\Resources\KeywordPlanCampaign $create
     *           Create operation: No resource name is expected for the new Keyword Plan
     *           campaign.
     *     @type \Google\Ads\GoogleAds\V3\Resources\KeywordPlanCampaign $update
     *           Update operation: The Keyword Plan campaign is expected to have a valid
     *           resource name.
     *     @type string $remove
     *           Remove operation: A resource name for the removed Keyword Plan campaign
     *           is expected, in this format:
     *           `customers/{customer_id}/keywordPlanCampaigns/{keywordPlan_campaign_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Services\KeywordPlanCampaignService::initOnce();
        parent::__construct($data);
    }

    /**
     * The FieldMask that determines which resource fields are modified in an
     * update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The FieldMask that determines which resource fields are modified in an
     * update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Create operation: No resource name is expected for the new Keyword Plan
     * campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.KeywordPlanCampaign create = 1;</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\KeywordPlanCampaign
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    public function hasCreate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new Keyword Plan
     * campaign.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.KeywordPlanCampaign create = 1;</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\KeywordPlanCampaign $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\KeywordPlanCampaign::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Update operation: The Keyword Plan campaign is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.KeywordPlanCampaign update = 2;</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\KeywordPlanCampaign
     */
    public function getUpdate()
    {
        return $this->readOneof(2);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(2);
    }

    /**
     * Update operation: The Keyword Plan campaign is expected to have a valid
     * resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.KeywordPlanCampaign update = 2;</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\KeywordPlanCampaign $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\KeywordPlanCampaign::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed Keyword Plan campaign
     * is expected, in this format:
     * `customers/{customer_id}/keywordPlanCampaigns/{keywordPlan_campaign_id}`
     *
     * Generated from protobuf field <code>string remove = 3 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    public function hasRemove()
    {
        return $this->hasOneof(3);
    }

    /**
     * Remove operation: A resource name for the removed Keyword Plan campaign
     * is expected, in this format:
     * `customers/{customer_id}/keywordPlanCampaigns/{keywordPlan_campaign_id}`
     *
     * Generated from protobuf field <code>string remove = 3 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

