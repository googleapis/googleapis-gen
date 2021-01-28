// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/monitoring/v3/service_service.proto

package com.google.monitoring.v3;

/**
 * <pre>
 * The `ListServices` response.
 * </pre>
 *
 * Protobuf type {@code google.monitoring.v3.ListServicesResponse}
 */
public final class ListServicesResponse extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.monitoring.v3.ListServicesResponse)
    ListServicesResponseOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ListServicesResponse.newBuilder() to construct.
  private ListServicesResponse(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ListServicesResponse() {
    services_ = java.util.Collections.emptyList();
    nextPageToken_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ListServicesResponse();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ListServicesResponse(
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
          case 10: {
            if (!((mutable_bitField0_ & 0x00000001) != 0)) {
              services_ = new java.util.ArrayList<com.google.monitoring.v3.Service>();
              mutable_bitField0_ |= 0x00000001;
            }
            services_.add(
                input.readMessage(com.google.monitoring.v3.Service.parser(), extensionRegistry));
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            nextPageToken_ = s;
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
        services_ = java.util.Collections.unmodifiableList(services_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.monitoring.v3.ServiceMonitoringServiceProto.internal_static_google_monitoring_v3_ListServicesResponse_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.monitoring.v3.ServiceMonitoringServiceProto.internal_static_google_monitoring_v3_ListServicesResponse_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.monitoring.v3.ListServicesResponse.class, com.google.monitoring.v3.ListServicesResponse.Builder.class);
  }

  public static final int SERVICES_FIELD_NUMBER = 1;
  private java.util.List<com.google.monitoring.v3.Service> services_;
  /**
   * <pre>
   * The `Service`s matching the specified filter.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.Service services = 1;</code>
   */
  @java.lang.Override
  public java.util.List<com.google.monitoring.v3.Service> getServicesList() {
    return services_;
  }
  /**
   * <pre>
   * The `Service`s matching the specified filter.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.Service services = 1;</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.monitoring.v3.ServiceOrBuilder> 
      getServicesOrBuilderList() {
    return services_;
  }
  /**
   * <pre>
   * The `Service`s matching the specified filter.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.Service services = 1;</code>
   */
  @java.lang.Override
  public int getServicesCount() {
    return services_.size();
  }
  /**
   * <pre>
   * The `Service`s matching the specified filter.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.Service services = 1;</code>
   */
  @java.lang.Override
  public com.google.monitoring.v3.Service getServices(int index) {
    return services_.get(index);
  }
  /**
   * <pre>
   * The `Service`s matching the specified filter.
   * </pre>
   *
   * <code>repeated .google.monitoring.v3.Service services = 1;</code>
   */
  @java.lang.Override
  public com.google.monitoring.v3.ServiceOrBuilder getServicesOrBuilder(
      int index) {
    return services_.get(index);
  }

  public static final int NEXT_PAGE_TOKEN_FIELD_NUMBER = 2;
  private volatile java.lang.Object nextPageToken_;
  /**
   * <pre>
   * If there are more results than have been returned, then this field is set
   * to a non-empty value.  To see the additional results,
   * use that value as `page_token` in the next call to this method.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  @java.lang.Override
  public java.lang.String getNextPageToken() {
    java.lang.Object ref = nextPageToken_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      nextPageToken_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * If there are more results than have been returned, then this field is set
   * to a non-empty value.  To see the additional results,
   * use that value as `page_token` in the next call to this method.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getNextPageTokenBytes() {
    java.lang.Object ref = nextPageToken_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      nextPageToken_ = b;
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
    for (int i = 0; i < services_.size(); i++) {
      output.writeMessage(1, services_.get(i));
    }
    if (!getNextPageTokenBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, nextPageToken_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    for (int i = 0; i < services_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, services_.get(i));
    }
    if (!getNextPageTokenBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, nextPageToken_);
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
    if (!(obj instanceof com.google.monitoring.v3.ListServicesResponse)) {
      return super.equals(obj);
    }
    com.google.monitoring.v3.ListServicesResponse other = (com.google.monitoring.v3.ListServicesResponse) obj;

    if (!getServicesList()
        .equals(other.getServicesList())) return false;
    if (!getNextPageToken()
        .equals(other.getNextPageToken())) return false;
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
    if (getServicesCount() > 0) {
      hash = (37 * hash) + SERVICES_FIELD_NUMBER;
      hash = (53 * hash) + getServicesList().hashCode();
    }
    hash = (37 * hash) + NEXT_PAGE_TOKEN_FIELD_NUMBER;
    hash = (53 * hash) + getNextPageToken().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.monitoring.v3.ListServicesResponse parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.monitoring.v3.ListServicesResponse parseFrom(
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
  public static Builder newBuilder(com.google.monitoring.v3.ListServicesResponse prototype) {
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
   * The `ListServices` response.
   * </pre>
   *
   * Protobuf type {@code google.monitoring.v3.ListServicesResponse}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.monitoring.v3.ListServicesResponse)
      com.google.monitoring.v3.ListServicesResponseOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.monitoring.v3.ServiceMonitoringServiceProto.internal_static_google_monitoring_v3_ListServicesResponse_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.monitoring.v3.ServiceMonitoringServiceProto.internal_static_google_monitoring_v3_ListServicesResponse_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.monitoring.v3.ListServicesResponse.class, com.google.monitoring.v3.ListServicesResponse.Builder.class);
    }

    // Construct using com.google.monitoring.v3.ListServicesResponse.newBuilder()
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
        getServicesFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (servicesBuilder_ == null) {
        services_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        servicesBuilder_.clear();
      }
      nextPageToken_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.monitoring.v3.ServiceMonitoringServiceProto.internal_static_google_monitoring_v3_ListServicesResponse_descriptor;
    }

    @java.lang.Override
    public com.google.monitoring.v3.ListServicesResponse getDefaultInstanceForType() {
      return com.google.monitoring.v3.ListServicesResponse.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.monitoring.v3.ListServicesResponse build() {
      com.google.monitoring.v3.ListServicesResponse result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.monitoring.v3.ListServicesResponse buildPartial() {
      com.google.monitoring.v3.ListServicesResponse result = new com.google.monitoring.v3.ListServicesResponse(this);
      int from_bitField0_ = bitField0_;
      if (servicesBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          services_ = java.util.Collections.unmodifiableList(services_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.services_ = services_;
      } else {
        result.services_ = servicesBuilder_.build();
      }
      result.nextPageToken_ = nextPageToken_;
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
      if (other instanceof com.google.monitoring.v3.ListServicesResponse) {
        return mergeFrom((com.google.monitoring.v3.ListServicesResponse)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.monitoring.v3.ListServicesResponse other) {
      if (other == com.google.monitoring.v3.ListServicesResponse.getDefaultInstance()) return this;
      if (servicesBuilder_ == null) {
        if (!other.services_.isEmpty()) {
          if (services_.isEmpty()) {
            services_ = other.services_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureServicesIsMutable();
            services_.addAll(other.services_);
          }
          onChanged();
        }
      } else {
        if (!other.services_.isEmpty()) {
          if (servicesBuilder_.isEmpty()) {
            servicesBuilder_.dispose();
            servicesBuilder_ = null;
            services_ = other.services_;
            bitField0_ = (bitField0_ & ~0x00000001);
            servicesBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getServicesFieldBuilder() : null;
          } else {
            servicesBuilder_.addAllMessages(other.services_);
          }
        }
      }
      if (!other.getNextPageToken().isEmpty()) {
        nextPageToken_ = other.nextPageToken_;
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
      com.google.monitoring.v3.ListServicesResponse parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.monitoring.v3.ListServicesResponse) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.monitoring.v3.Service> services_ =
      java.util.Collections.emptyList();
    private void ensureServicesIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        services_ = new java.util.ArrayList<com.google.monitoring.v3.Service>(services_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.monitoring.v3.Service, com.google.monitoring.v3.Service.Builder, com.google.monitoring.v3.ServiceOrBuilder> servicesBuilder_;

    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public java.util.List<com.google.monitoring.v3.Service> getServicesList() {
      if (servicesBuilder_ == null) {
        return java.util.Collections.unmodifiableList(services_);
      } else {
        return servicesBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public int getServicesCount() {
      if (servicesBuilder_ == null) {
        return services_.size();
      } else {
        return servicesBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public com.google.monitoring.v3.Service getServices(int index) {
      if (servicesBuilder_ == null) {
        return services_.get(index);
      } else {
        return servicesBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder setServices(
        int index, com.google.monitoring.v3.Service value) {
      if (servicesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureServicesIsMutable();
        services_.set(index, value);
        onChanged();
      } else {
        servicesBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder setServices(
        int index, com.google.monitoring.v3.Service.Builder builderForValue) {
      if (servicesBuilder_ == null) {
        ensureServicesIsMutable();
        services_.set(index, builderForValue.build());
        onChanged();
      } else {
        servicesBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder addServices(com.google.monitoring.v3.Service value) {
      if (servicesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureServicesIsMutable();
        services_.add(value);
        onChanged();
      } else {
        servicesBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder addServices(
        int index, com.google.monitoring.v3.Service value) {
      if (servicesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureServicesIsMutable();
        services_.add(index, value);
        onChanged();
      } else {
        servicesBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder addServices(
        com.google.monitoring.v3.Service.Builder builderForValue) {
      if (servicesBuilder_ == null) {
        ensureServicesIsMutable();
        services_.add(builderForValue.build());
        onChanged();
      } else {
        servicesBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder addServices(
        int index, com.google.monitoring.v3.Service.Builder builderForValue) {
      if (servicesBuilder_ == null) {
        ensureServicesIsMutable();
        services_.add(index, builderForValue.build());
        onChanged();
      } else {
        servicesBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder addAllServices(
        java.lang.Iterable<? extends com.google.monitoring.v3.Service> values) {
      if (servicesBuilder_ == null) {
        ensureServicesIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, services_);
        onChanged();
      } else {
        servicesBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder clearServices() {
      if (servicesBuilder_ == null) {
        services_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        servicesBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public Builder removeServices(int index) {
      if (servicesBuilder_ == null) {
        ensureServicesIsMutable();
        services_.remove(index);
        onChanged();
      } else {
        servicesBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public com.google.monitoring.v3.Service.Builder getServicesBuilder(
        int index) {
      return getServicesFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public com.google.monitoring.v3.ServiceOrBuilder getServicesOrBuilder(
        int index) {
      if (servicesBuilder_ == null) {
        return services_.get(index);  } else {
        return servicesBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public java.util.List<? extends com.google.monitoring.v3.ServiceOrBuilder> 
         getServicesOrBuilderList() {
      if (servicesBuilder_ != null) {
        return servicesBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(services_);
      }
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public com.google.monitoring.v3.Service.Builder addServicesBuilder() {
      return getServicesFieldBuilder().addBuilder(
          com.google.monitoring.v3.Service.getDefaultInstance());
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public com.google.monitoring.v3.Service.Builder addServicesBuilder(
        int index) {
      return getServicesFieldBuilder().addBuilder(
          index, com.google.monitoring.v3.Service.getDefaultInstance());
    }
    /**
     * <pre>
     * The `Service`s matching the specified filter.
     * </pre>
     *
     * <code>repeated .google.monitoring.v3.Service services = 1;</code>
     */
    public java.util.List<com.google.monitoring.v3.Service.Builder> 
         getServicesBuilderList() {
      return getServicesFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.monitoring.v3.Service, com.google.monitoring.v3.Service.Builder, com.google.monitoring.v3.ServiceOrBuilder> 
        getServicesFieldBuilder() {
      if (servicesBuilder_ == null) {
        servicesBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.monitoring.v3.Service, com.google.monitoring.v3.Service.Builder, com.google.monitoring.v3.ServiceOrBuilder>(
                services_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        services_ = null;
      }
      return servicesBuilder_;
    }

    private java.lang.Object nextPageToken_ = "";
    /**
     * <pre>
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `page_token` in the next call to this method.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return The nextPageToken.
     */
    public java.lang.String getNextPageToken() {
      java.lang.Object ref = nextPageToken_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        nextPageToken_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `page_token` in the next call to this method.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return The bytes for nextPageToken.
     */
    public com.google.protobuf.ByteString
        getNextPageTokenBytes() {
      java.lang.Object ref = nextPageToken_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        nextPageToken_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `page_token` in the next call to this method.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @param value The nextPageToken to set.
     * @return This builder for chaining.
     */
    public Builder setNextPageToken(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      nextPageToken_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `page_token` in the next call to this method.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearNextPageToken() {
      
      nextPageToken_ = getDefaultInstance().getNextPageToken();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If there are more results than have been returned, then this field is set
     * to a non-empty value.  To see the additional results,
     * use that value as `page_token` in the next call to this method.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @param value The bytes for nextPageToken to set.
     * @return This builder for chaining.
     */
    public Builder setNextPageTokenBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      nextPageToken_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.monitoring.v3.ListServicesResponse)
  }

  // @@protoc_insertion_point(class_scope:google.monitoring.v3.ListServicesResponse)
  private static final com.google.monitoring.v3.ListServicesResponse DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.monitoring.v3.ListServicesResponse();
  }

  public static com.google.monitoring.v3.ListServicesResponse getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ListServicesResponse>
      PARSER = new com.google.protobuf.AbstractParser<ListServicesResponse>() {
    @java.lang.Override
    public ListServicesResponse parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ListServicesResponse(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ListServicesResponse> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ListServicesResponse> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.monitoring.v3.ListServicesResponse getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

