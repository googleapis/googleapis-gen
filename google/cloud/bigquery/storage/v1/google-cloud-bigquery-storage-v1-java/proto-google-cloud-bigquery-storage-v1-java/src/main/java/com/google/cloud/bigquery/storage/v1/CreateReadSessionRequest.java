// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/bigquery/storage/v1/storage.proto

package com.google.cloud.bigquery.storage.v1;

/**
 * <pre>
 * Request message for `CreateReadSession`.
 * </pre>
 *
 * Protobuf type {@code google.cloud.bigquery.storage.v1.CreateReadSessionRequest}
 */
public final class CreateReadSessionRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.bigquery.storage.v1.CreateReadSessionRequest)
    CreateReadSessionRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use CreateReadSessionRequest.newBuilder() to construct.
  private CreateReadSessionRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private CreateReadSessionRequest() {
    parent_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new CreateReadSessionRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private CreateReadSessionRequest(
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

            parent_ = s;
            break;
          }
          case 18: {
            com.google.cloud.bigquery.storage.v1.ReadSession.Builder subBuilder = null;
            if (readSession_ != null) {
              subBuilder = readSession_.toBuilder();
            }
            readSession_ = input.readMessage(com.google.cloud.bigquery.storage.v1.ReadSession.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(readSession_);
              readSession_ = subBuilder.buildPartial();
            }

            break;
          }
          case 24: {

            maxStreamCount_ = input.readInt32();
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
    return com.google.cloud.bigquery.storage.v1.StorageProto.internal_static_google_cloud_bigquery_storage_v1_CreateReadSessionRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.bigquery.storage.v1.StorageProto.internal_static_google_cloud_bigquery_storage_v1_CreateReadSessionRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest.class, com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest.Builder.class);
  }

  public static final int PARENT_FIELD_NUMBER = 1;
  private volatile java.lang.Object parent_;
  /**
   * <pre>
   * Required. The request project that owns the session, in the form of
   * `projects/{project_id}`.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
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
   * Required. The request project that owns the session, in the form of
   * `projects/{project_id}`.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
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

  public static final int READ_SESSION_FIELD_NUMBER = 2;
  private com.google.cloud.bigquery.storage.v1.ReadSession readSession_;
  /**
   * <pre>
   * Required. Session to be created.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the readSession field is set.
   */
  @java.lang.Override
  public boolean hasReadSession() {
    return readSession_ != null;
  }
  /**
   * <pre>
   * Required. Session to be created.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The readSession.
   */
  @java.lang.Override
  public com.google.cloud.bigquery.storage.v1.ReadSession getReadSession() {
    return readSession_ == null ? com.google.cloud.bigquery.storage.v1.ReadSession.getDefaultInstance() : readSession_;
  }
  /**
   * <pre>
   * Required. Session to be created.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.cloud.bigquery.storage.v1.ReadSessionOrBuilder getReadSessionOrBuilder() {
    return getReadSession();
  }

  public static final int MAX_STREAM_COUNT_FIELD_NUMBER = 3;
  private int maxStreamCount_;
  /**
   * <pre>
   * Max initial number of streams. If unset or zero, the server will
   * provide a value of streams so as to produce reasonable throughput. Must be
   * non-negative. The number of streams may be lower than the requested number,
   * depending on the amount parallelism that is reasonable for the table. Error
   * will be returned if the max count is greater than the current system
   * max limit of 1,000.
   * Streams must be read starting from offset 0.
   * </pre>
   *
   * <code>int32 max_stream_count = 3;</code>
   * @return The maxStreamCount.
   */
  @java.lang.Override
  public int getMaxStreamCount() {
    return maxStreamCount_;
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
    if (!getParentBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, parent_);
    }
    if (readSession_ != null) {
      output.writeMessage(2, getReadSession());
    }
    if (maxStreamCount_ != 0) {
      output.writeInt32(3, maxStreamCount_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getParentBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, parent_);
    }
    if (readSession_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, getReadSession());
    }
    if (maxStreamCount_ != 0) {
      size += com.google.protobuf.CodedOutputStream
        .computeInt32Size(3, maxStreamCount_);
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
    if (!(obj instanceof com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest other = (com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest) obj;

    if (!getParent()
        .equals(other.getParent())) return false;
    if (hasReadSession() != other.hasReadSession()) return false;
    if (hasReadSession()) {
      if (!getReadSession()
          .equals(other.getReadSession())) return false;
    }
    if (getMaxStreamCount()
        != other.getMaxStreamCount()) return false;
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
    hash = (37 * hash) + PARENT_FIELD_NUMBER;
    hash = (53 * hash) + getParent().hashCode();
    if (hasReadSession()) {
      hash = (37 * hash) + READ_SESSION_FIELD_NUMBER;
      hash = (53 * hash) + getReadSession().hashCode();
    }
    hash = (37 * hash) + MAX_STREAM_COUNT_FIELD_NUMBER;
    hash = (53 * hash) + getMaxStreamCount();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parseFrom(
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
  public static Builder newBuilder(com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest prototype) {
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
   * Request message for `CreateReadSession`.
   * </pre>
   *
   * Protobuf type {@code google.cloud.bigquery.storage.v1.CreateReadSessionRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.bigquery.storage.v1.CreateReadSessionRequest)
      com.google.cloud.bigquery.storage.v1.CreateReadSessionRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.bigquery.storage.v1.StorageProto.internal_static_google_cloud_bigquery_storage_v1_CreateReadSessionRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.bigquery.storage.v1.StorageProto.internal_static_google_cloud_bigquery_storage_v1_CreateReadSessionRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest.class, com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest.Builder.class);
    }

    // Construct using com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest.newBuilder()
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
      parent_ = "";

      if (readSessionBuilder_ == null) {
        readSession_ = null;
      } else {
        readSession_ = null;
        readSessionBuilder_ = null;
      }
      maxStreamCount_ = 0;

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.bigquery.storage.v1.StorageProto.internal_static_google_cloud_bigquery_storage_v1_CreateReadSessionRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest getDefaultInstanceForType() {
      return com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest build() {
      com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest buildPartial() {
      com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest result = new com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest(this);
      result.parent_ = parent_;
      if (readSessionBuilder_ == null) {
        result.readSession_ = readSession_;
      } else {
        result.readSession_ = readSessionBuilder_.build();
      }
      result.maxStreamCount_ = maxStreamCount_;
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
      if (other instanceof com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest) {
        return mergeFrom((com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest other) {
      if (other == com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest.getDefaultInstance()) return this;
      if (!other.getParent().isEmpty()) {
        parent_ = other.parent_;
        onChanged();
      }
      if (other.hasReadSession()) {
        mergeReadSession(other.getReadSession());
      }
      if (other.getMaxStreamCount() != 0) {
        setMaxStreamCount(other.getMaxStreamCount());
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
      com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object parent_ = "";
    /**
     * <pre>
     * Required. The request project that owns the session, in the form of
     * `projects/{project_id}`.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
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
     * Required. The request project that owns the session, in the form of
     * `projects/{project_id}`.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
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
     * Required. The request project that owns the session, in the form of
     * `projects/{project_id}`.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
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
     * Required. The request project that owns the session, in the form of
     * `projects/{project_id}`.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return This builder for chaining.
     */
    public Builder clearParent() {
      
      parent_ = getDefaultInstance().getParent();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The request project that owns the session, in the form of
     * `projects/{project_id}`.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
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

    private com.google.cloud.bigquery.storage.v1.ReadSession readSession_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.bigquery.storage.v1.ReadSession, com.google.cloud.bigquery.storage.v1.ReadSession.Builder, com.google.cloud.bigquery.storage.v1.ReadSessionOrBuilder> readSessionBuilder_;
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Whether the readSession field is set.
     */
    public boolean hasReadSession() {
      return readSessionBuilder_ != null || readSession_ != null;
    }
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The readSession.
     */
    public com.google.cloud.bigquery.storage.v1.ReadSession getReadSession() {
      if (readSessionBuilder_ == null) {
        return readSession_ == null ? com.google.cloud.bigquery.storage.v1.ReadSession.getDefaultInstance() : readSession_;
      } else {
        return readSessionBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setReadSession(com.google.cloud.bigquery.storage.v1.ReadSession value) {
      if (readSessionBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        readSession_ = value;
        onChanged();
      } else {
        readSessionBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setReadSession(
        com.google.cloud.bigquery.storage.v1.ReadSession.Builder builderForValue) {
      if (readSessionBuilder_ == null) {
        readSession_ = builderForValue.build();
        onChanged();
      } else {
        readSessionBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder mergeReadSession(com.google.cloud.bigquery.storage.v1.ReadSession value) {
      if (readSessionBuilder_ == null) {
        if (readSession_ != null) {
          readSession_ =
            com.google.cloud.bigquery.storage.v1.ReadSession.newBuilder(readSession_).mergeFrom(value).buildPartial();
        } else {
          readSession_ = value;
        }
        onChanged();
      } else {
        readSessionBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder clearReadSession() {
      if (readSessionBuilder_ == null) {
        readSession_ = null;
        onChanged();
      } else {
        readSession_ = null;
        readSessionBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.bigquery.storage.v1.ReadSession.Builder getReadSessionBuilder() {
      
      onChanged();
      return getReadSessionFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.bigquery.storage.v1.ReadSessionOrBuilder getReadSessionOrBuilder() {
      if (readSessionBuilder_ != null) {
        return readSessionBuilder_.getMessageOrBuilder();
      } else {
        return readSession_ == null ?
            com.google.cloud.bigquery.storage.v1.ReadSession.getDefaultInstance() : readSession_;
      }
    }
    /**
     * <pre>
     * Required. Session to be created.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1.ReadSession read_session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.bigquery.storage.v1.ReadSession, com.google.cloud.bigquery.storage.v1.ReadSession.Builder, com.google.cloud.bigquery.storage.v1.ReadSessionOrBuilder> 
        getReadSessionFieldBuilder() {
      if (readSessionBuilder_ == null) {
        readSessionBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.bigquery.storage.v1.ReadSession, com.google.cloud.bigquery.storage.v1.ReadSession.Builder, com.google.cloud.bigquery.storage.v1.ReadSessionOrBuilder>(
                getReadSession(),
                getParentForChildren(),
                isClean());
        readSession_ = null;
      }
      return readSessionBuilder_;
    }

    private int maxStreamCount_ ;
    /**
     * <pre>
     * Max initial number of streams. If unset or zero, the server will
     * provide a value of streams so as to produce reasonable throughput. Must be
     * non-negative. The number of streams may be lower than the requested number,
     * depending on the amount parallelism that is reasonable for the table. Error
     * will be returned if the max count is greater than the current system
     * max limit of 1,000.
     * Streams must be read starting from offset 0.
     * </pre>
     *
     * <code>int32 max_stream_count = 3;</code>
     * @return The maxStreamCount.
     */
    @java.lang.Override
    public int getMaxStreamCount() {
      return maxStreamCount_;
    }
    /**
     * <pre>
     * Max initial number of streams. If unset or zero, the server will
     * provide a value of streams so as to produce reasonable throughput. Must be
     * non-negative. The number of streams may be lower than the requested number,
     * depending on the amount parallelism that is reasonable for the table. Error
     * will be returned if the max count is greater than the current system
     * max limit of 1,000.
     * Streams must be read starting from offset 0.
     * </pre>
     *
     * <code>int32 max_stream_count = 3;</code>
     * @param value The maxStreamCount to set.
     * @return This builder for chaining.
     */
    public Builder setMaxStreamCount(int value) {
      
      maxStreamCount_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Max initial number of streams. If unset or zero, the server will
     * provide a value of streams so as to produce reasonable throughput. Must be
     * non-negative. The number of streams may be lower than the requested number,
     * depending on the amount parallelism that is reasonable for the table. Error
     * will be returned if the max count is greater than the current system
     * max limit of 1,000.
     * Streams must be read starting from offset 0.
     * </pre>
     *
     * <code>int32 max_stream_count = 3;</code>
     * @return This builder for chaining.
     */
    public Builder clearMaxStreamCount() {
      
      maxStreamCount_ = 0;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.bigquery.storage.v1.CreateReadSessionRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.bigquery.storage.v1.CreateReadSessionRequest)
  private static final com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest();
  }

  public static com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<CreateReadSessionRequest>
      PARSER = new com.google.protobuf.AbstractParser<CreateReadSessionRequest>() {
    @java.lang.Override
    public CreateReadSessionRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new CreateReadSessionRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<CreateReadSessionRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<CreateReadSessionRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.bigquery.storage.v1.CreateReadSessionRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

