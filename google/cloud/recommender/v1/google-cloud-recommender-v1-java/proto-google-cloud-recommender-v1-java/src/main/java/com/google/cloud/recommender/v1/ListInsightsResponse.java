// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/recommender/v1/recommender_service.proto

package com.google.cloud.recommender.v1;

/**
 * <pre>
 * Response to the `ListInsights` method.
 * </pre>
 *
 * Protobuf type {@code google.cloud.recommender.v1.ListInsightsResponse}
 */
public final class ListInsightsResponse extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.recommender.v1.ListInsightsResponse)
    ListInsightsResponseOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ListInsightsResponse.newBuilder() to construct.
  private ListInsightsResponse(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ListInsightsResponse() {
    insights_ = java.util.Collections.emptyList();
    nextPageToken_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ListInsightsResponse();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ListInsightsResponse(
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
              insights_ = new java.util.ArrayList<com.google.cloud.recommender.v1.Insight>();
              mutable_bitField0_ |= 0x00000001;
            }
            insights_.add(
                input.readMessage(com.google.cloud.recommender.v1.Insight.parser(), extensionRegistry));
            break;
          }
          case 18: {
            java.lang.String s = input.readStringRequireUtf8();

            nextPageToken_ = s;
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
        insights_ = java.util.Collections.unmodifiableList(insights_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.cloud.recommender.v1.RecommenderProto.internal_static_google_cloud_recommender_v1_ListInsightsResponse_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.recommender.v1.RecommenderProto.internal_static_google_cloud_recommender_v1_ListInsightsResponse_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.recommender.v1.ListInsightsResponse.class, com.google.cloud.recommender.v1.ListInsightsResponse.Builder.class);
  }

  public static final int INSIGHTS_FIELD_NUMBER = 1;
  private java.util.List<com.google.cloud.recommender.v1.Insight> insights_;
  /**
   * <pre>
   * The set of insights for the `parent` resource.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
   */
  @java.lang.Override
  public java.util.List<com.google.cloud.recommender.v1.Insight> getInsightsList() {
    return insights_;
  }
  /**
   * <pre>
   * The set of insights for the `parent` resource.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.cloud.recommender.v1.InsightOrBuilder> 
      getInsightsOrBuilderList() {
    return insights_;
  }
  /**
   * <pre>
   * The set of insights for the `parent` resource.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
   */
  @java.lang.Override
  public int getInsightsCount() {
    return insights_.size();
  }
  /**
   * <pre>
   * The set of insights for the `parent` resource.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
   */
  @java.lang.Override
  public com.google.cloud.recommender.v1.Insight getInsights(int index) {
    return insights_.get(index);
  }
  /**
   * <pre>
   * The set of insights for the `parent` resource.
   * </pre>
   *
   * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
   */
  @java.lang.Override
  public com.google.cloud.recommender.v1.InsightOrBuilder getInsightsOrBuilder(
      int index) {
    return insights_.get(index);
  }

  public static final int NEXT_PAGE_TOKEN_FIELD_NUMBER = 2;
  private volatile java.lang.Object nextPageToken_;
  /**
   * <pre>
   * A token that can be used to request the next page of results. This field is
   * empty if there are no additional results.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The nextPageToken.
   */
  @java.lang.Override
  public java.lang.String getNextPageToken() {
    java.lang.Object ref = nextPageToken_;
    if (ref instanceof java.lang.String) {
      return (java.lang.String) ref;
    } else {
      com.google.protobuf.ByteString bs = 
          (com.google.protobuf.ByteString) ref;
      java.lang.String s = bs.toStringUtf8();
      nextPageToken_ = s;
      return s;
    }
  }
  /**
   * <pre>
   * A token that can be used to request the next page of results. This field is
   * empty if there are no additional results.
   * </pre>
   *
   * <code>string next_page_token = 2;</code>
   * @return The bytes for nextPageToken.
   */
  @java.lang.Override
  public com.google.protobuf.ByteString
      getNextPageTokenBytes() {
    java.lang.Object ref = nextPageToken_;
    if (ref instanceof java.lang.String) {
      com.google.protobuf.ByteString b = 
          com.google.protobuf.ByteString.copyFromUtf8(
              (java.lang.String) ref);
      nextPageToken_ = b;
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
    for (int i = 0; i < insights_.size(); i++) {
      output.writeMessage(1, insights_.get(i));
    }
    if (!getNextPageTokenBytes().isEmpty()) {
      com.google.protobuf.GeneratedMessageV3.writeString(output, 2, nextPageToken_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    for (int i = 0; i < insights_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, insights_.get(i));
    }
    if (!getNextPageTokenBytes().isEmpty()) {
      size += com.google.protobuf.GeneratedMessageV3.computeStringSize(2, nextPageToken_);
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
    if (!(obj instanceof com.google.cloud.recommender.v1.ListInsightsResponse)) {
      return super.equals(obj);
    }
    com.google.cloud.recommender.v1.ListInsightsResponse other = (com.google.cloud.recommender.v1.ListInsightsResponse) obj;

    if (!getInsightsList()
        .equals(other.getInsightsList())) return false;
    if (!getNextPageToken()
        .equals(other.getNextPageToken())) return false;
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
    if (getInsightsCount() > 0) {
      hash = (37 * hash) + INSIGHTS_FIELD_NUMBER;
      hash = (53 * hash) + getInsightsList().hashCode();
    }
    hash = (37 * hash) + NEXT_PAGE_TOKEN_FIELD_NUMBER;
    hash = (53 * hash) + getNextPageToken().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.recommender.v1.ListInsightsResponse parseFrom(
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
  public static Builder newBuilder(com.google.cloud.recommender.v1.ListInsightsResponse prototype) {
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
   * Response to the `ListInsights` method.
   * </pre>
   *
   * Protobuf type {@code google.cloud.recommender.v1.ListInsightsResponse}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.recommender.v1.ListInsightsResponse)
      com.google.cloud.recommender.v1.ListInsightsResponseOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.recommender.v1.RecommenderProto.internal_static_google_cloud_recommender_v1_ListInsightsResponse_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.recommender.v1.RecommenderProto.internal_static_google_cloud_recommender_v1_ListInsightsResponse_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.recommender.v1.ListInsightsResponse.class, com.google.cloud.recommender.v1.ListInsightsResponse.Builder.class);
    }

    // Construct using com.google.cloud.recommender.v1.ListInsightsResponse.newBuilder()
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
        getInsightsFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (insightsBuilder_ == null) {
        insights_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        insightsBuilder_.clear();
      }
      nextPageToken_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.recommender.v1.RecommenderProto.internal_static_google_cloud_recommender_v1_ListInsightsResponse_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.recommender.v1.ListInsightsResponse getDefaultInstanceForType() {
      return com.google.cloud.recommender.v1.ListInsightsResponse.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.recommender.v1.ListInsightsResponse build() {
      com.google.cloud.recommender.v1.ListInsightsResponse result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.recommender.v1.ListInsightsResponse buildPartial() {
      com.google.cloud.recommender.v1.ListInsightsResponse result = new com.google.cloud.recommender.v1.ListInsightsResponse(this);
      int from_bitField0_ = bitField0_;
      if (insightsBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          insights_ = java.util.Collections.unmodifiableList(insights_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.insights_ = insights_;
      } else {
        result.insights_ = insightsBuilder_.build();
      }
      result.nextPageToken_ = nextPageToken_;
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
      if (other instanceof com.google.cloud.recommender.v1.ListInsightsResponse) {
        return mergeFrom((com.google.cloud.recommender.v1.ListInsightsResponse)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.recommender.v1.ListInsightsResponse other) {
      if (other == com.google.cloud.recommender.v1.ListInsightsResponse.getDefaultInstance()) return this;
      if (insightsBuilder_ == null) {
        if (!other.insights_.isEmpty()) {
          if (insights_.isEmpty()) {
            insights_ = other.insights_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureInsightsIsMutable();
            insights_.addAll(other.insights_);
          }
          onChanged();
        }
      } else {
        if (!other.insights_.isEmpty()) {
          if (insightsBuilder_.isEmpty()) {
            insightsBuilder_.dispose();
            insightsBuilder_ = null;
            insights_ = other.insights_;
            bitField0_ = (bitField0_ & ~0x00000001);
            insightsBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getInsightsFieldBuilder() : null;
          } else {
            insightsBuilder_.addAllMessages(other.insights_);
          }
        }
      }
      if (!other.getNextPageToken().isEmpty()) {
        nextPageToken_ = other.nextPageToken_;
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
      com.google.cloud.recommender.v1.ListInsightsResponse parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.recommender.v1.ListInsightsResponse) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.cloud.recommender.v1.Insight> insights_ =
      java.util.Collections.emptyList();
    private void ensureInsightsIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        insights_ = new java.util.ArrayList<com.google.cloud.recommender.v1.Insight>(insights_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.recommender.v1.Insight, com.google.cloud.recommender.v1.Insight.Builder, com.google.cloud.recommender.v1.InsightOrBuilder> insightsBuilder_;

    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public java.util.List<com.google.cloud.recommender.v1.Insight> getInsightsList() {
      if (insightsBuilder_ == null) {
        return java.util.Collections.unmodifiableList(insights_);
      } else {
        return insightsBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public int getInsightsCount() {
      if (insightsBuilder_ == null) {
        return insights_.size();
      } else {
        return insightsBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public com.google.cloud.recommender.v1.Insight getInsights(int index) {
      if (insightsBuilder_ == null) {
        return insights_.get(index);
      } else {
        return insightsBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder setInsights(
        int index, com.google.cloud.recommender.v1.Insight value) {
      if (insightsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureInsightsIsMutable();
        insights_.set(index, value);
        onChanged();
      } else {
        insightsBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder setInsights(
        int index, com.google.cloud.recommender.v1.Insight.Builder builderForValue) {
      if (insightsBuilder_ == null) {
        ensureInsightsIsMutable();
        insights_.set(index, builderForValue.build());
        onChanged();
      } else {
        insightsBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder addInsights(com.google.cloud.recommender.v1.Insight value) {
      if (insightsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureInsightsIsMutable();
        insights_.add(value);
        onChanged();
      } else {
        insightsBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder addInsights(
        int index, com.google.cloud.recommender.v1.Insight value) {
      if (insightsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureInsightsIsMutable();
        insights_.add(index, value);
        onChanged();
      } else {
        insightsBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder addInsights(
        com.google.cloud.recommender.v1.Insight.Builder builderForValue) {
      if (insightsBuilder_ == null) {
        ensureInsightsIsMutable();
        insights_.add(builderForValue.build());
        onChanged();
      } else {
        insightsBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder addInsights(
        int index, com.google.cloud.recommender.v1.Insight.Builder builderForValue) {
      if (insightsBuilder_ == null) {
        ensureInsightsIsMutable();
        insights_.add(index, builderForValue.build());
        onChanged();
      } else {
        insightsBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder addAllInsights(
        java.lang.Iterable<? extends com.google.cloud.recommender.v1.Insight> values) {
      if (insightsBuilder_ == null) {
        ensureInsightsIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, insights_);
        onChanged();
      } else {
        insightsBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder clearInsights() {
      if (insightsBuilder_ == null) {
        insights_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        insightsBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public Builder removeInsights(int index) {
      if (insightsBuilder_ == null) {
        ensureInsightsIsMutable();
        insights_.remove(index);
        onChanged();
      } else {
        insightsBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public com.google.cloud.recommender.v1.Insight.Builder getInsightsBuilder(
        int index) {
      return getInsightsFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public com.google.cloud.recommender.v1.InsightOrBuilder getInsightsOrBuilder(
        int index) {
      if (insightsBuilder_ == null) {
        return insights_.get(index);  } else {
        return insightsBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public java.util.List<? extends com.google.cloud.recommender.v1.InsightOrBuilder> 
         getInsightsOrBuilderList() {
      if (insightsBuilder_ != null) {
        return insightsBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(insights_);
      }
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public com.google.cloud.recommender.v1.Insight.Builder addInsightsBuilder() {
      return getInsightsFieldBuilder().addBuilder(
          com.google.cloud.recommender.v1.Insight.getDefaultInstance());
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public com.google.cloud.recommender.v1.Insight.Builder addInsightsBuilder(
        int index) {
      return getInsightsFieldBuilder().addBuilder(
          index, com.google.cloud.recommender.v1.Insight.getDefaultInstance());
    }
    /**
     * <pre>
     * The set of insights for the `parent` resource.
     * </pre>
     *
     * <code>repeated .google.cloud.recommender.v1.Insight insights = 1;</code>
     */
    public java.util.List<com.google.cloud.recommender.v1.Insight.Builder> 
         getInsightsBuilderList() {
      return getInsightsFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.recommender.v1.Insight, com.google.cloud.recommender.v1.Insight.Builder, com.google.cloud.recommender.v1.InsightOrBuilder> 
        getInsightsFieldBuilder() {
      if (insightsBuilder_ == null) {
        insightsBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.cloud.recommender.v1.Insight, com.google.cloud.recommender.v1.Insight.Builder, com.google.cloud.recommender.v1.InsightOrBuilder>(
                insights_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        insights_ = null;
      }
      return insightsBuilder_;
    }

    private java.lang.Object nextPageToken_ = "";
    /**
     * <pre>
     * A token that can be used to request the next page of results. This field is
     * empty if there are no additional results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return The nextPageToken.
     */
    public java.lang.String getNextPageToken() {
      java.lang.Object ref = nextPageToken_;
      if (!(ref instanceof java.lang.String)) {
        com.google.protobuf.ByteString bs =
            (com.google.protobuf.ByteString) ref;
        java.lang.String s = bs.toStringUtf8();
        nextPageToken_ = s;
        return s;
      } else {
        return (java.lang.String) ref;
      }
    }
    /**
     * <pre>
     * A token that can be used to request the next page of results. This field is
     * empty if there are no additional results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return The bytes for nextPageToken.
     */
    public com.google.protobuf.ByteString
        getNextPageTokenBytes() {
      java.lang.Object ref = nextPageToken_;
      if (ref instanceof String) {
        com.google.protobuf.ByteString b = 
            com.google.protobuf.ByteString.copyFromUtf8(
                (java.lang.String) ref);
        nextPageToken_ = b;
        return b;
      } else {
        return (com.google.protobuf.ByteString) ref;
      }
    }
    /**
     * <pre>
     * A token that can be used to request the next page of results. This field is
     * empty if there are no additional results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @param value The nextPageToken to set.
     * @return This builder for chaining.
     */
    public Builder setNextPageToken(
        java.lang.String value) {
      if (value == null) {
    throw new NullPointerException();
  }
  
      nextPageToken_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * A token that can be used to request the next page of results. This field is
     * empty if there are no additional results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearNextPageToken() {
      
      nextPageToken_ = getDefaultInstance().getNextPageToken();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * A token that can be used to request the next page of results. This field is
     * empty if there are no additional results.
     * </pre>
     *
     * <code>string next_page_token = 2;</code>
     * @param value The bytes for nextPageToken to set.
     * @return This builder for chaining.
     */
    public Builder setNextPageTokenBytes(
        com.google.protobuf.ByteString value) {
      if (value == null) {
    throw new NullPointerException();
  }
  checkByteStringIsUtf8(value);
      
      nextPageToken_ = value;
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


    // @@protoc_insertion_point(builder_scope:google.cloud.recommender.v1.ListInsightsResponse)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.recommender.v1.ListInsightsResponse)
  private static final com.google.cloud.recommender.v1.ListInsightsResponse DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.recommender.v1.ListInsightsResponse();
  }

  public static com.google.cloud.recommender.v1.ListInsightsResponse getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ListInsightsResponse>
      PARSER = new com.google.protobuf.AbstractParser<ListInsightsResponse>() {
    @java.lang.Override
    public ListInsightsResponse parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ListInsightsResponse(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ListInsightsResponse> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ListInsightsResponse> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.recommender.v1.ListInsightsResponse getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

