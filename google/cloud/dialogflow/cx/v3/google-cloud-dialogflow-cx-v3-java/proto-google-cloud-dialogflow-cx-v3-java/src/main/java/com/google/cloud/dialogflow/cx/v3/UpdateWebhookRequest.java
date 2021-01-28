// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dialogflow/cx/v3/webhook.proto

package com.google.cloud.dialogflow.cx.v3;

/**
 * <pre>
 * The request message for [Webhooks.UpdateWebhook][google.cloud.dialogflow.cx.v3.Webhooks.UpdateWebhook].
 * </pre>
 *
 * Protobuf type {@code google.cloud.dialogflow.cx.v3.UpdateWebhookRequest}
 */
public final class UpdateWebhookRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.dialogflow.cx.v3.UpdateWebhookRequest)
    UpdateWebhookRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use UpdateWebhookRequest.newBuilder() to construct.
  private UpdateWebhookRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private UpdateWebhookRequest() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new UpdateWebhookRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private UpdateWebhookRequest(
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
            com.google.cloud.dialogflow.cx.v3.Webhook.Builder subBuilder = null;
            if (webhook_ != null) {
              subBuilder = webhook_.toBuilder();
            }
            webhook_ = input.readMessage(com.google.cloud.dialogflow.cx.v3.Webhook.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(webhook_);
              webhook_ = subBuilder.buildPartial();
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
    return com.google.cloud.dialogflow.cx.v3.WebhookProto.internal_static_google_cloud_dialogflow_cx_v3_UpdateWebhookRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.dialogflow.cx.v3.WebhookProto.internal_static_google_cloud_dialogflow_cx_v3_UpdateWebhookRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest.class, com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest.Builder.class);
  }

  public static final int WEBHOOK_FIELD_NUMBER = 1;
  private com.google.cloud.dialogflow.cx.v3.Webhook webhook_;
  /**
   * <pre>
   * Required. The webhook to update.
   * </pre>
   *
   * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the webhook field is set.
   */
  @java.lang.Override
  public boolean hasWebhook() {
    return webhook_ != null;
  }
  /**
   * <pre>
   * Required. The webhook to update.
   * </pre>
   *
   * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The webhook.
   */
  @java.lang.Override
  public com.google.cloud.dialogflow.cx.v3.Webhook getWebhook() {
    return webhook_ == null ? com.google.cloud.dialogflow.cx.v3.Webhook.getDefaultInstance() : webhook_;
  }
  /**
   * <pre>
   * Required. The webhook to update.
   * </pre>
   *
   * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.cloud.dialogflow.cx.v3.WebhookOrBuilder getWebhookOrBuilder() {
    return getWebhook();
  }

  public static final int UPDATE_MASK_FIELD_NUMBER = 2;
  private com.google.protobuf.FieldMask updateMask_;
  /**
   * <pre>
   * The mask to control which fields get updated. If the mask is not present,
   * all fields will be updated.
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
   * The mask to control which fields get updated. If the mask is not present,
   * all fields will be updated.
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
   * The mask to control which fields get updated. If the mask is not present,
   * all fields will be updated.
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
    if (webhook_ != null) {
      output.writeMessage(1, getWebhook());
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
    if (webhook_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getWebhook());
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
    if (!(obj instanceof com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest other = (com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest) obj;

    if (hasWebhook() != other.hasWebhook()) return false;
    if (hasWebhook()) {
      if (!getWebhook()
          .equals(other.getWebhook())) return false;
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
    if (hasWebhook()) {
      hash = (37 * hash) + WEBHOOK_FIELD_NUMBER;
      hash = (53 * hash) + getWebhook().hashCode();
    }
    if (hasUpdateMask()) {
      hash = (37 * hash) + UPDATE_MASK_FIELD_NUMBER;
      hash = (53 * hash) + getUpdateMask().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parseFrom(
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
  public static Builder newBuilder(com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest prototype) {
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
   * The request message for [Webhooks.UpdateWebhook][google.cloud.dialogflow.cx.v3.Webhooks.UpdateWebhook].
   * </pre>
   *
   * Protobuf type {@code google.cloud.dialogflow.cx.v3.UpdateWebhookRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.dialogflow.cx.v3.UpdateWebhookRequest)
      com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.dialogflow.cx.v3.WebhookProto.internal_static_google_cloud_dialogflow_cx_v3_UpdateWebhookRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.dialogflow.cx.v3.WebhookProto.internal_static_google_cloud_dialogflow_cx_v3_UpdateWebhookRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest.class, com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest.Builder.class);
    }

    // Construct using com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest.newBuilder()
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
      if (webhookBuilder_ == null) {
        webhook_ = null;
      } else {
        webhook_ = null;
        webhookBuilder_ = null;
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
      return com.google.cloud.dialogflow.cx.v3.WebhookProto.internal_static_google_cloud_dialogflow_cx_v3_UpdateWebhookRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest getDefaultInstanceForType() {
      return com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest build() {
      com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest buildPartial() {
      com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest result = new com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest(this);
      if (webhookBuilder_ == null) {
        result.webhook_ = webhook_;
      } else {
        result.webhook_ = webhookBuilder_.build();
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
      if (other instanceof com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest) {
        return mergeFrom((com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest other) {
      if (other == com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest.getDefaultInstance()) return this;
      if (other.hasWebhook()) {
        mergeWebhook(other.getWebhook());
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
      com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.cloud.dialogflow.cx.v3.Webhook webhook_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.dialogflow.cx.v3.Webhook, com.google.cloud.dialogflow.cx.v3.Webhook.Builder, com.google.cloud.dialogflow.cx.v3.WebhookOrBuilder> webhookBuilder_;
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Whether the webhook field is set.
     */
    public boolean hasWebhook() {
      return webhookBuilder_ != null || webhook_ != null;
    }
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The webhook.
     */
    public com.google.cloud.dialogflow.cx.v3.Webhook getWebhook() {
      if (webhookBuilder_ == null) {
        return webhook_ == null ? com.google.cloud.dialogflow.cx.v3.Webhook.getDefaultInstance() : webhook_;
      } else {
        return webhookBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setWebhook(com.google.cloud.dialogflow.cx.v3.Webhook value) {
      if (webhookBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        webhook_ = value;
        onChanged();
      } else {
        webhookBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setWebhook(
        com.google.cloud.dialogflow.cx.v3.Webhook.Builder builderForValue) {
      if (webhookBuilder_ == null) {
        webhook_ = builderForValue.build();
        onChanged();
      } else {
        webhookBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder mergeWebhook(com.google.cloud.dialogflow.cx.v3.Webhook value) {
      if (webhookBuilder_ == null) {
        if (webhook_ != null) {
          webhook_ =
            com.google.cloud.dialogflow.cx.v3.Webhook.newBuilder(webhook_).mergeFrom(value).buildPartial();
        } else {
          webhook_ = value;
        }
        onChanged();
      } else {
        webhookBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder clearWebhook() {
      if (webhookBuilder_ == null) {
        webhook_ = null;
        onChanged();
      } else {
        webhook_ = null;
        webhookBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.dialogflow.cx.v3.Webhook.Builder getWebhookBuilder() {
      
      onChanged();
      return getWebhookFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.dialogflow.cx.v3.WebhookOrBuilder getWebhookOrBuilder() {
      if (webhookBuilder_ != null) {
        return webhookBuilder_.getMessageOrBuilder();
      } else {
        return webhook_ == null ?
            com.google.cloud.dialogflow.cx.v3.Webhook.getDefaultInstance() : webhook_;
      }
    }
    /**
     * <pre>
     * Required. The webhook to update.
     * </pre>
     *
     * <code>.google.cloud.dialogflow.cx.v3.Webhook webhook = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.dialogflow.cx.v3.Webhook, com.google.cloud.dialogflow.cx.v3.Webhook.Builder, com.google.cloud.dialogflow.cx.v3.WebhookOrBuilder> 
        getWebhookFieldBuilder() {
      if (webhookBuilder_ == null) {
        webhookBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.dialogflow.cx.v3.Webhook, com.google.cloud.dialogflow.cx.v3.Webhook.Builder, com.google.cloud.dialogflow.cx.v3.WebhookOrBuilder>(
                getWebhook(),
                getParentForChildren(),
                isClean());
        webhook_ = null;
      }
      return webhookBuilder_;
    }

    private com.google.protobuf.FieldMask updateMask_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.FieldMask, com.google.protobuf.FieldMask.Builder, com.google.protobuf.FieldMaskOrBuilder> updateMaskBuilder_;
    /**
     * <pre>
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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
     * The mask to control which fields get updated. If the mask is not present,
     * all fields will be updated.
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


    // @@protoc_insertion_point(builder_scope:google.cloud.dialogflow.cx.v3.UpdateWebhookRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.dialogflow.cx.v3.UpdateWebhookRequest)
  private static final com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest();
  }

  public static com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<UpdateWebhookRequest>
      PARSER = new com.google.protobuf.AbstractParser<UpdateWebhookRequest>() {
    @java.lang.Override
    public UpdateWebhookRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new UpdateWebhookRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<UpdateWebhookRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<UpdateWebhookRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.dialogflow.cx.v3.UpdateWebhookRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

