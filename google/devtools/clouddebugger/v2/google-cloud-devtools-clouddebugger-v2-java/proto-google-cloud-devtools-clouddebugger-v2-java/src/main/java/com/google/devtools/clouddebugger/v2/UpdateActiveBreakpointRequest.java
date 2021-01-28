// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/clouddebugger/v2/controller.proto

package com.google.devtools.clouddebugger.v2;

/**
 * <pre>
 * Request to update an active breakpoint.
 * </pre>
 *
 * Protobuf type {@code google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest}
 */
public final class UpdateActiveBreakpointRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest)
    UpdateActiveBreakpointRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use UpdateActiveBreakpointRequest.newBuilder() to construct.
  private UpdateActiveBreakpointRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private UpdateActiveBreakpointRequest() {
    debuggeeId_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new UpdateActiveBreakpointRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private UpdateActiveBreakpointRequest(
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

            debuggeeId_ = s;
            break;
          }
          case 18: {
            com.google.devtools.clouddebugger.v2.Breakpoint.Builder subBuilder = null;
            if (breakpoint_ != null) {
              subBuilder = breakpoint_.toBuilder();
            }
            breakpoint_ = input.readMessage(com.google.devtools.clouddebugger.v2.Breakpoint.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(breakpoint_);
              breakpoint_ = subBuilder.buildPartial();
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
    return com.google.devtools.clouddebugger.v2.ControllerProto.internal_static_google_devtools_clouddebugger_v2_UpdateActiveBreakpointRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.devtools.clouddebugger.v2.ControllerProto.internal_static_google_devtools_clouddebugger_v2_UpdateActiveBreakpointRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest.class, com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest.Builder.class);
  }

  public static final int DEBUGGEE_ID_FIELD_NUMBER = 1;
  private volatile java.lang.Object debuggeeId_;
  /**
   * <pre>
   * Required. Identifies the debuggee being debugged.
   * </pre>
   *
   * <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The debuggeeId.
   */
  @java.lang.Override
  public java.lang.String getDebuggeeId() {
    java.lang.Object ref = debuggeeId_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      debuggeeId_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. Identifies the debuggee being debugged.
   * </pre>
   *
   * <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for debuggeeId.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getDebuggeeIdBytes() {
    java.lang.Object ref = debuggeeId_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      debuggeeId_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int BREAKPOINT_FIELD_NUMBER = 2;
  private com.google.devtools.clouddebugger.v2.Breakpoint breakpoint_;
  /**
   * <pre>
   * Required. Updated breakpoint information.
   * The field `id` must be set.
   * The agent must echo all Breakpoint specification fields in the update.
   * </pre>
   *
   * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the breakpoint field is set.
   */
  @java.lang.Override
  public boolean hasBreakpoint() {
    return breakpoint_ != null;
  }
  /**
   * <pre>
   * Required. Updated breakpoint information.
   * The field `id` must be set.
   * The agent must echo all Breakpoint specification fields in the update.
   * </pre>
   *
   * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The breakpoint.
   */
  @java.lang.Override
  public com.google.devtools.clouddebugger.v2.Breakpoint getBreakpoint() {
    return breakpoint_ == null ? com.google.devtools.clouddebugger.v2.Breakpoint.getDefaultInstance() : breakpoint_;
  }
  /**
   * <pre>
   * Required. Updated breakpoint information.
   * The field `id` must be set.
   * The agent must echo all Breakpoint specification fields in the update.
   * </pre>
   *
   * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.devtools.clouddebugger.v2.BreakpointOrBuilder getBreakpointOrBuilder() {
    return getBreakpoint();
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
    if (!getDebuggeeIdBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, debuggeeId_);
    }
    if (breakpoint_ != null) {
      output.writeMessage(2, getBreakpoint());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getDebuggeeIdBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, debuggeeId_);
    }
    if (breakpoint_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, getBreakpoint());
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
    if (!(obj instanceof com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest)) {
      return super.equals(obj);
    }
    com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest other = (com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest) obj;

    if (!getDebuggeeId()
        .equals(other.getDebuggeeId())) return false;
    if (hasBreakpoint() != other.hasBreakpoint()) return false;
    if (hasBreakpoint()) {
      if (!getBreakpoint()
          .equals(other.getBreakpoint())) return false;
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
    hash = (37 * hash) + DEBUGGEE_ID_FIELD_NUMBER;
    hash = (53 * hash) + getDebuggeeId().hashCode();
    if (hasBreakpoint()) {
      hash = (37 * hash) + BREAKPOINT_FIELD_NUMBER;
      hash = (53 * hash) + getBreakpoint().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parseFrom(
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
  public static Builder newBuilder(com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest prototype) {
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
   * Request to update an active breakpoint.
   * </pre>
   *
   * Protobuf type {@code google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest)
      com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.devtools.clouddebugger.v2.ControllerProto.internal_static_google_devtools_clouddebugger_v2_UpdateActiveBreakpointRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.devtools.clouddebugger.v2.ControllerProto.internal_static_google_devtools_clouddebugger_v2_UpdateActiveBreakpointRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest.class, com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest.Builder.class);
    }

    // Construct using com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest.newBuilder()
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
      debuggeeId_ = "";

      if (breakpointBuilder_ == null) {
        breakpoint_ = null;
      } else {
        breakpoint_ = null;
        breakpointBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.devtools.clouddebugger.v2.ControllerProto.internal_static_google_devtools_clouddebugger_v2_UpdateActiveBreakpointRequest_descriptor;
    }

    @java.lang.Override
    public com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest getDefaultInstanceForType() {
      return com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest build() {
      com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest buildPartial() {
      com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest result = new com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest(this);
      result.debuggeeId_ = debuggeeId_;
      if (breakpointBuilder_ == null) {
        result.breakpoint_ = breakpoint_;
      } else {
        result.breakpoint_ = breakpointBuilder_.build();
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
      if (other instanceof com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest) {
        return mergeFrom((com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest other) {
      if (other == com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest.getDefaultInstance()) return this;
      if (!other.getDebuggeeId().isEmpty()) {
        debuggeeId_ = other.debuggeeId_;
        onChanged();
      }
      if (other.hasBreakpoint()) {
        mergeBreakpoint(other.getBreakpoint());
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
      com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object debuggeeId_ = "";
    /**
     * <pre>
     * Required. Identifies the debuggee being debugged.
     * </pre>
     *
     * <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The debuggeeId.
     */
    public java.lang.String getDebuggeeId() {
      java.lang.Object ref = debuggeeId_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        debuggeeId_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. Identifies the debuggee being debugged.
     * </pre>
     *
     * <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for debuggeeId.
     */
    public com.google.protobuf.ByteString
        getDebuggeeIdBytes() {
      java.lang.Object ref = debuggeeId_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        debuggeeId_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. Identifies the debuggee being debugged.
     * </pre>
     *
     * <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The debuggeeId to set.
     * @return This builder for chaining.
     */
    public Builder setDebuggeeId(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      debuggeeId_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. Identifies the debuggee being debugged.
     * </pre>
     *
     * <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return This builder for chaining.
     */
    public Builder clearDebuggeeId() {
      
      debuggeeId_ = getDefaultInstance().getDebuggeeId();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. Identifies the debuggee being debugged.
     * </pre>
     *
     * <code>string debuggee_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The bytes for debuggeeId to set.
     * @return This builder for chaining.
     */
    public Builder setDebuggeeIdBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      debuggeeId_ = value;
      onChanged();
      return this;
    }

    private com.google.devtools.clouddebugger.v2.Breakpoint breakpoint_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.devtools.clouddebugger.v2.Breakpoint, com.google.devtools.clouddebugger.v2.Breakpoint.Builder, com.google.devtools.clouddebugger.v2.BreakpointOrBuilder> breakpointBuilder_;
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Whether the breakpoint field is set.
     */
    public boolean hasBreakpoint() {
      return breakpointBuilder_ != null || breakpoint_ != null;
    }
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The breakpoint.
     */
    public com.google.devtools.clouddebugger.v2.Breakpoint getBreakpoint() {
      if (breakpointBuilder_ == null) {
        return breakpoint_ == null ? com.google.devtools.clouddebugger.v2.Breakpoint.getDefaultInstance() : breakpoint_;
      } else {
        return breakpointBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setBreakpoint(com.google.devtools.clouddebugger.v2.Breakpoint value) {
      if (breakpointBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        breakpoint_ = value;
        onChanged();
      } else {
        breakpointBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setBreakpoint(
        com.google.devtools.clouddebugger.v2.Breakpoint.Builder builderForValue) {
      if (breakpointBuilder_ == null) {
        breakpoint_ = builderForValue.build();
        onChanged();
      } else {
        breakpointBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder mergeBreakpoint(com.google.devtools.clouddebugger.v2.Breakpoint value) {
      if (breakpointBuilder_ == null) {
        if (breakpoint_ != null) {
          breakpoint_ =
            com.google.devtools.clouddebugger.v2.Breakpoint.newBuilder(breakpoint_).mergeFrom(value).buildPartial();
        } else {
          breakpoint_ = value;
        }
        onChanged();
      } else {
        breakpointBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder clearBreakpoint() {
      if (breakpointBuilder_ == null) {
        breakpoint_ = null;
        onChanged();
      } else {
        breakpoint_ = null;
        breakpointBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.devtools.clouddebugger.v2.Breakpoint.Builder getBreakpointBuilder() {
      
      onChanged();
      return getBreakpointFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.devtools.clouddebugger.v2.BreakpointOrBuilder getBreakpointOrBuilder() {
      if (breakpointBuilder_ != null) {
        return breakpointBuilder_.getMessageOrBuilder();
      } else {
        return breakpoint_ == null ?
            com.google.devtools.clouddebugger.v2.Breakpoint.getDefaultInstance() : breakpoint_;
      }
    }
    /**
     * <pre>
     * Required. Updated breakpoint information.
     * The field `id` must be set.
     * The agent must echo all Breakpoint specification fields in the update.
     * </pre>
     *
     * <code>.google.devtools.clouddebugger.v2.Breakpoint breakpoint = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.devtools.clouddebugger.v2.Breakpoint, com.google.devtools.clouddebugger.v2.Breakpoint.Builder, com.google.devtools.clouddebugger.v2.BreakpointOrBuilder> 
        getBreakpointFieldBuilder() {
      if (breakpointBuilder_ == null) {
        breakpointBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.devtools.clouddebugger.v2.Breakpoint, com.google.devtools.clouddebugger.v2.Breakpoint.Builder, com.google.devtools.clouddebugger.v2.BreakpointOrBuilder>(
                getBreakpoint(),
                getParentForChildren(),
                isClean());
        breakpoint_ = null;
      }
      return breakpointBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest)
  }

  // @@protoc_insertion_point(class_scope:google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest)
  private static final com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest();
  }

  public static com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<UpdateActiveBreakpointRequest>
      PARSER = new com.google.protobuf.AbstractParser<UpdateActiveBreakpointRequest>() {
    @java.lang.Override
    public UpdateActiveBreakpointRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new UpdateActiveBreakpointRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<UpdateActiveBreakpointRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<UpdateActiveBreakpointRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.devtools.clouddebugger.v2.UpdateActiveBreakpointRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

