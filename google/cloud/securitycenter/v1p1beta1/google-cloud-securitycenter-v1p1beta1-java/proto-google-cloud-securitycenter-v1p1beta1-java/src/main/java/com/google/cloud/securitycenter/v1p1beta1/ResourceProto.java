// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/securitycenter/v1p1beta1/resource.proto

package com.google.cloud.securitycenter.v1p1beta1;

public final class ResourceProto {
  private ResourceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_securitycenter_v1p1beta1_Resource_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_securitycenter_v1p1beta1_Resource_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n4google/cloud/securitycenter/v1p1beta1/" +
      "resource.proto\022%google.cloud.securitycen" +
      "ter.v1p1beta1\032\034google/api/annotations.pr" +
      "oto\"t\n\010Resource\022\014\n\004name\030\001 \001(\t\022\017\n\007project" +
      "\030\002 \001(\t\022\034\n\024project_display_name\030\003 \001(\t\022\016\n\006" +
      "parent\030\004 \001(\t\022\033\n\023parent_display_name\030\005 \001(" +
      "\tB\214\002\n)com.google.cloud.securitycenter.v1" +
      "p1beta1B\rResourceProtoP\001ZSgoogle.golang." +
      "org/genproto/googleapis/cloud/securityce" +
      "nter/v1p1beta1;securitycenter\252\002%Google.C" +
      "loud.SecurityCenter.V1P1Beta1\312\002%Google\\C" +
      "loud\\SecurityCenter\\V1p1beta1\352\002(Google::" +
      "Cloud::SecurityCenter::V1p1beta1b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_cloud_securitycenter_v1p1beta1_Resource_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_securitycenter_v1p1beta1_Resource_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_securitycenter_v1p1beta1_Resource_descriptor,
        new java.lang.String[] { "Name", "Project", "ProjectDisplayName", "Parent", "ParentDisplayName", });
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
