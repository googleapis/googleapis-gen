// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/logging/v2/logging_metrics.proto

package com.google.logging.v2;

public final class LoggingMetricsProto {
  private LoggingMetricsProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_logging_v2_LogMetric_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_logging_v2_LogMetric_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_logging_v2_LogMetric_LabelExtractorsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_logging_v2_LogMetric_LabelExtractorsEntry_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_logging_v2_ListLogMetricsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_logging_v2_ListLogMetricsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_logging_v2_ListLogMetricsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_logging_v2_ListLogMetricsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_logging_v2_GetLogMetricRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_logging_v2_GetLogMetricRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_logging_v2_CreateLogMetricRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_logging_v2_CreateLogMetricRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_logging_v2_UpdateLogMetricRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_logging_v2_UpdateLogMetricRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_logging_v2_DeleteLogMetricRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_logging_v2_DeleteLogMetricRequest_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n\'google/logging/v2/logging_metrics.prot" +
      "o\022\021google.logging.v2\032\027google/api/client." +
      "proto\032\035google/api/distribution.proto\032\037go" +
      "ogle/api/field_behavior.proto\032\027google/ap" +
      "i/metric.proto\032\031google/api/resource.prot" +
      "o\032\036google/protobuf/duration.proto\032\033googl" +
      "e/protobuf/empty.proto\032 google/protobuf/" +
      "field_mask.proto\032\037google/protobuf/timest" +
      "amp.proto\032\034google/api/annotations.proto\"" +
      "\214\005\n\tLogMetric\022\021\n\004name\030\001 \001(\tB\003\340A\002\022\030\n\013desc" +
      "ription\030\002 \001(\tB\003\340A\001\022\023\n\006filter\030\003 \001(\tB\003\340A\002\022" +
      "<\n\021metric_descriptor\030\005 \001(\0132\034.google.api." +
      "MetricDescriptorB\003\340A\001\022\034\n\017value_extractor" +
      "\030\006 \001(\tB\003\340A\001\022P\n\020label_extractors\030\007 \003(\01321." +
      "google.logging.v2.LogMetric.LabelExtract" +
      "orsEntryB\003\340A\001\022C\n\016bucket_options\030\010 \001(\0132&." +
      "google.api.Distribution.BucketOptionsB\003\340" +
      "A\001\0224\n\013create_time\030\t \001(\0132\032.google.protobu" +
      "f.TimestampB\003\340A\003\0224\n\013update_time\030\n \001(\0132\032." +
      "google.protobuf.TimestampB\003\340A\003\022<\n\007versio" +
      "n\030\004 \001(\0162\'.google.logging.v2.LogMetric.Ap" +
      "iVersionB\002\030\001\0326\n\024LabelExtractorsEntry\022\013\n\003" +
      "key\030\001 \001(\t\022\r\n\005value\030\002 \001(\t:\0028\001\"\034\n\nApiVersi" +
      "on\022\006\n\002V2\020\000\022\006\n\002V1\020\001:J\352AG\n logging.googlea" +
      "pis.com/LogMetric\022#projects/{project}/me" +
      "trics/{metric}\"\215\001\n\025ListLogMetricsRequest" +
      "\022C\n\006parent\030\001 \001(\tB3\340A\002\372A-\n+cloudresourcem" +
      "anager.googleapis.com/Project\022\027\n\npage_to" +
      "ken\030\002 \001(\tB\003\340A\001\022\026\n\tpage_size\030\003 \001(\005B\003\340A\001\"`" +
      "\n\026ListLogMetricsResponse\022-\n\007metrics\030\001 \003(" +
      "\0132\034.google.logging.v2.LogMetric\022\027\n\017next_" +
      "page_token\030\002 \001(\t\"T\n\023GetLogMetricRequest\022" +
      "=\n\013metric_name\030\001 \001(\tB(\340A\002\372A\"\n logging.go" +
      "ogleapis.com/LogMetric\"\205\001\n\026CreateLogMetr" +
      "icRequest\0228\n\006parent\030\001 \001(\tB(\340A\002\372A\"\022 loggi" +
      "ng.googleapis.com/LogMetric\0221\n\006metric\030\002 " +
      "\001(\0132\034.google.logging.v2.LogMetricB\003\340A\002\"\212" +
      "\001\n\026UpdateLogMetricRequest\022=\n\013metric_name" +
      "\030\001 \001(\tB(\340A\002\372A\"\n logging.googleapis.com/L" +
      "ogMetric\0221\n\006metric\030\002 \001(\0132\034.google.loggin" +
      "g.v2.LogMetricB\003\340A\002\"W\n\026DeleteLogMetricRe" +
      "quest\022=\n\013metric_name\030\001 \001(\tB(\340A\002\372A\"\n logg" +
      "ing.googleapis.com/LogMetric2\256\010\n\020Metrics" +
      "ServiceV2\022\227\001\n\016ListLogMetrics\022(.google.lo" +
      "gging.v2.ListLogMetricsRequest\032).google." +
      "logging.v2.ListLogMetricsResponse\"0\202\323\344\223\002" +
      "!\022\037/v2/{parent=projects/*}/metrics\332A\006par" +
      "ent\022\222\001\n\014GetLogMetric\022&.google.logging.v2" +
      ".GetLogMetricRequest\032\034.google.logging.v2" +
      ".LogMetric\"<\202\323\344\223\002(\022&/v2/{metric_name=pro" +
      "jects/*/metrics/*}\332A\013metric_name\022\233\001\n\017Cre" +
      "ateLogMetric\022).google.logging.v2.CreateL" +
      "ogMetricRequest\032\034.google.logging.v2.LogM" +
      "etric\"?\202\323\344\223\002)\"\037/v2/{parent=projects/*}/m" +
      "etrics:\006metric\332A\rparent,metric\022\247\001\n\017Updat" +
      "eLogMetric\022).google.logging.v2.UpdateLog" +
      "MetricRequest\032\034.google.logging.v2.LogMet" +
      "ric\"K\202\323\344\223\0020\032&/v2/{metric_name=projects/*" +
      "/metrics/*}:\006metric\332A\022metric_name,metric" +
      "\022\222\001\n\017DeleteLogMetric\022).google.logging.v2" +
      ".DeleteLogMetricRequest\032\026.google.protobu" +
      "f.Empty\"<\202\323\344\223\002(*&/v2/{metric_name=projec" +
      "ts/*/metrics/*}\332A\013metric_name\032\215\002\312A\026loggi" +
      "ng.googleapis.com\322A\360\001https://www.googlea" +
      "pis.com/auth/cloud-platform,https://www." +
      "googleapis.com/auth/cloud-platform.read-" +
      "only,https://www.googleapis.com/auth/log" +
      "ging.admin,https://www.googleapis.com/au" +
      "th/logging.read,https://www.googleapis.c" +
      "om/auth/logging.writeB\274\001\n\025com.google.log" +
      "ging.v2B\023LoggingMetricsProtoP\001Z8google.g" +
      "olang.org/genproto/googleapis/logging/v2" +
      ";logging\370\001\001\252\002\027Google.Cloud.Logging.V2\312\002\027" +
      "Google\\Cloud\\Logging\\V2\352\002\032Google::Cloud:" +
      ":Logging::V2b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.ClientProto.getDescriptor(),
          com.google.api.DistributionProto.getDescriptor(),
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.MetricProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.protobuf.DurationProto.getDescriptor(),
          com.google.protobuf.EmptyProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_logging_v2_LogMetric_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_logging_v2_LogMetric_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_logging_v2_LogMetric_descriptor,
        new java.lang.String[] { "Name", "Description", "Filter", "MetricDescriptor", "ValueExtractor", "LabelExtractors", "BucketOptions", "CreateTime", "UpdateTime", "Version", });
    internal_static_google_logging_v2_LogMetric_LabelExtractorsEntry_descriptor =
      internal_static_google_logging_v2_LogMetric_descriptor.getNestedTypes().get(0);
    internal_static_google_logging_v2_LogMetric_LabelExtractorsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_logging_v2_LogMetric_LabelExtractorsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    internal_static_google_logging_v2_ListLogMetricsRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_logging_v2_ListLogMetricsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_logging_v2_ListLogMetricsRequest_descriptor,
        new java.lang.String[] { "Parent", "PageToken", "PageSize", });
    internal_static_google_logging_v2_ListLogMetricsResponse_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_logging_v2_ListLogMetricsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_logging_v2_ListLogMetricsResponse_descriptor,
        new java.lang.String[] { "Metrics", "NextPageToken", });
    internal_static_google_logging_v2_GetLogMetricRequest_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_logging_v2_GetLogMetricRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_logging_v2_GetLogMetricRequest_descriptor,
        new java.lang.String[] { "MetricName", });
    internal_static_google_logging_v2_CreateLogMetricRequest_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_logging_v2_CreateLogMetricRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_logging_v2_CreateLogMetricRequest_descriptor,
        new java.lang.String[] { "Parent", "Metric", });
    internal_static_google_logging_v2_UpdateLogMetricRequest_descriptor =
      getDescriptor().getMessageTypes().get(5);
    internal_static_google_logging_v2_UpdateLogMetricRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_logging_v2_UpdateLogMetricRequest_descriptor,
        new java.lang.String[] { "MetricName", "Metric", });
    internal_static_google_logging_v2_DeleteLogMetricRequest_descriptor =
      getDescriptor().getMessageTypes().get(6);
    internal_static_google_logging_v2_DeleteLogMetricRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_logging_v2_DeleteLogMetricRequest_descriptor,
        new java.lang.String[] { "MetricName", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.methodSignature);
    registry.add(com.google.api.ClientProto.oauthScopes);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.ClientProto.getDescriptor();
    com.google.api.DistributionProto.getDescriptor();
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.MetricProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.protobuf.DurationProto.getDescriptor();
    com.google.protobuf.EmptyProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
