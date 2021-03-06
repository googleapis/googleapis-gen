<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/model_deployment_monitoring_job.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1Beta1;

class ModelDeploymentMonitoringJob
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\FeatureMonitoringStats::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\Io::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\JobState::initOnce();
        \GPBMetadata\Google\Cloud\Aiplatform\V1Beta1\ModelMonitoring::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Egoogle/cloud/aiplatform/v1beta1/model_deployment_monitoring_job.protogoogle.cloud.aiplatform.v1beta1google/api/resource.proto>google/cloud/aiplatform/v1beta1/feature_monitoring_stats.proto(google/cloud/aiplatform/v1beta1/io.proto/google/cloud/aiplatform/v1beta1/job_state.proto6google/cloud/aiplatform/v1beta1/model_monitoring.protogoogle/protobuf/duration.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
ModelDeploymentMonitoringJob
name (	B�A
display_name (	B�A<
endpoint (	B*�A�A$
"aiplatform.googleapis.com/Endpoint=
state (2).google.cloud.aiplatform.v1beta1.JobStateB�Ar
schedule_state (2U.google.cloud.aiplatform.v1beta1.ModelDeploymentMonitoringJob.MonitoringScheduleStateB�A�
-model_deployment_monitoring_objective_configs (2I.google.cloud.aiplatform.v1beta1.ModelDeploymentMonitoringObjectiveConfigB�A�
+model_deployment_monitoring_schedule_config (2H.google.cloud.aiplatform.v1beta1.ModelDeploymentMonitoringScheduleConfigB�AY
logging_sampling_strategy (21.google.cloud.aiplatform.v1beta1.SamplingStrategyB�Ab
model_monitoring_alert_config (2;.google.cloud.aiplatform.v1beta1.ModelMonitoringAlertConfig#
predict_instance_schema_uri	 (	7
sample_predict_instance (2.google.protobuf.Value$
analysis_instance_schema_uri (	e
bigquery_tables
 (2G.google.cloud.aiplatform.v1beta1.ModelDeploymentMonitoringBigQueryTableB�A*
log_ttl (2.google.protobuf.DurationY
labels (2I.google.cloud.aiplatform.v1beta1.ModelDeploymentMonitoringJob.LabelsEntry4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�A;
next_schedule_time (2.google.protobuf.TimestampB�AW
stats_anomalies_base_directory (2/.google.cloud.aiplatform.v1beta1.GcsDestination-
LabelsEntry
key (	
value (	:8"k
MonitoringScheduleState)
%MONITORING_SCHEDULE_STATE_UNSPECIFIED 
PENDING
OFFLINE
RUNNING:��A�
6aiplatform.googleapis.com/ModelDeploymentMonitoringJobgprojects/{project}/locations/{location}/modelDeploymentMonitoringJobs/{model_deployment_monitoring_job}"�
&ModelDeploymentMonitoringBigQueryTablee

log_source (2Q.google.cloud.aiplatform.v1beta1.ModelDeploymentMonitoringBigQueryTable.LogSourcea
log_type (2O.google.cloud.aiplatform.v1beta1.ModelDeploymentMonitoringBigQueryTable.LogType
bigquery_table_path (	"B
	LogSource
LOG_SOURCE_UNSPECIFIED 
TRAINING
SERVING"=
LogType
LOG_TYPE_UNSPECIFIED 
PREDICT
EXPLAIN"�
(ModelDeploymentMonitoringObjectiveConfig
deployed_model_id (	Y
objective_config (2?.google.cloud.aiplatform.v1beta1.ModelMonitoringObjectiveConfig"c
\'ModelDeploymentMonitoringScheduleConfig8
monitor_interval (2.google.protobuf.DurationB�A"�
ModelMonitoringStatsAnomaliesZ
	objective (2G.google.cloud.aiplatform.v1beta1.ModelDeploymentMonitoringObjectiveType
deployed_model_id (	
anomaly_count (s
feature_stats (2\\.google.cloud.aiplatform.v1beta1.ModelMonitoringStatsAnomalies.FeatureHistoricStatsAnomalies�
FeatureHistoricStatsAnomalies
feature_display_name (	C
	threshold (20.google.cloud.aiplatform.v1beta1.ThresholdConfigL
training_stats (24.google.cloud.aiplatform.v1beta1.FeatureStatsAnomalyN
prediction_stats (24.google.cloud.aiplatform.v1beta1.FeatureStatsAnomaly*�
&ModelDeploymentMonitoringObjectiveType:
6MODEL_DEPLOYMENT_MONITORING_OBJECTIVE_TYPE_UNSPECIFIED 
RAW_FEATURE_SKEW
RAW_FEATURE_DRIFT
FEATURE_ATTRIBUTION_SKEW
FEATURE_ATTRIBUTION_DRIFTB�
#com.google.cloud.aiplatform.v1beta1B!ModelDeploymentMonitoringJobProtoPZIgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1beta1;aiplatformbproto3'
        , true);

        static::$is_initialized = true;
    }
}

