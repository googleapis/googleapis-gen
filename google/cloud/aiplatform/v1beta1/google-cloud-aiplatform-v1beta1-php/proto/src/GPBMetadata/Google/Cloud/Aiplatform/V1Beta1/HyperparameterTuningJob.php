<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/hyperparameter_tuning_job.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1Beta1;

class HyperparameterTuningJob
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\CustomJob::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\JobState::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\Study::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
?google/cloud/aiplatform/v1beta1/hyperparameter_tuning_job.protogoogle.cloud.aiplatform.v1beta1google/api/resource.proto0google/cloud/aiplatform/v1beta1/custom_job.proto/google/cloud/aiplatform/v1beta1/job_state.proto+google/cloud/aiplatform/v1beta1/study.protogoogle/protobuf/timestamp.protogoogle/rpc/status.protogoogle/api/annotations.proto"�
HyperparameterTuningJob
name (	B�A
display_name (	B�AC

study_spec (2*.google.cloud.aiplatform.v1beta1.StudySpecB�A
max_trial_count (B�A!
parallel_trial_count (B�A
max_failed_trial_count (K
trial_job_spec (2..google.cloud.aiplatform.v1beta1.CustomJobSpecB�A;
trials	 (2&.google.cloud.aiplatform.v1beta1.TrialB�A=
state
 (2).google.cloud.aiplatform.v1beta1.JobStateB�A4
create_time (2.google.protobuf.TimestampB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A&
error (2.google.rpc.StatusB�AT
labels (2D.google.cloud.aiplatform.v1beta1.HyperparameterTuningJob.LabelsEntry-
LabelsEntry
key (	
value (	:8:��A�
1aiplatform.googleapis.com/HyperparameterTuningJob\\projects/{project}/locations/{location}/hyperparameterTuningJobs/{hyperparameter_tuning_job}B�
#com.google.cloud.aiplatform.v1beta1BHyperparameterTuningJobProtoPZIgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1beta1;aiplatformbproto3'
        , true);

        static::$is_initialized = true;
    }
}

