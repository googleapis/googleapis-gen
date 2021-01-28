// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/container/v1beta1/cluster_service.proto

package com.google.container.v1beta1;

/**
 * <pre>
 * ListClustersResponse is the result of ListClustersRequest.
 * </pre>
 *
 * Protobuf type {@code google.container.v1beta1.ListClustersResponse}
 */
public final class ListClustersResponse extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.container.v1beta1.ListClustersResponse)
    ListClustersResponseOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ListClustersResponse.newBuilder() to construct.
  private ListClustersResponse(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ListClustersResponse() {
    clusters_ = java.util.Collections.emptyList();
    missingZones_ = com.google.protobuf.LazyStringArrayList.EMPTY;
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ListClustersResponse();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ListClustersResponse(
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
            if (!((mutable_bitField0_ & 0x00000001) != 0)) {
              clusters_ = new java.util.ArrayList<com.google.container.v1beta1.Cluster>();
              mutable_bitField0_ |= 0x00000001;
            }
            clusters_.add(
                input.readMessage(com.google.container.v1beta1.Cluster.parser(), extensionRegistry));
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();
            if (!((mutable_bitField0_ & 0x00000002) != 0)) {
              missingZones_ = new com.google.protobuf.LazyStringArrayList();
              mutable_bitField0_ |= 0x00000002;
            }
            missingZones_.add(s);
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
        clusters_ = java.util.Collections.unmodifiableList(clusters_);
      }
      if (((mutable_bitField0_ & 0x00000002) != 0)) {
        missingZones_ = missingZones_.getUnmodifiableView();
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.container.v1beta1.ClusterServiceProto.internal_static_google_container_v1beta1_ListClustersResponse_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.container.v1beta1.ClusterServiceProto.internal_static_google_container_v1beta1_ListClustersResponse_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.container.v1beta1.ListClustersResponse.class, com.google.container.v1beta1.ListClustersResponse.Builder.class);
  }

  public static final int CLUSTERS_FIELD_NUMBER = 1;
  private java.util.List<com.google.container.v1beta1.Cluster> clusters_;
  /**
   * <pre>
   * A list of clusters in the project in the specified zone, or
   * across all ones.
   * </pre>
   *
   * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
   */
  @java.lang.Override
  public java.util.List<com.google.container.v1beta1.Cluster> getClustersList() {
    return clusters_;
  }
  /**
   * <pre>
   * A list of clusters in the project in the specified zone, or
   * across all ones.
   * </pre>
   *
   * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.container.v1beta1.ClusterOrBuilder> 
      getClustersOrBuilderList() {
    return clusters_;
  }
  /**
   * <pre>
   * A list of clusters in the project in the specified zone, or
   * across all ones.
   * </pre>
   *
   * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
   */
  @java.lang.Override
  public int getClustersCount() {
    return clusters_.size();
  }
  /**
   * <pre>
   * A list of clusters in the project in the specified zone, or
   * across all ones.
   * </pre>
   *
   * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
   */
  @java.lang.Override
  public com.google.container.v1beta1.Cluster getClusters(int index) {
    return clusters_.get(index);
  }
  /**
   * <pre>
   * A list of clusters in the project in the specified zone, or
   * across all ones.
   * </pre>
   *
   * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
   */
  @java.lang.Override
  public com.google.container.v1beta1.ClusterOrBuilder getClustersOrBuilder(
      int index) {
    return clusters_.get(index);
  }

  public static final int MISSING_ZONES_FIELD_NUMBER = 2;
  private com.google.protobuf.LazyStringList missingZones_;
  /**
   * <pre>
   * If any zones are listed here, the list of clusters returned
   * may be missing those zones.
   * </pre>
   *
   * <code>repeated string missing_zones = 2;</code>
   * @return A list containing the missingZones.
   */
  public com.google.protobuf.ProtocolStringList
      getMissingZonesList() {
    return missingZones_;
  }
  /**
   * <pre>
   * If any zones are listed here, the list of clusters returned
   * may be missing those zones.
   * </pre>
   *
   * <code>repeated string missing_zones = 2;</code>
   * @return The count of missingZones.
   */
  public int getMissingZonesCount() {
    return missingZones_.size();
  }
  /**
   * <pre>
   * If any zones are listed here, the list of clusters returned
   * may be missing those zones.
   * </pre>
   *
   * <code>repeated string missing_zones = 2;</code>
   * @param index The index of the element to return.
   * @return The missingZones at the given index.
   */
  public java.lang.String getMissingZones(int index) {
    return missingZones_.get(index);
  }
  /**
   * <pre>
   * If any zones are listed here, the list of clusters returned
   * may be missing those zones.
   * </pre>
   *
   * <code>repeated string missing_zones = 2;</code>
   * @param index The index of the value to return.
   * @return The bytes of the missingZones at the given index.
   */
  public com.google.protobuf.ByteString
      getMissingZonesBytes(int index) {
    return missingZones_.getByteString(index);
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
    for (int i = 0; i < clusters_.size(); i++) {
      output.writeMessage(1, clusters_.get(i));
    }
    for (int i = 0; i < missingZones_.size(); i++) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, missingZones_.getRaw(i));
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    for (int i = 0; i < clusters_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, clusters_.get(i));
    }
    {
      int dataSize = 0;
      for (int i = 0; i < missingZones_.size(); i++) {
        dataSize += computeStringSizeNoTag(missingZones_.getRaw(i));
      }
      size += dataSize;
      size += 1 * getMissingZonesList().size();
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
    if (!(obj instanceof com.google.container.v1beta1.ListClustersResponse)) {
      return super.equals(obj);
    }
    com.google.container.v1beta1.ListClustersResponse other = (com.google.container.v1beta1.ListClustersResponse) obj;

    if (!getClustersList()
        .equals(other.getClustersList())) return false;
    if (!getMissingZonesList()
        .equals(other.getMissingZonesList())) return false;
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
    if (getClustersCount() > 0) {
      hash = (37 * hash) + CLUSTERS_FIELD_NUMBER;
      hash = (53 * hash) + getClustersList().hashCode();
    }
    if (getMissingZonesCount() > 0) {
      hash = (37 * hash) + MISSING_ZONES_FIELD_NUMBER;
      hash = (53 * hash) + getMissingZonesList().hashCode();
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.container.v1beta1.ListClustersResponse parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.container.v1beta1.ListClustersResponse parseFrom(
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
  public static Builder newBuilder(com.google.container.v1beta1.ListClustersResponse prototype) {
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
   * ListClustersResponse is the result of ListClustersRequest.
   * </pre>
   *
   * Protobuf type {@code google.container.v1beta1.ListClustersResponse}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.container.v1beta1.ListClustersResponse)
      com.google.container.v1beta1.ListClustersResponseOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.container.v1beta1.ClusterServiceProto.internal_static_google_container_v1beta1_ListClustersResponse_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.container.v1beta1.ClusterServiceProto.internal_static_google_container_v1beta1_ListClustersResponse_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.container.v1beta1.ListClustersResponse.class, com.google.container.v1beta1.ListClustersResponse.Builder.class);
    }

    // Construct using com.google.container.v1beta1.ListClustersResponse.newBuilder()
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
        getClustersFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (clustersBuilder_ == null) {
        clusters_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        clustersBuilder_.clear();
      }
      missingZones_ = com.google.protobuf.LazyStringArrayList.EMPTY;
      bitField0_ = (bitField0_ & ~0x00000002);
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.container.v1beta1.ClusterServiceProto.internal_static_google_container_v1beta1_ListClustersResponse_descriptor;
    }

    @java.lang.Override
    public com.google.container.v1beta1.ListClustersResponse getDefaultInstanceForType() {
      return com.google.container.v1beta1.ListClustersResponse.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.container.v1beta1.ListClustersResponse build() {
      com.google.container.v1beta1.ListClustersResponse result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.container.v1beta1.ListClustersResponse buildPartial() {
      com.google.container.v1beta1.ListClustersResponse result = new com.google.container.v1beta1.ListClustersResponse(this);
      int from_bitField0_ = bitField0_;
      if (clustersBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          clusters_ = java.util.Collections.unmodifiableList(clusters_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.clusters_ = clusters_;
      } else {
        result.clusters_ = clustersBuilder_.build();
      }
      if (((bitField0_ & 0x00000002) != 0)) {
        missingZones_ = missingZones_.getUnmodifiableView();
        bitField0_ = (bitField0_ & ~0x00000002);
      }
      result.missingZones_ = missingZones_;
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
      if (other instanceof com.google.container.v1beta1.ListClustersResponse) {
        return mergeFrom((com.google.container.v1beta1.ListClustersResponse)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.container.v1beta1.ListClustersResponse other) {
      if (other == com.google.container.v1beta1.ListClustersResponse.getDefaultInstance()) return this;
      if (clustersBuilder_ == null) {
        if (!other.clusters_.isEmpty()) {
          if (clusters_.isEmpty()) {
            clusters_ = other.clusters_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureClustersIsMutable();
            clusters_.addAll(other.clusters_);
          }
          onChanged();
        }
      } else {
        if (!other.clusters_.isEmpty()) {
          if (clustersBuilder_.isEmpty()) {
            clustersBuilder_.dispose();
            clustersBuilder_ = null;
            clusters_ = other.clusters_;
            bitField0_ = (bitField0_ & ~0x00000001);
            clustersBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getClustersFieldBuilder() : null;
          } else {
            clustersBuilder_.addAllMessages(other.clusters_);
          }
        }
      }
      if (!other.missingZones_.isEmpty()) {
        if (missingZones_.isEmpty()) {
          missingZones_ = other.missingZones_;
          bitField0_ = (bitField0_ & ~0x00000002);
        } else {
          ensureMissingZonesIsMutable();
          missingZones_.addAll(other.missingZones_);
        }
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
      com.google.container.v1beta1.ListClustersResponse parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.container.v1beta1.ListClustersResponse) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.container.v1beta1.Cluster> clusters_ =
      java.util.Collections.emptyList();
    private void ensureClustersIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        clusters_ = new java.util.ArrayList<com.google.container.v1beta1.Cluster>(clusters_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.container.v1beta1.Cluster, com.google.container.v1beta1.Cluster.Builder, com.google.container.v1beta1.ClusterOrBuilder> clustersBuilder_;

    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public java.util.List<com.google.container.v1beta1.Cluster> getClustersList() {
      if (clustersBuilder_ == null) {
        return java.util.Collections.unmodifiableList(clusters_);
      } else {
        return clustersBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public int getClustersCount() {
      if (clustersBuilder_ == null) {
        return clusters_.size();
      } else {
        return clustersBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public com.google.container.v1beta1.Cluster getClusters(int index) {
      if (clustersBuilder_ == null) {
        return clusters_.get(index);
      } else {
        return clustersBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder setClusters(
        int index, com.google.container.v1beta1.Cluster value) {
      if (clustersBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureClustersIsMutable();
        clusters_.set(index, value);
        onChanged();
      } else {
        clustersBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder setClusters(
        int index, com.google.container.v1beta1.Cluster.Builder builderForValue) {
      if (clustersBuilder_ == null) {
        ensureClustersIsMutable();
        clusters_.set(index, builderForValue.build());
        onChanged();
      } else {
        clustersBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder addClusters(com.google.container.v1beta1.Cluster value) {
      if (clustersBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureClustersIsMutable();
        clusters_.add(value);
        onChanged();
      } else {
        clustersBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder addClusters(
        int index, com.google.container.v1beta1.Cluster value) {
      if (clustersBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureClustersIsMutable();
        clusters_.add(index, value);
        onChanged();
      } else {
        clustersBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder addClusters(
        com.google.container.v1beta1.Cluster.Builder builderForValue) {
      if (clustersBuilder_ == null) {
        ensureClustersIsMutable();
        clusters_.add(builderForValue.build());
        onChanged();
      } else {
        clustersBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder addClusters(
        int index, com.google.container.v1beta1.Cluster.Builder builderForValue) {
      if (clustersBuilder_ == null) {
        ensureClustersIsMutable();
        clusters_.add(index, builderForValue.build());
        onChanged();
      } else {
        clustersBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder addAllClusters(
        java.lang.Iterable<? extends com.google.container.v1beta1.Cluster> values) {
      if (clustersBuilder_ == null) {
        ensureClustersIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, clusters_);
        onChanged();
      } else {
        clustersBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder clearClusters() {
      if (clustersBuilder_ == null) {
        clusters_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        clustersBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public Builder removeClusters(int index) {
      if (clustersBuilder_ == null) {
        ensureClustersIsMutable();
        clusters_.remove(index);
        onChanged();
      } else {
        clustersBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public com.google.container.v1beta1.Cluster.Builder getClustersBuilder(
        int index) {
      return getClustersFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public com.google.container.v1beta1.ClusterOrBuilder getClustersOrBuilder(
        int index) {
      if (clustersBuilder_ == null) {
        return clusters_.get(index);  } else {
        return clustersBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public java.util.List<? extends com.google.container.v1beta1.ClusterOrBuilder> 
         getClustersOrBuilderList() {
      if (clustersBuilder_ != null) {
        return clustersBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(clusters_);
      }
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public com.google.container.v1beta1.Cluster.Builder addClustersBuilder() {
      return getClustersFieldBuilder().addBuilder(
          com.google.container.v1beta1.Cluster.getDefaultInstance());
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public com.google.container.v1beta1.Cluster.Builder addClustersBuilder(
        int index) {
      return getClustersFieldBuilder().addBuilder(
          index, com.google.container.v1beta1.Cluster.getDefaultInstance());
    }
    /**
     * <pre>
     * A list of clusters in the project in the specified zone, or
     * across all ones.
     * </pre>
     *
     * <code>repeated .google.container.v1beta1.Cluster clusters = 1;</code>
     */
    public java.util.List<com.google.container.v1beta1.Cluster.Builder> 
         getClustersBuilderList() {
      return getClustersFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.container.v1beta1.Cluster, com.google.container.v1beta1.Cluster.Builder, com.google.container.v1beta1.ClusterOrBuilder> 
        getClustersFieldBuilder() {
      if (clustersBuilder_ == null) {
        clustersBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.container.v1beta1.Cluster, com.google.container.v1beta1.Cluster.Builder, com.google.container.v1beta1.ClusterOrBuilder>(
                clusters_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        clusters_ = null;
      }
      return clustersBuilder_;
    }

    private com.google.protobuf.LazyStringList missingZones_ = com.google.protobuf.LazyStringArrayList.EMPTY;
    private void ensureMissingZonesIsMutable() {
      if (!((bitField0_ & 0x00000002) != 0)) {
        missingZones_ = new com.google.protobuf.LazyStringArrayList(missingZones_);
        bitField0_ |= 0x00000002;
       }
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @return A list containing the missingZones.
     */
    public com.google.protobuf.ProtocolStringList
        getMissingZonesList() {
      return missingZones_.getUnmodifiableView();
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @return The count of missingZones.
     */
    public int getMissingZonesCount() {
      return missingZones_.size();
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @param index The index of the element to return.
     * @return The missingZones at the given index.
     */
    public java.lang.String getMissingZones(int index) {
      return missingZones_.get(index);
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @param index The index of the value to return.
     * @return The bytes of the missingZones at the given index.
     */
    public com.google.protobuf.ByteString
        getMissingZonesBytes(int index) {
      return missingZones_.getByteString(index);
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @param index The index to set the value at.
     * @param value The missingZones to set.
     * @return This builder for chaining.
     */
    public Builder setMissingZones(
        int index, java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  ensureMissingZonesIsMutable();
      missingZones_.set(index, value);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @param value The missingZones to add.
     * @return This builder for chaining.
     */
    public Builder addMissingZones(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  ensureMissingZonesIsMutable();
      missingZones_.add(value);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @param values The missingZones to add.
     * @return This builder for chaining.
     */
    public Builder addAllMissingZones(
        java.lang.Iterable<java.lang.String> values) {
      ensureMissingZonesIsMutable();
      com.google.protobuf.AbstractMessageLite.Builder.addAll(
          values, missingZones_);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearMissingZones() {
      missingZones_ = com.google.protobuf.LazyStringArrayList.EMPTY;
      bitField0_ = (bitField0_ & ~0x00000002);
      onChanged();
      return this;
    }
    /**
     * <pre>
     * If any zones are listed here, the list of clusters returned
     * may be missing those zones.
     * </pre>
     *
     * <code>repeated string missing_zones = 2;</code>
     * @param value The bytes of the missingZones to add.
     * @return This builder for chaining.
     */
    public Builder addMissingZonesBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      ensureMissingZonesIsMutable();
      missingZones_.add(value);
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


    // @@protoc_insertion_point(builder_scope:google.container.v1beta1.ListClustersResponse)
  }

  // @@protoc_insertion_point(class_scope:google.container.v1beta1.ListClustersResponse)
  private static final com.google.container.v1beta1.ListClustersResponse DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.container.v1beta1.ListClustersResponse();
  }

  public static com.google.container.v1beta1.ListClustersResponse getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ListClustersResponse>
      PARSER = new com.google.protobuf.AbstractParser<ListClustersResponse>() {
    @java.lang.Override
    public ListClustersResponse parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ListClustersResponse(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ListClustersResponse> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ListClustersResponse> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.container.v1beta1.ListClustersResponse getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

