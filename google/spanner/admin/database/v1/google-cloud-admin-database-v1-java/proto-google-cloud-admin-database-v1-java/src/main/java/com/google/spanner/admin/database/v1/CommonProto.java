// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/spanner/admin/database/v1/common.proto

package com.google.spanner.admin.database.v1;

public final class CommonProto {
  private CommonProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_spanner_admin_database_v1_OperationProgress_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_spanner_admin_database_v1_OperationProgress_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n-google/spanner/admin/database/v1/commo" +
      "n.proto\022 google.spanner.admin.database.v" +
      "1\032\037google/api/field_behavior.proto\032\037goog" +
      "le/protobuf/timestamp.proto\032\034google/api/" +
      "annotations.proto\"\213\001\n\021OperationProgress\022" +
      "\030\n\020progress_percent\030\001 \001(\005\022.\n\nstart_time\030" +
      "\002 \001(\0132\032.google.protobuf.Timestamp\022,\n\010end" +
      "_time\030\003 \001(\0132\032.google.protobuf.TimestampB" +
      "\377\001\n$com.google.spanner.admin.database.v1" +
      "B\013CommonProtoP\001ZHgoogle.golang.org/genpr" +
      "oto/googleapis/spanner/admin/database/v1" +
      ";database\252\002&Google.Cloud.Spanner.Admin.D" +
      "atabase.V1\312\002&Google\\Cloud\\Spanner\\Admin\\" +
      "Database\\V1\352\002+Google::Cloud::Spanner::Ad" +
      "min::Database::V1b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_spanner_admin_database_v1_OperationProgress_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_spanner_admin_database_v1_OperationProgress_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_spanner_admin_database_v1_OperationProgress_descriptor,
        new java.lang.String[] { "ProgressPercent", "StartTime", "EndTime", });
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
