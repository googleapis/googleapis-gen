// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/automl/v1beta1/geometry.proto

package com.google.cloud.automl.v1beta1;

public final class Geometry {
  private Geometry() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_automl_v1beta1_NormalizedVertex_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_automl_v1beta1_NormalizedVertex_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_automl_v1beta1_BoundingPoly_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_automl_v1beta1_BoundingPoly_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n*google/cloud/automl/v1beta1/geometry.p" +
      "roto\022\033google.cloud.automl.v1beta1\032\034googl" +
      "e/api/annotations.proto\"(\n\020NormalizedVer" +
      "tex\022\t\n\001x\030\001 \001(\002\022\t\n\001y\030\002 \001(\002\"Z\n\014BoundingPol" +
      "y\022J\n\023normalized_vertices\030\002 \003(\0132-.google." +
      "cloud.automl.v1beta1.NormalizedVertexB\245\001" +
      "\n\037com.google.cloud.automl.v1beta1P\001ZAgoo" +
      "gle.golang.org/genproto/googleapis/cloud" +
      "/automl/v1beta1;automl\312\002\033Google\\Cloud\\Au" +
      "toMl\\V1beta1\352\002\036Google::Cloud::AutoML::V1" +
      "beta1b\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_cloud_automl_v1beta1_NormalizedVertex_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_automl_v1beta1_NormalizedVertex_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_automl_v1beta1_NormalizedVertex_descriptor,
        new java.lang.String[] { "X", "Y", });
    internal_static_google_cloud_automl_v1beta1_BoundingPoly_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_automl_v1beta1_BoundingPoly_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_automl_v1beta1_BoundingPoly_descriptor,
        new java.lang.String[] { "NormalizedVertices", });
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
