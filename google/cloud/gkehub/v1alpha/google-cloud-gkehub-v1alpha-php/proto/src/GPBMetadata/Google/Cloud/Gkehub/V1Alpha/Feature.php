<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/gkehub/v1alpha/feature.proto

namespace GPBMetadata\Google\Cloud\Gkehub\V1Alpha;

class Feature
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Gkehub\V1Alpha\Cloudauditlogging\Cloudauditlogging::initOnce();
        \GPBMetadata\Google\Cloud\Gkehub\V1Alpha\Configmanagement\Configmanagement::initOnce();
        \GPBMetadata\Google\Cloud\Gkehub\V1Alpha\Metering\Metering::initOnce();
        \GPBMetadata\Google\Cloud\Gkehub\V1Alpha\Multiclusteringress\Multiclusteringress::initOnce();
        \GPBMetadata\Google\Cloud\Gkehub\V1Alpha\Servicemesh\Servicemesh::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)google/cloud/gkehub/v1alpha/feature.protogoogle.cloud.gkehub.v1alphagoogle/api/resource.protoEgoogle/cloud/gkehub/v1alpha/cloudauditlogging/cloudauditlogging.protoCgoogle/cloud/gkehub/v1alpha/configmanagement/configmanagement.proto3google/cloud/gkehub/v1alpha/metering/metering.protoIgoogle/cloud/gkehub/v1alpha/multiclusteringress/multiclusteringress.proto9google/cloud/gkehub/v1alpha/servicemesh/servicemesh.protogoogle/protobuf/timestamp.protogoogle/api/annotations.proto"�
Feature
name (	B�A@
labels (20.google.cloud.gkehub.v1alpha.Feature.LabelsEntryN
resource_state (21.google.cloud.gkehub.v1alpha.FeatureResourceStateB�AA
spec (2..google.cloud.gkehub.v1alpha.CommonFeatureSpecB�AX
membership_specs (29.google.cloud.gkehub.v1alpha.Feature.MembershipSpecsEntryB�AC
state (2/.google.cloud.gkehub.v1alpha.CommonFeatureStateB�AZ
membership_states (2:.google.cloud.gkehub.v1alpha.Feature.MembershipStatesEntryB�A4
create_time (2.google.protobuf.TimestampB�A4
update_time	 (2.google.protobuf.TimestampB�A4
delete_time
 (2.google.protobuf.TimestampB�A-
LabelsEntry
key (	
value (	:8j
MembershipSpecsEntry
key (	A
value (22.google.cloud.gkehub.v1alpha.MembershipFeatureSpec:8l
MembershipStatesEntry
key (	B
value (23.google.cloud.gkehub.v1alpha.MembershipFeatureState:8:^�A[
gkehub.googleapis.com/Feature:projects/{project}/locations/{location}/features/{feature}"�
FeatureResourceStateF
state (27.google.cloud.gkehub.v1alpha.FeatureResourceState.State"k
State
STATE_UNSPECIFIED 
ENABLING

ACTIVE
	DISABLING
UPDATING
SERVICE_UPDATING"�
FeatureState<
code (2..google.cloud.gkehub.v1alpha.FeatureState.Code
description (	/
update_time (2.google.protobuf.Timestamp"<
Code
CODE_UNSPECIFIED 
OK
WARNING	
ERROR"�
CommonFeatureSpec[
multiclusteringressf (2<.google.cloud.gkehub.multiclusteringress.v1alpha.FeatureSpecH W
cloudauditloggingl (2:.google.cloud.gkehub.cloudauditlogging.v1alpha.FeatureSpecH B
feature_spec"�
CommonFeatureStateL
servicemeshd (25.google.cloud.gkehub.servicemesh.v1alpha.FeatureStateH =
state (2).google.cloud.gkehub.v1alpha.FeatureStateB�AB
feature_state"�
MembershipFeatureSpecX
configmanagementj (2<.google.cloud.gkehub.configmanagement.v1alpha.MembershipSpecH B
feature_spec"�
MembershipFeatureStateO
servicemeshd (28.google.cloud.gkehub.servicemesh.v1alpha.MembershipStateH I
meteringh (25.google.cloud.gkehub.metering.v1alpha.MembershipStateH Y
configmanagementj (2=.google.cloud.gkehub.configmanagement.v1alpha.MembershipStateH 8
state (2).google.cloud.gkehub.v1alpha.FeatureStateB
feature_stateB�
com.google.cloud.gkehub.v1alphaBFeatureProtoPZAgoogle.golang.org/genproto/googleapis/cloud/gkehub/v1alpha;gkehub�Google.Cloud.GkeHub.V1Alpha�Google\\Cloud\\GkeHub\\V1alpha�Google::Cloud::GkeHub::V1alphabproto3'
        , true);

        static::$is_initialized = true;
    }
}

