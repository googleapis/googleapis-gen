<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/dataset_service.proto

namespace Google\Cloud\Aiplatform\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [DatasetService.ExportData][google.cloud.aiplatform.v1beta1.DatasetService.ExportData].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1beta1.ExportDataRequest</code>
 */
class ExportDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExportDataConfig export_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $export_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the Dataset resource.
     *           Format:
     *           `projects/{project}/locations/{location}/datasets/{dataset}`
     *     @type \Google\Cloud\Aiplatform\V1beta1\ExportDataConfig $export_config
     *           Required. The desired output location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\DatasetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the Dataset resource.
     * Format:
     * `projects/{project}/locations/{location}/datasets/{dataset}`
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
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExportDataConfig export_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Aiplatform\V1beta1\ExportDataConfig
     */
    public function getExportConfig()
    {
        return isset($this->export_config) ? $this->export_config : null;
    }

    public function hasExportConfig()
    {
        return isset($this->export_config);
    }

    public function clearExportConfig()
    {
        unset($this->export_config);
    }

    /**
     * Required. The desired output location.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1beta1.ExportDataConfig export_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Aiplatform\V1beta1\ExportDataConfig $var
     * @return $this
     */
    public function setExportConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Aiplatform\V1beta1\ExportDataConfig::class);
        $this->export_config = $var;

        return $this;
    }

}

