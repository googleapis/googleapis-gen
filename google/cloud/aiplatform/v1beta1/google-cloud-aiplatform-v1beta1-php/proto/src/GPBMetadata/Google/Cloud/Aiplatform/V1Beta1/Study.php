<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1beta1/study.proto

namespace GPBMetadata\Google\Cloud\Aiplatform\V1Beta1;

class Study
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+google/cloud/aiplatform/v1beta1/study.protogoogle.cloud.aiplatform.v1beta1google/api/resource.protogoogle/protobuf/duration.protogoogle/protobuf/struct.protogoogle/protobuf/timestamp.protogoogle/protobuf/wrappers.protogoogle/api/annotations.proto"�
Trial
id (	B�A@
state (2,.google.cloud.aiplatform.v1beta1.Trial.StateB�AI

parameters (20.google.cloud.aiplatform.v1beta1.Trial.ParameterB�AL
final_measurement (2,.google.cloud.aiplatform.v1beta1.MeasurementB�A3

start_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A?

custom_job (	B+�A�A%
#aiplatform.googleapis.com/CustomJobR
	Parameter
parameter_id (	B�A*
value (2.google.protobuf.ValueB�A"f
State
STATE_UNSPECIFIED 
	REQUESTED

ACTIVE
STOPPING
	SUCCEEDED

INFEASIBLE:l�Ai
aiplatform.googleapis.com/TrialFprojects/{project}/locations/{location}/studies/{study}/trials/{trial}"�
	StudySpecK
metrics (25.google.cloud.aiplatform.v1beta1.StudySpec.MetricSpecB�AQ

parameters (28.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpecB�AG
	algorithm (24.google.cloud.aiplatform.v1beta1.StudySpec.AlgorithmV
observation_noise (2;.google.cloud.aiplatform.v1beta1.StudySpec.ObservationNoiseg
measurement_selection_type (2C.google.cloud.aiplatform.v1beta1.StudySpec.MeasurementSelectionType�

MetricSpec
	metric_id (	B�AQ
goal (2>.google.cloud.aiplatform.v1beta1.StudySpec.MetricSpec.GoalTypeB�A"A
GoalType
GOAL_TYPE_UNSPECIFIED 
MAXIMIZE
MINIMIZE�
ParameterSpece
double_value_spec (2H.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.DoubleValueSpecH g
integer_value_spec (2I.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.IntegerValueSpecH o
categorical_value_spec (2M.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.CategoricalValueSpecH i
discrete_value_spec (2J.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.DiscreteValueSpecH 
parameter_id (	B�AV

scale_type (2B.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.ScaleTypev
conditional_parameter_specs
 (2Q.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.ConditionalParameterSpecA
DoubleValueSpec
	min_value (B�A
	max_value (B�AB
IntegerValueSpec
	min_value (B�A
	max_value (B�A+
CategoricalValueSpec
values (	B�A(
DiscreteValueSpec
values (B�A�
ConditionalParameterSpec�
parent_discrete_values (2h.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.ConditionalParameterSpec.DiscreteValueConditionH �
parent_int_values (2c.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.ConditionalParameterSpec.IntValueConditionH �
parent_categorical_values (2k.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpec.ConditionalParameterSpec.CategoricalValueConditionH U
parameter_spec (28.google.cloud.aiplatform.v1beta1.StudySpec.ParameterSpecB�A-
DiscreteValueCondition
values (B�A(
IntValueCondition
values (B�A0
CategoricalValueCondition
values (	B�AB
parent_value_condition"n
	ScaleType
SCALE_TYPE_UNSPECIFIED 
UNIT_LINEAR_SCALE
UNIT_LOG_SCALE
UNIT_REVERSE_LOG_SCALEB
parameter_value_spec"J
	Algorithm
ALGORITHM_UNSPECIFIED 
GRID_SEARCH
RANDOM_SEARCH"H
ObservationNoise!
OBSERVATION_NOISE_UNSPECIFIED 
LOW
HIGH"r
MeasurementSelectionType*
&MEASUREMENT_SELECTION_TYPE_UNSPECIFIED 
LAST_MEASUREMENT
BEST_MEASUREMENT"�
Measurement

step_count (B�AI
metrics (23.google.cloud.aiplatform.v1beta1.Measurement.MetricB�A4
Metric
	metric_id (	B�A
value (B�AB~
#com.google.cloud.aiplatform.v1beta1B
StudyProtoPZIgoogle.golang.org/genproto/googleapis/cloud/aiplatform/v1beta1;aiplatformbproto3'
        , true);

        static::$is_initialized = true;
    }
}

