<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/services/product_bidding_category_constant_service.proto

namespace Google\Ads\GoogleAds\V6\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [ProductBiddingCategoryConstantService.GetProductBiddingCategoryConstant][google.ads.googleads.v6.services.ProductBiddingCategoryConstantService.GetProductBiddingCategoryConstant].
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.services.GetProductBiddingCategoryConstantRequest</code>
 */
class GetProductBiddingCategoryConstantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Resource name of the Product Bidding Category to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Required. Resource name of the Product Bidding Category to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Services\ProductBiddingCategoryConstantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Resource name of the Product Bidding Category to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. Resource name of the Product Bidding Category to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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

