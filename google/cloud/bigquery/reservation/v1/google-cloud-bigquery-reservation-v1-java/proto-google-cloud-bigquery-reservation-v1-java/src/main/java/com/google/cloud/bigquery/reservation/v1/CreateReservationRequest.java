// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/bigquery/reservation/v1/reservation.proto

package com.google.cloud.bigquery.reservation.v1;

/**
 * <pre>
 * The request for [ReservationService.CreateReservation][google.cloud.bigquery.reservation.v1.ReservationService.CreateReservation].
 * </pre>
 *
 * Protobuf type {@code google.cloud.bigquery.reservation.v1.CreateReservationRequest}
 */
public final class CreateReservationRequest extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.bigquery.reservation.v1.CreateReservationRequest)
    CreateReservationRequestOrBuilder {
private static final long serialVersionUID = 0L;
  // Use CreateReservationRequest.newBuilder() to construct.
  private CreateReservationRequest(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private CreateReservationRequest() {
    parent_ = "";
    reservationId_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new CreateReservationRequest();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private CreateReservationRequest(
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

            reservationId_ = s;
            break;
          }
          case 26: {
            com.google.cloud.bigquery.reservation.v1.Reservation.Builder subBuilder = null;
            if (reservation_ != null) {
              subBuilder = reservation_.toBuilder();
            }
            reservation_ = input.readMessage(com.google.cloud.bigquery.reservation.v1.Reservation.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(reservation_);
              reservation_ = subBuilder.buildPartial();
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
    return com.google.cloud.bigquery.reservation.v1.ReservationProto.internal_static_google_cloud_bigquery_reservation_v1_CreateReservationRequest_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.bigquery.reservation.v1.ReservationProto.internal_static_google_cloud_bigquery_reservation_v1_CreateReservationRequest_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.bigquery.reservation.v1.CreateReservationRequest.class, com.google.cloud.bigquery.reservation.v1.CreateReservationRequest.Builder.class);
  }

  public static final int PARENT_FIELD_NUMBER = 1;
  private volatile java.lang.Object parent_;
  /**
   * <pre>
   * Required. Project, location. E.g.,
   * `projects/myproject/locations/US`
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
   * Required. Project, location. E.g.,
   * `projects/myproject/locations/US`
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

  public static final int RESERVATION_ID_FIELD_NUMBER = 2;
  private volatile java.lang.Object reservationId_;
  /**
   * <pre>
   * The reservation ID. This field must only contain lower case alphanumeric
   * characters or dash. Max length is 64 characters.
   * </pre>
   *
   * <code>string reservation_id = 2;</code>
   * @return The reservationId.
   */
  @java.lang.Override
  public java.lang.String getReservationId() {
    java.lang.Object ref = reservationId_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      reservationId_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * The reservation ID. This field must only contain lower case alphanumeric
   * characters or dash. Max length is 64 characters.
   * </pre>
   *
   * <code>string reservation_id = 2;</code>
   * @return The bytes for reservationId.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getReservationIdBytes() {
    java.lang.Object ref = reservationId_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      reservationId_ = b;
      return b;
    } else {
      return (com.google.protobuf.ByteString) ref;
    }
  }

  public static final int RESERVATION_FIELD_NUMBER = 3;
  private com.google.cloud.bigquery.reservation.v1.Reservation reservation_;
  /**
   * <pre>
   * Definition of the new reservation to create.
   * </pre>
   *
   * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
   * @return Whether the reservation field is set.
   */
  @java.lang.Override
  public boolean hasReservation() {
    return reservation_ != null;
  }
  /**
   * <pre>
   * Definition of the new reservation to create.
   * </pre>
   *
   * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
   * @return The reservation.
   */
  @java.lang.Override
  public com.google.cloud.bigquery.reservation.v1.Reservation getReservation() {
    return reservation_ == null ? com.google.cloud.bigquery.reservation.v1.Reservation.getDefaultInstance() : reservation_;
  }
  /**
   * <pre>
   * Definition of the new reservation to create.
   * </pre>
   *
   * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
   */
  @java.lang.Override
  public com.google.cloud.bigquery.reservation.v1.ReservationOrBuilder getReservationOrBuilder() {
    return getReservation();
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
    if (!getReservationIdBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, reservationId_);
    }
    if (reservation_ != null) {
      output.writeMessage(3, getReservation());
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
    if (!getReservationIdBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, reservationId_);
    }
    if (reservation_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(3, getReservation());
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
    if (!(obj instanceof com.google.cloud.bigquery.reservation.v1.CreateReservationRequest)) {
      return super.equals(obj);
    }
    com.google.cloud.bigquery.reservation.v1.CreateReservationRequest other = (com.google.cloud.bigquery.reservation.v1.CreateReservationRequest) obj;

    if (!getParent()
        .equals(other.getParent())) return false;
    if (!getReservationId()
        .equals(other.getReservationId())) return false;
    if (hasReservation() != other.hasReservation()) return false;
    if (hasReservation()) {
      if (!getReservation()
          .equals(other.getReservation())) return false;
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
    hash = (37 * hash) + RESERVATION_ID_FIELD_NUMBER;
    hash = (53 * hash) + getReservationId().hashCode();
    if (hasReservation()) {
      hash = (37 * hash) + RESERVATION_FIELD_NUMBER;
      hash = (53 * hash) + getReservation().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parseFrom(
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
  public static Builder newBuilder(com.google.cloud.bigquery.reservation.v1.CreateReservationRequest prototype) {
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
   * The request for [ReservationService.CreateReservation][google.cloud.bigquery.reservation.v1.ReservationService.CreateReservation].
   * </pre>
   *
   * Protobuf type {@code google.cloud.bigquery.reservation.v1.CreateReservationRequest}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.bigquery.reservation.v1.CreateReservationRequest)
      com.google.cloud.bigquery.reservation.v1.CreateReservationRequestOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.bigquery.reservation.v1.ReservationProto.internal_static_google_cloud_bigquery_reservation_v1_CreateReservationRequest_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.bigquery.reservation.v1.ReservationProto.internal_static_google_cloud_bigquery_reservation_v1_CreateReservationRequest_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.bigquery.reservation.v1.CreateReservationRequest.class, com.google.cloud.bigquery.reservation.v1.CreateReservationRequest.Builder.class);
    }

    // Construct using com.google.cloud.bigquery.reservation.v1.CreateReservationRequest.newBuilder()
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

      reservationId_ = "";

      if (reservationBuilder_ == null) {
        reservation_ = null;
      } else {
        reservation_ = null;
        reservationBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.bigquery.reservation.v1.ReservationProto.internal_static_google_cloud_bigquery_reservation_v1_CreateReservationRequest_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.bigquery.reservation.v1.CreateReservationRequest getDefaultInstanceForType() {
      return com.google.cloud.bigquery.reservation.v1.CreateReservationRequest.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.bigquery.reservation.v1.CreateReservationRequest build() {
      com.google.cloud.bigquery.reservation.v1.CreateReservationRequest result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.bigquery.reservation.v1.CreateReservationRequest buildPartial() {
      com.google.cloud.bigquery.reservation.v1.CreateReservationRequest result = new com.google.cloud.bigquery.reservation.v1.CreateReservationRequest(this);
      result.parent_ = parent_;
      result.reservationId_ = reservationId_;
      if (reservationBuilder_ == null) {
        result.reservation_ = reservation_;
      } else {
        result.reservation_ = reservationBuilder_.build();
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
      if (other instanceof com.google.cloud.bigquery.reservation.v1.CreateReservationRequest) {
        return mergeFrom((com.google.cloud.bigquery.reservation.v1.CreateReservationRequest)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.bigquery.reservation.v1.CreateReservationRequest other) {
      if (other == com.google.cloud.bigquery.reservation.v1.CreateReservationRequest.getDefaultInstance()) return this;
      if (!other.getParent().isEmpty()) {
        parent_ = other.parent_;
        onChanged();
      }
      if (!other.getReservationId().isEmpty()) {
        reservationId_ = other.reservationId_;
        onChanged();
      }
      if (other.hasReservation()) {
        mergeReservation(other.getReservation());
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
      com.google.cloud.bigquery.reservation.v1.CreateReservationRequest parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.bigquery.reservation.v1.CreateReservationRequest) e.getUnfinishedMessage();
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
     * Required. Project, location. E.g.,
     * `projects/myproject/locations/US`
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
     * Required. Project, location. E.g.,
     * `projects/myproject/locations/US`
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
     * Required. Project, location. E.g.,
     * `projects/myproject/locations/US`
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
     * Required. Project, location. E.g.,
     * `projects/myproject/locations/US`
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
     * Required. Project, location. E.g.,
     * `projects/myproject/locations/US`
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

    private java.lang.Object reservationId_ = "";
    /**
     * <pre>
     * The reservation ID. This field must only contain lower case alphanumeric
     * characters or dash. Max length is 64 characters.
     * </pre>
     *
     * <code>string reservation_id = 2;</code>
     * @return The reservationId.
     */
    public java.lang.String getReservationId() {
      java.lang.Object ref = reservationId_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        reservationId_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * The reservation ID. This field must only contain lower case alphanumeric
     * characters or dash. Max length is 64 characters.
     * </pre>
     *
     * <code>string reservation_id = 2;</code>
     * @return The bytes for reservationId.
     */
    public com.google.protobuf.ByteString
        getReservationIdBytes() {
      java.lang.Object ref = reservationId_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        reservationId_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * The reservation ID. This field must only contain lower case alphanumeric
     * characters or dash. Max length is 64 characters.
     * </pre>
     *
     * <code>string reservation_id = 2;</code>
     * @param value The reservationId to set.
     * @return This builder for chaining.
     */
    public Builder setReservationId(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      reservationId_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The reservation ID. This field must only contain lower case alphanumeric
     * characters or dash. Max length is 64 characters.
     * </pre>
     *
     * <code>string reservation_id = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearReservationId() {
      
      reservationId_ = getDefaultInstance().getReservationId();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The reservation ID. This field must only contain lower case alphanumeric
     * characters or dash. Max length is 64 characters.
     * </pre>
     *
     * <code>string reservation_id = 2;</code>
     * @param value The bytes for reservationId to set.
     * @return This builder for chaining.
     */
    public Builder setReservationIdBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      reservationId_ = value;
      onChanged();
      return this;
    }

    private com.google.cloud.bigquery.reservation.v1.Reservation reservation_;
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.bigquery.reservation.v1.Reservation, com.google.cloud.bigquery.reservation.v1.Reservation.Builder, com.google.cloud.bigquery.reservation.v1.ReservationOrBuilder> reservationBuilder_;
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     * @return Whether the reservation field is set.
     */
    public boolean hasReservation() {
      return reservationBuilder_ != null || reservation_ != null;
    }
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     * @return The reservation.
     */
    public com.google.cloud.bigquery.reservation.v1.Reservation getReservation() {
      if (reservationBuilder_ == null) {
        return reservation_ == null ? com.google.cloud.bigquery.reservation.v1.Reservation.getDefaultInstance() : reservation_;
      } else {
        return reservationBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     */
    public Builder setReservation(com.google.cloud.bigquery.reservation.v1.Reservation value) {
      if (reservationBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        reservation_ = value;
        onChanged();
      } else {
        reservationBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     */
    public Builder setReservation(
        com.google.cloud.bigquery.reservation.v1.Reservation.Builder builderForValue) {
      if (reservationBuilder_ == null) {
        reservation_ = builderForValue.build();
        onChanged();
      } else {
        reservationBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     */
    public Builder mergeReservation(com.google.cloud.bigquery.reservation.v1.Reservation value) {
      if (reservationBuilder_ == null) {
        if (reservation_ != null) {
          reservation_ =
            com.google.cloud.bigquery.reservation.v1.Reservation.newBuilder(reservation_).mergeFrom(value).buildPartial();
        } else {
          reservation_ = value;
        }
        onChanged();
      } else {
        reservationBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     */
    public Builder clearReservation() {
      if (reservationBuilder_ == null) {
        reservation_ = null;
        onChanged();
      } else {
        reservation_ = null;
        reservationBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     */
    public com.google.cloud.bigquery.reservation.v1.Reservation.Builder getReservationBuilder() {
      
      onChanged();
      return getReservationFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     */
    public com.google.cloud.bigquery.reservation.v1.ReservationOrBuilder getReservationOrBuilder() {
      if (reservationBuilder_ != null) {
        return reservationBuilder_.getMessageOrBuilder();
      } else {
        return reservation_ == null ?
            com.google.cloud.bigquery.reservation.v1.Reservation.getDefaultInstance() : reservation_;
      }
    }
    /**
     * <pre>
     * Definition of the new reservation to create.
     * </pre>
     *
     * <code>.google.cloud.bigquery.reservation.v1.Reservation reservation = 3;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        com.google.cloud.bigquery.reservation.v1.Reservation, com.google.cloud.bigquery.reservation.v1.Reservation.Builder, com.google.cloud.bigquery.reservation.v1.ReservationOrBuilder> 
        getReservationFieldBuilder() {
      if (reservationBuilder_ == null) {
        reservationBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            com.google.cloud.bigquery.reservation.v1.Reservation, com.google.cloud.bigquery.reservation.v1.Reservation.Builder, com.google.cloud.bigquery.reservation.v1.ReservationOrBuilder>(
                getReservation(),
                getParentForChildren(),
                isClean());
        reservation_ = null;
      }
      return reservationBuilder_;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.bigquery.reservation.v1.CreateReservationRequest)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.bigquery.reservation.v1.CreateReservationRequest)
  private static final com.google.cloud.bigquery.reservation.v1.CreateReservationRequest DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.bigquery.reservation.v1.CreateReservationRequest();
  }

  public static com.google.cloud.bigquery.reservation.v1.CreateReservationRequest getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<CreateReservationRequest>
      PARSER = new com.google.protobuf.AbstractParser<CreateReservationRequest>() {
    @java.lang.Override
    public CreateReservationRequest parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new CreateReservationRequest(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<CreateReservationRequest> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<CreateReservationRequest> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.bigquery.reservation.v1.CreateReservationRequest getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

