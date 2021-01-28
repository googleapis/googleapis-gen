// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/aiplatform/v1/dataset.proto

package com.google.cloud.aiplatform.v1;

public final class DatasetProto {
  private DatasetProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_aiplatform_v1_Dataset_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_aiplatform_v1_Dataset_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_aiplatform_v1_Dataset_LabelsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_aiplatform_v1_Dataset_LabelsEntry_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_aiplatform_v1_ImportDataConfig_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_aiplatform_v1_ImportDataConfig_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_aiplatform_v1_ImportDataConfig_DataItemLabelsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_aiplatform_v1_ImportDataConfig_DataItemLabelsEntry_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_aiplatform_v1_ExportDataConfig_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_aiplatform_v1_ExportDataConfig_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n(google/cloud/aiplatform/v1/dataset.pro" +
      "to\022\032google.cloud.aiplatform.v1\032\037google/a" +
      "pi/field_behavior.proto\032\031google/api/reso" +
      "urce.proto\0320google/cloud/aiplatform/v1/e" +
      "ncryption_spec.proto\032#google/cloud/aipla" +
      "tform/v1/io.proto\032\034google/protobuf/struc" +
      "t.proto\032\037google/protobuf/timestamp.proto" +
      "\032\034google/api/annotations.proto\"\233\004\n\007Datas" +
      "et\022\021\n\004name\030\001 \001(\tB\003\340A\003\022\031\n\014display_name\030\002 " +
      "\001(\tB\003\340A\002\022 \n\023metadata_schema_uri\030\003 \001(\tB\003\340" +
      "A\002\022-\n\010metadata\030\010 \001(\0132\026.google.protobuf.V" +
      "alueB\003\340A\002\0224\n\013create_time\030\004 \001(\0132\032.google." +
      "protobuf.TimestampB\003\340A\003\0224\n\013update_time\030\005" +
      " \001(\0132\032.google.protobuf.TimestampB\003\340A\003\022\014\n" +
      "\004etag\030\006 \001(\t\022?\n\006labels\030\007 \003(\0132/.google.clo" +
      "ud.aiplatform.v1.Dataset.LabelsEntry\022C\n\017" +
      "encryption_spec\030\013 \001(\0132*.google.cloud.aip" +
      "latform.v1.EncryptionSpec\032-\n\013LabelsEntry" +
      "\022\013\n\003key\030\001 \001(\t\022\r\n\005value\030\002 \001(\t:\0028\001:b\352A_\n!a" +
      "iplatform.googleapis.com/Dataset\022:projec" +
      "ts/{project}/locations/{location}/datase" +
      "ts/{dataset}\"\214\002\n\020ImportDataConfig\022;\n\ngcs" +
      "_source\030\001 \001(\0132%.google.cloud.aiplatform." +
      "v1.GcsSourceH\000\022Z\n\020data_item_labels\030\002 \003(\013" +
      "2@.google.cloud.aiplatform.v1.ImportData" +
      "Config.DataItemLabelsEntry\022\036\n\021import_sch" +
      "ema_uri\030\004 \001(\tB\003\340A\002\0325\n\023DataItemLabelsEntr" +
      "y\022\013\n\003key\030\001 \001(\t\022\r\n\005value\030\002 \001(\t:\0028\001B\010\n\006sou" +
      "rce\"\204\001\n\020ExportDataConfig\022E\n\017gcs_destinat" +
      "ion\030\001 \001(\0132*.google.cloud.aiplatform.v1.G" +
      "csDestinationH\000\022\032\n\022annotations_filter\030\002 " +
      "\001(\tB\r\n\013destinationBv\n\036com.google.cloud.a" +
      "iplatform.v1B\014DatasetProtoP\001ZDgoogle.gol" +
      "ang.org/genproto/googleapis/cloud/aiplat" +
      "form/v1;aiplatformb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.cloud.aiplatform.v1.EncryptionSpecProto.getDescriptor(),
          com.google.cloud.aiplatform.v1.IoProto.getDescriptor(),
          com.google.protobuf.StructProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_cloud_aiplatform_v1_Dataset_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_aiplatform_v1_Dataset_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_aiplatform_v1_Dataset_descriptor,
        new java.lang.String[] { "Name", "DisplayName", "MetadataSchemaUri", "Metadata", "CreateTime", "UpdateTime", "Etag", "Labels", "EncryptionSpec", });
    internal_static_google_cloud_aiplatform_v1_Dataset_LabelsEntry_descriptor =
      internal_static_google_cloud_aiplatform_v1_Dataset_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_aiplatform_v1_Dataset_LabelsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_aiplatform_v1_Dataset_LabelsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    internal_static_google_cloud_aiplatform_v1_ImportDataConfig_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_aiplatform_v1_ImportDataConfig_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_aiplatform_v1_ImportDataConfig_descriptor,
        new java.lang.String[] { "GcsSource", "DataItemLabels", "ImportSchemaUri", "Source", });
    internal_static_google_cloud_aiplatform_v1_ImportDataConfig_DataItemLabelsEntry_descriptor =
      internal_static_google_cloud_aiplatform_v1_ImportDataConfig_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_aiplatform_v1_ImportDataConfig_DataItemLabelsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_aiplatform_v1_ImportDataConfig_DataItemLabelsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    internal_static_google_cloud_aiplatform_v1_ExportDataConfig_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_aiplatform_v1_ExportDataConfig_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_aiplatform_v1_ExportDataConfig_descriptor,
        new java.lang.String[] { "GcsDestination", "AnnotationsFilter", "Destination", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.cloud.aiplatform.v1.EncryptionSpecProto.getDescriptor();
    com.google.cloud.aiplatform.v1.IoProto.getDescriptor();
    com.google.protobuf.StructProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
