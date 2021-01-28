// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/servicedirectory/v1/lookup_service.proto

package com.google.cloud.servicedirectory.v1;

/**
 * <pre>
 * The request message for
 * [LookupService.ResolveService][google.cloud.servicedirectory.v1.LookupService.ResolveService].
 * Looks up a service by its name, returns the service and its endpoints.
 * </pre>
 *
 * Protobuf type {@code google.cloud.servicedirectory.v1.ResolveServiceRequest}
 */
public final class ResolveServiceRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.servicedirectory.v1.ResolveServiceRequest)
    ResolveServiceRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ResolveServiceRequest.newBuilder() to construct.
  private ResolveServiceRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ResolveServiceRequest() {
    name_ = "";
    endpointFilter_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ResolveServiceRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ResolveServiceRequest(
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

            name_ = s;
            break;
          }
          case 16: {

            maxEndpoints_ = input.readInt32();
            break;
          }
          case 26: {
            java.lang.String s = input.readStringRequireUtf8();

            endpointFilter_ = s;
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
    return com.google.cloud.servicedirectory.v1.LookupServiceProto.internal_static_google_cloud_servicedirectory_v1_ResolveServiceRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.servicedirectory.v1.LookupServiceProto.internal_static_google_cloud_servicedirectory_v1_ResolveServiceRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.servicedirectory.v1.ResolveServiceRequest.class, com.google.cloud.servicedirectory.v1.ResolveServiceRequest.Builder.class);
  }

  public static final int NAME_FIELD_NUMBER = 1;
  private volatile java.lang.Object name_;
  /**
   * <pre>
   * Required. The name of the service to resolve.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The name.
   */
  @java.lang.Override
  public java.lang.String getName() {
    java.lang.Object ref = name_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      name_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The name of the service to resolve.
   * </pre>
   *
   * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for name.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getNameBytes() {
    java.lang.Object ref = name_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      name_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int MAX_ENDPOINTS_FIELD_NUMBER = 2;
  private int maxEndpoints_;
  /**
   * <pre>
   * Optional. The maximum number of endpoints to return. Defaults to 25.
   * Maximum is 100. If a value less than one is specified, the Default is used.
   * If a value greater than the Maximum is specified, the Maximum is used.
   * </pre>
   *
   * <code>int32 max_endpoints = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The maxEndpoints.
   */
  @java.lang.Override
  public int getMaxEndpoints() {
    return maxEndpoints_;
  }

  public static final int ENDPOINT_FILTER_FIELD_NUMBER = 3;
  private volatile java.lang.Object endpointFilter_;
  /**
   * <pre>
   * Optional. The filter applied to the endpoints of the resolved service.
   * General filter string syntax:
   * &lt;field&gt; &lt;operator&gt; &lt;value&gt; (&lt;logical connector&gt;)
   * &lt;field&gt; can be "name" or "metadata.&lt;key&gt;" for map field.
   * &lt;operator&gt; can be "&lt;, &gt;, &lt;=, &gt;=, !=, =, :". Of which ":" means HAS and is
   * roughly the same as "=".
   * &lt;value&gt; must be the same data type as the field.
   * &lt;logical connector&gt; can be "AND, OR, NOT".
   * Examples of valid filters:
   * * "metadata.owner" returns Endpoints that have a label with the
   *   key "owner", this is the same as "metadata:owner"
   * * "metadata.protocol=gRPC" returns Endpoints that have key/value
   *   "protocol=gRPC"
   * * "metadata.owner!=sd AND metadata.foo=bar" returns
   *   Endpoints that have "owner" field in metadata with a value that is not
   *   "sd" AND have the key/value foo=bar.
   * </pre>
   *
   * <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The endpointFilter.
   */
  @java.lang.Override
  public java.lang.String getEndpointFilter() {
    java.lang.Object ref = endpointFilter_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      endpointFilter_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Optional. The filter applied to the endpoints of the resolved service.
   * General filter string syntax:
   * &lt;field&gt; &lt;operator&gt; &lt;value&gt; (&lt;logical connector&gt;)
   * &lt;field&gt; can be "name" or "metadata.&lt;key&gt;" for map field.
   * &lt;operator&gt; can be "&lt;, &gt;, &lt;=, &gt;=, !=, =, :". Of which ":" means HAS and is
   * roughly the same as "=".
   * &lt;value&gt; must be the same data type as the field.
   * &lt;logical connector&gt; can be "AND, OR, NOT".
   * Examples of valid filters:
   * * "metadata.owner" returns Endpoints that have a label with the
   *   key "owner", this is the same as "metadata:owner"
   * * "metadata.protocol=gRPC" returns Endpoints that have key/value
   *   "protocol=gRPC"
   * * "metadata.owner!=sd AND metadata.foo=bar" returns
   *   Endpoints that have "owner" field in metadata with a value that is not
   *   "sd" AND have the key/value foo=bar.
   * </pre>
   *
   * <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
   * @return The bytes for endpointFilter.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getEndpointFilterBytes() {
    java.lang.Object ref = endpointFilter_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      endpointFilter_ = b;
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
    if (!getNameBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, name_);
    }
    if (maxEndpoints_ != 0) {
      output.writeInt32(2, maxEndpoints_);
    }
    if (!getEndpointFilterBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 3, endpointFilter_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getNameBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, name_);
    }
    if (maxEndpoints_ != 0) {
      size += com.google.protobuf.CodedOutputStream
        .computeInt32Size(2, maxEndpoints_);
    }
    if (!getEndpointFilterBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(3, endpointFilter_);
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
    if (!(obj instanceof com.google.cloud.servicedirectory.v1.ResolveServiceRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.servicedirectory.v1.ResolveServiceRequest other = (com.google.cloud.servicedirectory.v1.ResolveServiceRequest) obj;

    if (!getName()
        .equals(other.getName())) return false;
    if (getMaxEndpoints()
        != other.getMaxEndpoints()) return false;
    if (!getEndpointFilter()
        .equals(other.getEndpointFilter())) return false;
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
    hash = (37 * hash) + NAME_FIELD_NUMBER;
    hash = (53 * hash) + getName().hashCode();
    hash = (37 * hash) + MAX_ENDPOINTS_FIELD_NUMBER;
    hash = (53 * hash) + getMaxEndpoints();
    hash = (37 * hash) + ENDPOINT_FILTER_FIELD_NUMBER;
    hash = (53 * hash) + getEndpointFilter().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest parseFrom(
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
  public static Builder newBuilder(com.google.cloud.servicedirectory.v1.ResolveServiceRequest prototype) {
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
   * The request message for
   * [LookupService.ResolveService][google.cloud.servicedirectory.v1.LookupService.ResolveService].
   * Looks up a service by its name, returns the service and its endpoints.
   * </pre>
   *
   * Protobuf type {@code google.cloud.servicedirectory.v1.ResolveServiceRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.servicedirectory.v1.ResolveServiceRequest)
      com.google.cloud.servicedirectory.v1.ResolveServiceRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.servicedirectory.v1.LookupServiceProto.internal_static_google_cloud_servicedirectory_v1_ResolveServiceRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.servicedirectory.v1.LookupServiceProto.internal_static_google_cloud_servicedirectory_v1_ResolveServiceRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.servicedirectory.v1.ResolveServiceRequest.class, com.google.cloud.servicedirectory.v1.ResolveServiceRequest.Builder.class);
    }

    // Construct using com.google.cloud.servicedirectory.v1.ResolveServiceRequest.newBuilder()
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
      name_ = "";

      maxEndpoints_ = 0;

      endpointFilter_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.servicedirectory.v1.LookupServiceProto.internal_static_google_cloud_servicedirectory_v1_ResolveServiceRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.servicedirectory.v1.ResolveServiceRequest getDefaultInstanceForType() {
      return com.google.cloud.servicedirectory.v1.ResolveServiceRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.servicedirectory.v1.ResolveServiceRequest build() {
      com.google.cloud.servicedirectory.v1.ResolveServiceRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.servicedirectory.v1.ResolveServiceRequest buildPartial() {
      com.google.cloud.servicedirectory.v1.ResolveServiceRequest result = new com.google.cloud.servicedirectory.v1.ResolveServiceRequest(this);
      result.name_ = name_;
      result.maxEndpoints_ = maxEndpoints_;
      result.endpointFilter_ = endpointFilter_;
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
      if (other instanceof com.google.cloud.servicedirectory.v1.ResolveServiceRequest) {
        return mergeFrom((com.google.cloud.servicedirectory.v1.ResolveServiceRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.servicedirectory.v1.ResolveServiceRequest other) {
      if (other == com.google.cloud.servicedirectory.v1.ResolveServiceRequest.getDefaultInstance()) return this;
      if (!other.getName().isEmpty()) {
        name_ = other.name_;
        onChanged();
      }
      if (other.getMaxEndpoints() != 0) {
        setMaxEndpoints(other.getMaxEndpoints());
      }
      if (!other.getEndpointFilter().isEmpty()) {
        endpointFilter_ = other.endpointFilter_;
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
      com.google.cloud.servicedirectory.v1.ResolveServiceRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.servicedirectory.v1.ResolveServiceRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object name_ = "";
    /**
     * <pre>
     * Required. The name of the service to resolve.
     * </pre>
     *
     * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The name.
     */
    public java.lang.String getName() {
      java.lang.Object ref = name_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        name_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The name of the service to resolve.
     * </pre>
     *
     * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The bytes for name.
     */
    public com.google.protobuf.ByteString
        getNameBytes() {
      java.lang.Object ref = name_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        name_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The name of the service to resolve.
     * </pre>
     *
     * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The name to set.
     * @return This builder for chaining.
     */
    public Builder setName(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      name_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The name of the service to resolve.
     * </pre>
     *
     * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return This builder for chaining.
     */
    public Builder clearName() {
      
      name_ = getDefaultInstance().getName();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The name of the service to resolve.
     * </pre>
     *
     * <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The bytes for name to set.
     * @return This builder for chaining.
     */
    public Builder setNameBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      name_ = value;
      onChanged();
      return this;
    }

    private int maxEndpoints_ ;
    /**
     * <pre>
     * Optional. The maximum number of endpoints to return. Defaults to 25.
     * Maximum is 100. If a value less than one is specified, the Default is used.
     * If a value greater than the Maximum is specified, the Maximum is used.
     * </pre>
     *
     * <code>int32 max_endpoints = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return The maxEndpoints.
     */
    @java.lang.Override
    public int getMaxEndpoints() {
      return maxEndpoints_;
    }
    /**
     * <pre>
     * Optional. The maximum number of endpoints to return. Defaults to 25.
     * Maximum is 100. If a value less than one is specified, the Default is used.
     * If a value greater than the Maximum is specified, the Maximum is used.
     * </pre>
     *
     * <code>int32 max_endpoints = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param value The maxEndpoints to set.
     * @return This builder for chaining.
     */
    public Builder setMaxEndpoints(int value) {
      
      maxEndpoints_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Optional. The maximum number of endpoints to return. Defaults to 25.
     * Maximum is 100. If a value less than one is specified, the Default is used.
     * If a value greater than the Maximum is specified, the Maximum is used.
     * </pre>
     *
     * <code>int32 max_endpoints = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return This builder for chaining.
     */
    public Builder clearMaxEndpoints() {
      
      maxEndpoints_ = 0;
      onChanged();
      return this;
    }

    private java.lang.Object endpointFilter_ = "";
    /**
     * <pre>
     * Optional. The filter applied to the endpoints of the resolved service.
     * General filter string syntax:
     * &lt;field&gt; &lt;operator&gt; &lt;value&gt; (&lt;logical connector&gt;)
     * &lt;field&gt; can be "name" or "metadata.&lt;key&gt;" for map field.
     * &lt;operator&gt; can be "&lt;, &gt;, &lt;=, &gt;=, !=, =, :". Of which ":" means HAS and is
     * roughly the same as "=".
     * &lt;value&gt; must be the same data type as the field.
     * &lt;logical connector&gt; can be "AND, OR, NOT".
     * Examples of valid filters:
     * * "metadata.owner" returns Endpoints that have a label with the
     *   key "owner", this is the same as "metadata:owner"
     * * "metadata.protocol=gRPC" returns Endpoints that have key/value
     *   "protocol=gRPC"
     * * "metadata.owner!=sd AND metadata.foo=bar" returns
     *   Endpoints that have "owner" field in metadata with a value that is not
     *   "sd" AND have the key/value foo=bar.
     * </pre>
     *
     * <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return The endpointFilter.
     */
    public java.lang.String getEndpointFilter() {
      java.lang.Object ref = endpointFilter_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        endpointFilter_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Optional. The filter applied to the endpoints of the resolved service.
     * General filter string syntax:
     * &lt;field&gt; &lt;operator&gt; &lt;value&gt; (&lt;logical connector&gt;)
     * &lt;field&gt; can be "name" or "metadata.&lt;key&gt;" for map field.
     * &lt;operator&gt; can be "&lt;, &gt;, &lt;=, &gt;=, !=, =, :". Of which ":" means HAS and is
     * roughly the same as "=".
     * &lt;value&gt; must be the same data type as the field.
     * &lt;logical connector&gt; can be "AND, OR, NOT".
     * Examples of valid filters:
     * * "metadata.owner" returns Endpoints that have a label with the
     *   key "owner", this is the same as "metadata:owner"
     * * "metadata.protocol=gRPC" returns Endpoints that have key/value
     *   "protocol=gRPC"
     * * "metadata.owner!=sd AND metadata.foo=bar" returns
     *   Endpoints that have "owner" field in metadata with a value that is not
     *   "sd" AND have the key/value foo=bar.
     * </pre>
     *
     * <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return The bytes for endpointFilter.
     */
    public com.google.protobuf.ByteString
        getEndpointFilterBytes() {
      java.lang.Object ref = endpointFilter_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        endpointFilter_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Optional. The filter applied to the endpoints of the resolved service.
     * General filter string syntax:
     * &lt;field&gt; &lt;operator&gt; &lt;value&gt; (&lt;logical connector&gt;)
     * &lt;field&gt; can be "name" or "metadata.&lt;key&gt;" for map field.
     * &lt;operator&gt; can be "&lt;, &gt;, &lt;=, &gt;=, !=, =, :". Of which ":" means HAS and is
     * roughly the same as "=".
     * &lt;value&gt; must be the same data type as the field.
     * &lt;logical connector&gt; can be "AND, OR, NOT".
     * Examples of valid filters:
     * * "metadata.owner" returns Endpoints that have a label with the
     *   key "owner", this is the same as "metadata:owner"
     * * "metadata.protocol=gRPC" returns Endpoints that have key/value
     *   "protocol=gRPC"
     * * "metadata.owner!=sd AND metadata.foo=bar" returns
     *   Endpoints that have "owner" field in metadata with a value that is not
     *   "sd" AND have the key/value foo=bar.
     * </pre>
     *
     * <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param value The endpointFilter to set.
     * @return This builder for chaining.
     */
    public Builder setEndpointFilter(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      endpointFilter_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Optional. The filter applied to the endpoints of the resolved service.
     * General filter string syntax:
     * &lt;field&gt; &lt;operator&gt; &lt;value&gt; (&lt;logical connector&gt;)
     * &lt;field&gt; can be "name" or "metadata.&lt;key&gt;" for map field.
     * &lt;operator&gt; can be "&lt;, &gt;, &lt;=, &gt;=, !=, =, :". Of which ":" means HAS and is
     * roughly the same as "=".
     * &lt;value&gt; must be the same data type as the field.
     * &lt;logical connector&gt; can be "AND, OR, NOT".
     * Examples of valid filters:
     * * "metadata.owner" returns Endpoints that have a label with the
     *   key "owner", this is the same as "metadata:owner"
     * * "metadata.protocol=gRPC" returns Endpoints that have key/value
     *   "protocol=gRPC"
     * * "metadata.owner!=sd AND metadata.foo=bar" returns
     *   Endpoints that have "owner" field in metadata with a value that is not
     *   "sd" AND have the key/value foo=bar.
     * </pre>
     *
     * <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return This builder for chaining.
     */
    public Builder clearEndpointFilter() {
      
      endpointFilter_ = getDefaultInstance().getEndpointFilter();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Optional. The filter applied to the endpoints of the resolved service.
     * General filter string syntax:
     * &lt;field&gt; &lt;operator&gt; &lt;value&gt; (&lt;logical connector&gt;)
     * &lt;field&gt; can be "name" or "metadata.&lt;key&gt;" for map field.
     * &lt;operator&gt; can be "&lt;, &gt;, &lt;=, &gt;=, !=, =, :". Of which ":" means HAS and is
     * roughly the same as "=".
     * &lt;value&gt; must be the same data type as the field.
     * &lt;logical connector&gt; can be "AND, OR, NOT".
     * Examples of valid filters:
     * * "metadata.owner" returns Endpoints that have a label with the
     *   key "owner", this is the same as "metadata:owner"
     * * "metadata.protocol=gRPC" returns Endpoints that have key/value
     *   "protocol=gRPC"
     * * "metadata.owner!=sd AND metadata.foo=bar" returns
     *   Endpoints that have "owner" field in metadata with a value that is not
     *   "sd" AND have the key/value foo=bar.
     * </pre>
     *
     * <code>string endpoint_filter = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param value The bytes for endpointFilter to set.
     * @return This builder for chaining.
     */
    public Builder setEndpointFilterBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      endpointFilter_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.servicedirectory.v1.ResolveServiceRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.servicedirectory.v1.ResolveServiceRequest)
  private static final com.google.cloud.servicedirectory.v1.ResolveServiceRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.servicedirectory.v1.ResolveServiceRequest();
  }

  public static com.google.cloud.servicedirectory.v1.ResolveServiceRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ResolveServiceRequest>
      PARSER = new com.google.protobuf.AbstractParser<ResolveServiceRequest>() {
    @java.lang.Override
    public ResolveServiceRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ResolveServiceRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ResolveServiceRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ResolveServiceRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.servicedirectory.v1.ResolveServiceRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

