// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dataqna/v1alpha/question.proto

package com.google.cloud.dataqna.v1alpha;

public interface HumanReadableOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.dataqna.v1alpha.HumanReadable)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Generated query explaining the interpretation.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.AnnotatedString generated_interpretation = 1;</code>
   * @return Whether the generatedInterpretation field is set.
   */
  boolean hasGeneratedInterpretation();
  /**
   * <pre>
   * Generated query explaining the interpretation.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.AnnotatedString generated_interpretation = 1;</code>
   * @return The generatedInterpretation.
   */
  com.google.cloud.dataqna.v1alpha.AnnotatedString getGeneratedInterpretation();
  /**
   * <pre>
   * Generated query explaining the interpretation.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.AnnotatedString generated_interpretation = 1;</code>
   */
  com.google.cloud.dataqna.v1alpha.AnnotatedStringOrBuilder getGeneratedInterpretationOrBuilder();

  /**
   * <pre>
   * Annotations on the original query.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.AnnotatedString original_question = 2;</code>
   * @return Whether the originalQuestion field is set.
   */
  boolean hasOriginalQuestion();
  /**
   * <pre>
   * Annotations on the original query.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.AnnotatedString original_question = 2;</code>
   * @return The originalQuestion.
   */
  com.google.cloud.dataqna.v1alpha.AnnotatedString getOriginalQuestion();
  /**
   * <pre>
   * Annotations on the original query.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.AnnotatedString original_question = 2;</code>
   */
  com.google.cloud.dataqna.v1alpha.AnnotatedStringOrBuilder getOriginalQuestionOrBuilder();
}
