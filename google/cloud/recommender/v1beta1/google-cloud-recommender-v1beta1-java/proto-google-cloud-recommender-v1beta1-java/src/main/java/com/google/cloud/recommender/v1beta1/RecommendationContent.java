// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/recommender/v1beta1/recommendation.proto

package com.google.cloud.recommender.v1beta1;

/**
 * <pre>
 * Contains what resources are changing and how they are changing.
 * </pre>
 *
 * Protobuf type {@code google.cloud.recommender.v1beta1.RecommendationContent}
 */
public final class RecommendationContent extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.recommender.v1beta1.RecommendationContent)
    RecommendationContentOrBuilder {
private static final long serialVersionUID = 0L;
  // Use RecommendationContent.newBuilder() to construct.
  private RecommendationContent(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private RecommendationContent() {
    operationGroups_ = java.util.Collections.emptyList();
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new RecommendationContent();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private RecommendationContent(
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
          case 18: {
            if (!((mutable_bitField0_ & 0x00000001) != 0)) {
              operationGroups_ = new java.util.ArrayList<com.google.cloud.recommender.v1beta1.OperationGroup>();
              mutable_bitField0_ |= 0x00000001;
            }
            operationGroups_.add(
                input.readMessage(com.google.cloud.recommender.v1beta1.OperationGroup.parser(), extensionRegistry));
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
        operationGroups_ = java.util.Collections.unmodifiableList(operationGroups_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.cloud.recommender.v1beta1.RecommendationOuterClass.internal_static_google_cloud_recommender_v1beta1_RecommendationContent_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.recommender.v1beta1.RecommendationOuterClass.internal_static_google_cloud_recommender_v1beta1_RecommendationContent_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.recommender.v1beta1.RecommendationContent.class, com.google.cloud.recommender.v1beta1.RecommendationContent.Builder.class);
  }

  public static final int OPERATION_GROUPS_FIELD_NUMBER = 2;
  private java.util.List<com.google.cloud.recommender.v1beta1.OperationGroup> operationGroups_;
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
   */
  @java.lang.Override
  public java.util.List<com.google.cloud.recommender.v1beta1.OperationGroup> getOperationGroupsList() {
    return operationGroups_;
  }
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.cloud.recommender.v1beta1.OperationGroupOrBuilder> 
      getOperationGroupsOrBuilderList() {
    return operationGroups_;
  }
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
   */
  @java.lang.Override
  public int getOperationGroupsCount() {
    return operationGroups_.size();
  }
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
   */
  @java.lang.Override
  public com.google.cloud.recommender.v1beta1.OperationGroup getOperationGroups(int index) {
    return operationGroups_.get(index);
  }
  /**
   * <pre>
   * Operations to one or more Google Cloud resources grouped in such a way
   * that, all operations within one group are expected to be performed
   * atomically and in an order.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
   */
  @java.lang.Override
  public com.google.cloud.recommender.v1beta1.OperationGroupOrBuilder getOperationGroupsOrBuilder(
      int index) {
    return operationGroups_.get(index);
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
    for (int i = 0; i < operationGroups_.size(); i++) {
      output.writeMessage(2, operationGroups_.get(i));
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    for (int i = 0; i < operationGroups_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, operationGroups_.get(i));
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
    if (!(obj instanceof com.google.cloud.recommender.v1beta1.RecommendationContent)) {
      return super.equals(obj);
    }
    com.google.cloud.recommender.v1beta1.RecommendationContent other = (com.google.cloud.recommender.v1beta1.RecommendationContent) obj;

    if (!getOperationGroupsList()
        .equals(other.getOperationGroupsList())) return false;
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
    if (getOperationGroupsCount() > 0) {
      hash = (37 * hash) + OPERATION_GROUPS_FIELD_NUMBER;
      hash = (53 * hash) + getOperationGroupsList().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.recommender.v1beta1.RecommendationContent parseFrom(
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
  public static Builder newBuilder(com.google.cloud.recommender.v1beta1.RecommendationContent prototype) {
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
   * Contains what resources are changing and how they are changing.
   * </pre>
   *
   * Protobuf type {@code google.cloud.recommender.v1beta1.RecommendationContent}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.recommender.v1beta1.RecommendationContent)
      com.google.cloud.recommender.v1beta1.RecommendationContentOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.recommender.v1beta1.RecommendationOuterClass.internal_static_google_cloud_recommender_v1beta1_RecommendationContent_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.recommender.v1beta1.RecommendationOuterClass.internal_static_google_cloud_recommender_v1beta1_RecommendationContent_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.recommender.v1beta1.RecommendationContent.class, com.google.cloud.recommender.v1beta1.RecommendationContent.Builder.class);
    }

    // Construct using com.google.cloud.recommender.v1beta1.RecommendationContent.newBuilder()
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
        getOperationGroupsFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (operationGroupsBuilder_ == null) {
        operationGroups_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        operationGroupsBuilder_.clear();
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.recommender.v1beta1.RecommendationOuterClass.internal_static_google_cloud_recommender_v1beta1_RecommendationContent_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.recommender.v1beta1.RecommendationContent getDefaultInstanceForType() {
      return com.google.cloud.recommender.v1beta1.RecommendationContent.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.recommender.v1beta1.RecommendationContent build() {
      com.google.cloud.recommender.v1beta1.RecommendationContent result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.recommender.v1beta1.RecommendationContent buildPartial() {
      com.google.cloud.recommender.v1beta1.RecommendationContent result = new com.google.cloud.recommender.v1beta1.RecommendationContent(this);
      int from_bitField0_ = bitField0_;
      if (operationGroupsBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          operationGroups_ = java.util.Collections.unmodifiableList(operationGroups_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.operationGroups_ = operationGroups_;
      } else {
        result.operationGroups_ = operationGroupsBuilder_.build();
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
      if (other instanceof com.google.cloud.recommender.v1beta1.RecommendationContent) {
        return mergeFrom((com.google.cloud.recommender.v1beta1.RecommendationContent)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.recommender.v1beta1.RecommendationContent other) {
      if (other == com.google.cloud.recommender.v1beta1.RecommendationContent.getDefaultInstance()) return this;
      if (operationGroupsBuilder_ == null) {
        if (!other.operationGroups_.isEmpty()) {
          if (operationGroups_.isEmpty()) {
            operationGroups_ = other.operationGroups_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureOperationGroupsIsMutable();
            operationGroups_.addAll(other.operationGroups_);
          }
          onChanged();
        }
      } else {
        if (!other.operationGroups_.isEmpty()) {
          if (operationGroupsBuilder_.isEmpty()) {
            operationGroupsBuilder_.dispose();
            operationGroupsBuilder_ = null;
            operationGroups_ = other.operationGroups_;
            bitField0_ = (bitField0_ & ~0x00000001);
            operationGroupsBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getOperationGroupsFieldBuilder() : null;
          } else {
            operationGroupsBuilder_.addAllMessages(other.operationGroups_);
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
      com.google.cloud.recommender.v1beta1.RecommendationContent parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.recommender.v1beta1.RecommendationContent) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.cloud.recommender.v1beta1.OperationGroup> operationGroups_ =
      java.util.Collections.emptyList();
    private void ensureOperationGroupsIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        operationGroups_ = new java.util.ArrayList<com.google.cloud.recommender.v1beta1.OperationGroup>(operationGroups_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.recommender.v1beta1.OperationGroup, com.google.cloud.recommender.v1beta1.OperationGroup.Builder, com.google.cloud.recommender.v1beta1.OperationGroupOrBuilder> operationGroupsBuilder_;

    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public java.util.List<com.google.cloud.recommender.v1beta1.OperationGroup> getOperationGroupsList() {
      if (operationGroupsBuilder_ == null) {
        return java.util.Collections.unmodifiableList(operationGroups_);
      } else {
        return operationGroupsBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public int getOperationGroupsCount() {
      if (operationGroupsBuilder_ == null) {
        return operationGroups_.size();
      } else {
        return operationGroupsBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public com.google.cloud.recommender.v1beta1.OperationGroup getOperationGroups(int index) {
      if (operationGroupsBuilder_ == null) {
        return operationGroups_.get(index);
      } else {
        return operationGroupsBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder setOperationGroups(
        int index, com.google.cloud.recommender.v1beta1.OperationGroup value) {
      if (operationGroupsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureOperationGroupsIsMutable();
        operationGroups_.set(index, value);
        onChanged();
      } else {
        operationGroupsBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder setOperationGroups(
        int index, com.google.cloud.recommender.v1beta1.OperationGroup.Builder builderForValue) {
      if (operationGroupsBuilder_ == null) {
        ensureOperationGroupsIsMutable();
        operationGroups_.set(index, builderForValue.build());
        onChanged();
      } else {
        operationGroupsBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder addOperationGroups(com.google.cloud.recommender.v1beta1.OperationGroup value) {
      if (operationGroupsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureOperationGroupsIsMutable();
        operationGroups_.add(value);
        onChanged();
      } else {
        operationGroupsBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder addOperationGroups(
        int index, com.google.cloud.recommender.v1beta1.OperationGroup value) {
      if (operationGroupsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureOperationGroupsIsMutable();
        operationGroups_.add(index, value);
        onChanged();
      } else {
        operationGroupsBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder addOperationGroups(
        com.google.cloud.recommender.v1beta1.OperationGroup.Builder builderForValue) {
      if (operationGroupsBuilder_ == null) {
        ensureOperationGroupsIsMutable();
        operationGroups_.add(builderForValue.build());
        onChanged();
      } else {
        operationGroupsBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder addOperationGroups(
        int index, com.google.cloud.recommender.v1beta1.OperationGroup.Builder builderForValue) {
      if (operationGroupsBuilder_ == null) {
        ensureOperationGroupsIsMutable();
        operationGroups_.add(index, builderForValue.build());
        onChanged();
      } else {
        operationGroupsBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder addAllOperationGroups(
        java.lang.Iterable<? extends com.google.cloud.recommender.v1beta1.OperationGroup> values) {
      if (operationGroupsBuilder_ == null) {
        ensureOperationGroupsIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, operationGroups_);
        onChanged();
      } else {
        operationGroupsBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder clearOperationGroups() {
      if (operationGroupsBuilder_ == null) {
        operationGroups_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        operationGroupsBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public Builder removeOperationGroups(int index) {
      if (operationGroupsBuilder_ == null) {
        ensureOperationGroupsIsMutable();
        operationGroups_.remove(index);
        onChanged();
      } else {
        operationGroupsBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public com.google.cloud.recommender.v1beta1.OperationGroup.Builder getOperationGroupsBuilder(
        int index) {
      return getOperationGroupsFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public com.google.cloud.recommender.v1beta1.OperationGroupOrBuilder getOperationGroupsOrBuilder(
        int index) {
      if (operationGroupsBuilder_ == null) {
        return operationGroups_.get(index);  } else {
        return operationGroupsBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public java.util.List<? extends com.google.cloud.recommender.v1beta1.OperationGroupOrBuilder> 
         getOperationGroupsOrBuilderList() {
      if (operationGroupsBuilder_ != null) {
        return operationGroupsBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(operationGroups_);
      }
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public com.google.cloud.recommender.v1beta1.OperationGroup.Builder addOperationGroupsBuilder() {
      return getOperationGroupsFieldBuilder().addBuilder(
          com.google.cloud.recommender.v1beta1.OperationGroup.getDefaultInstance());
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public com.google.cloud.recommender.v1beta1.OperationGroup.Builder addOperationGroupsBuilder(
        int index) {
      return getOperationGroupsFieldBuilder().addBuilder(
          index, com.google.cloud.recommender.v1beta1.OperationGroup.getDefaultInstance());
    }
    /**
     * <pre>
     * Operations to one or more Google Cloud resources grouped in such a way
     * that, all operations within one group are expected to be performed
     * atomically and in an order.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1beta1.OperationGroup operation_groups = 2;</code>
     */
    public java.util.List<com.google.cloud.recommender.v1beta1.OperationGroup.Builder> 
         getOperationGroupsBuilderList() {
      return getOperationGroupsFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.recommender.v1beta1.OperationGroup, com.google.cloud.recommender.v1beta1.OperationGroup.Builder, com.google.cloud.recommender.v1beta1.OperationGroupOrBuilder> 
        getOperationGroupsFieldBuilder() {
      if (operationGroupsBuilder_ == null) {
        operationGroupsBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.cloud.recommender.v1beta1.OperationGroup, com.google.cloud.recommender.v1beta1.OperationGroup.Builder, com.google.cloud.recommender.v1beta1.OperationGroupOrBuilder>(
                operationGroups_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        operationGroups_ = null;
      }
      return operationGroupsBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.recommender.v1beta1.RecommendationContent)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.recommender.v1beta1.RecommendationContent)
  private static final com.google.cloud.recommender.v1beta1.RecommendationContent DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.recommender.v1beta1.RecommendationContent();
  }

  public static com.google.cloud.recommender.v1beta1.RecommendationContent getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<RecommendationContent>
      PARSER = new com.google.protobuf.AbstractParser<RecommendationContent>() {
    @java.lang.Override
    public RecommendationContent parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new RecommendationContent(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<RecommendationContent> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<RecommendationContent> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.recommender.v1beta1.RecommendationContent getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

