// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/documentai/v1beta3/document_processor_service.proto

package com.google.cloud.documentai.v1beta3;

public interface ProcessRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.documentai.v1beta3.ProcessRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * An inline document proto.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.Document inline_document = 4;</code>
   * @return Whether the inlineDocument field is set.
   */
  boolean hasInlineDocument();
  /**
   * <pre>
   * An inline document proto.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.Document inline_document = 4;</code>
   * @return The inlineDocument.
   */
  com.google.cloud.documentai.v1beta3.Document getInlineDocument();
  /**
   * <pre>
   * An inline document proto.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.Document inline_document = 4;</code>
   */
  com.google.cloud.documentai.v1beta3.DocumentOrBuilder getInlineDocumentOrBuilder();

  /**
   * <pre>
   * A raw document content (bytes).
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.RawDocument raw_document = 5;</code>
   * @return Whether the rawDocument field is set.
   */
  boolean hasRawDocument();
  /**
   * <pre>
   * A raw document content (bytes).
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.RawDocument raw_document = 5;</code>
   * @return The rawDocument.
   */
  com.google.cloud.documentai.v1beta3.RawDocument getRawDocument();
  /**
   * <pre>
   * A raw document content (bytes).
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.RawDocument raw_document = 5;</code>
   */
  com.google.cloud.documentai.v1beta3.RawDocumentOrBuilder getRawDocumentOrBuilder();

  /**
   * <pre>
   * Required. The processor resource name.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  java.lang.String getName();
  /**
   * <pre>
   * Required. The processor resource name.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  com.google.protobuf.ByteString
      getNameBytes();

  /**
   * <pre>
   * The document payload, the [content] and [mime_type] fields must be set.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.Document document = 2 [deprecated = true];</code>
   * @return Whether the document field is set.
   */
  @java.lang.Deprecated boolean hasDocument();
  /**
   * <pre>
   * The document payload, the [content] and [mime_type] fields must be set.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.Document document = 2 [deprecated = true];</code>
   * @return The document.
   */
  @java.lang.Deprecated com.google.cloud.documentai.v1beta3.Document getDocument();
  /**
   * <pre>
   * The document payload, the [content] and [mime_type] fields must be set.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1beta3.Document document = 2 [deprecated = true];</code>
   */
  @java.lang.Deprecated com.google.cloud.documentai.v1beta3.DocumentOrBuilder getDocumentOrBuilder();

  /**
   * <pre>
   * Whether Human Review feature should be skipped for this request. Default to
   * false.
   * </pre>
   *
   * <code>bool skip_human_review = 3;</code>
   * @return The skipHumanReview.
   */
  boolean getSkipHumanReview();

  public com.google.cloud.documentai.v1beta3.ProcessRequest.SourceCase getSourceCase();
}
