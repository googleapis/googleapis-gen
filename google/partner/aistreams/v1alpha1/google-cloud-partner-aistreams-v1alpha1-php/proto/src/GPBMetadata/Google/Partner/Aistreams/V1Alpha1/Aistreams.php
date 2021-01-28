<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/partner/aistreams/v1alpha1/aistreams.proto

namespace GPBMetadata\Google\Partner\Aistreams\V1Alpha1;

class Aistreams
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(
            '
�*
1google/partner/aistreams/v1alpha1/aistreams.proto!google.partner.aistreams.v1alpha1google/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto#google/longrunning/operations.proto google/protobuf/field_mask.protogoogle/protobuf/timestamp.proto"�
Cluster
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AF
labels (26.google.partner.aistreams.v1alpha1.Cluster.LabelsEntry
certificate (	B�A
service_endpoint (	B�A-
LabelsEntry
key (	
value (	:8:a�A^
 aistreams.googleapis.com/Cluster:projects/{project}/locations/{location}/clusters/{cluster}"�
ListClustersRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location
	page_size (

page_token (	
filter (	
order_by (	"�
ListClustersResponse<
clusters (2*.google.partner.aistreams.v1alpha1.Cluster
next_page_token (	
unreachable (	"K
GetClusterRequest6
name (	B(�A�A"
 aistreams.googleapis.com/Cluster"�
CreateClusterRequest9
parent (	B)�A�A#
!locations.googleapis.com/Location

cluster_id (	B�A@
cluster (2*.google.partner.aistreams.v1alpha1.ClusterB�A

request_id (	B�A"�
UpdateClusterRequest4
update_mask (2.google.protobuf.FieldMaskB�A@
cluster (2*.google.partner.aistreams.v1alpha1.ClusterB�A

request_id (	B�A"g
DeleteClusterRequest6
name (	B(�A�A"
 aistreams.googleapis.com/Cluster

request_id (	B�A"�
Stream
name (	4
create_time (2.google.protobuf.TimestampB�A4
update_time (2.google.protobuf.TimestampB�AE
labels (25.google.partner.aistreams.v1alpha1.Stream.LabelsEntry-
LabelsEntry
key (	
value (	:8:q�An
aistreams.googleapis.com/StreamKprojects/{project}/locations/{location}/clusters/{cluster}/streams/{stream}"�
ListStreamsRequest8
parent (	B(�A�A"
 aistreams.googleapis.com/Cluster
	page_size (

page_token (	
filter (	
order_by (	"
ListStreamsResponse:
streams (2).google.partner.aistreams.v1alpha1.Stream
next_page_token (	
unreachable (	"I
GetStreamRequest5
name (	B\'�A�A!
aistreams.googleapis.com/Stream"�
CreateStreamRequest8
parent (	B(�A�A"
 aistreams.googleapis.com/Cluster
	stream_id (	B�A>
stream (2).google.partner.aistreams.v1alpha1.StreamB�A

request_id (	B�A"�
UpdateStreamRequest4
update_mask (2.google.protobuf.FieldMaskB�A>
stream (2).google.partner.aistreams.v1alpha1.StreamB�A

request_id (	B�A"e
DeleteStreamRequest5
name (	B\'�A�A!
aistreams.googleapis.com/Stream

request_id (	B�A"�
OperationMetadata4
create_time (2.google.protobuf.TimestampB�A1
end_time (2.google.protobuf.TimestampB�A
target (	B�A
verb (	B�A
status_message (	B�A#
requested_cancellation (B�A
api_version (	B�A2�
	AIStreams�
ListClusters6.google.partner.aistreams.v1alpha1.ListClustersRequest7.google.partner.aistreams.v1alpha1.ListClustersResponse"C���42/v1alpha1/{parent=projects/*/locations/*}/clusters�Aparent�

GetCluster4.google.partner.aistreams.v1alpha1.GetClusterRequest*.google.partner.aistreams.v1alpha1.Cluster"A���42/v1alpha1/{name=projects/*/locations/*/clusters/*}�Aname�
CreateCluster7.google.partner.aistreams.v1alpha1.CreateClusterRequest.google.longrunning.Operation"~���="2/v1alpha1/{parent=projects/*/locations/*}/clusters:cluster�Aparent,cluster,cluster_id�A
ClusterOperationMetadata�
UpdateCluster7.google.partner.aistreams.v1alpha1.UpdateClusterRequest.google.longrunning.Operation"����E2:/v1alpha1/{cluster.name=projects/*/locations/*/clusters/*}:cluster�Acluster,update_mask�A
ClusterOperationMetadata�
DeleteCluster7.google.partner.aistreams.v1alpha1.DeleteClusterRequest.google.longrunning.Operation"n���4*2/v1alpha1/{name=projects/*/locations/*/clusters/*}�Aname�A*
google.protobuf.EmptyOperationMetadata�
ListStreams5.google.partner.aistreams.v1alpha1.ListStreamsRequest6.google.partner.aistreams.v1alpha1.ListStreamsResponse"M���></v1alpha1/{parent=projects/*/locations/*/clusters/*}/streams�Aparent�
	GetStream3.google.partner.aistreams.v1alpha1.GetStreamRequest).google.partner.aistreams.v1alpha1.Stream"K���></v1alpha1/{name=projects/*/locations/*/clusters/*/streams/*}�Aname�
CreateStream6.google.partner.aistreams.v1alpha1.CreateStreamRequest.google.longrunning.Operation"����F"</v1alpha1/{parent=projects/*/locations/*/clusters/*}/streams:stream�Aparent,stream,stream_id�A
StreamOperationMetadata�
UpdateStream6.google.partner.aistreams.v1alpha1.UpdateStreamRequest.google.longrunning.Operation"����M2C/v1alpha1/{stream.name=projects/*/locations/*/clusters/*/streams/*}:stream�Astream,update_mask�A
StreamOperationMetadata�
DeleteStream6.google.partner.aistreams.v1alpha1.DeleteStreamRequest.google.longrunning.Operation"x���>*</v1alpha1/{name=projects/*/locations/*/clusters/*/streams/*}�Aname�A*
google.protobuf.EmptyOperationMetadataL�Aaistreams.googleapis.com�A.https://www.googleapis.com/auth/cloud-platformB�
%com.google.partner.aistreams.v1alpha1BAIStreamsProtoPZJgoogle.golang.org/genproto/googleapis/partner/aistreams/v1alpha1;aistreams�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

