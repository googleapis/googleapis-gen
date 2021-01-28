<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/campaign_experiment_service.proto

namespace Google\Ads\GoogleAds\V3\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CampaignExperimentService.GraduateCampaignExperiment][google.ads.googleads.v3.services.CampaignExperimentService.GraduateCampaignExperiment].
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.GraduateCampaignExperimentRequest</code>
 */
class GraduateCampaignExperimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the campaign experiment to graduate.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $campaign_experiment = '';
    /**
     * Required. Resource name of the budget to attach to the campaign graduated from the
     * experiment.
     *
     * Generated from protobuf field <code>string campaign_budget = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $campaign_budget = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $campaign_experiment
     *           Required. The resource name of the campaign experiment to graduate.
     *     @type string $campaign_budget
     *           Required. Resource name of the budget to attach to the campaign graduated from the
     *           experiment.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Services\CampaignExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the campaign experiment to graduate.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCampaignExperiment()
    {
        return $this->campaign_experiment;
    }

    /**
     * Required. The resource name of the campaign experiment to graduate.
     *
     * Generated from protobuf field <code>string campaign_experiment = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignExperiment($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign_experiment = $var;

        return $this;
    }

    /**
     * Required. Resource name of the budget to attach to the campaign graduated from the
     * experiment.
     *
     * Generated from protobuf field <code>string campaign_budget = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCampaignBudget()
    {
        return $this->campaign_budget;
    }

    /**
     * Required. Resource name of the budget to attach to the campaign graduated from the
     * experiment.
     *
     * Generated from protobuf field <code>string campaign_budget = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCampaignBudget($var)
    {
        GPBUtil::checkString($var, True);
        $this->campaign_budget = $var;

        return $this;
    }

}

