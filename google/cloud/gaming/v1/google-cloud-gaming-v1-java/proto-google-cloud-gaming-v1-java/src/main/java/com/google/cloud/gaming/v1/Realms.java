// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/gaming/v1/realms.proto

package com.google.cloud.gaming.v1;

public final class Realms {
  private Realms() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_ListRealmsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_ListRealmsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_ListRealmsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_ListRealmsResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_GetRealmRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_GetRealmRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_CreateRealmRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_CreateRealmRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_DeleteRealmRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_DeleteRealmRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_UpdateRealmRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_UpdateRealmRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_PreviewRealmUpdateRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_PreviewRealmUpdateRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_PreviewRealmUpdateResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_PreviewRealmUpdateResponse_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_Realm_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_Realm_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_gaming_v1_Realm_LabelsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_gaming_v1_Realm_LabelsEntry_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n#google/cloud/gaming/v1/realms.proto\022\026g" +
      "oogle.cloud.gaming.v1\032\037google/api/field_" +
      "behavior.proto\032\031google/api/resource.prot" +
      "o\032#google/cloud/gaming/v1/common.proto\032 " +
      "google/protobuf/field_mask.proto\032\037google" +
      "/protobuf/timestamp.proto\032\034google/api/an" +
      "notations.proto\"\253\001\n\021ListRealmsRequest\0229\n" +
      "\006parent\030\001 \001(\tB)\340A\002\372A#\022!gameservices.goog" +
      "leapis.com/Realm\022\026\n\tpage_size\030\002 \001(\005B\003\340A\001" +
      "\022\027\n\npage_token\030\003 \001(\tB\003\340A\001\022\023\n\006filter\030\004 \001(" +
      "\tB\003\340A\001\022\025\n\010order_by\030\005 \001(\tB\003\340A\001\"q\n\022ListRea" +
      "lmsResponse\022-\n\006realms\030\001 \003(\0132\035.google.clo" +
      "ud.gaming.v1.Realm\022\027\n\017next_page_token\030\002 " +
      "\001(\t\022\023\n\013unreachable\030\003 \003(\t\"J\n\017GetRealmRequ" +
      "est\0227\n\004name\030\001 \001(\tB)\340A\002\372A#\n!gameservices." +
      "googleapis.com/Realm\"\231\001\n\022CreateRealmRequ" +
      "est\0229\n\006parent\030\001 \001(\tB)\340A\002\372A#\022!gameservice" +
      "s.googleapis.com/Realm\022\025\n\010realm_id\030\002 \001(\t" +
      "B\003\340A\002\0221\n\005realm\030\003 \001(\0132\035.google.cloud.gami" +
      "ng.v1.RealmB\003\340A\002\"M\n\022DeleteRealmRequest\0227" +
      "\n\004name\030\001 \001(\tB)\340A\002\372A#\n!gameservices.googl" +
      "eapis.com/Realm\"}\n\022UpdateRealmRequest\0221\n" +
      "\005realm\030\001 \001(\0132\035.google.cloud.gaming.v1.Re" +
      "almB\003\340A\002\0224\n\013update_mask\030\002 \001(\0132\032.google.p" +
      "rotobuf.FieldMaskB\003\340A\002\"\273\001\n\031PreviewRealmU" +
      "pdateRequest\0221\n\005realm\030\001 \001(\0132\035.google.clo" +
      "ud.gaming.v1.RealmB\003\340A\002\0224\n\013update_mask\030\002" +
      " \001(\0132\032.google.protobuf.FieldMaskB\003\340A\002\0225\n" +
      "\014preview_time\030\003 \001(\0132\032.google.protobuf.Ti" +
      "mestampB\003\340A\001\"e\n\032PreviewRealmUpdateRespon" +
      "se\022\014\n\004etag\030\002 \001(\t\0229\n\014target_state\030\003 \001(\0132#" +
      ".google.cloud.gaming.v1.TargetState\"\206\003\n\005" +
      "Realm\022\014\n\004name\030\001 \001(\t\0224\n\013create_time\030\002 \001(\013" +
      "2\032.google.protobuf.TimestampB\003\340A\003\0224\n\013upd" +
      "ate_time\030\003 \001(\0132\032.google.protobuf.Timesta" +
      "mpB\003\340A\003\0229\n\006labels\030\004 \003(\0132).google.cloud.g" +
      "aming.v1.Realm.LabelsEntry\022\026\n\ttime_zone\030" +
      "\006 \001(\tB\003\340A\002\022\014\n\004etag\030\007 \001(\t\022\023\n\013description\030" +
      "\010 \001(\t\032-\n\013LabelsEntry\022\013\n\003key\030\001 \001(\t\022\r\n\005val" +
      "ue\030\002 \001(\t:\0028\001:^\352A[\n!gameservices.googleap" +
      "is.com/Realm\0226projects/{project}/locatio" +
      "ns/{location}/realms/{realm}B\\\n\032com.goog" +
      "le.cloud.gaming.v1P\001Z<google.golang.org/" +
      "genproto/googleapis/cloud/gaming/v1;gami" +
      "ngb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
          com.google.cloud.gaming.v1.Common.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.protobuf.TimestampProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_cloud_gaming_v1_ListRealmsRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_gaming_v1_ListRealmsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_ListRealmsRequest_descriptor,
        new java.lang.String[] { "Parent", "PageSize", "PageToken", "Filter", "OrderBy", });
    internal_static_google_cloud_gaming_v1_ListRealmsResponse_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_gaming_v1_ListRealmsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_ListRealmsResponse_descriptor,
        new java.lang.String[] { "Realms", "NextPageToken", "Unreachable", });
    internal_static_google_cloud_gaming_v1_GetRealmRequest_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_gaming_v1_GetRealmRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_GetRealmRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_gaming_v1_CreateRealmRequest_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_cloud_gaming_v1_CreateRealmRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_CreateRealmRequest_descriptor,
        new java.lang.String[] { "Parent", "RealmId", "Realm", });
    internal_static_google_cloud_gaming_v1_DeleteRealmRequest_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_cloud_gaming_v1_DeleteRealmRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_DeleteRealmRequest_descriptor,
        new java.lang.String[] { "Name", });
    internal_static_google_cloud_gaming_v1_UpdateRealmRequest_descriptor =
      getDescriptor().getMessageTypes().get(5);
    internal_static_google_cloud_gaming_v1_UpdateRealmRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_UpdateRealmRequest_descriptor,
        new java.lang.String[] { "Realm", "UpdateMask", });
    internal_static_google_cloud_gaming_v1_PreviewRealmUpdateRequest_descriptor =
      getDescriptor().getMessageTypes().get(6);
    internal_static_google_cloud_gaming_v1_PreviewRealmUpdateRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_PreviewRealmUpdateRequest_descriptor,
        new java.lang.String[] { "Realm", "UpdateMask", "PreviewTime", });
    internal_static_google_cloud_gaming_v1_PreviewRealmUpdateResponse_descriptor =
      getDescriptor().getMessageTypes().get(7);
    internal_static_google_cloud_gaming_v1_PreviewRealmUpdateResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_PreviewRealmUpdateResponse_descriptor,
        new java.lang.String[] { "Etag", "TargetState", });
    internal_static_google_cloud_gaming_v1_Realm_descriptor =
      getDescriptor().getMessageTypes().get(8);
    internal_static_google_cloud_gaming_v1_Realm_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_Realm_descriptor,
        new java.lang.String[] { "Name", "CreateTime", "UpdateTime", "Labels", "TimeZone", "Etag", "Description", });
    internal_static_google_cloud_gaming_v1_Realm_LabelsEntry_descriptor =
      internal_static_google_cloud_gaming_v1_Realm_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_gaming_v1_Realm_LabelsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_gaming_v1_Realm_LabelsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    registry.add(com.google.api.ResourceProto.resource);
    registry.add(com.google.api.ResourceProto.resourceReference);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
    com.google.cloud.gaming.v1.Common.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.protobuf.TimestampProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
