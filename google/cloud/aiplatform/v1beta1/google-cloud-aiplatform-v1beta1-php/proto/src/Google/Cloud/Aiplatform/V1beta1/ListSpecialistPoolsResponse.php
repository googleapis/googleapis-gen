<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/specialist_pool_service.proto

namespace Google\Cloud\Aiplatform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [SpecialistPoolService.ListSpecialistPools][google.cloud.aiplatform.v1beta1.SpecialistPoolService.ListSpecialistPools].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.ListSpecialistPoolsResponse</code>
 */
class ListSpecialistPoolsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of SpecialistPools that matches the specified filter in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1beta1.SpecialistPool specialist_pools = 1;</code>
     */
    private $specialist_pools;
    /**
     * The standard List next-page token.
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
     *     @type \Google\Cloud\Aiplatform\V1beta1\SpecialistPool[]|\Google\Protobuf\Internal\RepeatedField $specialist_pools
     *           A list of SpecialistPools that matches the specified filter in the request.
     *     @type string $next_page_token
     *           The standard List next-page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\SpecialistPoolService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of SpecialistPools that matches the specified filter in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1beta1.SpecialistPool specialist_pools = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpecialistPools()
    {
        return $this->specialist_pools;
    }

    /**
     * A list of SpecialistPools that matches the specified filter in the request.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1beta1.SpecialistPool specialist_pools = 1;</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\SpecialistPool[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpecialistPools($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Aiplatform\V1beta1\SpecialistPool::class);
        $this->specialist_pools = $arr;

        return $this;
    }

    /**
     * The standard List next-page token.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The standard List next-page token.
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

