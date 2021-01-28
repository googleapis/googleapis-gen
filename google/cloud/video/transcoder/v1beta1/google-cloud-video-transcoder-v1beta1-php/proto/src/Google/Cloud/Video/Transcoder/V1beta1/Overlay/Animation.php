<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/video/transcoder/v1beta1/resources.proto

namespace Google\Cloud\Video\Transcoder\V1beta1\Overlay;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Animation types.
 *
 * Generated from protobuf message <code>google.cloud.video.transcoder.v1beta1.Overlay.Animation</code>
 */
class Animation extends \Google\Protobuf\Internal\Message
{
    protected $animation_type;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationStatic $animation_static
     *           Display static overlay object.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationFade $animation_fade
     *           Display overlay object with fade animation.
     *     @type \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationEnd $animation_end
     *           End previous animation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Video\Transcoder\V1Beta1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Display static overlay object.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.AnimationStatic animation_static = 1;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationStatic
     */
    public function getAnimationStatic()
    {
        return $this->readOneof(1);
    }

    public function hasAnimationStatic()
    {
        return $this->hasOneof(1);
    }

    /**
     * Display static overlay object.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.AnimationStatic animation_static = 1;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationStatic $var
     * @return $this
     */
    public function setAnimationStatic($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationStatic::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Display overlay object with fade animation.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.AnimationFade animation_fade = 2;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationFade
     */
    public function getAnimationFade()
    {
        return $this->readOneof(2);
    }

    public function hasAnimationFade()
    {
        return $this->hasOneof(2);
    }

    /**
     * Display overlay object with fade animation.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.AnimationFade animation_fade = 2;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationFade $var
     * @return $this
     */
    public function setAnimationFade($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationFade::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * End previous animation.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.AnimationEnd animation_end = 3;</code>
     * @return \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationEnd
     */
    public function getAnimationEnd()
    {
        return $this->readOneof(3);
    }

    public function hasAnimationEnd()
    {
        return $this->hasOneof(3);
    }

    /**
     * End previous animation.
     *
     * Generated from protobuf field <code>.google.cloud.video.transcoder.v1beta1.Overlay.AnimationEnd animation_end = 3;</code>
     * @param \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationEnd $var
     * @return $this
     */
    public function setAnimationEnd($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Video\Transcoder\V1beta1\Overlay\AnimationEnd::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAnimationType()
    {
        return $this->whichOneof("animation_type");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Animation::class, \Google\Cloud\Video\Transcoder\V1beta1\Overlay_Animation::class);

