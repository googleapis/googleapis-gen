// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/testing/v1/test_environment_discovery.proto

package com.google.devtools.testing.v1;

/**
 * <pre>
 * An Xcode version that an iOS version is compatible with.
 * </pre>
 *
 * Protobuf type {@code google.devtools.testing.v1.XcodeVersion}
 */
public final class XcodeVersion extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.devtools.testing.v1.XcodeVersion)
    XcodeVersionOrBuilder {
private static final long serialVersionUID = 0L;
  // Use XcodeVersion.newBuilder() to construct.
  private XcodeVersion(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private XcodeVersion() {
    version_ = "";
    tags_ = com.google.protobuf.LazyStringArrayList.EMPTY;
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new XcodeVersion();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private XcodeVersion(
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
            java.lang.String s = input.readStringRequireUtf8();

            version_ = s;
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();
            if (!((mutable_bitField0_ & 0x00000001) != 0)) {
              tags_ = new com.google.protobuf.LazyStringArrayList();
              mutable_bitField0_ |= 0x00000001;
            }
            tags_.add(s);
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
        tags_ = tags_.getUnmodifiableView();
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.devtools.testing.v1.TestEnvironmentDiscoveryProto.internal_static_google_devtools_testing_v1_XcodeVersion_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.devtools.testing.v1.TestEnvironmentDiscoveryProto.internal_static_google_devtools_testing_v1_XcodeVersion_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.devtools.testing.v1.XcodeVersion.class, com.google.devtools.testing.v1.XcodeVersion.Builder.class);
  }

  public static final int VERSION_FIELD_NUMBER = 1;
  private volatile java.lang.Object version_;
  /**
   * <pre>
   * The id for this version.
   * Example: "9.2".
   * </pre>
   *
   * <code>string version = 1;</code>
   * @return The version.
   */
  @java.lang.Override
  public java.lang.String getVersion() {
    java.lang.Object ref = version_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      version_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * The id for this version.
   * Example: "9.2".
   * </pre>
   *
   * <code>string version = 1;</code>
   * @return The bytes for version.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getVersionBytes() {
    java.lang.Object ref = version_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      version_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int TAGS_FIELD_NUMBER = 2;
  private com.google.protobuf.LazyStringList tags_;
  /**
   * <pre>
   * Tags for this Xcode version.
   * Example: "default".
   * </pre>
   *
   * <code>repeated string tags = 2;</code>
   * @return A list containing the tags.
   */
  public com.google.protobuf.ProtocolStringList
      getTagsList() {
    return tags_;
  }
  /**
   * <pre>
   * Tags for this Xcode version.
   * Example: "default".
   * </pre>
   *
   * <code>repeated string tags = 2;</code>
   * @return The count of tags.
   */
  public int getTagsCount() {
    return tags_.size();
  }
  /**
   * <pre>
   * Tags for this Xcode version.
   * Example: "default".
   * </pre>
   *
   * <code>repeated string tags = 2;</code>
   * @param index The index of the element to return.
   * @return The tags at the given index.
   */
  public java.lang.String getTags(int index) {
    return tags_.get(index);
  }
  /**
   * <pre>
   * Tags for this Xcode version.
   * Example: "default".
   * </pre>
   *
   * <code>repeated string tags = 2;</code>
   * @param index The index of the value to return.
   * @return The bytes of the tags at the given index.
   */
  public com.google.protobuf.ByteString
      getTagsBytes(int index) {
    return tags_.getByteString(index);
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
    if (!getVersionBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, version_);
    }
    for (int i = 0; i < tags_.size(); i++) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, tags_.getRaw(i));
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getVersionBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, version_);
    }
    {
      int dataSize = 0;
      for (int i = 0; i < tags_.size(); i++) {
        dataSize += computeStringSizeNoTag(tags_.getRaw(i));
      }
      size += dataSize;
      size += 1 * getTagsList().size();
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
    if (!(obj instanceof com.google.devtools.testing.v1.XcodeVersion)) {
      return super.equals(obj);
    }
    com.google.devtools.testing.v1.XcodeVersion other = (com.google.devtools.testing.v1.XcodeVersion) obj;

    if (!getVersion()
        .equals(other.getVersion())) return false;
    if (!getTagsList()
        .equals(other.getTagsList())) return false;
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
    hash = (37 * hash) + VERSION_FIELD_NUMBER;
    hash = (53 * hash) + getVersion().hashCode();
    if (getTagsCount() > 0) {
      hash = (37 * hash) + TAGS_FIELD_NUMBER;
      hash = (53 * hash) + getTagsList().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.XcodeVersion parseFrom(
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
  public static Builder newBuilder(com.google.devtools.testing.v1.XcodeVersion prototype) {
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
   * An Xcode version that an iOS version is compatible with.
   * </pre>
   *
   * Protobuf type {@code google.devtools.testing.v1.XcodeVersion}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.devtools.testing.v1.XcodeVersion)
      com.google.devtools.testing.v1.XcodeVersionOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.devtools.testing.v1.TestEnvironmentDiscoveryProto.internal_static_google_devtools_testing_v1_XcodeVersion_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.devtools.testing.v1.TestEnvironmentDiscoveryProto.internal_static_google_devtools_testing_v1_XcodeVersion_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.devtools.testing.v1.XcodeVersion.class, com.google.devtools.testing.v1.XcodeVersion.Builder.class);
    }

    // Construct using com.google.devtools.testing.v1.XcodeVersion.newBuilder()
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
      version_ = "";

      tags_ = com.google.protobuf.LazyStringArrayList.EMPTY;
      bitField0_ = (bitField0_ & ~0x00000001);
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.devtools.testing.v1.TestEnvironmentDiscoveryProto.internal_static_google_devtools_testing_v1_XcodeVersion_descriptor;
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.XcodeVersion getDefaultInstanceForType() {
      return com.google.devtools.testing.v1.XcodeVersion.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.XcodeVersion build() {
      com.google.devtools.testing.v1.XcodeVersion result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.XcodeVersion buildPartial() {
      com.google.devtools.testing.v1.XcodeVersion result = new com.google.devtools.testing.v1.XcodeVersion(this);
      int from_bitField0_ = bitField0_;
      result.version_ = version_;
      if (((bitField0_ & 0x00000001) != 0)) {
        tags_ = tags_.getUnmodifiableView();
        bitField0_ = (bitField0_ & ~0x00000001);
      }
      result.tags_ = tags_;
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
      if (other instanceof com.google.devtools.testing.v1.XcodeVersion) {
        return mergeFrom((com.google.devtools.testing.v1.XcodeVersion)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.devtools.testing.v1.XcodeVersion other) {
      if (other == com.google.devtools.testing.v1.XcodeVersion.getDefaultInstance()) return this;
      if (!other.getVersion().isEmpty()) {
        version_ = other.version_;
        onChanged();
      }
      if (!other.tags_.isEmpty()) {
        if (tags_.isEmpty()) {
          tags_ = other.tags_;
          bitField0_ = (bitField0_ & ~0x00000001);
        } else {
          ensureTagsIsMutable();
          tags_.addAll(other.tags_);
        }
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
      com.google.devtools.testing.v1.XcodeVersion parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.devtools.testing.v1.XcodeVersion) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.lang.Object version_ = "";
    /**
     * <pre>
     * The id for this version.
     * Example: "9.2".
     * </pre>
     *
     * <code>string version = 1;</code>
     * @return The version.
     */
    public java.lang.String getVersion() {
      java.lang.Object ref = version_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        version_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * The id for this version.
     * Example: "9.2".
     * </pre>
     *
     * <code>string version = 1;</code>
     * @return The bytes for version.
     */
    public com.google.protobuf.ByteString
        getVersionBytes() {
      java.lang.Object ref = version_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        version_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * The id for this version.
     * Example: "9.2".
     * </pre>
     *
     * <code>string version = 1;</code>
     * @param value The version to set.
     * @return This builder for chaining.
     */
    public Builder setVersion(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      version_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The id for this version.
     * Example: "9.2".
     * </pre>
     *
     * <code>string version = 1;</code>
     * @return This builder for chaining.
     */
    public Builder clearVersion() {
      
      version_ = getDefaultInstance().getVersion();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The id for this version.
     * Example: "9.2".
     * </pre>
     *
     * <code>string version = 1;</code>
     * @param value The bytes for version to set.
     * @return This builder for chaining.
     */
    public Builder setVersionBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      version_ = value;
      onChanged();
      return this;
    }

    private com.google.protobuf.LazyStringList tags_ = com.google.protobuf.LazyStringArrayList.EMPTY;
    private void ensureTagsIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        tags_ = new com.google.protobuf.LazyStringArrayList(tags_);
        bitField0_ |= 0x00000001;
       }
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @return A list containing the tags.
     */
    public com.google.protobuf.ProtocolStringList
        getTagsList() {
      return tags_.getUnmodifiableView();
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @return The count of tags.
     */
    public int getTagsCount() {
      return tags_.size();
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @param index The index of the element to return.
     * @return The tags at the given index.
     */
    public java.lang.String getTags(int index) {
      return tags_.get(index);
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @param index The index of the value to return.
     * @return The bytes of the tags at the given index.
     */
    public com.google.protobuf.ByteString
        getTagsBytes(int index) {
      return tags_.getByteString(index);
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @param index The index to set the value at.
     * @param value The tags to set.
     * @return This builder for chaining.
     */
    public Builder setTags(
        int index, java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  ensureTagsIsMutable();
      tags_.set(index, value);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @param value The tags to add.
     * @return This builder for chaining.
     */
    public Builder addTags(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  ensureTagsIsMutable();
      tags_.add(value);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @param values The tags to add.
     * @return This builder for chaining.
     */
    public Builder addAllTags(
        java.lang.Iterable<java.lang.String> values) {
      ensureTagsIsMutable();
      com.google.protobuf.AbstractMessageLite.Builder.addAll(
          values, tags_);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearTags() {
      tags_ = com.google.protobuf.LazyStringArrayList.EMPTY;
      bitField0_ = (bitField0_ & ~0x00000001);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Tags for this Xcode version.
     * Example: "default".
     * </pre>
     *
     * <code>repeated string tags = 2;</code>
     * @param value The bytes of the tags to add.
     * @return This builder for chaining.
     */
    public Builder addTagsBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      ensureTagsIsMutable();
      tags_.add(value);
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


    // @@protoc_insertion_point(builder_scope:google.devtools.testing.v1.XcodeVersion)
  }

  // @@protoc_insertion_point(class_scope:google.devtools.testing.v1.XcodeVersion)
  private static final com.google.devtools.testing.v1.XcodeVersion DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.devtools.testing.v1.XcodeVersion();
  }

  public static com.google.devtools.testing.v1.XcodeVersion getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<XcodeVersion>
      PARSER = new com.google.protobuf.AbstractParser<XcodeVersion>() {
    @java.lang.Override
    public XcodeVersion parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new XcodeVersion(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<XcodeVersion> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<XcodeVersion> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.devtools.testing.v1.XcodeVersion getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

