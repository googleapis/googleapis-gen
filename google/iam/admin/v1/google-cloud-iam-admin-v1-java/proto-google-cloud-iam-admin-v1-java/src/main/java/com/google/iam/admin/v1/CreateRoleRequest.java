// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/iam/admin/v1/iam.proto

package com.google.iam.admin.v1;

/**
 * <pre>
 * The request to create a new role.
 * </pre>
 *
 * Protobuf type {@code google.iam.admin.v1.CreateRoleRequest}
 */
public final class CreateRoleRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.iam.admin.v1.CreateRoleRequest)
    CreateRoleRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use CreateRoleRequest.newBuilder() to construct.
  private CreateRoleRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private CreateRoleRequest() {
    parent_ = "";
    roleId_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new CreateRoleRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private CreateRoleRequest(
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

            roleId_ = s;
            break;
          }
          case 26: {
            com.google.iam.admin.v1.Role.Builder subBuilder = null;
            if (role_ != null) {
              subBuilder = role_.toBuilder();
            }
            role_ = input.readMessage(com.google.iam.admin.v1.Role.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(role_);
              role_ = subBuilder.buildPartial();
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
    return com.google.iam.admin.v1.IamProto.internal_static_google_iam_admin_v1_CreateRoleRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.iam.admin.v1.IamProto.internal_static_google_iam_admin_v1_CreateRoleRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.iam.admin.v1.CreateRoleRequest.class, com.google.iam.admin.v1.CreateRoleRequest.Builder.class);
  }

  public static final int PARENT_FIELD_NUMBER = 1;
  private volatile java.lang.Object parent_;
  /**
   * <pre>
   * The `parent` parameter's value depends on the target resource for the
   * request, namely
   * [`projects`](/iam/reference/rest/v1/projects.roles) or
   * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
   * resource type's `parent` value format is described below:
   * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
   *   `projects/{PROJECT_ID}`. This method creates project-level
   *   [custom roles](/iam/docs/understanding-custom-roles).
   *   Example request URL:
   *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
   * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
   *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
   *   [custom roles](/iam/docs/understanding-custom-roles). Example request
   *   URL:
   *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
   * Note: Wildcard (*) values are invalid; you must specify a complete project
   * ID or organization ID.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.resource_reference) = { ... }</code>
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
   * The `parent` parameter's value depends on the target resource for the
   * request, namely
   * [`projects`](/iam/reference/rest/v1/projects.roles) or
   * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
   * resource type's `parent` value format is described below:
   * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
   *   `projects/{PROJECT_ID}`. This method creates project-level
   *   [custom roles](/iam/docs/understanding-custom-roles).
   *   Example request URL:
   *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
   * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
   *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
   *   [custom roles](/iam/docs/understanding-custom-roles). Example request
   *   URL:
   *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
   * Note: Wildcard (*) values are invalid; you must specify a complete project
   * ID or organization ID.
   * </pre>
   *
   * <code>string parent = 1 [(.google.api.resource_reference) = { ... }</code>
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

  public static final int ROLE_ID_FIELD_NUMBER = 2;
  private volatile java.lang.Object roleId_;
  /**
   * <pre>
   * The role ID to use for this role.
   * A role ID may contain alphanumeric characters, underscores (`_`), and
   * periods (`.`). It must contain a minimum of 3 characters and a maximum of
   * 64 characters.
   * </pre>
   *
   * <code>string role_id = 2;</code>
   * @return The roleId.
   */
  @java.lang.Override
  public java.lang.String getRoleId() {
    java.lang.Object ref = roleId_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      roleId_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * The role ID to use for this role.
   * A role ID may contain alphanumeric characters, underscores (`_`), and
   * periods (`.`). It must contain a minimum of 3 characters and a maximum of
   * 64 characters.
   * </pre>
   *
   * <code>string role_id = 2;</code>
   * @return The bytes for roleId.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getRoleIdBytes() {
    java.lang.Object ref = roleId_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      roleId_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int ROLE_FIELD_NUMBER = 3;
  private com.google.iam.admin.v1.Role role_;
  /**
   * <pre>
   * The Role resource to create.
   * </pre>
   *
   * <code>.google.iam.admin.v1.Role role = 3;</code>
   * @return Whether the role field is set.
   */
  @java.lang.Override
  public boolean hasRole() {
    return role_ != null;
  }
  /**
   * <pre>
   * The Role resource to create.
   * </pre>
   *
   * <code>.google.iam.admin.v1.Role role = 3;</code>
   * @return The role.
   */
  @java.lang.Override
  public com.google.iam.admin.v1.Role getRole() {
    return role_ == null ? com.google.iam.admin.v1.Role.getDefaultInstance() : role_;
  }
  /**
   * <pre>
   * The Role resource to create.
   * </pre>
   *
   * <code>.google.iam.admin.v1.Role role = 3;</code>
   */
  @java.lang.Override
  public com.google.iam.admin.v1.RoleOrBuilder getRoleOrBuilder() {
    return getRole();
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
    if (!getRoleIdBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, roleId_);
    }
    if (role_ != null) {
      output.writeMessage(3, getRole());
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
    if (!getRoleIdBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, roleId_);
    }
    if (role_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(3, getRole());
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
    if (!(obj instanceof com.google.iam.admin.v1.CreateRoleRequest)) {
      return super.equals(obj);
    }
    com.google.iam.admin.v1.CreateRoleRequest other = (com.google.iam.admin.v1.CreateRoleRequest) obj;

    if (!getParent()
        .equals(other.getParent())) return false;
    if (!getRoleId()
        .equals(other.getRoleId())) return false;
    if (hasRole() != other.hasRole()) return false;
    if (hasRole()) {
      if (!getRole()
          .equals(other.getRole())) return false;
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
    hash = (37 * hash) + ROLE_ID_FIELD_NUMBER;
    hash = (53 * hash) + getRoleId().hashCode();
    if (hasRole()) {
      hash = (37 * hash) + ROLE_FIELD_NUMBER;
      hash = (53 * hash) + getRole().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.iam.admin.v1.CreateRoleRequest parseFrom(
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
  public static Builder newBuilder(com.google.iam.admin.v1.CreateRoleRequest prototype) {
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
   * The request to create a new role.
   * </pre>
   *
   * Protobuf type {@code google.iam.admin.v1.CreateRoleRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.iam.admin.v1.CreateRoleRequest)
      com.google.iam.admin.v1.CreateRoleRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.iam.admin.v1.IamProto.internal_static_google_iam_admin_v1_CreateRoleRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.iam.admin.v1.IamProto.internal_static_google_iam_admin_v1_CreateRoleRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.iam.admin.v1.CreateRoleRequest.class, com.google.iam.admin.v1.CreateRoleRequest.Builder.class);
    }

    // Construct using com.google.iam.admin.v1.CreateRoleRequest.newBuilder()
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

      roleId_ = "";

      if (roleBuilder_ == null) {
        role_ = null;
      } else {
        role_ = null;
        roleBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.iam.admin.v1.IamProto.internal_static_google_iam_admin_v1_CreateRoleRequest_descriptor;
    }

    @java.lang.Override
    public com.google.iam.admin.v1.CreateRoleRequest getDefaultInstanceForType() {
      return com.google.iam.admin.v1.CreateRoleRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.iam.admin.v1.CreateRoleRequest build() {
      com.google.iam.admin.v1.CreateRoleRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.iam.admin.v1.CreateRoleRequest buildPartial() {
      com.google.iam.admin.v1.CreateRoleRequest result = new com.google.iam.admin.v1.CreateRoleRequest(this);
      result.parent_ = parent_;
      result.roleId_ = roleId_;
      if (roleBuilder_ == null) {
        result.role_ = role_;
      } else {
        result.role_ = roleBuilder_.build();
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
      if (other instanceof com.google.iam.admin.v1.CreateRoleRequest) {
        return mergeFrom((com.google.iam.admin.v1.CreateRoleRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.iam.admin.v1.CreateRoleRequest other) {
      if (other == com.google.iam.admin.v1.CreateRoleRequest.getDefaultInstance()) return this;
      if (!other.getParent().isEmpty()) {
        parent_ = other.parent_;
        onChanged();
      }
      if (!other.getRoleId().isEmpty()) {
        roleId_ = other.roleId_;
        onChanged();
      }
      if (other.hasRole()) {
        mergeRole(other.getRole());
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
      com.google.iam.admin.v1.CreateRoleRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.iam.admin.v1.CreateRoleRequest) e.getUnfinishedMessage();
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
     * The `parent` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `parent` value format is described below:
     * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *   `projects/{PROJECT_ID}`. This method creates project-level
     *   [custom roles](/iam/docs/understanding-custom-roles).
     *   Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *   [custom roles](/iam/docs/understanding-custom-roles). Example request
     *   URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.resource_reference) = { ... }</code>
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
     * The `parent` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `parent` value format is described below:
     * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *   `projects/{PROJECT_ID}`. This method creates project-level
     *   [custom roles](/iam/docs/understanding-custom-roles).
     *   Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *   [custom roles](/iam/docs/understanding-custom-roles). Example request
     *   URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.resource_reference) = { ... }</code>
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
     * The `parent` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `parent` value format is described below:
     * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *   `projects/{PROJECT_ID}`. This method creates project-level
     *   [custom roles](/iam/docs/understanding-custom-roles).
     *   Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *   [custom roles](/iam/docs/understanding-custom-roles). Example request
     *   URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.resource_reference) = { ... }</code>
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
     * The `parent` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `parent` value format is described below:
     * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *   `projects/{PROJECT_ID}`. This method creates project-level
     *   [custom roles](/iam/docs/understanding-custom-roles).
     *   Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *   [custom roles](/iam/docs/understanding-custom-roles). Example request
     *   URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.resource_reference) = { ... }</code>
     * @return This builder for chaining.
     */
    public Builder clearParent() {
      
      parent_ = getDefaultInstance().getParent();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The `parent` parameter's value depends on the target resource for the
     * request, namely
     * [`projects`](/iam/reference/rest/v1/projects.roles) or
     * [`organizations`](/iam/reference/rest/v1/organizations.roles). Each
     * resource type's `parent` value format is described below:
     * * [`projects.roles.create()`](/iam/reference/rest/v1/projects.roles/create):
     *   `projects/{PROJECT_ID}`. This method creates project-level
     *   [custom roles](/iam/docs/understanding-custom-roles).
     *   Example request URL:
     *   `https://iam.googleapis.com/v1/projects/{PROJECT_ID}/roles`
     * * [`organizations.roles.create()`](/iam/reference/rest/v1/organizations.roles/create):
     *   `organizations/{ORGANIZATION_ID}`. This method creates organization-level
     *   [custom roles](/iam/docs/understanding-custom-roles). Example request
     *   URL:
     *   `https://iam.googleapis.com/v1/organizations/{ORGANIZATION_ID}/roles`
     * Note: Wildcard (*) values are invalid; you must specify a complete project
     * ID or organization ID.
     * </pre>
     *
     * <code>string parent = 1 [(.google.api.resource_reference) = { ... }</code>
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

    private java.lang.Object roleId_ = "";
    /**
     * <pre>
     * The role ID to use for this role.
     * A role ID may contain alphanumeric characters, underscores (`_`), and
     * periods (`.`). It must contain a minimum of 3 characters and a maximum of
     * 64 characters.
     * </pre>
     *
     * <code>string role_id = 2;</code>
     * @return The roleId.
     */
    public java.lang.String getRoleId() {
      java.lang.Object ref = roleId_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        roleId_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * The role ID to use for this role.
     * A role ID may contain alphanumeric characters, underscores (`_`), and
     * periods (`.`). It must contain a minimum of 3 characters and a maximum of
     * 64 characters.
     * </pre>
     *
     * <code>string role_id = 2;</code>
     * @return The bytes for roleId.
     */
    public com.google.protobuf.ByteString
        getRoleIdBytes() {
      java.lang.Object ref = roleId_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        roleId_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * The role ID to use for this role.
     * A role ID may contain alphanumeric characters, underscores (`_`), and
     * periods (`.`). It must contain a minimum of 3 characters and a maximum of
     * 64 characters.
     * </pre>
     *
     * <code>string role_id = 2;</code>
     * @param value The roleId to set.
     * @return This builder for chaining.
     */
    public Builder setRoleId(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      roleId_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The role ID to use for this role.
     * A role ID may contain alphanumeric characters, underscores (`_`), and
     * periods (`.`). It must contain a minimum of 3 characters and a maximum of
     * 64 characters.
     * </pre>
     *
     * <code>string role_id = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearRoleId() {
      
      roleId_ = getDefaultInstance().getRoleId();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The role ID to use for this role.
     * A role ID may contain alphanumeric characters, underscores (`_`), and
     * periods (`.`). It must contain a minimum of 3 characters and a maximum of
     * 64 characters.
     * </pre>
     *
     * <code>string role_id = 2;</code>
     * @param value The bytes for roleId to set.
     * @return This builder for chaining.
     */
    public Builder setRoleIdBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      roleId_ = value;
      onChanged();
      return this;
    }

    private com.google.iam.admin.v1.Role role_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.iam.admin.v1.Role, com.google.iam.admin.v1.Role.Builder, com.google.iam.admin.v1.RoleOrBuilder> roleBuilder_;
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     * @return Whether the role field is set.
     */
    public boolean hasRole() {
      return roleBuilder_ != null || role_ != null;
    }
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     * @return The role.
     */
    public com.google.iam.admin.v1.Role getRole() {
      if (roleBuilder_ == null) {
        return role_ == null ? com.google.iam.admin.v1.Role.getDefaultInstance() : role_;
      } else {
        return roleBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     */
    public Builder setRole(com.google.iam.admin.v1.Role value) {
      if (roleBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        role_ = value;
        onChanged();
      } else {
        roleBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     */
    public Builder setRole(
        com.google.iam.admin.v1.Role.Builder builderForValue) {
      if (roleBuilder_ == null) {
        role_ = builderForValue.build();
        onChanged();
      } else {
        roleBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     */
    public Builder mergeRole(com.google.iam.admin.v1.Role value) {
      if (roleBuilder_ == null) {
        if (role_ != null) {
          role_ =
            com.google.iam.admin.v1.Role.newBuilder(role_).mergeFrom(value).buildPartial();
        } else {
          role_ = value;
        }
        onChanged();
      } else {
        roleBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     */
    public Builder clearRole() {
      if (roleBuilder_ == null) {
        role_ = null;
        onChanged();
      } else {
        role_ = null;
        roleBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     */
    public com.google.iam.admin.v1.Role.Builder getRoleBuilder() {
      
      onChanged();
      return getRoleFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     */
    public com.google.iam.admin.v1.RoleOrBuilder getRoleOrBuilder() {
      if (roleBuilder_ != null) {
        return roleBuilder_.getMessageOrBuilder();
      } else {
        return role_ == null ?
            com.google.iam.admin.v1.Role.getDefaultInstance() : role_;
      }
    }
    /**
     * <pre>
     * The Role resource to create.
     * </pre>
     *
     * <code>.google.iam.admin.v1.Role role = 3;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.iam.admin.v1.Role, com.google.iam.admin.v1.Role.Builder, com.google.iam.admin.v1.RoleOrBuilder> 
        getRoleFieldBuilder() {
      if (roleBuilder_ == null) {
        roleBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.iam.admin.v1.Role, com.google.iam.admin.v1.Role.Builder, com.google.iam.admin.v1.RoleOrBuilder>(
                getRole(),
                getParentForChildren(),
                isClean());
        role_ = null;
      }
      return roleBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.iam.admin.v1.CreateRoleRequest)
  }

  // @@protoc_insertion_point(class_scope:google.iam.admin.v1.CreateRoleRequest)
  private static final com.google.iam.admin.v1.CreateRoleRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.iam.admin.v1.CreateRoleRequest();
  }

  public static com.google.iam.admin.v1.CreateRoleRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<CreateRoleRequest>
      PARSER = new com.google.protobuf.AbstractParser<CreateRoleRequest>() {
    @java.lang.Override
    public CreateRoleRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new CreateRoleRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<CreateRoleRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<CreateRoleRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.iam.admin.v1.CreateRoleRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

