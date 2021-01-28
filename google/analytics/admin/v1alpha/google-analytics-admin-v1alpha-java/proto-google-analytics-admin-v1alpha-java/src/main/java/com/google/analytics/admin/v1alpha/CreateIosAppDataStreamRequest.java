// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/analytics/admin/v1alpha/analytics_admin.proto

package com.google.analytics.admin.v1alpha;

/**
 * <pre>
 * Request message for CreateIosAppDataStream RPC.
 * </pre>
 *
 * Protobuf type {@code google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest}
 */
public final class CreateIosAppDataStreamRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest)
    CreateIosAppDataStreamRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use CreateIosAppDataStreamRequest.newBuilder() to construct.
  private CreateIosAppDataStreamRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private CreateIosAppDataStreamRequest() {
    parent_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new CreateIosAppDataStreamRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private CreateIosAppDataStreamRequest(
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
            com.google.analytics.admin.v1alpha.IosAppDataStream.Builder subBuilder = null;
            if (iosAppDataStream_ != null) {
              subBuilder = iosAppDataStream_.toBuilder();
            }
            iosAppDataStream_ = input.readMessage(com.google.analytics.admin.v1alpha.IosAppDataStream.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(iosAppDataStream_);
              iosAppDataStream_ = subBuilder.buildPartial();
            }

            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            parent_ = s;
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
    return com.google.analytics.admin.v1alpha.AnalyticsAdminProto.internal_static_google_analytics_admin_v1alpha_CreateIosAppDataStreamRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.analytics.admin.v1alpha.AnalyticsAdminProto.internal_static_google_analytics_admin_v1alpha_CreateIosAppDataStreamRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest.class, com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest.Builder.class);
  }

  public static final int IOS_APP_DATA_STREAM_FIELD_NUMBER = 1;
  private com.google.analytics.admin.v1alpha.IosAppDataStream iosAppDataStream_;
  /**
   * <pre>
   * Required. The iOS app data stream to create.
   * </pre>
   *
   * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the iosAppDataStream field is set.
   */
  @java.lang.Override
  public boolean hasIosAppDataStream() {
    return iosAppDataStream_ != null;
  }
  /**
   * <pre>
   * Required. The iOS app data stream to create.
   * </pre>
   *
   * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The iosAppDataStream.
   */
  @java.lang.Override
  public com.google.analytics.admin.v1alpha.IosAppDataStream getIosAppDataStream() {
    return iosAppDataStream_ == null ? com.google.analytics.admin.v1alpha.IosAppDataStream.getDefaultInstance() : iosAppDataStream_;
  }
  /**
   * <pre>
   * Required. The iOS app data stream to create.
   * </pre>
   *
   * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.analytics.admin.v1alpha.IosAppDataStreamOrBuilder getIosAppDataStreamOrBuilder() {
    return getIosAppDataStream();
  }

  public static final int PARENT_FIELD_NUMBER = 2;
  private volatile java.lang.Object parent_;
  /**
   * <pre>
   * Required. The parent resource where this ios app data stream will be created.
   * Format: properties/123
   * </pre>
   *
   * <code>string parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  @java.lang.Override
  public java.lang.String getParent() {
    java.lang.Object ref = parent_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      parent_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The parent resource where this ios app data stream will be created.
   * Format: properties/123
   * </pre>
   *
   * <code>string parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getParentBytes() {
    java.lang.Object ref = parent_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      parent_ = b;
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
    if (iosAppDataStream_ != null) {
      output.writeMessage(1, getIosAppDataStream());
    }
    if (!getParentBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, parent_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (iosAppDataStream_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getIosAppDataStream());
    }
    if (!getParentBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, parent_);
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
    if (!(obj instanceof com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest)) {
      return super.equals(obj);
    }
    com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest other = (com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest) obj;

    if (hasIosAppDataStream() != other.hasIosAppDataStream()) return false;
    if (hasIosAppDataStream()) {
      if (!getIosAppDataStream()
          .equals(other.getIosAppDataStream())) return false;
    }
    if (!getParent()
        .equals(other.getParent())) return false;
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
    if (hasIosAppDataStream()) {
      hash = (37 * hash) + IOS_APP_DATA_STREAM_FIELD_NUMBER;
      hash = (53 * hash) + getIosAppDataStream().hashCode();
    }
    hash = (37 * hash) + PARENT_FIELD_NUMBER;
    hash = (53 * hash) + getParent().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parseFrom(
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
  public static Builder newBuilder(com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest prototype) {
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
   * Request message for CreateIosAppDataStream RPC.
   * </pre>
   *
   * Protobuf type {@code google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest)
      com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.analytics.admin.v1alpha.AnalyticsAdminProto.internal_static_google_analytics_admin_v1alpha_CreateIosAppDataStreamRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.analytics.admin.v1alpha.AnalyticsAdminProto.internal_static_google_analytics_admin_v1alpha_CreateIosAppDataStreamRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest.class, com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest.Builder.class);
    }

    // Construct using com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest.newBuilder()
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
      if (iosAppDataStreamBuilder_ == null) {
        iosAppDataStream_ = null;
      } else {
        iosAppDataStream_ = null;
        iosAppDataStreamBuilder_ = null;
      }
      parent_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.analytics.admin.v1alpha.AnalyticsAdminProto.internal_static_google_analytics_admin_v1alpha_CreateIosAppDataStreamRequest_descriptor;
    }

    @java.lang.Override
    public com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest getDefaultInstanceForType() {
      return com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest build() {
      com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest buildPartial() {
      com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest result = new com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest(this);
      if (iosAppDataStreamBuilder_ == null) {
        result.iosAppDataStream_ = iosAppDataStream_;
      } else {
        result.iosAppDataStream_ = iosAppDataStreamBuilder_.build();
      }
      result.parent_ = parent_;
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
      if (other instanceof com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest) {
        return mergeFrom((com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest other) {
      if (other == com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest.getDefaultInstance()) return this;
      if (other.hasIosAppDataStream()) {
        mergeIosAppDataStream(other.getIosAppDataStream());
      }
      if (!other.getParent().isEmpty()) {
        parent_ = other.parent_;
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
      com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.analytics.admin.v1alpha.IosAppDataStream iosAppDataStream_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.analytics.admin.v1alpha.IosAppDataStream, com.google.analytics.admin.v1alpha.IosAppDataStream.Builder, com.google.analytics.admin.v1alpha.IosAppDataStreamOrBuilder> iosAppDataStreamBuilder_;
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Whether the iosAppDataStream field is set.
     */
    public boolean hasIosAppDataStream() {
      return iosAppDataStreamBuilder_ != null || iosAppDataStream_ != null;
    }
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The iosAppDataStream.
     */
    public com.google.analytics.admin.v1alpha.IosAppDataStream getIosAppDataStream() {
      if (iosAppDataStreamBuilder_ == null) {
        return iosAppDataStream_ == null ? com.google.analytics.admin.v1alpha.IosAppDataStream.getDefaultInstance() : iosAppDataStream_;
      } else {
        return iosAppDataStreamBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setIosAppDataStream(com.google.analytics.admin.v1alpha.IosAppDataStream value) {
      if (iosAppDataStreamBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        iosAppDataStream_ = value;
        onChanged();
      } else {
        iosAppDataStreamBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setIosAppDataStream(
        com.google.analytics.admin.v1alpha.IosAppDataStream.Builder builderForValue) {
      if (iosAppDataStreamBuilder_ == null) {
        iosAppDataStream_ = builderForValue.build();
        onChanged();
      } else {
        iosAppDataStreamBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder mergeIosAppDataStream(com.google.analytics.admin.v1alpha.IosAppDataStream value) {
      if (iosAppDataStreamBuilder_ == null) {
        if (iosAppDataStream_ != null) {
          iosAppDataStream_ =
            com.google.analytics.admin.v1alpha.IosAppDataStream.newBuilder(iosAppDataStream_).mergeFrom(value).buildPartial();
        } else {
          iosAppDataStream_ = value;
        }
        onChanged();
      } else {
        iosAppDataStreamBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder clearIosAppDataStream() {
      if (iosAppDataStreamBuilder_ == null) {
        iosAppDataStream_ = null;
        onChanged();
      } else {
        iosAppDataStream_ = null;
        iosAppDataStreamBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.analytics.admin.v1alpha.IosAppDataStream.Builder getIosAppDataStreamBuilder() {
      
      onChanged();
      return getIosAppDataStreamFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.analytics.admin.v1alpha.IosAppDataStreamOrBuilder getIosAppDataStreamOrBuilder() {
      if (iosAppDataStreamBuilder_ != null) {
        return iosAppDataStreamBuilder_.getMessageOrBuilder();
      } else {
        return iosAppDataStream_ == null ?
            com.google.analytics.admin.v1alpha.IosAppDataStream.getDefaultInstance() : iosAppDataStream_;
      }
    }
    /**
     * <pre>
     * Required. The iOS app data stream to create.
     * </pre>
     *
     * <code>.google.analytics.admin.v1alpha.IosAppDataStream ios_app_data_stream = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.analytics.admin.v1alpha.IosAppDataStream, com.google.analytics.admin.v1alpha.IosAppDataStream.Builder, com.google.analytics.admin.v1alpha.IosAppDataStreamOrBuilder> 
        getIosAppDataStreamFieldBuilder() {
      if (iosAppDataStreamBuilder_ == null) {
        iosAppDataStreamBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.analytics.admin.v1alpha.IosAppDataStream, com.google.analytics.admin.v1alpha.IosAppDataStream.Builder, com.google.analytics.admin.v1alpha.IosAppDataStreamOrBuilder>(
                getIosAppDataStream(),
                getParentForChildren(),
                isClean());
        iosAppDataStream_ = null;
      }
      return iosAppDataStreamBuilder_;
    }

    private java.lang.Object parent_ = "";
    /**
     * <pre>
     * Required. The parent resource where this ios app data stream will be created.
     * Format: properties/123
     * </pre>
     *
     * <code>string parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The parent.
     */
    public java.lang.String getParent() {
      java.lang.Object ref = parent_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        parent_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The parent resource where this ios app data stream will be created.
     * Format: properties/123
     * </pre>
     *
     * <code>string parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The bytes for parent.
     */
    public com.google.protobuf.ByteString
        getParentBytes() {
      java.lang.Object ref = parent_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        parent_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The parent resource where this ios app data stream will be created.
     * Format: properties/123
     * </pre>
     *
     * <code>string parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The parent to set.
     * @return This builder for chaining.
     */
    public Builder setParent(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      parent_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The parent resource where this ios app data stream will be created.
     * Format: properties/123
     * </pre>
     *
     * <code>string parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return This builder for chaining.
     */
    public Builder clearParent() {
      
      parent_ = getDefaultInstance().getParent();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The parent resource where this ios app data stream will be created.
     * Format: properties/123
     * </pre>
     *
     * <code>string parent = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The bytes for parent to set.
     * @return This builder for chaining.
     */
    public Builder setParentBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      parent_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest)
  }

  // @@protoc_insertion_point(class_scope:google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest)
  private static final com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest();
  }

  public static com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<CreateIosAppDataStreamRequest>
      PARSER = new com.google.protobuf.AbstractParser<CreateIosAppDataStreamRequest>() {
    @java.lang.Override
    public CreateIosAppDataStreamRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new CreateIosAppDataStreamRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<CreateIosAppDataStreamRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<CreateIosAppDataStreamRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.analytics.admin.v1alpha.CreateIosAppDataStreamRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

