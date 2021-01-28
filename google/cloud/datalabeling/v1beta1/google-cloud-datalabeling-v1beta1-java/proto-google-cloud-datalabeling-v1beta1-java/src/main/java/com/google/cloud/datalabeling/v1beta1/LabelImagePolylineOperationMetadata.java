// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datalabeling/v1beta1/operations.proto

package com.google.cloud.datalabeling.v1beta1;

/**
 * <pre>
 * Details of LabelImagePolyline operation metadata.
 * </pre>
 *
 * Protobuf type {@code google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata}
 */
public final class LabelImagePolylineOperationMetadata extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata)
    LabelImagePolylineOperationMetadataOrBuilder {
private static final long serialVersionUID = 0L;
  // Use LabelImagePolylineOperationMetadata.newBuilder() to construct.
  private LabelImagePolylineOperationMetadata(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private LabelImagePolylineOperationMetadata() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new LabelImagePolylineOperationMetadata();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private LabelImagePolylineOperationMetadata(
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
            com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.Builder subBuilder = null;
            if (basicConfig_ != null) {
              subBuilder = basicConfig_.toBuilder();
            }
            basicConfig_ = input.readMessage(com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(basicConfig_);
              basicConfig_ = subBuilder.buildPartial();
            }

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
    return com.google.cloud.datalabeling.v1beta1.Operations.internal_static_google_cloud_datalabeling_v1beta1_LabelImagePolylineOperationMetadata_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.datalabeling.v1beta1.Operations.internal_static_google_cloud_datalabeling_v1beta1_LabelImagePolylineOperationMetadata_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata.class, com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata.Builder.class);
  }

  public static final int BASIC_CONFIG_FIELD_NUMBER = 1;
  private com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basicConfig_;
  /**
   * <pre>
   * Basic human annotation config used in labeling request.
   * </pre>
   *
   * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
   * @return Whether the basicConfig field is set.
   */
  @java.lang.Override
  public boolean hasBasicConfig() {
    return basicConfig_ != null;
  }
  /**
   * <pre>
   * Basic human annotation config used in labeling request.
   * </pre>
   *
   * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
   * @return The basicConfig.
   */
  @java.lang.Override
  public com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig getBasicConfig() {
    return basicConfig_ == null ? com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.getDefaultInstance() : basicConfig_;
  }
  /**
   * <pre>
   * Basic human annotation config used in labeling request.
   * </pre>
   *
   * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
   */
  @java.lang.Override
  public com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOrBuilder getBasicConfigOrBuilder() {
    return getBasicConfig();
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
    if (basicConfig_ != null) {
      output.writeMessage(1, getBasicConfig());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (basicConfig_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getBasicConfig());
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
    if (!(obj instanceof com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata)) {
      return super.equals(obj);
    }
    com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata other = (com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata) obj;

    if (hasBasicConfig() != other.hasBasicConfig()) return false;
    if (hasBasicConfig()) {
      if (!getBasicConfig()
          .equals(other.getBasicConfig())) return false;
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
    if (hasBasicConfig()) {
      hash = (37 * hash) + BASIC_CONFIG_FIELD_NUMBER;
      hash = (53 * hash) + getBasicConfig().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parseFrom(
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
  public static Builder newBuilder(com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata prototype) {
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
   * Details of LabelImagePolyline operation metadata.
   * </pre>
   *
   * Protobuf type {@code google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata)
      com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadataOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.datalabeling.v1beta1.Operations.internal_static_google_cloud_datalabeling_v1beta1_LabelImagePolylineOperationMetadata_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.datalabeling.v1beta1.Operations.internal_static_google_cloud_datalabeling_v1beta1_LabelImagePolylineOperationMetadata_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata.class, com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata.Builder.class);
    }

    // Construct using com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata.newBuilder()
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
      if (basicConfigBuilder_ == null) {
        basicConfig_ = null;
      } else {
        basicConfig_ = null;
        basicConfigBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.datalabeling.v1beta1.Operations.internal_static_google_cloud_datalabeling_v1beta1_LabelImagePolylineOperationMetadata_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata getDefaultInstanceForType() {
      return com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata build() {
      com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata buildPartial() {
      com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata result = new com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata(this);
      if (basicConfigBuilder_ == null) {
        result.basicConfig_ = basicConfig_;
      } else {
        result.basicConfig_ = basicConfigBuilder_.build();
      }
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
      if (other instanceof com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata) {
        return mergeFrom((com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata other) {
      if (other == com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata.getDefaultInstance()) return this;
      if (other.hasBasicConfig()) {
        mergeBasicConfig(other.getBasicConfig());
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
      com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basicConfig_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig, com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.Builder, com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOrBuilder> basicConfigBuilder_;
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     * @return Whether the basicConfig field is set.
     */
    public boolean hasBasicConfig() {
      return basicConfigBuilder_ != null || basicConfig_ != null;
    }
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     * @return The basicConfig.
     */
    public com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig getBasicConfig() {
      if (basicConfigBuilder_ == null) {
        return basicConfig_ == null ? com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.getDefaultInstance() : basicConfig_;
      } else {
        return basicConfigBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     */
    public Builder setBasicConfig(com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig value) {
      if (basicConfigBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        basicConfig_ = value;
        onChanged();
      } else {
        basicConfigBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     */
    public Builder setBasicConfig(
        com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.Builder builderForValue) {
      if (basicConfigBuilder_ == null) {
        basicConfig_ = builderForValue.build();
        onChanged();
      } else {
        basicConfigBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     */
    public Builder mergeBasicConfig(com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig value) {
      if (basicConfigBuilder_ == null) {
        if (basicConfig_ != null) {
          basicConfig_ =
            com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.newBuilder(basicConfig_).mergeFrom(value).buildPartial();
        } else {
          basicConfig_ = value;
        }
        onChanged();
      } else {
        basicConfigBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     */
    public Builder clearBasicConfig() {
      if (basicConfigBuilder_ == null) {
        basicConfig_ = null;
        onChanged();
      } else {
        basicConfig_ = null;
        basicConfigBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     */
    public com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.Builder getBasicConfigBuilder() {
      
      onChanged();
      return getBasicConfigFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     */
    public com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOrBuilder getBasicConfigOrBuilder() {
      if (basicConfigBuilder_ != null) {
        return basicConfigBuilder_.getMessageOrBuilder();
      } else {
        return basicConfig_ == null ?
            com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.getDefaultInstance() : basicConfig_;
      }
    }
    /**
     * <pre>
     * Basic human annotation config used in labeling request.
     * </pre>
     *
     * <code>.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig basic_config = 1;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig, com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.Builder, com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOrBuilder> 
        getBasicConfigFieldBuilder() {
      if (basicConfigBuilder_ == null) {
        basicConfigBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig, com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfig.Builder, com.google.cloud.datalabeling.v1beta1.HumanAnnotationConfigOrBuilder>(
                getBasicConfig(),
                getParentForChildren(),
                isClean());
        basicConfig_ = null;
      }
      return basicConfigBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata)
  private static final com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata();
  }

  public static com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<LabelImagePolylineOperationMetadata>
      PARSER = new com.google.protobuf.AbstractParser<LabelImagePolylineOperationMetadata>() {
    @java.lang.Override
    public LabelImagePolylineOperationMetadata parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new LabelImagePolylineOperationMetadata(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<LabelImagePolylineOperationMetadata> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<LabelImagePolylineOperationMetadata> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.datalabeling.v1beta1.LabelImagePolylineOperationMetadata getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

