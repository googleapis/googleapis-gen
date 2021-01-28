<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/product_search_service.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `PurgeProducts` method.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.PurgeProductsRequest</code>
 */
class PurgeProductsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project and location in which the Products should be deleted.
     * Format is `projects/PROJECT_ID/locations/LOC_ID`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * The default value is false. Override this value to true to actually perform
     * the purge.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     */
    protected $force = false;
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Vision\V1\ProductSetPurgeConfig $product_set_purge_config
     *           Specify which ProductSet contains the Products to be deleted.
     *     @type bool $delete_orphan_products
     *           If delete_orphan_products is true, all Products that are not in any
     *           ProductSet will be deleted.
     *     @type string $parent
     *           Required. The project and location in which the Products should be deleted.
     *           Format is `projects/PROJECT_ID/locations/LOC_ID`.
     *     @type bool $force
     *           The default value is false. Override this value to true to actually perform
     *           the purge.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ProductSearchService::initOnce();
        parent::__construct($data);
    }

    /**
     * Specify which ProductSet contains the Products to be deleted.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ProductSetPurgeConfig product_set_purge_config = 2;</code>
     * @return \Google\Cloud\Vision\V1\ProductSetPurgeConfig
     */
    public function getProductSetPurgeConfig()
    {
        return $this->readOneof(2);
    }

    public function hasProductSetPurgeConfig()
    {
        return $this->hasOneof(2);
    }

    /**
     * Specify which ProductSet contains the Products to be deleted.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ProductSetPurgeConfig product_set_purge_config = 2;</code>
     * @param \Google\Cloud\Vision\V1\ProductSetPurgeConfig $var
     * @return $this
     */
    public function setProductSetPurgeConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\ProductSetPurgeConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * If delete_orphan_products is true, all Products that are not in any
     * ProductSet will be deleted.
     *
     * Generated from protobuf field <code>bool delete_orphan_products = 3;</code>
     * @return bool
     */
    public function getDeleteOrphanProducts()
    {
        return $this->readOneof(3);
    }

    public function hasDeleteOrphanProducts()
    {
        return $this->hasOneof(3);
    }

    /**
     * If delete_orphan_products is true, all Products that are not in any
     * ProductSet will be deleted.
     *
     * Generated from protobuf field <code>bool delete_orphan_products = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleteOrphanProducts($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Required. The project and location in which the Products should be deleted.
     * Format is `projects/PROJECT_ID/locations/LOC_ID`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project and location in which the Products should be deleted.
     * Format is `projects/PROJECT_ID/locations/LOC_ID`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The default value is false. Override this value to true to actually perform
     * the purge.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @return bool
     */
    public function getForce()
    {
        return $this->force;
    }

    /**
     * The default value is false. Override this value to true to actually perform
     * the purge.
     *
     * Generated from protobuf field <code>bool force = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setForce($var)
    {
        GPBUtil::checkBool($var);
        $this->force = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

