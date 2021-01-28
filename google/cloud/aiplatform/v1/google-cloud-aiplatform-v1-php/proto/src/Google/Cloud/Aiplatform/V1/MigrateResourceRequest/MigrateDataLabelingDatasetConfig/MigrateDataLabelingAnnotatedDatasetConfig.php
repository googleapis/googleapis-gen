<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/migration_service.proto

namespace Google\Cloud\Aiplatform\V1\MigrateResourceRequest\MigrateDataLabelingDatasetConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Config for migrating AnnotatedDataset in datalabeling.googleapis.com to
 * AI Platform's SavedQuery.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.MigrateResourceRequest.MigrateDataLabelingDatasetConfig.MigrateDataLabelingAnnotatedDatasetConfig</code>
 */
class MigrateDataLabelingAnnotatedDatasetConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Full resource name of data labeling AnnotatedDataset.
     * Format:
     * `projects/{project}/datasets/{dataset}/annotatedDatasets/{annotated_dataset}`.
     *
     * Generated from protobuf field <code>string annotated_dataset = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $annotated_dataset = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $annotated_dataset
     *           Required. Full resource name of data labeling AnnotatedDataset.
     *           Format:
     *           `projects/{project}/datasets/{dataset}/annotatedDatasets/{annotated_dataset}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MigrationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Full resource name of data labeling AnnotatedDataset.
     * Format:
     * `projects/{project}/datasets/{dataset}/annotatedDatasets/{annotated_dataset}`.
     *
     * Generated from protobuf field <code>string annotated_dataset = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAnnotatedDataset()
    {
        return $this->annotated_dataset;
    }

    /**
     * Required. Full resource name of data labeling AnnotatedDataset.
     * Format:
     * `projects/{project}/datasets/{dataset}/annotatedDatasets/{annotated_dataset}`.
     *
     * Generated from protobuf field <code>string annotated_dataset = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAnnotatedDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->annotated_dataset = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MigrateDataLabelingAnnotatedDatasetConfig::class, \Google\Cloud\Aiplatform\V1\MigrateResourceRequest_MigrateDataLabelingDatasetConfig_MigrateDataLabelingAnnotatedDatasetConfig::class);

