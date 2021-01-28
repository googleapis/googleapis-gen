// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datalabeling/v1beta1/human_annotation_config.proto

package com.google.cloud.datalabeling.v1beta1;

/**
 * <pre>
 * Config for image polyline human labeling task.
 * </pre>
 *
 * Protobuf type {@code google.cloud.datalabeling.v1beta1.PolylineConfig}
 */
public final class PolylineConfig extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.datalabeling.v1beta1.PolylineConfig)
    PolylineConfigOrBuilder {
private static final long serialVersionUID = 0L;
  // Use PolylineConfig.newBuilder() to construct.
  private PolylineConfig(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private PolylineConfig() {
    annotationSpecSet_ = "";
    instructionMessage_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new PolylineConfig();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private PolylineConfig(
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

            annotationSpecSet_ = s;
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            instructionMessage_ = s;
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
    return com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOuterClass.internal_static_google_cloud_datalabeling_v1beta1_PolylineConfig_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOuterClass.internal_static_google_cloud_datalabeling_v1beta1_PolylineConfig_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.datalabeling.v1beta1.PolylineConfig.class, com.google.cloud.datalabeling.v1beta1.PolylineConfig.Builder.class);
  }

  public static final int ANNOTATION_SPEC_SET_FIELD_NUMBER = 1;
  private volatile java.lang.Object annotationSpecSet_;
  /**
   * <pre>
   * Required. Annotation spec set resource name.
   * </pre>
   *
   * <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The annotationSpecSet.
   */
  @java.lang.Override
  public java.lang.String getAnnotationSpecSet() {
    java.lang.Object ref = annotationSpecSet_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      annotationSpecSet_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. Annotation spec set resource name.
   * </pre>
   *
   * <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for annotationSpecSet.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getAnnotationSpecSetBytes() {
    java.lang.Object ref = annotationSpecSet_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      annotationSpecSet_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int INSTRUCTION_MESSAGE_FIELD_NUMBER = 2;
  private volatile java.lang.Object instructionMessage_;
  /**
   * <pre>
   * Optional. Instruction message showed on contributors UI.
   * </pre>
   *
   * <code>string instruction_message = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The instructionMessage.
   */
  @java.lang.Override
  public java.lang.String getInstructionMessage() {
    java.lang.Object ref = instructionMessage_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      instructionMessage_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Optional. Instruction message showed on contributors UI.
   * </pre>
   *
   * <code>string instruction_message = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for instructionMessage.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getInstructionMessageBytes() {
    java.lang.Object ref = instructionMessage_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      instructionMessage_ = b;
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
    if (!getAnnotationSpecSetBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, annotationSpecSet_);
    }
    if (!getInstructionMessageBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, instructionMessage_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getAnnotationSpecSetBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, annotationSpecSet_);
    }
    if (!getInstructionMessageBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, instructionMessage_);
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
    if (!(obj instanceof com.google.cloud.datalabeling.v1beta1.PolylineConfig)) {
      return super.equals(obj);
    }
    com.google.cloud.datalabeling.v1beta1.PolylineConfig other = (com.google.cloud.datalabeling.v1beta1.PolylineConfig) obj;

    if (!getAnnotationSpecSet()
        .equals(other.getAnnotationSpecSet())) return false;
    if (!getInstructionMessage()
        .equals(other.getInstructionMessage())) return false;
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
    hash = (37 * hash) + ANNOTATION_SPEC_SET_FIELD_NUMBER;
    hash = (53 * hash) + getAnnotationSpecSet().hashCode();
    hash = (37 * hash) + INSTRUCTION_MESSAGE_FIELD_NUMBER;
    hash = (53 * hash) + getInstructionMessage().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig parseFrom(
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
  public static Builder newBuilder(com.google.cloud.datalabeling.v1beta1.PolylineConfig prototype) {
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
   * Config for image polyline human labeling task.
   * </pre>
   *
   * Protobuf type {@code google.cloud.datalabeling.v1beta1.PolylineConfig}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.datalabeling.v1beta1.PolylineConfig)
      com.google.cloud.datalabeling.v1beta1.PolylineConfigOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOuterClass.internal_static_google_cloud_datalabeling_v1beta1_PolylineConfig_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOuterClass.internal_static_google_cloud_datalabeling_v1beta1_PolylineConfig_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.datalabeling.v1beta1.PolylineConfig.class, com.google.cloud.datalabeling.v1beta1.PolylineConfig.Builder.class);
    }

    // Construct using com.google.cloud.datalabeling.v1beta1.PolylineConfig.newBuilder()
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
      annotationSpecSet_ = "";

      instructionMessage_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOuterClass.internal_static_google_cloud_datalabeling_v1beta1_PolylineConfig_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.datalabeling.v1beta1.PolylineConfig getDefaultInstanceForType() {
      return com.google.cloud.datalabeling.v1beta1.PolylineConfig.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.datalabeling.v1beta1.PolylineConfig build() {
      com.google.cloud.datalabeling.v1beta1.PolylineConfig result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.datalabeling.v1beta1.PolylineConfig buildPartial() {
      com.google.cloud.datalabeling.v1beta1.PolylineConfig result = new com.google.cloud.datalabeling.v1beta1.PolylineConfig(this);
      result.annotationSpecSet_ = annotationSpecSet_;
      result.instructionMessage_ = instructionMessage_;
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
      if (other instanceof com.google.cloud.datalabeling.v1beta1.PolylineConfig) {
        return mergeFrom((com.google.cloud.datalabeling.v1beta1.PolylineConfig)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.datalabeling.v1beta1.PolylineConfig other) {
      if (other == com.google.cloud.datalabeling.v1beta1.PolylineConfig.getDefaultInstance()) return this;
      if (!other.getAnnotationSpecSet().isEmpty()) {
        annotationSpecSet_ = other.annotationSpecSet_;
        onChanged();
      }
      if (!other.getInstructionMessage().isEmpty()) {
        instructionMessage_ = other.instructionMessage_;
        onChanged();
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
      com.google.cloud.datalabeling.v1beta1.PolylineConfig parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.datalabeling.v1beta1.PolylineConfig) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object annotationSpecSet_ = "";
    /**
     * <pre>
     * Required. Annotation spec set resource name.
     * </pre>
     *
     * <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The annotationSpecSet.
     */
    public java.lang.String getAnnotationSpecSet() {
      java.lang.Object ref = annotationSpecSet_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        annotationSpecSet_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. Annotation spec set resource name.
     * </pre>
     *
     * <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for annotationSpecSet.
     */
    public com.google.protobuf.ByteString
        getAnnotationSpecSetBytes() {
      java.lang.Object ref = annotationSpecSet_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        annotationSpecSet_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. Annotation spec set resource name.
     * </pre>
     *
     * <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The annotationSpecSet to set.
     * @return This builder for chaining.
     */
    public Builder setAnnotationSpecSet(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      annotationSpecSet_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. Annotation spec set resource name.
     * </pre>
     *
     * <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return This builder for chaining.
     */
    public Builder clearAnnotationSpecSet() {
      
      annotationSpecSet_ = getDefaultInstance().getAnnotationSpecSet();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. Annotation spec set resource name.
     * </pre>
     *
     * <code>string annotation_spec_set = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The bytes for annotationSpecSet to set.
     * @return This builder for chaining.
     */
    public Builder setAnnotationSpecSetBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      annotationSpecSet_ = value;
      onChanged();
      return this;
    }

    private java.lang.Object instructionMessage_ = "";
    /**
     * <pre>
     * Optional. Instruction message showed on contributors UI.
     * </pre>
     *
     * <code>string instruction_message = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return The instructionMessage.
     */
    public java.lang.String getInstructionMessage() {
      java.lang.Object ref = instructionMessage_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        instructionMessage_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Optional. Instruction message showed on contributors UI.
     * </pre>
     *
     * <code>string instruction_message = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return The bytes for instructionMessage.
     */
    public com.google.protobuf.ByteString
        getInstructionMessageBytes() {
      java.lang.Object ref = instructionMessage_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        instructionMessage_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Optional. Instruction message showed on contributors UI.
     * </pre>
     *
     * <code>string instruction_message = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param value The instructionMessage to set.
     * @return This builder for chaining.
     */
    public Builder setInstructionMessage(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      instructionMessage_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Optional. Instruction message showed on contributors UI.
     * </pre>
     *
     * <code>string instruction_message = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return This builder for chaining.
     */
    public Builder clearInstructionMessage() {
      
      instructionMessage_ = getDefaultInstance().getInstructionMessage();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Optional. Instruction message showed on contributors UI.
     * </pre>
     *
     * <code>string instruction_message = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param value The bytes for instructionMessage to set.
     * @return This builder for chaining.
     */
    public Builder setInstructionMessageBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      instructionMessage_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.datalabeling.v1beta1.PolylineConfig)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.datalabeling.v1beta1.PolylineConfig)
  private static final com.google.cloud.datalabeling.v1beta1.PolylineConfig DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.datalabeling.v1beta1.PolylineConfig();
  }

  public static com.google.cloud.datalabeling.v1beta1.PolylineConfig getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<PolylineConfig>
      PARSER = new com.google.protobuf.AbstractParser<PolylineConfig>() {
    @java.lang.Override
    public PolylineConfig parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new PolylineConfig(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<PolylineConfig> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<PolylineConfig> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.datalabeling.v1beta1.PolylineConfig getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

