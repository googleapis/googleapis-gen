// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/cloudprofiler/v2/profiler.proto

package com.google.devtools.cloudprofiler.v2;

public final class ProfilerProto {
  private ProfilerProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_cloudprofiler_v2_CreateProfileRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_cloudprofiler_v2_CreateProfileRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_cloudprofiler_v2_CreateOfflineProfileRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_cloudprofiler_v2_CreateOfflineProfileRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_cloudprofiler_v2_UpdateProfileRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_cloudprofiler_v2_UpdateProfileRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_cloudprofiler_v2_Profile_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_cloudprofiler_v2_Profile_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_cloudprofiler_v2_Profile_LabelsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_cloudprofiler_v2_Profile_LabelsEntry_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_cloudprofiler_v2_Deployment_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_cloudprofiler_v2_Deployment_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_cloudprofiler_v2_Deployment_LabelsEntry_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_cloudprofiler_v2_Deployment_LabelsEntry_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n/google/devtools/cloudprofiler/v2/profi" +
      "ler.proto\022 google.devtools.cloudprofiler" +
      ".v2\032\034google/api/annotations.proto\032\036googl" +
      "e/protobuf/duration.proto\032 google/protob" +
      "uf/field_mask.proto\032\027google/api/client.p" +
      "roto\"\255\001\n\024CreateProfileRequest\022\016\n\006parent\030" +
      "\004 \001(\t\022@\n\ndeployment\030\001 \001(\0132,.google.devto" +
      "ols.cloudprofiler.v2.Deployment\022C\n\014profi" +
      "le_type\030\002 \003(\0162-.google.devtools.cloudpro" +
      "filer.v2.ProfileType\"i\n\033CreateOfflinePro" +
      "fileRequest\022\016\n\006parent\030\001 \001(\t\022:\n\007profile\030\002" +
      " \001(\0132).google.devtools.cloudprofiler.v2." +
      "Profile\"\203\001\n\024UpdateProfileRequest\022:\n\007prof" +
      "ile\030\001 \001(\0132).google.devtools.cloudprofile" +
      "r.v2.Profile\022/\n\013update_mask\030\002 \001(\0132\032.goog" +
      "le.protobuf.FieldMask\"\330\002\n\007Profile\022\014\n\004nam" +
      "e\030\001 \001(\t\022C\n\014profile_type\030\002 \001(\0162-.google.d" +
      "evtools.cloudprofiler.v2.ProfileType\022@\n\n" +
      "deployment\030\003 \001(\0132,.google.devtools.cloud" +
      "profiler.v2.Deployment\022+\n\010duration\030\004 \001(\013" +
      "2\031.google.protobuf.Duration\022\025\n\rprofile_b" +
      "ytes\030\005 \001(\014\022E\n\006labels\030\006 \003(\01325.google.devt" +
      "ools.cloudprofiler.v2.Profile.LabelsEntr" +
      "y\032-\n\013LabelsEntry\022\013\n\003key\030\001 \001(\t\022\r\n\005value\030\002" +
      " \001(\t:\0028\001\"\251\001\n\nDeployment\022\022\n\nproject_id\030\001 " +
      "\001(\t\022\016\n\006target\030\002 \001(\t\022H\n\006labels\030\003 \003(\01328.go" +
      "ogle.devtools.cloudprofiler.v2.Deploymen" +
      "t.LabelsEntry\032-\n\013LabelsEntry\022\013\n\003key\030\001 \001(" +
      "\t\022\r\n\005value\030\002 \001(\t:\0028\001*\204\001\n\013ProfileType\022\034\n\030" +
      "PROFILE_TYPE_UNSPECIFIED\020\000\022\007\n\003CPU\020\001\022\010\n\004W" +
      "ALL\020\002\022\010\n\004HEAP\020\003\022\013\n\007THREADS\020\004\022\016\n\nCONTENTI" +
      "ON\020\005\022\r\n\tPEAK_HEAP\020\006\022\016\n\nHEAP_ALLOC\020\0072\327\005\n\017" +
      "ProfilerService\022\237\001\n\rCreateProfile\0226.goog" +
      "le.devtools.cloudprofiler.v2.CreateProfi" +
      "leRequest\032).google.devtools.cloudprofile" +
      "r.v2.Profile\"+\202\323\344\223\002%\" /v2/{parent=projec" +
      "ts/*}/profiles:\001*\022\301\001\n\024CreateOfflineProfi" +
      "le\022=.google.devtools.cloudprofiler.v2.Cr" +
      "eateOfflineProfileRequest\032).google.devto" +
      "ols.cloudprofiler.v2.Profile\"?\202\323\344\223\0029\"./v" +
      "2/{parent=projects/*}/profiles:createOff" +
      "line:\007profile\022\255\001\n\rUpdateProfile\0226.google" +
      ".devtools.cloudprofiler.v2.UpdateProfile" +
      "Request\032).google.devtools.cloudprofiler." +
      "v2.Profile\"9\202\323\344\223\00232(/v2/{profile.name=pr" +
      "ojects/*/profiles/*}:\007profile\032\255\001\312A\034cloud" +
      "profiler.googleapis.com\322A\212\001https://www.g" +
      "oogleapis.com/auth/cloud-platform,https:" +
      "//www.googleapis.com/auth/monitoring,htt" +
      "ps://www.googleapis.com/auth/monitoring." +
      "writeB\206\001\n$com.google.devtools.cloudprofi" +
      "ler.v2B\rProfilerProtoP\001ZMgoogle.golang.o" +
      "rg/genproto/googleapis/devtools/cloudpro" +
      "filer/v2;cloudprofilerb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.protobuf.DurationProto.getDescriptor(),
          com.google.protobuf.FieldMaskProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
        });
    internal_static_google_devtools_cloudprofiler_v2_CreateProfileRequest_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_devtools_cloudprofiler_v2_CreateProfileRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_cloudprofiler_v2_CreateProfileRequest_descriptor,
        new java.lang.String[] { "Parent", "Deployment", "ProfileType", });
    internal_static_google_devtools_cloudprofiler_v2_CreateOfflineProfileRequest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_devtools_cloudprofiler_v2_CreateOfflineProfileRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_cloudprofiler_v2_CreateOfflineProfileRequest_descriptor,
        new java.lang.String[] { "Parent", "Profile", });
    internal_static_google_devtools_cloudprofiler_v2_UpdateProfileRequest_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_devtools_cloudprofiler_v2_UpdateProfileRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_cloudprofiler_v2_UpdateProfileRequest_descriptor,
        new java.lang.String[] { "Profile", "UpdateMask", });
    internal_static_google_devtools_cloudprofiler_v2_Profile_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_devtools_cloudprofiler_v2_Profile_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_cloudprofiler_v2_Profile_descriptor,
        new java.lang.String[] { "Name", "ProfileType", "Deployment", "Duration", "ProfileBytes", "Labels", });
    internal_static_google_devtools_cloudprofiler_v2_Profile_LabelsEntry_descriptor =
      internal_static_google_devtools_cloudprofiler_v2_Profile_descriptor.getNestedTypes().get(0);
    internal_static_google_devtools_cloudprofiler_v2_Profile_LabelsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_cloudprofiler_v2_Profile_LabelsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    internal_static_google_devtools_cloudprofiler_v2_Deployment_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_devtools_cloudprofiler_v2_Deployment_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_cloudprofiler_v2_Deployment_descriptor,
        new java.lang.String[] { "ProjectId", "Target", "Labels", });
    internal_static_google_devtools_cloudprofiler_v2_Deployment_LabelsEntry_descriptor =
      internal_static_google_devtools_cloudprofiler_v2_Deployment_descriptor.getNestedTypes().get(0);
    internal_static_google_devtools_cloudprofiler_v2_Deployment_LabelsEntry_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_cloudprofiler_v2_Deployment_LabelsEntry_descriptor,
        new java.lang.String[] { "Key", "Value", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.oauthScopes);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.protobuf.DurationProto.getDescriptor();
    com.google.protobuf.FieldMaskProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
