// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/monitoring/dashboard/v1/dashboard.proto

package com.google.monitoring.dashboard.v1;

public final class DashboardsProto {
  private DashboardsProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_monitoring_dashboard_v1_Dashboard_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_monitoring_dashboard_v1_Dashboard_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n.google/monitoring/dashboard/v1/dashboa" +
      "rd.proto\022\036google.monitoring.dashboard.v1" +
      "\032\037google/api/field_behavior.proto\032\031googl" +
      "e/api/resource.proto\032,google/monitoring/" +
      "dashboard/v1/layouts.proto\"\361\002\n\tDashboard" +
      "\022\021\n\004name\030\001 \001(\tB\003\340A\005\022\031\n\014display_name\030\002 \001(" +
      "\tB\003\340A\002\022\014\n\004etag\030\004 \001(\t\022A\n\013grid_layout\030\005 \001(" +
      "\0132*.google.monitoring.dashboard.v1.GridL" +
      "ayoutH\000\022?\n\nrow_layout\030\010 \001(\0132).google.mon" +
      "itoring.dashboard.v1.RowLayoutH\000\022E\n\rcolu" +
      "mn_layout\030\t \001(\0132,.google.monitoring.dash" +
      "board.v1.ColumnLayoutH\000:S\352AP\n#monitoring" +
      ".googleapis.com/Dashboard\022)projects/{pro" +
      "ject}/dashboards/{dashboard}B\010\n\006layoutB\253" +
      "\001\n\"com.google.monitoring.dashboard.v1B\017D" +
      "ashboardsProtoP\001ZGgoogle.golang.org/genp" +
      "roto/googleapis/monitoring/dashboard/v1;" +
      "dashboard\352\002(Google::Cloud::Monitoring::D" +
      "ashboard::V1b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.monitoring.dashboard.v1.LayoutsProto.getDescriptor(),
        });
    internal_static_google_monitoring_dashboard_v1_Dashboard_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_monitoring_dashboard_v1_Dashboard_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_monitoring_dashboard_v1_Dashboard_descriptor,
        new java.lang.String[] { "Name", "DisplayName", "Etag", "GridLayout", "RowLayout", "ColumnLayout", "Layout", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.monitoring.dashboard.v1.LayoutsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
