<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p3beta1/product_search_service.proto

namespace Google\Cloud\Vision\V1p3beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A ProductSet contains Products. A ProductSet can contain a maximum of 1
 * million reference images. If the limit is exceeded, periodic indexing will
 * fail.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p3beta1.ProductSet</code>
 */
class ProductSet extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The user-provided name for this ProductSet. Must not be empty. Must be at
     * most 4096 characters long.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Output only. The time at which this ProductSet was last indexed. Query
     * results will reflect all updates before this time. If this ProductSet has
     * never been indexed, this field is 0.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $index_time = null;
    /**
     * Output only. If there was an error with indexing the product set, the field
     * is populated.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>.google.rpc.Status index_error = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $index_error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the ProductSet.
     *           Format is:
     *           `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`.
     *           This field is ignored when creating a ProductSet.
     *     @type string $display_name
     *           The user-provided name for this ProductSet. Must not be empty. Must be at
     *           most 4096 characters long.
     *     @type \Google\Protobuf\Timestamp $index_time
     *           Output only. The time at which this ProductSet was last indexed. Query
     *           results will reflect all updates before this time. If this ProductSet has
     *           never been indexed, this field is 0.
     *           This field is ignored when creating a ProductSet.
     *     @type \Google\Rpc\Status $index_error
     *           Output only. If there was an error with indexing the product set, the field
     *           is populated.
     *           This field is ignored when creating a ProductSet.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1P3Beta1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the ProductSet.
     * Format is:
     * `projects/PROJECT_ID/locations/LOC_ID/productSets/PRODUCT_SET_ID`.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * The user-provided name for this ProductSet. Must not be empty. Must be at
     * most 4096 characters long.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The user-provided name for this ProductSet. Must not be empty. Must be at
     * most 4096 characters long.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The time at which this ProductSet was last indexed. Query
     * results will reflect all updates before this time. If this ProductSet has
     * never been indexed, this field is 0.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getIndexTime()
    {
        return isset($this->index_time) ? $this->index_time : null;
    }

    public function hasIndexTime()
    {
        return isset($this->index_time);
    }

    public function clearIndexTime()
    {
        unset($this->index_time);
    }

    /**
     * Output only. The time at which this ProductSet was last indexed. Query
     * results will reflect all updates before this time. If this ProductSet has
     * never been indexed, this field is 0.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp index_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setIndexTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->index_time = $var;

        return $this;
    }

    /**
     * Output only. If there was an error with indexing the product set, the field
     * is populated.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>.google.rpc.Status index_error = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Rpc\Status
     */
    public function getIndexError()
    {
        return isset($this->index_error) ? $this->index_error : null;
    }

    public function hasIndexError()
    {
        return isset($this->index_error);
    }

    public function clearIndexError()
    {
        unset($this->index_error);
    }

    /**
     * Output only. If there was an error with indexing the product set, the field
     * is populated.
     * This field is ignored when creating a ProductSet.
     *
     * Generated from protobuf field <code>.google.rpc.Status index_error = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setIndexError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->index_error = $var;

        return $this;
    }

}

