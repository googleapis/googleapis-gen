// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/bigquery/storage/v1beta2/storage.proto

package com.google.cloud.bigquery.storage.v1beta2;

/**
 * <pre>
 * Structured custom BigQuery Storage error message. The error can be attached
 * as error details in the returned rpc Status. In particular, the use of error
 * codes allows more structured error handling, and reduces the need to evaluate
 * unstructured error text strings.
 * </pre>
 *
 * Protobuf type {@code google.cloud.bigquery.storage.v1beta2.StorageError}
 */
public final class StorageError extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.bigquery.storage.v1beta2.StorageError)
    StorageErrorOrBuilder {
private static final long serialVersionUID = 0L;
  // Use StorageError.newBuilder() to construct.
  private StorageError(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private StorageError() {
    code_ = 0;
    entity_ = "";
    errorMessage_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new StorageError();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private StorageError(
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
          case 8: {
            int rawValue = input.readEnum();

            code_ = rawValue;
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            entity_ = s;
            break;
          }
          case 26: {
            java.lang.String s = input.readStringRequireUtf8();

            errorMessage_ = s;
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
    return com.google.cloud.bigquery.storage.v1beta2.StorageProto.internal_static_google_cloud_bigquery_storage_v1beta2_StorageError_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.bigquery.storage.v1beta2.StorageProto.internal_static_google_cloud_bigquery_storage_v1beta2_StorageError_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.bigquery.storage.v1beta2.StorageError.class, com.google.cloud.bigquery.storage.v1beta2.StorageError.Builder.class);
  }

  /**
   * <pre>
   * Error code for `StorageError`.
   * </pre>
   *
   * Protobuf enum {@code google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode}
   */
  public enum StorageErrorCode
      implements com.google.protobuf.ProtocolMessageEnum {
    /**
     * <pre>
     * Default error.
     * </pre>
     *
     * <code>STORAGE_ERROR_CODE_UNSPECIFIED = 0;</code>
     */
    STORAGE_ERROR_CODE_UNSPECIFIED(0),
    /**
     * <pre>
     * Table is not found in the system.
     * </pre>
     *
     * <code>TABLE_NOT_FOUND = 1;</code>
     */
    TABLE_NOT_FOUND(1),
    /**
     * <pre>
     * Stream is already committed.
     * </pre>
     *
     * <code>STREAM_ALREADY_COMMITTED = 2;</code>
     */
    STREAM_ALREADY_COMMITTED(2),
    /**
     * <pre>
     * Stream is not found.
     * </pre>
     *
     * <code>STREAM_NOT_FOUND = 3;</code>
     */
    STREAM_NOT_FOUND(3),
    /**
     * <pre>
     * Invalid Stream type.
     * For example, you try to commit a stream that is not pending.
     * </pre>
     *
     * <code>INVALID_STREAM_TYPE = 4;</code>
     */
    INVALID_STREAM_TYPE(4),
    /**
     * <pre>
     * Invalid Stream state.
     * For example, you try to commit a stream that is not finalized or is
     * garbaged.
     * </pre>
     *
     * <code>INVALID_STREAM_STATE = 5;</code>
     */
    INVALID_STREAM_STATE(5),
    /**
     * <pre>
     * Stream is finalized.
     * </pre>
     *
     * <code>STREAM_FINALIZED = 6;</code>
     */
    STREAM_FINALIZED(6),
    UNRECOGNIZED(-1),
    ;

    /**
     * <pre>
     * Default error.
     * </pre>
     *
     * <code>STORAGE_ERROR_CODE_UNSPECIFIED = 0;</code>
     */
    public static final int STORAGE_ERROR_CODE_UNSPECIFIED_VALUE = 0;
    /**
     * <pre>
     * Table is not found in the system.
     * </pre>
     *
     * <code>TABLE_NOT_FOUND = 1;</code>
     */
    public static final int TABLE_NOT_FOUND_VALUE = 1;
    /**
     * <pre>
     * Stream is already committed.
     * </pre>
     *
     * <code>STREAM_ALREADY_COMMITTED = 2;</code>
     */
    public static final int STREAM_ALREADY_COMMITTED_VALUE = 2;
    /**
     * <pre>
     * Stream is not found.
     * </pre>
     *
     * <code>STREAM_NOT_FOUND = 3;</code>
     */
    public static final int STREAM_NOT_FOUND_VALUE = 3;
    /**
     * <pre>
     * Invalid Stream type.
     * For example, you try to commit a stream that is not pending.
     * </pre>
     *
     * <code>INVALID_STREAM_TYPE = 4;</code>
     */
    public static final int INVALID_STREAM_TYPE_VALUE = 4;
    /**
     * <pre>
     * Invalid Stream state.
     * For example, you try to commit a stream that is not finalized or is
     * garbaged.
     * </pre>
     *
     * <code>INVALID_STREAM_STATE = 5;</code>
     */
    public static final int INVALID_STREAM_STATE_VALUE = 5;
    /**
     * <pre>
     * Stream is finalized.
     * </pre>
     *
     * <code>STREAM_FINALIZED = 6;</code>
     */
    public static final int STREAM_FINALIZED_VALUE = 6;


    public final int getNumber() {
      if (this == UNRECOGNIZED) {
        throw new java.lang.IllegalArgumentException(
            "Can't get the number of an unknown enum value.");
      }
      return value;
    }

    /**
     * @param value The numeric wire value of the corresponding enum entry.
     * @return The enum associated with the given numeric wire value.
     * @deprecated Use {@link #forNumber(int)} instead.
     */
    @java.lang.Deprecated
    public static StorageErrorCode valueOf(int value) {
      return forNumber(value);
    }

    /**
     * @param value The numeric wire value of the corresponding enum entry.
     * @return The enum associated with the given numeric wire value.
     */
    public static StorageErrorCode forNumber(int value) {
      switch (value) {
        case 0: return STORAGE_ERROR_CODE_UNSPECIFIED;
        case 1: return TABLE_NOT_FOUND;
        case 2: return STREAM_ALREADY_COMMITTED;
        case 3: return STREAM_NOT_FOUND;
        case 4: return INVALID_STREAM_TYPE;
        case 5: return INVALID_STREAM_STATE;
        case 6: return STREAM_FINALIZED;
        default: return null;
      }
    }

    public static com.google.protobuf.Internal.EnumLiteMap<StorageErrorCode>
        internalGetValueMap() {
      return internalValueMap;
    }
    private static final com.google.protobuf.Internal.EnumLiteMap<
        StorageErrorCode> internalValueMap =
          new com.google.protobuf.Internal.EnumLiteMap<StorageErrorCode>() {
            public StorageErrorCode findValueByNumber(int number) {
              return StorageErrorCode.forNumber(number);
            }
          };

    public final com.google.protobuf.Descriptors.EnumValueDescriptor
        getValueDescriptor() {
      if (this == UNRECOGNIZED) {
        throw new java.lang.IllegalStateException(
            "Can't get the descriptor of an unrecognized enum value.");
      }
      return getDescriptor().getValues().get(ordinal());
    }
    public final com.google.protobuf.Descriptors.EnumDescriptor
        getDescriptorForType() {
      return getDescriptor();
    }
    public static final com.google.protobuf.Descriptors.EnumDescriptor
        getDescriptor() {
      return com.google.cloud.bigquery.storage.v1beta2.StorageError.getDescriptor().getEnumTypes().get(0);
    }

    private static final StorageErrorCode[] VALUES = values();

    public static StorageErrorCode valueOf(
        com.google.protobuf.Descriptors.EnumValueDescriptor desc) {
      if (desc.getType() != getDescriptor()) {
        throw new java.lang.IllegalArgumentException(
          "EnumValueDescriptor is not for this type.");
      }
      if (desc.getIndex() == -1) {
        return UNRECOGNIZED;
      }
      return VALUES[desc.getIndex()];
    }

    private final int value;

    private StorageErrorCode(int value) {
      this.value = value;
    }

    // @@protoc_insertion_point(enum_scope:google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode)
  }

  public static final int CODE_FIELD_NUMBER = 1;
  private int code_;
  /**
   * <pre>
   * BigQuery Storage specific error code.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
   * @return The enum numeric value on the wire for code.
   */
  @java.lang.Override public int getCodeValue() {
    return code_;
  }
  /**
   * <pre>
   * BigQuery Storage specific error code.
   * </pre>
   *
   * <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
   * @return The code.
   */
  @java.lang.Override public com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode getCode() {
    @SuppressWarnings("deprecation")
    com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode result = com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode.valueOf(code_);
    return result == null ? com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode.UNRECOGNIZED : result;
  }

  public static final int ENTITY_FIELD_NUMBER = 2;
  private volatile java.lang.Object entity_;
  /**
   * <pre>
   * Name of the failed entity.
   * </pre>
   *
   * <code>string entity = 2;</code>
   * @return The entity.
   */
  @java.lang.Override
  public java.lang.String getEntity() {
    java.lang.Object ref = entity_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      entity_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Name of the failed entity.
   * </pre>
   *
   * <code>string entity = 2;</code>
   * @return The bytes for entity.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getEntityBytes() {
    java.lang.Object ref = entity_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      entity_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int ERROR_MESSAGE_FIELD_NUMBER = 3;
  private volatile java.lang.Object errorMessage_;
  /**
   * <pre>
   * Message that describes the error.
   * </pre>
   *
   * <code>string error_message = 3;</code>
   * @return The errorMessage.
   */
  @java.lang.Override
  public java.lang.String getErrorMessage() {
    java.lang.Object ref = errorMessage_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      errorMessage_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Message that describes the error.
   * </pre>
   *
   * <code>string error_message = 3;</code>
   * @return The bytes for errorMessage.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getErrorMessageBytes() {
    java.lang.Object ref = errorMessage_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      errorMessage_ = b;
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
    if (code_ != com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode.STORAGE_ERROR_CODE_UNSPECIFIED.getNumber()) {
      output.writeEnum(1, code_);
    }
    if (!getEntityBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, entity_);
    }
    if (!getErrorMessageBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 3, errorMessage_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (code_ != com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode.STORAGE_ERROR_CODE_UNSPECIFIED.getNumber()) {
      size += com.google.protobuf.CodedOutputStream
        .computeEnumSize(1, code_);
    }
    if (!getEntityBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, entity_);
    }
    if (!getErrorMessageBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(3, errorMessage_);
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
    if (!(obj instanceof com.google.cloud.bigquery.storage.v1beta2.StorageError)) {
      return super.equals(obj);
    }
    com.google.cloud.bigquery.storage.v1beta2.StorageError other = (com.google.cloud.bigquery.storage.v1beta2.StorageError) obj;

    if (code_ != other.code_) return false;
    if (!getEntity()
        .equals(other.getEntity())) return false;
    if (!getErrorMessage()
        .equals(other.getErrorMessage())) return false;
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
    hash = (37 * hash) + CODE_FIELD_NUMBER;
    hash = (53 * hash) + code_;
    hash = (37 * hash) + ENTITY_FIELD_NUMBER;
    hash = (53 * hash) + getEntity().hashCode();
    hash = (37 * hash) + ERROR_MESSAGE_FIELD_NUMBER;
    hash = (53 * hash) + getErrorMessage().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.storage.v1beta2.StorageError parseFrom(
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
  public static Builder newBuilder(com.google.cloud.bigquery.storage.v1beta2.StorageError prototype) {
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
   * Structured custom BigQuery Storage error message. The error can be attached
   * as error details in the returned rpc Status. In particular, the use of error
   * codes allows more structured error handling, and reduces the need to evaluate
   * unstructured error text strings.
   * </pre>
   *
   * Protobuf type {@code google.cloud.bigquery.storage.v1beta2.StorageError}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.bigquery.storage.v1beta2.StorageError)
      com.google.cloud.bigquery.storage.v1beta2.StorageErrorOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.bigquery.storage.v1beta2.StorageProto.internal_static_google_cloud_bigquery_storage_v1beta2_StorageError_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.bigquery.storage.v1beta2.StorageProto.internal_static_google_cloud_bigquery_storage_v1beta2_StorageError_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.bigquery.storage.v1beta2.StorageError.class, com.google.cloud.bigquery.storage.v1beta2.StorageError.Builder.class);
    }

    // Construct using com.google.cloud.bigquery.storage.v1beta2.StorageError.newBuilder()
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
      code_ = 0;

      entity_ = "";

      errorMessage_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.bigquery.storage.v1beta2.StorageProto.internal_static_google_cloud_bigquery_storage_v1beta2_StorageError_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.bigquery.storage.v1beta2.StorageError getDefaultInstanceForType() {
      return com.google.cloud.bigquery.storage.v1beta2.StorageError.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.bigquery.storage.v1beta2.StorageError build() {
      com.google.cloud.bigquery.storage.v1beta2.StorageError result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.bigquery.storage.v1beta2.StorageError buildPartial() {
      com.google.cloud.bigquery.storage.v1beta2.StorageError result = new com.google.cloud.bigquery.storage.v1beta2.StorageError(this);
      result.code_ = code_;
      result.entity_ = entity_;
      result.errorMessage_ = errorMessage_;
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
      if (other instanceof com.google.cloud.bigquery.storage.v1beta2.StorageError) {
        return mergeFrom((com.google.cloud.bigquery.storage.v1beta2.StorageError)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.bigquery.storage.v1beta2.StorageError other) {
      if (other == com.google.cloud.bigquery.storage.v1beta2.StorageError.getDefaultInstance()) return this;
      if (other.code_ != 0) {
        setCodeValue(other.getCodeValue());
      }
      if (!other.getEntity().isEmpty()) {
        entity_ = other.entity_;
        onChanged();
      }
      if (!other.getErrorMessage().isEmpty()) {
        errorMessage_ = other.errorMessage_;
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
      com.google.cloud.bigquery.storage.v1beta2.StorageError parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.bigquery.storage.v1beta2.StorageError) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private int code_ = 0;
    /**
     * <pre>
     * BigQuery Storage specific error code.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
     * @return The enum numeric value on the wire for code.
     */
    @java.lang.Override public int getCodeValue() {
      return code_;
    }
    /**
     * <pre>
     * BigQuery Storage specific error code.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
     * @param value The enum numeric value on the wire for code to set.
     * @return This builder for chaining.
     */
    public Builder setCodeValue(int value) {
      
      code_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * BigQuery Storage specific error code.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
     * @return The code.
     */
    @java.lang.Override
    public com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode getCode() {
      @SuppressWarnings("deprecation")
      com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode result = com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode.valueOf(code_);
      return result == null ? com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode.UNRECOGNIZED : result;
    }
    /**
     * <pre>
     * BigQuery Storage specific error code.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
     * @param value The code to set.
     * @return This builder for chaining.
     */
    public Builder setCode(com.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode value) {
      if (value == null) {
        throw new NullPointerException();
      }
      
      code_ = value.getNumber();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * BigQuery Storage specific error code.
     * </pre>
     *
     * <code>.google.cloud.bigquery.storage.v1beta2.StorageError.StorageErrorCode code = 1;</code>
     * @return This builder for chaining.
     */
    public Builder clearCode() {
      
      code_ = 0;
      onChanged();
      return this;
    }

    private java.lang.Object entity_ = "";
    /**
     * <pre>
     * Name of the failed entity.
     * </pre>
     *
     * <code>string entity = 2;</code>
     * @return The entity.
     */
    public java.lang.String getEntity() {
      java.lang.Object ref = entity_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        entity_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Name of the failed entity.
     * </pre>
     *
     * <code>string entity = 2;</code>
     * @return The bytes for entity.
     */
    public com.google.protobuf.ByteString
        getEntityBytes() {
      java.lang.Object ref = entity_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        entity_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Name of the failed entity.
     * </pre>
     *
     * <code>string entity = 2;</code>
     * @param value The entity to set.
     * @return This builder for chaining.
     */
    public Builder setEntity(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      entity_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Name of the failed entity.
     * </pre>
     *
     * <code>string entity = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearEntity() {
      
      entity_ = getDefaultInstance().getEntity();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Name of the failed entity.
     * </pre>
     *
     * <code>string entity = 2;</code>
     * @param value The bytes for entity to set.
     * @return This builder for chaining.
     */
    public Builder setEntityBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      entity_ = value;
      onChanged();
      return this;
    }

    private java.lang.Object errorMessage_ = "";
    /**
     * <pre>
     * Message that describes the error.
     * </pre>
     *
     * <code>string error_message = 3;</code>
     * @return The errorMessage.
     */
    public java.lang.String getErrorMessage() {
      java.lang.Object ref = errorMessage_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        errorMessage_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Message that describes the error.
     * </pre>
     *
     * <code>string error_message = 3;</code>
     * @return The bytes for errorMessage.
     */
    public com.google.protobuf.ByteString
        getErrorMessageBytes() {
      java.lang.Object ref = errorMessage_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        errorMessage_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Message that describes the error.
     * </pre>
     *
     * <code>string error_message = 3;</code>
     * @param value The errorMessage to set.
     * @return This builder for chaining.
     */
    public Builder setErrorMessage(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      errorMessage_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Message that describes the error.
     * </pre>
     *
     * <code>string error_message = 3;</code>
     * @return This builder for chaining.
     */
    public Builder clearErrorMessage() {
      
      errorMessage_ = getDefaultInstance().getErrorMessage();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Message that describes the error.
     * </pre>
     *
     * <code>string error_message = 3;</code>
     * @param value The bytes for errorMessage to set.
     * @return This builder for chaining.
     */
    public Builder setErrorMessageBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      errorMessage_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.bigquery.storage.v1beta2.StorageError)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.bigquery.storage.v1beta2.StorageError)
  private static final com.google.cloud.bigquery.storage.v1beta2.StorageError DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.bigquery.storage.v1beta2.StorageError();
  }

  public static com.google.cloud.bigquery.storage.v1beta2.StorageError getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<StorageError>
      PARSER = new com.google.protobuf.AbstractParser<StorageError>() {
    @java.lang.Override
    public StorageError parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new StorageError(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<StorageError> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<StorageError> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.bigquery.storage.v1beta2.StorageError getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

