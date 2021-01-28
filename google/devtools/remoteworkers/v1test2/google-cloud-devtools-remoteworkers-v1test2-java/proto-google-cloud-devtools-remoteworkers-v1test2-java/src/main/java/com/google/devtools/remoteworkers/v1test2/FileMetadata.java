// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/remoteworkers/v1test2/command.proto

package com.google.devtools.remoteworkers.v1test2;

/**
 * <pre>
 * The metadata for a file. Similar to the equivalent message in the Remote
 * Execution API.
 * </pre>
 *
 * Protobuf type {@code google.devtools.remoteworkers.v1test2.FileMetadata}
 */
public final class FileMetadata extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.devtools.remoteworkers.v1test2.FileMetadata)
    FileMetadataOrBuilder {
private static final long serialVersionUID = 0L;
  // Use FileMetadata.newBuilder() to construct.
  private FileMetadata(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private FileMetadata() {
    path_ = "";
    contents_ = com.google.protobuf.ByteString.EMPTY;
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new FileMetadata();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private FileMetadata(
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

            path_ = s;
            break;
          }
          case 18: {
            com.google.devtools.remoteworkers.v1test2.Digest.Builder subBuilder = null;
            if (digest_ != null) {
              subBuilder = digest_.toBuilder();
            }
            digest_ = input.readMessage(com.google.devtools.remoteworkers.v1test2.Digest.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(digest_);
              digest_ = subBuilder.buildPartial();
            }

            break;
          }
          case 26: {

            contents_ = input.readBytes();
            break;
          }
          case 32: {

            isExecutable_ = input.readBool();
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
    return com.google.devtools.remoteworkers.v1test2.RemoteWorkersCommands.internal_static_google_devtools_remoteworkers_v1test2_FileMetadata_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.devtools.remoteworkers.v1test2.RemoteWorkersCommands.internal_static_google_devtools_remoteworkers_v1test2_FileMetadata_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.devtools.remoteworkers.v1test2.FileMetadata.class, com.google.devtools.remoteworkers.v1test2.FileMetadata.Builder.class);
  }

  public static final int PATH_FIELD_NUMBER = 1;
  private volatile java.lang.Object path_;
  /**
   * <pre>
   * The path of this file. If this message is part of the
   * CommandOutputs.outputs fields, the path is relative to the execution root
   * and must correspond to an entry in CommandTask.outputs.files. If this
   * message is part of a Directory message, then the path is relative to the
   * root of that directory. All paths MUST be delimited by forward slashes.
   * </pre>
   *
   * <code>string path = 1;</code>
   * @return The path.
   */
  @java.lang.Override
  public java.lang.String getPath() {
    java.lang.Object ref = path_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      path_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * The path of this file. If this message is part of the
   * CommandOutputs.outputs fields, the path is relative to the execution root
   * and must correspond to an entry in CommandTask.outputs.files. If this
   * message is part of a Directory message, then the path is relative to the
   * root of that directory. All paths MUST be delimited by forward slashes.
   * </pre>
   *
   * <code>string path = 1;</code>
   * @return The bytes for path.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getPathBytes() {
    java.lang.Object ref = path_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      path_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int DIGEST_FIELD_NUMBER = 2;
  private com.google.devtools.remoteworkers.v1test2.Digest digest_;
  /**
   * <pre>
   * A pointer to the contents of the file. The method by which a client
   * retrieves the contents from a CAS system is not defined here.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
   * @return Whether the digest field is set.
   */
  @java.lang.Override
  public boolean hasDigest() {
    return digest_ != null;
  }
  /**
   * <pre>
   * A pointer to the contents of the file. The method by which a client
   * retrieves the contents from a CAS system is not defined here.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
   * @return The digest.
   */
  @java.lang.Override
  public com.google.devtools.remoteworkers.v1test2.Digest getDigest() {
    return digest_ == null ? com.google.devtools.remoteworkers.v1test2.Digest.getDefaultInstance() : digest_;
  }
  /**
   * <pre>
   * A pointer to the contents of the file. The method by which a client
   * retrieves the contents from a CAS system is not defined here.
   * </pre>
   *
   * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
   */
  @java.lang.Override
  public com.google.devtools.remoteworkers.v1test2.DigestOrBuilder getDigestOrBuilder() {
    return getDigest();
  }

  public static final int CONTENTS_FIELD_NUMBER = 3;
  private com.google.protobuf.ByteString contents_;
  /**
   * <pre>
   * If the file is small enough, its contents may also or alternatively be
   * listed here.
   * </pre>
   *
   * <code>bytes contents = 3;</code>
   * @return The contents.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString getContents() {
    return contents_;
  }

  public static final int IS_EXECUTABLE_FIELD_NUMBER = 4;
  private boolean isExecutable_;
  /**
   * <pre>
   * Properties of the file
   * </pre>
   *
   * <code>bool is_executable = 4;</code>
   * @return The isExecutable.
   */
  @java.lang.Override
  public boolean getIsExecutable() {
    return isExecutable_;
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
    if (!getPathBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, path_);
    }
    if (digest_ != null) {
      output.writeMessage(2, getDigest());
    }
    if (!contents_.isEmpty()) {
      output.writeBytes(3, contents_);
    }
    if (isExecutable_ != false) {
      output.writeBool(4, isExecutable_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getPathBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, path_);
    }
    if (digest_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, getDigest());
    }
    if (!contents_.isEmpty()) {
      size += com.google.protobuf.CodedOutputStream
        .computeBytesSize(3, contents_);
    }
    if (isExecutable_ != false) {
      size += com.google.protobuf.CodedOutputStream
        .computeBoolSize(4, isExecutable_);
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
    if (!(obj instanceof com.google.devtools.remoteworkers.v1test2.FileMetadata)) {
      return super.equals(obj);
    }
    com.google.devtools.remoteworkers.v1test2.FileMetadata other = (com.google.devtools.remoteworkers.v1test2.FileMetadata) obj;

    if (!getPath()
        .equals(other.getPath())) return false;
    if (hasDigest() != other.hasDigest()) return false;
    if (hasDigest()) {
      if (!getDigest()
          .equals(other.getDigest())) return false;
    }
    if (!getContents()
        .equals(other.getContents())) return false;
    if (getIsExecutable()
        != other.getIsExecutable()) return false;
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
    hash = (37 * hash) + PATH_FIELD_NUMBER;
    hash = (53 * hash) + getPath().hashCode();
    if (hasDigest()) {
      hash = (37 * hash) + DIGEST_FIELD_NUMBER;
      hash = (53 * hash) + getDigest().hashCode();
    }
    hash = (37 * hash) + CONTENTS_FIELD_NUMBER;
    hash = (53 * hash) + getContents().hashCode();
    hash = (37 * hash) + IS_EXECUTABLE_FIELD_NUMBER;
    hash = (53 * hash) + com.google.protobuf.Internal.hashBoolean(
        getIsExecutable());
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.remoteworkers.v1test2.FileMetadata parseFrom(
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
  public static Builder newBuilder(com.google.devtools.remoteworkers.v1test2.FileMetadata prototype) {
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
   * The metadata for a file. Similar to the equivalent message in the Remote
   * Execution API.
   * </pre>
   *
   * Protobuf type {@code google.devtools.remoteworkers.v1test2.FileMetadata}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.devtools.remoteworkers.v1test2.FileMetadata)
      com.google.devtools.remoteworkers.v1test2.FileMetadataOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.devtools.remoteworkers.v1test2.RemoteWorkersCommands.internal_static_google_devtools_remoteworkers_v1test2_FileMetadata_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.devtools.remoteworkers.v1test2.RemoteWorkersCommands.internal_static_google_devtools_remoteworkers_v1test2_FileMetadata_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.devtools.remoteworkers.v1test2.FileMetadata.class, com.google.devtools.remoteworkers.v1test2.FileMetadata.Builder.class);
    }

    // Construct using com.google.devtools.remoteworkers.v1test2.FileMetadata.newBuilder()
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
      path_ = "";

      if (digestBuilder_ == null) {
        digest_ = null;
      } else {
        digest_ = null;
        digestBuilder_ = null;
      }
      contents_ = com.google.protobuf.ByteString.EMPTY;

      isExecutable_ = false;

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.devtools.remoteworkers.v1test2.RemoteWorkersCommands.internal_static_google_devtools_remoteworkers_v1test2_FileMetadata_descriptor;
    }

    @java.lang.Override
    public com.google.devtools.remoteworkers.v1test2.FileMetadata getDefaultInstanceForType() {
      return com.google.devtools.remoteworkers.v1test2.FileMetadata.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.devtools.remoteworkers.v1test2.FileMetadata build() {
      com.google.devtools.remoteworkers.v1test2.FileMetadata result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.devtools.remoteworkers.v1test2.FileMetadata buildPartial() {
      com.google.devtools.remoteworkers.v1test2.FileMetadata result = new com.google.devtools.remoteworkers.v1test2.FileMetadata(this);
      result.path_ = path_;
      if (digestBuilder_ == null) {
        result.digest_ = digest_;
      } else {
        result.digest_ = digestBuilder_.build();
      }
      result.contents_ = contents_;
      result.isExecutable_ = isExecutable_;
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
      if (other instanceof com.google.devtools.remoteworkers.v1test2.FileMetadata) {
        return mergeFrom((com.google.devtools.remoteworkers.v1test2.FileMetadata)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.devtools.remoteworkers.v1test2.FileMetadata other) {
      if (other == com.google.devtools.remoteworkers.v1test2.FileMetadata.getDefaultInstance()) return this;
      if (!other.getPath().isEmpty()) {
        path_ = other.path_;
        onChanged();
      }
      if (other.hasDigest()) {
        mergeDigest(other.getDigest());
      }
      if (other.getContents() != com.google.protobuf.ByteString.EMPTY) {
        setContents(other.getContents());
      }
      if (other.getIsExecutable() != false) {
        setIsExecutable(other.getIsExecutable());
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
      com.google.devtools.remoteworkers.v1test2.FileMetadata parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.devtools.remoteworkers.v1test2.FileMetadata) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object path_ = "";
    /**
     * <pre>
     * The path of this file. If this message is part of the
     * CommandOutputs.outputs fields, the path is relative to the execution root
     * and must correspond to an entry in CommandTask.outputs.files. If this
     * message is part of a Directory message, then the path is relative to the
     * root of that directory. All paths MUST be delimited by forward slashes.
     * </pre>
     *
     * <code>string path = 1;</code>
     * @return The path.
     */
    public java.lang.String getPath() {
      java.lang.Object ref = path_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        path_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * The path of this file. If this message is part of the
     * CommandOutputs.outputs fields, the path is relative to the execution root
     * and must correspond to an entry in CommandTask.outputs.files. If this
     * message is part of a Directory message, then the path is relative to the
     * root of that directory. All paths MUST be delimited by forward slashes.
     * </pre>
     *
     * <code>string path = 1;</code>
     * @return The bytes for path.
     */
    public com.google.protobuf.ByteString
        getPathBytes() {
      java.lang.Object ref = path_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        path_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * The path of this file. If this message is part of the
     * CommandOutputs.outputs fields, the path is relative to the execution root
     * and must correspond to an entry in CommandTask.outputs.files. If this
     * message is part of a Directory message, then the path is relative to the
     * root of that directory. All paths MUST be delimited by forward slashes.
     * </pre>
     *
     * <code>string path = 1;</code>
     * @param value The path to set.
     * @return This builder for chaining.
     */
    public Builder setPath(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      path_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The path of this file. If this message is part of the
     * CommandOutputs.outputs fields, the path is relative to the execution root
     * and must correspond to an entry in CommandTask.outputs.files. If this
     * message is part of a Directory message, then the path is relative to the
     * root of that directory. All paths MUST be delimited by forward slashes.
     * </pre>
     *
     * <code>string path = 1;</code>
     * @return This builder for chaining.
     */
    public Builder clearPath() {
      
      path_ = getDefaultInstance().getPath();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The path of this file. If this message is part of the
     * CommandOutputs.outputs fields, the path is relative to the execution root
     * and must correspond to an entry in CommandTask.outputs.files. If this
     * message is part of a Directory message, then the path is relative to the
     * root of that directory. All paths MUST be delimited by forward slashes.
     * </pre>
     *
     * <code>string path = 1;</code>
     * @param value The bytes for path to set.
     * @return This builder for chaining.
     */
    public Builder setPathBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      path_ = value;
      onChanged();
      return this;
    }

    private com.google.devtools.remoteworkers.v1test2.Digest digest_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.devtools.remoteworkers.v1test2.Digest, com.google.devtools.remoteworkers.v1test2.Digest.Builder, com.google.devtools.remoteworkers.v1test2.DigestOrBuilder> digestBuilder_;
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     * @return Whether the digest field is set.
     */
    public boolean hasDigest() {
      return digestBuilder_ != null || digest_ != null;
    }
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     * @return The digest.
     */
    public com.google.devtools.remoteworkers.v1test2.Digest getDigest() {
      if (digestBuilder_ == null) {
        return digest_ == null ? com.google.devtools.remoteworkers.v1test2.Digest.getDefaultInstance() : digest_;
      } else {
        return digestBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     */
    public Builder setDigest(com.google.devtools.remoteworkers.v1test2.Digest value) {
      if (digestBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        digest_ = value;
        onChanged();
      } else {
        digestBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     */
    public Builder setDigest(
        com.google.devtools.remoteworkers.v1test2.Digest.Builder builderForValue) {
      if (digestBuilder_ == null) {
        digest_ = builderForValue.build();
        onChanged();
      } else {
        digestBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     */
    public Builder mergeDigest(com.google.devtools.remoteworkers.v1test2.Digest value) {
      if (digestBuilder_ == null) {
        if (digest_ != null) {
          digest_ =
            com.google.devtools.remoteworkers.v1test2.Digest.newBuilder(digest_).mergeFrom(value).buildPartial();
        } else {
          digest_ = value;
        }
        onChanged();
      } else {
        digestBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     */
    public Builder clearDigest() {
      if (digestBuilder_ == null) {
        digest_ = null;
        onChanged();
      } else {
        digest_ = null;
        digestBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     */
    public com.google.devtools.remoteworkers.v1test2.Digest.Builder getDigestBuilder() {
      
      onChanged();
      return getDigestFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     */
    public com.google.devtools.remoteworkers.v1test2.DigestOrBuilder getDigestOrBuilder() {
      if (digestBuilder_ != null) {
        return digestBuilder_.getMessageOrBuilder();
      } else {
        return digest_ == null ?
            com.google.devtools.remoteworkers.v1test2.Digest.getDefaultInstance() : digest_;
      }
    }
    /**
     * <pre>
     * A pointer to the contents of the file. The method by which a client
     * retrieves the contents from a CAS system is not defined here.
     * </pre>
     *
     * <code>.google.devtools.remoteworkers.v1test2.Digest digest = 2;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.devtools.remoteworkers.v1test2.Digest, com.google.devtools.remoteworkers.v1test2.Digest.Builder, com.google.devtools.remoteworkers.v1test2.DigestOrBuilder> 
        getDigestFieldBuilder() {
      if (digestBuilder_ == null) {
        digestBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.devtools.remoteworkers.v1test2.Digest, com.google.devtools.remoteworkers.v1test2.Digest.Builder, com.google.devtools.remoteworkers.v1test2.DigestOrBuilder>(
                getDigest(),
                getParentForChildren(),
                isClean());
        digest_ = null;
      }
      return digestBuilder_;
    }

    private com.google.protobuf.ByteString contents_ = com.google.protobuf.ByteString.EMPTY;
    /**
     * <pre>
     * If the file is small enough, its contents may also or alternatively be
     * listed here.
     * </pre>
     *
     * <code>bytes contents = 3;</code>
     * @return The contents.
     */
    @java.lang.Override
    public com.google.protobuf.ByteString getContents() {
      return contents_;
    }
    /**
     * <pre>
     * If the file is small enough, its contents may also or alternatively be
     * listed here.
     * </pre>
     *
     * <code>bytes contents = 3;</code>
     * @param value The contents to set.
     * @return This builder for chaining.
     */
    public Builder setContents(com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      contents_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If the file is small enough, its contents may also or alternatively be
     * listed here.
     * </pre>
     *
     * <code>bytes contents = 3;</code>
     * @return This builder for chaining.
     */
    public Builder clearContents() {
      
      contents_ = getDefaultInstance().getContents();
      onChanged();
      return this;
    }

    private boolean isExecutable_ ;
    /**
     * <pre>
     * Properties of the file
     * </pre>
     *
     * <code>bool is_executable = 4;</code>
     * @return The isExecutable.
     */
    @java.lang.Override
    public boolean getIsExecutable() {
      return isExecutable_;
    }
    /**
     * <pre>
     * Properties of the file
     * </pre>
     *
     * <code>bool is_executable = 4;</code>
     * @param value The isExecutable to set.
     * @return This builder for chaining.
     */
    public Builder setIsExecutable(boolean value) {
      
      isExecutable_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Properties of the file
     * </pre>
     *
     * <code>bool is_executable = 4;</code>
     * @return This builder for chaining.
     */
    public Builder clearIsExecutable() {
      
      isExecutable_ = false;
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


    // @@protoc_insertion_point(builder_scope:google.devtools.remoteworkers.v1test2.FileMetadata)
  }

  // @@protoc_insertion_point(class_scope:google.devtools.remoteworkers.v1test2.FileMetadata)
  private static final com.google.devtools.remoteworkers.v1test2.FileMetadata DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.devtools.remoteworkers.v1test2.FileMetadata();
  }

  public static com.google.devtools.remoteworkers.v1test2.FileMetadata getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<FileMetadata>
      PARSER = new com.google.protobuf.AbstractParser<FileMetadata>() {
    @java.lang.Override
    public FileMetadata parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new FileMetadata(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<FileMetadata> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<FileMetadata> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.devtools.remoteworkers.v1test2.FileMetadata getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

