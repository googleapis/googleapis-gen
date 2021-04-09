<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/paid_organic_search_term_view_service.proto

namespace Google\Ads\GoogleAds\V5\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [PaidOrganicSearchTermViewService.GetPaidOrganicSearchTermView][google.ads.googleads.v5.services.PaidOrganicSearchTermViewService.GetPaidOrganicSearchTermView].
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.services.GetPaidOrganicSearchTermViewRequest</code>
 */
class GetPaidOrganicSearchTermViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the paid organic search term view to fetch.
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
     *           Required. The resource name of the paid organic search term view to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V5\Services\PaidOrganicSearchTermViewService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the paid organic search term view to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Required. The resource name of the paid organic search term view to fetch.
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

