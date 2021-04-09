<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V4\Services\DismissRecommendationRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Operation to dismiss a single recommendation identified by resource_name.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.DismissRecommendationRequest.DismissRecommendationOperation</code>
 */
class DismissRecommendationOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the recommendation to dismiss.
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
     *           The resource name of the recommendation to dismiss.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the recommendation to dismiss.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the recommendation to dismiss.
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
class_alias(DismissRecommendationOperation::class, \Google\Ads\GoogleAds\V4\Services\DismissRecommendationRequest_DismissRecommendationOperation::class);

