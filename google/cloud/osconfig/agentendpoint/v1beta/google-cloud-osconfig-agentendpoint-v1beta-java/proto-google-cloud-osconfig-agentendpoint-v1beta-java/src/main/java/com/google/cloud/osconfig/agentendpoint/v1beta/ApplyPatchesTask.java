// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/osconfig/agentendpoint/v1beta/tasks.proto

package com.google.cloud.osconfig.agentendpoint.v1beta;

/**
 * <pre>
 * Message which instructs agent to apply patches.
 * </pre>
 *
 * Protobuf type {@code google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask}
 */
public final class ApplyPatchesTask extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask)
    ApplyPatchesTaskOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ApplyPatchesTask.newBuilder() to construct.
  private ApplyPatchesTask(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ApplyPatchesTask() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ApplyPatchesTask();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ApplyPatchesTask(
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
            com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.Builder subBuilder = null;
            if (patchConfig_ != null) {
              subBuilder = patchConfig_.toBuilder();
            }
            patchConfig_ = input.readMessage(com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(patchConfig_);
              patchConfig_ = subBuilder.buildPartial();
            }

            break;
          }
          case 24: {

            dryRun_ = input.readBool();
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
    return com.google.cloud.osconfig.agentendpoint.v1beta.Tasks.internal_static_google_cloud_osconfig_agentendpoint_v1beta_ApplyPatchesTask_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.osconfig.agentendpoint.v1beta.Tasks.internal_static_google_cloud_osconfig_agentendpoint_v1beta_ApplyPatchesTask_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask.class, com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask.Builder.class);
  }

  public static final int PATCH_CONFIG_FIELD_NUMBER = 1;
  private com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig patchConfig_;
  /**
   * <pre>
   * Specific information about how patches should be applied.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
   * @return Whether the patchConfig field is set.
   */
  @java.lang.Override
  public boolean hasPatchConfig() {
    return patchConfig_ != null;
  }
  /**
   * <pre>
   * Specific information about how patches should be applied.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
   * @return The patchConfig.
   */
  @java.lang.Override
  public com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig getPatchConfig() {
    return patchConfig_ == null ? com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.getDefaultInstance() : patchConfig_;
  }
  /**
   * <pre>
   * Specific information about how patches should be applied.
   * </pre>
   *
   * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
   */
  @java.lang.Override
  public com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfigOrBuilder getPatchConfigOrBuilder() {
    return getPatchConfig();
  }

  public static final int DRY_RUN_FIELD_NUMBER = 3;
  private boolean dryRun_;
  /**
   * <pre>
   * If true, the agent will report its status as it goes through the motions
   * but won't actually run any updates or perform any reboots.
   * </pre>
   *
   * <code>bool dry_run = 3;</code>
   * @return The dryRun.
   */
  @java.lang.Override
  public boolean getDryRun() {
    return dryRun_;
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
    if (patchConfig_ != null) {
      output.writeMessage(1, getPatchConfig());
    }
    if (dryRun_ != false) {
      output.writeBool(3, dryRun_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (patchConfig_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getPatchConfig());
    }
    if (dryRun_ != false) {
      size += com.google.protobuf.CodedOutputStream
        .computeBoolSize(3, dryRun_);
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
    if (!(obj instanceof com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask)) {
      return super.equals(obj);
    }
    com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask other = (com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask) obj;

    if (hasPatchConfig() != other.hasPatchConfig()) return false;
    if (hasPatchConfig()) {
      if (!getPatchConfig()
          .equals(other.getPatchConfig())) return false;
    }
    if (getDryRun()
        != other.getDryRun()) return false;
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
    if (hasPatchConfig()) {
      hash = (37 * hash) + PATCH_CONFIG_FIELD_NUMBER;
      hash = (53 * hash) + getPatchConfig().hashCode();
    }
    hash = (37 * hash) + DRY_RUN_FIELD_NUMBER;
    hash = (53 * hash) + com.google.protobuf.Internal.hashBoolean(
        getDryRun());
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parseFrom(
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
  public static Builder newBuilder(com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask prototype) {
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
   * Message which instructs agent to apply patches.
   * </pre>
   *
   * Protobuf type {@code google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask)
      com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTaskOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.osconfig.agentendpoint.v1beta.Tasks.internal_static_google_cloud_osconfig_agentendpoint_v1beta_ApplyPatchesTask_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.osconfig.agentendpoint.v1beta.Tasks.internal_static_google_cloud_osconfig_agentendpoint_v1beta_ApplyPatchesTask_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask.class, com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask.Builder.class);
    }

    // Construct using com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask.newBuilder()
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
      if (patchConfigBuilder_ == null) {
        patchConfig_ = null;
      } else {
        patchConfig_ = null;
        patchConfigBuilder_ = null;
      }
      dryRun_ = false;

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.osconfig.agentendpoint.v1beta.Tasks.internal_static_google_cloud_osconfig_agentendpoint_v1beta_ApplyPatchesTask_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask getDefaultInstanceForType() {
      return com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask build() {
      com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask buildPartial() {
      com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask result = new com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask(this);
      if (patchConfigBuilder_ == null) {
        result.patchConfig_ = patchConfig_;
      } else {
        result.patchConfig_ = patchConfigBuilder_.build();
      }
      result.dryRun_ = dryRun_;
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
      if (other instanceof com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask) {
        return mergeFrom((com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask other) {
      if (other == com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask.getDefaultInstance()) return this;
      if (other.hasPatchConfig()) {
        mergePatchConfig(other.getPatchConfig());
      }
      if (other.getDryRun() != false) {
        setDryRun(other.getDryRun());
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
      com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig patchConfig_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig, com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.Builder, com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfigOrBuilder> patchConfigBuilder_;
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     * @return Whether the patchConfig field is set.
     */
    public boolean hasPatchConfig() {
      return patchConfigBuilder_ != null || patchConfig_ != null;
    }
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     * @return The patchConfig.
     */
    public com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig getPatchConfig() {
      if (patchConfigBuilder_ == null) {
        return patchConfig_ == null ? com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.getDefaultInstance() : patchConfig_;
      } else {
        return patchConfigBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     */
    public Builder setPatchConfig(com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig value) {
      if (patchConfigBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        patchConfig_ = value;
        onChanged();
      } else {
        patchConfigBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     */
    public Builder setPatchConfig(
        com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.Builder builderForValue) {
      if (patchConfigBuilder_ == null) {
        patchConfig_ = builderForValue.build();
        onChanged();
      } else {
        patchConfigBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     */
    public Builder mergePatchConfig(com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig value) {
      if (patchConfigBuilder_ == null) {
        if (patchConfig_ != null) {
          patchConfig_ =
            com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.newBuilder(patchConfig_).mergeFrom(value).buildPartial();
        } else {
          patchConfig_ = value;
        }
        onChanged();
      } else {
        patchConfigBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     */
    public Builder clearPatchConfig() {
      if (patchConfigBuilder_ == null) {
        patchConfig_ = null;
        onChanged();
      } else {
        patchConfig_ = null;
        patchConfigBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     */
    public com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.Builder getPatchConfigBuilder() {
      
      onChanged();
      return getPatchConfigFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     */
    public com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfigOrBuilder getPatchConfigOrBuilder() {
      if (patchConfigBuilder_ != null) {
        return patchConfigBuilder_.getMessageOrBuilder();
      } else {
        return patchConfig_ == null ?
            com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.getDefaultInstance() : patchConfig_;
      }
    }
    /**
     * <pre>
     * Specific information about how patches should be applied.
     * </pre>
     *
     * <code>.google.cloud.osconfig.agentendpoint.v1beta.PatchConfig patch_config = 1;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig, com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.Builder, com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfigOrBuilder> 
        getPatchConfigFieldBuilder() {
      if (patchConfigBuilder_ == null) {
        patchConfigBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig, com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfig.Builder, com.google.cloud.osconfig.agentendpoint.v1beta.PatchJobs.PatchConfigOrBuilder>(
                getPatchConfig(),
                getParentForChildren(),
                isClean());
        patchConfig_ = null;
      }
      return patchConfigBuilder_;
    }

    private boolean dryRun_ ;
    /**
     * <pre>
     * If true, the agent will report its status as it goes through the motions
     * but won't actually run any updates or perform any reboots.
     * </pre>
     *
     * <code>bool dry_run = 3;</code>
     * @return The dryRun.
     */
    @java.lang.Override
    public boolean getDryRun() {
      return dryRun_;
    }
    /**
     * <pre>
     * If true, the agent will report its status as it goes through the motions
     * but won't actually run any updates or perform any reboots.
     * </pre>
     *
     * <code>bool dry_run = 3;</code>
     * @param value The dryRun to set.
     * @return This builder for chaining.
     */
    public Builder setDryRun(boolean value) {
      
      dryRun_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If true, the agent will report its status as it goes through the motions
     * but won't actually run any updates or perform any reboots.
     * </pre>
     *
     * <code>bool dry_run = 3;</code>
     * @return This builder for chaining.
     */
    public Builder clearDryRun() {
      
      dryRun_ = false;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask)
  private static final com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask();
  }

  public static com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ApplyPatchesTask>
      PARSER = new com.google.protobuf.AbstractParser<ApplyPatchesTask>() {
    @java.lang.Override
    public ApplyPatchesTask parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ApplyPatchesTask(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ApplyPatchesTask> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ApplyPatchesTask> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.osconfig.agentendpoint.v1beta.ApplyPatchesTask getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

