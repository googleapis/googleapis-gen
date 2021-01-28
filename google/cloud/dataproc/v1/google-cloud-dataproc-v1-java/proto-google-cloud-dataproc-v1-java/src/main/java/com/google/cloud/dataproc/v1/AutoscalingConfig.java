// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dataproc/v1/clusters.proto

package com.google.cloud.dataproc.v1;

/**
 * <pre>
 * Autoscaling Policy config associated with the cluster.
 * </pre>
 *
 * Protobuf type {@code google.cloud.dataproc.v1.AutoscalingConfig}
 */
public final class AutoscalingConfig extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.dataproc.v1.AutoscalingConfig)
    AutoscalingConfigOrBuilder {
private static final long serialVersionUID = 0L;
  // Use AutoscalingConfig.newBuilder() to construct.
  private AutoscalingConfig(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private AutoscalingConfig() {
    policyUri_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new AutoscalingConfig();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private AutoscalingConfig(
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

            policyUri_ = s;
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
    return com.google.cloud.dataproc.v1.ClustersProto.internal_static_google_cloud_dataproc_v1_AutoscalingConfig_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.dataproc.v1.ClustersProto.internal_static_google_cloud_dataproc_v1_AutoscalingConfig_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.dataproc.v1.AutoscalingConfig.class, com.google.cloud.dataproc.v1.AutoscalingConfig.Builder.class);
  }

  public static final int POLICY_URI_FIELD_NUMBER = 1;
  private volatile java.lang.Object policyUri_;
  /**
   * <pre>
   * Optional. The autoscaling policy used by the cluster.
   * Only resource names including projectid and location (region) are valid.
   * Examples:
   * * `https://www.googleapis.com/compute/v1/projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
   * * `projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
   * Note that the policy must be in the same project and Dataproc region.
   * </pre>
   *
   * <code>string policy_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The policyUri.
   */
  @java.lang.Override
  public java.lang.String getPolicyUri() {
    java.lang.Object ref = policyUri_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      policyUri_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Optional. The autoscaling policy used by the cluster.
   * Only resource names including projectid and location (region) are valid.
   * Examples:
   * * `https://www.googleapis.com/compute/v1/projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
   * * `projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
   * Note that the policy must be in the same project and Dataproc region.
   * </pre>
   *
   * <code>string policy_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for policyUri.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getPolicyUriBytes() {
    java.lang.Object ref = policyUri_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      policyUri_ = b;
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
    if (!getPolicyUriBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, policyUri_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getPolicyUriBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, policyUri_);
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
    if (!(obj instanceof com.google.cloud.dataproc.v1.AutoscalingConfig)) {
      return super.equals(obj);
    }
    com.google.cloud.dataproc.v1.AutoscalingConfig other = (com.google.cloud.dataproc.v1.AutoscalingConfig) obj;

    if (!getPolicyUri()
        .equals(other.getPolicyUri())) return false;
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
    hash = (37 * hash) + POLICY_URI_FIELD_NUMBER;
    hash = (53 * hash) + getPolicyUri().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.dataproc.v1.AutoscalingConfig parseFrom(
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
  public static Builder newBuilder(com.google.cloud.dataproc.v1.AutoscalingConfig prototype) {
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
   * Autoscaling Policy config associated with the cluster.
   * </pre>
   *
   * Protobuf type {@code google.cloud.dataproc.v1.AutoscalingConfig}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.dataproc.v1.AutoscalingConfig)
      com.google.cloud.dataproc.v1.AutoscalingConfigOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.dataproc.v1.ClustersProto.internal_static_google_cloud_dataproc_v1_AutoscalingConfig_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.dataproc.v1.ClustersProto.internal_static_google_cloud_dataproc_v1_AutoscalingConfig_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.dataproc.v1.AutoscalingConfig.class, com.google.cloud.dataproc.v1.AutoscalingConfig.Builder.class);
    }

    // Construct using com.google.cloud.dataproc.v1.AutoscalingConfig.newBuilder()
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
      policyUri_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.dataproc.v1.ClustersProto.internal_static_google_cloud_dataproc_v1_AutoscalingConfig_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.dataproc.v1.AutoscalingConfig getDefaultInstanceForType() {
      return com.google.cloud.dataproc.v1.AutoscalingConfig.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.dataproc.v1.AutoscalingConfig build() {
      com.google.cloud.dataproc.v1.AutoscalingConfig result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.dataproc.v1.AutoscalingConfig buildPartial() {
      com.google.cloud.dataproc.v1.AutoscalingConfig result = new com.google.cloud.dataproc.v1.AutoscalingConfig(this);
      result.policyUri_ = policyUri_;
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
      if (other instanceof com.google.cloud.dataproc.v1.AutoscalingConfig) {
        return mergeFrom((com.google.cloud.dataproc.v1.AutoscalingConfig)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.dataproc.v1.AutoscalingConfig other) {
      if (other == com.google.cloud.dataproc.v1.AutoscalingConfig.getDefaultInstance()) return this;
      if (!other.getPolicyUri().isEmpty()) {
        policyUri_ = other.policyUri_;
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
      com.google.cloud.dataproc.v1.AutoscalingConfig parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.dataproc.v1.AutoscalingConfig) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object policyUri_ = "";
    /**
     * <pre>
     * Optional. The autoscaling policy used by the cluster.
     * Only resource names including projectid and location (region) are valid.
     * Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * * `projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * Note that the policy must be in the same project and Dataproc region.
     * </pre>
     *
     * <code>string policy_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return The policyUri.
     */
    public java.lang.String getPolicyUri() {
      java.lang.Object ref = policyUri_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        policyUri_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Optional. The autoscaling policy used by the cluster.
     * Only resource names including projectid and location (region) are valid.
     * Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * * `projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * Note that the policy must be in the same project and Dataproc region.
     * </pre>
     *
     * <code>string policy_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return The bytes for policyUri.
     */
    public com.google.protobuf.ByteString
        getPolicyUriBytes() {
      java.lang.Object ref = policyUri_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        policyUri_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Optional. The autoscaling policy used by the cluster.
     * Only resource names including projectid and location (region) are valid.
     * Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * * `projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * Note that the policy must be in the same project and Dataproc region.
     * </pre>
     *
     * <code>string policy_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param value The policyUri to set.
     * @return This builder for chaining.
     */
    public Builder setPolicyUri(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      policyUri_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Optional. The autoscaling policy used by the cluster.
     * Only resource names including projectid and location (region) are valid.
     * Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * * `projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * Note that the policy must be in the same project and Dataproc region.
     * </pre>
     *
     * <code>string policy_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return This builder for chaining.
     */
    public Builder clearPolicyUri() {
      
      policyUri_ = getDefaultInstance().getPolicyUri();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Optional. The autoscaling policy used by the cluster.
     * Only resource names including projectid and location (region) are valid.
     * Examples:
     * * `https://www.googleapis.com/compute/v1/projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * * `projects/[project_id]/locations/[dataproc_region]/autoscalingPolicies/[policy_id]`
     * Note that the policy must be in the same project and Dataproc region.
     * </pre>
     *
     * <code>string policy_uri = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param value The bytes for policyUri to set.
     * @return This builder for chaining.
     */
    public Builder setPolicyUriBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      policyUri_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.dataproc.v1.AutoscalingConfig)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.dataproc.v1.AutoscalingConfig)
  private static final com.google.cloud.dataproc.v1.AutoscalingConfig DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.dataproc.v1.AutoscalingConfig();
  }

  public static com.google.cloud.dataproc.v1.AutoscalingConfig getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<AutoscalingConfig>
      PARSER = new com.google.protobuf.AbstractParser<AutoscalingConfig>() {
    @java.lang.Override
    public AutoscalingConfig parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new AutoscalingConfig(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<AutoscalingConfig> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<AutoscalingConfig> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.dataproc.v1.AutoscalingConfig getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

