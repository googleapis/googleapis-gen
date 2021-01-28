<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/media_file.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A media file.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.MediaFile</code>
 */
class MediaFile extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the media file.
     * Media file resource names have the form:
     * `customers/{customer_id}/mediaFiles/{media_file_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Immutable. Type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MediaTypeEnum.MediaType type = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $type = 0;
    /**
     * Output only. The mime type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MimeTypeEnum.MimeType mime_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $mime_type = 0;
    /**
     * Immutable. The URL of where the original media file was downloaded from (or a file
     * name). Only used for media of type AUDIO and IMAGE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $source_url = null;
    /**
     * Immutable. The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $name = null;
    /**
     * Output only. The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $file_size = null;
    protected $mediatype;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the media file.
     *           Media file resource names have the form:
     *           `customers/{customer_id}/mediaFiles/{media_file_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. The ID of the media file.
     *     @type int $type
     *           Immutable. Type of the media file.
     *     @type int $mime_type
     *           Output only. The mime type of the media file.
     *     @type \Google\Protobuf\StringValue $source_url
     *           Immutable. The URL of where the original media file was downloaded from (or a file
     *           name). Only used for media of type AUDIO and IMAGE.
     *     @type \Google\Protobuf\StringValue $name
     *           Immutable. The name of the media file. The name can be used by clients to help
     *           identify previously uploaded media.
     *     @type \Google\Protobuf\Int64Value $file_size
     *           Output only. The size of the media file in bytes.
     *     @type \Google\Ads\GoogleAds\V3\Resources\MediaImage $image
     *           Immutable. Encapsulates an Image.
     *     @type \Google\Ads\GoogleAds\V3\Resources\MediaBundle $media_bundle
     *           Immutable. A ZIP archive media the content of which contains HTML5 assets.
     *     @type \Google\Ads\GoogleAds\V3\Resources\MediaAudio $audio
     *           Output only. Encapsulates an Audio.
     *     @type \Google\Ads\GoogleAds\V3\Resources\MediaVideo $video
     *           Immutable. Encapsulates a Video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Resources\MediaFile::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the media file.
     * Media file resource names have the form:
     * `customers/{customer_id}/mediaFiles/{media_file_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the media file.
     * Media file resource names have the form:
     * `customers/{customer_id}/mediaFiles/{media_file_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Immutable. Type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MediaTypeEnum.MediaType type = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Immutable. Type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MediaTypeEnum.MediaType type = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\MediaTypeEnum\MediaType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The mime type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MimeTypeEnum.MimeType mime_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * Output only. The mime type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MimeTypeEnum.MimeType mime_type = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\MimeTypeEnum\MimeType::class);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * Immutable. The URL of where the original media file was downloaded from (or a file
     * name). Only used for media of type AUDIO and IMAGE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSourceUrl()
    {
        return isset($this->source_url) ? $this->source_url : null;
    }

    public function hasSourceUrl()
    {
        return isset($this->source_url);
    }

    public function clearSourceUrl()
    {
        unset($this->source_url);
    }

    /**
     * Returns the unboxed value from <code>getSourceUrl()</code>

     * Immutable. The URL of where the original media file was downloaded from (or a file
     * name). Only used for media of type AUDIO and IMAGE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string|null
     */
    public function getSourceUrlUnwrapped()
    {
        return $this->readWrapperValue("source_url");
    }

    /**
     * Immutable. The URL of where the original media file was downloaded from (or a file
     * name). Only used for media of type AUDIO and IMAGE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->source_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The URL of where the original media file was downloaded from (or a file
     * name). Only used for media of type AUDIO and IMAGE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string|null $var
     * @return $this
     */
    public function setSourceUrlUnwrapped($var)
    {
        $this->writeWrapperValue("source_url", $var);
        return $this;}

    /**
     * Immutable. The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : null;
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * Immutable. The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * Immutable. The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * Output only. The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getFileSize()
    {
        return isset($this->file_size) ? $this->file_size : null;
    }

    public function hasFileSize()
    {
        return isset($this->file_size);
    }

    public function clearFileSize()
    {
        unset($this->file_size);
    }

    /**
     * Returns the unboxed value from <code>getFileSize()</code>

     * Output only. The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getFileSizeUnwrapped()
    {
        return $this->readWrapperValue("file_size");
    }

    /**
     * Output only. The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setFileSize($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->file_size = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setFileSizeUnwrapped($var)
    {
        $this->writeWrapperValue("file_size", $var);
        return $this;}

    /**
     * Immutable. Encapsulates an Image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MediaImage image = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\MediaImage
     */
    public function getImage()
    {
        return $this->readOneof(3);
    }

    public function hasImage()
    {
        return $this->hasOneof(3);
    }

    /**
     * Immutable. Encapsulates an Image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MediaImage image = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\MediaImage $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\MediaImage::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Immutable. A ZIP archive media the content of which contains HTML5 assets.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MediaBundle media_bundle = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\MediaBundle
     */
    public function getMediaBundle()
    {
        return $this->readOneof(4);
    }

    public function hasMediaBundle()
    {
        return $this->hasOneof(4);
    }

    /**
     * Immutable. A ZIP archive media the content of which contains HTML5 assets.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MediaBundle media_bundle = 4 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\MediaBundle $var
     * @return $this
     */
    public function setMediaBundle($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\MediaBundle::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. Encapsulates an Audio.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MediaAudio audio = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\MediaAudio
     */
    public function getAudio()
    {
        return $this->readOneof(10);
    }

    public function hasAudio()
    {
        return $this->hasOneof(10);
    }

    /**
     * Output only. Encapsulates an Audio.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MediaAudio audio = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\MediaAudio $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\MediaAudio::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Immutable. Encapsulates a Video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MediaVideo video = 11 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\MediaVideo
     */
    public function getVideo()
    {
        return $this->readOneof(11);
    }

    public function hasVideo()
    {
        return $this->hasOneof(11);
    }

    /**
     * Immutable. Encapsulates a Video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MediaVideo video = 11 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\MediaVideo $var
     * @return $this
     */
    public function setVideo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\MediaVideo::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMediatype()
    {
        return $this->whichOneof("mediatype");
    }

}

