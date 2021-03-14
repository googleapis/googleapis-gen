// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/appengine/v1/network_settings.proto

package com.google.appengine.v1;

/**
 * <pre>
 * A NetworkSettings resource is a container for ingress settings for a version
 * or service.
 * </pre>
 *
 * Protobuf type {@code google.appengine.v1.NetworkSettings}
 */
public final class NetworkSettings extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.appengine.v1.NetworkSettings)
    NetworkSettingsOrBuilder {
private static final long serialVersionUID = 0L;
  // Use NetworkSettings.newBuilder() to construct.
  private NetworkSettings(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private NetworkSettings() {
    ingressTrafficAllowed_ = 0;
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new NetworkSettings();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private NetworkSettings(
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
          case 8: {
            int rawValue = input.readEnum();

            ingressTrafficAllowed_ = rawValue;
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
    return com.google.appengine.v1.NetworkSettingsProto.internal_static_google_appengine_v1_NetworkSettings_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.appengine.v1.NetworkSettingsProto.internal_static_google_appengine_v1_NetworkSettings_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.appengine.v1.NetworkSettings.class, com.google.appengine.v1.NetworkSettings.Builder.class);
  }

  /**
   * <pre>
   * If unspecified, INGRESS_TRAFFIC_ALLOWED_ALL will be used.
   * </pre>
   *
   * Protobuf enum {@code google.appengine.v1.NetworkSettings.IngressTrafficAllowed}
   */
  public enum IngressTrafficAllowed
      implements com.google.protobuf.ProtocolMessageEnum {
    /**
     * <pre>
     * Unspecified
     * </pre>
     *
     * <code>INGRESS_TRAFFIC_ALLOWED_UNSPECIFIED = 0;</code>
     */
    INGRESS_TRAFFIC_ALLOWED_UNSPECIFIED(0),
    /**
     * <pre>
     * Allow HTTP traffic from public and private sources.
     * </pre>
     *
     * <code>INGRESS_TRAFFIC_ALLOWED_ALL = 1;</code>
     */
    INGRESS_TRAFFIC_ALLOWED_ALL(1),
    /**
     * <pre>
     * Allow HTTP traffic from only private VPC sources.
     * </pre>
     *
     * <code>INGRESS_TRAFFIC_ALLOWED_INTERNAL_ONLY = 2;</code>
     */
    INGRESS_TRAFFIC_ALLOWED_INTERNAL_ONLY(2),
    /**
     * <pre>
     * Allow HTTP traffic from private VPC sources and through load balancers.
     * </pre>
     *
     * <code>INGRESS_TRAFFIC_ALLOWED_INTERNAL_AND_LB = 3;</code>
     */
    INGRESS_TRAFFIC_ALLOWED_INTERNAL_AND_LB(3),
    UNRECOGNIZED(-1),
    ;

    /**
     * <pre>
     * Unspecified
     * </pre>
     *
     * <code>INGRESS_TRAFFIC_ALLOWED_UNSPECIFIED = 0;</code>
     */
    public static final int INGRESS_TRAFFIC_ALLOWED_UNSPECIFIED_VALUE = 0;
    /**
     * <pre>
     * Allow HTTP traffic from public and private sources.
     * </pre>
     *
     * <code>INGRESS_TRAFFIC_ALLOWED_ALL = 1;</code>
     */
    public static final int INGRESS_TRAFFIC_ALLOWED_ALL_VALUE = 1;
    /**
     * <pre>
     * Allow HTTP traffic from only private VPC sources.
     * </pre>
     *
     * <code>INGRESS_TRAFFIC_ALLOWED_INTERNAL_ONLY = 2;</code>
     */
    public static final int INGRESS_TRAFFIC_ALLOWED_INTERNAL_ONLY_VALUE = 2;
    /**
     * <pre>
     * Allow HTTP traffic from private VPC sources and through load balancers.
     * </pre>
     *
     * <code>INGRESS_TRAFFIC_ALLOWED_INTERNAL_AND_LB = 3;</code>
     */
    public static final int INGRESS_TRAFFIC_ALLOWED_INTERNAL_AND_LB_VALUE = 3;


    public final int getNumber() {
      if (this == UNRECOGNIZED) {
        throw new java.lang.IllegalArgumentException(
            "Can't get the number of an unknown enum value.");
      }
      return value;
    }

    /**
     * @param value The numeric wire value of the corresponding enum entry.
     * @return The enum associated with the given numeric wire value.
     * @deprecated Use {@link #forNumber(int)} instead.
     */
    @java.lang.Deprecated
    public static IngressTrafficAllowed valueOf(int value) {
      return forNumber(value);
    }

    /**
     * @param value The numeric wire value of the corresponding enum entry.
     * @return The enum associated with the given numeric wire value.
     */
    public static IngressTrafficAllowed forNumber(int value) {
      switch (value) {
        case 0: return INGRESS_TRAFFIC_ALLOWED_UNSPECIFIED;
        case 1: return INGRESS_TRAFFIC_ALLOWED_ALL;
        case 2: return INGRESS_TRAFFIC_ALLOWED_INTERNAL_ONLY;
        case 3: return INGRESS_TRAFFIC_ALLOWED_INTERNAL_AND_LB;
        default: return null;
      }
    }

    public static com.google.protobuf.Internal.EnumLiteMap<IngressTrafficAllowed>
        internalGetValueMap() {
      return internalValueMap;
    }
    private static final com.google.protobuf.Internal.EnumLiteMap<
        IngressTrafficAllowed> internalValueMap =
          new com.google.protobuf.Internal.EnumLiteMap<IngressTrafficAllowed>() {
            public IngressTrafficAllowed findValueByNumber(int number) {
              return IngressTrafficAllowed.forNumber(number);
            }
          };

    public final com.google.protobuf.Descriptors.EnumValueDescriptor
        getValueDescriptor() {
      if (this == UNRECOGNIZED) {
        throw new java.lang.IllegalStateException(
            "Can't get the descriptor of an unrecognized enum value.");
      }
      return getDescriptor().getValues().get(ordinal());
    }
    public final com.google.protobuf.Descriptors.EnumDescriptor
        getDescriptorForType() {
      return getDescriptor();
    }
    public static final com.google.protobuf.Descriptors.EnumDescriptor
        getDescriptor() {
      return com.google.appengine.v1.NetworkSettings.getDescriptor().getEnumTypes().get(0);
    }

    private static final IngressTrafficAllowed[] VALUES = values();

    public static IngressTrafficAllowed valueOf(
        com.google.protobuf.Descriptors.EnumValueDescriptor desc) {
      if (desc.getType() != getDescriptor()) {
        throw new java.lang.IllegalArgumentException(
          "EnumValueDescriptor is not for this type.");
      }
      if (desc.getIndex() == -1) {
        return UNRECOGNIZED;
      }
      return VALUES[desc.getIndex()];
    }

    private final int value;

    private IngressTrafficAllowed(int value) {
      this.value = value;
    }

    // @@protoc_insertion_point(enum_scope:google.appengine.v1.NetworkSettings.IngressTrafficAllowed)
  }

  public static final int INGRESS_TRAFFIC_ALLOWED_FIELD_NUMBER = 1;
  private int ingressTrafficAllowed_;
  /**
   * <pre>
   * The ingress settings for version or service.
   * </pre>
   *
   * <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
   * @return The enum numeric value on the wire for ingressTrafficAllowed.
   */
  @java.lang.Override public int getIngressTrafficAllowedValue() {
    return ingressTrafficAllowed_;
  }
  /**
   * <pre>
   * The ingress settings for version or service.
   * </pre>
   *
   * <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
   * @return The ingressTrafficAllowed.
   */
  @java.lang.Override public com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed getIngressTrafficAllowed() {
    @SuppressWarnings("deprecation")
    com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed result = com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed.valueOf(ingressTrafficAllowed_);
    return result == null ? com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed.UNRECOGNIZED : result;
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
    if (ingressTrafficAllowed_ != com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed.INGRESS_TRAFFIC_ALLOWED_UNSPECIFIED.getNumber()) {
      output.writeEnum(1, ingressTrafficAllowed_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (ingressTrafficAllowed_ != com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed.INGRESS_TRAFFIC_ALLOWED_UNSPECIFIED.getNumber()) {
      size += com.google.protobuf.CodedOutputStream
        .computeEnumSize(1, ingressTrafficAllowed_);
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
    if (!(obj instanceof com.google.appengine.v1.NetworkSettings)) {
      return super.equals(obj);
    }
    com.google.appengine.v1.NetworkSettings other = (com.google.appengine.v1.NetworkSettings) obj;

    if (ingressTrafficAllowed_ != other.ingressTrafficAllowed_) return false;
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
    hash = (37 * hash) + INGRESS_TRAFFIC_ALLOWED_FIELD_NUMBER;
    hash = (53 * hash) + ingressTrafficAllowed_;
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.appengine.v1.NetworkSettings parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.appengine.v1.NetworkSettings parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.appengine.v1.NetworkSettings parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.appengine.v1.NetworkSettings parseFrom(
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
  public static Builder newBuilder(com.google.appengine.v1.NetworkSettings prototype) {
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
   * A NetworkSettings resource is a container for ingress settings for a version
   * or service.
   * </pre>
   *
   * Protobuf type {@code google.appengine.v1.NetworkSettings}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.appengine.v1.NetworkSettings)
      com.google.appengine.v1.NetworkSettingsOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.appengine.v1.NetworkSettingsProto.internal_static_google_appengine_v1_NetworkSettings_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.appengine.v1.NetworkSettingsProto.internal_static_google_appengine_v1_NetworkSettings_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.appengine.v1.NetworkSettings.class, com.google.appengine.v1.NetworkSettings.Builder.class);
    }

    // Construct using com.google.appengine.v1.NetworkSettings.newBuilder()
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
      ingressTrafficAllowed_ = 0;

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.appengine.v1.NetworkSettingsProto.internal_static_google_appengine_v1_NetworkSettings_descriptor;
    }

    @java.lang.Override
    public com.google.appengine.v1.NetworkSettings getDefaultInstanceForType() {
      return com.google.appengine.v1.NetworkSettings.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.appengine.v1.NetworkSettings build() {
      com.google.appengine.v1.NetworkSettings result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.appengine.v1.NetworkSettings buildPartial() {
      com.google.appengine.v1.NetworkSettings result = new com.google.appengine.v1.NetworkSettings(this);
      result.ingressTrafficAllowed_ = ingressTrafficAllowed_;
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
      if (other instanceof com.google.appengine.v1.NetworkSettings) {
        return mergeFrom((com.google.appengine.v1.NetworkSettings)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.appengine.v1.NetworkSettings other) {
      if (other == com.google.appengine.v1.NetworkSettings.getDefaultInstance()) return this;
      if (other.ingressTrafficAllowed_ != 0) {
        setIngressTrafficAllowedValue(other.getIngressTrafficAllowedValue());
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
      com.google.appengine.v1.NetworkSettings parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.appengine.v1.NetworkSettings) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private int ingressTrafficAllowed_ = 0;
    /**
     * <pre>
     * The ingress settings for version or service.
     * </pre>
     *
     * <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
     * @return The enum numeric value on the wire for ingressTrafficAllowed.
     */
    @java.lang.Override public int getIngressTrafficAllowedValue() {
      return ingressTrafficAllowed_;
    }
    /**
     * <pre>
     * The ingress settings for version or service.
     * </pre>
     *
     * <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
     * @param value The enum numeric value on the wire for ingressTrafficAllowed to set.
     * @return This builder for chaining.
     */
    public Builder setIngressTrafficAllowedValue(int value) {
      
      ingressTrafficAllowed_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The ingress settings for version or service.
     * </pre>
     *
     * <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
     * @return The ingressTrafficAllowed.
     */
    @java.lang.Override
    public com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed getIngressTrafficAllowed() {
      @SuppressWarnings("deprecation")
      com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed result = com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed.valueOf(ingressTrafficAllowed_);
      return result == null ? com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed.UNRECOGNIZED : result;
    }
    /**
     * <pre>
     * The ingress settings for version or service.
     * </pre>
     *
     * <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
     * @param value The ingressTrafficAllowed to set.
     * @return This builder for chaining.
     */
    public Builder setIngressTrafficAllowed(com.google.appengine.v1.NetworkSettings.IngressTrafficAllowed value) {
      if (value == null) {
        throw new NullPointerException();
      }
      
      ingressTrafficAllowed_ = value.getNumber();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The ingress settings for version or service.
     * </pre>
     *
     * <code>.google.appengine.v1.NetworkSettings.IngressTrafficAllowed ingress_traffic_allowed = 1;</code>
     * @return This builder for chaining.
     */
    public Builder clearIngressTrafficAllowed() {
      
      ingressTrafficAllowed_ = 0;
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


    // @@protoc_insertion_point(builder_scope:google.appengine.v1.NetworkSettings)
  }

  // @@protoc_insertion_point(class_scope:google.appengine.v1.NetworkSettings)
  private static final com.google.appengine.v1.NetworkSettings DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.appengine.v1.NetworkSettings();
  }

  public static com.google.appengine.v1.NetworkSettings getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<NetworkSettings>
      PARSER = new com.google.protobuf.AbstractParser<NetworkSettings>() {
    @java.lang.Override
    public NetworkSettings parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new NetworkSettings(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<NetworkSettings> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<NetworkSettings> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.appengine.v1.NetworkSettings getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

