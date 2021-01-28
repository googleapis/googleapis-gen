// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

package com.google.recaptchaenterprise.v1;

/**
 * <pre>
 * Settings specific to keys that can be used by Android apps.
 * </pre>
 *
 * Protobuf type {@code google.cloud.recaptchaenterprise.v1.AndroidKeySettings}
 */
public final class AndroidKeySettings extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.recaptchaenterprise.v1.AndroidKeySettings)
    AndroidKeySettingsOrBuilder {
private static final long serialVersionUID = 0L;
  // Use AndroidKeySettings.newBuilder() to construct.
  private AndroidKeySettings(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private AndroidKeySettings() {
    allowedPackageNames_ = com.google.protobuf.LazyStringArrayList.EMPTY;
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new AndroidKeySettings();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private AndroidKeySettings(
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
            if (!((mutable_bitField0_ & 0x00000001) != 0)) {
              allowedPackageNames_ = new com.google.protobuf.LazyStringArrayList();
              mutable_bitField0_ |= 0x00000001;
            }
            allowedPackageNames_.add(s);
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
        allowedPackageNames_ = allowedPackageNames_.getUnmodifiableView();
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.recaptchaenterprise.v1.RecaptchaEnterpriseProto.internal_static_google_cloud_recaptchaenterprise_v1_AndroidKeySettings_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.recaptchaenterprise.v1.RecaptchaEnterpriseProto.internal_static_google_cloud_recaptchaenterprise_v1_AndroidKeySettings_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.recaptchaenterprise.v1.AndroidKeySettings.class, com.google.recaptchaenterprise.v1.AndroidKeySettings.Builder.class);
  }

  public static final int ALLOWED_PACKAGE_NAMES_FIELD_NUMBER = 1;
  private com.google.protobuf.LazyStringList allowedPackageNames_;
  /**
   * <pre>
   * Android package names of apps allowed to use the key.
   * Example: 'com.companyname.appname'
   * </pre>
   *
   * <code>repeated string allowed_package_names = 1;</code>
   * @return A list containing the allowedPackageNames.
   */
  public com.google.protobuf.ProtocolStringList
      getAllowedPackageNamesList() {
    return allowedPackageNames_;
  }
  /**
   * <pre>
   * Android package names of apps allowed to use the key.
   * Example: 'com.companyname.appname'
   * </pre>
   *
   * <code>repeated string allowed_package_names = 1;</code>
   * @return The count of allowedPackageNames.
   */
  public int getAllowedPackageNamesCount() {
    return allowedPackageNames_.size();
  }
  /**
   * <pre>
   * Android package names of apps allowed to use the key.
   * Example: 'com.companyname.appname'
   * </pre>
   *
   * <code>repeated string allowed_package_names = 1;</code>
   * @param index The index of the element to return.
   * @return The allowedPackageNames at the given index.
   */
  public java.lang.String getAllowedPackageNames(int index) {
    return allowedPackageNames_.get(index);
  }
  /**
   * <pre>
   * Android package names of apps allowed to use the key.
   * Example: 'com.companyname.appname'
   * </pre>
   *
   * <code>repeated string allowed_package_names = 1;</code>
   * @param index The index of the value to return.
   * @return The bytes of the allowedPackageNames at the given index.
   */
  public com.google.protobuf.ByteString
      getAllowedPackageNamesBytes(int index) {
    return allowedPackageNames_.getByteString(index);
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
    for (int i = 0; i < allowedPackageNames_.size(); i++) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, allowedPackageNames_.getRaw(i));
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    {
      int dataSize = 0;
      for (int i = 0; i < allowedPackageNames_.size(); i++) {
        dataSize += computeStringSizeNoTag(allowedPackageNames_.getRaw(i));
      }
      size += dataSize;
      size += 1 * getAllowedPackageNamesList().size();
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
    if (!(obj instanceof com.google.recaptchaenterprise.v1.AndroidKeySettings)) {
      return super.equals(obj);
    }
    com.google.recaptchaenterprise.v1.AndroidKeySettings other = (com.google.recaptchaenterprise.v1.AndroidKeySettings) obj;

    if (!getAllowedPackageNamesList()
        .equals(other.getAllowedPackageNamesList())) return false;
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
    if (getAllowedPackageNamesCount() > 0) {
      hash = (37 * hash) + ALLOWED_PACKAGE_NAMES_FIELD_NUMBER;
      hash = (53 * hash) + getAllowedPackageNamesList().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.recaptchaenterprise.v1.AndroidKeySettings parseFrom(
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
  public static Builder newBuilder(com.google.recaptchaenterprise.v1.AndroidKeySettings prototype) {
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
   * Settings specific to keys that can be used by Android apps.
   * </pre>
   *
   * Protobuf type {@code google.cloud.recaptchaenterprise.v1.AndroidKeySettings}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.recaptchaenterprise.v1.AndroidKeySettings)
      com.google.recaptchaenterprise.v1.AndroidKeySettingsOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.recaptchaenterprise.v1.RecaptchaEnterpriseProto.internal_static_google_cloud_recaptchaenterprise_v1_AndroidKeySettings_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.recaptchaenterprise.v1.RecaptchaEnterpriseProto.internal_static_google_cloud_recaptchaenterprise_v1_AndroidKeySettings_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.recaptchaenterprise.v1.AndroidKeySettings.class, com.google.recaptchaenterprise.v1.AndroidKeySettings.Builder.class);
    }

    // Construct using com.google.recaptchaenterprise.v1.AndroidKeySettings.newBuilder()
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
      allowedPackageNames_ = com.google.protobuf.LazyStringArrayList.EMPTY;
      bitField0_ = (bitField0_ & ~0x00000001);
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.recaptchaenterprise.v1.RecaptchaEnterpriseProto.internal_static_google_cloud_recaptchaenterprise_v1_AndroidKeySettings_descriptor;
    }

    @java.lang.Override
    public com.google.recaptchaenterprise.v1.AndroidKeySettings getDefaultInstanceForType() {
      return com.google.recaptchaenterprise.v1.AndroidKeySettings.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.recaptchaenterprise.v1.AndroidKeySettings build() {
      com.google.recaptchaenterprise.v1.AndroidKeySettings result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.recaptchaenterprise.v1.AndroidKeySettings buildPartial() {
      com.google.recaptchaenterprise.v1.AndroidKeySettings result = new com.google.recaptchaenterprise.v1.AndroidKeySettings(this);
      int from_bitField0_ = bitField0_;
      if (((bitField0_ & 0x00000001) != 0)) {
        allowedPackageNames_ = allowedPackageNames_.getUnmodifiableView();
        bitField0_ = (bitField0_ & ~0x00000001);
      }
      result.allowedPackageNames_ = allowedPackageNames_;
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
      if (other instanceof com.google.recaptchaenterprise.v1.AndroidKeySettings) {
        return mergeFrom((com.google.recaptchaenterprise.v1.AndroidKeySettings)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.recaptchaenterprise.v1.AndroidKeySettings other) {
      if (other == com.google.recaptchaenterprise.v1.AndroidKeySettings.getDefaultInstance()) return this;
      if (!other.allowedPackageNames_.isEmpty()) {
        if (allowedPackageNames_.isEmpty()) {
          allowedPackageNames_ = other.allowedPackageNames_;
          bitField0_ = (bitField0_ & ~0x00000001);
        } else {
          ensureAllowedPackageNamesIsMutable();
          allowedPackageNames_.addAll(other.allowedPackageNames_);
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
      com.google.recaptchaenterprise.v1.AndroidKeySettings parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.recaptchaenterprise.v1.AndroidKeySettings) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private com.google.protobuf.LazyStringList allowedPackageNames_ = com.google.protobuf.LazyStringArrayList.EMPTY;
    private void ensureAllowedPackageNamesIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        allowedPackageNames_ = new com.google.protobuf.LazyStringArrayList(allowedPackageNames_);
        bitField0_ |= 0x00000001;
       }
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @return A list containing the allowedPackageNames.
     */
    public com.google.protobuf.ProtocolStringList
        getAllowedPackageNamesList() {
      return allowedPackageNames_.getUnmodifiableView();
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @return The count of allowedPackageNames.
     */
    public int getAllowedPackageNamesCount() {
      return allowedPackageNames_.size();
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @param index The index of the element to return.
     * @return The allowedPackageNames at the given index.
     */
    public java.lang.String getAllowedPackageNames(int index) {
      return allowedPackageNames_.get(index);
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @param index The index of the value to return.
     * @return The bytes of the allowedPackageNames at the given index.
     */
    public com.google.protobuf.ByteString
        getAllowedPackageNamesBytes(int index) {
      return allowedPackageNames_.getByteString(index);
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @param index The index to set the value at.
     * @param value The allowedPackageNames to set.
     * @return This builder for chaining.
     */
    public Builder setAllowedPackageNames(
        int index, java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  ensureAllowedPackageNamesIsMutable();
      allowedPackageNames_.set(index, value);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @param value The allowedPackageNames to add.
     * @return This builder for chaining.
     */
    public Builder addAllowedPackageNames(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  ensureAllowedPackageNamesIsMutable();
      allowedPackageNames_.add(value);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @param values The allowedPackageNames to add.
     * @return This builder for chaining.
     */
    public Builder addAllAllowedPackageNames(
        java.lang.Iterable<java.lang.String> values) {
      ensureAllowedPackageNamesIsMutable();
      com.google.protobuf.AbstractMessageLite.Builder.addAll(
          values, allowedPackageNames_);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @return This builder for chaining.
     */
    public Builder clearAllowedPackageNames() {
      allowedPackageNames_ = com.google.protobuf.LazyStringArrayList.EMPTY;
      bitField0_ = (bitField0_ & ~0x00000001);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Android package names of apps allowed to use the key.
     * Example: 'com.companyname.appname'
     * </pre>
     *
     * <code>repeated string allowed_package_names = 1;</code>
     * @param value The bytes of the allowedPackageNames to add.
     * @return This builder for chaining.
     */
    public Builder addAllowedPackageNamesBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      ensureAllowedPackageNamesIsMutable();
      allowedPackageNames_.add(value);
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


    // @@protoc_insertion_point(builder_scope:google.cloud.recaptchaenterprise.v1.AndroidKeySettings)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.recaptchaenterprise.v1.AndroidKeySettings)
  private static final com.google.recaptchaenterprise.v1.AndroidKeySettings DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.recaptchaenterprise.v1.AndroidKeySettings();
  }

  public static com.google.recaptchaenterprise.v1.AndroidKeySettings getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<AndroidKeySettings>
      PARSER = new com.google.protobuf.AbstractParser<AndroidKeySettings>() {
    @java.lang.Override
    public AndroidKeySettings parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new AndroidKeySettings(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<AndroidKeySettings> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<AndroidKeySettings> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.recaptchaenterprise.v1.AndroidKeySettings getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

