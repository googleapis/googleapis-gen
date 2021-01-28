// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/automl/v1beta1/service.proto

package com.google.cloud.automl.v1beta1;

/**
 * <pre>
 * Response message for [AutoMl.ListTableSpecs][google.cloud.automl.v1beta1.AutoMl.ListTableSpecs].
 * </pre>
 *
 * Protobuf type {@code google.cloud.automl.v1beta1.ListTableSpecsResponse}
 */
public final class ListTableSpecsResponse extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.automl.v1beta1.ListTableSpecsResponse)
    ListTableSpecsResponseOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ListTableSpecsResponse.newBuilder() to construct.
  private ListTableSpecsResponse(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ListTableSpecsResponse() {
    tableSpecs_ = java.util.Collections.emptyList();
    nextPageToken_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ListTableSpecsResponse();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ListTableSpecsResponse(
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
              tableSpecs_ = new java.util.ArrayList<com.google.cloud.automl.v1beta1.TableSpec>();
              mutable_bitField0_ |= 0x00000001;
            }
            tableSpecs_.add(
                input.readMessage(com.google.cloud.automl.v1beta1.TableSpec.parser(), extensionRegistry));
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
        tableSpecs_ = java.util.Collections.unmodifiableList(tableSpecs_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.cloud.automl.v1beta1.AutoMlProto.internal_static_google_cloud_automl_v1beta1_ListTableSpecsResponse_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.automl.v1beta1.AutoMlProto.internal_static_google_cloud_automl_v1beta1_ListTableSpecsResponse_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.automl.v1beta1.ListTableSpecsResponse.class, com.google.cloud.automl.v1beta1.ListTableSpecsResponse.Builder.class);
  }

  public static final int TABLE_SPECS_FIELD_NUMBER = 1;
  private java.util.List<com.google.cloud.automl.v1beta1.TableSpec> tableSpecs_;
  /**
   * <pre>
   * The table specs read.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
   */
  @java.lang.Override
  public java.util.List<com.google.cloud.automl.v1beta1.TableSpec> getTableSpecsList() {
    return tableSpecs_;
  }
  /**
   * <pre>
   * The table specs read.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.cloud.automl.v1beta1.TableSpecOrBuilder> 
      getTableSpecsOrBuilderList() {
    return tableSpecs_;
  }
  /**
   * <pre>
   * The table specs read.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
   */
  @java.lang.Override
  public int getTableSpecsCount() {
    return tableSpecs_.size();
  }
  /**
   * <pre>
   * The table specs read.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
   */
  @java.lang.Override
  public com.google.cloud.automl.v1beta1.TableSpec getTableSpecs(int index) {
    return tableSpecs_.get(index);
  }
  /**
   * <pre>
   * The table specs read.
   * </pre>
   *
   * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
   */
  @java.lang.Override
  public com.google.cloud.automl.v1beta1.TableSpecOrBuilder getTableSpecsOrBuilder(
      int index) {
    return tableSpecs_.get(index);
  }

  public static final int NEXT_PAGE_TOKEN_FIELD_NUMBER = 2;
  private volatile java.lang.Object nextPageToken_;
  /**
   * <pre>
   * A token to retrieve next page of results.
   * Pass to [ListTableSpecsRequest.page_token][google.cloud.automl.v1beta1.ListTableSpecsRequest.page_token] to obtain that page.
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
   * A token to retrieve next page of results.
   * Pass to [ListTableSpecsRequest.page_token][google.cloud.automl.v1beta1.ListTableSpecsRequest.page_token] to obtain that page.
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
    for (int i = 0; i < tableSpecs_.size(); i++) {
      output.writeMessage(1, tableSpecs_.get(i));
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
    for (int i = 0; i < tableSpecs_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, tableSpecs_.get(i));
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
    if (!(obj instanceof com.google.cloud.automl.v1beta1.ListTableSpecsResponse)) {
      return super.equals(obj);
    }
    com.google.cloud.automl.v1beta1.ListTableSpecsResponse other = (com.google.cloud.automl.v1beta1.ListTableSpecsResponse) obj;

    if (!getTableSpecsList()
        .equals(other.getTableSpecsList())) return false;
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
    if (getTableSpecsCount() > 0) {
      hash = (37 * hash) + TABLE_SPECS_FIELD_NUMBER;
      hash = (53 * hash) + getTableSpecsList().hashCode();
    }
    hash = (37 * hash) + NEXT_PAGE_TOKEN_FIELD_NUMBER;
    hash = (53 * hash) + getNextPageToken().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse parseFrom(
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
  public static Builder newBuilder(com.google.cloud.automl.v1beta1.ListTableSpecsResponse prototype) {
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
   * Response message for [AutoMl.ListTableSpecs][google.cloud.automl.v1beta1.AutoMl.ListTableSpecs].
   * </pre>
   *
   * Protobuf type {@code google.cloud.automl.v1beta1.ListTableSpecsResponse}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.automl.v1beta1.ListTableSpecsResponse)
      com.google.cloud.automl.v1beta1.ListTableSpecsResponseOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.automl.v1beta1.AutoMlProto.internal_static_google_cloud_automl_v1beta1_ListTableSpecsResponse_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.automl.v1beta1.AutoMlProto.internal_static_google_cloud_automl_v1beta1_ListTableSpecsResponse_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.automl.v1beta1.ListTableSpecsResponse.class, com.google.cloud.automl.v1beta1.ListTableSpecsResponse.Builder.class);
    }

    // Construct using com.google.cloud.automl.v1beta1.ListTableSpecsResponse.newBuilder()
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
        getTableSpecsFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (tableSpecsBuilder_ == null) {
        tableSpecs_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        tableSpecsBuilder_.clear();
      }
      nextPageToken_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.automl.v1beta1.AutoMlProto.internal_static_google_cloud_automl_v1beta1_ListTableSpecsResponse_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.automl.v1beta1.ListTableSpecsResponse getDefaultInstanceForType() {
      return com.google.cloud.automl.v1beta1.ListTableSpecsResponse.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.automl.v1beta1.ListTableSpecsResponse build() {
      com.google.cloud.automl.v1beta1.ListTableSpecsResponse result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.automl.v1beta1.ListTableSpecsResponse buildPartial() {
      com.google.cloud.automl.v1beta1.ListTableSpecsResponse result = new com.google.cloud.automl.v1beta1.ListTableSpecsResponse(this);
      int from_bitField0_ = bitField0_;
      if (tableSpecsBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          tableSpecs_ = java.util.Collections.unmodifiableList(tableSpecs_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.tableSpecs_ = tableSpecs_;
      } else {
        result.tableSpecs_ = tableSpecsBuilder_.build();
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
      if (other instanceof com.google.cloud.automl.v1beta1.ListTableSpecsResponse) {
        return mergeFrom((com.google.cloud.automl.v1beta1.ListTableSpecsResponse)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.automl.v1beta1.ListTableSpecsResponse other) {
      if (other == com.google.cloud.automl.v1beta1.ListTableSpecsResponse.getDefaultInstance()) return this;
      if (tableSpecsBuilder_ == null) {
        if (!other.tableSpecs_.isEmpty()) {
          if (tableSpecs_.isEmpty()) {
            tableSpecs_ = other.tableSpecs_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureTableSpecsIsMutable();
            tableSpecs_.addAll(other.tableSpecs_);
          }
          onChanged();
        }
      } else {
        if (!other.tableSpecs_.isEmpty()) {
          if (tableSpecsBuilder_.isEmpty()) {
            tableSpecsBuilder_.dispose();
            tableSpecsBuilder_ = null;
            tableSpecs_ = other.tableSpecs_;
            bitField0_ = (bitField0_ & ~0x00000001);
            tableSpecsBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getTableSpecsFieldBuilder() : null;
          } else {
            tableSpecsBuilder_.addAllMessages(other.tableSpecs_);
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
      com.google.cloud.automl.v1beta1.ListTableSpecsResponse parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.automl.v1beta1.ListTableSpecsResponse) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.cloud.automl.v1beta1.TableSpec> tableSpecs_ =
      java.util.Collections.emptyList();
    private void ensureTableSpecsIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        tableSpecs_ = new java.util.ArrayList<com.google.cloud.automl.v1beta1.TableSpec>(tableSpecs_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.automl.v1beta1.TableSpec, com.google.cloud.automl.v1beta1.TableSpec.Builder, com.google.cloud.automl.v1beta1.TableSpecOrBuilder> tableSpecsBuilder_;

    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public java.util.List<com.google.cloud.automl.v1beta1.TableSpec> getTableSpecsList() {
      if (tableSpecsBuilder_ == null) {
        return java.util.Collections.unmodifiableList(tableSpecs_);
      } else {
        return tableSpecsBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public int getTableSpecsCount() {
      if (tableSpecsBuilder_ == null) {
        return tableSpecs_.size();
      } else {
        return tableSpecsBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public com.google.cloud.automl.v1beta1.TableSpec getTableSpecs(int index) {
      if (tableSpecsBuilder_ == null) {
        return tableSpecs_.get(index);
      } else {
        return tableSpecsBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder setTableSpecs(
        int index, com.google.cloud.automl.v1beta1.TableSpec value) {
      if (tableSpecsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureTableSpecsIsMutable();
        tableSpecs_.set(index, value);
        onChanged();
      } else {
        tableSpecsBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder setTableSpecs(
        int index, com.google.cloud.automl.v1beta1.TableSpec.Builder builderForValue) {
      if (tableSpecsBuilder_ == null) {
        ensureTableSpecsIsMutable();
        tableSpecs_.set(index, builderForValue.build());
        onChanged();
      } else {
        tableSpecsBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder addTableSpecs(com.google.cloud.automl.v1beta1.TableSpec value) {
      if (tableSpecsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureTableSpecsIsMutable();
        tableSpecs_.add(value);
        onChanged();
      } else {
        tableSpecsBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder addTableSpecs(
        int index, com.google.cloud.automl.v1beta1.TableSpec value) {
      if (tableSpecsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureTableSpecsIsMutable();
        tableSpecs_.add(index, value);
        onChanged();
      } else {
        tableSpecsBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder addTableSpecs(
        com.google.cloud.automl.v1beta1.TableSpec.Builder builderForValue) {
      if (tableSpecsBuilder_ == null) {
        ensureTableSpecsIsMutable();
        tableSpecs_.add(builderForValue.build());
        onChanged();
      } else {
        tableSpecsBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder addTableSpecs(
        int index, com.google.cloud.automl.v1beta1.TableSpec.Builder builderForValue) {
      if (tableSpecsBuilder_ == null) {
        ensureTableSpecsIsMutable();
        tableSpecs_.add(index, builderForValue.build());
        onChanged();
      } else {
        tableSpecsBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder addAllTableSpecs(
        java.lang.Iterable<? extends com.google.cloud.automl.v1beta1.TableSpec> values) {
      if (tableSpecsBuilder_ == null) {
        ensureTableSpecsIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, tableSpecs_);
        onChanged();
      } else {
        tableSpecsBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder clearTableSpecs() {
      if (tableSpecsBuilder_ == null) {
        tableSpecs_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        tableSpecsBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public Builder removeTableSpecs(int index) {
      if (tableSpecsBuilder_ == null) {
        ensureTableSpecsIsMutable();
        tableSpecs_.remove(index);
        onChanged();
      } else {
        tableSpecsBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public com.google.cloud.automl.v1beta1.TableSpec.Builder getTableSpecsBuilder(
        int index) {
      return getTableSpecsFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public com.google.cloud.automl.v1beta1.TableSpecOrBuilder getTableSpecsOrBuilder(
        int index) {
      if (tableSpecsBuilder_ == null) {
        return tableSpecs_.get(index);  } else {
        return tableSpecsBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public java.util.List<? extends com.google.cloud.automl.v1beta1.TableSpecOrBuilder> 
         getTableSpecsOrBuilderList() {
      if (tableSpecsBuilder_ != null) {
        return tableSpecsBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(tableSpecs_);
      }
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public com.google.cloud.automl.v1beta1.TableSpec.Builder addTableSpecsBuilder() {
      return getTableSpecsFieldBuilder().addBuilder(
          com.google.cloud.automl.v1beta1.TableSpec.getDefaultInstance());
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public com.google.cloud.automl.v1beta1.TableSpec.Builder addTableSpecsBuilder(
        int index) {
      return getTableSpecsFieldBuilder().addBuilder(
          index, com.google.cloud.automl.v1beta1.TableSpec.getDefaultInstance());
    }
    /**
     * <pre>
     * The table specs read.
     * </pre>
     *
     * <code>repeated .google.cloud.automl.v1beta1.TableSpec table_specs = 1;</code>
     */
    public java.util.List<com.google.cloud.automl.v1beta1.TableSpec.Builder> 
         getTableSpecsBuilderList() {
      return getTableSpecsFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.automl.v1beta1.TableSpec, com.google.cloud.automl.v1beta1.TableSpec.Builder, com.google.cloud.automl.v1beta1.TableSpecOrBuilder> 
        getTableSpecsFieldBuilder() {
      if (tableSpecsBuilder_ == null) {
        tableSpecsBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.cloud.automl.v1beta1.TableSpec, com.google.cloud.automl.v1beta1.TableSpec.Builder, com.google.cloud.automl.v1beta1.TableSpecOrBuilder>(
                tableSpecs_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        tableSpecs_ = null;
      }
      return tableSpecsBuilder_;
    }

    private java.lang.Object nextPageToken_ = "";
    /**
     * <pre>
     * A token to retrieve next page of results.
     * Pass to [ListTableSpecsRequest.page_token][google.cloud.automl.v1beta1.ListTableSpecsRequest.page_token] to obtain that page.
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
     * A token to retrieve next page of results.
     * Pass to [ListTableSpecsRequest.page_token][google.cloud.automl.v1beta1.ListTableSpecsRequest.page_token] to obtain that page.
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
     * A token to retrieve next page of results.
     * Pass to [ListTableSpecsRequest.page_token][google.cloud.automl.v1beta1.ListTableSpecsRequest.page_token] to obtain that page.
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
     * A token to retrieve next page of results.
     * Pass to [ListTableSpecsRequest.page_token][google.cloud.automl.v1beta1.ListTableSpecsRequest.page_token] to obtain that page.
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
     * A token to retrieve next page of results.
     * Pass to [ListTableSpecsRequest.page_token][google.cloud.automl.v1beta1.ListTableSpecsRequest.page_token] to obtain that page.
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


    // @@protoc_insertion_point(builder_scope:google.cloud.automl.v1beta1.ListTableSpecsResponse)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.automl.v1beta1.ListTableSpecsResponse)
  private static final com.google.cloud.automl.v1beta1.ListTableSpecsResponse DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.automl.v1beta1.ListTableSpecsResponse();
  }

  public static com.google.cloud.automl.v1beta1.ListTableSpecsResponse getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ListTableSpecsResponse>
      PARSER = new com.google.protobuf.AbstractParser<ListTableSpecsResponse>() {
    @java.lang.Override
    public ListTableSpecsResponse parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ListTableSpecsResponse(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ListTableSpecsResponse> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ListTableSpecsResponse> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.automl.v1beta1.ListTableSpecsResponse getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

