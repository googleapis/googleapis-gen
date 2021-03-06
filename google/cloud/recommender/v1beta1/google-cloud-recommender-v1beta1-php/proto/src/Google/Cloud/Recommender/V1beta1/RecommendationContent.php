<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1beta1/recommendation.proto

namespace Google\Cloud\Recommender\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains what resources are changing and how they are changing.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1beta1.RecommendationContent</code>
 */
class RecommendationContent extends \Google\Protobuf\Internal\Message
{
    /**
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    private $operation_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Recommender\V1beta1\OperationGroup[]|\Google\Protobuf\Internal\RepeatedField $operation_groups
     *           Operations to one or more Google Cloud resources grouped in such a way
     *           that, all operations within one group are expected to be performed
     *           atomically and in an order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1Beta1\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperationGroups()
    {
        return $this->operation_groups;
    }

    /**
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     * @param \Google\Cloud\Recommender\V1beta1\OperationGroup[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperationGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Recommender\V1beta1\OperationGroup::class);
        $this->operation_groups = $arr;

        return $this;
    }

}

