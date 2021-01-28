<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1beta1/recommender_service.proto

namespace Google\Cloud\Recommender\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `MarkInsightAccepted` method.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1beta1.MarkInsightAcceptedRequest</code>
 */
class MarkInsightAcceptedRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the insight.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. State properties user wish to include with this state.  Full replace of the
     * current state_metadata.
     *
     * Generated from protobuf field <code>map<string, string> state_metadata = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $state_metadata;
    /**
     * Required. Fingerprint of the Insight. Provides optimistic locking.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the insight.
     *     @type array|\Google\Protobuf\Internal\MapField $state_metadata
     *           Optional. State properties user wish to include with this state.  Full replace of the
     *           current state_metadata.
     *     @type string $etag
     *           Required. Fingerprint of the Insight. Provides optimistic locking.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1Beta1\RecommenderService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the insight.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the insight.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. State properties user wish to include with this state.  Full replace of the
     * current state_metadata.
     *
     * Generated from protobuf field <code>map<string, string> state_metadata = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getStateMetadata()
    {
        return $this->state_metadata;
    }

    /**
     * Optional. State properties user wish to include with this state.  Full replace of the
     * current state_metadata.
     *
     * Generated from protobuf field <code>map<string, string> state_metadata = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setStateMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->state_metadata = $arr;

        return $this;
    }

    /**
     * Required. Fingerprint of the Insight. Provides optimistic locking.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Required. Fingerprint of the Insight. Provides optimistic locking.
     *
     * Generated from protobuf field <code>string etag = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

