// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datacatalog/v1/schema.proto

package com.google.cloud.datacatalog.v1;

/**
 * <pre>
 * Represents a schema (e.g. BigQuery, GoogleSQL, Avro schema).
 * </pre>
 *
 * Protobuf type {@code google.cloud.datacatalog.v1.Schema}
 */
public final class Schema extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.datacatalog.v1.Schema)
    SchemaOrBuilder {
private static final long serialVersionUID = 0L;
  // Use Schema.newBuilder() to construct.
  private Schema(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private Schema() {
    columns_ = java.util.Collections.emptyList();
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new Schema();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private Schema(
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
          case 18: {
            if (!((mutable_bitField0_ & 0x00000001) != 0)) {
              columns_ = new java.util.ArrayList<com.google.cloud.datacatalog.v1.ColumnSchema>();
              mutable_bitField0_ |= 0x00000001;
            }
            columns_.add(
                input.readMessage(com.google.cloud.datacatalog.v1.ColumnSchema.parser(), extensionRegistry));
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
        columns_ = java.util.Collections.unmodifiableList(columns_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.cloud.datacatalog.v1.SchemaOuterClass.internal_static_google_cloud_datacatalog_v1_Schema_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.datacatalog.v1.SchemaOuterClass.internal_static_google_cloud_datacatalog_v1_Schema_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.datacatalog.v1.Schema.class, com.google.cloud.datacatalog.v1.Schema.Builder.class);
  }

  public static final int COLUMNS_FIELD_NUMBER = 2;
  private java.util.List<com.google.cloud.datacatalog.v1.ColumnSchema> columns_;
  /**
   * <pre>
   * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
   * specified.
   * </pre>
   *
   * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public java.util.List<com.google.cloud.datacatalog.v1.ColumnSchema> getColumnsList() {
    return columns_;
  }
  /**
   * <pre>
   * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
   * specified.
   * </pre>
   *
   * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.cloud.datacatalog.v1.ColumnSchemaOrBuilder> 
      getColumnsOrBuilderList() {
    return columns_;
  }
  /**
   * <pre>
   * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
   * specified.
   * </pre>
   *
   * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public int getColumnsCount() {
    return columns_.size();
  }
  /**
   * <pre>
   * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
   * specified.
   * </pre>
   *
   * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.cloud.datacatalog.v1.ColumnSchema getColumns(int index) {
    return columns_.get(index);
  }
  /**
   * <pre>
   * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
   * specified.
   * </pre>
   *
   * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.cloud.datacatalog.v1.ColumnSchemaOrBuilder getColumnsOrBuilder(
      int index) {
    return columns_.get(index);
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
    for (int i = 0; i < columns_.size(); i++) {
      output.writeMessage(2, columns_.get(i));
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    for (int i = 0; i < columns_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, columns_.get(i));
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
    if (!(obj instanceof com.google.cloud.datacatalog.v1.Schema)) {
      return super.equals(obj);
    }
    com.google.cloud.datacatalog.v1.Schema other = (com.google.cloud.datacatalog.v1.Schema) obj;

    if (!getColumnsList()
        .equals(other.getColumnsList())) return false;
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
    if (getColumnsCount() > 0) {
      hash = (37 * hash) + COLUMNS_FIELD_NUMBER;
      hash = (53 * hash) + getColumnsList().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.datacatalog.v1.Schema parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.Schema parseFrom(
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
  public static Builder newBuilder(com.google.cloud.datacatalog.v1.Schema prototype) {
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
   * Represents a schema (e.g. BigQuery, GoogleSQL, Avro schema).
   * </pre>
   *
   * Protobuf type {@code google.cloud.datacatalog.v1.Schema}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.datacatalog.v1.Schema)
      com.google.cloud.datacatalog.v1.SchemaOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.datacatalog.v1.SchemaOuterClass.internal_static_google_cloud_datacatalog_v1_Schema_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.datacatalog.v1.SchemaOuterClass.internal_static_google_cloud_datacatalog_v1_Schema_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.datacatalog.v1.Schema.class, com.google.cloud.datacatalog.v1.Schema.Builder.class);
    }

    // Construct using com.google.cloud.datacatalog.v1.Schema.newBuilder()
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
        getColumnsFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (columnsBuilder_ == null) {
        columns_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        columnsBuilder_.clear();
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.datacatalog.v1.SchemaOuterClass.internal_static_google_cloud_datacatalog_v1_Schema_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.Schema getDefaultInstanceForType() {
      return com.google.cloud.datacatalog.v1.Schema.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.Schema build() {
      com.google.cloud.datacatalog.v1.Schema result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.Schema buildPartial() {
      com.google.cloud.datacatalog.v1.Schema result = new com.google.cloud.datacatalog.v1.Schema(this);
      int from_bitField0_ = bitField0_;
      if (columnsBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          columns_ = java.util.Collections.unmodifiableList(columns_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.columns_ = columns_;
      } else {
        result.columns_ = columnsBuilder_.build();
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
      if (other instanceof com.google.cloud.datacatalog.v1.Schema) {
        return mergeFrom((com.google.cloud.datacatalog.v1.Schema)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.datacatalog.v1.Schema other) {
      if (other == com.google.cloud.datacatalog.v1.Schema.getDefaultInstance()) return this;
      if (columnsBuilder_ == null) {
        if (!other.columns_.isEmpty()) {
          if (columns_.isEmpty()) {
            columns_ = other.columns_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureColumnsIsMutable();
            columns_.addAll(other.columns_);
          }
          onChanged();
        }
      } else {
        if (!other.columns_.isEmpty()) {
          if (columnsBuilder_.isEmpty()) {
            columnsBuilder_.dispose();
            columnsBuilder_ = null;
            columns_ = other.columns_;
            bitField0_ = (bitField0_ & ~0x00000001);
            columnsBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getColumnsFieldBuilder() : null;
          } else {
            columnsBuilder_.addAllMessages(other.columns_);
          }
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
      com.google.cloud.datacatalog.v1.Schema parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.datacatalog.v1.Schema) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.cloud.datacatalog.v1.ColumnSchema> columns_ =
      java.util.Collections.emptyList();
    private void ensureColumnsIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        columns_ = new java.util.ArrayList<com.google.cloud.datacatalog.v1.ColumnSchema>(columns_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.datacatalog.v1.ColumnSchema, com.google.cloud.datacatalog.v1.ColumnSchema.Builder, com.google.cloud.datacatalog.v1.ColumnSchemaOrBuilder> columnsBuilder_;

    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public java.util.List<com.google.cloud.datacatalog.v1.ColumnSchema> getColumnsList() {
      if (columnsBuilder_ == null) {
        return java.util.Collections.unmodifiableList(columns_);
      } else {
        return columnsBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public int getColumnsCount() {
      if (columnsBuilder_ == null) {
        return columns_.size();
      } else {
        return columnsBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.datacatalog.v1.ColumnSchema getColumns(int index) {
      if (columnsBuilder_ == null) {
        return columns_.get(index);
      } else {
        return columnsBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setColumns(
        int index, com.google.cloud.datacatalog.v1.ColumnSchema value) {
      if (columnsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureColumnsIsMutable();
        columns_.set(index, value);
        onChanged();
      } else {
        columnsBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setColumns(
        int index, com.google.cloud.datacatalog.v1.ColumnSchema.Builder builderForValue) {
      if (columnsBuilder_ == null) {
        ensureColumnsIsMutable();
        columns_.set(index, builderForValue.build());
        onChanged();
      } else {
        columnsBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder addColumns(com.google.cloud.datacatalog.v1.ColumnSchema value) {
      if (columnsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureColumnsIsMutable();
        columns_.add(value);
        onChanged();
      } else {
        columnsBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder addColumns(
        int index, com.google.cloud.datacatalog.v1.ColumnSchema value) {
      if (columnsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureColumnsIsMutable();
        columns_.add(index, value);
        onChanged();
      } else {
        columnsBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder addColumns(
        com.google.cloud.datacatalog.v1.ColumnSchema.Builder builderForValue) {
      if (columnsBuilder_ == null) {
        ensureColumnsIsMutable();
        columns_.add(builderForValue.build());
        onChanged();
      } else {
        columnsBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder addColumns(
        int index, com.google.cloud.datacatalog.v1.ColumnSchema.Builder builderForValue) {
      if (columnsBuilder_ == null) {
        ensureColumnsIsMutable();
        columns_.add(index, builderForValue.build());
        onChanged();
      } else {
        columnsBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder addAllColumns(
        java.lang.Iterable<? extends com.google.cloud.datacatalog.v1.ColumnSchema> values) {
      if (columnsBuilder_ == null) {
        ensureColumnsIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, columns_);
        onChanged();
      } else {
        columnsBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder clearColumns() {
      if (columnsBuilder_ == null) {
        columns_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        columnsBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder removeColumns(int index) {
      if (columnsBuilder_ == null) {
        ensureColumnsIsMutable();
        columns_.remove(index);
        onChanged();
      } else {
        columnsBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.datacatalog.v1.ColumnSchema.Builder getColumnsBuilder(
        int index) {
      return getColumnsFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.datacatalog.v1.ColumnSchemaOrBuilder getColumnsOrBuilder(
        int index) {
      if (columnsBuilder_ == null) {
        return columns_.get(index);  } else {
        return columnsBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public java.util.List<? extends com.google.cloud.datacatalog.v1.ColumnSchemaOrBuilder> 
         getColumnsOrBuilderList() {
      if (columnsBuilder_ != null) {
        return columnsBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(columns_);
      }
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.datacatalog.v1.ColumnSchema.Builder addColumnsBuilder() {
      return getColumnsFieldBuilder().addBuilder(
          com.google.cloud.datacatalog.v1.ColumnSchema.getDefaultInstance());
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.datacatalog.v1.ColumnSchema.Builder addColumnsBuilder(
        int index) {
      return getColumnsFieldBuilder().addBuilder(
          index, com.google.cloud.datacatalog.v1.ColumnSchema.getDefaultInstance());
    }
    /**
     * <pre>
     * Required. Schema of columns. A maximum of 10,000 columns and sub-columns can be
     * specified.
     * </pre>
     *
     * <code>repeated .google.cloud.datacatalog.v1.ColumnSchema columns = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public java.util.List<com.google.cloud.datacatalog.v1.ColumnSchema.Builder> 
         getColumnsBuilderList() {
      return getColumnsFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.datacatalog.v1.ColumnSchema, com.google.cloud.datacatalog.v1.ColumnSchema.Builder, com.google.cloud.datacatalog.v1.ColumnSchemaOrBuilder> 
        getColumnsFieldBuilder() {
      if (columnsBuilder_ == null) {
        columnsBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.cloud.datacatalog.v1.ColumnSchema, com.google.cloud.datacatalog.v1.ColumnSchema.Builder, com.google.cloud.datacatalog.v1.ColumnSchemaOrBuilder>(
                columns_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        columns_ = null;
      }
      return columnsBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.datacatalog.v1.Schema)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.datacatalog.v1.Schema)
  private static final com.google.cloud.datacatalog.v1.Schema DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.datacatalog.v1.Schema();
  }

  public static com.google.cloud.datacatalog.v1.Schema getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<Schema>
      PARSER = new com.google.protobuf.AbstractParser<Schema>() {
    @java.lang.Override
    public Schema parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new Schema(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<Schema> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<Schema> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.datacatalog.v1.Schema getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

