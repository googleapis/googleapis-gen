<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/ad_asset.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A text asset used inside an ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.AdTextAsset</code>
 */
class AdTextAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Asset text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     */
    protected $text = null;
    /**
     * The pinned field of the asset. This restricts the asset to only serve
     * within this field. Multiple assets can be pinned to the same field. An
     * asset that is unpinned or pinned to a different field will not serve in a
     * field where some other asset has been pinned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.ServedAssetFieldTypeEnum.ServedAssetFieldType pinned_field = 2;</code>
     */
    protected $pinned_field = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $text
     *           Asset text.
     *     @type int $pinned_field
     *           The pinned field of the asset. This restricts the asset to only serve
     *           within this field. Multiple assets can be pinned to the same field. An
     *           asset that is unpinned or pinned to a different field will not serve in a
     *           field where some other asset has been pinned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V4\Common\AdAsset::initOnce();
        parent::__construct($data);
    }

    /**
     * Asset text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : null;
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * Asset text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        return $this->readWrapperValue("text");
    }

    /**
     * Asset text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Asset text.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $this->writeWrapperValue("text", $var);
        return $this;}

    /**
     * The pinned field of the asset. This restricts the asset to only serve
     * within this field. Multiple assets can be pinned to the same field. An
     * asset that is unpinned or pinned to a different field will not serve in a
     * field where some other asset has been pinned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.ServedAssetFieldTypeEnum.ServedAssetFieldType pinned_field = 2;</code>
     * @return int
     */
    public function getPinnedField()
    {
        return $this->pinned_field;
    }

    /**
     * The pinned field of the asset. This restricts the asset to only serve
     * within this field. Multiple assets can be pinned to the same field. An
     * asset that is unpinned or pinned to a different field will not serve in a
     * field where some other asset has been pinned.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.ServedAssetFieldTypeEnum.ServedAssetFieldType pinned_field = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPinnedField($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\ServedAssetFieldTypeEnum\ServedAssetFieldType::class);
        $this->pinned_field = $var;

        return $this;
    }

}

