// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/retail/v2beta/purge_config.proto

package com.google.cloud.retail.v2beta;

public final class PurgeConfigProto {
  private PurgeConfigProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2beta_PurgeMetadata_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2beta_PurgeMetadata_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2beta_PurgeUserEventsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2beta_PurgeUserEventsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_retail_v2beta_PurgeUserEventsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_retail_v2beta_PurgeUserEventsResponse_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n-google/cloud/retail/v2beta/purge_confi" +
      "g.proto\022\032google.cloud.retail.v2beta\032\034goo" +
      "gle/api/annotations.proto\032\037google/api/fi" +
      "eld_behavior.proto\"\017\n\rPurgeMetadata\"Q\n\026P" +
      "urgeUserEventsRequest\022\023\n\006parent\030\001 \001(\tB\003\340" +
      "A\002\022\023\n\006filter\030\002 \001(\tB\003\340A\002\022\r\n\005force\030\003 \001(\010\"6" +
      "\n\027PurgeUserEventsResponse\022\033\n\023purged_even" +
      "ts_count\030\001 \001(\003B\331\001\n\036com.google.cloud.reta" +
      "il.v2betaB\020PurgeConfigProtoP\001Z@google.go" +
      "lang.org/genproto/googleapis/cloud/retai" +
      "l/v2beta;retail\242\002\006RETAIL\252\002\032Google.Cloud." +
      "Retail.V2Beta\312\002\032Google\\Cloud\\Retail\\V2be" +
      "ta\352\002\035Google::Cloud::Retail::V2betab\006prot" +
      "o3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
        });
    internal_static_google_cloud_retail_v2beta_PurgeMetadata_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_retail_v2beta_PurgeMetadata_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2beta_PurgeMetadata_descriptor,
        new java.lang.String[] { });
    internal_static_google_cloud_retail_v2beta_PurgeUserEventsRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_retail_v2beta_PurgeUserEventsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2beta_PurgeUserEventsRequest_descriptor,
        new java.lang.String[] { "Parent", "Filter", "Force", });
    internal_static_google_cloud_retail_v2beta_PurgeUserEventsResponse_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_retail_v2beta_PurgeUserEventsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_retail_v2beta_PurgeUserEventsResponse_descriptor,
        new java.lang.String[] { "PurgedEventsCount", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
