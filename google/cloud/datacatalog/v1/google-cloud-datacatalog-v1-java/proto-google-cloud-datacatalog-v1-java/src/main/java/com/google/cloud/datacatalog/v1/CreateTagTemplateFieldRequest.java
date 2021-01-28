// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datacatalog/v1/datacatalog.proto

package com.google.cloud.datacatalog.v1;

/**
 * <pre>
 * Request message for
 * [CreateTagTemplateField][google.cloud.datacatalog.v1.DataCatalog.CreateTagTemplateField].
 * </pre>
 *
 * Protobuf type {@code google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest}
 */
public final class CreateTagTemplateFieldRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest)
    CreateTagTemplateFieldRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use CreateTagTemplateFieldRequest.newBuilder() to construct.
  private CreateTagTemplateFieldRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private CreateTagTemplateFieldRequest() {
    parent_ = "";
    tagTemplateFieldId_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new CreateTagTemplateFieldRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private CreateTagTemplateFieldRequest(
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

            parent_ = s;
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            tagTemplateFieldId_ = s;
            break;
          }
          case 26: {
            com.google.cloud.datacatalog.v1.TagTemplateField.Builder subBuilder = null;
            if (tagTemplateField_ != null) {
              subBuilder = tagTemplateField_.toBuilder();
            }
            tagTemplateField_ = input.readMessage(com.google.cloud.datacatalog.v1.TagTemplateField.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(tagTemplateField_);
              tagTemplateField_ = subBuilder.buildPartial();
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
    return com.google.cloud.datacatalog.v1.Datacatalog.internal_static_google_cloud_datacatalog_v1_CreateTagTemplateFieldRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.datacatalog.v1.Datacatalog.internal_static_google_cloud_datacatalog_v1_CreateTagTemplateFieldRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest.class, com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest.Builder.class);
  }

  public static final int PARENT_FIELD_NUMBER = 1;
  private volatile java.lang.Object parent_;
  /**
   * <pre>
   * Required. The name of the project and the template location
   * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
   * Example:
   * * projects/{project_id}/locations/us-central1/tagTemplates/{tag_template_id}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The parent.
   */
  @java.lang.Override
  public java.lang.String getParent() {
    java.lang.Object ref = parent_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      parent_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The name of the project and the template location
   * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
   * Example:
   * * projects/{project_id}/locations/us-central1/tagTemplates/{tag_template_id}
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
   * @return The bytes for parent.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getParentBytes() {
    java.lang.Object ref = parent_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      parent_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int TAG_TEMPLATE_FIELD_ID_FIELD_NUMBER = 2;
  private volatile java.lang.Object tagTemplateFieldId_;
  /**
   * <pre>
   * Required. The ID of the tag template field to create.
   * Field ids can contain letters (both uppercase and lowercase), numbers
   * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
   * character long and at most 128 characters long. Field IDs must also be
   * unique within their template.
   * </pre>
   *
   * <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The tagTemplateFieldId.
   */
  @java.lang.Override
  public java.lang.String getTagTemplateFieldId() {
    java.lang.Object ref = tagTemplateFieldId_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      tagTemplateFieldId_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * Required. The ID of the tag template field to create.
   * Field ids can contain letters (both uppercase and lowercase), numbers
   * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
   * character long and at most 128 characters long. Field IDs must also be
   * unique within their template.
   * </pre>
   *
   * <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for tagTemplateFieldId.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getTagTemplateFieldIdBytes() {
    java.lang.Object ref = tagTemplateFieldId_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      tagTemplateFieldId_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int TAG_TEMPLATE_FIELD_FIELD_NUMBER = 3;
  private com.google.cloud.datacatalog.v1.TagTemplateField tagTemplateField_;
  /**
   * <pre>
   * Required. The tag template field to create.
   * </pre>
   *
   * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the tagTemplateField field is set.
   */
  @java.lang.Override
  public boolean hasTagTemplateField() {
    return tagTemplateField_ != null;
  }
  /**
   * <pre>
   * Required. The tag template field to create.
   * </pre>
   *
   * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The tagTemplateField.
   */
  @java.lang.Override
  public com.google.cloud.datacatalog.v1.TagTemplateField getTagTemplateField() {
    return tagTemplateField_ == null ? com.google.cloud.datacatalog.v1.TagTemplateField.getDefaultInstance() : tagTemplateField_;
  }
  /**
   * <pre>
   * Required. The tag template field to create.
   * </pre>
   *
   * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  @java.lang.Override
  public com.google.cloud.datacatalog.v1.TagTemplateFieldOrBuilder getTagTemplateFieldOrBuilder() {
    return getTagTemplateField();
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
    if (!getParentBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 1, parent_);
    }
    if (!getTagTemplateFieldIdBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, tagTemplateFieldId_);
    }
    if (tagTemplateField_ != null) {
      output.writeMessage(3, getTagTemplateField());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!getParentBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(1, parent_);
    }
    if (!getTagTemplateFieldIdBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, tagTemplateFieldId_);
    }
    if (tagTemplateField_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(3, getTagTemplateField());
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
    if (!(obj instanceof com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest other = (com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest) obj;

    if (!getParent()
        .equals(other.getParent())) return false;
    if (!getTagTemplateFieldId()
        .equals(other.getTagTemplateFieldId())) return false;
    if (hasTagTemplateField() != other.hasTagTemplateField()) return false;
    if (hasTagTemplateField()) {
      if (!getTagTemplateField()
          .equals(other.getTagTemplateField())) return false;
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
    hash = (37 * hash) + PARENT_FIELD_NUMBER;
    hash = (53 * hash) + getParent().hashCode();
    hash = (37 * hash) + TAG_TEMPLATE_FIELD_ID_FIELD_NUMBER;
    hash = (53 * hash) + getTagTemplateFieldId().hashCode();
    if (hasTagTemplateField()) {
      hash = (37 * hash) + TAG_TEMPLATE_FIELD_FIELD_NUMBER;
      hash = (53 * hash) + getTagTemplateField().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parseFrom(
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
  public static Builder newBuilder(com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest prototype) {
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
   * Request message for
   * [CreateTagTemplateField][google.cloud.datacatalog.v1.DataCatalog.CreateTagTemplateField].
   * </pre>
   *
   * Protobuf type {@code google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest)
      com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.datacatalog.v1.Datacatalog.internal_static_google_cloud_datacatalog_v1_CreateTagTemplateFieldRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.datacatalog.v1.Datacatalog.internal_static_google_cloud_datacatalog_v1_CreateTagTemplateFieldRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest.class, com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest.Builder.class);
    }

    // Construct using com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest.newBuilder()
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
      parent_ = "";

      tagTemplateFieldId_ = "";

      if (tagTemplateFieldBuilder_ == null) {
        tagTemplateField_ = null;
      } else {
        tagTemplateField_ = null;
        tagTemplateFieldBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.datacatalog.v1.Datacatalog.internal_static_google_cloud_datacatalog_v1_CreateTagTemplateFieldRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest getDefaultInstanceForType() {
      return com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest build() {
      com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest buildPartial() {
      com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest result = new com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest(this);
      result.parent_ = parent_;
      result.tagTemplateFieldId_ = tagTemplateFieldId_;
      if (tagTemplateFieldBuilder_ == null) {
        result.tagTemplateField_ = tagTemplateField_;
      } else {
        result.tagTemplateField_ = tagTemplateFieldBuilder_.build();
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
      if (other instanceof com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest) {
        return mergeFrom((com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest other) {
      if (other == com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest.getDefaultInstance()) return this;
      if (!other.getParent().isEmpty()) {
        parent_ = other.parent_;
        onChanged();
      }
      if (!other.getTagTemplateFieldId().isEmpty()) {
        tagTemplateFieldId_ = other.tagTemplateFieldId_;
        onChanged();
      }
      if (other.hasTagTemplateField()) {
        mergeTagTemplateField(other.getTagTemplateField());
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
      com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private java.lang.Object parent_ = "";
    /**
     * <pre>
     * Required. The name of the project and the template location
     * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
     * Example:
     * * projects/{project_id}/locations/us-central1/tagTemplates/{tag_template_id}
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The parent.
     */
    public java.lang.String getParent() {
      java.lang.Object ref = parent_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        parent_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The name of the project and the template location
     * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
     * Example:
     * * projects/{project_id}/locations/us-central1/tagTemplates/{tag_template_id}
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return The bytes for parent.
     */
    public com.google.protobuf.ByteString
        getParentBytes() {
      java.lang.Object ref = parent_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        parent_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The name of the project and the template location
     * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
     * Example:
     * * projects/{project_id}/locations/us-central1/tagTemplates/{tag_template_id}
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The parent to set.
     * @return This builder for chaining.
     */
    public Builder setParent(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      parent_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The name of the project and the template location
     * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
     * Example:
     * * projects/{project_id}/locations/us-central1/tagTemplates/{tag_template_id}
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @return This builder for chaining.
     */
    public Builder clearParent() {
      
      parent_ = getDefaultInstance().getParent();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The name of the project and the template location
     * [region](https://cloud.google.com/data-catalog/docs/concepts/regions).
     * Example:
     * * projects/{project_id}/locations/us-central1/tagTemplates/{tag_template_id}
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = { ... }</code>
     * @param value The bytes for parent to set.
     * @return This builder for chaining.
     */
    public Builder setParentBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      parent_ = value;
      onChanged();
      return this;
    }

    private java.lang.Object tagTemplateFieldId_ = "";
    /**
     * <pre>
     * Required. The ID of the tag template field to create.
     * Field ids can contain letters (both uppercase and lowercase), numbers
     * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     * character long and at most 128 characters long. Field IDs must also be
     * unique within their template.
     * </pre>
     *
     * <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The tagTemplateFieldId.
     */
    public java.lang.String getTagTemplateFieldId() {
      java.lang.Object ref = tagTemplateFieldId_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        tagTemplateFieldId_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * Required. The ID of the tag template field to create.
     * Field ids can contain letters (both uppercase and lowercase), numbers
     * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     * character long and at most 128 characters long. Field IDs must also be
     * unique within their template.
     * </pre>
     *
     * <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The bytes for tagTemplateFieldId.
     */
    public com.google.protobuf.ByteString
        getTagTemplateFieldIdBytes() {
      java.lang.Object ref = tagTemplateFieldId_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        tagTemplateFieldId_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * Required. The ID of the tag template field to create.
     * Field ids can contain letters (both uppercase and lowercase), numbers
     * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     * character long and at most 128 characters long. Field IDs must also be
     * unique within their template.
     * </pre>
     *
     * <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The tagTemplateFieldId to set.
     * @return This builder for chaining.
     */
    public Builder setTagTemplateFieldId(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      tagTemplateFieldId_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The ID of the tag template field to create.
     * Field ids can contain letters (both uppercase and lowercase), numbers
     * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     * character long and at most 128 characters long. Field IDs must also be
     * unique within their template.
     * </pre>
     *
     * <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return This builder for chaining.
     */
    public Builder clearTagTemplateFieldId() {
      
      tagTemplateFieldId_ = getDefaultInstance().getTagTemplateFieldId();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The ID of the tag template field to create.
     * Field ids can contain letters (both uppercase and lowercase), numbers
     * (0-9), underscores (_) and dashes (-). Field IDs must be at least 1
     * character long and at most 128 characters long. Field IDs must also be
     * unique within their template.
     * </pre>
     *
     * <code>string tag_template_field_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The bytes for tagTemplateFieldId to set.
     * @return This builder for chaining.
     */
    public Builder setTagTemplateFieldIdBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      tagTemplateFieldId_ = value;
      onChanged();
      return this;
    }

    private com.google.cloud.datacatalog.v1.TagTemplateField tagTemplateField_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.datacatalog.v1.TagTemplateField, com.google.cloud.datacatalog.v1.TagTemplateField.Builder, com.google.cloud.datacatalog.v1.TagTemplateFieldOrBuilder> tagTemplateFieldBuilder_;
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return Whether the tagTemplateField field is set.
     */
    public boolean hasTagTemplateField() {
      return tagTemplateFieldBuilder_ != null || tagTemplateField_ != null;
    }
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The tagTemplateField.
     */
    public com.google.cloud.datacatalog.v1.TagTemplateField getTagTemplateField() {
      if (tagTemplateFieldBuilder_ == null) {
        return tagTemplateField_ == null ? com.google.cloud.datacatalog.v1.TagTemplateField.getDefaultInstance() : tagTemplateField_;
      } else {
        return tagTemplateFieldBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setTagTemplateField(com.google.cloud.datacatalog.v1.TagTemplateField value) {
      if (tagTemplateFieldBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        tagTemplateField_ = value;
        onChanged();
      } else {
        tagTemplateFieldBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder setTagTemplateField(
        com.google.cloud.datacatalog.v1.TagTemplateField.Builder builderForValue) {
      if (tagTemplateFieldBuilder_ == null) {
        tagTemplateField_ = builderForValue.build();
        onChanged();
      } else {
        tagTemplateFieldBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder mergeTagTemplateField(com.google.cloud.datacatalog.v1.TagTemplateField value) {
      if (tagTemplateFieldBuilder_ == null) {
        if (tagTemplateField_ != null) {
          tagTemplateField_ =
            com.google.cloud.datacatalog.v1.TagTemplateField.newBuilder(tagTemplateField_).mergeFrom(value).buildPartial();
        } else {
          tagTemplateField_ = value;
        }
        onChanged();
      } else {
        tagTemplateFieldBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public Builder clearTagTemplateField() {
      if (tagTemplateFieldBuilder_ == null) {
        tagTemplateField_ = null;
        onChanged();
      } else {
        tagTemplateField_ = null;
        tagTemplateFieldBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.datacatalog.v1.TagTemplateField.Builder getTagTemplateFieldBuilder() {
      
      onChanged();
      return getTagTemplateFieldFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    public com.google.cloud.datacatalog.v1.TagTemplateFieldOrBuilder getTagTemplateFieldOrBuilder() {
      if (tagTemplateFieldBuilder_ != null) {
        return tagTemplateFieldBuilder_.getMessageOrBuilder();
      } else {
        return tagTemplateField_ == null ?
            com.google.cloud.datacatalog.v1.TagTemplateField.getDefaultInstance() : tagTemplateField_;
      }
    }
    /**
     * <pre>
     * Required. The tag template field to create.
     * </pre>
     *
     * <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.datacatalog.v1.TagTemplateField, com.google.cloud.datacatalog.v1.TagTemplateField.Builder, com.google.cloud.datacatalog.v1.TagTemplateFieldOrBuilder> 
        getTagTemplateFieldFieldBuilder() {
      if (tagTemplateFieldBuilder_ == null) {
        tagTemplateFieldBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.datacatalog.v1.TagTemplateField, com.google.cloud.datacatalog.v1.TagTemplateField.Builder, com.google.cloud.datacatalog.v1.TagTemplateFieldOrBuilder>(
                getTagTemplateField(),
                getParentForChildren(),
                isClean());
        tagTemplateField_ = null;
      }
      return tagTemplateFieldBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest)
  private static final com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest();
  }

  public static com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<CreateTagTemplateFieldRequest>
      PARSER = new com.google.protobuf.AbstractParser<CreateTagTemplateFieldRequest>() {
    @java.lang.Override
    public CreateTagTemplateFieldRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new CreateTagTemplateFieldRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<CreateTagTemplateFieldRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<CreateTagTemplateFieldRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.datacatalog.v1.CreateTagTemplateFieldRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

