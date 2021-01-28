<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides information to the recognizer that specifies how to process the
 * request.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.StreamingRecognitionConfig</code>
 */
class StreamingRecognitionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Provides information to the recognizer that specifies how to
     * process the request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.RecognitionConfig config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $config = null;
    /**
     * If `false` or omitted, the recognizer will perform continuous
     * recognition (continuing to wait for and process audio even if the user
     * pauses speaking) until the client closes the input stream (gRPC API) or
     * until the maximum time limit has been reached. May return multiple
     * `StreamingRecognitionResult`s with the `is_final` flag set to `true`.
     * If `true`, the recognizer will detect a single spoken utterance. When it
     * detects that the user has paused or stopped speaking, it will return an
     * `END_OF_SINGLE_UTTERANCE` event and cease recognition. It will return no
     * more than one `StreamingRecognitionResult` with the `is_final` flag set to
     * `true`.
     *
     * Generated from protobuf field <code>bool single_utterance = 2;</code>
     */
    protected $single_utterance = false;
    /**
     * If `true`, interim results (tentative hypotheses) may be
     * returned as they become available (these interim results are indicated with
     * the `is_final=false` flag).
     * If `false` or omitted, only `is_final=true` result(s) are returned.
     *
     * Generated from protobuf field <code>bool interim_results = 3;</code>
     */
    protected $interim_results = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Speech\V1\RecognitionConfig $config
     *           Required. Provides information to the recognizer that specifies how to
     *           process the request.
     *     @type bool $single_utterance
     *           If `false` or omitted, the recognizer will perform continuous
     *           recognition (continuing to wait for and process audio even if the user
     *           pauses speaking) until the client closes the input stream (gRPC API) or
     *           until the maximum time limit has been reached. May return multiple
     *           `StreamingRecognitionResult`s with the `is_final` flag set to `true`.
     *           If `true`, the recognizer will detect a single spoken utterance. When it
     *           detects that the user has paused or stopped speaking, it will return an
     *           `END_OF_SINGLE_UTTERANCE` event and cease recognition. It will return no
     *           more than one `StreamingRecognitionResult` with the `is_final` flag set to
     *           `true`.
     *     @type bool $interim_results
     *           If `true`, interim results (tentative hypotheses) may be
     *           returned as they become available (these interim results are indicated with
     *           the `is_final=false` flag).
     *           If `false` or omitted, only `is_final=true` result(s) are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Provides information to the recognizer that specifies how to
     * process the request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.RecognitionConfig config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Speech\V1\RecognitionConfig
     */
    public function getConfig()
    {
        return isset($this->config) ? $this->config : null;
    }

    public function hasConfig()
    {
        return isset($this->config);
    }

    public function clearConfig()
    {
        unset($this->config);
    }

    /**
     * Required. Provides information to the recognizer that specifies how to
     * process the request.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.RecognitionConfig config = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Speech\V1\RecognitionConfig $var
     * @return $this
     */
    public function setConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Speech\V1\RecognitionConfig::class);
        $this->config = $var;

        return $this;
    }

    /**
     * If `false` or omitted, the recognizer will perform continuous
     * recognition (continuing to wait for and process audio even if the user
     * pauses speaking) until the client closes the input stream (gRPC API) or
     * until the maximum time limit has been reached. May return multiple
     * `StreamingRecognitionResult`s with the `is_final` flag set to `true`.
     * If `true`, the recognizer will detect a single spoken utterance. When it
     * detects that the user has paused or stopped speaking, it will return an
     * `END_OF_SINGLE_UTTERANCE` event and cease recognition. It will return no
     * more than one `StreamingRecognitionResult` with the `is_final` flag set to
     * `true`.
     *
     * Generated from protobuf field <code>bool single_utterance = 2;</code>
     * @return bool
     */
    public function getSingleUtterance()
    {
        return $this->single_utterance;
    }

    /**
     * If `false` or omitted, the recognizer will perform continuous
     * recognition (continuing to wait for and process audio even if the user
     * pauses speaking) until the client closes the input stream (gRPC API) or
     * until the maximum time limit has been reached. May return multiple
     * `StreamingRecognitionResult`s with the `is_final` flag set to `true`.
     * If `true`, the recognizer will detect a single spoken utterance. When it
     * detects that the user has paused or stopped speaking, it will return an
     * `END_OF_SINGLE_UTTERANCE` event and cease recognition. It will return no
     * more than one `StreamingRecognitionResult` with the `is_final` flag set to
     * `true`.
     *
     * Generated from protobuf field <code>bool single_utterance = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSingleUtterance($var)
    {
        GPBUtil::checkBool($var);
        $this->single_utterance = $var;

        return $this;
    }

    /**
     * If `true`, interim results (tentative hypotheses) may be
     * returned as they become available (these interim results are indicated with
     * the `is_final=false` flag).
     * If `false` or omitted, only `is_final=true` result(s) are returned.
     *
     * Generated from protobuf field <code>bool interim_results = 3;</code>
     * @return bool
     */
    public function getInterimResults()
    {
        return $this->interim_results;
    }

    /**
     * If `true`, interim results (tentative hypotheses) may be
     * returned as they become available (these interim results are indicated with
     * the `is_final=false` flag).
     * If `false` or omitted, only `is_final=true` result(s) are returned.
     *
     * Generated from protobuf field <code>bool interim_results = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setInterimResults($var)
    {
        GPBUtil::checkBool($var);
        $this->interim_results = $var;

        return $this;
    }

}

