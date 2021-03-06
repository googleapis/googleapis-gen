// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/testing/v1/test_execution.proto

package com.google.devtools.testing.v1;

/**
 * <pre>
 * A single Android device.
 * </pre>
 *
 * Protobuf type {@code google.devtools.testing.v1.AndroidDevice}
 */
public final class AndroidDevice extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.devtools.testing.v1.AndroidDevice)
    AndroidDeviceOrBuilder {
private static final long serialVersionUID = 0L;
  // Use AndroidDevice.newBuilder() to construct.
  private AndroidDevice(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private AndroidDevice() {
    androidModelId_ = "";
    androidVersionId_ = "";
    locale_ = "";
    orientation_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new AndroidDevice();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private AndroidDevice(
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

            androidModelId_ = s;
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            androidVersionId_ = s;
            break;
          }
          case 26: {
            java.lang.String s = input.readStringRequireUtf8();

            locale_ = s;
            break;
          }
          case 34: {
            java.lang.String s = input.readStringRequireUtf8();

            orientation_ = s;
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
    return com.google.devtools.testing.v1.TestExecutionProto.internal_static_google_devtools_testing_v1_AndroidDevice_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.devtools.testing.v1.TestExecutionProto.internal_static_google_devtools_testing_v1_AndroidDevice_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.devtools.testing.v1.AndroidDevice.class, com.google.devtools.testing.v1.AndroidDevice.Builder.class);
  }

  public static final int ANDROID_MODEL_ID_FIELD_NUMBER = 1;
  private volatile java.lang.Object androidModelId_;
  /**
   * <pre>
   * Required. The id of the Android device to be used.
   * Use the TestEnvironmentDiscoveryService to get supported options.
   * </pre>
   *
   * <code>string android_model_id = 1;</code>
   * @return The androidModelId.
   */
  @java.lang.Override
  public java.lang.String getAndroidModelId() {
    java.lang.Object ref = androidModelId_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      androidModelId_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The id of the Android device to be used.
   * Use the TestEnvironmentDiscoveryService to get supported options.
   * </pre>
   *
   * <code>string android_model_id = 1;</code>
   * @return The bytes for androidModelId.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getAndroidModelIdBytes() {
    java.lang.Object ref = androidModelId_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      androidModelId_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int ANDROID_VERSION_ID_FIELD_NUMBER = 2;
  private volatile java.lang.Object androidVersionId_;
  /**
   * <pre>
   * Required. The id of the Android OS version to be used.
   * Use the TestEnvironmentDiscoveryService to get supported options.
   * </pre>
   *
   * <code>string android_version_id = 2;</code>
   * @return The androidVersionId.
   */
  @java.lang.Override
  public java.lang.String getAndroidVersionId() {
    java.lang.Object ref = androidVersionId_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      androidVersionId_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The id of the Android OS version to be used.
   * Use the TestEnvironmentDiscoveryService to get supported options.
   * </pre>
   *
   * <code>string android_version_id = 2;</code>
   * @return The bytes for androidVersionId.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getAndroidVersionIdBytes() {
    java.lang.Object ref = androidVersionId_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      androidVersionId_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int LOCALE_FIELD_NUMBER = 3;
  private volatile java.lang.Object locale_;
  /**
   * <pre>
   * Required. The locale the test device used for testing.
   * Use the TestEnvironmentDiscoveryService to get supported options.
   * </pre>
   *
   * <code>string locale = 3;</code>
   * @return The locale.
   */
  @java.lang.Override
  public java.lang.String getLocale() {
    java.lang.Object ref = locale_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      locale_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The locale the test device used for testing.
   * Use the TestEnvironmentDiscoveryService to get supported options.
   * </pre>
   *
   * <code>string locale = 3;</code>
   * @return The bytes for locale.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getLocaleBytes() {
    java.lang.Object ref = locale_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      locale_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int ORIENTATION_FIELD_NUMBER = 4;
  private volatile java.lang.Object orientation_;
  /**
   * <pre>
   * Required. How the device is oriented during the test.
   * Use the TestEnvironmentDiscoveryService to get supported options.
   * </pre>
   *
   * <code>string orientation = 4;</code>
   * @return The orientation.
   */
  @java.lang.Override
  public java.lang.String getOrientation() {
    java.lang.Object ref = orientation_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      orientation_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. How the device is oriented during the test.
   * Use the TestEnvironmentDiscoveryService to get supported options.
   * </pre>
   *
   * <code>string orientation = 4;</code>
   * @return The bytes for orientation.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getOrientationBytes() {
    java.lang.Object ref = orientation_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      orientation_ = b;
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
    if (!getAndroidModelIdBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, androidModelId_);
    }
    if (!getAndroidVersionIdBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, androidVersionId_);
    }
    if (!getLocaleBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 3, locale_);
    }
    if (!getOrientationBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 4, orientation_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getAndroidModelIdBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, androidModelId_);
    }
    if (!getAndroidVersionIdBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, androidVersionId_);
    }
    if (!getLocaleBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(3, locale_);
    }
    if (!getOrientationBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(4, orientation_);
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
    if (!(obj instanceof com.google.devtools.testing.v1.AndroidDevice)) {
      return super.equals(obj);
    }
    com.google.devtools.testing.v1.AndroidDevice other = (com.google.devtools.testing.v1.AndroidDevice) obj;

    if (!getAndroidModelId()
        .equals(other.getAndroidModelId())) return false;
    if (!getAndroidVersionId()
        .equals(other.getAndroidVersionId())) return false;
    if (!getLocale()
        .equals(other.getLocale())) return false;
    if (!getOrientation()
        .equals(other.getOrientation())) return false;
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
    hash = (37 * hash) + ANDROID_MODEL_ID_FIELD_NUMBER;
    hash = (53 * hash) + getAndroidModelId().hashCode();
    hash = (37 * hash) + ANDROID_VERSION_ID_FIELD_NUMBER;
    hash = (53 * hash) + getAndroidVersionId().hashCode();
    hash = (37 * hash) + LOCALE_FIELD_NUMBER;
    hash = (53 * hash) + getLocale().hashCode();
    hash = (37 * hash) + ORIENTATION_FIELD_NUMBER;
    hash = (53 * hash) + getOrientation().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.testing.v1.AndroidDevice parseFrom(
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
  public static Builder newBuilder(com.google.devtools.testing.v1.AndroidDevice prototype) {
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
   * A single Android device.
   * </pre>
   *
   * Protobuf type {@code google.devtools.testing.v1.AndroidDevice}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.devtools.testing.v1.AndroidDevice)
      com.google.devtools.testing.v1.AndroidDeviceOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.devtools.testing.v1.TestExecutionProto.internal_static_google_devtools_testing_v1_AndroidDevice_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.devtools.testing.v1.TestExecutionProto.internal_static_google_devtools_testing_v1_AndroidDevice_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.devtools.testing.v1.AndroidDevice.class, com.google.devtools.testing.v1.AndroidDevice.Builder.class);
    }

    // Construct using com.google.devtools.testing.v1.AndroidDevice.newBuilder()
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
      androidModelId_ = "";

      androidVersionId_ = "";

      locale_ = "";

      orientation_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.devtools.testing.v1.TestExecutionProto.internal_static_google_devtools_testing_v1_AndroidDevice_descriptor;
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.AndroidDevice getDefaultInstanceForType() {
      return com.google.devtools.testing.v1.AndroidDevice.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.AndroidDevice build() {
      com.google.devtools.testing.v1.AndroidDevice result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.devtools.testing.v1.AndroidDevice buildPartial() {
      com.google.devtools.testing.v1.AndroidDevice result = new com.google.devtools.testing.v1.AndroidDevice(this);
      result.androidModelId_ = androidModelId_;
      result.androidVersionId_ = androidVersionId_;
      result.locale_ = locale_;
      result.orientation_ = orientation_;
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
      if (other instanceof com.google.devtools.testing.v1.AndroidDevice) {
        return mergeFrom((com.google.devtools.testing.v1.AndroidDevice)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.devtools.testing.v1.AndroidDevice other) {
      if (other == com.google.devtools.testing.v1.AndroidDevice.getDefaultInstance()) return this;
      if (!other.getAndroidModelId().isEmpty()) {
        androidModelId_ = other.androidModelId_;
        onChanged();
      }
      if (!other.getAndroidVersionId().isEmpty()) {
        androidVersionId_ = other.androidVersionId_;
        onChanged();
      }
      if (!other.getLocale().isEmpty()) {
        locale_ = other.locale_;
        onChanged();
      }
      if (!other.getOrientation().isEmpty()) {
        orientation_ = other.orientation_;
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
      com.google.devtools.testing.v1.AndroidDevice parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.devtools.testing.v1.AndroidDevice) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object androidModelId_ = "";
    /**
     * <pre>
     * Required. The id of the Android device to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_model_id = 1;</code>
     * @return The androidModelId.
     */
    public java.lang.String getAndroidModelId() {
      java.lang.Object ref = androidModelId_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        androidModelId_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The id of the Android device to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_model_id = 1;</code>
     * @return The bytes for androidModelId.
     */
    public com.google.protobuf.ByteString
        getAndroidModelIdBytes() {
      java.lang.Object ref = androidModelId_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        androidModelId_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The id of the Android device to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_model_id = 1;</code>
     * @param value The androidModelId to set.
     * @return This builder for chaining.
     */
    public Builder setAndroidModelId(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      androidModelId_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The id of the Android device to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_model_id = 1;</code>
     * @return This builder for chaining.
     */
    public Builder clearAndroidModelId() {
      
      androidModelId_ = getDefaultInstance().getAndroidModelId();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The id of the Android device to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_model_id = 1;</code>
     * @param value The bytes for androidModelId to set.
     * @return This builder for chaining.
     */
    public Builder setAndroidModelIdBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      androidModelId_ = value;
      onChanged();
      return this;
    }

    private java.lang.Object androidVersionId_ = "";
    /**
     * <pre>
     * Required. The id of the Android OS version to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_version_id = 2;</code>
     * @return The androidVersionId.
     */
    public java.lang.String getAndroidVersionId() {
      java.lang.Object ref = androidVersionId_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        androidVersionId_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The id of the Android OS version to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_version_id = 2;</code>
     * @return The bytes for androidVersionId.
     */
    public com.google.protobuf.ByteString
        getAndroidVersionIdBytes() {
      java.lang.Object ref = androidVersionId_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        androidVersionId_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The id of the Android OS version to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_version_id = 2;</code>
     * @param value The androidVersionId to set.
     * @return This builder for chaining.
     */
    public Builder setAndroidVersionId(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      androidVersionId_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The id of the Android OS version to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_version_id = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearAndroidVersionId() {
      
      androidVersionId_ = getDefaultInstance().getAndroidVersionId();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The id of the Android OS version to be used.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string android_version_id = 2;</code>
     * @param value The bytes for androidVersionId to set.
     * @return This builder for chaining.
     */
    public Builder setAndroidVersionIdBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      androidVersionId_ = value;
      onChanged();
      return this;
    }

    private java.lang.Object locale_ = "";
    /**
     * <pre>
     * Required. The locale the test device used for testing.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string locale = 3;</code>
     * @return The locale.
     */
    public java.lang.String getLocale() {
      java.lang.Object ref = locale_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        locale_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The locale the test device used for testing.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string locale = 3;</code>
     * @return The bytes for locale.
     */
    public com.google.protobuf.ByteString
        getLocaleBytes() {
      java.lang.Object ref = locale_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        locale_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The locale the test device used for testing.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string locale = 3;</code>
     * @param value The locale to set.
     * @return This builder for chaining.
     */
    public Builder setLocale(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      locale_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The locale the test device used for testing.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string locale = 3;</code>
     * @return This builder for chaining.
     */
    public Builder clearLocale() {
      
      locale_ = getDefaultInstance().getLocale();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The locale the test device used for testing.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string locale = 3;</code>
     * @param value The bytes for locale to set.
     * @return This builder for chaining.
     */
    public Builder setLocaleBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      locale_ = value;
      onChanged();
      return this;
    }

    private java.lang.Object orientation_ = "";
    /**
     * <pre>
     * Required. How the device is oriented during the test.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string orientation = 4;</code>
     * @return The orientation.
     */
    public java.lang.String getOrientation() {
      java.lang.Object ref = orientation_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        orientation_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. How the device is oriented during the test.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string orientation = 4;</code>
     * @return The bytes for orientation.
     */
    public com.google.protobuf.ByteString
        getOrientationBytes() {
      java.lang.Object ref = orientation_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        orientation_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. How the device is oriented during the test.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string orientation = 4;</code>
     * @param value The orientation to set.
     * @return This builder for chaining.
     */
    public Builder setOrientation(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      orientation_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. How the device is oriented during the test.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string orientation = 4;</code>
     * @return This builder for chaining.
     */
    public Builder clearOrientation() {
      
      orientation_ = getDefaultInstance().getOrientation();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. How the device is oriented during the test.
     * Use the TestEnvironmentDiscoveryService to get supported options.
     * </pre>
     *
     * <code>string orientation = 4;</code>
     * @param value The bytes for orientation to set.
     * @return This builder for chaining.
     */
    public Builder setOrientationBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      orientation_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.devtools.testing.v1.AndroidDevice)
  }

  // @@protoc_insertion_point(class_scope:google.devtools.testing.v1.AndroidDevice)
  private static final com.google.devtools.testing.v1.AndroidDevice DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.devtools.testing.v1.AndroidDevice();
  }

  public static com.google.devtools.testing.v1.AndroidDevice getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<AndroidDevice>
      PARSER = new com.google.protobuf.AbstractParser<AndroidDevice>() {
    @java.lang.Override
    public AndroidDevice parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new AndroidDevice(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<AndroidDevice> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<AndroidDevice> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.devtools.testing.v1.AndroidDevice getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

