// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v5/errors/third_party_app_analytics_link_error.proto

package com.google.ads.googleads.v5.errors;

/**
 * <pre>
 * Container for enum describing possible third party app analytics link errors.
 * </pre>
 *
 * Protobuf type {@code google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum}
 */
public final class ThirdPartyAppAnalyticsLinkErrorEnum extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum)
    ThirdPartyAppAnalyticsLinkErrorEnumOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ThirdPartyAppAnalyticsLinkErrorEnum.newBuilder() to construct.
  private ThirdPartyAppAnalyticsLinkErrorEnum(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ThirdPartyAppAnalyticsLinkErrorEnum() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ThirdPartyAppAnalyticsLinkErrorEnum();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ThirdPartyAppAnalyticsLinkErrorEnum(
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
    return com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorProto.internal_static_google_ads_googleads_v5_errors_ThirdPartyAppAnalyticsLinkErrorEnum_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorProto.internal_static_google_ads_googleads_v5_errors_ThirdPartyAppAnalyticsLinkErrorEnum_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.class, com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.Builder.class);
  }

  /**
   * <pre>
   * Enum describing possible third party app analytics link errors.
   * </pre>
   *
   * Protobuf enum {@code google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.ThirdPartyAppAnalyticsLinkError}
   */
  public enum ThirdPartyAppAnalyticsLinkError
      implements com.google.protobuf.ProtocolMessageEnum {
    /**
     * <pre>
     * Enum unspecified.
     * </pre>
     *
     * <code>UNSPECIFIED = 0;</code>
     */
    UNSPECIFIED(0),
    /**
     * <pre>
     * The received error code is not known in this version.
     * </pre>
     *
     * <code>UNKNOWN = 1;</code>
     */
    UNKNOWN(1),
    /**
     * <pre>
     * The provided analytics provider ID is invalid.
     * </pre>
     *
     * <code>INVALID_ANALYTICS_PROVIDER_ID = 2;</code>
     */
    INVALID_ANALYTICS_PROVIDER_ID(2),
    /**
     * <pre>
     * The provided mobile app ID is invalid.
     * </pre>
     *
     * <code>INVALID_MOBILE_APP_ID = 3;</code>
     */
    INVALID_MOBILE_APP_ID(3),
    /**
     * <pre>
     * The mobile app corresponding to the provided app ID is not
     * active/enabled.
     * </pre>
     *
     * <code>MOBILE_APP_IS_NOT_ENABLED = 4;</code>
     */
    MOBILE_APP_IS_NOT_ENABLED(4),
    /**
     * <pre>
     * Regenerating shareable link ID is only allowed on active links
     * </pre>
     *
     * <code>CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINK = 5;</code>
     */
    CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINK(5),
    UNRECOGNIZED(-1),
    ;

    /**
     * <pre>
     * Enum unspecified.
     * </pre>
     *
     * <code>UNSPECIFIED = 0;</code>
     */
    public static final int UNSPECIFIED_VALUE = 0;
    /**
     * <pre>
     * The received error code is not known in this version.
     * </pre>
     *
     * <code>UNKNOWN = 1;</code>
     */
    public static final int UNKNOWN_VALUE = 1;
    /**
     * <pre>
     * The provided analytics provider ID is invalid.
     * </pre>
     *
     * <code>INVALID_ANALYTICS_PROVIDER_ID = 2;</code>
     */
    public static final int INVALID_ANALYTICS_PROVIDER_ID_VALUE = 2;
    /**
     * <pre>
     * The provided mobile app ID is invalid.
     * </pre>
     *
     * <code>INVALID_MOBILE_APP_ID = 3;</code>
     */
    public static final int INVALID_MOBILE_APP_ID_VALUE = 3;
    /**
     * <pre>
     * The mobile app corresponding to the provided app ID is not
     * active/enabled.
     * </pre>
     *
     * <code>MOBILE_APP_IS_NOT_ENABLED = 4;</code>
     */
    public static final int MOBILE_APP_IS_NOT_ENABLED_VALUE = 4;
    /**
     * <pre>
     * Regenerating shareable link ID is only allowed on active links
     * </pre>
     *
     * <code>CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINK = 5;</code>
     */
    public static final int CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINK_VALUE = 5;


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
    public static ThirdPartyAppAnalyticsLinkError valueOf(int value) {
      return forNumber(value);
    }

    /**
     * @param value The numeric wire value of the corresponding enum entry.
     * @return The enum associated with the given numeric wire value.
     */
    public static ThirdPartyAppAnalyticsLinkError forNumber(int value) {
      switch (value) {
        case 0: return UNSPECIFIED;
        case 1: return UNKNOWN;
        case 2: return INVALID_ANALYTICS_PROVIDER_ID;
        case 3: return INVALID_MOBILE_APP_ID;
        case 4: return MOBILE_APP_IS_NOT_ENABLED;
        case 5: return CANNOT_REGENERATE_SHAREABLE_LINK_ID_FOR_REMOVED_LINK;
        default: return null;
      }
    }

    public static com.google.protobuf.Internal.EnumLiteMap<ThirdPartyAppAnalyticsLinkError>
        internalGetValueMap() {
      return internalValueMap;
    }
    private static final com.google.protobuf.Internal.EnumLiteMap<
        ThirdPartyAppAnalyticsLinkError> internalValueMap =
          new com.google.protobuf.Internal.EnumLiteMap<ThirdPartyAppAnalyticsLinkError>() {
            public ThirdPartyAppAnalyticsLinkError findValueByNumber(int number) {
              return ThirdPartyAppAnalyticsLinkError.forNumber(number);
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
      return com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.getDescriptor().getEnumTypes().get(0);
    }

    private static final ThirdPartyAppAnalyticsLinkError[] VALUES = values();

    public static ThirdPartyAppAnalyticsLinkError valueOf(
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

    private ThirdPartyAppAnalyticsLinkError(int value) {
      this.value = value;
    }

    // @@protoc_insertion_point(enum_scope:google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.ThirdPartyAppAnalyticsLinkError)
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
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    size += unknownFields.getSerializedSize();
    memoizedSize = size;
    return size;
  }

  @java.lang.Override
  public boolean equals(final java.lang.Object obj) {
    if (obj == this) {
     return true;
    }
    if (!(obj instanceof com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum)) {
      return super.equals(obj);
    }
    com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum other = (com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum) obj;

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
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parseFrom(
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
  public static Builder newBuilder(com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum prototype) {
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
   * Container for enum describing possible third party app analytics link errors.
   * </pre>
   *
   * Protobuf type {@code google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum)
      com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnumOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorProto.internal_static_google_ads_googleads_v5_errors_ThirdPartyAppAnalyticsLinkErrorEnum_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorProto.internal_static_google_ads_googleads_v5_errors_ThirdPartyAppAnalyticsLinkErrorEnum_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.class, com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.Builder.class);
    }

    // Construct using com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.newBuilder()
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
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorProto.internal_static_google_ads_googleads_v5_errors_ThirdPartyAppAnalyticsLinkErrorEnum_descriptor;
    }

    @java.lang.Override
    public com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum getDefaultInstanceForType() {
      return com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum build() {
      com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum buildPartial() {
      com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum result = new com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum(this);
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
      if (other instanceof com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum) {
        return mergeFrom((com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum other) {
      if (other == com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum.getDefaultInstance()) return this;
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
      com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
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


    // @@protoc_insertion_point(builder_scope:google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum)
  }

  // @@protoc_insertion_point(class_scope:google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum)
  private static final com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum();
  }

  public static com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ThirdPartyAppAnalyticsLinkErrorEnum>
      PARSER = new com.google.protobuf.AbstractParser<ThirdPartyAppAnalyticsLinkErrorEnum>() {
    @java.lang.Override
    public ThirdPartyAppAnalyticsLinkErrorEnum parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ThirdPartyAppAnalyticsLinkErrorEnum(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ThirdPartyAppAnalyticsLinkErrorEnum> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ThirdPartyAppAnalyticsLinkErrorEnum> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.ads.googleads.v5.errors.ThirdPartyAppAnalyticsLinkErrorEnum getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

