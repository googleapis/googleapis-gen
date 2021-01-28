// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/servicedirectory/v1beta1/registration_service.proto

package com.google.cloud.servicedirectory.v1beta1;

/**
 * <pre>
 * The request message for [RegistrationService.UpdateService][google.cloud.servicedirectory.v1beta1.RegistrationService.UpdateService].
 * </pre>
 *
 * Protobuf type {@code google.cloud.servicedirectory.v1beta1.UpdateServiceRequest}
 */
public final class UpdateServiceRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.servicedirectory.v1beta1.UpdateServiceRequest)
    UpdateServiceRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use UpdateServiceRequest.newBuilder() to construct.
  private UpdateServiceRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private UpdateServiceRequest() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new UpdateServiceRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private UpdateServiceRequest(
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
            com.google.cloud.servicedirectory.v1beta1.Service.Builder subBuilder = null;
            if (service_ != null) {
              subBuilder = service_.toBuilder();
            }
            service_ = input.readMessage(com.google.cloud.servicedirectory.v1beta1.Service.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(service_);
              service_ = subBuilder.buildPartial();
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
    return com.google.cloud.servicedirectory.v1beta1.RegistrationServiceProto.internal_static_google_cloud_servicedirectory_v1beta1_UpdateServiceRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.servicedirectory.v1beta1.RegistrationServiceProto.internal_static_google_cloud_servicedirectory_v1beta1_UpdateServiceRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest.class, com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest.Builder.class);
  }

  public static final int SERVICE_FIELD_NUMBER = 1;
  private com.google.cloud.servicedirectory.v1beta1.Service service_;
  /**
   * <pre>
   * Required. The updated service.
   * </pre>
   *
   * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the service field is set.
   */
  @java.lang.Override
  public boolean hasService() {
    return service_ != null;
  }
  /**
   * <pre>
   * Required. The updated service.
   * </pre>
   *
   * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The service.
   */
  @java.lang.Override
  public com.google.cloud.servicedirectory.v1beta1.Service getService() {
    return service_ == null ? com.google.cloud.servicedirectory.v1beta1.Service.getDefaultInstance() : service_;
  }
  /**
   * <pre>
   * Required. The updated service.
   * </pre>
   *
   * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.cloud.servicedirectory.v1beta1.ServiceOrBuilder getServiceOrBuilder() {
    return getService();
  }

  public static final int UPDATE_MASK_FIELD_NUMBER = 2;
  private com.google.protobuf.FieldMask updateMask_;
  /**
   * <pre>
   * Required. List of fields to be updated in this request.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the updateMask field is set.
   */
  @java.lang.Override
  public boolean hasUpdateMask() {
    return updateMask_ != null;
  }
  /**
   * <pre>
   * Required. List of fields to be updated in this request.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The updateMask.
   */
  @java.lang.Override
  public com.google.protobuf.FieldMask getUpdateMask() {
    return updateMask_ == null ? com.google.protobuf.FieldMask.getDefaultInstance() : updateMask_;
  }
  /**
   * <pre>
   * Required. List of fields to be updated in this request.
   * </pre>
   *
   * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
    if (service_ != null) {
      output.writeMessage(1, getService());
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
    if (service_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getService());
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
    if (!(obj instanceof com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest other = (com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest) obj;

    if (hasService() != other.hasService()) return false;
    if (hasService()) {
      if (!getService()
          .equals(other.getService())) return false;
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
    if (hasService()) {
      hash = (37 * hash) + SERVICE_FIELD_NUMBER;
      hash = (53 * hash) + getService().hashCode();
    }
    if (hasUpdateMask()) {
      hash = (37 * hash) + UPDATE_MASK_FIELD_NUMBER;
      hash = (53 * hash) + getUpdateMask().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parseFrom(
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
  public static Builder newBuilder(com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest prototype) {
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
   * The request message for [RegistrationService.UpdateService][google.cloud.servicedirectory.v1beta1.RegistrationService.UpdateService].
   * </pre>
   *
   * Protobuf type {@code google.cloud.servicedirectory.v1beta1.UpdateServiceRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.servicedirectory.v1beta1.UpdateServiceRequest)
      com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.servicedirectory.v1beta1.RegistrationServiceProto.internal_static_google_cloud_servicedirectory_v1beta1_UpdateServiceRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.servicedirectory.v1beta1.RegistrationServiceProto.internal_static_google_cloud_servicedirectory_v1beta1_UpdateServiceRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest.class, com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest.Builder.class);
    }

    // Construct using com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest.newBuilder()
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
      if (serviceBuilder_ == null) {
        service_ = null;
      } else {
        service_ = null;
        serviceBuilder_ = null;
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
      return com.google.cloud.servicedirectory.v1beta1.RegistrationServiceProto.internal_static_google_cloud_servicedirectory_v1beta1_UpdateServiceRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest getDefaultInstanceForType() {
      return com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest build() {
      com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest buildPartial() {
      com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest result = new com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest(this);
      if (serviceBuilder_ == null) {
        result.service_ = service_;
      } else {
        result.service_ = serviceBuilder_.build();
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
      if (other instanceof com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest) {
        return mergeFrom((com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest other) {
      if (other == com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest.getDefaultInstance()) return this;
      if (other.hasService()) {
        mergeService(other.getService());
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
      com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.cloud.servicedirectory.v1beta1.Service service_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.servicedirectory.v1beta1.Service, com.google.cloud.servicedirectory.v1beta1.Service.Builder, com.google.cloud.servicedirectory.v1beta1.ServiceOrBuilder> serviceBuilder_;
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Whether the service field is set.
     */
    public boolean hasService() {
      return serviceBuilder_ != null || service_ != null;
    }
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The service.
     */
    public com.google.cloud.servicedirectory.v1beta1.Service getService() {
      if (serviceBuilder_ == null) {
        return service_ == null ? com.google.cloud.servicedirectory.v1beta1.Service.getDefaultInstance() : service_;
      } else {
        return serviceBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setService(com.google.cloud.servicedirectory.v1beta1.Service value) {
      if (serviceBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        service_ = value;
        onChanged();
      } else {
        serviceBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setService(
        com.google.cloud.servicedirectory.v1beta1.Service.Builder builderForValue) {
      if (serviceBuilder_ == null) {
        service_ = builderForValue.build();
        onChanged();
      } else {
        serviceBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder mergeService(com.google.cloud.servicedirectory.v1beta1.Service value) {
      if (serviceBuilder_ == null) {
        if (service_ != null) {
          service_ =
            com.google.cloud.servicedirectory.v1beta1.Service.newBuilder(service_).mergeFrom(value).buildPartial();
        } else {
          service_ = value;
        }
        onChanged();
      } else {
        serviceBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder clearService() {
      if (serviceBuilder_ == null) {
        service_ = null;
        onChanged();
      } else {
        service_ = null;
        serviceBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.servicedirectory.v1beta1.Service.Builder getServiceBuilder() {
      
      onChanged();
      return getServiceFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.servicedirectory.v1beta1.ServiceOrBuilder getServiceOrBuilder() {
      if (serviceBuilder_ != null) {
        return serviceBuilder_.getMessageOrBuilder();
      } else {
        return service_ == null ?
            com.google.cloud.servicedirectory.v1beta1.Service.getDefaultInstance() : service_;
      }
    }
    /**
     * <pre>
     * Required. The updated service.
     * </pre>
     *
     * <code>.google.cloud.servicedirectory.v1beta1.Service service = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.servicedirectory.v1beta1.Service, com.google.cloud.servicedirectory.v1beta1.Service.Builder, com.google.cloud.servicedirectory.v1beta1.ServiceOrBuilder> 
        getServiceFieldBuilder() {
      if (serviceBuilder_ == null) {
        serviceBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.servicedirectory.v1beta1.Service, com.google.cloud.servicedirectory.v1beta1.Service.Builder, com.google.cloud.servicedirectory.v1beta1.ServiceOrBuilder>(
                getService(),
                getParentForChildren(),
                isClean());
        service_ = null;
      }
      return serviceBuilder_;
    }

    private com.google.protobuf.FieldMask updateMask_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.protobuf.FieldMask, com.google.protobuf.FieldMask.Builder, com.google.protobuf.FieldMaskOrBuilder> updateMaskBuilder_;
    /**
     * <pre>
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Whether the updateMask field is set.
     */
    public boolean hasUpdateMask() {
      return updateMaskBuilder_ != null || updateMask_ != null;
    }
    /**
     * <pre>
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.protobuf.FieldMask.Builder getUpdateMaskBuilder() {
      
      onChanged();
      return getUpdateMaskFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. List of fields to be updated in this request.
     * </pre>
     *
     * <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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


    // @@protoc_insertion_point(builder_scope:google.cloud.servicedirectory.v1beta1.UpdateServiceRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.servicedirectory.v1beta1.UpdateServiceRequest)
  private static final com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest();
  }

  public static com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<UpdateServiceRequest>
      PARSER = new com.google.protobuf.AbstractParser<UpdateServiceRequest>() {
    @java.lang.Override
    public UpdateServiceRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new UpdateServiceRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<UpdateServiceRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<UpdateServiceRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.servicedirectory.v1beta1.UpdateServiceRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

