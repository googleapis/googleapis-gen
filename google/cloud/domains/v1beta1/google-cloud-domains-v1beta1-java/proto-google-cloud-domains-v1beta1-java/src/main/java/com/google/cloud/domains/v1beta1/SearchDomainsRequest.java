// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/domains/v1beta1/domains.proto

package com.google.cloud.domains.v1beta1;

/**
 * <pre>
 * Request for the `SearchDomains` method.
 * </pre>
 *
 * Protobuf type {@code google.cloud.domains.v1beta1.SearchDomainsRequest}
 */
public final class SearchDomainsRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.domains.v1beta1.SearchDomainsRequest)
    SearchDomainsRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use SearchDomainsRequest.newBuilder() to construct.
  private SearchDomainsRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private SearchDomainsRequest() {
    query_ = "";
    location_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new SearchDomainsRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private SearchDomainsRequest(
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

            query_ = s;
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            location_ = s;
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
    return com.google.cloud.domains.v1beta1.DomainsProto.internal_static_google_cloud_domains_v1beta1_SearchDomainsRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.domains.v1beta1.DomainsProto.internal_static_google_cloud_domains_v1beta1_SearchDomainsRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.domains.v1beta1.SearchDomainsRequest.class, com.google.cloud.domains.v1beta1.SearchDomainsRequest.Builder.class);
  }

  public static final int QUERY_FIELD_NUMBER = 1;
  private volatile java.lang.Object query_;
  /**
   * <pre>
   * Required. String used to search for available domain names.
   * </pre>
   *
   * <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The query.
   */
  @java.lang.Override
  public java.lang.String getQuery() {
    java.lang.Object ref = query_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      query_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. String used to search for available domain names.
   * </pre>
   *
   * <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for query.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getQueryBytes() {
    java.lang.Object ref = query_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      query_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int LOCATION_FIELD_NUMBER = 2;
  private volatile java.lang.Object location_;
  /**
   * <pre>
   * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
   * </pre>
   *
   * <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The location.
   */
  @java.lang.Override
  public java.lang.String getLocation() {
    java.lang.Object ref = location_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      location_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
   * </pre>
   *
   * <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for location.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getLocationBytes() {
    java.lang.Object ref = location_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      location_ = b;
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
    if (!getQueryBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, query_);
    }
    if (!getLocationBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, location_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getQueryBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, query_);
    }
    if (!getLocationBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, location_);
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
    if (!(obj instanceof com.google.cloud.domains.v1beta1.SearchDomainsRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.domains.v1beta1.SearchDomainsRequest other = (com.google.cloud.domains.v1beta1.SearchDomainsRequest) obj;

    if (!getQuery()
        .equals(other.getQuery())) return false;
    if (!getLocation()
        .equals(other.getLocation())) return false;
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
    hash = (37 * hash) + QUERY_FIELD_NUMBER;
    hash = (53 * hash) + getQuery().hashCode();
    hash = (37 * hash) + LOCATION_FIELD_NUMBER;
    hash = (53 * hash) + getLocation().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest parseFrom(
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
  public static Builder newBuilder(com.google.cloud.domains.v1beta1.SearchDomainsRequest prototype) {
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
   * Request for the `SearchDomains` method.
   * </pre>
   *
   * Protobuf type {@code google.cloud.domains.v1beta1.SearchDomainsRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.domains.v1beta1.SearchDomainsRequest)
      com.google.cloud.domains.v1beta1.SearchDomainsRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.domains.v1beta1.DomainsProto.internal_static_google_cloud_domains_v1beta1_SearchDomainsRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.domains.v1beta1.DomainsProto.internal_static_google_cloud_domains_v1beta1_SearchDomainsRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.domains.v1beta1.SearchDomainsRequest.class, com.google.cloud.domains.v1beta1.SearchDomainsRequest.Builder.class);
    }

    // Construct using com.google.cloud.domains.v1beta1.SearchDomainsRequest.newBuilder()
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
      query_ = "";

      location_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.domains.v1beta1.DomainsProto.internal_static_google_cloud_domains_v1beta1_SearchDomainsRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.domains.v1beta1.SearchDomainsRequest getDefaultInstanceForType() {
      return com.google.cloud.domains.v1beta1.SearchDomainsRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.domains.v1beta1.SearchDomainsRequest build() {
      com.google.cloud.domains.v1beta1.SearchDomainsRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.domains.v1beta1.SearchDomainsRequest buildPartial() {
      com.google.cloud.domains.v1beta1.SearchDomainsRequest result = new com.google.cloud.domains.v1beta1.SearchDomainsRequest(this);
      result.query_ = query_;
      result.location_ = location_;
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
      if (other instanceof com.google.cloud.domains.v1beta1.SearchDomainsRequest) {
        return mergeFrom((com.google.cloud.domains.v1beta1.SearchDomainsRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.domains.v1beta1.SearchDomainsRequest other) {
      if (other == com.google.cloud.domains.v1beta1.SearchDomainsRequest.getDefaultInstance()) return this;
      if (!other.getQuery().isEmpty()) {
        query_ = other.query_;
        onChanged();
      }
      if (!other.getLocation().isEmpty()) {
        location_ = other.location_;
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
      com.google.cloud.domains.v1beta1.SearchDomainsRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.domains.v1beta1.SearchDomainsRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object query_ = "";
    /**
     * <pre>
     * Required. String used to search for available domain names.
     * </pre>
     *
     * <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The query.
     */
    public java.lang.String getQuery() {
      java.lang.Object ref = query_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        query_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. String used to search for available domain names.
     * </pre>
     *
     * <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for query.
     */
    public com.google.protobuf.ByteString
        getQueryBytes() {
      java.lang.Object ref = query_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        query_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. String used to search for available domain names.
     * </pre>
     *
     * <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The query to set.
     * @return This builder for chaining.
     */
    public Builder setQuery(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      query_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. String used to search for available domain names.
     * </pre>
     *
     * <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return This builder for chaining.
     */
    public Builder clearQuery() {
      
      query_ = getDefaultInstance().getQuery();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. String used to search for available domain names.
     * </pre>
     *
     * <code>string query = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The bytes for query to set.
     * @return This builder for chaining.
     */
    public Builder setQueryBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      query_ = value;
      onChanged();
      return this;
    }

    private java.lang.Object location_ = "";
    /**
     * <pre>
     * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     * </pre>
     *
     * <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The location.
     */
    public java.lang.String getLocation() {
      java.lang.Object ref = location_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        location_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     * </pre>
     *
     * <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The bytes for location.
     */
    public com.google.protobuf.ByteString
        getLocationBytes() {
      java.lang.Object ref = location_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        location_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     * </pre>
     *
     * <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The location to set.
     * @return This builder for chaining.
     */
    public Builder setLocation(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      location_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     * </pre>
     *
     * <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return This builder for chaining.
     */
    public Builder clearLocation() {
      
      location_ = getDefaultInstance().getLocation();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The location. Must be in the format `projects/&#42;&#47;locations/&#42;`.
     * </pre>
     *
     * <code>string location = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The bytes for location to set.
     * @return This builder for chaining.
     */
    public Builder setLocationBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      location_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.domains.v1beta1.SearchDomainsRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.domains.v1beta1.SearchDomainsRequest)
  private static final com.google.cloud.domains.v1beta1.SearchDomainsRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.domains.v1beta1.SearchDomainsRequest();
  }

  public static com.google.cloud.domains.v1beta1.SearchDomainsRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<SearchDomainsRequest>
      PARSER = new com.google.protobuf.AbstractParser<SearchDomainsRequest>() {
    @java.lang.Override
    public SearchDomainsRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new SearchDomainsRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<SearchDomainsRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<SearchDomainsRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.domains.v1beta1.SearchDomainsRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

