// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/container/v1/cluster_service.proto

package com.google.container.v1;

/**
 * <pre>
 * MaintenancePolicy defines the maintenance policy to be used for the cluster.
 * </pre>
 *
 * Protobuf type {@code google.container.v1.MaintenancePolicy}
 */
public final class MaintenancePolicy extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.container.v1.MaintenancePolicy)
    MaintenancePolicyOrBuilder {
private static final long serialVersionUID = 0L;
  // Use MaintenancePolicy.newBuilder() to construct.
  private MaintenancePolicy(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private MaintenancePolicy() {
    resourceVersion_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new MaintenancePolicy();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private MaintenancePolicy(
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
            com.google.container.v1.MaintenanceWindow.Builder subBuilder = null;
            if (window_ != null) {
              subBuilder = window_.toBuilder();
            }
            window_ = input.readMessage(com.google.container.v1.MaintenanceWindow.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(window_);
              window_ = subBuilder.buildPartial();
            }

            break;
          }
          case 26: {
            java.lang.String s = input.readStringRequireUtf8();

            resourceVersion_ = s;
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
    return com.google.container.v1.ClusterServiceProto.internal_static_google_container_v1_MaintenancePolicy_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.container.v1.ClusterServiceProto.internal_static_google_container_v1_MaintenancePolicy_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.container.v1.MaintenancePolicy.class, com.google.container.v1.MaintenancePolicy.Builder.class);
  }

  public static final int WINDOW_FIELD_NUMBER = 1;
  private com.google.container.v1.MaintenanceWindow window_;
  /**
   * <pre>
   * Specifies the maintenance window in which maintenance may be performed.
   * </pre>
   *
   * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
   * @return Whether the window field is set.
   */
  @java.lang.Override
  public boolean hasWindow() {
    return window_ != null;
  }
  /**
   * <pre>
   * Specifies the maintenance window in which maintenance may be performed.
   * </pre>
   *
   * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
   * @return The window.
   */
  @java.lang.Override
  public com.google.container.v1.MaintenanceWindow getWindow() {
    return window_ == null ? com.google.container.v1.MaintenanceWindow.getDefaultInstance() : window_;
  }
  /**
   * <pre>
   * Specifies the maintenance window in which maintenance may be performed.
   * </pre>
   *
   * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
   */
  @java.lang.Override
  public com.google.container.v1.MaintenanceWindowOrBuilder getWindowOrBuilder() {
    return getWindow();
  }

  public static final int RESOURCE_VERSION_FIELD_NUMBER = 3;
  private volatile java.lang.Object resourceVersion_;
  /**
   * <pre>
   * A hash identifying the version of this policy, so that updates to fields of
   * the policy won't accidentally undo intermediate changes (and so that users
   * of the API unaware of some fields won't accidentally remove other fields).
   * Make a `get()` request to the cluster to get the current
   * resource version and include it with requests to set the policy.
   * </pre>
   *
   * <code>string resource_version = 3;</code>
   * @return The resourceVersion.
   */
  @java.lang.Override
  public java.lang.String getResourceVersion() {
    java.lang.Object ref = resourceVersion_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      resourceVersion_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * A hash identifying the version of this policy, so that updates to fields of
   * the policy won't accidentally undo intermediate changes (and so that users
   * of the API unaware of some fields won't accidentally remove other fields).
   * Make a `get()` request to the cluster to get the current
   * resource version and include it with requests to set the policy.
   * </pre>
   *
   * <code>string resource_version = 3;</code>
   * @return The bytes for resourceVersion.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getResourceVersionBytes() {
    java.lang.Object ref = resourceVersion_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      resourceVersion_ = b;
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
    if (window_ != null) {
      output.writeMessage(1, getWindow());
    }
    if (!getResourceVersionBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 3, resourceVersion_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (window_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getWindow());
    }
    if (!getResourceVersionBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(3, resourceVersion_);
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
    if (!(obj instanceof com.google.container.v1.MaintenancePolicy)) {
      return super.equals(obj);
    }
    com.google.container.v1.MaintenancePolicy other = (com.google.container.v1.MaintenancePolicy) obj;

    if (hasWindow() != other.hasWindow()) return false;
    if (hasWindow()) {
      if (!getWindow()
          .equals(other.getWindow())) return false;
    }
    if (!getResourceVersion()
        .equals(other.getResourceVersion())) return false;
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
    if (hasWindow()) {
      hash = (37 * hash) + WINDOW_FIELD_NUMBER;
      hash = (53 * hash) + getWindow().hashCode();
    }
    hash = (37 * hash) + RESOURCE_VERSION_FIELD_NUMBER;
    hash = (53 * hash) + getResourceVersion().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.container.v1.MaintenancePolicy parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.container.v1.MaintenancePolicy parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.container.v1.MaintenancePolicy parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.container.v1.MaintenancePolicy parseFrom(
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
  public static Builder newBuilder(com.google.container.v1.MaintenancePolicy prototype) {
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
   * MaintenancePolicy defines the maintenance policy to be used for the cluster.
   * </pre>
   *
   * Protobuf type {@code google.container.v1.MaintenancePolicy}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.container.v1.MaintenancePolicy)
      com.google.container.v1.MaintenancePolicyOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.container.v1.ClusterServiceProto.internal_static_google_container_v1_MaintenancePolicy_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.container.v1.ClusterServiceProto.internal_static_google_container_v1_MaintenancePolicy_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.container.v1.MaintenancePolicy.class, com.google.container.v1.MaintenancePolicy.Builder.class);
    }

    // Construct using com.google.container.v1.MaintenancePolicy.newBuilder()
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
      if (windowBuilder_ == null) {
        window_ = null;
      } else {
        window_ = null;
        windowBuilder_ = null;
      }
      resourceVersion_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.container.v1.ClusterServiceProto.internal_static_google_container_v1_MaintenancePolicy_descriptor;
    }

    @java.lang.Override
    public com.google.container.v1.MaintenancePolicy getDefaultInstanceForType() {
      return com.google.container.v1.MaintenancePolicy.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.container.v1.MaintenancePolicy build() {
      com.google.container.v1.MaintenancePolicy result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.container.v1.MaintenancePolicy buildPartial() {
      com.google.container.v1.MaintenancePolicy result = new com.google.container.v1.MaintenancePolicy(this);
      if (windowBuilder_ == null) {
        result.window_ = window_;
      } else {
        result.window_ = windowBuilder_.build();
      }
      result.resourceVersion_ = resourceVersion_;
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
      if (other instanceof com.google.container.v1.MaintenancePolicy) {
        return mergeFrom((com.google.container.v1.MaintenancePolicy)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.container.v1.MaintenancePolicy other) {
      if (other == com.google.container.v1.MaintenancePolicy.getDefaultInstance()) return this;
      if (other.hasWindow()) {
        mergeWindow(other.getWindow());
      }
      if (!other.getResourceVersion().isEmpty()) {
        resourceVersion_ = other.resourceVersion_;
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
      com.google.container.v1.MaintenancePolicy parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.container.v1.MaintenancePolicy) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.container.v1.MaintenanceWindow window_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.container.v1.MaintenanceWindow, com.google.container.v1.MaintenanceWindow.Builder, com.google.container.v1.MaintenanceWindowOrBuilder> windowBuilder_;
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     * @return Whether the window field is set.
     */
    public boolean hasWindow() {
      return windowBuilder_ != null || window_ != null;
    }
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     * @return The window.
     */
    public com.google.container.v1.MaintenanceWindow getWindow() {
      if (windowBuilder_ == null) {
        return window_ == null ? com.google.container.v1.MaintenanceWindow.getDefaultInstance() : window_;
      } else {
        return windowBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     */
    public Builder setWindow(com.google.container.v1.MaintenanceWindow value) {
      if (windowBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        window_ = value;
        onChanged();
      } else {
        windowBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     */
    public Builder setWindow(
        com.google.container.v1.MaintenanceWindow.Builder builderForValue) {
      if (windowBuilder_ == null) {
        window_ = builderForValue.build();
        onChanged();
      } else {
        windowBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     */
    public Builder mergeWindow(com.google.container.v1.MaintenanceWindow value) {
      if (windowBuilder_ == null) {
        if (window_ != null) {
          window_ =
            com.google.container.v1.MaintenanceWindow.newBuilder(window_).mergeFrom(value).buildPartial();
        } else {
          window_ = value;
        }
        onChanged();
      } else {
        windowBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     */
    public Builder clearWindow() {
      if (windowBuilder_ == null) {
        window_ = null;
        onChanged();
      } else {
        window_ = null;
        windowBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     */
    public com.google.container.v1.MaintenanceWindow.Builder getWindowBuilder() {
      
      onChanged();
      return getWindowFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     */
    public com.google.container.v1.MaintenanceWindowOrBuilder getWindowOrBuilder() {
      if (windowBuilder_ != null) {
        return windowBuilder_.getMessageOrBuilder();
      } else {
        return window_ == null ?
            com.google.container.v1.MaintenanceWindow.getDefaultInstance() : window_;
      }
    }
    /**
     * <pre>
     * Specifies the maintenance window in which maintenance may be performed.
     * </pre>
     *
     * <code>.google.container.v1.MaintenanceWindow window = 1;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.container.v1.MaintenanceWindow, com.google.container.v1.MaintenanceWindow.Builder, com.google.container.v1.MaintenanceWindowOrBuilder> 
        getWindowFieldBuilder() {
      if (windowBuilder_ == null) {
        windowBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.container.v1.MaintenanceWindow, com.google.container.v1.MaintenanceWindow.Builder, com.google.container.v1.MaintenanceWindowOrBuilder>(
                getWindow(),
                getParentForChildren(),
                isClean());
        window_ = null;
      }
      return windowBuilder_;
    }

    private java.lang.Object resourceVersion_ = "";
    /**
     * <pre>
     * A hash identifying the version of this policy, so that updates to fields of
     * the policy won't accidentally undo intermediate changes (and so that users
     * of the API unaware of some fields won't accidentally remove other fields).
     * Make a `get()` request to the cluster to get the current
     * resource version and include it with requests to set the policy.
     * </pre>
     *
     * <code>string resource_version = 3;</code>
     * @return The resourceVersion.
     */
    public java.lang.String getResourceVersion() {
      java.lang.Object ref = resourceVersion_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        resourceVersion_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * A hash identifying the version of this policy, so that updates to fields of
     * the policy won't accidentally undo intermediate changes (and so that users
     * of the API unaware of some fields won't accidentally remove other fields).
     * Make a `get()` request to the cluster to get the current
     * resource version and include it with requests to set the policy.
     * </pre>
     *
     * <code>string resource_version = 3;</code>
     * @return The bytes for resourceVersion.
     */
    public com.google.protobuf.ByteString
        getResourceVersionBytes() {
      java.lang.Object ref = resourceVersion_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        resourceVersion_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * A hash identifying the version of this policy, so that updates to fields of
     * the policy won't accidentally undo intermediate changes (and so that users
     * of the API unaware of some fields won't accidentally remove other fields).
     * Make a `get()` request to the cluster to get the current
     * resource version and include it with requests to set the policy.
     * </pre>
     *
     * <code>string resource_version = 3;</code>
     * @param value The resourceVersion to set.
     * @return This builder for chaining.
     */
    public Builder setResourceVersion(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      resourceVersion_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * A hash identifying the version of this policy, so that updates to fields of
     * the policy won't accidentally undo intermediate changes (and so that users
     * of the API unaware of some fields won't accidentally remove other fields).
     * Make a `get()` request to the cluster to get the current
     * resource version and include it with requests to set the policy.
     * </pre>
     *
     * <code>string resource_version = 3;</code>
     * @return This builder for chaining.
     */
    public Builder clearResourceVersion() {
      
      resourceVersion_ = getDefaultInstance().getResourceVersion();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * A hash identifying the version of this policy, so that updates to fields of
     * the policy won't accidentally undo intermediate changes (and so that users
     * of the API unaware of some fields won't accidentally remove other fields).
     * Make a `get()` request to the cluster to get the current
     * resource version and include it with requests to set the policy.
     * </pre>
     *
     * <code>string resource_version = 3;</code>
     * @param value The bytes for resourceVersion to set.
     * @return This builder for chaining.
     */
    public Builder setResourceVersionBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      resourceVersion_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.container.v1.MaintenancePolicy)
  }

  // @@protoc_insertion_point(class_scope:google.container.v1.MaintenancePolicy)
  private static final com.google.container.v1.MaintenancePolicy DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.container.v1.MaintenancePolicy();
  }

  public static com.google.container.v1.MaintenancePolicy getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<MaintenancePolicy>
      PARSER = new com.google.protobuf.AbstractParser<MaintenancePolicy>() {
    @java.lang.Override
    public MaintenancePolicy parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new MaintenancePolicy(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<MaintenancePolicy> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<MaintenancePolicy> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.container.v1.MaintenancePolicy getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

