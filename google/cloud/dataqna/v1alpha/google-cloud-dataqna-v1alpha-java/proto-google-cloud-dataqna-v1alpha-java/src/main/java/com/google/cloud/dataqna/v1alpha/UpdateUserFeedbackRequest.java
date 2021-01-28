// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dataqna/v1alpha/question_service.proto

package com.google.cloud.dataqna.v1alpha;

/**
 * <pre>
 * Request to updates user feedback.
 * </pre>
 *
 * Protobuf type {@code google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest}
 */
public final class UpdateUserFeedbackRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest)
    UpdateUserFeedbackRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use UpdateUserFeedbackRequest.newBuilder() to construct.
  private UpdateUserFeedbackRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private UpdateUserFeedbackRequest() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new UpdateUserFeedbackRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private UpdateUserFeedbackRequest(
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
            com.google.cloud.dataqna.v1alpha.UserFeedback.Builder subBuilder = null;
            if (userFeedback_ != null) {
              subBuilder = userFeedback_.toBuilder();
            }
            userFeedback_ = input.readMessage(com.google.cloud.dataqna.v1alpha.UserFeedback.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(userFeedback_);
              userFeedback_ = subBuilder.buildPartial();
            }

            break;
          }
          case 18: {
            com.google.protobuf.FieldMask.Builder subBuilder = null;
            if (updateMask_ != null) {
              subBuilder = updateMask_.toBuilder();
            }
            updateMask_ = input.readMessage(com.google.protobuf.FieldMask.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(updateMask_);
              updateMask_ = subBuilder.buildPartial();
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
    return com.google.cloud.dataqna.v1alpha.QuestionServiceProto.internal_static_google_cloud_dataqna_v1alpha_UpdateUserFeedbackRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.dataqna.v1alpha.QuestionServiceProto.internal_static_google_cloud_dataqna_v1alpha_UpdateUserFeedbackRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest.class, com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest.Builder.class);
  }

  public static final int USER_FEEDBACK_FIELD_NUMBER = 1;
  private com.google.cloud.dataqna.v1alpha.UserFeedback userFeedback_;
  /**
   * <pre>
   * Required. The user feedback to update. This can be called even if there is no
   * user feedback so far.
   * The feedback's name field is used to identify the user feedback (and the
   * corresponding question) to update.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the userFeedback field is set.
   */
  @java.lang.Override
  public boolean hasUserFeedback() {
    return userFeedback_ != null;
  }
  /**
   * <pre>
   * Required. The user feedback to update. This can be called even if there is no
   * user feedback so far.
   * The feedback's name field is used to identify the user feedback (and the
   * corresponding question) to update.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The userFeedback.
   */
  @java.lang.Override
  public com.google.cloud.dataqna.v1alpha.UserFeedback getUserFeedback() {
    return userFeedback_ == null ? com.google.cloud.dataqna.v1alpha.UserFeedback.getDefaultInstance() : userFeedback_;
  }
  /**
   * <pre>
   * Required. The user feedback to update. This can be called even if there is no
   * user feedback so far.
   * The feedback's name field is used to identify the user feedback (and the
   * corresponding question) to update.
   * </pre>
   *
   * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.cloud.dataqna.v1alpha.UserFeedbackOrBuilder getUserFeedbackOrBuilder() {
    return getUserFeedback();
  }

  public static final int UPDATE_MASK_FIELD_NUMBER = 2;
  private com.google.protobuf.FieldMask updateMask_;
  /**
   * <pre>
   * The list of fields to be updated.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   * @return Whether the updateMask field is set.
   */
  @java.lang.Override
  public boolean hasUpdateMask() {
    return updateMask_ != null;
  }
  /**
   * <pre>
   * The list of fields to be updated.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   * @return The updateMask.
   */
  @java.lang.Override
  public com.google.protobuf.FieldMask getUpdateMask() {
    return updateMask_ == null ? com.google.protobuf.FieldMask.getDefaultInstance() : updateMask_;
  }
  /**
   * <pre>
   * The list of fields to be updated.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2;</code>
   */
  @java.lang.Override
  public com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder() {
    return getUpdateMask();
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
    if (userFeedback_ != null) {
      output.writeMessage(1, getUserFeedback());
    }
    if (updateMask_ != null) {
      output.writeMessage(2, getUpdateMask());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (userFeedback_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getUserFeedback());
    }
    if (updateMask_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, getUpdateMask());
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
    if (!(obj instanceof com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest other = (com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest) obj;

    if (hasUserFeedback() != other.hasUserFeedback()) return false;
    if (hasUserFeedback()) {
      if (!getUserFeedback()
          .equals(other.getUserFeedback())) return false;
    }
    if (hasUpdateMask() != other.hasUpdateMask()) return false;
    if (hasUpdateMask()) {
      if (!getUpdateMask()
          .equals(other.getUpdateMask())) return false;
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
    if (hasUserFeedback()) {
      hash = (37 * hash) + USER_FEEDBACK_FIELD_NUMBER;
      hash = (53 * hash) + getUserFeedback().hashCode();
    }
    if (hasUpdateMask()) {
      hash = (37 * hash) + UPDATE_MASK_FIELD_NUMBER;
      hash = (53 * hash) + getUpdateMask().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parseFrom(
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
  public static Builder newBuilder(com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest prototype) {
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
   * Request to updates user feedback.
   * </pre>
   *
   * Protobuf type {@code google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest)
      com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.dataqna.v1alpha.QuestionServiceProto.internal_static_google_cloud_dataqna_v1alpha_UpdateUserFeedbackRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.dataqna.v1alpha.QuestionServiceProto.internal_static_google_cloud_dataqna_v1alpha_UpdateUserFeedbackRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest.class, com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest.Builder.class);
    }

    // Construct using com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest.newBuilder()
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
      if (userFeedbackBuilder_ == null) {
        userFeedback_ = null;
      } else {
        userFeedback_ = null;
        userFeedbackBuilder_ = null;
      }
      if (updateMaskBuilder_ == null) {
        updateMask_ = null;
      } else {
        updateMask_ = null;
        updateMaskBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.dataqna.v1alpha.QuestionServiceProto.internal_static_google_cloud_dataqna_v1alpha_UpdateUserFeedbackRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest getDefaultInstanceForType() {
      return com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest build() {
      com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest buildPartial() {
      com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest result = new com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest(this);
      if (userFeedbackBuilder_ == null) {
        result.userFeedback_ = userFeedback_;
      } else {
        result.userFeedback_ = userFeedbackBuilder_.build();
      }
      if (updateMaskBuilder_ == null) {
        result.updateMask_ = updateMask_;
      } else {
        result.updateMask_ = updateMaskBuilder_.build();
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
      if (other instanceof com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest) {
        return mergeFrom((com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest other) {
      if (other == com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest.getDefaultInstance()) return this;
      if (other.hasUserFeedback()) {
        mergeUserFeedback(other.getUserFeedback());
      }
      if (other.hasUpdateMask()) {
        mergeUpdateMask(other.getUpdateMask());
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
      com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.cloud.dataqna.v1alpha.UserFeedback userFeedback_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.dataqna.v1alpha.UserFeedback, com.google.cloud.dataqna.v1alpha.UserFeedback.Builder, com.google.cloud.dataqna.v1alpha.UserFeedbackOrBuilder> userFeedbackBuilder_;
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Whether the userFeedback field is set.
     */
    public boolean hasUserFeedback() {
      return userFeedbackBuilder_ != null || userFeedback_ != null;
    }
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The userFeedback.
     */
    public com.google.cloud.dataqna.v1alpha.UserFeedback getUserFeedback() {
      if (userFeedbackBuilder_ == null) {
        return userFeedback_ == null ? com.google.cloud.dataqna.v1alpha.UserFeedback.getDefaultInstance() : userFeedback_;
      } else {
        return userFeedbackBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setUserFeedback(com.google.cloud.dataqna.v1alpha.UserFeedback value) {
      if (userFeedbackBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        userFeedback_ = value;
        onChanged();
      } else {
        userFeedbackBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setUserFeedback(
        com.google.cloud.dataqna.v1alpha.UserFeedback.Builder builderForValue) {
      if (userFeedbackBuilder_ == null) {
        userFeedback_ = builderForValue.build();
        onChanged();
      } else {
        userFeedbackBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder mergeUserFeedback(com.google.cloud.dataqna.v1alpha.UserFeedback value) {
      if (userFeedbackBuilder_ == null) {
        if (userFeedback_ != null) {
          userFeedback_ =
            com.google.cloud.dataqna.v1alpha.UserFeedback.newBuilder(userFeedback_).mergeFrom(value).buildPartial();
        } else {
          userFeedback_ = value;
        }
        onChanged();
      } else {
        userFeedbackBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder clearUserFeedback() {
      if (userFeedbackBuilder_ == null) {
        userFeedback_ = null;
        onChanged();
      } else {
        userFeedback_ = null;
        userFeedbackBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.dataqna.v1alpha.UserFeedback.Builder getUserFeedbackBuilder() {
      
      onChanged();
      return getUserFeedbackFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.dataqna.v1alpha.UserFeedbackOrBuilder getUserFeedbackOrBuilder() {
      if (userFeedbackBuilder_ != null) {
        return userFeedbackBuilder_.getMessageOrBuilder();
      } else {
        return userFeedback_ == null ?
            com.google.cloud.dataqna.v1alpha.UserFeedback.getDefaultInstance() : userFeedback_;
      }
    }
    /**
     * <pre>
     * Required. The user feedback to update. This can be called even if there is no
     * user feedback so far.
     * The feedback's name field is used to identify the user feedback (and the
     * corresponding question) to update.
     * </pre>
     *
     * <code>.google.cloud.dataqna.v1alpha.UserFeedback user_feedback = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.dataqna.v1alpha.UserFeedback, com.google.cloud.dataqna.v1alpha.UserFeedback.Builder, com.google.cloud.dataqna.v1alpha.UserFeedbackOrBuilder> 
        getUserFeedbackFieldBuilder() {
      if (userFeedbackBuilder_ == null) {
        userFeedbackBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.dataqna.v1alpha.UserFeedback, com.google.cloud.dataqna.v1alpha.UserFeedback.Builder, com.google.cloud.dataqna.v1alpha.UserFeedbackOrBuilder>(
                getUserFeedback(),
                getParentForChildren(),
                isClean());
        userFeedback_ = null;
      }
      return userFeedbackBuilder_;
    }

    private com.google.protobuf.FieldMask updateMask_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.FieldMask, com.google.protobuf.FieldMask.Builder, com.google.protobuf.FieldMaskOrBuilder> updateMaskBuilder_;
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return Whether the updateMask field is set.
     */
    public boolean hasUpdateMask() {
      return updateMaskBuilder_ != null || updateMask_ != null;
    }
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return The updateMask.
     */
    public com.google.protobuf.FieldMask getUpdateMask() {
      if (updateMaskBuilder_ == null) {
        return updateMask_ == null ? com.google.protobuf.FieldMask.getDefaultInstance() : updateMask_;
      } else {
        return updateMaskBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    public Builder setUpdateMask(com.google.protobuf.FieldMask value) {
      if (updateMaskBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        updateMask_ = value;
        onChanged();
      } else {
        updateMaskBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    public Builder setUpdateMask(
        com.google.protobuf.FieldMask.Builder builderForValue) {
      if (updateMaskBuilder_ == null) {
        updateMask_ = builderForValue.build();
        onChanged();
      } else {
        updateMaskBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    public Builder mergeUpdateMask(com.google.protobuf.FieldMask value) {
      if (updateMaskBuilder_ == null) {
        if (updateMask_ != null) {
          updateMask_ =
            com.google.protobuf.FieldMask.newBuilder(updateMask_).mergeFrom(value).buildPartial();
        } else {
          updateMask_ = value;
        }
        onChanged();
      } else {
        updateMaskBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    public Builder clearUpdateMask() {
      if (updateMaskBuilder_ == null) {
        updateMask_ = null;
        onChanged();
      } else {
        updateMask_ = null;
        updateMaskBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    public com.google.protobuf.FieldMask.Builder getUpdateMaskBuilder() {
      
      onChanged();
      return getUpdateMaskFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    public com.google.protobuf.FieldMaskOrBuilder getUpdateMaskOrBuilder() {
      if (updateMaskBuilder_ != null) {
        return updateMaskBuilder_.getMessageOrBuilder();
      } else {
        return updateMask_ == null ?
            com.google.protobuf.FieldMask.getDefaultInstance() : updateMask_;
      }
    }
    /**
     * <pre>
     * The list of fields to be updated.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.FieldMask, com.google.protobuf.FieldMask.Builder, com.google.protobuf.FieldMaskOrBuilder> 
        getUpdateMaskFieldBuilder() {
      if (updateMaskBuilder_ == null) {
        updateMaskBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.protobuf.FieldMask, com.google.protobuf.FieldMask.Builder, com.google.protobuf.FieldMaskOrBuilder>(
                getUpdateMask(),
                getParentForChildren(),
                isClean());
        updateMask_ = null;
      }
      return updateMaskBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest)
  private static final com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest();
  }

  public static com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<UpdateUserFeedbackRequest>
      PARSER = new com.google.protobuf.AbstractParser<UpdateUserFeedbackRequest>() {
    @java.lang.Override
    public UpdateUserFeedbackRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new UpdateUserFeedbackRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<UpdateUserFeedbackRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<UpdateUserFeedbackRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.dataqna.v1alpha.UpdateUserFeedbackRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

