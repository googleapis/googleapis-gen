<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/mutate_job.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of mutates being processed asynchronously. The mutates are uploaded
 * by the user. The mutates themselves aren't readable and the results of the
 * job can only be read using MutateJobService.ListMutateJobResults.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.MutateJob</code>
 */
class MutateJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the mutate job.
     * Mutate job resource names have the form:
     * `customers/{customer_id}/mutateJobs/{mutate_job_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $next_add_sequence_token = null;
    /**
     * Output only. Contains additional information about this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MutateJob.MutateJobMetadata metadata = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $metadata = null;
    /**
     * Output only. Status of this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MutateJobStatusEnum.MutateJobStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $long_running_operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the mutate job.
     *           Mutate job resource names have the form:
     *           `customers/{customer_id}/mutateJobs/{mutate_job_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           Output only. ID of this mutate job.
     *     @type \Google\Protobuf\StringValue $next_add_sequence_token
     *           Output only. The next sequence token to use when adding operations. Only set when the
     *           mutate job status is PENDING.
     *     @type \Google\Ads\GoogleAds\V3\Resources\MutateJob\MutateJobMetadata $metadata
     *           Output only. Contains additional information about this mutate job.
     *     @type int $status
     *           Output only. Status of this mutate job.
     *     @type \Google\Protobuf\StringValue $long_running_operation
     *           Output only. The resource name of the long-running operation that can be used to poll
     *           for completion. Only set when the mutate job status is RUNNING or DONE.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V3\Resources\MutateJob::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the mutate job.
     * Mutate job resource names have the form:
     * `customers/{customer_id}/mutateJobs/{mutate_job_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the mutate job.
     * Mutate job resource names have the form:
     * `customers/{customer_id}/mutateJobs/{mutate_job_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Output only. ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : null;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. ID of this mutate job.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Output only. The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getNextAddSequenceToken()
    {
        return isset($this->next_add_sequence_token) ? $this->next_add_sequence_token : null;
    }

    public function hasNextAddSequenceToken()
    {
        return isset($this->next_add_sequence_token);
    }

    public function clearNextAddSequenceToken()
    {
        unset($this->next_add_sequence_token);
    }

    /**
     * Returns the unboxed value from <code>getNextAddSequenceToken()</code>

     * Output only. The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getNextAddSequenceTokenUnwrapped()
    {
        return $this->readWrapperValue("next_add_sequence_token");
    }

    /**
     * Output only. The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setNextAddSequenceToken($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->next_add_sequence_token = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The next sequence token to use when adding operations. Only set when the
     * mutate job status is PENDING.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue next_add_sequence_token = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setNextAddSequenceTokenUnwrapped($var)
    {
        $this->writeWrapperValue("next_add_sequence_token", $var);
        return $this;}

    /**
     * Output only. Contains additional information about this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MutateJob.MutateJobMetadata metadata = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V3\Resources\MutateJob\MutateJobMetadata
     */
    public function getMetadata()
    {
        return isset($this->metadata) ? $this->metadata : null;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Output only. Contains additional information about this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.resources.MutateJob.MutateJobMetadata metadata = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V3\Resources\MutateJob\MutateJobMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V3\Resources\MutateJob\MutateJobMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Output only. Status of this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MutateJobStatusEnum.MutateJobStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of this mutate job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v3.enums.MutateJobStatusEnum.MutateJobStatus status = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V3\Enums\MutateJobStatusEnum\MutateJobStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLongRunningOperation()
    {
        return isset($this->long_running_operation) ? $this->long_running_operation : null;
    }

    public function hasLongRunningOperation()
    {
        return isset($this->long_running_operation);
    }

    public function clearLongRunningOperation()
    {
        unset($this->long_running_operation);
    }

    /**
     * Returns the unboxed value from <code>getLongRunningOperation()</code>

     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getLongRunningOperationUnwrapped()
    {
        return $this->readWrapperValue("long_running_operation");
    }

    /**
     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLongRunningOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->long_running_operation = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The resource name of the long-running operation that can be used to poll
     * for completion. Only set when the mutate job status is RUNNING or DONE.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue long_running_operation = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setLongRunningOperationUnwrapped($var)
    {
        $this->writeWrapperValue("long_running_operation", $var);
        return $this;}

}

