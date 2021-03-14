// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/appengine/v1/audit_data.proto

package com.google.appengine.v1;

/**
 * <pre>
 * App Engine admin service audit log.
 * </pre>
 *
 * Protobuf type {@code google.appengine.v1.AuditData}
 */
public final class AuditData extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.appengine.v1.AuditData)
    AuditDataOrBuilder {
private static final long serialVersionUID = 0L;
  // Use AuditData.newBuilder() to construct.
  private AuditData(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private AuditData() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new AuditData();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private AuditData(
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
            com.google.appengine.v1.UpdateServiceMethod.Builder subBuilder = null;
            if (methodCase_ == 1) {
              subBuilder = ((com.google.appengine.v1.UpdateServiceMethod) method_).toBuilder();
            }
            method_ =
                input.readMessage(com.google.appengine.v1.UpdateServiceMethod.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom((com.google.appengine.v1.UpdateServiceMethod) method_);
              method_ = subBuilder.buildPartial();
            }
            methodCase_ = 1;
            break;
          }
          case 18: {
            com.google.appengine.v1.CreateVersionMethod.Builder subBuilder = null;
            if (methodCase_ == 2) {
              subBuilder = ((com.google.appengine.v1.CreateVersionMethod) method_).toBuilder();
            }
            method_ =
                input.readMessage(com.google.appengine.v1.CreateVersionMethod.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom((com.google.appengine.v1.CreateVersionMethod) method_);
              method_ = subBuilder.buildPartial();
            }
            methodCase_ = 2;
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
    return com.google.appengine.v1.AuditDataProto.internal_static_google_appengine_v1_AuditData_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.appengine.v1.AuditDataProto.internal_static_google_appengine_v1_AuditData_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.appengine.v1.AuditData.class, com.google.appengine.v1.AuditData.Builder.class);
  }

  private int methodCase_ = 0;
  private java.lang.Object method_;
  public enum MethodCase
      implements com.google.protobuf.Internal.EnumLite,
          com.google.protobuf.AbstractMessage.InternalOneOfEnum {
    UPDATE_SERVICE(1),
    CREATE_VERSION(2),
    METHOD_NOT_SET(0);
    private final int value;
    private MethodCase(int value) {
      this.value = value;
    }
    /**
     * @param value The number of the enum to look for.
     * @return The enum associated with the given number.
     * @deprecated Use {@link #forNumber(int)} instead.
     */
    @java.lang.Deprecated
    public static MethodCase valueOf(int value) {
      return forNumber(value);
    }

    public static MethodCase forNumber(int value) {
      switch (value) {
        case 1: return UPDATE_SERVICE;
        case 2: return CREATE_VERSION;
        case 0: return METHOD_NOT_SET;
        default: return null;
      }
    }
    public int getNumber() {
      return this.value;
    }
  };

  public MethodCase
  getMethodCase() {
    return MethodCase.forNumber(
        methodCase_);
  }

  public static final int UPDATE_SERVICE_FIELD_NUMBER = 1;
  /**
   * <pre>
   * Detailed information about UpdateService call.
   * </pre>
   *
   * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
   * @return Whether the updateService field is set.
   */
  @java.lang.Override
  public boolean hasUpdateService() {
    return methodCase_ == 1;
  }
  /**
   * <pre>
   * Detailed information about UpdateService call.
   * </pre>
   *
   * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
   * @return The updateService.
   */
  @java.lang.Override
  public com.google.appengine.v1.UpdateServiceMethod getUpdateService() {
    if (methodCase_ == 1) {
       return (com.google.appengine.v1.UpdateServiceMethod) method_;
    }
    return com.google.appengine.v1.UpdateServiceMethod.getDefaultInstance();
  }
  /**
   * <pre>
   * Detailed information about UpdateService call.
   * </pre>
   *
   * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
   */
  @java.lang.Override
  public com.google.appengine.v1.UpdateServiceMethodOrBuilder getUpdateServiceOrBuilder() {
    if (methodCase_ == 1) {
       return (com.google.appengine.v1.UpdateServiceMethod) method_;
    }
    return com.google.appengine.v1.UpdateServiceMethod.getDefaultInstance();
  }

  public static final int CREATE_VERSION_FIELD_NUMBER = 2;
  /**
   * <pre>
   * Detailed information about CreateVersion call.
   * </pre>
   *
   * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
   * @return Whether the createVersion field is set.
   */
  @java.lang.Override
  public boolean hasCreateVersion() {
    return methodCase_ == 2;
  }
  /**
   * <pre>
   * Detailed information about CreateVersion call.
   * </pre>
   *
   * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
   * @return The createVersion.
   */
  @java.lang.Override
  public com.google.appengine.v1.CreateVersionMethod getCreateVersion() {
    if (methodCase_ == 2) {
       return (com.google.appengine.v1.CreateVersionMethod) method_;
    }
    return com.google.appengine.v1.CreateVersionMethod.getDefaultInstance();
  }
  /**
   * <pre>
   * Detailed information about CreateVersion call.
   * </pre>
   *
   * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
   */
  @java.lang.Override
  public com.google.appengine.v1.CreateVersionMethodOrBuilder getCreateVersionOrBuilder() {
    if (methodCase_ == 2) {
       return (com.google.appengine.v1.CreateVersionMethod) method_;
    }
    return com.google.appengine.v1.CreateVersionMethod.getDefaultInstance();
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
    if (methodCase_ == 1) {
      output.writeMessage(1, (com.google.appengine.v1.UpdateServiceMethod) method_);
    }
    if (methodCase_ == 2) {
      output.writeMessage(2, (com.google.appengine.v1.CreateVersionMethod) method_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (methodCase_ == 1) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, (com.google.appengine.v1.UpdateServiceMethod) method_);
    }
    if (methodCase_ == 2) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, (com.google.appengine.v1.CreateVersionMethod) method_);
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
    if (!(obj instanceof com.google.appengine.v1.AuditData)) {
      return super.equals(obj);
    }
    com.google.appengine.v1.AuditData other = (com.google.appengine.v1.AuditData) obj;

    if (!getMethodCase().equals(other.getMethodCase())) return false;
    switch (methodCase_) {
      case 1:
        if (!getUpdateService()
            .equals(other.getUpdateService())) return false;
        break;
      case 2:
        if (!getCreateVersion()
            .equals(other.getCreateVersion())) return false;
        break;
      case 0:
      default:
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
    switch (methodCase_) {
      case 1:
        hash = (37 * hash) + UPDATE_SERVICE_FIELD_NUMBER;
        hash = (53 * hash) + getUpdateService().hashCode();
        break;
      case 2:
        hash = (37 * hash) + CREATE_VERSION_FIELD_NUMBER;
        hash = (53 * hash) + getCreateVersion().hashCode();
        break;
      case 0:
      default:
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.appengine.v1.AuditData parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.appengine.v1.AuditData parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.appengine.v1.AuditData parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.appengine.v1.AuditData parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.appengine.v1.AuditData parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.appengine.v1.AuditData parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.appengine.v1.AuditData parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.appengine.v1.AuditData parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.appengine.v1.AuditData parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.appengine.v1.AuditData parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.appengine.v1.AuditData parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.appengine.v1.AuditData parseFrom(
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
  public static Builder newBuilder(com.google.appengine.v1.AuditData prototype) {
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
   * App Engine admin service audit log.
   * </pre>
   *
   * Protobuf type {@code google.appengine.v1.AuditData}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.appengine.v1.AuditData)
      com.google.appengine.v1.AuditDataOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.appengine.v1.AuditDataProto.internal_static_google_appengine_v1_AuditData_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.appengine.v1.AuditDataProto.internal_static_google_appengine_v1_AuditData_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.appengine.v1.AuditData.class, com.google.appengine.v1.AuditData.Builder.class);
    }

    // Construct using com.google.appengine.v1.AuditData.newBuilder()
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
      methodCase_ = 0;
      method_ = null;
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.appengine.v1.AuditDataProto.internal_static_google_appengine_v1_AuditData_descriptor;
    }

    @java.lang.Override
    public com.google.appengine.v1.AuditData getDefaultInstanceForType() {
      return com.google.appengine.v1.AuditData.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.appengine.v1.AuditData build() {
      com.google.appengine.v1.AuditData result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.appengine.v1.AuditData buildPartial() {
      com.google.appengine.v1.AuditData result = new com.google.appengine.v1.AuditData(this);
      if (methodCase_ == 1) {
        if (updateServiceBuilder_ == null) {
          result.method_ = method_;
        } else {
          result.method_ = updateServiceBuilder_.build();
        }
      }
      if (methodCase_ == 2) {
        if (createVersionBuilder_ == null) {
          result.method_ = method_;
        } else {
          result.method_ = createVersionBuilder_.build();
        }
      }
      result.methodCase_ = methodCase_;
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
      if (other instanceof com.google.appengine.v1.AuditData) {
        return mergeFrom((com.google.appengine.v1.AuditData)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.appengine.v1.AuditData other) {
      if (other == com.google.appengine.v1.AuditData.getDefaultInstance()) return this;
      switch (other.getMethodCase()) {
        case UPDATE_SERVICE: {
          mergeUpdateService(other.getUpdateService());
          break;
        }
        case CREATE_VERSION: {
          mergeCreateVersion(other.getCreateVersion());
          break;
        }
        case METHOD_NOT_SET: {
          break;
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
      com.google.appengine.v1.AuditData parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.appengine.v1.AuditData) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int methodCase_ = 0;
    private java.lang.Object method_;
    public MethodCase
        getMethodCase() {
      return MethodCase.forNumber(
          methodCase_);
    }

    public Builder clearMethod() {
      methodCase_ = 0;
      method_ = null;
      onChanged();
      return this;
    }


    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.appengine.v1.UpdateServiceMethod, com.google.appengine.v1.UpdateServiceMethod.Builder, com.google.appengine.v1.UpdateServiceMethodOrBuilder> updateServiceBuilder_;
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     * @return Whether the updateService field is set.
     */
    @java.lang.Override
    public boolean hasUpdateService() {
      return methodCase_ == 1;
    }
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     * @return The updateService.
     */
    @java.lang.Override
    public com.google.appengine.v1.UpdateServiceMethod getUpdateService() {
      if (updateServiceBuilder_ == null) {
        if (methodCase_ == 1) {
          return (com.google.appengine.v1.UpdateServiceMethod) method_;
        }
        return com.google.appengine.v1.UpdateServiceMethod.getDefaultInstance();
      } else {
        if (methodCase_ == 1) {
          return updateServiceBuilder_.getMessage();
        }
        return com.google.appengine.v1.UpdateServiceMethod.getDefaultInstance();
      }
    }
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     */
    public Builder setUpdateService(com.google.appengine.v1.UpdateServiceMethod value) {
      if (updateServiceBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        method_ = value;
        onChanged();
      } else {
        updateServiceBuilder_.setMessage(value);
      }
      methodCase_ = 1;
      return this;
    }
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     */
    public Builder setUpdateService(
        com.google.appengine.v1.UpdateServiceMethod.Builder builderForValue) {
      if (updateServiceBuilder_ == null) {
        method_ = builderForValue.build();
        onChanged();
      } else {
        updateServiceBuilder_.setMessage(builderForValue.build());
      }
      methodCase_ = 1;
      return this;
    }
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     */
    public Builder mergeUpdateService(com.google.appengine.v1.UpdateServiceMethod value) {
      if (updateServiceBuilder_ == null) {
        if (methodCase_ == 1 &&
            method_ != com.google.appengine.v1.UpdateServiceMethod.getDefaultInstance()) {
          method_ = com.google.appengine.v1.UpdateServiceMethod.newBuilder((com.google.appengine.v1.UpdateServiceMethod) method_)
              .mergeFrom(value).buildPartial();
        } else {
          method_ = value;
        }
        onChanged();
      } else {
        if (methodCase_ == 1) {
          updateServiceBuilder_.mergeFrom(value);
        }
        updateServiceBuilder_.setMessage(value);
      }
      methodCase_ = 1;
      return this;
    }
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     */
    public Builder clearUpdateService() {
      if (updateServiceBuilder_ == null) {
        if (methodCase_ == 1) {
          methodCase_ = 0;
          method_ = null;
          onChanged();
        }
      } else {
        if (methodCase_ == 1) {
          methodCase_ = 0;
          method_ = null;
        }
        updateServiceBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     */
    public com.google.appengine.v1.UpdateServiceMethod.Builder getUpdateServiceBuilder() {
      return getUpdateServiceFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     */
    @java.lang.Override
    public com.google.appengine.v1.UpdateServiceMethodOrBuilder getUpdateServiceOrBuilder() {
      if ((methodCase_ == 1) && (updateServiceBuilder_ != null)) {
        return updateServiceBuilder_.getMessageOrBuilder();
      } else {
        if (methodCase_ == 1) {
          return (com.google.appengine.v1.UpdateServiceMethod) method_;
        }
        return com.google.appengine.v1.UpdateServiceMethod.getDefaultInstance();
      }
    }
    /**
     * <pre>
     * Detailed information about UpdateService call.
     * </pre>
     *
     * <code>.google.appengine.v1.UpdateServiceMethod update_service = 1;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.appengine.v1.UpdateServiceMethod, com.google.appengine.v1.UpdateServiceMethod.Builder, com.google.appengine.v1.UpdateServiceMethodOrBuilder> 
        getUpdateServiceFieldBuilder() {
      if (updateServiceBuilder_ == null) {
        if (!(methodCase_ == 1)) {
          method_ = com.google.appengine.v1.UpdateServiceMethod.getDefaultInstance();
        }
        updateServiceBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.appengine.v1.UpdateServiceMethod, com.google.appengine.v1.UpdateServiceMethod.Builder, com.google.appengine.v1.UpdateServiceMethodOrBuilder>(
                (com.google.appengine.v1.UpdateServiceMethod) method_,
                getParentForChildren(),
                isClean());
        method_ = null;
      }
      methodCase_ = 1;
      onChanged();;
      return updateServiceBuilder_;
    }

    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.appengine.v1.CreateVersionMethod, com.google.appengine.v1.CreateVersionMethod.Builder, com.google.appengine.v1.CreateVersionMethodOrBuilder> createVersionBuilder_;
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     * @return Whether the createVersion field is set.
     */
    @java.lang.Override
    public boolean hasCreateVersion() {
      return methodCase_ == 2;
    }
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     * @return The createVersion.
     */
    @java.lang.Override
    public com.google.appengine.v1.CreateVersionMethod getCreateVersion() {
      if (createVersionBuilder_ == null) {
        if (methodCase_ == 2) {
          return (com.google.appengine.v1.CreateVersionMethod) method_;
        }
        return com.google.appengine.v1.CreateVersionMethod.getDefaultInstance();
      } else {
        if (methodCase_ == 2) {
          return createVersionBuilder_.getMessage();
        }
        return com.google.appengine.v1.CreateVersionMethod.getDefaultInstance();
      }
    }
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     */
    public Builder setCreateVersion(com.google.appengine.v1.CreateVersionMethod value) {
      if (createVersionBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        method_ = value;
        onChanged();
      } else {
        createVersionBuilder_.setMessage(value);
      }
      methodCase_ = 2;
      return this;
    }
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     */
    public Builder setCreateVersion(
        com.google.appengine.v1.CreateVersionMethod.Builder builderForValue) {
      if (createVersionBuilder_ == null) {
        method_ = builderForValue.build();
        onChanged();
      } else {
        createVersionBuilder_.setMessage(builderForValue.build());
      }
      methodCase_ = 2;
      return this;
    }
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     */
    public Builder mergeCreateVersion(com.google.appengine.v1.CreateVersionMethod value) {
      if (createVersionBuilder_ == null) {
        if (methodCase_ == 2 &&
            method_ != com.google.appengine.v1.CreateVersionMethod.getDefaultInstance()) {
          method_ = com.google.appengine.v1.CreateVersionMethod.newBuilder((com.google.appengine.v1.CreateVersionMethod) method_)
              .mergeFrom(value).buildPartial();
        } else {
          method_ = value;
        }
        onChanged();
      } else {
        if (methodCase_ == 2) {
          createVersionBuilder_.mergeFrom(value);
        }
        createVersionBuilder_.setMessage(value);
      }
      methodCase_ = 2;
      return this;
    }
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     */
    public Builder clearCreateVersion() {
      if (createVersionBuilder_ == null) {
        if (methodCase_ == 2) {
          methodCase_ = 0;
          method_ = null;
          onChanged();
        }
      } else {
        if (methodCase_ == 2) {
          methodCase_ = 0;
          method_ = null;
        }
        createVersionBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     */
    public com.google.appengine.v1.CreateVersionMethod.Builder getCreateVersionBuilder() {
      return getCreateVersionFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     */
    @java.lang.Override
    public com.google.appengine.v1.CreateVersionMethodOrBuilder getCreateVersionOrBuilder() {
      if ((methodCase_ == 2) && (createVersionBuilder_ != null)) {
        return createVersionBuilder_.getMessageOrBuilder();
      } else {
        if (methodCase_ == 2) {
          return (com.google.appengine.v1.CreateVersionMethod) method_;
        }
        return com.google.appengine.v1.CreateVersionMethod.getDefaultInstance();
      }
    }
    /**
     * <pre>
     * Detailed information about CreateVersion call.
     * </pre>
     *
     * <code>.google.appengine.v1.CreateVersionMethod create_version = 2;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.appengine.v1.CreateVersionMethod, com.google.appengine.v1.CreateVersionMethod.Builder, com.google.appengine.v1.CreateVersionMethodOrBuilder> 
        getCreateVersionFieldBuilder() {
      if (createVersionBuilder_ == null) {
        if (!(methodCase_ == 2)) {
          method_ = com.google.appengine.v1.CreateVersionMethod.getDefaultInstance();
        }
        createVersionBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.appengine.v1.CreateVersionMethod, com.google.appengine.v1.CreateVersionMethod.Builder, com.google.appengine.v1.CreateVersionMethodOrBuilder>(
                (com.google.appengine.v1.CreateVersionMethod) method_,
                getParentForChildren(),
                isClean());
        method_ = null;
      }
      methodCase_ = 2;
      onChanged();;
      return createVersionBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.appengine.v1.AuditData)
  }

  // @@protoc_insertion_point(class_scope:google.appengine.v1.AuditData)
  private static final com.google.appengine.v1.AuditData DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.appengine.v1.AuditData();
  }

  public static com.google.appengine.v1.AuditData getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<AuditData>
      PARSER = new com.google.protobuf.AbstractParser<AuditData>() {
    @java.lang.Override
    public AuditData parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new AuditData(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<AuditData> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<AuditData> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.appengine.v1.AuditData getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

