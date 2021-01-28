// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/containeranalysis/v1beta1/discovery/discovery.proto

package io.grafeas.v1beta1.discovery;

/**
 * <pre>
 * Details of a discovery occurrence.
 * </pre>
 *
 * Protobuf type {@code grafeas.v1beta1.discovery.Details}
 */
public final class Details extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:grafeas.v1beta1.discovery.Details)
    DetailsOrBuilder {
private static final long serialVersionUID = 0L;
  // Use Details.newBuilder() to construct.
  private Details(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private Details() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new Details();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private Details(
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
            io.grafeas.v1beta1.discovery.Discovered.Builder subBuilder = null;
            if (discovered_ != null) {
              subBuilder = discovered_.toBuilder();
            }
            discovered_ = input.readMessage(io.grafeas.v1beta1.discovery.Discovered.parser(), extensionRegistry);
            if (subBuilder != null) {
              subBuilder.mergeFrom(discovered_);
              discovered_ = subBuilder.buildPartial();
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
    return io.grafeas.v1beta1.discovery.DiscoveryOuterClass.internal_static_grafeas_v1beta1_discovery_Details_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return io.grafeas.v1beta1.discovery.DiscoveryOuterClass.internal_static_grafeas_v1beta1_discovery_Details_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            io.grafeas.v1beta1.discovery.Details.class, io.grafeas.v1beta1.discovery.Details.Builder.class);
  }

  public static final int DISCOVERED_FIELD_NUMBER = 1;
  private io.grafeas.v1beta1.discovery.Discovered discovered_;
  /**
   * <pre>
   * Required. Analysis status for the discovered resource.
   * </pre>
   *
   * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
   * @return Whether the discovered field is set.
   */
  @java.lang.Override
  public boolean hasDiscovered() {
    return discovered_ != null;
  }
  /**
   * <pre>
   * Required. Analysis status for the discovered resource.
   * </pre>
   *
   * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
   * @return The discovered.
   */
  @java.lang.Override
  public io.grafeas.v1beta1.discovery.Discovered getDiscovered() {
    return discovered_ == null ? io.grafeas.v1beta1.discovery.Discovered.getDefaultInstance() : discovered_;
  }
  /**
   * <pre>
   * Required. Analysis status for the discovered resource.
   * </pre>
   *
   * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
   */
  @java.lang.Override
  public io.grafeas.v1beta1.discovery.DiscoveredOrBuilder getDiscoveredOrBuilder() {
    return getDiscovered();
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
    if (discovered_ != null) {
      output.writeMessage(1, getDiscovered());
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (discovered_ != null) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, getDiscovered());
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
    if (!(obj instanceof io.grafeas.v1beta1.discovery.Details)) {
      return super.equals(obj);
    }
    io.grafeas.v1beta1.discovery.Details other = (io.grafeas.v1beta1.discovery.Details) obj;

    if (hasDiscovered() != other.hasDiscovered()) return false;
    if (hasDiscovered()) {
      if (!getDiscovered()
          .equals(other.getDiscovered())) return false;
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
    if (hasDiscovered()) {
      hash = (37 * hash) + DISCOVERED_FIELD_NUMBER;
      hash = (53 * hash) + getDiscovered().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static io.grafeas.v1beta1.discovery.Details parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static io.grafeas.v1beta1.discovery.Details parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static io.grafeas.v1beta1.discovery.Details parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static io.grafeas.v1beta1.discovery.Details parseFrom(
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
  public static Builder newBuilder(io.grafeas.v1beta1.discovery.Details prototype) {
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
   * Details of a discovery occurrence.
   * </pre>
   *
   * Protobuf type {@code grafeas.v1beta1.discovery.Details}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:grafeas.v1beta1.discovery.Details)
      io.grafeas.v1beta1.discovery.DetailsOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return io.grafeas.v1beta1.discovery.DiscoveryOuterClass.internal_static_grafeas_v1beta1_discovery_Details_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return io.grafeas.v1beta1.discovery.DiscoveryOuterClass.internal_static_grafeas_v1beta1_discovery_Details_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              io.grafeas.v1beta1.discovery.Details.class, io.grafeas.v1beta1.discovery.Details.Builder.class);
    }

    // Construct using io.grafeas.v1beta1.discovery.Details.newBuilder()
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
      if (discoveredBuilder_ == null) {
        discovered_ = null;
      } else {
        discovered_ = null;
        discoveredBuilder_ = null;
      }
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return io.grafeas.v1beta1.discovery.DiscoveryOuterClass.internal_static_grafeas_v1beta1_discovery_Details_descriptor;
    }

    @java.lang.Override
    public io.grafeas.v1beta1.discovery.Details getDefaultInstanceForType() {
      return io.grafeas.v1beta1.discovery.Details.getDefaultInstance();
    }

    @java.lang.Override
    public io.grafeas.v1beta1.discovery.Details build() {
      io.grafeas.v1beta1.discovery.Details result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public io.grafeas.v1beta1.discovery.Details buildPartial() {
      io.grafeas.v1beta1.discovery.Details result = new io.grafeas.v1beta1.discovery.Details(this);
      if (discoveredBuilder_ == null) {
        result.discovered_ = discovered_;
      } else {
        result.discovered_ = discoveredBuilder_.build();
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
      if (other instanceof io.grafeas.v1beta1.discovery.Details) {
        return mergeFrom((io.grafeas.v1beta1.discovery.Details)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(io.grafeas.v1beta1.discovery.Details other) {
      if (other == io.grafeas.v1beta1.discovery.Details.getDefaultInstance()) return this;
      if (other.hasDiscovered()) {
        mergeDiscovered(other.getDiscovered());
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
      io.grafeas.v1beta1.discovery.Details parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (io.grafeas.v1beta1.discovery.Details) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private io.grafeas.v1beta1.discovery.Discovered discovered_;
    private com.google.protobuf.SingleFieldBuilderV3<
        io.grafeas.v1beta1.discovery.Discovered, io.grafeas.v1beta1.discovery.Discovered.Builder, io.grafeas.v1beta1.discovery.DiscoveredOrBuilder> discoveredBuilder_;
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     * @return Whether the discovered field is set.
     */
    public boolean hasDiscovered() {
      return discoveredBuilder_ != null || discovered_ != null;
    }
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     * @return The discovered.
     */
    public io.grafeas.v1beta1.discovery.Discovered getDiscovered() {
      if (discoveredBuilder_ == null) {
        return discovered_ == null ? io.grafeas.v1beta1.discovery.Discovered.getDefaultInstance() : discovered_;
      } else {
        return discoveredBuilder_.getMessage();
      }
    }
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     */
    public Builder setDiscovered(io.grafeas.v1beta1.discovery.Discovered value) {
      if (discoveredBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        discovered_ = value;
        onChanged();
      } else {
        discoveredBuilder_.setMessage(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     */
    public Builder setDiscovered(
        io.grafeas.v1beta1.discovery.Discovered.Builder builderForValue) {
      if (discoveredBuilder_ == null) {
        discovered_ = builderForValue.build();
        onChanged();
      } else {
        discoveredBuilder_.setMessage(builderForValue.build());
      }

      return this;
    }
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     */
    public Builder mergeDiscovered(io.grafeas.v1beta1.discovery.Discovered value) {
      if (discoveredBuilder_ == null) {
        if (discovered_ != null) {
          discovered_ =
            io.grafeas.v1beta1.discovery.Discovered.newBuilder(discovered_).mergeFrom(value).buildPartial();
        } else {
          discovered_ = value;
        }
        onChanged();
      } else {
        discoveredBuilder_.mergeFrom(value);
      }

      return this;
    }
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     */
    public Builder clearDiscovered() {
      if (discoveredBuilder_ == null) {
        discovered_ = null;
        onChanged();
      } else {
        discovered_ = null;
        discoveredBuilder_ = null;
      }

      return this;
    }
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     */
    public io.grafeas.v1beta1.discovery.Discovered.Builder getDiscoveredBuilder() {
      
      onChanged();
      return getDiscoveredFieldBuilder().getBuilder();
    }
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     */
    public io.grafeas.v1beta1.discovery.DiscoveredOrBuilder getDiscoveredOrBuilder() {
      if (discoveredBuilder_ != null) {
        return discoveredBuilder_.getMessageOrBuilder();
      } else {
        return discovered_ == null ?
            io.grafeas.v1beta1.discovery.Discovered.getDefaultInstance() : discovered_;
      }
    }
    /**
     * <pre>
     * Required. Analysis status for the discovered resource.
     * </pre>
     *
     * <code>.grafeas.v1beta1.discovery.Discovered discovered = 1;</code>
     */
    private com.google.protobuf.SingleFieldBuilderV3<
        io.grafeas.v1beta1.discovery.Discovered, io.grafeas.v1beta1.discovery.Discovered.Builder, io.grafeas.v1beta1.discovery.DiscoveredOrBuilder> 
        getDiscoveredFieldBuilder() {
      if (discoveredBuilder_ == null) {
        discoveredBuilder_ = new com.google.protobuf.SingleFieldBuilderV3<
            io.grafeas.v1beta1.discovery.Discovered, io.grafeas.v1beta1.discovery.Discovered.Builder, io.grafeas.v1beta1.discovery.DiscoveredOrBuilder>(
                getDiscovered(),
                getParentForChildren(),
                isClean());
        discovered_ = null;
      }
      return discoveredBuilder_;
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


    // @@protoc_insertion_point(builder_scope:grafeas.v1beta1.discovery.Details)
  }

  // @@protoc_insertion_point(class_scope:grafeas.v1beta1.discovery.Details)
  private static final io.grafeas.v1beta1.discovery.Details DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new io.grafeas.v1beta1.discovery.Details();
  }

  public static io.grafeas.v1beta1.discovery.Details getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<Details>
      PARSER = new com.google.protobuf.AbstractParser<Details>() {
    @java.lang.Override
    public Details parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new Details(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<Details> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<Details> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public io.grafeas.v1beta1.discovery.Details getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

