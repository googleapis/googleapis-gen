<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/speech/v1/cloud_speech.proto

namespace Google\Cloud\Speech\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * `StreamingRecognizeResponse` is the only message returned to the client by
 * `StreamingRecognize`. A series of zero or more `StreamingRecognizeResponse`
 * messages are streamed back to the client. If there is no recognizable
 * audio, and `single_utterance` is set to false, then no messages are streamed
 * back to the client.
 * Here's an example of a series of ten `StreamingRecognizeResponse`s that might
 * be returned while processing audio:
 * 1. results { alternatives { transcript: "tube" } stability: 0.01 }
 * 2. results { alternatives { transcript: "to be a" } stability: 0.01 }
 * 3. results { alternatives { transcript: "to be" } stability: 0.9 }
 *    results { alternatives { transcript: " or not to be" } stability: 0.01 }
 * 4. results { alternatives { transcript: "to be or not to be"
 *                             confidence: 0.92 }
 *              alternatives { transcript: "to bee or not to bee" }
 *              is_final: true }
 * 5. results { alternatives { transcript: " that's" } stability: 0.01 }
 * 6. results { alternatives { transcript: " that is" } stability: 0.9 }
 *    results { alternatives { transcript: " the question" } stability: 0.01 }
 * 7. results { alternatives { transcript: " that is the question"
 *                             confidence: 0.98 }
 *              alternatives { transcript: " that was the question" }
 *              is_final: true }
 * Notes:
 * - Only two of the above responses #4 and #7 contain final results; they are
 *   indicated by `is_final: true`. Concatenating these together generates the
 *   full transcript: "to be or not to be that is the question".
 * - The others contain interim `results`. #3 and #6 contain two interim
 *   `results`: the first portion has a high stability and is less likely to
 *   change; the second portion has a low stability and is very likely to
 *   change. A UI designer might choose to show only high stability `results`.
 * - The specific `stability` and `confidence` values shown above are only for
 *   illustrative purposes. Actual values may vary.
 * - In each response, only one of these fields will be set:
 *     `error`,
 *     `speech_event_type`, or
 *     one or more (repeated) `results`.
 *
 * Generated from protobuf message <code>google.cloud.speech.v1.StreamingRecognizeResponse</code>
 */
class StreamingRecognizeResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 1;</code>
     */
    protected $error = null;
    /**
     * This repeated list contains zero or more results that
     * correspond to consecutive portions of the audio currently being processed.
     * It contains zero or one `is_final=true` result (the newly settled portion),
     * followed by zero or more `is_final=false` results (the interim results).
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.StreamingRecognitionResult results = 2;</code>
     */
    private $results;
    /**
     * Indicates the type of speech event.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.StreamingRecognizeResponse.SpeechEventType speech_event_type = 4;</code>
     */
    protected $speech_event_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Rpc\Status $error
     *           If set, returns a [google.rpc.Status][google.rpc.Status] message that
     *           specifies the error for the operation.
     *     @type \Google\Cloud\Speech\V1\StreamingRecognitionResult[]|\Google\Protobuf\Internal\RepeatedField $results
     *           This repeated list contains zero or more results that
     *           correspond to consecutive portions of the audio currently being processed.
     *           It contains zero or one `is_final=true` result (the newly settled portion),
     *           followed by zero or more `is_final=false` results (the interim results).
     *     @type int $speech_event_type
     *           Indicates the type of speech event.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Speech\V1\CloudSpeech::initOnce();
        parent::__construct($data);
    }

    /**
     * If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 1;</code>
     * @return \Google\Rpc\Status
     */
    public function getError()
    {
        return isset($this->error) ? $this->error : null;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * If set, returns a [google.rpc.Status][google.rpc.Status] message that
     * specifies the error for the operation.
     *
     * Generated from protobuf field <code>.google.rpc.Status error = 1;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->error = $var;

        return $this;
    }

    /**
     * This repeated list contains zero or more results that
     * correspond to consecutive portions of the audio currently being processed.
     * It contains zero or one `is_final=true` result (the newly settled portion),
     * followed by zero or more `is_final=false` results (the interim results).
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.StreamingRecognitionResult results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * This repeated list contains zero or more results that
     * correspond to consecutive portions of the audio currently being processed.
     * It contains zero or one `is_final=true` result (the newly settled portion),
     * followed by zero or more `is_final=false` results (the interim results).
     *
     * Generated from protobuf field <code>repeated .google.cloud.speech.v1.StreamingRecognitionResult results = 2;</code>
     * @param \Google\Cloud\Speech\V1\StreamingRecognitionResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Speech\V1\StreamingRecognitionResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Indicates the type of speech event.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.StreamingRecognizeResponse.SpeechEventType speech_event_type = 4;</code>
     * @return int
     */
    public function getSpeechEventType()
    {
        return $this->speech_event_type;
    }

    /**
     * Indicates the type of speech event.
     *
     * Generated from protobuf field <code>.google.cloud.speech.v1.StreamingRecognizeResponse.SpeechEventType speech_event_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSpeechEventType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Speech\V1\StreamingRecognizeResponse\SpeechEventType::class);
        $this->speech_event_type = $var;

        return $this;
    }

}

