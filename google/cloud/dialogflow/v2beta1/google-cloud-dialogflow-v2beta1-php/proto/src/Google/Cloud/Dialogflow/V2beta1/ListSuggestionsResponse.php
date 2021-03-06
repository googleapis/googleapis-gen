<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/participant.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for [Participants.ListSuggestions][google.cloud.dialogflow.v2beta1.Participants.ListSuggestions].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.ListSuggestionsResponse</code>
 */
class ListSuggestionsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The list of suggestions. There will be a maximum number of items
     * returned based on the page_size field in the request. `suggestions` is
     * sorted by `create_time` in descending order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Suggestion suggestions = 1;</code>
     */
    private $suggestions;
    /**
     * Optional. Token to retrieve the next page of results or empty if there are
     * no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dialogflow\V2beta1\Suggestion[]|\Google\Protobuf\Internal\RepeatedField $suggestions
     *           Required. The list of suggestions. There will be a maximum number of items
     *           returned based on the page_size field in the request. `suggestions` is
     *           sorted by `create_time` in descending order.
     *     @type string $next_page_token
     *           Optional. Token to retrieve the next page of results or empty if there are
     *           no more results in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Participant::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The list of suggestions. There will be a maximum number of items
     * returned based on the page_size field in the request. `suggestions` is
     * sorted by `create_time` in descending order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Suggestion suggestions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSuggestions()
    {
        return $this->suggestions;
    }

    /**
     * Required. The list of suggestions. There will be a maximum number of items
     * returned based on the page_size field in the request. `suggestions` is
     * sorted by `create_time` in descending order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dialogflow.v2beta1.Suggestion suggestions = 1;</code>
     * @param \Google\Cloud\Dialogflow\V2beta1\Suggestion[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSuggestions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dialogflow\V2beta1\Suggestion::class);
        $this->suggestions = $arr;

        return $this;
    }

    /**
     * Optional. Token to retrieve the next page of results or empty if there are
     * no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Optional. Token to retrieve the next page of results or empty if there are
     * no more results in the list.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

