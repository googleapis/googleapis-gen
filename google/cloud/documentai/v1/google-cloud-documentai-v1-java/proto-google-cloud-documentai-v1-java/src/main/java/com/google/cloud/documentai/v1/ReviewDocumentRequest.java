// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/documentai/v1/document_processor_service.proto

package com.google.cloud.documentai.v1;

/**
 * <pre>
 * Request message for review document method.
 * </pre>
 *
 * Protobuf type {@code google.cloud.documentai.v1.ReviewDocumentRequest}
 */
public final class ReviewDocumentRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.documentai.v1.ReviewDocumentRequest)
    ReviewDocumentRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ReviewDocumentRequest.newBuilder() to construct.
  private ReviewDocumentRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ReviewDocumentRequest() {
    humanReviewConfig_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ReviewDocumentRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ReviewDocumentRequest(
      com.google.protobuf.CodedInputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    this();
    if (extensionRegistry == null) {
      throw new java.lang.NullPointerException();
    }
    com.google.protobuf.UnknownFieldSet.Builder unknownFields =
        com.google.protobuf.UnknownFieldSet.newBuilder();
    try {
      boolean done = false;
      while (!done) {
        int tag = input.readTag();
        switch (tag) {
          case 0:
            done = true;
            break;
          case 10: {
            java.lang.String s = input.readStringRequireUtf8();

            humanReviewConfig_ = s;
            break;
          }
          case 34: {
            com.google.cloud.documentai.v1.Document.Builder subBuilder = null;
            if (sourceCase_ == 4) {
              subBuilder = ((com.google.cloud.documentai.v1.Document) source_).toBuilder();
            }
            source_ =
                input.readMessage(com.google.cloud.documentai.v1.Document.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom((com.google.cloud.documentai.v1.Document) source_);
              source_ = subBuilder.buildPartial();
            }
            sourceCase_ = 4;
            break;
          }
          default: {
            if (!parseUnknownField(
                input, unknownFields, extensionRegistry, tag)) {
              done = true;
            }
            break;
          }
        }
      }
    } catch (com.google.protobuf.InvalidProtocolBufferException e) {
      throw e.setUnfinishedMessage(this);
    } catch (java.io.IOException e) {
      throw new com.google.protobuf.InvalidProtocolBufferException(
          e).setUnfinishedMessage(this);
    } finally {
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.cloud.documentai.v1.DocumentAiProcessorService.internal_static_google_cloud_documentai_v1_ReviewDocumentRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.documentai.v1.DocumentAiProcessorService.internal_static_google_cloud_documentai_v1_ReviewDocumentRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.documentai.v1.ReviewDocumentRequest.class, com.google.cloud.documentai.v1.ReviewDocumentRequest.Builder.class);
  }

  private int sourceCase_ = 0;
  private java.lang.Object source_;
  public enum SourceCase
      implements com.google.protobuf.Internal.EnumLite,
          com.google.protobuf.AbstractMessage.InternalOneOfEnum {
    INLINE_DOCUMENT(4),
    SOURCE_NOT_SET(0);
    private final int value;
    private SourceCase(int value) {
      this.value = value;
    }
    /**
     * @param value The number of the enum to look for.
     * @return The enum associated with the given number.
     * @deprecated Use {@link #forNumber(int)} instead.
     */
    @java.lang.Deprecated
    public static SourceCase valueOf(int value) {
      return forNumber(value);
    }

    public static SourceCase forNumber(int value) {
      switch (value) {
        case 4: return INLINE_DOCUMENT;
        case 0: return SOURCE_NOT_SET;
        default: return null;
      }
    }
    public int getNumber() {
      return this.value;
    }
  };

  public SourceCase
  getSourceCase() {
    return SourceCase.forNumber(
        sourceCase_);
  }

  public static final int INLINE_DOCUMENT_FIELD_NUMBER = 4;
  /**
   * <pre>
   * An inline document proto.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
   * @return Whether the inlineDocument field is set.
   */
  @java.lang.Override
  public boolean hasInlineDocument() {
    return sourceCase_ == 4;
  }
  /**
   * <pre>
   * An inline document proto.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
   * @return The inlineDocument.
   */
  @java.lang.Override
  public com.google.cloud.documentai.v1.Document getInlineDocument() {
    if (sourceCase_ == 4) {
       return (com.google.cloud.documentai.v1.Document) source_;
    }
    return com.google.cloud.documentai.v1.Document.getDefaultInstance();
  }
  /**
   * <pre>
   * An inline document proto.
   * </pre>
   *
   * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
   */
  @java.lang.Override
  public com.google.cloud.documentai.v1.DocumentOrBuilder getInlineDocumentOrBuilder() {
    if (sourceCase_ == 4) {
       return (com.google.cloud.documentai.v1.Document) source_;
    }
    return com.google.cloud.documentai.v1.Document.getDefaultInstance();
  }

  public static final int HUMAN_REVIEW_CONFIG_FIELD_NUMBER = 1;
  private volatile java.lang.Object humanReviewConfig_;
  /**
   * <pre>
   * Required. The resource name of the HumanReviewConfig that the document will be
   * reviewed with.
   * </pre>
   *
   * <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The humanReviewConfig.
   */
  @java.lang.Override
  public java.lang.String getHumanReviewConfig() {
    java.lang.Object ref = humanReviewConfig_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      humanReviewConfig_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The resource name of the HumanReviewConfig that the document will be
   * reviewed with.
   * </pre>
   *
   * <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for humanReviewConfig.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getHumanReviewConfigBytes() {
    java.lang.Object ref = humanReviewConfig_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      humanReviewConfig_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  private byte memoizedIsInitialized = -1;
  @java.lang.Override
  public final boolean isInitialized() {
    byte isInitialized = memoizedIsInitialized;
    if (isInitialized == 1) return true;
    if (isInitialized == 0) return false;

    memoizedIsInitialized = 1;
    return true;
  }

  @java.lang.Override
  public void writeTo(com.google.protobuf.CodedOutputStream output)
                      throws java.io.IOException {
    if (!getHumanReviewConfigBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, humanReviewConfig_);
    }
    if (sourceCase_ == 4) {
      output.writeMessage(4, (com.google.cloud.documentai.v1.Document) source_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getHumanReviewConfigBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, humanReviewConfig_);
    }
    if (sourceCase_ == 4) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(4, (com.google.cloud.documentai.v1.Document) source_);
    }
    size += unknownFields.getSerializedSize();
    memoizedSize = size;
    return size;
  }

  @java.lang.Override
  public boolean equals(final java.lang.Object obj) {
    if (obj == this) {
     return true;
    }
    if (!(obj instanceof com.google.cloud.documentai.v1.ReviewDocumentRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.documentai.v1.ReviewDocumentRequest other = (com.google.cloud.documentai.v1.ReviewDocumentRequest) obj;

    if (!getHumanReviewConfig()
        .equals(other.getHumanReviewConfig())) return false;
    if (!getSourceCase().equals(other.getSourceCase())) return false;
    switch (sourceCase_) {
      case 4:
        if (!getInlineDocument()
            .equals(other.getInlineDocument())) return false;
        break;
      case 0:
      default:
    }
    if (!unknownFields.equals(other.unknownFields)) return false;
    return true;
  }

  @java.lang.Override
  public int hashCode() {
    if (memoizedHashCode != 0) {
      return memoizedHashCode;
    }
    int hash = 41;
    hash = (19 * hash) + getDescriptor().hashCode();
    hash = (37 * hash) + HUMAN_REVIEW_CONFIG_FIELD_NUMBER;
    hash = (53 * hash) + getHumanReviewConfig().hashCode();
    switch (sourceCase_) {
      case 4:
        hash = (37 * hash) + INLINE_DOCUMENT_FIELD_NUMBER;
        hash = (53 * hash) + getInlineDocument().hashCode();
        break;
      case 0:
      default:
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.documentai.v1.ReviewDocumentRequest parseFrom(
      com.google.protobuf.CodedInputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }

  @java.lang.Override
  public Builder newBuilderForType() { return newBuilder(); }
  public static Builder newBuilder() {
    return DEFAULT_INSTANCE.toBuilder();
  }
  public static Builder newBuilder(com.google.cloud.documentai.v1.ReviewDocumentRequest prototype) {
    return DEFAULT_INSTANCE.toBuilder().mergeFrom(prototype);
  }
  @java.lang.Override
  public Builder toBuilder() {
    return this == DEFAULT_INSTANCE
        ? new Builder() : new Builder().mergeFrom(this);
  }

  @java.lang.Override
  protected Builder newBuilderForType(
      com.google.protobuf.GeneratedMessageV3.BuilderParent parent) {
    Builder builder = new Builder(parent);
    return builder;
  }
  /**
   * <pre>
   * Request message for review document method.
   * </pre>
   *
   * Protobuf type {@code google.cloud.documentai.v1.ReviewDocumentRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.documentai.v1.ReviewDocumentRequest)
      com.google.cloud.documentai.v1.ReviewDocumentRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.documentai.v1.DocumentAiProcessorService.internal_static_google_cloud_documentai_v1_ReviewDocumentRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.documentai.v1.DocumentAiProcessorService.internal_static_google_cloud_documentai_v1_ReviewDocumentRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.documentai.v1.ReviewDocumentRequest.class, com.google.cloud.documentai.v1.ReviewDocumentRequest.Builder.class);
    }

    // Construct using com.google.cloud.documentai.v1.ReviewDocumentRequest.newBuilder()
    private Builder() {
      maybeForceBuilderInitialization();
    }

    private Builder(
        com.google.protobuf.GeneratedMessageV3.BuilderParent parent) {
      super(parent);
      maybeForceBuilderInitialization();
    }
    private void maybeForceBuilderInitialization() {
      if (com.google.protobuf.GeneratedMessageV3
              .alwaysUseFieldBuilders) {
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      humanReviewConfig_ = "";

      sourceCase_ = 0;
      source_ = null;
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.documentai.v1.DocumentAiProcessorService.internal_static_google_cloud_documentai_v1_ReviewDocumentRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.documentai.v1.ReviewDocumentRequest getDefaultInstanceForType() {
      return com.google.cloud.documentai.v1.ReviewDocumentRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.documentai.v1.ReviewDocumentRequest build() {
      com.google.cloud.documentai.v1.ReviewDocumentRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.documentai.v1.ReviewDocumentRequest buildPartial() {
      com.google.cloud.documentai.v1.ReviewDocumentRequest result = new com.google.cloud.documentai.v1.ReviewDocumentRequest(this);
      if (sourceCase_ == 4) {
        if (inlineDocumentBuilder_ == null) {
          result.source_ = source_;
        } else {
          result.source_ = inlineDocumentBuilder_.build();
        }
      }
      result.humanReviewConfig_ = humanReviewConfig_;
      result.sourceCase_ = sourceCase_;
      onBuilt();
      return result;
    }

    @java.lang.Override
    public Builder clone() {
      return super.clone();
    }
    @java.lang.Override
    public Builder setField(
        com.google.protobuf.Descriptors.FieldDescriptor field,
        java.lang.Object value) {
      return super.setField(field, value);
    }
    @java.lang.Override
    public Builder clearField(
        com.google.protobuf.Descriptors.FieldDescriptor field) {
      return super.clearField(field);
    }
    @java.lang.Override
    public Builder clearOneof(
        com.google.protobuf.Descriptors.OneofDescriptor oneof) {
      return super.clearOneof(oneof);
    }
    @java.lang.Override
    public Builder setRepeatedField(
        com.google.protobuf.Descriptors.FieldDescriptor field,
        int index, java.lang.Object value) {
      return super.setRepeatedField(field, index, value);
    }
    @java.lang.Override
    public Builder addRepeatedField(
        com.google.protobuf.Descriptors.FieldDescriptor field,
        java.lang.Object value) {
      return super.addRepeatedField(field, value);
    }
    @java.lang.Override
    public Builder mergeFrom(com.google.protobuf.Message other) {
      if (other instanceof com.google.cloud.documentai.v1.ReviewDocumentRequest) {
        return mergeFrom((com.google.cloud.documentai.v1.ReviewDocumentRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.documentai.v1.ReviewDocumentRequest other) {
      if (other == com.google.cloud.documentai.v1.ReviewDocumentRequest.getDefaultInstance()) return this;
      if (!other.getHumanReviewConfig().isEmpty()) {
        humanReviewConfig_ = other.humanReviewConfig_;
        onChanged();
      }
      switch (other.getSourceCase()) {
        case INLINE_DOCUMENT: {
          mergeInlineDocument(other.getInlineDocument());
          break;
        }
        case SOURCE_NOT_SET: {
          break;
        }
      }
      this.mergeUnknownFields(other.unknownFields);
      onChanged();
      return this;
    }

    @java.lang.Override
    public final boolean isInitialized() {
      return true;
    }

    @java.lang.Override
    public Builder mergeFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws java.io.IOException {
      com.google.cloud.documentai.v1.ReviewDocumentRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.documentai.v1.ReviewDocumentRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int sourceCase_ = 0;
    private java.lang.Object source_;
    public SourceCase
        getSourceCase() {
      return SourceCase.forNumber(
          sourceCase_);
    }

    public Builder clearSource() {
      sourceCase_ = 0;
      source_ = null;
      onChanged();
      return this;
    }


    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.documentai.v1.Document, com.google.cloud.documentai.v1.Document.Builder, com.google.cloud.documentai.v1.DocumentOrBuilder> inlineDocumentBuilder_;
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     * @return Whether the inlineDocument field is set.
     */
    @java.lang.Override
    public boolean hasInlineDocument() {
      return sourceCase_ == 4;
    }
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     * @return The inlineDocument.
     */
    @java.lang.Override
    public com.google.cloud.documentai.v1.Document getInlineDocument() {
      if (inlineDocumentBuilder_ == null) {
        if (sourceCase_ == 4) {
          return (com.google.cloud.documentai.v1.Document) source_;
        }
        return com.google.cloud.documentai.v1.Document.getDefaultInstance();
      } else {
        if (sourceCase_ == 4) {
          return inlineDocumentBuilder_.getMessage();
        }
        return com.google.cloud.documentai.v1.Document.getDefaultInstance();
      }
    }
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     */
    public Builder setInlineDocument(com.google.cloud.documentai.v1.Document value) {
      if (inlineDocumentBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        source_ = value;
        onChanged();
      } else {
        inlineDocumentBuilder_.setMessage(value);
      }
      sourceCase_ = 4;
      return this;
    }
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     */
    public Builder setInlineDocument(
        com.google.cloud.documentai.v1.Document.Builder builderForValue) {
      if (inlineDocumentBuilder_ == null) {
        source_ = builderForValue.build();
        onChanged();
      } else {
        inlineDocumentBuilder_.setMessage(builderForValue.build());
      }
      sourceCase_ = 4;
      return this;
    }
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     */
    public Builder mergeInlineDocument(com.google.cloud.documentai.v1.Document value) {
      if (inlineDocumentBuilder_ == null) {
        if (sourceCase_ == 4 &&
            source_ != com.google.cloud.documentai.v1.Document.getDefaultInstance()) {
          source_ = com.google.cloud.documentai.v1.Document.newBuilder((com.google.cloud.documentai.v1.Document) source_)
              .mergeFrom(value).buildPartial();
        } else {
          source_ = value;
        }
        onChanged();
      } else {
        if (sourceCase_ == 4) {
          inlineDocumentBuilder_.mergeFrom(value);
        }
        inlineDocumentBuilder_.setMessage(value);
      }
      sourceCase_ = 4;
      return this;
    }
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     */
    public Builder clearInlineDocument() {
      if (inlineDocumentBuilder_ == null) {
        if (sourceCase_ == 4) {
          sourceCase_ = 0;
          source_ = null;
          onChanged();
        }
      } else {
        if (sourceCase_ == 4) {
          sourceCase_ = 0;
          source_ = null;
        }
        inlineDocumentBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     */
    public com.google.cloud.documentai.v1.Document.Builder getInlineDocumentBuilder() {
      return getInlineDocumentFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     */
    @java.lang.Override
    public com.google.cloud.documentai.v1.DocumentOrBuilder getInlineDocumentOrBuilder() {
      if ((sourceCase_ == 4) && (inlineDocumentBuilder_ != null)) {
        return inlineDocumentBuilder_.getMessageOrBuilder();
      } else {
        if (sourceCase_ == 4) {
          return (com.google.cloud.documentai.v1.Document) source_;
        }
        return com.google.cloud.documentai.v1.Document.getDefaultInstance();
      }
    }
    /**
     * <pre>
     * An inline document proto.
     * </pre>
     *
     * <code>.google.cloud.documentai.v1.Document inline_document = 4;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.documentai.v1.Document, com.google.cloud.documentai.v1.Document.Builder, com.google.cloud.documentai.v1.DocumentOrBuilder> 
        getInlineDocumentFieldBuilder() {
      if (inlineDocumentBuilder_ == null) {
        if (!(sourceCase_ == 4)) {
          source_ = com.google.cloud.documentai.v1.Document.getDefaultInstance();
        }
        inlineDocumentBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.documentai.v1.Document, com.google.cloud.documentai.v1.Document.Builder, com.google.cloud.documentai.v1.DocumentOrBuilder>(
                (com.google.cloud.documentai.v1.Document) source_,
                getParentForChildren(),
                isClean());
        source_ = null;
      }
      sourceCase_ = 4;
      onChanged();;
      return inlineDocumentBuilder_;
    }

    private java.lang.Object humanReviewConfig_ = "";
    /**
     * <pre>
     * Required. The resource name of the HumanReviewConfig that the document will be
     * reviewed with.
     * </pre>
     *
     * <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The humanReviewConfig.
     */
    public java.lang.String getHumanReviewConfig() {
      java.lang.Object ref = humanReviewConfig_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        humanReviewConfig_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The resource name of the HumanReviewConfig that the document will be
     * reviewed with.
     * </pre>
     *
     * <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The bytes for humanReviewConfig.
     */
    public com.google.protobuf.ByteString
        getHumanReviewConfigBytes() {
      java.lang.Object ref = humanReviewConfig_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        humanReviewConfig_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The resource name of the HumanReviewConfig that the document will be
     * reviewed with.
     * </pre>
     *
     * <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The humanReviewConfig to set.
     * @return This builder for chaining.
     */
    public Builder setHumanReviewConfig(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      humanReviewConfig_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The resource name of the HumanReviewConfig that the document will be
     * reviewed with.
     * </pre>
     *
     * <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return This builder for chaining.
     */
    public Builder clearHumanReviewConfig() {
      
      humanReviewConfig_ = getDefaultInstance().getHumanReviewConfig();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The resource name of the HumanReviewConfig that the document will be
     * reviewed with.
     * </pre>
     *
     * <code>string human_review_config = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The bytes for humanReviewConfig to set.
     * @return This builder for chaining.
     */
    public Builder setHumanReviewConfigBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      humanReviewConfig_ = value;
      onChanged();
      return this;
    }
    @java.lang.Override
    public final Builder setUnknownFields(
        final com.google.protobuf.UnknownFieldSet unknownFields) {
      return super.setUnknownFields(unknownFields);
    }

    @java.lang.Override
    public final Builder mergeUnknownFields(
        final com.google.protobuf.UnknownFieldSet unknownFields) {
      return super.mergeUnknownFields(unknownFields);
    }


    // @@protoc_insertion_point(builder_scope:google.cloud.documentai.v1.ReviewDocumentRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.documentai.v1.ReviewDocumentRequest)
  private static final com.google.cloud.documentai.v1.ReviewDocumentRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.documentai.v1.ReviewDocumentRequest();
  }

  public static com.google.cloud.documentai.v1.ReviewDocumentRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ReviewDocumentRequest>
      PARSER = new com.google.protobuf.AbstractParser<ReviewDocumentRequest>() {
    @java.lang.Override
    public ReviewDocumentRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ReviewDocumentRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ReviewDocumentRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ReviewDocumentRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.documentai.v1.ReviewDocumentRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

