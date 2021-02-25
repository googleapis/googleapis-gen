<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateGoogleAdsLink RPC
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateGoogleAdsLinkRequest</code>
 */
class UpdateGoogleAdsLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The GoogleAdsLink to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 1;</code>
     */
    protected $google_ads_link = null;
    /**
     * Required. The list of fields to be updated. Field names must be in snake case
     * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
     * the entire entity, use one path with the string "*" to match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\GoogleAdsLink $google_ads_link
     *           The GoogleAdsLink to update
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Field names must be in snake case
     *           (e.g., "field_to_update"). Omitted fields will not be updated. To replace
     *           the entire entity, use one path with the string "*" to match all fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The GoogleAdsLink to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 1;</code>
     * @return \Google\Analytics\Admin\V1alpha\GoogleAdsLink
     */
    public function getGoogleAdsLink()
    {
        return isset($this->google_ads_link) ? $this->google_ads_link : null;
    }

    public function hasGoogleAdsLink()
    {
        return isset($this->google_ads_link);
    }

    public function clearGoogleAdsLink()
    {
        unset($this->google_ads_link);
    }

    /**
     * The GoogleAdsLink to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\GoogleAdsLink $var
     * @return $this
     */
    public function setGoogleAdsLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\GoogleAdsLink::class);
        $this->google_ads_link = $var;

        return $this;
    }

    /**
     * Required. The list of fields to be updated. Field names must be in snake case
     * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
     * the entire entity, use one path with the string "*" to match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The list of fields to be updated. Field names must be in snake case
     * (e.g., "field_to_update"). Omitted fields will not be updated. To replace
     * the entire entity, use one path with the string "*" to match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

