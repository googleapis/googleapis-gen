// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datacatalog/v1/table_spec.proto

package com.google.cloud.datacatalog.v1;

/**
 * <pre>
 * Table view specification.
 * </pre>
 *
 * Protobuf type {@code google.cloud.datacatalog.v1.ViewSpec}
 */
public final class ViewSpec extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.datacatalog.v1.ViewSpec)
    ViewSpecOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ViewSpec.newBuilder() to construct.
  private ViewSpec(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ViewSpec() {
    viewQuery_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ViewSpec();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ViewSpec(
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

            viewQuery_ = s;
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
    return com.google.cloud.datacatalog.v1.TableSpecOuterClass.internal_static_google_cloud_datacatalog_v1_ViewSpec_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.datacatalog.v1.TableSpecOuterClass.internal_static_google_cloud_datacatalog_v1_ViewSpec_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.datacatalog.v1.ViewSpec.class, com.google.cloud.datacatalog.v1.ViewSpec.Builder.class);
  }

  public static final int VIEW_QUERY_FIELD_NUMBER = 1;
  private volatile java.lang.Object viewQuery_;
  /**
   * <pre>
   * Output only. The query that defines the table view.
   * </pre>
   *
   * <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The viewQuery.
   */
  @java.lang.Override
  public java.lang.String getViewQuery() {
    java.lang.Object ref = viewQuery_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      viewQuery_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Output only. The query that defines the table view.
   * </pre>
   *
   * <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
   * @return The bytes for viewQuery.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getViewQueryBytes() {
    java.lang.Object ref = viewQuery_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      viewQuery_ = b;
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
    if (!getViewQueryBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, viewQuery_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getViewQueryBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, viewQuery_);
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
    if (!(obj instanceof com.google.cloud.datacatalog.v1.ViewSpec)) {
      return super.equals(obj);
    }
    com.google.cloud.datacatalog.v1.ViewSpec other = (com.google.cloud.datacatalog.v1.ViewSpec) obj;

    if (!getViewQuery()
        .equals(other.getViewQuery())) return false;
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
    hash = (37 * hash) + VIEW_QUERY_FIELD_NUMBER;
    hash = (53 * hash) + getViewQuery().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.ViewSpec parseFrom(
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
  public static Builder newBuilder(com.google.cloud.datacatalog.v1.ViewSpec prototype) {
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
   * Table view specification.
   * </pre>
   *
   * Protobuf type {@code google.cloud.datacatalog.v1.ViewSpec}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.datacatalog.v1.ViewSpec)
      com.google.cloud.datacatalog.v1.ViewSpecOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.datacatalog.v1.TableSpecOuterClass.internal_static_google_cloud_datacatalog_v1_ViewSpec_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.datacatalog.v1.TableSpecOuterClass.internal_static_google_cloud_datacatalog_v1_ViewSpec_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.datacatalog.v1.ViewSpec.class, com.google.cloud.datacatalog.v1.ViewSpec.Builder.class);
    }

    // Construct using com.google.cloud.datacatalog.v1.ViewSpec.newBuilder()
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
      viewQuery_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.datacatalog.v1.TableSpecOuterClass.internal_static_google_cloud_datacatalog_v1_ViewSpec_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.ViewSpec getDefaultInstanceForType() {
      return com.google.cloud.datacatalog.v1.ViewSpec.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.ViewSpec build() {
      com.google.cloud.datacatalog.v1.ViewSpec result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.ViewSpec buildPartial() {
      com.google.cloud.datacatalog.v1.ViewSpec result = new com.google.cloud.datacatalog.v1.ViewSpec(this);
      result.viewQuery_ = viewQuery_;
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
      if (other instanceof com.google.cloud.datacatalog.v1.ViewSpec) {
        return mergeFrom((com.google.cloud.datacatalog.v1.ViewSpec)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.datacatalog.v1.ViewSpec other) {
      if (other == com.google.cloud.datacatalog.v1.ViewSpec.getDefaultInstance()) return this;
      if (!other.getViewQuery().isEmpty()) {
        viewQuery_ = other.viewQuery_;
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
      com.google.cloud.datacatalog.v1.ViewSpec parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.datacatalog.v1.ViewSpec) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object viewQuery_ = "";
    /**
     * <pre>
     * Output only. The query that defines the table view.
     * </pre>
     *
     * <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return The viewQuery.
     */
    public java.lang.String getViewQuery() {
      java.lang.Object ref = viewQuery_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        viewQuery_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Output only. The query that defines the table view.
     * </pre>
     *
     * <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return The bytes for viewQuery.
     */
    public com.google.protobuf.ByteString
        getViewQueryBytes() {
      java.lang.Object ref = viewQuery_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        viewQuery_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Output only. The query that defines the table view.
     * </pre>
     *
     * <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param value The viewQuery to set.
     * @return This builder for chaining.
     */
    public Builder setViewQuery(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      viewQuery_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Output only. The query that defines the table view.
     * </pre>
     *
     * <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return This builder for chaining.
     */
    public Builder clearViewQuery() {
      
      viewQuery_ = getDefaultInstance().getViewQuery();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Output only. The query that defines the table view.
     * </pre>
     *
     * <code>string view_query = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param value The bytes for viewQuery to set.
     * @return This builder for chaining.
     */
    public Builder setViewQueryBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      viewQuery_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.datacatalog.v1.ViewSpec)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.datacatalog.v1.ViewSpec)
  private static final com.google.cloud.datacatalog.v1.ViewSpec DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.datacatalog.v1.ViewSpec();
  }

  public static com.google.cloud.datacatalog.v1.ViewSpec getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ViewSpec>
      PARSER = new com.google.protobuf.AbstractParser<ViewSpec>() {
    @java.lang.Override
    public ViewSpec parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ViewSpec(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ViewSpec> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ViewSpec> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.datacatalog.v1.ViewSpec getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

