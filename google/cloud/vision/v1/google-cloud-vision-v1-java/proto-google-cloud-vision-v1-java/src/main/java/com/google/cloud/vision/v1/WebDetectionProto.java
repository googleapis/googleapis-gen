// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/vision/v1/web_detection.proto

package com.google.cloud.vision.v1;

public final class WebDetectionProto {
  private WebDetectionProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_vision_v1_WebDetection_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_vision_v1_WebDetection_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_vision_v1_WebDetection_WebEntity_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_vision_v1_WebDetection_WebEntity_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_vision_v1_WebDetection_WebImage_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_vision_v1_WebDetection_WebImage_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_vision_v1_WebDetection_WebPage_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_vision_v1_WebDetection_WebPage_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_vision_v1_WebDetection_WebLabel_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_vision_v1_WebDetection_WebLabel_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n*google/cloud/vision/v1/web_detection.p" +
      "roto\022\026google.cloud.vision.v1\032\034google/api" +
      "/annotations.proto\"\324\006\n\014WebDetection\022D\n\014w" +
      "eb_entities\030\001 \003(\0132..google.cloud.vision." +
      "v1.WebDetection.WebEntity\022K\n\024full_matchi" +
      "ng_images\030\002 \003(\0132-.google.cloud.vision.v1" +
      ".WebDetection.WebImage\022N\n\027partial_matchi" +
      "ng_images\030\003 \003(\0132-.google.cloud.vision.v1" +
      ".WebDetection.WebImage\022P\n\032pages_with_mat" +
      "ching_images\030\004 \003(\0132,.google.cloud.vision" +
      ".v1.WebDetection.WebPage\022N\n\027visually_sim" +
      "ilar_images\030\006 \003(\0132-.google.cloud.vision." +
      "v1.WebDetection.WebImage\022H\n\021best_guess_l" +
      "abels\030\010 \003(\0132-.google.cloud.vision.v1.Web" +
      "Detection.WebLabel\032B\n\tWebEntity\022\021\n\tentit" +
      "y_id\030\001 \001(\t\022\r\n\005score\030\002 \001(\002\022\023\n\013description" +
      "\030\003 \001(\t\032&\n\010WebImage\022\013\n\003url\030\001 \001(\t\022\r\n\005score" +
      "\030\002 \001(\002\032\326\001\n\007WebPage\022\013\n\003url\030\001 \001(\t\022\r\n\005score" +
      "\030\002 \001(\002\022\022\n\npage_title\030\003 \001(\t\022K\n\024full_match" +
      "ing_images\030\004 \003(\0132-.google.cloud.vision.v" +
      "1.WebDetection.WebImage\022N\n\027partial_match" +
      "ing_images\030\005 \003(\0132-.google.cloud.vision.v" +
      "1.WebDetection.WebImage\0320\n\010WebLabel\022\r\n\005l" +
      "abel\030\001 \001(\t\022\025\n\rlanguage_code\030\002 \001(\tBy\n\032com" +
      ".google.cloud.vision.v1B\021WebDetectionPro" +
      "toP\001Z<google.golang.org/genproto/googlea" +
      "pis/cloud/vision/v1;vision\370\001\001\242\002\004GCVNb\006pr" +
      "oto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_cloud_vision_v1_WebDetection_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_vision_v1_WebDetection_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_vision_v1_WebDetection_descriptor,
        new java.lang.String[] { "WebEntities", "FullMatchingImages", "PartialMatchingImages", "PagesWithMatchingImages", "VisuallySimilarImages", "BestGuessLabels", });
    internal_static_google_cloud_vision_v1_WebDetection_WebEntity_descriptor =
      internal_static_google_cloud_vision_v1_WebDetection_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_vision_v1_WebDetection_WebEntity_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_vision_v1_WebDetection_WebEntity_descriptor,
        new java.lang.String[] { "EntityId", "Score", "Description", });
    internal_static_google_cloud_vision_v1_WebDetection_WebImage_descriptor =
      internal_static_google_cloud_vision_v1_WebDetection_descriptor.getNestedTypes().get(1);
    internal_static_google_cloud_vision_v1_WebDetection_WebImage_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_vision_v1_WebDetection_WebImage_descriptor,
        new java.lang.String[] { "Url", "Score", });
    internal_static_google_cloud_vision_v1_WebDetection_WebPage_descriptor =
      internal_static_google_cloud_vision_v1_WebDetection_descriptor.getNestedTypes().get(2);
    internal_static_google_cloud_vision_v1_WebDetection_WebPage_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_vision_v1_WebDetection_WebPage_descriptor,
        new java.lang.String[] { "Url", "Score", "PageTitle", "FullMatchingImages", "PartialMatchingImages", });
    internal_static_google_cloud_vision_v1_WebDetection_WebLabel_descriptor =
      internal_static_google_cloud_vision_v1_WebDetection_descriptor.getNestedTypes().get(3);
    internal_static_google_cloud_vision_v1_WebDetection_WebLabel_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_vision_v1_WebDetection_WebLabel_descriptor,
        new java.lang.String[] { "Label", "LanguageCode", });
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
