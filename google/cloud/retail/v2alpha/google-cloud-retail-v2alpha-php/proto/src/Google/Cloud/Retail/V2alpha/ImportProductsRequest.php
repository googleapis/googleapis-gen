<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/retail/v2alpha/import_config.proto

namespace Google\Cloud\Retail\V2alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for Import methods.
 *
 * Generated from protobuf message <code>google.cloud.retail.v2alpha.ImportProductsRequest</code>
 */
class ImportProductsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * "projects/1234/locations/global/catalogs/default_catalog/branches/default_branch"
     * If no updateMask is specified, requires products.create permission.
     * If updateMask is specified, requires products.update permission.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The desired input location of the data.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.ProductInputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $input_config = null;
    /**
     * The desired location of errors incurred during the Import.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.ImportErrorsConfig errors_config = 3;</code>
     */
    protected $errors_config = null;
    /**
     * Indicates which fields in the provided imported 'products' to update. If
     * not set, will by default update all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required.
     *           "projects/1234/locations/global/catalogs/default_catalog/branches/default_branch"
     *           If no updateMask is specified, requires products.create permission.
     *           If updateMask is specified, requires products.update permission.
     *     @type \Google\Cloud\Retail\V2alpha\ProductInputConfig $input_config
     *           Required. The desired input location of the data.
     *     @type \Google\Cloud\Retail\V2alpha\ImportErrorsConfig $errors_config
     *           The desired location of errors incurred during the Import.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Indicates which fields in the provided imported 'products' to update. If
     *           not set, will by default update all fields.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Retail\V2Alpha\ImportConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * "projects/1234/locations/global/catalogs/default_catalog/branches/default_branch"
     * If no updateMask is specified, requires products.create permission.
     * If updateMask is specified, requires products.update permission.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required.
     * "projects/1234/locations/global/catalogs/default_catalog/branches/default_branch"
     * If no updateMask is specified, requires products.create permission.
     * If updateMask is specified, requires products.update permission.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The desired input location of the data.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.ProductInputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Retail\V2alpha\ProductInputConfig
     */
    public function getInputConfig()
    {
        return isset($this->input_config) ? $this->input_config : null;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Required. The desired input location of the data.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.ProductInputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Retail\V2alpha\ProductInputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2alpha\ProductInputConfig::class);
        $this->input_config = $var;

        return $this;
    }

    /**
     * The desired location of errors incurred during the Import.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.ImportErrorsConfig errors_config = 3;</code>
     * @return \Google\Cloud\Retail\V2alpha\ImportErrorsConfig
     */
    public function getErrorsConfig()
    {
        return isset($this->errors_config) ? $this->errors_config : null;
    }

    public function hasErrorsConfig()
    {
        return isset($this->errors_config);
    }

    public function clearErrorsConfig()
    {
        unset($this->errors_config);
    }

    /**
     * The desired location of errors incurred during the Import.
     *
     * Generated from protobuf field <code>.google.cloud.retail.v2alpha.ImportErrorsConfig errors_config = 3;</code>
     * @param \Google\Cloud\Retail\V2alpha\ImportErrorsConfig $var
     * @return $this
     */
    public function setErrorsConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Retail\V2alpha\ImportErrorsConfig::class);
        $this->errors_config = $var;

        return $this;
    }

    /**
     * Indicates which fields in the provided imported 'products' to update. If
     * not set, will by default update all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Indicates which fields in the provided imported 'products' to update. If
     * not set, will by default update all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

