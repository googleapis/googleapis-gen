// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/pubsub/v1/schema.proto

package com.google.pubsub.v1;

/**
 * <pre>
 * Response for the `ListSchemas` method.
 * </pre>
 *
 * Protobuf type {@code google.pubsub.v1.ListSchemasResponse}
 */
public final class ListSchemasResponse extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.pubsub.v1.ListSchemasResponse)
    ListSchemasResponseOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ListSchemasResponse.newBuilder() to construct.
  private ListSchemasResponse(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ListSchemasResponse() {
    schemas_ = java.util.Collections.emptyList();
    nextPageToken_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ListSchemasResponse();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ListSchemasResponse(
      com.google.protobuf.CodedInputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    this();
    if (extensionRegistry == null) {
      throw new java.lang.NullPointerException();
    }
    int mutable_bitField0_ = 0;
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
            if (!((mutable_bitField0_ & 0x00000001) != 0)) {
              schemas_ = new java.util.ArrayList<com.google.pubsub.v1.Schema>();
              mutable_bitField0_ |= 0x00000001;
            }
            schemas_.add(
                input.readMessage(com.google.pubsub.v1.Schema.parser(), extensionRegistry));
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            nextPageToken_ = s;
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
      if (((mutable_bitField0_ & 0x00000001) != 0)) {
        schemas_ = java.util.Collections.unmodifiableList(schemas_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.pubsub.v1.SchemaProto.internal_static_google_pubsub_v1_ListSchemasResponse_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.pubsub.v1.SchemaProto.internal_static_google_pubsub_v1_ListSchemasResponse_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.pubsub.v1.ListSchemasResponse.class, com.google.pubsub.v1.ListSchemasResponse.Builder.class);
  }

  public static final int SCHEMAS_FIELD_NUMBER = 1;
  private java.util.List<com.google.pubsub.v1.Schema> schemas_;
  /**
   * <pre>
   * The resulting schemas.
   * </pre>
   *
   * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
   */
  @java.lang.Override
  public java.util.List<com.google.pubsub.v1.Schema> getSchemasList() {
    return schemas_;
  }
  /**
   * <pre>
   * The resulting schemas.
   * </pre>
   *
   * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.pubsub.v1.SchemaOrBuilder> 
      getSchemasOrBuilderList() {
    return schemas_;
  }
  /**
   * <pre>
   * The resulting schemas.
   * </pre>
   *
   * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
   */
  @java.lang.Override
  public int getSchemasCount() {
    return schemas_.size();
  }
  /**
   * <pre>
   * The resulting schemas.
   * </pre>
   *
   * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
   */
  @java.lang.Override
  public com.google.pubsub.v1.Schema getSchemas(int index) {
    return schemas_.get(index);
  }
  /**
   * <pre>
   * The resulting schemas.
   * </pre>
   *
   * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
   */
  @java.lang.Override
  public com.google.pubsub.v1.SchemaOrBuilder getSchemasOrBuilder(
      int index) {
    return schemas_.get(index);
  }

  public static final int NEXT_PAGE_TOKEN_FIELD_NUMBER = 2;
  private volatile java.lang.Object nextPageToken_;
  /**
   * <pre>
   * If not empty, indicates that there may be more schemas that match the
   * request; this value should be passed in a new `ListSchemasRequest`.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  @java.lang.Override
  public java.lang.String getNextPageToken() {
    java.lang.Object ref = nextPageToken_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      nextPageToken_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * If not empty, indicates that there may be more schemas that match the
   * request; this value should be passed in a new `ListSchemasRequest`.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getNextPageTokenBytes() {
    java.lang.Object ref = nextPageToken_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      nextPageToken_ = b;
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
    for (int i = 0; i < schemas_.size(); i++) {
      output.writeMessage(1, schemas_.get(i));
    }
    if (!getNextPageTokenBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, nextPageToken_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    for (int i = 0; i < schemas_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, schemas_.get(i));
    }
    if (!getNextPageTokenBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, nextPageToken_);
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
    if (!(obj instanceof com.google.pubsub.v1.ListSchemasResponse)) {
      return super.equals(obj);
    }
    com.google.pubsub.v1.ListSchemasResponse other = (com.google.pubsub.v1.ListSchemasResponse) obj;

    if (!getSchemasList()
        .equals(other.getSchemasList())) return false;
    if (!getNextPageToken()
        .equals(other.getNextPageToken())) return false;
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
    if (getSchemasCount() > 0) {
      hash = (37 * hash) + SCHEMAS_FIELD_NUMBER;
      hash = (53 * hash) + getSchemasList().hashCode();
    }
    hash = (37 * hash) + NEXT_PAGE_TOKEN_FIELD_NUMBER;
    hash = (53 * hash) + getNextPageToken().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.pubsub.v1.ListSchemasResponse parseFrom(
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
  public static Builder newBuilder(com.google.pubsub.v1.ListSchemasResponse prototype) {
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
   * Response for the `ListSchemas` method.
   * </pre>
   *
   * Protobuf type {@code google.pubsub.v1.ListSchemasResponse}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.pubsub.v1.ListSchemasResponse)
      com.google.pubsub.v1.ListSchemasResponseOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.pubsub.v1.SchemaProto.internal_static_google_pubsub_v1_ListSchemasResponse_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.pubsub.v1.SchemaProto.internal_static_google_pubsub_v1_ListSchemasResponse_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.pubsub.v1.ListSchemasResponse.class, com.google.pubsub.v1.ListSchemasResponse.Builder.class);
    }

    // Construct using com.google.pubsub.v1.ListSchemasResponse.newBuilder()
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
        getSchemasFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (schemasBuilder_ == null) {
        schemas_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        schemasBuilder_.clear();
      }
      nextPageToken_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.pubsub.v1.SchemaProto.internal_static_google_pubsub_v1_ListSchemasResponse_descriptor;
    }

    @java.lang.Override
    public com.google.pubsub.v1.ListSchemasResponse getDefaultInstanceForType() {
      return com.google.pubsub.v1.ListSchemasResponse.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.pubsub.v1.ListSchemasResponse build() {
      com.google.pubsub.v1.ListSchemasResponse result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.pubsub.v1.ListSchemasResponse buildPartial() {
      com.google.pubsub.v1.ListSchemasResponse result = new com.google.pubsub.v1.ListSchemasResponse(this);
      int from_bitField0_ = bitField0_;
      if (schemasBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          schemas_ = java.util.Collections.unmodifiableList(schemas_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.schemas_ = schemas_;
      } else {
        result.schemas_ = schemasBuilder_.build();
      }
      result.nextPageToken_ = nextPageToken_;
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
      if (other instanceof com.google.pubsub.v1.ListSchemasResponse) {
        return mergeFrom((com.google.pubsub.v1.ListSchemasResponse)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.pubsub.v1.ListSchemasResponse other) {
      if (other == com.google.pubsub.v1.ListSchemasResponse.getDefaultInstance()) return this;
      if (schemasBuilder_ == null) {
        if (!other.schemas_.isEmpty()) {
          if (schemas_.isEmpty()) {
            schemas_ = other.schemas_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureSchemasIsMutable();
            schemas_.addAll(other.schemas_);
          }
          onChanged();
        }
      } else {
        if (!other.schemas_.isEmpty()) {
          if (schemasBuilder_.isEmpty()) {
            schemasBuilder_.dispose();
            schemasBuilder_ = null;
            schemas_ = other.schemas_;
            bitField0_ = (bitField0_ & ~0x00000001);
            schemasBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getSchemasFieldBuilder() : null;
          } else {
            schemasBuilder_.addAllMessages(other.schemas_);
          }
        }
      }
      if (!other.getNextPageToken().isEmpty()) {
        nextPageToken_ = other.nextPageToken_;
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
      com.google.pubsub.v1.ListSchemasResponse parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.pubsub.v1.ListSchemasResponse) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.pubsub.v1.Schema> schemas_ =
      java.util.Collections.emptyList();
    private void ensureSchemasIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        schemas_ = new java.util.ArrayList<com.google.pubsub.v1.Schema>(schemas_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.pubsub.v1.Schema, com.google.pubsub.v1.Schema.Builder, com.google.pubsub.v1.SchemaOrBuilder> schemasBuilder_;

    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public java.util.List<com.google.pubsub.v1.Schema> getSchemasList() {
      if (schemasBuilder_ == null) {
        return java.util.Collections.unmodifiableList(schemas_);
      } else {
        return schemasBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public int getSchemasCount() {
      if (schemasBuilder_ == null) {
        return schemas_.size();
      } else {
        return schemasBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public com.google.pubsub.v1.Schema getSchemas(int index) {
      if (schemasBuilder_ == null) {
        return schemas_.get(index);
      } else {
        return schemasBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder setSchemas(
        int index, com.google.pubsub.v1.Schema value) {
      if (schemasBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureSchemasIsMutable();
        schemas_.set(index, value);
        onChanged();
      } else {
        schemasBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder setSchemas(
        int index, com.google.pubsub.v1.Schema.Builder builderForValue) {
      if (schemasBuilder_ == null) {
        ensureSchemasIsMutable();
        schemas_.set(index, builderForValue.build());
        onChanged();
      } else {
        schemasBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder addSchemas(com.google.pubsub.v1.Schema value) {
      if (schemasBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureSchemasIsMutable();
        schemas_.add(value);
        onChanged();
      } else {
        schemasBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder addSchemas(
        int index, com.google.pubsub.v1.Schema value) {
      if (schemasBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureSchemasIsMutable();
        schemas_.add(index, value);
        onChanged();
      } else {
        schemasBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder addSchemas(
        com.google.pubsub.v1.Schema.Builder builderForValue) {
      if (schemasBuilder_ == null) {
        ensureSchemasIsMutable();
        schemas_.add(builderForValue.build());
        onChanged();
      } else {
        schemasBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder addSchemas(
        int index, com.google.pubsub.v1.Schema.Builder builderForValue) {
      if (schemasBuilder_ == null) {
        ensureSchemasIsMutable();
        schemas_.add(index, builderForValue.build());
        onChanged();
      } else {
        schemasBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder addAllSchemas(
        java.lang.Iterable<? extends com.google.pubsub.v1.Schema> values) {
      if (schemasBuilder_ == null) {
        ensureSchemasIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, schemas_);
        onChanged();
      } else {
        schemasBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder clearSchemas() {
      if (schemasBuilder_ == null) {
        schemas_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        schemasBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public Builder removeSchemas(int index) {
      if (schemasBuilder_ == null) {
        ensureSchemasIsMutable();
        schemas_.remove(index);
        onChanged();
      } else {
        schemasBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public com.google.pubsub.v1.Schema.Builder getSchemasBuilder(
        int index) {
      return getSchemasFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public com.google.pubsub.v1.SchemaOrBuilder getSchemasOrBuilder(
        int index) {
      if (schemasBuilder_ == null) {
        return schemas_.get(index);  } else {
        return schemasBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public java.util.List<? extends com.google.pubsub.v1.SchemaOrBuilder> 
         getSchemasOrBuilderList() {
      if (schemasBuilder_ != null) {
        return schemasBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(schemas_);
      }
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public com.google.pubsub.v1.Schema.Builder addSchemasBuilder() {
      return getSchemasFieldBuilder().addBuilder(
          com.google.pubsub.v1.Schema.getDefaultInstance());
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public com.google.pubsub.v1.Schema.Builder addSchemasBuilder(
        int index) {
      return getSchemasFieldBuilder().addBuilder(
          index, com.google.pubsub.v1.Schema.getDefaultInstance());
    }
    /**
     * <pre>
     * The resulting schemas.
     * </pre>
     *
     * <code>repeated .google.pubsub.v1.Schema schemas = 1;</code>
     */
    public java.util.List<com.google.pubsub.v1.Schema.Builder> 
         getSchemasBuilderList() {
      return getSchemasFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.pubsub.v1.Schema, com.google.pubsub.v1.Schema.Builder, com.google.pubsub.v1.SchemaOrBuilder> 
        getSchemasFieldBuilder() {
      if (schemasBuilder_ == null) {
        schemasBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.pubsub.v1.Schema, com.google.pubsub.v1.Schema.Builder, com.google.pubsub.v1.SchemaOrBuilder>(
                schemas_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        schemas_ = null;
      }
      return schemasBuilder_;
    }

    private java.lang.Object nextPageToken_ = "";
    /**
     * <pre>
     * If not empty, indicates that there may be more schemas that match the
     * request; this value should be passed in a new `ListSchemasRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return The nextPageToken.
     */
    public java.lang.String getNextPageToken() {
      java.lang.Object ref = nextPageToken_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        nextPageToken_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * If not empty, indicates that there may be more schemas that match the
     * request; this value should be passed in a new `ListSchemasRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return The bytes for nextPageToken.
     */
    public com.google.protobuf.ByteString
        getNextPageTokenBytes() {
      java.lang.Object ref = nextPageToken_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        nextPageToken_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * If not empty, indicates that there may be more schemas that match the
     * request; this value should be passed in a new `ListSchemasRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @param value The nextPageToken to set.
     * @return This builder for chaining.
     */
    public Builder setNextPageToken(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      nextPageToken_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If not empty, indicates that there may be more schemas that match the
     * request; this value should be passed in a new `ListSchemasRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearNextPageToken() {
      
      nextPageToken_ = getDefaultInstance().getNextPageToken();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If not empty, indicates that there may be more schemas that match the
     * request; this value should be passed in a new `ListSchemasRequest`.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @param value The bytes for nextPageToken to set.
     * @return This builder for chaining.
     */
    public Builder setNextPageTokenBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      nextPageToken_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.pubsub.v1.ListSchemasResponse)
  }

  // @@protoc_insertion_point(class_scope:google.pubsub.v1.ListSchemasResponse)
  private static final com.google.pubsub.v1.ListSchemasResponse DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.pubsub.v1.ListSchemasResponse();
  }

  public static com.google.pubsub.v1.ListSchemasResponse getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ListSchemasResponse>
      PARSER = new com.google.protobuf.AbstractParser<ListSchemasResponse>() {
    @java.lang.Override
    public ListSchemasResponse parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ListSchemasResponse(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ListSchemasResponse> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ListSchemasResponse> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.pubsub.v1.ListSchemasResponse getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

