<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/pipeline_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [PipelineService.ListTrainingPipelines][google.cloud.aiplatform.v1.PipelineService.ListTrainingPipelines].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ListTrainingPipelinesRequest</code>
 */
class ListTrainingPipelinesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the Location to list the TrainingPipelines from.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Lists the PipelineJobs that match the filter expression. The following
     * fields are supported:
     * * `pipeline_name`: Supports `=` and `!=` comparisons.
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `end_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `labels`: Supports key-value equality and key presence.
     * Filter expressions can be combined together using logical operators
     * (`AND` & `OR`).
     * For example: `pipeline_name="test" AND create_time>"2020-05-18T13:30:00Z"`.
     * The syntax to define filter expression is based on
     * https://google.aip.dev/160.
     * Examples:
     * * `create_time>"2021-05-18T00:00:00Z" OR
     *   update_time>"2020-05-18T00:00:00Z"` PipelineJobs created or updated
     *   after 2020-05-18 00:00:00 UTC.
     * * `labels.env = "prod"`
     *   PipelineJobs with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    protected $filter = '';
    /**
     * The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    protected $page_size = 0;
    /**
     * The standard list page token.
     * Typically obtained via
     * [ListTrainingPipelinesResponse.next_page_token][google.cloud.aiplatform.v1.ListTrainingPipelinesResponse.next_page_token] of the previous
     * [PipelineService.ListTrainingPipelines][google.cloud.aiplatform.v1.PipelineService.ListTrainingPipelines] call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    protected $page_token = '';
    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5;</code>
     */
    protected $read_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the Location to list the TrainingPipelines from.
     *           Format: `projects/{project}/locations/{location}`
     *     @type string $filter
     *           Lists the PipelineJobs that match the filter expression. The following
     *           fields are supported:
     *           * `pipeline_name`: Supports `=` and `!=` comparisons.
     *           * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *             Values must be in RFC 3339 format.
     *           * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *             Values must be in RFC 3339 format.
     *           * `end_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *             Values must be in RFC 3339 format.
     *           * `labels`: Supports key-value equality and key presence.
     *           Filter expressions can be combined together using logical operators
     *           (`AND` & `OR`).
     *           For example: `pipeline_name="test" AND create_time>"2020-05-18T13:30:00Z"`.
     *           The syntax to define filter expression is based on
     *           https://google.aip.dev/160.
     *           Examples:
     *           * `create_time>"2021-05-18T00:00:00Z" OR
     *             update_time>"2020-05-18T00:00:00Z"` PipelineJobs created or updated
     *             after 2020-05-18 00:00:00 UTC.
     *           * `labels.env = "prod"`
     *             PipelineJobs with label "env" set to "prod".
     *     @type int $page_size
     *           The standard list page size.
     *     @type string $page_token
     *           The standard list page token.
     *           Typically obtained via
     *           [ListTrainingPipelinesResponse.next_page_token][google.cloud.aiplatform.v1.ListTrainingPipelinesResponse.next_page_token] of the previous
     *           [PipelineService.ListTrainingPipelines][google.cloud.aiplatform.v1.PipelineService.ListTrainingPipelines] call.
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Mask specifying which fields to read.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\PipelineService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the Location to list the TrainingPipelines from.
     * Format: `projects/{project}/locations/{location}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the Location to list the TrainingPipelines from.
     * Format: `projects/{project}/locations/{location}`
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
     * Lists the PipelineJobs that match the filter expression. The following
     * fields are supported:
     * * `pipeline_name`: Supports `=` and `!=` comparisons.
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `end_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `labels`: Supports key-value equality and key presence.
     * Filter expressions can be combined together using logical operators
     * (`AND` & `OR`).
     * For example: `pipeline_name="test" AND create_time>"2020-05-18T13:30:00Z"`.
     * The syntax to define filter expression is based on
     * https://google.aip.dev/160.
     * Examples:
     * * `create_time>"2021-05-18T00:00:00Z" OR
     *   update_time>"2020-05-18T00:00:00Z"` PipelineJobs created or updated
     *   after 2020-05-18 00:00:00 UTC.
     * * `labels.env = "prod"`
     *   PipelineJobs with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * Lists the PipelineJobs that match the filter expression. The following
     * fields are supported:
     * * `pipeline_name`: Supports `=` and `!=` comparisons.
     * * `create_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `update_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `end_time`: Supports `=`, `!=`, `<`, `>`, `<=`, and `>=` comparisons.
     *   Values must be in RFC 3339 format.
     * * `labels`: Supports key-value equality and key presence.
     * Filter expressions can be combined together using logical operators
     * (`AND` & `OR`).
     * For example: `pipeline_name="test" AND create_time>"2020-05-18T13:30:00Z"`.
     * The syntax to define filter expression is based on
     * https://google.aip.dev/160.
     * Examples:
     * * `create_time>"2021-05-18T00:00:00Z" OR
     *   update_time>"2020-05-18T00:00:00Z"` PipelineJobs created or updated
     *   after 2020-05-18 00:00:00 UTC.
     * * `labels.env = "prod"`
     *   PipelineJobs with label "env" set to "prod".
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The standard list page size.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * The standard list page token.
     * Typically obtained via
     * [ListTrainingPipelinesResponse.next_page_token][google.cloud.aiplatform.v1.ListTrainingPipelinesResponse.next_page_token] of the previous
     * [PipelineService.ListTrainingPipelines][google.cloud.aiplatform.v1.PipelineService.ListTrainingPipelines] call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * The standard list page token.
     * Typically obtained via
     * [ListTrainingPipelinesResponse.next_page_token][google.cloud.aiplatform.v1.ListTrainingPipelinesResponse.next_page_token] of the previous
     * [PipelineService.ListTrainingPipelines][google.cloud.aiplatform.v1.PipelineService.ListTrainingPipelines] call.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return isset($this->read_mask) ? $this->read_mask : null;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Mask specifying which fields to read.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 5;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

