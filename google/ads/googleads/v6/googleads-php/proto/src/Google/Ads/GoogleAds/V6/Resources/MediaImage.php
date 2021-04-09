<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/resources/media_file.proto

namespace Google\Ads\GoogleAds\V6\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates an Image.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.resources.MediaImage</code>
 */
class MediaImage extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Raw image data.
     *
     * Generated from protobuf field <code>bytes data = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $data = null;
    /**
     * Output only. The url to the full size version of the image.
     *
     * Generated from protobuf field <code>string full_size_image_url = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $full_size_image_url = null;
    /**
     * Output only. The url to the preview size version of the image.
     *
     * Generated from protobuf field <code>string preview_size_image_url = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $preview_size_image_url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $data
     *           Immutable. Raw image data.
     *     @type string $full_size_image_url
     *           Output only. The url to the full size version of the image.
     *     @type string $preview_size_image_url
     *           Output only. The url to the preview size version of the image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V6\Resources\MediaFile::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Raw image data.
     *
     * Generated from protobuf field <code>bytes data = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getData()
    {
        return isset($this->data) ? $this->data : '';
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Immutable. Raw image data.
     *
     * Generated from protobuf field <code>bytes data = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Output only. The url to the full size version of the image.
     *
     * Generated from protobuf field <code>string full_size_image_url = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getFullSizeImageUrl()
    {
        return isset($this->full_size_image_url) ? $this->full_size_image_url : '';
    }

    public function hasFullSizeImageUrl()
    {
        return isset($this->full_size_image_url);
    }

    public function clearFullSizeImageUrl()
    {
        unset($this->full_size_image_url);
    }

    /**
     * Output only. The url to the full size version of the image.
     *
     * Generated from protobuf field <code>string full_size_image_url = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setFullSizeImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->full_size_image_url = $var;

        return $this;
    }

    /**
     * Output only. The url to the preview size version of the image.
     *
     * Generated from protobuf field <code>string preview_size_image_url = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getPreviewSizeImageUrl()
    {
        return isset($this->preview_size_image_url) ? $this->preview_size_image_url : '';
    }

    public function hasPreviewSizeImageUrl()
    {
        return isset($this->preview_size_image_url);
    }

    public function clearPreviewSizeImageUrl()
    {
        unset($this->preview_size_image_url);
    }

    /**
     * Output only. The url to the preview size version of the image.
     *
     * Generated from protobuf field <code>string preview_size_image_url = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setPreviewSizeImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->preview_size_image_url = $var;

        return $this;
    }

}

