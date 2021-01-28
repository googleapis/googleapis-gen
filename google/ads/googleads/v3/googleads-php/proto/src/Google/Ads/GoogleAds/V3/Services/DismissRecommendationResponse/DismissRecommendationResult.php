<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V3\Services\DismissRecommendationResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of dismissing a recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.services.DismissRecommendationResponse.DismissRecommendationResult</code>
 */
class DismissRecommendationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful dismissals.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful dismissals.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful dismissals.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful dismissals.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DismissRecommendationResult::class, \Google\Ads\GoogleAds\V3\Services\DismissRecommendationResponse_DismissRecommendationResult::class);

