// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/mediatranslation/v1beta1/media_translation.proto

package com.google.cloud.mediatranslation.v1beta1;

public interface StreamingTranslateSpeechResultOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Text translation result.
   * </pre>
   *
   * <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult.TextTranslationResult text_translation_result = 1;</code>
   * @return Whether the textTranslationResult field is set.
   */
  boolean hasTextTranslationResult();
  /**
   * <pre>
   * Text translation result.
   * </pre>
   *
   * <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult.TextTranslationResult text_translation_result = 1;</code>
   * @return The textTranslationResult.
   */
  com.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult.TextTranslationResult getTextTranslationResult();
  /**
   * <pre>
   * Text translation result.
   * </pre>
   *
   * <code>.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult.TextTranslationResult text_translation_result = 1;</code>
   */
  com.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult.TextTranslationResultOrBuilder getTextTranslationResultOrBuilder();

  public com.google.cloud.mediatranslation.v1beta1.StreamingTranslateSpeechResult.ResultCase getResultCase();
}
