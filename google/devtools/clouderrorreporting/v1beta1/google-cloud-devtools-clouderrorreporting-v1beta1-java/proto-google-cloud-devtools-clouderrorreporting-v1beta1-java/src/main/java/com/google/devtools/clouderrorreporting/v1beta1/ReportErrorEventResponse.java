// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/clouderrorreporting/v1beta1/report_errors_service.proto

package com.google.devtools.clouderrorreporting.v1beta1;

/**
 * <pre>
 * Response for reporting an individual error event.
 * Data may be added to this message in the future.
 * </pre>
 *
 * Protobuf type {@code google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse}
 */
public final class ReportErrorEventResponse extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse)
    ReportErrorEventResponseOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ReportErrorEventResponse.newBuilder() to construct.
  private ReportErrorEventResponse(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ReportErrorEventResponse() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ReportErrorEventResponse();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ReportErrorEventResponse(
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
    return com.google.devtools.clouderrorreporting.v1beta1.ReportErrorsServiceProto.internal_static_google_devtools_clouderrorreporting_v1beta1_ReportErrorEventResponse_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.devtools.clouderrorreporting.v1beta1.ReportErrorsServiceProto.internal_static_google_devtools_clouderrorreporting_v1beta1_ReportErrorEventResponse_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse.class, com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse.Builder.class);
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
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    size += unknownFields.getSerializedSize();
    memoizedSize = size;
    return size;
  }

  @java.lang.Override
  public boolean equals(final java.lang.Object obj) {
    if (obj == this) {
     return true;
    }
    if (!(obj instanceof com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse)) {
      return super.equals(obj);
    }
    com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse other = (com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse) obj;

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
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parseFrom(
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
  public static Builder newBuilder(com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse prototype) {
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
   * Response for reporting an individual error event.
   * Data may be added to this message in the future.
   * </pre>
   *
   * Protobuf type {@code google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse)
      com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponseOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.devtools.clouderrorreporting.v1beta1.ReportErrorsServiceProto.internal_static_google_devtools_clouderrorreporting_v1beta1_ReportErrorEventResponse_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.devtools.clouderrorreporting.v1beta1.ReportErrorsServiceProto.internal_static_google_devtools_clouderrorreporting_v1beta1_ReportErrorEventResponse_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse.class, com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse.Builder.class);
    }

    // Construct using com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse.newBuilder()
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
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.devtools.clouderrorreporting.v1beta1.ReportErrorsServiceProto.internal_static_google_devtools_clouderrorreporting_v1beta1_ReportErrorEventResponse_descriptor;
    }

    @java.lang.Override
    public com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse getDefaultInstanceForType() {
      return com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse build() {
      com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse buildPartial() {
      com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse result = new com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse(this);
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
      if (other instanceof com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse) {
        return mergeFrom((com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse other) {
      if (other == com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse.getDefaultInstance()) return this;
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
      com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
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


    // @@protoc_insertion_point(builder_scope:google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse)
  }

  // @@protoc_insertion_point(class_scope:google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse)
  private static final com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse();
  }

  public static com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ReportErrorEventResponse>
      PARSER = new com.google.protobuf.AbstractParser<ReportErrorEventResponse>() {
    @java.lang.Override
    public ReportErrorEventResponse parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ReportErrorEventResponse(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ReportErrorEventResponse> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ReportErrorEventResponse> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.devtools.clouderrorreporting.v1beta1.ReportErrorEventResponse getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

