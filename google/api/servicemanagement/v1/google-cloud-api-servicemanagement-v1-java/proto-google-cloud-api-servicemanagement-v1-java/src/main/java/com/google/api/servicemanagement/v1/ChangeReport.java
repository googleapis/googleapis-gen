// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/api/servicemanagement/v1/resources.proto

package com.google.api.servicemanagement.v1;

/**
 * <pre>
 * Change report associated with a particular service configuration.
 * It contains a list of ConfigChanges based on the comparison between
 * two service configurations.
 * </pre>
 *
 * Protobuf type {@code google.api.servicemanagement.v1.ChangeReport}
 */
public final class ChangeReport extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.api.servicemanagement.v1.ChangeReport)
    ChangeReportOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ChangeReport.newBuilder() to construct.
  private ChangeReport(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ChangeReport() {
    configChanges_ = java.util.Collections.emptyList();
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ChangeReport();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ChangeReport(
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
              configChanges_ = new java.util.ArrayList<com.google.api.ConfigChange>();
              mutable_bitField0_ |= 0x00000001;
            }
            configChanges_.add(
                input.readMessage(com.google.api.ConfigChange.parser(), extensionRegistry));
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
        configChanges_ = java.util.Collections.unmodifiableList(configChanges_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.api.servicemanagement.v1.ResourcesProto.internal_static_google_api_servicemanagement_v1_ChangeReport_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.api.servicemanagement.v1.ResourcesProto.internal_static_google_api_servicemanagement_v1_ChangeReport_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.api.servicemanagement.v1.ChangeReport.class, com.google.api.servicemanagement.v1.ChangeReport.Builder.class);
  }

  public static final int CONFIG_CHANGES_FIELD_NUMBER = 1;
  private java.util.List<com.google.api.ConfigChange> configChanges_;
  /**
   * <pre>
   * List of changes between two service configurations.
   * The changes will be alphabetically sorted based on the identifier
   * of each change.
   * A ConfigChange identifier is a dot separated path to the configuration.
   * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
   * </pre>
   *
   * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
   */
  @java.lang.Override
  public java.util.List<com.google.api.ConfigChange> getConfigChangesList() {
    return configChanges_;
  }
  /**
   * <pre>
   * List of changes between two service configurations.
   * The changes will be alphabetically sorted based on the identifier
   * of each change.
   * A ConfigChange identifier is a dot separated path to the configuration.
   * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
   * </pre>
   *
   * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.api.ConfigChangeOrBuilder> 
      getConfigChangesOrBuilderList() {
    return configChanges_;
  }
  /**
   * <pre>
   * List of changes between two service configurations.
   * The changes will be alphabetically sorted based on the identifier
   * of each change.
   * A ConfigChange identifier is a dot separated path to the configuration.
   * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
   * </pre>
   *
   * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
   */
  @java.lang.Override
  public int getConfigChangesCount() {
    return configChanges_.size();
  }
  /**
   * <pre>
   * List of changes between two service configurations.
   * The changes will be alphabetically sorted based on the identifier
   * of each change.
   * A ConfigChange identifier is a dot separated path to the configuration.
   * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
   * </pre>
   *
   * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
   */
  @java.lang.Override
  public com.google.api.ConfigChange getConfigChanges(int index) {
    return configChanges_.get(index);
  }
  /**
   * <pre>
   * List of changes between two service configurations.
   * The changes will be alphabetically sorted based on the identifier
   * of each change.
   * A ConfigChange identifier is a dot separated path to the configuration.
   * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
   * </pre>
   *
   * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
   */
  @java.lang.Override
  public com.google.api.ConfigChangeOrBuilder getConfigChangesOrBuilder(
      int index) {
    return configChanges_.get(index);
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
    for (int i = 0; i < configChanges_.size(); i++) {
      output.writeMessage(1, configChanges_.get(i));
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    for (int i = 0; i < configChanges_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, configChanges_.get(i));
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
    if (!(obj instanceof com.google.api.servicemanagement.v1.ChangeReport)) {
      return super.equals(obj);
    }
    com.google.api.servicemanagement.v1.ChangeReport other = (com.google.api.servicemanagement.v1.ChangeReport) obj;

    if (!getConfigChangesList()
        .equals(other.getConfigChangesList())) return false;
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
    if (getConfigChangesCount() > 0) {
      hash = (37 * hash) + CONFIG_CHANGES_FIELD_NUMBER;
      hash = (53 * hash) + getConfigChangesList().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.api.servicemanagement.v1.ChangeReport parseFrom(
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
  public static Builder newBuilder(com.google.api.servicemanagement.v1.ChangeReport prototype) {
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
   * Change report associated with a particular service configuration.
   * It contains a list of ConfigChanges based on the comparison between
   * two service configurations.
   * </pre>
   *
   * Protobuf type {@code google.api.servicemanagement.v1.ChangeReport}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.api.servicemanagement.v1.ChangeReport)
      com.google.api.servicemanagement.v1.ChangeReportOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.api.servicemanagement.v1.ResourcesProto.internal_static_google_api_servicemanagement_v1_ChangeReport_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.api.servicemanagement.v1.ResourcesProto.internal_static_google_api_servicemanagement_v1_ChangeReport_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.api.servicemanagement.v1.ChangeReport.class, com.google.api.servicemanagement.v1.ChangeReport.Builder.class);
    }

    // Construct using com.google.api.servicemanagement.v1.ChangeReport.newBuilder()
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
        getConfigChangesFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (configChangesBuilder_ == null) {
        configChanges_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        configChangesBuilder_.clear();
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.api.servicemanagement.v1.ResourcesProto.internal_static_google_api_servicemanagement_v1_ChangeReport_descriptor;
    }

    @java.lang.Override
    public com.google.api.servicemanagement.v1.ChangeReport getDefaultInstanceForType() {
      return com.google.api.servicemanagement.v1.ChangeReport.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.api.servicemanagement.v1.ChangeReport build() {
      com.google.api.servicemanagement.v1.ChangeReport result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.api.servicemanagement.v1.ChangeReport buildPartial() {
      com.google.api.servicemanagement.v1.ChangeReport result = new com.google.api.servicemanagement.v1.ChangeReport(this);
      int from_bitField0_ = bitField0_;
      if (configChangesBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          configChanges_ = java.util.Collections.unmodifiableList(configChanges_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.configChanges_ = configChanges_;
      } else {
        result.configChanges_ = configChangesBuilder_.build();
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
      if (other instanceof com.google.api.servicemanagement.v1.ChangeReport) {
        return mergeFrom((com.google.api.servicemanagement.v1.ChangeReport)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.api.servicemanagement.v1.ChangeReport other) {
      if (other == com.google.api.servicemanagement.v1.ChangeReport.getDefaultInstance()) return this;
      if (configChangesBuilder_ == null) {
        if (!other.configChanges_.isEmpty()) {
          if (configChanges_.isEmpty()) {
            configChanges_ = other.configChanges_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureConfigChangesIsMutable();
            configChanges_.addAll(other.configChanges_);
          }
          onChanged();
        }
      } else {
        if (!other.configChanges_.isEmpty()) {
          if (configChangesBuilder_.isEmpty()) {
            configChangesBuilder_.dispose();
            configChangesBuilder_ = null;
            configChanges_ = other.configChanges_;
            bitField0_ = (bitField0_ & ~0x00000001);
            configChangesBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getConfigChangesFieldBuilder() : null;
          } else {
            configChangesBuilder_.addAllMessages(other.configChanges_);
          }
        }
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
      com.google.api.servicemanagement.v1.ChangeReport parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.api.servicemanagement.v1.ChangeReport) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.api.ConfigChange> configChanges_ =
      java.util.Collections.emptyList();
    private void ensureConfigChangesIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        configChanges_ = new java.util.ArrayList<com.google.api.ConfigChange>(configChanges_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.api.ConfigChange, com.google.api.ConfigChange.Builder, com.google.api.ConfigChangeOrBuilder> configChangesBuilder_;

    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public java.util.List<com.google.api.ConfigChange> getConfigChangesList() {
      if (configChangesBuilder_ == null) {
        return java.util.Collections.unmodifiableList(configChanges_);
      } else {
        return configChangesBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public int getConfigChangesCount() {
      if (configChangesBuilder_ == null) {
        return configChanges_.size();
      } else {
        return configChangesBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public com.google.api.ConfigChange getConfigChanges(int index) {
      if (configChangesBuilder_ == null) {
        return configChanges_.get(index);
      } else {
        return configChangesBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder setConfigChanges(
        int index, com.google.api.ConfigChange value) {
      if (configChangesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureConfigChangesIsMutable();
        configChanges_.set(index, value);
        onChanged();
      } else {
        configChangesBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder setConfigChanges(
        int index, com.google.api.ConfigChange.Builder builderForValue) {
      if (configChangesBuilder_ == null) {
        ensureConfigChangesIsMutable();
        configChanges_.set(index, builderForValue.build());
        onChanged();
      } else {
        configChangesBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder addConfigChanges(com.google.api.ConfigChange value) {
      if (configChangesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureConfigChangesIsMutable();
        configChanges_.add(value);
        onChanged();
      } else {
        configChangesBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder addConfigChanges(
        int index, com.google.api.ConfigChange value) {
      if (configChangesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureConfigChangesIsMutable();
        configChanges_.add(index, value);
        onChanged();
      } else {
        configChangesBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder addConfigChanges(
        com.google.api.ConfigChange.Builder builderForValue) {
      if (configChangesBuilder_ == null) {
        ensureConfigChangesIsMutable();
        configChanges_.add(builderForValue.build());
        onChanged();
      } else {
        configChangesBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder addConfigChanges(
        int index, com.google.api.ConfigChange.Builder builderForValue) {
      if (configChangesBuilder_ == null) {
        ensureConfigChangesIsMutable();
        configChanges_.add(index, builderForValue.build());
        onChanged();
      } else {
        configChangesBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder addAllConfigChanges(
        java.lang.Iterable<? extends com.google.api.ConfigChange> values) {
      if (configChangesBuilder_ == null) {
        ensureConfigChangesIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, configChanges_);
        onChanged();
      } else {
        configChangesBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder clearConfigChanges() {
      if (configChangesBuilder_ == null) {
        configChanges_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        configChangesBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public Builder removeConfigChanges(int index) {
      if (configChangesBuilder_ == null) {
        ensureConfigChangesIsMutable();
        configChanges_.remove(index);
        onChanged();
      } else {
        configChangesBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public com.google.api.ConfigChange.Builder getConfigChangesBuilder(
        int index) {
      return getConfigChangesFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public com.google.api.ConfigChangeOrBuilder getConfigChangesOrBuilder(
        int index) {
      if (configChangesBuilder_ == null) {
        return configChanges_.get(index);  } else {
        return configChangesBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public java.util.List<? extends com.google.api.ConfigChangeOrBuilder> 
         getConfigChangesOrBuilderList() {
      if (configChangesBuilder_ != null) {
        return configChangesBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(configChanges_);
      }
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public com.google.api.ConfigChange.Builder addConfigChangesBuilder() {
      return getConfigChangesFieldBuilder().addBuilder(
          com.google.api.ConfigChange.getDefaultInstance());
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public com.google.api.ConfigChange.Builder addConfigChangesBuilder(
        int index) {
      return getConfigChangesFieldBuilder().addBuilder(
          index, com.google.api.ConfigChange.getDefaultInstance());
    }
    /**
     * <pre>
     * List of changes between two service configurations.
     * The changes will be alphabetically sorted based on the identifier
     * of each change.
     * A ConfigChange identifier is a dot separated path to the configuration.
     * Example: visibility.rules[selector='LibraryService.CreateBook'].restriction
     * </pre>
     *
     * <code>repeated .google.api.ConfigChange config_changes = 1;</code>
     */
    public java.util.List<com.google.api.ConfigChange.Builder> 
         getConfigChangesBuilderList() {
      return getConfigChangesFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.api.ConfigChange, com.google.api.ConfigChange.Builder, com.google.api.ConfigChangeOrBuilder> 
        getConfigChangesFieldBuilder() {
      if (configChangesBuilder_ == null) {
        configChangesBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.api.ConfigChange, com.google.api.ConfigChange.Builder, com.google.api.ConfigChangeOrBuilder>(
                configChanges_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        configChanges_ = null;
      }
      return configChangesBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.api.servicemanagement.v1.ChangeReport)
  }

  // @@protoc_insertion_point(class_scope:google.api.servicemanagement.v1.ChangeReport)
  private static final com.google.api.servicemanagement.v1.ChangeReport DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.api.servicemanagement.v1.ChangeReport();
  }

  public static com.google.api.servicemanagement.v1.ChangeReport getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ChangeReport>
      PARSER = new com.google.protobuf.AbstractParser<ChangeReport>() {
    @java.lang.Override
    public ChangeReport parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ChangeReport(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ChangeReport> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ChangeReport> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.api.servicemanagement.v1.ChangeReport getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

