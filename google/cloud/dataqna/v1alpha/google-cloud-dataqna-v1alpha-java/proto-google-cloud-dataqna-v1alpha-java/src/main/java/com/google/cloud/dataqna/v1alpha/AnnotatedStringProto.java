// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dataqna/v1alpha/annotated_string.proto

package com.google.cloud.dataqna.v1alpha;

public final class AnnotatedStringProto {
  private AnnotatedStringProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_SemanticMarkup_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_SemanticMarkup_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n3google/cloud/dataqna/v1alpha/annotated" +
      "_string.proto\022\034google.cloud.dataqna.v1al" +
      "pha\"\231\003\n\017AnnotatedString\022\026\n\016text_formatte" +
      "d\030\001 \001(\t\022\026\n\016html_formatted\030\002 \001(\t\022M\n\007marku" +
      "ps\030\003 \003(\0132<.google.cloud.dataqna.v1alpha." +
      "AnnotatedString.SemanticMarkup\032\212\001\n\016Seman" +
      "ticMarkup\022N\n\004type\030\001 \001(\0162@.google.cloud.d" +
      "ataqna.v1alpha.AnnotatedString.SemanticM" +
      "arkupType\022\030\n\020start_char_index\030\002 \001(\005\022\016\n\006l" +
      "ength\030\003 \001(\005\"z\n\022SemanticMarkupType\022\033\n\027MAR" +
      "KUP_TYPE_UNSPECIFIED\020\000\022\n\n\006METRIC\020\001\022\r\n\tDI" +
      "MENSION\020\002\022\n\n\006FILTER\020\003\022\n\n\006UNUSED\020\004\022\013\n\007BLO" +
      "CKED\020\005\022\007\n\003ROW\020\006B\337\001\n com.google.cloud.dat" +
      "aqna.v1alphaB\024AnnotatedStringProtoP\001ZCgo" +
      "ogle.golang.org/genproto/googleapis/clou" +
      "d/dataqna/v1alpha;dataqna\252\002\034Google.Cloud" +
      ".DataQnA.V1Alpha\312\002\034Google\\Cloud\\DataQnA\\" +
      "V1alpha\352\002\037Google::Cloud::DataQnA::V1alph" +
      "ab\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
        });
    internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_descriptor,
        new java.lang.String[] { "TextFormatted", "HtmlFormatted", "Markups", });
    internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_SemanticMarkup_descriptor =
      internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_SemanticMarkup_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_dataqna_v1alpha_AnnotatedString_SemanticMarkup_descriptor,
        new java.lang.String[] { "Type", "StartCharIndex", "Length", });
  }

  // @@protoc_insertion_point(outer_class_scope)
}
