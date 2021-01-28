// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/maps/playablelocations/v3/sample/resources.proto

package com.google.maps.playablelocations.v3.sample;

/**
 * <pre>
 * Specifies the area to search for playable locations.
 * </pre>
 *
 * Protobuf type {@code google.maps.playablelocations.v3.sample.AreaFilter}
 */
public final class AreaFilter extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.maps.playablelocations.v3.sample.AreaFilter)
    AreaFilterOrBuilder {
private static final long serialVersionUID = 0L;
  // Use AreaFilter.newBuilder() to construct.
  private AreaFilter(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private AreaFilter() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new AreaFilter();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private AreaFilter(
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
          case 9: {

            s2CellId_ = input.readFixed64();
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
    return com.google.maps.playablelocations.v3.sample.ResourcesProto.internal_static_google_maps_playablelocations_v3_sample_AreaFilter_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.maps.playablelocations.v3.sample.ResourcesProto.internal_static_google_maps_playablelocations_v3_sample_AreaFilter_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.maps.playablelocations.v3.sample.AreaFilter.class, com.google.maps.playablelocations.v3.sample.AreaFilter.Builder.class);
  }

  public static final int S2_CELL_ID_FIELD_NUMBER = 1;
  private long s2CellId_;
  /**
   * <pre>
   * Required. The S2 cell ID of the area you want. This must be between cell
   * level 11 and 14 (inclusive).
   * S2 cells are 64-bit integers that identify areas on the Earth. They are
   * hierarchical, and can therefore be used for spatial indexing.
   * The S2 geometry library is available in a number of languages:
   *   * [C++](https://github.com/google/s2geometry)
   *   * [Java](https://github.com/google/s2-geometry-library-java)
   *   * [Go](https://github.com/golang/geo)
   *   * [Python](https://github.com/google/s2geometry/tree/master/src/python)
   * </pre>
   *
   * <code>fixed64 s2_cell_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The s2CellId.
   */
  @java.lang.Override
  public long getS2CellId() {
    return s2CellId_;
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
    if (s2CellId_ != 0L) {
      output.writeFixed64(1, s2CellId_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (s2CellId_ != 0L) {
      size += com.google.protobuf.CodedOutputStream
        .computeFixed64Size(1, s2CellId_);
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
    if (!(obj instanceof com.google.maps.playablelocations.v3.sample.AreaFilter)) {
      return super.equals(obj);
    }
    com.google.maps.playablelocations.v3.sample.AreaFilter other = (com.google.maps.playablelocations.v3.sample.AreaFilter) obj;

    if (getS2CellId()
        != other.getS2CellId()) return false;
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
    hash = (37 * hash) + S2_CELL_ID_FIELD_NUMBER;
    hash = (53 * hash) + com.google.protobuf.Internal.hashLong(
        getS2CellId());
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.maps.playablelocations.v3.sample.AreaFilter parseFrom(
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
  public static Builder newBuilder(com.google.maps.playablelocations.v3.sample.AreaFilter prototype) {
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
   * Specifies the area to search for playable locations.
   * </pre>
   *
   * Protobuf type {@code google.maps.playablelocations.v3.sample.AreaFilter}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.maps.playablelocations.v3.sample.AreaFilter)
      com.google.maps.playablelocations.v3.sample.AreaFilterOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.maps.playablelocations.v3.sample.ResourcesProto.internal_static_google_maps_playablelocations_v3_sample_AreaFilter_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.maps.playablelocations.v3.sample.ResourcesProto.internal_static_google_maps_playablelocations_v3_sample_AreaFilter_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.maps.playablelocations.v3.sample.AreaFilter.class, com.google.maps.playablelocations.v3.sample.AreaFilter.Builder.class);
    }

    // Construct using com.google.maps.playablelocations.v3.sample.AreaFilter.newBuilder()
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
      s2CellId_ = 0L;

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.maps.playablelocations.v3.sample.ResourcesProto.internal_static_google_maps_playablelocations_v3_sample_AreaFilter_descriptor;
    }

    @java.lang.Override
    public com.google.maps.playablelocations.v3.sample.AreaFilter getDefaultInstanceForType() {
      return com.google.maps.playablelocations.v3.sample.AreaFilter.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.maps.playablelocations.v3.sample.AreaFilter build() {
      com.google.maps.playablelocations.v3.sample.AreaFilter result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.maps.playablelocations.v3.sample.AreaFilter buildPartial() {
      com.google.maps.playablelocations.v3.sample.AreaFilter result = new com.google.maps.playablelocations.v3.sample.AreaFilter(this);
      result.s2CellId_ = s2CellId_;
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
      if (other instanceof com.google.maps.playablelocations.v3.sample.AreaFilter) {
        return mergeFrom((com.google.maps.playablelocations.v3.sample.AreaFilter)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.maps.playablelocations.v3.sample.AreaFilter other) {
      if (other == com.google.maps.playablelocations.v3.sample.AreaFilter.getDefaultInstance()) return this;
      if (other.getS2CellId() != 0L) {
        setS2CellId(other.getS2CellId());
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
      com.google.maps.playablelocations.v3.sample.AreaFilter parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.maps.playablelocations.v3.sample.AreaFilter) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }

    private long s2CellId_ ;
    /**
     * <pre>
     * Required. The S2 cell ID of the area you want. This must be between cell
     * level 11 and 14 (inclusive).
     * S2 cells are 64-bit integers that identify areas on the Earth. They are
     * hierarchical, and can therefore be used for spatial indexing.
     * The S2 geometry library is available in a number of languages:
     *   * [C++](https://github.com/google/s2geometry)
     *   * [Java](https://github.com/google/s2-geometry-library-java)
     *   * [Go](https://github.com/golang/geo)
     *   * [Python](https://github.com/google/s2geometry/tree/master/src/python)
     * </pre>
     *
     * <code>fixed64 s2_cell_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return The s2CellId.
     */
    @java.lang.Override
    public long getS2CellId() {
      return s2CellId_;
    }
    /**
     * <pre>
     * Required. The S2 cell ID of the area you want. This must be between cell
     * level 11 and 14 (inclusive).
     * S2 cells are 64-bit integers that identify areas on the Earth. They are
     * hierarchical, and can therefore be used for spatial indexing.
     * The S2 geometry library is available in a number of languages:
     *   * [C++](https://github.com/google/s2geometry)
     *   * [Java](https://github.com/google/s2-geometry-library-java)
     *   * [Go](https://github.com/golang/geo)
     *   * [Python](https://github.com/google/s2geometry/tree/master/src/python)
     * </pre>
     *
     * <code>fixed64 s2_cell_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param value The s2CellId to set.
     * @return This builder for chaining.
     */
    public Builder setS2CellId(long value) {
      
      s2CellId_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Required. The S2 cell ID of the area you want. This must be between cell
     * level 11 and 14 (inclusive).
     * S2 cells are 64-bit integers that identify areas on the Earth. They are
     * hierarchical, and can therefore be used for spatial indexing.
     * The S2 geometry library is available in a number of languages:
     *   * [C++](https://github.com/google/s2geometry)
     *   * [Java](https://github.com/google/s2-geometry-library-java)
     *   * [Go](https://github.com/golang/geo)
     *   * [Python](https://github.com/google/s2geometry/tree/master/src/python)
     * </pre>
     *
     * <code>fixed64 s2_cell_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return This builder for chaining.
     */
    public Builder clearS2CellId() {
      
      s2CellId_ = 0L;
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


    // @@protoc_insertion_point(builder_scope:google.maps.playablelocations.v3.sample.AreaFilter)
  }

  // @@protoc_insertion_point(class_scope:google.maps.playablelocations.v3.sample.AreaFilter)
  private static final com.google.maps.playablelocations.v3.sample.AreaFilter DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.maps.playablelocations.v3.sample.AreaFilter();
  }

  public static com.google.maps.playablelocations.v3.sample.AreaFilter getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<AreaFilter>
      PARSER = new com.google.protobuf.AbstractParser<AreaFilter>() {
    @java.lang.Override
    public AreaFilter parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new AreaFilter(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<AreaFilter> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<AreaFilter> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.maps.playablelocations.v3.sample.AreaFilter getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

