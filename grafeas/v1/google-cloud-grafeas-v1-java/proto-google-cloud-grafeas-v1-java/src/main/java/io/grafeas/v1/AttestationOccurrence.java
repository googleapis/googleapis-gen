// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: grafeas/v1/attestation.proto

package io.grafeas.v1;

/**
 * <pre>
 * Occurrence that represents a single "attestation". The authenticity of an
 * attestation can be verified using the attached signature. If the verifier
 * trusts the public key of the signer, then verifying the signature is
 * sufficient to establish trust. In this circumstance, the authority to which
 * this attestation is attached is primarily useful for lookup (how to find
 * this attestation if you already know the authority and artifact to be
 * verified) and intent (for which authority this attestation was intended to
 * sign.
 * </pre>
 *
 * Protobuf type {@code grafeas.v1.AttestationOccurrence}
 */
public final class AttestationOccurrence extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:grafeas.v1.AttestationOccurrence)
    AttestationOccurrenceOrBuilder {
private static final long serialVersionUID = 0L;
  // Use AttestationOccurrence.newBuilder() to construct.
  private AttestationOccurrence(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private AttestationOccurrence() {
    serializedPayload_ = com.google.protobuf.ByteString.EMPTY;
    signatures_ = java.util.Collections.emptyList();
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new AttestationOccurrence();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private AttestationOccurrence(
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

            serializedPayload_ = input.readBytes();
            break;
          }
          case 18: {
            if (!((mutable_bitField0_ & 0x00000001) != 0)) {
              signatures_ = new java.util.ArrayList<io.grafeas.v1.Signature>();
              mutable_bitField0_ |= 0x00000001;
            }
            signatures_.add(
                input.readMessage(io.grafeas.v1.Signature.parser(), extensionRegistry));
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
        signatures_ = java.util.Collections.unmodifiableList(signatures_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return io.grafeas.v1.Attestation.internal_static_grafeas_v1_AttestationOccurrence_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return io.grafeas.v1.Attestation.internal_static_grafeas_v1_AttestationOccurrence_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            io.grafeas.v1.AttestationOccurrence.class, io.grafeas.v1.AttestationOccurrence.Builder.class);
  }

  public static final int SERIALIZED_PAYLOAD_FIELD_NUMBER = 1;
  private com.google.protobuf.ByteString serializedPayload_;
  /**
   * <pre>
   * Required. The serialized payload that is verified by one or more
   * `signatures`.
   * </pre>
   *
   * <code>bytes serialized_payload = 1;</code>
   * @return The serializedPayload.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString getSerializedPayload() {
    return serializedPayload_;
  }

  public static final int SIGNATURES_FIELD_NUMBER = 2;
  private java.util.List<io.grafeas.v1.Signature> signatures_;
  /**
   * <pre>
   * One or more signatures over `serialized_payload`.  Verifier implementations
   * should consider this attestation message verified if at least one
   * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
   * for more details on signature structure and verification.
   * </pre>
   *
   * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
   */
  @java.lang.Override
  public java.util.List<io.grafeas.v1.Signature> getSignaturesList() {
    return signatures_;
  }
  /**
   * <pre>
   * One or more signatures over `serialized_payload`.  Verifier implementations
   * should consider this attestation message verified if at least one
   * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
   * for more details on signature structure and verification.
   * </pre>
   *
   * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
   */
  @java.lang.Override
  public java.util.List<? extends io.grafeas.v1.SignatureOrBuilder> 
      getSignaturesOrBuilderList() {
    return signatures_;
  }
  /**
   * <pre>
   * One or more signatures over `serialized_payload`.  Verifier implementations
   * should consider this attestation message verified if at least one
   * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
   * for more details on signature structure and verification.
   * </pre>
   *
   * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
   */
  @java.lang.Override
  public int getSignaturesCount() {
    return signatures_.size();
  }
  /**
   * <pre>
   * One or more signatures over `serialized_payload`.  Verifier implementations
   * should consider this attestation message verified if at least one
   * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
   * for more details on signature structure and verification.
   * </pre>
   *
   * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
   */
  @java.lang.Override
  public io.grafeas.v1.Signature getSignatures(int index) {
    return signatures_.get(index);
  }
  /**
   * <pre>
   * One or more signatures over `serialized_payload`.  Verifier implementations
   * should consider this attestation message verified if at least one
   * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
   * for more details on signature structure and verification.
   * </pre>
   *
   * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
   */
  @java.lang.Override
  public io.grafeas.v1.SignatureOrBuilder getSignaturesOrBuilder(
      int index) {
    return signatures_.get(index);
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
    if (!serializedPayload_.isEmpty()) {
      output.writeBytes(1, serializedPayload_);
    }
    for (int i = 0; i < signatures_.size(); i++) {
      output.writeMessage(2, signatures_.get(i));
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (!serializedPayload_.isEmpty()) {
      size += com.google.protobuf.CodedOutputStream
        .computeBytesSize(1, serializedPayload_);
    }
    for (int i = 0; i < signatures_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(2, signatures_.get(i));
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
    if (!(obj instanceof io.grafeas.v1.AttestationOccurrence)) {
      return super.equals(obj);
    }
    io.grafeas.v1.AttestationOccurrence other = (io.grafeas.v1.AttestationOccurrence) obj;

    if (!getSerializedPayload()
        .equals(other.getSerializedPayload())) return false;
    if (!getSignaturesList()
        .equals(other.getSignaturesList())) return false;
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
    hash = (37 * hash) + SERIALIZED_PAYLOAD_FIELD_NUMBER;
    hash = (53 * hash) + getSerializedPayload().hashCode();
    if (getSignaturesCount() > 0) {
      hash = (37 * hash) + SIGNATURES_FIELD_NUMBER;
      hash = (53 * hash) + getSignaturesList().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static io.grafeas.v1.AttestationOccurrence parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static io.grafeas.v1.AttestationOccurrence parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static io.grafeas.v1.AttestationOccurrence parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static io.grafeas.v1.AttestationOccurrence parseFrom(
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
  public static Builder newBuilder(io.grafeas.v1.AttestationOccurrence prototype) {
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
   * Occurrence that represents a single "attestation". The authenticity of an
   * attestation can be verified using the attached signature. If the verifier
   * trusts the public key of the signer, then verifying the signature is
   * sufficient to establish trust. In this circumstance, the authority to which
   * this attestation is attached is primarily useful for lookup (how to find
   * this attestation if you already know the authority and artifact to be
   * verified) and intent (for which authority this attestation was intended to
   * sign.
   * </pre>
   *
   * Protobuf type {@code grafeas.v1.AttestationOccurrence}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:grafeas.v1.AttestationOccurrence)
      io.grafeas.v1.AttestationOccurrenceOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return io.grafeas.v1.Attestation.internal_static_grafeas_v1_AttestationOccurrence_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return io.grafeas.v1.Attestation.internal_static_grafeas_v1_AttestationOccurrence_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              io.grafeas.v1.AttestationOccurrence.class, io.grafeas.v1.AttestationOccurrence.Builder.class);
    }

    // Construct using io.grafeas.v1.AttestationOccurrence.newBuilder()
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
        getSignaturesFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      serializedPayload_ = com.google.protobuf.ByteString.EMPTY;

      if (signaturesBuilder_ == null) {
        signatures_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        signaturesBuilder_.clear();
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return io.grafeas.v1.Attestation.internal_static_grafeas_v1_AttestationOccurrence_descriptor;
    }

    @java.lang.Override
    public io.grafeas.v1.AttestationOccurrence getDefaultInstanceForType() {
      return io.grafeas.v1.AttestationOccurrence.getDefaultInstance();
    }

    @java.lang.Override
    public io.grafeas.v1.AttestationOccurrence build() {
      io.grafeas.v1.AttestationOccurrence result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public io.grafeas.v1.AttestationOccurrence buildPartial() {
      io.grafeas.v1.AttestationOccurrence result = new io.grafeas.v1.AttestationOccurrence(this);
      int from_bitField0_ = bitField0_;
      result.serializedPayload_ = serializedPayload_;
      if (signaturesBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          signatures_ = java.util.Collections.unmodifiableList(signatures_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.signatures_ = signatures_;
      } else {
        result.signatures_ = signaturesBuilder_.build();
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
      if (other instanceof io.grafeas.v1.AttestationOccurrence) {
        return mergeFrom((io.grafeas.v1.AttestationOccurrence)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(io.grafeas.v1.AttestationOccurrence other) {
      if (other == io.grafeas.v1.AttestationOccurrence.getDefaultInstance()) return this;
      if (other.getSerializedPayload() != com.google.protobuf.ByteString.EMPTY) {
        setSerializedPayload(other.getSerializedPayload());
      }
      if (signaturesBuilder_ == null) {
        if (!other.signatures_.isEmpty()) {
          if (signatures_.isEmpty()) {
            signatures_ = other.signatures_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureSignaturesIsMutable();
            signatures_.addAll(other.signatures_);
          }
          onChanged();
        }
      } else {
        if (!other.signatures_.isEmpty()) {
          if (signaturesBuilder_.isEmpty()) {
            signaturesBuilder_.dispose();
            signaturesBuilder_ = null;
            signatures_ = other.signatures_;
            bitField0_ = (bitField0_ & ~0x00000001);
            signaturesBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getSignaturesFieldBuilder() : null;
          } else {
            signaturesBuilder_.addAllMessages(other.signatures_);
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
      io.grafeas.v1.AttestationOccurrence parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (io.grafeas.v1.AttestationOccurrence) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private com.google.protobuf.ByteString serializedPayload_ = com.google.protobuf.ByteString.EMPTY;
    /**
     * <pre>
     * Required. The serialized payload that is verified by one or more
     * `signatures`.
     * </pre>
     *
     * <code>bytes serialized_payload = 1;</code>
     * @return The serializedPayload.
     */
    @java.lang.Override
    public com.google.protobuf.ByteString getSerializedPayload() {
      return serializedPayload_;
    }
    /**
     * <pre>
     * Required. The serialized payload that is verified by one or more
     * `signatures`.
     * </pre>
     *
     * <code>bytes serialized_payload = 1;</code>
     * @param value The serializedPayload to set.
     * @return This builder for chaining.
     */
    public Builder setSerializedPayload(com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      serializedPayload_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The serialized payload that is verified by one or more
     * `signatures`.
     * </pre>
     *
     * <code>bytes serialized_payload = 1;</code>
     * @return This builder for chaining.
     */
    public Builder clearSerializedPayload() {
      
      serializedPayload_ = getDefaultInstance().getSerializedPayload();
      onChanged();
      return this;
    }

    private java.util.List<io.grafeas.v1.Signature> signatures_ =
      java.util.Collections.emptyList();
    private void ensureSignaturesIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        signatures_ = new java.util.ArrayList<io.grafeas.v1.Signature>(signatures_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        io.grafeas.v1.Signature, io.grafeas.v1.Signature.Builder, io.grafeas.v1.SignatureOrBuilder> signaturesBuilder_;

    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public java.util.List<io.grafeas.v1.Signature> getSignaturesList() {
      if (signaturesBuilder_ == null) {
        return java.util.Collections.unmodifiableList(signatures_);
      } else {
        return signaturesBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public int getSignaturesCount() {
      if (signaturesBuilder_ == null) {
        return signatures_.size();
      } else {
        return signaturesBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public io.grafeas.v1.Signature getSignatures(int index) {
      if (signaturesBuilder_ == null) {
        return signatures_.get(index);
      } else {
        return signaturesBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder setSignatures(
        int index, io.grafeas.v1.Signature value) {
      if (signaturesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureSignaturesIsMutable();
        signatures_.set(index, value);
        onChanged();
      } else {
        signaturesBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder setSignatures(
        int index, io.grafeas.v1.Signature.Builder builderForValue) {
      if (signaturesBuilder_ == null) {
        ensureSignaturesIsMutable();
        signatures_.set(index, builderForValue.build());
        onChanged();
      } else {
        signaturesBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder addSignatures(io.grafeas.v1.Signature value) {
      if (signaturesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureSignaturesIsMutable();
        signatures_.add(value);
        onChanged();
      } else {
        signaturesBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder addSignatures(
        int index, io.grafeas.v1.Signature value) {
      if (signaturesBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureSignaturesIsMutable();
        signatures_.add(index, value);
        onChanged();
      } else {
        signaturesBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder addSignatures(
        io.grafeas.v1.Signature.Builder builderForValue) {
      if (signaturesBuilder_ == null) {
        ensureSignaturesIsMutable();
        signatures_.add(builderForValue.build());
        onChanged();
      } else {
        signaturesBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder addSignatures(
        int index, io.grafeas.v1.Signature.Builder builderForValue) {
      if (signaturesBuilder_ == null) {
        ensureSignaturesIsMutable();
        signatures_.add(index, builderForValue.build());
        onChanged();
      } else {
        signaturesBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder addAllSignatures(
        java.lang.Iterable<? extends io.grafeas.v1.Signature> values) {
      if (signaturesBuilder_ == null) {
        ensureSignaturesIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, signatures_);
        onChanged();
      } else {
        signaturesBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder clearSignatures() {
      if (signaturesBuilder_ == null) {
        signatures_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        signaturesBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public Builder removeSignatures(int index) {
      if (signaturesBuilder_ == null) {
        ensureSignaturesIsMutable();
        signatures_.remove(index);
        onChanged();
      } else {
        signaturesBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public io.grafeas.v1.Signature.Builder getSignaturesBuilder(
        int index) {
      return getSignaturesFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public io.grafeas.v1.SignatureOrBuilder getSignaturesOrBuilder(
        int index) {
      if (signaturesBuilder_ == null) {
        return signatures_.get(index);  } else {
        return signaturesBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public java.util.List<? extends io.grafeas.v1.SignatureOrBuilder> 
         getSignaturesOrBuilderList() {
      if (signaturesBuilder_ != null) {
        return signaturesBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(signatures_);
      }
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public io.grafeas.v1.Signature.Builder addSignaturesBuilder() {
      return getSignaturesFieldBuilder().addBuilder(
          io.grafeas.v1.Signature.getDefaultInstance());
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public io.grafeas.v1.Signature.Builder addSignaturesBuilder(
        int index) {
      return getSignaturesFieldBuilder().addBuilder(
          index, io.grafeas.v1.Signature.getDefaultInstance());
    }
    /**
     * <pre>
     * One or more signatures over `serialized_payload`.  Verifier implementations
     * should consider this attestation message verified if at least one
     * `signature` verifies `serialized_payload`.  See `Signature` in common.proto
     * for more details on signature structure and verification.
     * </pre>
     *
     * <code>repeated .grafeas.v1.Signature signatures = 2;</code>
     */
    public java.util.List<io.grafeas.v1.Signature.Builder> 
         getSignaturesBuilderList() {
      return getSignaturesFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        io.grafeas.v1.Signature, io.grafeas.v1.Signature.Builder, io.grafeas.v1.SignatureOrBuilder> 
        getSignaturesFieldBuilder() {
      if (signaturesBuilder_ == null) {
        signaturesBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            io.grafeas.v1.Signature, io.grafeas.v1.Signature.Builder, io.grafeas.v1.SignatureOrBuilder>(
                signatures_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        signatures_ = null;
      }
      return signaturesBuilder_;
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


    // @@protoc_insertion_point(builder_scope:grafeas.v1.AttestationOccurrence)
  }

  // @@protoc_insertion_point(class_scope:grafeas.v1.AttestationOccurrence)
  private static final io.grafeas.v1.AttestationOccurrence DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new io.grafeas.v1.AttestationOccurrence();
  }

  public static io.grafeas.v1.AttestationOccurrence getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<AttestationOccurrence>
      PARSER = new com.google.protobuf.AbstractParser<AttestationOccurrence>() {
    @java.lang.Override
    public AttestationOccurrence parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new AttestationOccurrence(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<AttestationOccurrence> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<AttestationOccurrence> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public io.grafeas.v1.AttestationOccurrence getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

