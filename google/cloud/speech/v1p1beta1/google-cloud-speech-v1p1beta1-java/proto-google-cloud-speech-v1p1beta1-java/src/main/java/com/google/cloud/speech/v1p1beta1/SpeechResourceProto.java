// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/speech/v1p1beta1/resource.proto

package com.google.cloud.speech.v1p1beta1;

public final class SpeechResourceProto {
  private SpeechResourceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_speech_v1p1beta1_CustomClass_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_speech_v1p1beta1_CustomClass_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_speech_v1p1beta1_CustomClass_ClassItem_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_speech_v1p1beta1_CustomClass_ClassItem_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_speech_v1p1beta1_PhraseSet_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_speech_v1p1beta1_PhraseSet_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_speech_v1p1beta1_PhraseSet_Phrase_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_speech_v1p1beta1_PhraseSet_Phrase_fieldAccessorTable;
  static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_speech_v1p1beta1_SpeechAdaptation_descriptor;
  static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_speech_v1p1beta1_SpeechAdaptation_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n,google/cloud/speech/v1p1beta1/resource" +
      ".proto\022\035google.cloud.speech.v1p1beta1\032\034g" +
      "oogle/api/annotations.proto\032\031google/api/" +
      "resource.proto\"\203\002\n\013CustomClass\022\014\n\004name\030\001" +
      " \001(\t\022\027\n\017custom_class_id\030\002 \001(\t\022C\n\005items\030\003" +
      " \003(\01324.google.cloud.speech.v1p1beta1.Cus" +
      "tomClass.ClassItem\032\032\n\tClassItem\022\r\n\005value" +
      "\030\001 \001(\t:l\352Ai\n!speech.googleapis.com/Custo" +
      "mClass\022Dprojects/{project}/locations/{lo" +
      "cation}/customClasses/{custom_class}\"\371\001\n" +
      "\tPhraseSet\022\014\n\004name\030\001 \001(\t\022@\n\007phrases\030\002 \003(" +
      "\0132/.google.cloud.speech.v1p1beta1.Phrase" +
      "Set.Phrase\022\r\n\005boost\030\004 \001(\002\032&\n\006Phrase\022\r\n\005v" +
      "alue\030\001 \001(\t\022\r\n\005boost\030\002 \001(\002:e\352Ab\n\037speech.g" +
      "oogleapis.com/PhraseSet\022?projects/{proje" +
      "ct}/locations/{location}/phraseSets/{phr" +
      "ase_set}\"\225\001\n\020SpeechAdaptation\022=\n\013phrase_" +
      "sets\030\001 \003(\0132(.google.cloud.speech.v1p1bet" +
      "a1.PhraseSet\022B\n\016custom_classes\030\002 \003(\0132*.g" +
      "oogle.cloud.speech.v1p1beta1.CustomClass" +
      "B\210\001\n!com.google.cloud.speech.v1p1beta1B\023" +
      "SpeechResourceProtoP\001ZCgoogle.golang.org" +
      "/genproto/googleapis/cloud/speech/v1p1be" +
      "ta1;speech\370\001\001\242\002\003GCSb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.AnnotationsProto.getDescriptor(),
          com.google.api.ResourceProto.getDescriptor(),
        });
    internal_static_google_cloud_speech_v1p1beta1_CustomClass_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_speech_v1p1beta1_CustomClass_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_speech_v1p1beta1_CustomClass_descriptor,
        new java.lang.String[] { "Name", "CustomClassId", "Items", });
    internal_static_google_cloud_speech_v1p1beta1_CustomClass_ClassItem_descriptor =
      internal_static_google_cloud_speech_v1p1beta1_CustomClass_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_speech_v1p1beta1_CustomClass_ClassItem_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_speech_v1p1beta1_CustomClass_ClassItem_descriptor,
        new java.lang.String[] { "Value", });
    internal_static_google_cloud_speech_v1p1beta1_PhraseSet_descriptor =
      getDescriptor().getMessageTypes().get(1);
    internal_static_google_cloud_speech_v1p1beta1_PhraseSet_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_speech_v1p1beta1_PhraseSet_descriptor,
        new java.lang.String[] { "Name", "Phrases", "Boost", });
    internal_static_google_cloud_speech_v1p1beta1_PhraseSet_Phrase_descriptor =
      internal_static_google_cloud_speech_v1p1beta1_PhraseSet_descriptor.getNestedTypes().get(0);
    internal_static_google_cloud_speech_v1p1beta1_PhraseSet_Phrase_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_speech_v1p1beta1_PhraseSet_Phrase_descriptor,
        new java.lang.String[] { "Value", "Boost", });
    internal_static_google_cloud_speech_v1p1beta1_SpeechAdaptation_descriptor =
      getDescriptor().getMessageTypes().get(2);
    internal_static_google_cloud_speech_v1p1beta1_SpeechAdaptation_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_speech_v1p1beta1_SpeechAdaptation_descriptor,
        new java.lang.String[] { "PhraseSets", "CustomClasses", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.ResourceProto.resource);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.AnnotationsProto.getDescriptor();
    com.google.api.ResourceProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
