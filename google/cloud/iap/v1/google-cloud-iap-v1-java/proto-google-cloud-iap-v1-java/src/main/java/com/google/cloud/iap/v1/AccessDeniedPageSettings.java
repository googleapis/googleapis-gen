// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/iap/v1/service.proto

package com.google.cloud.iap.v1;

/**
 * <pre>
 * Custom content configuration for access denied page.
 * IAP allows customers to define a custom URI to use as the error page when
 * access is denied to users. If IAP prevents access to this page, the default
 * IAP error page will be displayed instead.
 * </pre>
 *
 * Protobuf type {@code google.cloud.iap.v1.AccessDeniedPageSettings}
 */
public final class AccessDeniedPageSettings extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.iap.v1.AccessDeniedPageSettings)
    AccessDeniedPageSettingsOrBuilder {
private static final long serialVersionUID = 0L;
  // Use AccessDeniedPageSettings.newBuilder() to construct.
  private AccessDeniedPageSettings(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private AccessDeniedPageSettings() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new AccessDeniedPageSettings();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private AccessDeniedPageSettings(
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
            com.google.protobuf.StringValue.Builder subBuilder = null;
            if (accessDeniedPageUri_ != null) {
              subBuilder = accessDeniedPageUri_.toBuilder();
            }
            accessDeniedPageUri_ = input.readMessage(com.google.protobuf.StringValue.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(accessDeniedPageUri_);
              accessDeniedPageUri_ = subBuilder.buildPartial();
            }

            break;
          }
          case 18: {
            com.google.protobuf.BoolValue.Builder subBuilder = null;
            if (generateTroubleshootingUri_ != null) {
              subBuilder = generateTroubleshootingUri_.toBuilder();
            }
            generateTroubleshootingUri_ = input.readMessage(com.google.protobuf.BoolValue.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(generateTroubleshootingUri_);
              generateTroubleshootingUri_ = subBuilder.buildPartial();
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
    return com.google.cloud.iap.v1.Service.internal_static_google_cloud_iap_v1_AccessDeniedPageSettings_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.iap.v1.Service.internal_static_google_cloud_iap_v1_AccessDeniedPageSettings_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.iap.v1.AccessDeniedPageSettings.class, com.google.cloud.iap.v1.AccessDeniedPageSettings.Builder.class);
  }

  public static final int ACCESS_DENIED_PAGE_URI_FIELD_NUMBER = 1;
  private com.google.protobuf.StringValue accessDeniedPageUri_;
  /**
   * <pre>
   * The URI to be redirected to when access is denied.
   * </pre>
   *
   * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
   * @return Whether the accessDeniedPageUri field is set.
   */
  @java.lang.Override
  public boolean hasAccessDeniedPageUri() {
    return accessDeniedPageUri_ != null;
  }
  /**
   * <pre>
   * The URI to be redirected to when access is denied.
   * </pre>
   *
   * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
   * @return The accessDeniedPageUri.
   */
  @java.lang.Override
  public com.google.protobuf.StringValue getAccessDeniedPageUri() {
    return accessDeniedPageUri_ == null ? com.google.protobuf.StringValue.getDefaultInstance() : accessDeniedPageUri_;
  }
  /**
   * <pre>
   * The URI to be redirected to when access is denied.
   * </pre>
   *
   * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
   */
  @java.lang.Override
  public com.google.protobuf.StringValueOrBuilder getAccessDeniedPageUriOrBuilder() {
    return getAccessDeniedPageUri();
  }

  public static final int GENERATE_TROUBLESHOOTING_URI_FIELD_NUMBER = 2;
  private com.google.protobuf.BoolValue generateTroubleshootingUri_;
  /**
   * <pre>
   * Whether to generate a troubleshooting URL on access denied events to this
   * application.
   * </pre>
   *
   * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
   * @return Whether the generateTroubleshootingUri field is set.
   */
  @java.lang.Override
  public boolean hasGenerateTroubleshootingUri() {
    return generateTroubleshootingUri_ != null;
  }
  /**
   * <pre>
   * Whether to generate a troubleshooting URL on access denied events to this
   * application.
   * </pre>
   *
   * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
   * @return The generateTroubleshootingUri.
   */
  @java.lang.Override
  public com.google.protobuf.BoolValue getGenerateTroubleshootingUri() {
    return generateTroubleshootingUri_ == null ? com.google.protobuf.BoolValue.getDefaultInstance() : generateTroubleshootingUri_;
  }
  /**
   * <pre>
   * Whether to generate a troubleshooting URL on access denied events to this
   * application.
   * </pre>
   *
   * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
   */
  @java.lang.Override
  public com.google.protobuf.BoolValueOrBuilder getGenerateTroubleshootingUriOrBuilder() {
    return getGenerateTroubleshootingUri();
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
    if (accessDeniedPageUri_ != null) {
      output.writeMessage(1, getAccessDeniedPageUri());
    }
    if (generateTroubleshootingUri_ != null) {
      output.writeMessage(2, getGenerateTroubleshootingUri());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (accessDeniedPageUri_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getAccessDeniedPageUri());
    }
    if (generateTroubleshootingUri_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, getGenerateTroubleshootingUri());
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
    if (!(obj instanceof com.google.cloud.iap.v1.AccessDeniedPageSettings)) {
      return super.equals(obj);
    }
    com.google.cloud.iap.v1.AccessDeniedPageSettings other = (com.google.cloud.iap.v1.AccessDeniedPageSettings) obj;

    if (hasAccessDeniedPageUri() != other.hasAccessDeniedPageUri()) return false;
    if (hasAccessDeniedPageUri()) {
      if (!getAccessDeniedPageUri()
          .equals(other.getAccessDeniedPageUri())) return false;
    }
    if (hasGenerateTroubleshootingUri() != other.hasGenerateTroubleshootingUri()) return false;
    if (hasGenerateTroubleshootingUri()) {
      if (!getGenerateTroubleshootingUri()
          .equals(other.getGenerateTroubleshootingUri())) return false;
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
    if (hasAccessDeniedPageUri()) {
      hash = (37 * hash) + ACCESS_DENIED_PAGE_URI_FIELD_NUMBER;
      hash = (53 * hash) + getAccessDeniedPageUri().hashCode();
    }
    if (hasGenerateTroubleshootingUri()) {
      hash = (37 * hash) + GENERATE_TROUBLESHOOTING_URI_FIELD_NUMBER;
      hash = (53 * hash) + getGenerateTroubleshootingUri().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.iap.v1.AccessDeniedPageSettings parseFrom(
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
  public static Builder newBuilder(com.google.cloud.iap.v1.AccessDeniedPageSettings prototype) {
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
   * Custom content configuration for access denied page.
   * IAP allows customers to define a custom URI to use as the error page when
   * access is denied to users. If IAP prevents access to this page, the default
   * IAP error page will be displayed instead.
   * </pre>
   *
   * Protobuf type {@code google.cloud.iap.v1.AccessDeniedPageSettings}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.iap.v1.AccessDeniedPageSettings)
      com.google.cloud.iap.v1.AccessDeniedPageSettingsOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.iap.v1.Service.internal_static_google_cloud_iap_v1_AccessDeniedPageSettings_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.iap.v1.Service.internal_static_google_cloud_iap_v1_AccessDeniedPageSettings_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.iap.v1.AccessDeniedPageSettings.class, com.google.cloud.iap.v1.AccessDeniedPageSettings.Builder.class);
    }

    // Construct using com.google.cloud.iap.v1.AccessDeniedPageSettings.newBuilder()
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
      if (accessDeniedPageUriBuilder_ == null) {
        accessDeniedPageUri_ = null;
      } else {
        accessDeniedPageUri_ = null;
        accessDeniedPageUriBuilder_ = null;
      }
      if (generateTroubleshootingUriBuilder_ == null) {
        generateTroubleshootingUri_ = null;
      } else {
        generateTroubleshootingUri_ = null;
        generateTroubleshootingUriBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.iap.v1.Service.internal_static_google_cloud_iap_v1_AccessDeniedPageSettings_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.iap.v1.AccessDeniedPageSettings getDefaultInstanceForType() {
      return com.google.cloud.iap.v1.AccessDeniedPageSettings.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.iap.v1.AccessDeniedPageSettings build() {
      com.google.cloud.iap.v1.AccessDeniedPageSettings result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.iap.v1.AccessDeniedPageSettings buildPartial() {
      com.google.cloud.iap.v1.AccessDeniedPageSettings result = new com.google.cloud.iap.v1.AccessDeniedPageSettings(this);
      if (accessDeniedPageUriBuilder_ == null) {
        result.accessDeniedPageUri_ = accessDeniedPageUri_;
      } else {
        result.accessDeniedPageUri_ = accessDeniedPageUriBuilder_.build();
      }
      if (generateTroubleshootingUriBuilder_ == null) {
        result.generateTroubleshootingUri_ = generateTroubleshootingUri_;
      } else {
        result.generateTroubleshootingUri_ = generateTroubleshootingUriBuilder_.build();
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
      if (other instanceof com.google.cloud.iap.v1.AccessDeniedPageSettings) {
        return mergeFrom((com.google.cloud.iap.v1.AccessDeniedPageSettings)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.iap.v1.AccessDeniedPageSettings other) {
      if (other == com.google.cloud.iap.v1.AccessDeniedPageSettings.getDefaultInstance()) return this;
      if (other.hasAccessDeniedPageUri()) {
        mergeAccessDeniedPageUri(other.getAccessDeniedPageUri());
      }
      if (other.hasGenerateTroubleshootingUri()) {
        mergeGenerateTroubleshootingUri(other.getGenerateTroubleshootingUri());
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
      com.google.cloud.iap.v1.AccessDeniedPageSettings parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.iap.v1.AccessDeniedPageSettings) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.protobuf.StringValue accessDeniedPageUri_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.StringValue, com.google.protobuf.StringValue.Builder, com.google.protobuf.StringValueOrBuilder> accessDeniedPageUriBuilder_;
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     * @return Whether the accessDeniedPageUri field is set.
     */
    public boolean hasAccessDeniedPageUri() {
      return accessDeniedPageUriBuilder_ != null || accessDeniedPageUri_ != null;
    }
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     * @return The accessDeniedPageUri.
     */
    public com.google.protobuf.StringValue getAccessDeniedPageUri() {
      if (accessDeniedPageUriBuilder_ == null) {
        return accessDeniedPageUri_ == null ? com.google.protobuf.StringValue.getDefaultInstance() : accessDeniedPageUri_;
      } else {
        return accessDeniedPageUriBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     */
    public Builder setAccessDeniedPageUri(com.google.protobuf.StringValue value) {
      if (accessDeniedPageUriBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        accessDeniedPageUri_ = value;
        onChanged();
      } else {
        accessDeniedPageUriBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     */
    public Builder setAccessDeniedPageUri(
        com.google.protobuf.StringValue.Builder builderForValue) {
      if (accessDeniedPageUriBuilder_ == null) {
        accessDeniedPageUri_ = builderForValue.build();
        onChanged();
      } else {
        accessDeniedPageUriBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     */
    public Builder mergeAccessDeniedPageUri(com.google.protobuf.StringValue value) {
      if (accessDeniedPageUriBuilder_ == null) {
        if (accessDeniedPageUri_ != null) {
          accessDeniedPageUri_ =
            com.google.protobuf.StringValue.newBuilder(accessDeniedPageUri_).mergeFrom(value).buildPartial();
        } else {
          accessDeniedPageUri_ = value;
        }
        onChanged();
      } else {
        accessDeniedPageUriBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     */
    public Builder clearAccessDeniedPageUri() {
      if (accessDeniedPageUriBuilder_ == null) {
        accessDeniedPageUri_ = null;
        onChanged();
      } else {
        accessDeniedPageUri_ = null;
        accessDeniedPageUriBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     */
    public com.google.protobuf.StringValue.Builder getAccessDeniedPageUriBuilder() {
      
      onChanged();
      return getAccessDeniedPageUriFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     */
    public com.google.protobuf.StringValueOrBuilder getAccessDeniedPageUriOrBuilder() {
      if (accessDeniedPageUriBuilder_ != null) {
        return accessDeniedPageUriBuilder_.getMessageOrBuilder();
      } else {
        return accessDeniedPageUri_ == null ?
            com.google.protobuf.StringValue.getDefaultInstance() : accessDeniedPageUri_;
      }
    }
    /**
     * <pre>
     * The URI to be redirected to when access is denied.
     * </pre>
     *
     * <code>.google.protobuf.StringValue access_denied_page_uri = 1;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.StringValue, com.google.protobuf.StringValue.Builder, com.google.protobuf.StringValueOrBuilder> 
        getAccessDeniedPageUriFieldBuilder() {
      if (accessDeniedPageUriBuilder_ == null) {
        accessDeniedPageUriBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.protobuf.StringValue, com.google.protobuf.StringValue.Builder, com.google.protobuf.StringValueOrBuilder>(
                getAccessDeniedPageUri(),
                getParentForChildren(),
                isClean());
        accessDeniedPageUri_ = null;
      }
      return accessDeniedPageUriBuilder_;
    }

    private com.google.protobuf.BoolValue generateTroubleshootingUri_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.BoolValue, com.google.protobuf.BoolValue.Builder, com.google.protobuf.BoolValueOrBuilder> generateTroubleshootingUriBuilder_;
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     * @return Whether the generateTroubleshootingUri field is set.
     */
    public boolean hasGenerateTroubleshootingUri() {
      return generateTroubleshootingUriBuilder_ != null || generateTroubleshootingUri_ != null;
    }
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     * @return The generateTroubleshootingUri.
     */
    public com.google.protobuf.BoolValue getGenerateTroubleshootingUri() {
      if (generateTroubleshootingUriBuilder_ == null) {
        return generateTroubleshootingUri_ == null ? com.google.protobuf.BoolValue.getDefaultInstance() : generateTroubleshootingUri_;
      } else {
        return generateTroubleshootingUriBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     */
    public Builder setGenerateTroubleshootingUri(com.google.protobuf.BoolValue value) {
      if (generateTroubleshootingUriBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        generateTroubleshootingUri_ = value;
        onChanged();
      } else {
        generateTroubleshootingUriBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     */
    public Builder setGenerateTroubleshootingUri(
        com.google.protobuf.BoolValue.Builder builderForValue) {
      if (generateTroubleshootingUriBuilder_ == null) {
        generateTroubleshootingUri_ = builderForValue.build();
        onChanged();
      } else {
        generateTroubleshootingUriBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     */
    public Builder mergeGenerateTroubleshootingUri(com.google.protobuf.BoolValue value) {
      if (generateTroubleshootingUriBuilder_ == null) {
        if (generateTroubleshootingUri_ != null) {
          generateTroubleshootingUri_ =
            com.google.protobuf.BoolValue.newBuilder(generateTroubleshootingUri_).mergeFrom(value).buildPartial();
        } else {
          generateTroubleshootingUri_ = value;
        }
        onChanged();
      } else {
        generateTroubleshootingUriBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     */
    public Builder clearGenerateTroubleshootingUri() {
      if (generateTroubleshootingUriBuilder_ == null) {
        generateTroubleshootingUri_ = null;
        onChanged();
      } else {
        generateTroubleshootingUri_ = null;
        generateTroubleshootingUriBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     */
    public com.google.protobuf.BoolValue.Builder getGenerateTroubleshootingUriBuilder() {
      
      onChanged();
      return getGenerateTroubleshootingUriFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     */
    public com.google.protobuf.BoolValueOrBuilder getGenerateTroubleshootingUriOrBuilder() {
      if (generateTroubleshootingUriBuilder_ != null) {
        return generateTroubleshootingUriBuilder_.getMessageOrBuilder();
      } else {
        return generateTroubleshootingUri_ == null ?
            com.google.protobuf.BoolValue.getDefaultInstance() : generateTroubleshootingUri_;
      }
    }
    /**
     * <pre>
     * Whether to generate a troubleshooting URL on access denied events to this
     * application.
     * </pre>
     *
     * <code>.google.protobuf.BoolValue generate_troubleshooting_uri = 2;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.BoolValue, com.google.protobuf.BoolValue.Builder, com.google.protobuf.BoolValueOrBuilder> 
        getGenerateTroubleshootingUriFieldBuilder() {
      if (generateTroubleshootingUriBuilder_ == null) {
        generateTroubleshootingUriBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.protobuf.BoolValue, com.google.protobuf.BoolValue.Builder, com.google.protobuf.BoolValueOrBuilder>(
                getGenerateTroubleshootingUri(),
                getParentForChildren(),
                isClean());
        generateTroubleshootingUri_ = null;
      }
      return generateTroubleshootingUriBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.iap.v1.AccessDeniedPageSettings)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.iap.v1.AccessDeniedPageSettings)
  private static final com.google.cloud.iap.v1.AccessDeniedPageSettings DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.iap.v1.AccessDeniedPageSettings();
  }

  public static com.google.cloud.iap.v1.AccessDeniedPageSettings getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<AccessDeniedPageSettings>
      PARSER = new com.google.protobuf.AbstractParser<AccessDeniedPageSettings>() {
    @java.lang.Override
    public AccessDeniedPageSettings parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new AccessDeniedPageSettings(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<AccessDeniedPageSettings> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<AccessDeniedPageSettings> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.iap.v1.AccessDeniedPageSettings getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

