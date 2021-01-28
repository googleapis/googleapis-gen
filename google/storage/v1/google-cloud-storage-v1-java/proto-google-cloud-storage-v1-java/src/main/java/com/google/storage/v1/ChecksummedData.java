// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/storage/v1/storage_resources.proto

package com.google.storage.v1;

/**
 * <pre>
 * Message used to convey content being read or written, along with its
 * checksum.
 * </pre>
 *
 * Protobuf type {@code google.storage.v1.ChecksummedData}
 */
public final class ChecksummedData extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.storage.v1.ChecksummedData)
    ChecksummedDataOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ChecksummedData.newBuilder() to construct.
  private ChecksummedData(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ChecksummedData() {
    content_ = com.google.protobuf.ByteString.EMPTY;
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ChecksummedData();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ChecksummedData(
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

            content_ = input.readBytes();
            break;
          }
          case 18: {
            com.google.protobuf.UInt32Value.Builder subBuilder = null;
            if (crc32C_ != null) {
              subBuilder = crc32C_.toBuilder();
            }
            crc32C_ = input.readMessage(com.google.protobuf.UInt32Value.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(crc32C_);
              crc32C_ = subBuilder.buildPartial();
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
    return com.google.storage.v1.CloudStorageResourcesProto.internal_static_google_storage_v1_ChecksummedData_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.storage.v1.CloudStorageResourcesProto.internal_static_google_storage_v1_ChecksummedData_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.storage.v1.ChecksummedData.class, com.google.storage.v1.ChecksummedData.Builder.class);
  }

  public static final int CONTENT_FIELD_NUMBER = 1;
  private com.google.protobuf.ByteString content_;
  /**
   * <pre>
   * The data.
   * </pre>
   *
   * <code>bytes content = 1;</code>
   * @return The content.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString getContent() {
    return content_;
  }

  public static final int CRC32C_FIELD_NUMBER = 2;
  private com.google.protobuf.UInt32Value crc32C_;
  /**
   * <pre>
   * CRC32C digest of the contents.
   * </pre>
   *
   * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
   * @return Whether the crc32c field is set.
   */
  @java.lang.Override
  public boolean hasCrc32C() {
    return crc32C_ != null;
  }
  /**
   * <pre>
   * CRC32C digest of the contents.
   * </pre>
   *
   * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
   * @return The crc32c.
   */
  @java.lang.Override
  public com.google.protobuf.UInt32Value getCrc32C() {
    return crc32C_ == null ? com.google.protobuf.UInt32Value.getDefaultInstance() : crc32C_;
  }
  /**
   * <pre>
   * CRC32C digest of the contents.
   * </pre>
   *
   * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
   */
  @java.lang.Override
  public com.google.protobuf.UInt32ValueOrBuilder getCrc32COrBuilder() {
    return getCrc32C();
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
    if (!content_.isEmpty()) {
      output.writeBytes(1, content_);
    }
    if (crc32C_ != null) {
      output.writeMessage(2, getCrc32C());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!content_.isEmpty()) {
      size += com.google.protobuf.CodedOutputStream
        .computeBytesSize(1, content_);
    }
    if (crc32C_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, getCrc32C());
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
    if (!(obj instanceof com.google.storage.v1.ChecksummedData)) {
      return super.equals(obj);
    }
    com.google.storage.v1.ChecksummedData other = (com.google.storage.v1.ChecksummedData) obj;

    if (!getContent()
        .equals(other.getContent())) return false;
    if (hasCrc32C() != other.hasCrc32C()) return false;
    if (hasCrc32C()) {
      if (!getCrc32C()
          .equals(other.getCrc32C())) return false;
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
    hash = (37 * hash) + CONTENT_FIELD_NUMBER;
    hash = (53 * hash) + getContent().hashCode();
    if (hasCrc32C()) {
      hash = (37 * hash) + CRC32C_FIELD_NUMBER;
      hash = (53 * hash) + getCrc32C().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.storage.v1.ChecksummedData parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.storage.v1.ChecksummedData parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.storage.v1.ChecksummedData parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.storage.v1.ChecksummedData parseFrom(
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
  public static Builder newBuilder(com.google.storage.v1.ChecksummedData prototype) {
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
   * Message used to convey content being read or written, along with its
   * checksum.
   * </pre>
   *
   * Protobuf type {@code google.storage.v1.ChecksummedData}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.storage.v1.ChecksummedData)
      com.google.storage.v1.ChecksummedDataOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.storage.v1.CloudStorageResourcesProto.internal_static_google_storage_v1_ChecksummedData_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.storage.v1.CloudStorageResourcesProto.internal_static_google_storage_v1_ChecksummedData_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.storage.v1.ChecksummedData.class, com.google.storage.v1.ChecksummedData.Builder.class);
    }

    // Construct using com.google.storage.v1.ChecksummedData.newBuilder()
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
      content_ = com.google.protobuf.ByteString.EMPTY;

      if (crc32CBuilder_ == null) {
        crc32C_ = null;
      } else {
        crc32C_ = null;
        crc32CBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.storage.v1.CloudStorageResourcesProto.internal_static_google_storage_v1_ChecksummedData_descriptor;
    }

    @java.lang.Override
    public com.google.storage.v1.ChecksummedData getDefaultInstanceForType() {
      return com.google.storage.v1.ChecksummedData.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.storage.v1.ChecksummedData build() {
      com.google.storage.v1.ChecksummedData result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.storage.v1.ChecksummedData buildPartial() {
      com.google.storage.v1.ChecksummedData result = new com.google.storage.v1.ChecksummedData(this);
      result.content_ = content_;
      if (crc32CBuilder_ == null) {
        result.crc32C_ = crc32C_;
      } else {
        result.crc32C_ = crc32CBuilder_.build();
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
      if (other instanceof com.google.storage.v1.ChecksummedData) {
        return mergeFrom((com.google.storage.v1.ChecksummedData)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.storage.v1.ChecksummedData other) {
      if (other == com.google.storage.v1.ChecksummedData.getDefaultInstance()) return this;
      if (other.getContent() != com.google.protobuf.ByteString.EMPTY) {
        setContent(other.getContent());
      }
      if (other.hasCrc32C()) {
        mergeCrc32C(other.getCrc32C());
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
      com.google.storage.v1.ChecksummedData parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.storage.v1.ChecksummedData) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.protobuf.ByteString content_ = com.google.protobuf.ByteString.EMPTY;
    /**
     * <pre>
     * The data.
     * </pre>
     *
     * <code>bytes content = 1;</code>
     * @return The content.
     */
    @java.lang.Override
    public com.google.protobuf.ByteString getContent() {
      return content_;
    }
    /**
     * <pre>
     * The data.
     * </pre>
     *
     * <code>bytes content = 1;</code>
     * @param value The content to set.
     * @return This builder for chaining.
     */
    public Builder setContent(com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      content_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The data.
     * </pre>
     *
     * <code>bytes content = 1;</code>
     * @return This builder for chaining.
     */
    public Builder clearContent() {
      
      content_ = getDefaultInstance().getContent();
      onChanged();
      return this;
    }

    private com.google.protobuf.UInt32Value crc32C_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.UInt32Value, com.google.protobuf.UInt32Value.Builder, com.google.protobuf.UInt32ValueOrBuilder> crc32CBuilder_;
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     * @return Whether the crc32c field is set.
     */
    public boolean hasCrc32C() {
      return crc32CBuilder_ != null || crc32C_ != null;
    }
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     * @return The crc32c.
     */
    public com.google.protobuf.UInt32Value getCrc32C() {
      if (crc32CBuilder_ == null) {
        return crc32C_ == null ? com.google.protobuf.UInt32Value.getDefaultInstance() : crc32C_;
      } else {
        return crc32CBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     */
    public Builder setCrc32C(com.google.protobuf.UInt32Value value) {
      if (crc32CBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        crc32C_ = value;
        onChanged();
      } else {
        crc32CBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     */
    public Builder setCrc32C(
        com.google.protobuf.UInt32Value.Builder builderForValue) {
      if (crc32CBuilder_ == null) {
        crc32C_ = builderForValue.build();
        onChanged();
      } else {
        crc32CBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     */
    public Builder mergeCrc32C(com.google.protobuf.UInt32Value value) {
      if (crc32CBuilder_ == null) {
        if (crc32C_ != null) {
          crc32C_ =
            com.google.protobuf.UInt32Value.newBuilder(crc32C_).mergeFrom(value).buildPartial();
        } else {
          crc32C_ = value;
        }
        onChanged();
      } else {
        crc32CBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     */
    public Builder clearCrc32C() {
      if (crc32CBuilder_ == null) {
        crc32C_ = null;
        onChanged();
      } else {
        crc32C_ = null;
        crc32CBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     */
    public com.google.protobuf.UInt32Value.Builder getCrc32CBuilder() {
      
      onChanged();
      return getCrc32CFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     */
    public com.google.protobuf.UInt32ValueOrBuilder getCrc32COrBuilder() {
      if (crc32CBuilder_ != null) {
        return crc32CBuilder_.getMessageOrBuilder();
      } else {
        return crc32C_ == null ?
            com.google.protobuf.UInt32Value.getDefaultInstance() : crc32C_;
      }
    }
    /**
     * <pre>
     * CRC32C digest of the contents.
     * </pre>
     *
     * <code>.google.protobuf.UInt32Value crc32c = 2;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.UInt32Value, com.google.protobuf.UInt32Value.Builder, com.google.protobuf.UInt32ValueOrBuilder> 
        getCrc32CFieldBuilder() {
      if (crc32CBuilder_ == null) {
        crc32CBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.protobuf.UInt32Value, com.google.protobuf.UInt32Value.Builder, com.google.protobuf.UInt32ValueOrBuilder>(
                getCrc32C(),
                getParentForChildren(),
                isClean());
        crc32C_ = null;
      }
      return crc32CBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.storage.v1.ChecksummedData)
  }

  // @@protoc_insertion_point(class_scope:google.storage.v1.ChecksummedData)
  private static final com.google.storage.v1.ChecksummedData DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.storage.v1.ChecksummedData();
  }

  public static com.google.storage.v1.ChecksummedData getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ChecksummedData>
      PARSER = new com.google.protobuf.AbstractParser<ChecksummedData>() {
    @java.lang.Override
    public ChecksummedData parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ChecksummedData(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ChecksummedData> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ChecksummedData> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.storage.v1.ChecksummedData getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

