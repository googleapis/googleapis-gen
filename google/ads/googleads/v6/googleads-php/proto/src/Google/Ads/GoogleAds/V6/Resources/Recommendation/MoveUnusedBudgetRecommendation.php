<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V6\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The move unused budget recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.resources.Recommendation.MoveUnusedBudgetRecommendation</code>
 */
class MoveUnusedBudgetRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The excess budget's resource_name.
     *
     * Generated from protobuf field <code>string excess_campaign_budget = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $excess_campaign_budget = null;
    /**
     * Output only. The recommendation for the constrained budget to increase.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.Recommendation.CampaignBudgetRecommendation budget_recommendation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $budget_recommendation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $excess_campaign_budget
     *           Output only. The excess budget's resource_name.
     *     @type \Google\Ads\GoogleAds\V6\Resources\Recommendation\CampaignBudgetRecommendation $budget_recommendation
     *           Output only. The recommendation for the constrained budget to increase.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The excess budget's resource_name.
     *
     * Generated from protobuf field <code>string excess_campaign_budget = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getExcessCampaignBudget()
    {
        return isset($this->excess_campaign_budget) ? $this->excess_campaign_budget : '';
    }

    public function hasExcessCampaignBudget()
    {
        return isset($this->excess_campaign_budget);
    }

    public function clearExcessCampaignBudget()
    {
        unset($this->excess_campaign_budget);
    }

    /**
     * Output only. The excess budget's resource_name.
     *
     * Generated from protobuf field <code>string excess_campaign_budget = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setExcessCampaignBudget($var)
    {
        GPBUtil::checkString($var, True);
        $this->excess_campaign_budget = $var;

        return $this;
    }

    /**
     * Output only. The recommendation for the constrained budget to increase.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.Recommendation.CampaignBudgetRecommendation budget_recommendation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V6\Resources\Recommendation\CampaignBudgetRecommendation
     */
    public function getBudgetRecommendation()
    {
        return isset($this->budget_recommendation) ? $this->budget_recommendation : null;
    }

    public function hasBudgetRecommendation()
    {
        return isset($this->budget_recommendation);
    }

    public function clearBudgetRecommendation()
    {
        unset($this->budget_recommendation);
    }

    /**
     * Output only. The recommendation for the constrained budget to increase.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v6.resources.Recommendation.CampaignBudgetRecommendation budget_recommendation = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V6\Resources\Recommendation\CampaignBudgetRecommendation $var
     * @return $this
     */
    public function setBudgetRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V6\Resources\Recommendation\CampaignBudgetRecommendation::class);
        $this->budget_recommendation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MoveUnusedBudgetRecommendation::class, \Google\Ads\GoogleAds\V6\Resources\Recommendation_MoveUnusedBudgetRecommendation::class);

