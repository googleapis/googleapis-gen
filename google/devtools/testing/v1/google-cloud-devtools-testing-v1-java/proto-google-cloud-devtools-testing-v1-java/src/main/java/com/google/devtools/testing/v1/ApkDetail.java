// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/testing/v1/application_details.proto

package com.google.devtools.testing.v1;

/**
 * <pre>
 * Android application details based on application manifest and apk archive
 * contents.
 * </pre>
 *
 * Protobuf type {@code google.devtools.testing.v1.ApkDetail}
 */
public final class ApkDetail extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.devtools.testing.v1.ApkDetail)
    ApkDetailOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ApkDetail.newBuilder() to construct.
  private ApkDetail(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ApkDetail() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ApkDetail();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ApkDetail(
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
            com.google.devtools.testing.v1.ApkManifest.Builder subBuilder = null;
            if (apkManifest_ != null) {
              subBuilder = apkManifest_.toBuilder();
            }
            apkManifest_ = input.readMessage(com.google.devtools.testing.v1.ApkManifest.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(apkManifest_);
              apkManifest_ = subBuilder.buildPartial();
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
    return com.google.devtools.testing.v1.ApplicationDetailProto.internal_static_google_devtools_testing_v1_ApkDetail_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.devtools.testing.v1.ApplicationDetailProto.internal_static_google_devtools_testing_v1_ApkDetail_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.devtools.testing.v1.ApkDetail.class, com.google.devtools.testing.v1.ApkDetail.Builder.class);
  }

  public static final int APK_MANIFEST_FIELD_NUMBER = 1;
  private com.google.devtools.testing.v1.ApkManifest apkManifest_;
  /**
   * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
   * @return Whether the apkManifest field is set.
   */
  @java.lang.Override
  public boolean hasApkManifest() {
    return apkManifest_ != null;
  }
  /**
   * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
   * @return The apkManifest.
   */
  @java.lang.Override
  public com.google.devtools.testing.v1.ApkManifest getApkManifest() {
    return apkManifest_ == null ? com.google.devtools.testing.v1.ApkManifest.getDefaultInstance() : apkManifest_;
  }
  /**
   * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
   */
  @java.lang.Override
  public com.google.devtools.testing.v1.ApkManifestOrBuilder getApkManifestOrBuilder() {
    return getApkManifest();
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
    if (apkManifest_ != null) {
      output.writeMessage(1, getApkManifest());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (apkManifest_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getApkManifest());
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
    if (!(obj instanceof com.google.devtools.testing.v1.ApkDetail)) {
      return super.equals(obj);
    }
    com.google.devtools.testing.v1.ApkDetail other = (com.google.devtools.testing.v1.ApkDetail) obj;

    if (hasApkManifest() != other.hasApkManifest()) return false;
    if (hasApkManifest()) {
      if (!getApkManifest()
          .equals(other.getApkManifest())) return false;
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
    if (hasApkManifest()) {
      hash = (37 * hash) + APK_MANIFEST_FIELD_NUMBER;
      hash = (53 * hash) + getApkManifest().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.devtools.testing.v1.ApkDetail parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.ApkDetail parseFrom(
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
  public static Builder newBuilder(com.google.devtools.testing.v1.ApkDetail prototype) {
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
   * Android application details based on application manifest and apk archive
   * contents.
   * </pre>
   *
   * Protobuf type {@code google.devtools.testing.v1.ApkDetail}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.devtools.testing.v1.ApkDetail)
      com.google.devtools.testing.v1.ApkDetailOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.devtools.testing.v1.ApplicationDetailProto.internal_static_google_devtools_testing_v1_ApkDetail_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.devtools.testing.v1.ApplicationDetailProto.internal_static_google_devtools_testing_v1_ApkDetail_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.devtools.testing.v1.ApkDetail.class, com.google.devtools.testing.v1.ApkDetail.Builder.class);
    }

    // Construct using com.google.devtools.testing.v1.ApkDetail.newBuilder()
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
      if (apkManifestBuilder_ == null) {
        apkManifest_ = null;
      } else {
        apkManifest_ = null;
        apkManifestBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.devtools.testing.v1.ApplicationDetailProto.internal_static_google_devtools_testing_v1_ApkDetail_descriptor;
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.ApkDetail getDefaultInstanceForType() {
      return com.google.devtools.testing.v1.ApkDetail.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.ApkDetail build() {
      com.google.devtools.testing.v1.ApkDetail result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.ApkDetail buildPartial() {
      com.google.devtools.testing.v1.ApkDetail result = new com.google.devtools.testing.v1.ApkDetail(this);
      if (apkManifestBuilder_ == null) {
        result.apkManifest_ = apkManifest_;
      } else {
        result.apkManifest_ = apkManifestBuilder_.build();
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
      if (other instanceof com.google.devtools.testing.v1.ApkDetail) {
        return mergeFrom((com.google.devtools.testing.v1.ApkDetail)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.devtools.testing.v1.ApkDetail other) {
      if (other == com.google.devtools.testing.v1.ApkDetail.getDefaultInstance()) return this;
      if (other.hasApkManifest()) {
        mergeApkManifest(other.getApkManifest());
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
      com.google.devtools.testing.v1.ApkDetail parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.devtools.testing.v1.ApkDetail) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.devtools.testing.v1.ApkManifest apkManifest_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.devtools.testing.v1.ApkManifest, com.google.devtools.testing.v1.ApkManifest.Builder, com.google.devtools.testing.v1.ApkManifestOrBuilder> apkManifestBuilder_;
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     * @return Whether the apkManifest field is set.
     */
    public boolean hasApkManifest() {
      return apkManifestBuilder_ != null || apkManifest_ != null;
    }
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     * @return The apkManifest.
     */
    public com.google.devtools.testing.v1.ApkManifest getApkManifest() {
      if (apkManifestBuilder_ == null) {
        return apkManifest_ == null ? com.google.devtools.testing.v1.ApkManifest.getDefaultInstance() : apkManifest_;
      } else {
        return apkManifestBuilder_.getMessage();
      }
    }
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     */
    public Builder setApkManifest(com.google.devtools.testing.v1.ApkManifest value) {
      if (apkManifestBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        apkManifest_ = value;
        onChanged();
      } else {
        apkManifestBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     */
    public Builder setApkManifest(
        com.google.devtools.testing.v1.ApkManifest.Builder builderForValue) {
      if (apkManifestBuilder_ == null) {
        apkManifest_ = builderForValue.build();
        onChanged();
      } else {
        apkManifestBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     */
    public Builder mergeApkManifest(com.google.devtools.testing.v1.ApkManifest value) {
      if (apkManifestBuilder_ == null) {
        if (apkManifest_ != null) {
          apkManifest_ =
            com.google.devtools.testing.v1.ApkManifest.newBuilder(apkManifest_).mergeFrom(value).buildPartial();
        } else {
          apkManifest_ = value;
        }
        onChanged();
      } else {
        apkManifestBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     */
    public Builder clearApkManifest() {
      if (apkManifestBuilder_ == null) {
        apkManifest_ = null;
        onChanged();
      } else {
        apkManifest_ = null;
        apkManifestBuilder_ = null;
      }

      return this;
    }
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     */
    public com.google.devtools.testing.v1.ApkManifest.Builder getApkManifestBuilder() {
      
      onChanged();
      return getApkManifestFieldBuilder().getBuilder();
    }
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     */
    public com.google.devtools.testing.v1.ApkManifestOrBuilder getApkManifestOrBuilder() {
      if (apkManifestBuilder_ != null) {
        return apkManifestBuilder_.getMessageOrBuilder();
      } else {
        return apkManifest_ == null ?
            com.google.devtools.testing.v1.ApkManifest.getDefaultInstance() : apkManifest_;
      }
    }
    /**
     * <code>.google.devtools.testing.v1.ApkManifest apk_manifest = 1;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.devtools.testing.v1.ApkManifest, com.google.devtools.testing.v1.ApkManifest.Builder, com.google.devtools.testing.v1.ApkManifestOrBuilder> 
        getApkManifestFieldBuilder() {
      if (apkManifestBuilder_ == null) {
        apkManifestBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.devtools.testing.v1.ApkManifest, com.google.devtools.testing.v1.ApkManifest.Builder, com.google.devtools.testing.v1.ApkManifestOrBuilder>(
                getApkManifest(),
                getParentForChildren(),
                isClean());
        apkManifest_ = null;
      }
      return apkManifestBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.devtools.testing.v1.ApkDetail)
  }

  // @@protoc_insertion_point(class_scope:google.devtools.testing.v1.ApkDetail)
  private static final com.google.devtools.testing.v1.ApkDetail DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.devtools.testing.v1.ApkDetail();
  }

  public static com.google.devtools.testing.v1.ApkDetail getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ApkDetail>
      PARSER = new com.google.protobuf.AbstractParser<ApkDetail>() {
    @java.lang.Override
    public ApkDetail parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ApkDetail(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ApkDetail> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ApkDetail> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.devtools.testing.v1.ApkDetail getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

