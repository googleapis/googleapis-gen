// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/bigquery/v2/table_reference.proto

package com.google.cloud.bigquery.v2;

public final class TableReferenceProto {
  private TableReferenceProto() {}
  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistryLite registry) {
  }

  public static void registerAllExtensions(
      com.google.protobuf.ExtensionRegistry registry) {
    registerAllExtensions(
        (com.google.protobuf.ExtensionRegistryLite) registry);
  }
  public interface TableReferenceOrBuilder extends
      // @@protoc_insertion_point(interface_extends:google.cloud.bigquery.v2.TableReference)
      com.google.protobuf.MessageOrBuilder {

    /**
     * <pre>
     * Required. The ID of the project containing this table.
     * </pre>
     *
     * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The projectId.
     */
    java.lang.String getProjectId();
    /**
     * <pre>
     * Required. The ID of the project containing this table.
     * </pre>
     *
     * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for projectId.
     */
    com.google.protobuf.ByteString
        getProjectIdBytes();

    /**
     * <pre>
     * Required. The ID of the dataset containing this table.
     * </pre>
     *
     * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The datasetId.
     */
    java.lang.String getDatasetId();
    /**
     * <pre>
     * Required. The ID of the dataset containing this table.
     * </pre>
     *
     * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for datasetId.
     */
    com.google.protobuf.ByteString
        getDatasetIdBytes();

    /**
     * <pre>
     * Required. The ID of the table. The ID must contain only
     * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
     * length is 1,024 characters.  Certain operations allow
     * suffixing of the table ID with a partition decorator, such as
     * `sample_table$20190123`.
     * </pre>
     *
     * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The tableId.
     */
    java.lang.String getTableId();
    /**
     * <pre>
     * Required. The ID of the table. The ID must contain only
     * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
     * length is 1,024 characters.  Certain operations allow
     * suffixing of the table ID with a partition decorator, such as
     * `sample_table$20190123`.
     * </pre>
     *
     * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for tableId.
     */
    com.google.protobuf.ByteString
        getTableIdBytes();
  }
  /**
   * Protobuf type {@code google.cloud.bigquery.v2.TableReference}
   */
  public static final class TableReference extends
      com.google.protobuf.GeneratedMessageV3 implements
      // @@protoc_insertion_point(message_implements:google.cloud.bigquery.v2.TableReference)
      TableReferenceOrBuilder {
  private static final long serialVersionUID = 0L;
    // Use TableReference.newBuilder() to construct.
    private TableReference(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
      super(builder);
    }
    private TableReference() {
      projectId_ = "";
      datasetId_ = "";
      tableId_ = "";
    }

    @java.lang.Override
    @SuppressWarnings({"unused"})
    protected java.lang.Object newInstance(
        UnusedPrivateParameter unused) {
      return new TableReference();
    }

    @java.lang.Override
    public final com.google.protobuf.UnknownFieldSet
    getUnknownFields() {
      return this.unknownFields;
    }
    private TableReference(
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

              projectId_ = s;
              break;
            }
            case 18: {
              java.lang.String s = input.readStringRequireUtf8();

              datasetId_ = s;
              break;
            }
            case 26: {
              java.lang.String s = input.readStringRequireUtf8();

              tableId_ = s;
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
      return com.google.cloud.bigquery.v2.TableReferenceProto.internal_static_google_cloud_bigquery_v2_TableReference_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.bigquery.v2.TableReferenceProto.internal_static_google_cloud_bigquery_v2_TableReference_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.bigquery.v2.TableReferenceProto.TableReference.class, com.google.cloud.bigquery.v2.TableReferenceProto.TableReference.Builder.class);
    }

    public static final int PROJECT_ID_FIELD_NUMBER = 1;
    private volatile java.lang.Object projectId_;
    /**
     * <pre>
     * Required. The ID of the project containing this table.
     * </pre>
     *
     * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The projectId.
     */
    @java.lang.Override
    public java.lang.String getProjectId() {
      java.lang.Object ref = projectId_;
      if (ref instanceof java.lang.String) {
        return (java.lang.String) ref;
      } else {
        com.google.protobuf.ByteString bs = 
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        projectId_ = s;
        return s;
      }
    }
    /**
     * <pre>
     * Required. The ID of the project containing this table.
     * </pre>
     *
     * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for projectId.
     */
    @java.lang.Override
    public com.google.protobuf.ByteString
        getProjectIdBytes() {
      java.lang.Object ref = projectId_;
      if (ref instanceof java.lang.String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        projectId_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }

    public static final int DATASET_ID_FIELD_NUMBER = 2;
    private volatile java.lang.Object datasetId_;
    /**
     * <pre>
     * Required. The ID of the dataset containing this table.
     * </pre>
     *
     * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The datasetId.
     */
    @java.lang.Override
    public java.lang.String getDatasetId() {
      java.lang.Object ref = datasetId_;
      if (ref instanceof java.lang.String) {
        return (java.lang.String) ref;
      } else {
        com.google.protobuf.ByteString bs = 
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        datasetId_ = s;
        return s;
      }
    }
    /**
     * <pre>
     * Required. The ID of the dataset containing this table.
     * </pre>
     *
     * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for datasetId.
     */
    @java.lang.Override
    public com.google.protobuf.ByteString
        getDatasetIdBytes() {
      java.lang.Object ref = datasetId_;
      if (ref instanceof java.lang.String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        datasetId_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }

    public static final int TABLE_ID_FIELD_NUMBER = 3;
    private volatile java.lang.Object tableId_;
    /**
     * <pre>
     * Required. The ID of the table. The ID must contain only
     * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
     * length is 1,024 characters.  Certain operations allow
     * suffixing of the table ID with a partition decorator, such as
     * `sample_table$20190123`.
     * </pre>
     *
     * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The tableId.
     */
    @java.lang.Override
    public java.lang.String getTableId() {
      java.lang.Object ref = tableId_;
      if (ref instanceof java.lang.String) {
        return (java.lang.String) ref;
      } else {
        com.google.protobuf.ByteString bs = 
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        tableId_ = s;
        return s;
      }
    }
    /**
     * <pre>
     * Required. The ID of the table. The ID must contain only
     * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
     * length is 1,024 characters.  Certain operations allow
     * suffixing of the table ID with a partition decorator, such as
     * `sample_table$20190123`.
     * </pre>
     *
     * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for tableId.
     */
    @java.lang.Override
    public com.google.protobuf.ByteString
        getTableIdBytes() {
      java.lang.Object ref = tableId_;
      if (ref instanceof java.lang.String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        tableId_ = b;
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
      if (!getProjectIdBytes().isEmpty()) {
        com.google.protobuf.GeneratedMessageV3.writeString(output, 1, projectId_);
      }
      if (!getDatasetIdBytes().isEmpty()) {
        com.google.protobuf.GeneratedMessageV3.writeString(output, 2, datasetId_);
      }
      if (!getTableIdBytes().isEmpty()) {
        com.google.protobuf.GeneratedMessageV3.writeString(output, 3, tableId_);
      }
      unknownFields.writeTo(output);
    }

    @java.lang.Override
    public int getSerializedSize() {
      int size = memoizedSize;
      if (size != -1) return size;

      size = 0;
      if (!getProjectIdBytes().isEmpty()) {
        size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, projectId_);
      }
      if (!getDatasetIdBytes().isEmpty()) {
        size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, datasetId_);
      }
      if (!getTableIdBytes().isEmpty()) {
        size += com.google.protobuf.GeneratedMessageV3.computeStringSize(3, tableId_);
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
      if (!(obj instanceof com.google.cloud.bigquery.v2.TableReferenceProto.TableReference)) {
        return super.equals(obj);
      }
      com.google.cloud.bigquery.v2.TableReferenceProto.TableReference other = (com.google.cloud.bigquery.v2.TableReferenceProto.TableReference) obj;

      if (!getProjectId()
          .equals(other.getProjectId())) return false;
      if (!getDatasetId()
          .equals(other.getDatasetId())) return false;
      if (!getTableId()
          .equals(other.getTableId())) return false;
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
      hash = (37 * hash) + PROJECT_ID_FIELD_NUMBER;
      hash = (53 * hash) + getProjectId().hashCode();
      hash = (37 * hash) + DATASET_ID_FIELD_NUMBER;
      hash = (53 * hash) + getDatasetId().hashCode();
      hash = (37 * hash) + TABLE_ID_FIELD_NUMBER;
      hash = (53 * hash) + getTableId().hashCode();
      hash = (29 * hash) + unknownFields.hashCode();
      memoizedHashCode = hash;
      return hash;
    }

    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(
        java.nio.ByteBuffer data)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return PARSER.parseFrom(data);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(
        java.nio.ByteBuffer data,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return PARSER.parseFrom(data, extensionRegistry);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(
        com.google.protobuf.ByteString data)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return PARSER.parseFrom(data);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(
        com.google.protobuf.ByteString data,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return PARSER.parseFrom(data, extensionRegistry);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(byte[] data)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return PARSER.parseFrom(data);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(
        byte[] data,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return PARSER.parseFrom(data, extensionRegistry);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(java.io.InputStream input)
        throws java.io.IOException {
      return com.google.protobuf.GeneratedMessageV3
          .parseWithIOException(PARSER, input);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(
        java.io.InputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws java.io.IOException {
      return com.google.protobuf.GeneratedMessageV3
          .parseWithIOException(PARSER, input, extensionRegistry);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseDelimitedFrom(java.io.InputStream input)
        throws java.io.IOException {
      return com.google.protobuf.GeneratedMessageV3
          .parseDelimitedWithIOException(PARSER, input);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseDelimitedFrom(
        java.io.InputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws java.io.IOException {
      return com.google.protobuf.GeneratedMessageV3
          .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(
        com.google.protobuf.CodedInputStream input)
        throws java.io.IOException {
      return com.google.protobuf.GeneratedMessageV3
          .parseWithIOException(PARSER, input);
    }
    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parseFrom(
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
    public static Builder newBuilder(com.google.cloud.bigquery.v2.TableReferenceProto.TableReference prototype) {
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
     * Protobuf type {@code google.cloud.bigquery.v2.TableReference}
     */
    public static final class Builder extends
        com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
        // @@protoc_insertion_point(builder_implements:google.cloud.bigquery.v2.TableReference)
        com.google.cloud.bigquery.v2.TableReferenceProto.TableReferenceOrBuilder {
      public static final com.google.protobuf.Descriptors.Descriptor
          getDescriptor() {
        return com.google.cloud.bigquery.v2.TableReferenceProto.internal_static_google_cloud_bigquery_v2_TableReference_descriptor;
      }

      @java.lang.Override
      protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
          internalGetFieldAccessorTable() {
        return com.google.cloud.bigquery.v2.TableReferenceProto.internal_static_google_cloud_bigquery_v2_TableReference_fieldAccessorTable
            .ensureFieldAccessorsInitialized(
                com.google.cloud.bigquery.v2.TableReferenceProto.TableReference.class, com.google.cloud.bigquery.v2.TableReferenceProto.TableReference.Builder.class);
      }

      // Construct using com.google.cloud.bigquery.v2.TableReferenceProto.TableReference.newBuilder()
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
        projectId_ = "";

        datasetId_ = "";

        tableId_ = "";

        return this;
      }

      @java.lang.Override
      public com.google.protobuf.Descriptors.Descriptor
          getDescriptorForType() {
        return com.google.cloud.bigquery.v2.TableReferenceProto.internal_static_google_cloud_bigquery_v2_TableReference_descriptor;
      }

      @java.lang.Override
      public com.google.cloud.bigquery.v2.TableReferenceProto.TableReference getDefaultInstanceForType() {
        return com.google.cloud.bigquery.v2.TableReferenceProto.TableReference.getDefaultInstance();
      }

      @java.lang.Override
      public com.google.cloud.bigquery.v2.TableReferenceProto.TableReference build() {
        com.google.cloud.bigquery.v2.TableReferenceProto.TableReference result = buildPartial();
        if (!result.isInitialized()) {
          throw newUninitializedMessageException(result);
        }
        return result;
      }

      @java.lang.Override
      public com.google.cloud.bigquery.v2.TableReferenceProto.TableReference buildPartial() {
        com.google.cloud.bigquery.v2.TableReferenceProto.TableReference result = new com.google.cloud.bigquery.v2.TableReferenceProto.TableReference(this);
        result.projectId_ = projectId_;
        result.datasetId_ = datasetId_;
        result.tableId_ = tableId_;
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
        if (other instanceof com.google.cloud.bigquery.v2.TableReferenceProto.TableReference) {
          return mergeFrom((com.google.cloud.bigquery.v2.TableReferenceProto.TableReference)other);
        } else {
          super.mergeFrom(other);
          return this;
        }
      }

      public Builder mergeFrom(com.google.cloud.bigquery.v2.TableReferenceProto.TableReference other) {
        if (other == com.google.cloud.bigquery.v2.TableReferenceProto.TableReference.getDefaultInstance()) return this;
        if (!other.getProjectId().isEmpty()) {
          projectId_ = other.projectId_;
          onChanged();
        }
        if (!other.getDatasetId().isEmpty()) {
          datasetId_ = other.datasetId_;
          onChanged();
        }
        if (!other.getTableId().isEmpty()) {
          tableId_ = other.tableId_;
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
        com.google.cloud.bigquery.v2.TableReferenceProto.TableReference parsedMessage = null;
        try {
          parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
        } catch (com.google.protobuf.InvalidProtocolBufferException e) {
          parsedMessage = (com.google.cloud.bigquery.v2.TableReferenceProto.TableReference) e.getUnfinishedMessage();
          throw e.unwrapIOException();
        } finally {
          if (parsedMessage != null) {
            mergeFrom(parsedMessage);
          }
        }
        return this;
      }

      private java.lang.Object projectId_ = "";
      /**
       * <pre>
       * Required. The ID of the project containing this table.
       * </pre>
       *
       * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return The projectId.
       */
      public java.lang.String getProjectId() {
        java.lang.Object ref = projectId_;
        if (!(ref instanceof java.lang.String)) {
          com.google.protobuf.ByteString bs =
              (com.google.protobuf.ByteString) ref;
          java.lang.String s = bs.toStringUtf8();
          projectId_ = s;
          return s;
        } else {
          return (java.lang.String) ref;
        }
      }
      /**
       * <pre>
       * Required. The ID of the project containing this table.
       * </pre>
       *
       * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return The bytes for projectId.
       */
      public com.google.protobuf.ByteString
          getProjectIdBytes() {
        java.lang.Object ref = projectId_;
        if (ref instanceof String) {
          com.google.protobuf.ByteString b = 
              com.google.protobuf.ByteString.copyFromUtf8(
                  (java.lang.String) ref);
          projectId_ = b;
          return b;
        } else {
          return (com.google.protobuf.ByteString) ref;
        }
      }
      /**
       * <pre>
       * Required. The ID of the project containing this table.
       * </pre>
       *
       * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
       * @param value The projectId to set.
       * @return This builder for chaining.
       */
      public Builder setProjectId(
          java.lang.String value) {
        if (value == null) {
    throw new NullPointerException();
  }
  
        projectId_ = value;
        onChanged();
        return this;
      }
      /**
       * <pre>
       * Required. The ID of the project containing this table.
       * </pre>
       *
       * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return This builder for chaining.
       */
      public Builder clearProjectId() {
        
        projectId_ = getDefaultInstance().getProjectId();
        onChanged();
        return this;
      }
      /**
       * <pre>
       * Required. The ID of the project containing this table.
       * </pre>
       *
       * <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
       * @param value The bytes for projectId to set.
       * @return This builder for chaining.
       */
      public Builder setProjectIdBytes(
          com.google.protobuf.ByteString value) {
        if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
        
        projectId_ = value;
        onChanged();
        return this;
      }

      private java.lang.Object datasetId_ = "";
      /**
       * <pre>
       * Required. The ID of the dataset containing this table.
       * </pre>
       *
       * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return The datasetId.
       */
      public java.lang.String getDatasetId() {
        java.lang.Object ref = datasetId_;
        if (!(ref instanceof java.lang.String)) {
          com.google.protobuf.ByteString bs =
              (com.google.protobuf.ByteString) ref;
          java.lang.String s = bs.toStringUtf8();
          datasetId_ = s;
          return s;
        } else {
          return (java.lang.String) ref;
        }
      }
      /**
       * <pre>
       * Required. The ID of the dataset containing this table.
       * </pre>
       *
       * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return The bytes for datasetId.
       */
      public com.google.protobuf.ByteString
          getDatasetIdBytes() {
        java.lang.Object ref = datasetId_;
        if (ref instanceof String) {
          com.google.protobuf.ByteString b = 
              com.google.protobuf.ByteString.copyFromUtf8(
                  (java.lang.String) ref);
          datasetId_ = b;
          return b;
        } else {
          return (com.google.protobuf.ByteString) ref;
        }
      }
      /**
       * <pre>
       * Required. The ID of the dataset containing this table.
       * </pre>
       *
       * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
       * @param value The datasetId to set.
       * @return This builder for chaining.
       */
      public Builder setDatasetId(
          java.lang.String value) {
        if (value == null) {
    throw new NullPointerException();
  }
  
        datasetId_ = value;
        onChanged();
        return this;
      }
      /**
       * <pre>
       * Required. The ID of the dataset containing this table.
       * </pre>
       *
       * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return This builder for chaining.
       */
      public Builder clearDatasetId() {
        
        datasetId_ = getDefaultInstance().getDatasetId();
        onChanged();
        return this;
      }
      /**
       * <pre>
       * Required. The ID of the dataset containing this table.
       * </pre>
       *
       * <code>string dataset_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
       * @param value The bytes for datasetId to set.
       * @return This builder for chaining.
       */
      public Builder setDatasetIdBytes(
          com.google.protobuf.ByteString value) {
        if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
        
        datasetId_ = value;
        onChanged();
        return this;
      }

      private java.lang.Object tableId_ = "";
      /**
       * <pre>
       * Required. The ID of the table. The ID must contain only
       * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
       * length is 1,024 characters.  Certain operations allow
       * suffixing of the table ID with a partition decorator, such as
       * `sample_table$20190123`.
       * </pre>
       *
       * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return The tableId.
       */
      public java.lang.String getTableId() {
        java.lang.Object ref = tableId_;
        if (!(ref instanceof java.lang.String)) {
          com.google.protobuf.ByteString bs =
              (com.google.protobuf.ByteString) ref;
          java.lang.String s = bs.toStringUtf8();
          tableId_ = s;
          return s;
        } else {
          return (java.lang.String) ref;
        }
      }
      /**
       * <pre>
       * Required. The ID of the table. The ID must contain only
       * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
       * length is 1,024 characters.  Certain operations allow
       * suffixing of the table ID with a partition decorator, such as
       * `sample_table$20190123`.
       * </pre>
       *
       * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return The bytes for tableId.
       */
      public com.google.protobuf.ByteString
          getTableIdBytes() {
        java.lang.Object ref = tableId_;
        if (ref instanceof String) {
          com.google.protobuf.ByteString b = 
              com.google.protobuf.ByteString.copyFromUtf8(
                  (java.lang.String) ref);
          tableId_ = b;
          return b;
        } else {
          return (com.google.protobuf.ByteString) ref;
        }
      }
      /**
       * <pre>
       * Required. The ID of the table. The ID must contain only
       * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
       * length is 1,024 characters.  Certain operations allow
       * suffixing of the table ID with a partition decorator, such as
       * `sample_table$20190123`.
       * </pre>
       *
       * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
       * @param value The tableId to set.
       * @return This builder for chaining.
       */
      public Builder setTableId(
          java.lang.String value) {
        if (value == null) {
    throw new NullPointerException();
  }
  
        tableId_ = value;
        onChanged();
        return this;
      }
      /**
       * <pre>
       * Required. The ID of the table. The ID must contain only
       * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
       * length is 1,024 characters.  Certain operations allow
       * suffixing of the table ID with a partition decorator, such as
       * `sample_table$20190123`.
       * </pre>
       *
       * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
       * @return This builder for chaining.
       */
      public Builder clearTableId() {
        
        tableId_ = getDefaultInstance().getTableId();
        onChanged();
        return this;
      }
      /**
       * <pre>
       * Required. The ID of the table. The ID must contain only
       * letters (a-z, A-Z), numbers (0-9), or underscores (_). The maximum
       * length is 1,024 characters.  Certain operations allow
       * suffixing of the table ID with a partition decorator, such as
       * `sample_table$20190123`.
       * </pre>
       *
       * <code>string table_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
       * @param value The bytes for tableId to set.
       * @return This builder for chaining.
       */
      public Builder setTableIdBytes(
          com.google.protobuf.ByteString value) {
        if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
        
        tableId_ = value;
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


      // @@protoc_insertion_point(builder_scope:google.cloud.bigquery.v2.TableReference)
    }

    // @@protoc_insertion_point(class_scope:google.cloud.bigquery.v2.TableReference)
    private static final com.google.cloud.bigquery.v2.TableReferenceProto.TableReference DEFAULT_INSTANCE;
    static {
      DEFAULT_INSTANCE = new com.google.cloud.bigquery.v2.TableReferenceProto.TableReference();
    }

    public static com.google.cloud.bigquery.v2.TableReferenceProto.TableReference getDefaultInstance() {
      return DEFAULT_INSTANCE;
    }

    private static final com.google.protobuf.Parser<TableReference>
        PARSER = new com.google.protobuf.AbstractParser<TableReference>() {
      @java.lang.Override
      public TableReference parsePartialFrom(
          com.google.protobuf.CodedInputStream input,
          com.google.protobuf.ExtensionRegistryLite extensionRegistry)
          throws com.google.protobuf.InvalidProtocolBufferException {
        return new TableReference(input, extensionRegistry);
      }
    };

    public static com.google.protobuf.Parser<TableReference> parser() {
      return PARSER;
    }

    @java.lang.Override
    public com.google.protobuf.Parser<TableReference> getParserForType() {
      return PARSER;
    }

    @java.lang.Override
    public com.google.cloud.bigquery.v2.TableReferenceProto.TableReference getDefaultInstanceForType() {
      return DEFAULT_INSTANCE;
    }

  }

  private static final com.google.protobuf.Descriptors.Descriptor
    internal_static_google_cloud_bigquery_v2_TableReference_descriptor;
  private static final 
    com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internal_static_google_cloud_bigquery_v2_TableReference_fieldAccessorTable;

  public static com.google.protobuf.Descriptors.FileDescriptor
      getDescriptor() {
    return descriptor;
  }
  private static  com.google.protobuf.Descriptors.FileDescriptor
      descriptor;
  static {
    java.lang.String[] descriptorData = {
      "\n.google/cloud/bigquery/v2/table_referen" +
      "ce.proto\022\030google.cloud.bigquery.v2\032\037goog" +
      "le/api/field_behavior.proto\032\034google/api/" +
      "annotations.proto\"Y\n\016TableReference\022\027\n\np" +
      "roject_id\030\001 \001(\tB\003\340A\002\022\027\n\ndataset_id\030\002 \001(\t" +
      "B\003\340A\002\022\025\n\010table_id\030\003 \001(\tB\003\340A\002Bu\n\034com.goog" +
      "le.cloud.bigquery.v2B\023TableReferenceProt" +
      "oZ@google.golang.org/genproto/googleapis" +
      "/cloud/bigquery/v2;bigqueryb\006proto3"
    };
    descriptor = com.google.protobuf.Descriptors.FileDescriptor
      .internalBuildGeneratedFileFrom(descriptorData,
        new com.google.protobuf.Descriptors.FileDescriptor[] {
          com.google.api.FieldBehaviorProto.getDescriptor(),
          com.google.api.AnnotationsProto.getDescriptor(),
        });
    internal_static_google_cloud_bigquery_v2_TableReference_descriptor =
      getDescriptor().getMessageTypes().get(0);
    internal_static_google_cloud_bigquery_v2_TableReference_fieldAccessorTable = new
      com.google.protobuf.GeneratedMessageV3.FieldAccessorTable(
        internal_static_google_cloud_bigquery_v2_TableReference_descriptor,
        new java.lang.String[] { "ProjectId", "DatasetId", "TableId", });
    com.google.protobuf.ExtensionRegistry registry =
        com.google.protobuf.ExtensionRegistry.newInstance();
    registry.add(com.google.api.FieldBehaviorProto.fieldBehavior);
    com.google.protobuf.Descriptors.FileDescriptor
        .internalUpdateFileDescriptor(descriptor, registry);
    com.google.api.FieldBehaviorProto.getDescriptor();
    com.google.api.AnnotationsProto.getDescriptor();
  }

  // @@protoc_insertion_point(outer_class_scope)
}
