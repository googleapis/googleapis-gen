// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/storage/v1/storage.proto

package com.google.storage.v1;

/**
 * <pre>
 * A wrapper around the IAM set policy request to support our
 * common_request_params.
 * </pre>
 *
 * Protobuf type {@code google.storage.v1.SetIamPolicyRequest}
 */
public final class SetIamPolicyRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.storage.v1.SetIamPolicyRequest)
    SetIamPolicyRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use SetIamPolicyRequest.newBuilder() to construct.
  private SetIamPolicyRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private SetIamPolicyRequest() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new SetIamPolicyRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private SetIamPolicyRequest(
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
            com.google.iam.v1.SetIamPolicyRequest.Builder subBuilder = null;
            if (iamRequest_ != null) {
              subBuilder = iamRequest_.toBuilder();
            }
            iamRequest_ = input.readMessage(com.google.iam.v1.SetIamPolicyRequest.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(iamRequest_);
              iamRequest_ = subBuilder.buildPartial();
            }

            break;
          }
          case 18: {
            com.google.storage.v1.CommonRequestParams.Builder subBuilder = null;
            if (commonRequestParams_ != null) {
              subBuilder = commonRequestParams_.toBuilder();
            }
            commonRequestParams_ = input.readMessage(com.google.storage.v1.CommonRequestParams.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(commonRequestParams_);
              commonRequestParams_ = subBuilder.buildPartial();
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
    return com.google.storage.v1.StorageOuterClass.internal_static_google_storage_v1_SetIamPolicyRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.storage.v1.StorageOuterClass.internal_static_google_storage_v1_SetIamPolicyRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.storage.v1.SetIamPolicyRequest.class, com.google.storage.v1.SetIamPolicyRequest.Builder.class);
  }

  public static final int IAM_REQUEST_FIELD_NUMBER = 1;
  private com.google.iam.v1.SetIamPolicyRequest iamRequest_;
  /**
   * <pre>
   * The request sent to IAM.
   * </pre>
   *
   * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
   * @return Whether the iamRequest field is set.
   */
  @java.lang.Override
  public boolean hasIamRequest() {
    return iamRequest_ != null;
  }
  /**
   * <pre>
   * The request sent to IAM.
   * </pre>
   *
   * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
   * @return The iamRequest.
   */
  @java.lang.Override
  public com.google.iam.v1.SetIamPolicyRequest getIamRequest() {
    return iamRequest_ == null ? com.google.iam.v1.SetIamPolicyRequest.getDefaultInstance() : iamRequest_;
  }
  /**
   * <pre>
   * The request sent to IAM.
   * </pre>
   *
   * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
   */
  @java.lang.Override
  public com.google.iam.v1.SetIamPolicyRequestOrBuilder getIamRequestOrBuilder() {
    return getIamRequest();
  }

  public static final int COMMON_REQUEST_PARAMS_FIELD_NUMBER = 2;
  private com.google.storage.v1.CommonRequestParams commonRequestParams_;
  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
   * @return Whether the commonRequestParams field is set.
   */
  @java.lang.Override
  public boolean hasCommonRequestParams() {
    return commonRequestParams_ != null;
  }
  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
   * @return The commonRequestParams.
   */
  @java.lang.Override
  public com.google.storage.v1.CommonRequestParams getCommonRequestParams() {
    return commonRequestParams_ == null ? com.google.storage.v1.CommonRequestParams.getDefaultInstance() : commonRequestParams_;
  }
  /**
   * <pre>
   * A set of parameters common to all Storage API requests.
   * </pre>
   *
   * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
   */
  @java.lang.Override
  public com.google.storage.v1.CommonRequestParamsOrBuilder getCommonRequestParamsOrBuilder() {
    return getCommonRequestParams();
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
    if (iamRequest_ != null) {
      output.writeMessage(1, getIamRequest());
    }
    if (commonRequestParams_ != null) {
      output.writeMessage(2, getCommonRequestParams());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (iamRequest_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getIamRequest());
    }
    if (commonRequestParams_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, getCommonRequestParams());
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
    if (!(obj instanceof com.google.storage.v1.SetIamPolicyRequest)) {
      return super.equals(obj);
    }
    com.google.storage.v1.SetIamPolicyRequest other = (com.google.storage.v1.SetIamPolicyRequest) obj;

    if (hasIamRequest() != other.hasIamRequest()) return false;
    if (hasIamRequest()) {
      if (!getIamRequest()
          .equals(other.getIamRequest())) return false;
    }
    if (hasCommonRequestParams() != other.hasCommonRequestParams()) return false;
    if (hasCommonRequestParams()) {
      if (!getCommonRequestParams()
          .equals(other.getCommonRequestParams())) return false;
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
    if (hasIamRequest()) {
      hash = (37 * hash) + IAM_REQUEST_FIELD_NUMBER;
      hash = (53 * hash) + getIamRequest().hashCode();
    }
    if (hasCommonRequestParams()) {
      hash = (37 * hash) + COMMON_REQUEST_PARAMS_FIELD_NUMBER;
      hash = (53 * hash) + getCommonRequestParams().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.storage.v1.SetIamPolicyRequest parseFrom(
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
  public static Builder newBuilder(com.google.storage.v1.SetIamPolicyRequest prototype) {
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
   * A wrapper around the IAM set policy request to support our
   * common_request_params.
   * </pre>
   *
   * Protobuf type {@code google.storage.v1.SetIamPolicyRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.storage.v1.SetIamPolicyRequest)
      com.google.storage.v1.SetIamPolicyRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.storage.v1.StorageOuterClass.internal_static_google_storage_v1_SetIamPolicyRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.storage.v1.StorageOuterClass.internal_static_google_storage_v1_SetIamPolicyRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.storage.v1.SetIamPolicyRequest.class, com.google.storage.v1.SetIamPolicyRequest.Builder.class);
    }

    // Construct using com.google.storage.v1.SetIamPolicyRequest.newBuilder()
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
      if (iamRequestBuilder_ == null) {
        iamRequest_ = null;
      } else {
        iamRequest_ = null;
        iamRequestBuilder_ = null;
      }
      if (commonRequestParamsBuilder_ == null) {
        commonRequestParams_ = null;
      } else {
        commonRequestParams_ = null;
        commonRequestParamsBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.storage.v1.StorageOuterClass.internal_static_google_storage_v1_SetIamPolicyRequest_descriptor;
    }

    @java.lang.Override
    public com.google.storage.v1.SetIamPolicyRequest getDefaultInstanceForType() {
      return com.google.storage.v1.SetIamPolicyRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.storage.v1.SetIamPolicyRequest build() {
      com.google.storage.v1.SetIamPolicyRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.storage.v1.SetIamPolicyRequest buildPartial() {
      com.google.storage.v1.SetIamPolicyRequest result = new com.google.storage.v1.SetIamPolicyRequest(this);
      if (iamRequestBuilder_ == null) {
        result.iamRequest_ = iamRequest_;
      } else {
        result.iamRequest_ = iamRequestBuilder_.build();
      }
      if (commonRequestParamsBuilder_ == null) {
        result.commonRequestParams_ = commonRequestParams_;
      } else {
        result.commonRequestParams_ = commonRequestParamsBuilder_.build();
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
      if (other instanceof com.google.storage.v1.SetIamPolicyRequest) {
        return mergeFrom((com.google.storage.v1.SetIamPolicyRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.storage.v1.SetIamPolicyRequest other) {
      if (other == com.google.storage.v1.SetIamPolicyRequest.getDefaultInstance()) return this;
      if (other.hasIamRequest()) {
        mergeIamRequest(other.getIamRequest());
      }
      if (other.hasCommonRequestParams()) {
        mergeCommonRequestParams(other.getCommonRequestParams());
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
      com.google.storage.v1.SetIamPolicyRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.storage.v1.SetIamPolicyRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private com.google.iam.v1.SetIamPolicyRequest iamRequest_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.iam.v1.SetIamPolicyRequest, com.google.iam.v1.SetIamPolicyRequest.Builder, com.google.iam.v1.SetIamPolicyRequestOrBuilder> iamRequestBuilder_;
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     * @return Whether the iamRequest field is set.
     */
    public boolean hasIamRequest() {
      return iamRequestBuilder_ != null || iamRequest_ != null;
    }
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     * @return The iamRequest.
     */
    public com.google.iam.v1.SetIamPolicyRequest getIamRequest() {
      if (iamRequestBuilder_ == null) {
        return iamRequest_ == null ? com.google.iam.v1.SetIamPolicyRequest.getDefaultInstance() : iamRequest_;
      } else {
        return iamRequestBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     */
    public Builder setIamRequest(com.google.iam.v1.SetIamPolicyRequest value) {
      if (iamRequestBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        iamRequest_ = value;
        onChanged();
      } else {
        iamRequestBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     */
    public Builder setIamRequest(
        com.google.iam.v1.SetIamPolicyRequest.Builder builderForValue) {
      if (iamRequestBuilder_ == null) {
        iamRequest_ = builderForValue.build();
        onChanged();
      } else {
        iamRequestBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     */
    public Builder mergeIamRequest(com.google.iam.v1.SetIamPolicyRequest value) {
      if (iamRequestBuilder_ == null) {
        if (iamRequest_ != null) {
          iamRequest_ =
            com.google.iam.v1.SetIamPolicyRequest.newBuilder(iamRequest_).mergeFrom(value).buildPartial();
        } else {
          iamRequest_ = value;
        }
        onChanged();
      } else {
        iamRequestBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     */
    public Builder clearIamRequest() {
      if (iamRequestBuilder_ == null) {
        iamRequest_ = null;
        onChanged();
      } else {
        iamRequest_ = null;
        iamRequestBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     */
    public com.google.iam.v1.SetIamPolicyRequest.Builder getIamRequestBuilder() {
      
      onChanged();
      return getIamRequestFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     */
    public com.google.iam.v1.SetIamPolicyRequestOrBuilder getIamRequestOrBuilder() {
      if (iamRequestBuilder_ != null) {
        return iamRequestBuilder_.getMessageOrBuilder();
      } else {
        return iamRequest_ == null ?
            com.google.iam.v1.SetIamPolicyRequest.getDefaultInstance() : iamRequest_;
      }
    }
    /**
     * <pre>
     * The request sent to IAM.
     * </pre>
     *
     * <code>.google.iam.v1.SetIamPolicyRequest iam_request = 1;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.iam.v1.SetIamPolicyRequest, com.google.iam.v1.SetIamPolicyRequest.Builder, com.google.iam.v1.SetIamPolicyRequestOrBuilder> 
        getIamRequestFieldBuilder() {
      if (iamRequestBuilder_ == null) {
        iamRequestBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.iam.v1.SetIamPolicyRequest, com.google.iam.v1.SetIamPolicyRequest.Builder, com.google.iam.v1.SetIamPolicyRequestOrBuilder>(
                getIamRequest(),
                getParentForChildren(),
                isClean());
        iamRequest_ = null;
      }
      return iamRequestBuilder_;
    }

    private com.google.storage.v1.CommonRequestParams commonRequestParams_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.storage.v1.CommonRequestParams, com.google.storage.v1.CommonRequestParams.Builder, com.google.storage.v1.CommonRequestParamsOrBuilder> commonRequestParamsBuilder_;
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     * @return Whether the commonRequestParams field is set.
     */
    public boolean hasCommonRequestParams() {
      return commonRequestParamsBuilder_ != null || commonRequestParams_ != null;
    }
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     * @return The commonRequestParams.
     */
    public com.google.storage.v1.CommonRequestParams getCommonRequestParams() {
      if (commonRequestParamsBuilder_ == null) {
        return commonRequestParams_ == null ? com.google.storage.v1.CommonRequestParams.getDefaultInstance() : commonRequestParams_;
      } else {
        return commonRequestParamsBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     */
    public Builder setCommonRequestParams(com.google.storage.v1.CommonRequestParams value) {
      if (commonRequestParamsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        commonRequestParams_ = value;
        onChanged();
      } else {
        commonRequestParamsBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     */
    public Builder setCommonRequestParams(
        com.google.storage.v1.CommonRequestParams.Builder builderForValue) {
      if (commonRequestParamsBuilder_ == null) {
        commonRequestParams_ = builderForValue.build();
        onChanged();
      } else {
        commonRequestParamsBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     */
    public Builder mergeCommonRequestParams(com.google.storage.v1.CommonRequestParams value) {
      if (commonRequestParamsBuilder_ == null) {
        if (commonRequestParams_ != null) {
          commonRequestParams_ =
            com.google.storage.v1.CommonRequestParams.newBuilder(commonRequestParams_).mergeFrom(value).buildPartial();
        } else {
          commonRequestParams_ = value;
        }
        onChanged();
      } else {
        commonRequestParamsBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     */
    public Builder clearCommonRequestParams() {
      if (commonRequestParamsBuilder_ == null) {
        commonRequestParams_ = null;
        onChanged();
      } else {
        commonRequestParams_ = null;
        commonRequestParamsBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     */
    public com.google.storage.v1.CommonRequestParams.Builder getCommonRequestParamsBuilder() {
      
      onChanged();
      return getCommonRequestParamsFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     */
    public com.google.storage.v1.CommonRequestParamsOrBuilder getCommonRequestParamsOrBuilder() {
      if (commonRequestParamsBuilder_ != null) {
        return commonRequestParamsBuilder_.getMessageOrBuilder();
      } else {
        return commonRequestParams_ == null ?
            com.google.storage.v1.CommonRequestParams.getDefaultInstance() : commonRequestParams_;
      }
    }
    /**
     * <pre>
     * A set of parameters common to all Storage API requests.
     * </pre>
     *
     * <code>.google.storage.v1.CommonRequestParams common_request_params = 2;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.storage.v1.CommonRequestParams, com.google.storage.v1.CommonRequestParams.Builder, com.google.storage.v1.CommonRequestParamsOrBuilder> 
        getCommonRequestParamsFieldBuilder() {
      if (commonRequestParamsBuilder_ == null) {
        commonRequestParamsBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.storage.v1.CommonRequestParams, com.google.storage.v1.CommonRequestParams.Builder, com.google.storage.v1.CommonRequestParamsOrBuilder>(
                getCommonRequestParams(),
                getParentForChildren(),
                isClean());
        commonRequestParams_ = null;
      }
      return commonRequestParamsBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.storage.v1.SetIamPolicyRequest)
  }

  // @@protoc_insertion_point(class_scope:google.storage.v1.SetIamPolicyRequest)
  private static final com.google.storage.v1.SetIamPolicyRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.storage.v1.SetIamPolicyRequest();
  }

  public static com.google.storage.v1.SetIamPolicyRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<SetIamPolicyRequest>
      PARSER = new com.google.protobuf.AbstractParser<SetIamPolicyRequest>() {
    @java.lang.Override
    public SetIamPolicyRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new SetIamPolicyRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<SetIamPolicyRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<SetIamPolicyRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.storage.v1.SetIamPolicyRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

