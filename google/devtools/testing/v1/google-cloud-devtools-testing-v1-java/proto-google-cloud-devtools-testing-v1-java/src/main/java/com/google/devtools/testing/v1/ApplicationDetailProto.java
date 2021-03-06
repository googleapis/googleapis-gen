// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/testing/v1/application_details.proto

package com.google.devtools.testing.v1;

public final class ApplicationDetailProto {
  private ApplicationDetailProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_testing_v1_ApkDetail_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_testing_v1_ApkDetail_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_testing_v1_ApkManifest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_testing_v1_ApkManifest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_testing_v1_IntentFilter_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_testing_v1_IntentFilter_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_testing_v1_GetApkDetailsRequest_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_testing_v1_GetApkDetailsRequest_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_devtools_testing_v1_GetApkDetailsResponse_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_devtools_testing_v1_GetApkDetailsResponse_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n4google/devtools/testing/v1/application" +
      "_details.proto\022\032google.devtools.testing." +
      "v1\032\034google/api/annotations.proto\032/google" +
      "/devtools/testing/v1/test_execution.prot" +
      "o\032\027google/api/client.proto\"J\n\tApkDetail\022" +
      "=\n\014apk_manifest\030\001 \001(\0132\'.google.devtools." +
      "testing.v1.ApkManifest\"\347\001\n\013ApkManifest\022\024" +
      "\n\014package_name\030\001 \001(\t\022\027\n\017min_sdk_version\030" +
      "\002 \001(\005\022\027\n\017max_sdk_version\030\003 \001(\005\022\032\n\022target" +
      "_sdk_version\030\006 \001(\005\022\031\n\021application_label\030" +
      "\004 \001(\t\022@\n\016intent_filters\030\005 \003(\0132(.google.d" +
      "evtools.testing.v1.IntentFilter\022\027\n\017uses_" +
      "permission\030\007 \003(\t\"O\n\014IntentFilter\022\024\n\014acti" +
      "on_names\030\001 \003(\t\022\026\n\016category_names\030\002 \003(\t\022\021" +
      "\n\tmime_type\030\003 \001(\t\"S\n\024GetApkDetailsReques" +
      "t\022;\n\010location\030\001 \001(\0132).google.devtools.te" +
      "sting.v1.FileReference\"R\n\025GetApkDetailsR" +
      "esponse\0229\n\napk_detail\030\001 \001(\0132%.google.dev" +
      "tools.testing.v1.ApkDetail2\233\002\n\030Applicati" +
      "onDetailService\022\262\001\n\rGetApkDetails\0220.goog" +
      "le.devtools.testing.v1.GetApkDetailsRequ" +
      "est\0321.google.devtools.testing.v1.GetApkD" +
      "etailsResponse\"<\202\323\344\223\0026\"*/v1/applicationD" +
      "etailService/getApkDetails:\010location\032J\312A" +
      "\026testing.googleapis.com\322A.https://www.go" +
      "ogleapis.com/auth/cloud-platformB}\n\036com." +
      "google.devtools.testing.v1B\026ApplicationD" +
      "etailProtoP\001ZAgoogle.golang.org/genproto" +
      "/googleapis/devtools/testing/v1;testingb" +
      "\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.devtools.testing.v1.TestExecutionProto.getDescriptor(),
          com.google.api.ClientProto.getDescriptor(),
        });
    internal_static_google_devtools_testing_v1_ApkDetail_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_devtools_testing_v1_ApkDetail_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_testing_v1_ApkDetail_descriptor,
        new java.lang.String[] { "ApkManifest", });
    internal_static_google_devtools_testing_v1_ApkManifest_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_devtools_testing_v1_ApkManifest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_testing_v1_ApkManifest_descriptor,
        new java.lang.String[] { "PackageName", "MinSdkVersion", "MaxSdkVersion", "TargetSdkVersion", "ApplicationLabel", "IntentFilters", "UsesPermission", });
    internal_static_google_devtools_testing_v1_IntentFilter_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_devtools_testing_v1_IntentFilter_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_testing_v1_IntentFilter_descriptor,
        new java.lang.String[] { "ActionNames", "CategoryNames", "MimeType", });
    internal_static_google_devtools_testing_v1_GetApkDetailsRequest_descriptor =
      getDescriptor().getMessageTypes().get(3);
    internal_static_google_devtools_testing_v1_GetApkDetailsRequest_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_testing_v1_GetApkDetailsRequest_descriptor,
        new java.lang.String[] { "Location", });
    internal_static_google_devtools_testing_v1_GetApkDetailsResponse_descriptor =
      getDescriptor().getMessageTypes().get(4);
    internal_static_google_devtools_testing_v1_GetApkDetailsResponse_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_devtools_testing_v1_GetApkDetailsResponse_descriptor,
        new java.lang.String[] { "ApkDetail", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ClientProto.defaultHost);
    registry.add(com.google.api.AnnotationsProto.http);
    registry.add(com.google.api.ClientProto.oauthScopes);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.devtools.testing.v1.TestExecutionProto.getDescriptor();
    com.google.api.ClientProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
