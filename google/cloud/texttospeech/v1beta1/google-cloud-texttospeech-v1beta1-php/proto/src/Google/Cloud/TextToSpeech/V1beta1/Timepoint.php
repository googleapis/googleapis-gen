<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/texttospeech/v1beta1/cloud_tts.proto

namespace Google\Cloud\TextToSpeech\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This contains a mapping between a certain point in the input text and a
 * corresponding time in the output audio.
 *
 * Generated from protobuf message <code>google.cloud.texttospeech.v1beta1.Timepoint</code>
 */
class Timepoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Timepoint name as received from the client within `<mark>` tag.
     *
     * Generated from protobuf field <code>string mark_name = 4;</code>
     */
    protected $mark_name = '';
    /**
     * Time offset in seconds from the start of the synthesized audio.
     *
     * Generated from protobuf field <code>double time_seconds = 3;</code>
     */
    protected $time_seconds = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mark_name
     *           Timepoint name as received from the client within `<mark>` tag.
     *     @type float $time_seconds
     *           Time offset in seconds from the start of the synthesized audio.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Texttospeech\V1Beta1\CloudTts::initOnce();
        parent::__construct($data);
    }

    /**
     * Timepoint name as received from the client within `<mark>` tag.
     *
     * Generated from protobuf field <code>string mark_name = 4;</code>
     * @return string
     */
    public function getMarkName()
    {
        return $this->mark_name;
    }

    /**
     * Timepoint name as received from the client within `<mark>` tag.
     *
     * Generated from protobuf field <code>string mark_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMarkName($var)
    {
        GPBUtil::checkString($var, True);
        $this->mark_name = $var;

        return $this;
    }

    /**
     * Time offset in seconds from the start of the synthesized audio.
     *
     * Generated from protobuf field <code>double time_seconds = 3;</code>
     * @return float
     */
    public function getTimeSeconds()
    {
        return $this->time_seconds;
    }

    /**
     * Time offset in seconds from the start of the synthesized audio.
     *
     * Generated from protobuf field <code>double time_seconds = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setTimeSeconds($var)
    {
        GPBUtil::checkDouble($var);
        $this->time_seconds = $var;

        return $this;
    }

}

