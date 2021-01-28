// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/pubsublite/v1/topic_stats.proto

package com.google.cloud.pubsublite.proto;

public final class TopicStatsProto {
  private TopicStatsProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorResponse_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n,google/cloud/pubsublite/v1/topic_stats" +
      ".proto\022\032google.cloud.pubsublite.v1\032\034goog" +
      "le/api/annotations.proto\032\037google/api/fie" +
      "ld_behavior.proto\032\031google/api/resource.p" +
      "roto\032\'google/cloud/pubsublite/v1/common." +
      "proto\032\037google/protobuf/timestamp.proto\032\027" +
      "google/api/client.proto\"\336\001\n\032ComputeMessa" +
      "geStatsRequest\0226\n\005topic\030\001 \001(\tB\'\340A\002\372A!\n\037p" +
      "ubsublite.googleapis.com/Topic\022\026\n\tpartit" +
      "ion\030\002 \001(\003B\003\340A\002\0228\n\014start_cursor\030\003 \001(\0132\".g" +
      "oogle.cloud.pubsublite.v1.Cursor\0226\n\nend_" +
      "cursor\030\004 \001(\0132\".google.cloud.pubsublite.v" +
      "1.Cursor\"\275\001\n\033ComputeMessageStatsResponse" +
      "\022\025\n\rmessage_count\030\001 \001(\003\022\025\n\rmessage_bytes" +
      "\030\002 \001(\003\0228\n\024minimum_publish_time\030\003 \001(\0132\032.g" +
      "oogle.protobuf.Timestamp\0226\n\022minimum_even" +
      "t_time\030\004 \001(\0132\032.google.protobuf.Timestamp" +
      "\"j\n\030ComputeHeadCursorRequest\0226\n\005topic\030\001 " +
      "\001(\tB\'\340A\002\372A!\n\037pubsublite.googleapis.com/T" +
      "opic\022\026\n\tpartition\030\002 \001(\003B\003\340A\002\"T\n\031ComputeH" +
      "eadCursorResponse\0227\n\013head_cursor\030\001 \001(\0132\"" +
      ".google.cloud.pubsublite.v1.Cursor2\232\004\n\021T" +
      "opicStatsService\022\335\001\n\023ComputeMessageStats" +
      "\0226.google.cloud.pubsublite.v1.ComputeMes" +
      "sageStatsRequest\0327.google.cloud.pubsubli" +
      "te.v1.ComputeMessageStatsResponse\"U\202\323\344\223\002" +
      "O\"J/v1/topicStats/{topic=projects/*/loca" +
      "tions/*/topics/*}:computeMessageStats:\001*" +
      "\022\325\001\n\021ComputeHeadCursor\0224.google.cloud.pu" +
      "bsublite.v1.ComputeHeadCursorRequest\0325.g" +
      "oogle.cloud.pubsublite.v1.ComputeHeadCur" +
      "sorResponse\"S\202\323\344\223\002M\"H/v1/topicStats/{top" +
      "ic=projects/*/locations/*/topics/*}:comp" +
      "uteHeadCursor:\001*\032M\312A\031pubsublite.googleap" +
      "is.com\322A.https://www.googleapis.com/auth" +
      "/cloud-platformB\326\001\n!com.google.cloud.pub" +
      "sublite.protoB\017TopicStatsProtoP\001ZDgoogle" +
      ".golang.org/genproto/googleapis/cloud/pu" +
      "bsublite/v1;pubsublite\252\002\032Google.Cloud.Pu" +
      "bSubLite.V1\312\002\032Google\\Cloud\\PubSubLite\\V1" +
      "\352\002\035Google::Cloud::PubSubLite::V1b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.cloud.pubsublite.proto.CommonProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
        });
    internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsRequest_descriptor,
        new java.lang.String[] { "Topic", "Partition", "StartCursor", "EndCursor", });
    internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsResponse_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_pubsublite_v1_ComputeMessageStatsResponse_descriptor,
        new java.lang.String[] { "MessageCount", "MessageBytes", "MinimumPublishTime", "MinimumEventTime", });
    internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorRequest_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorRequest_descriptor,
        new java.lang.String[] { "Topic", "Partition", });
    internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorResponse_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_pubsublite_v1_ComputeHeadCursorResponse_descriptor,
        new java.lang.String[] { "HeadCursor", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.oauthScopes);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.cloud.pubsublite.proto.CommonProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
