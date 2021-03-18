// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/dialogflow/v2beta1/conversation.proto

package com.google.cloud.dialogflow.v2beta1;

/**
 * <pre>
 * The response message for
 * [Conversations.ListConversations][google.cloud.dialogflow.v2beta1.Conversations.ListConversations].
 * </pre>
 *
 * Protobuf type {@code google.cloud.dialogflow.v2beta1.ListConversationsResponse}
 */
public final class ListConversationsResponse extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.cloud.dialogflow.v2beta1.ListConversationsResponse)
    ListConversationsResponseOrBuilder {
private static final long serialVersionUID = 0L;
  // Use ListConversationsResponse.newBuilder() to construct.
  private ListConversationsResponse(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private ListConversationsResponse() {
    conversations_ = java.util.Collections.emptyList();
    nextPageToken_ = "";
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new ListConversationsResponse();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private ListConversationsResponse(
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
              conversations_ = new java.util.ArrayList<com.google.cloud.dialogflow.v2beta1.Conversation>();
              mutable_bitField0_ |= 0x00000001;
            }
            conversations_.add(
                input.readMessage(com.google.cloud.dialogflow.v2beta1.Conversation.parser(), extensionRegistry));
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
        conversations_ = java.util.Collections.unmodifiableList(conversations_);
      }
      this.unknownFields = unknownFields.build();
      makeExtensionsImmutable();
    }
  }
  public static final com.google.protobuf.Descriptors.Descriptor
      getDescriptor() {
    return com.google.cloud.dialogflow.v2beta1.ConversationProto.internal_static_google_cloud_dialogflow_v2beta1_ListConversationsResponse_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.cloud.dialogflow.v2beta1.ConversationProto.internal_static_google_cloud_dialogflow_v2beta1_ListConversationsResponse_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.cloud.dialogflow.v2beta1.ListConversationsResponse.class, com.google.cloud.dialogflow.v2beta1.ListConversationsResponse.Builder.class);
  }

  public static final int CONVERSATIONS_FIELD_NUMBER = 1;
  private java.util.List<com.google.cloud.dialogflow.v2beta1.Conversation> conversations_;
  /**
   * <pre>
   * The list of conversations. There will be a maximum number of items
   * returned based on the page_size field in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
   */
  @java.lang.Override
  public java.util.List<com.google.cloud.dialogflow.v2beta1.Conversation> getConversationsList() {
    return conversations_;
  }
  /**
   * <pre>
   * The list of conversations. There will be a maximum number of items
   * returned based on the page_size field in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
   */
  @java.lang.Override
  public java.util.List<? extends com.google.cloud.dialogflow.v2beta1.ConversationOrBuilder> 
      getConversationsOrBuilderList() {
    return conversations_;
  }
  /**
   * <pre>
   * The list of conversations. There will be a maximum number of items
   * returned based on the page_size field in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
   */
  @java.lang.Override
  public int getConversationsCount() {
    return conversations_.size();
  }
  /**
   * <pre>
   * The list of conversations. There will be a maximum number of items
   * returned based on the page_size field in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
   */
  @java.lang.Override
  public com.google.cloud.dialogflow.v2beta1.Conversation getConversations(int index) {
    return conversations_.get(index);
  }
  /**
   * <pre>
   * The list of conversations. There will be a maximum number of items
   * returned based on the page_size field in the request.
   * </pre>
   *
   * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
   */
  @java.lang.Override
  public com.google.cloud.dialogflow.v2beta1.ConversationOrBuilder getConversationsOrBuilder(
      int index) {
    return conversations_.get(index);
  }

  public static final int NEXT_PAGE_TOKEN_FIELD_NUMBER = 2;
  private volatile java.lang.Object nextPageToken_;
  /**
   * <pre>
   * Token to retrieve the next page of results, or empty if there are no
   * more results in the list.
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
   * Token to retrieve the next page of results, or empty if there are no
   * more results in the list.
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
    for (int i = 0; i < conversations_.size(); i++) {
      output.writeMessage(1, conversations_.get(i));
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
    for (int i = 0; i < conversations_.size(); i++) {
      size += com.google.protobuf.CodedOutputStream
        .computeMessageSize(1, conversations_.get(i));
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
    if (!(obj instanceof com.google.cloud.dialogflow.v2beta1.ListConversationsResponse)) {
      return super.equals(obj);
    }
    com.google.cloud.dialogflow.v2beta1.ListConversationsResponse other = (com.google.cloud.dialogflow.v2beta1.ListConversationsResponse) obj;

    if (!getConversationsList()
        .equals(other.getConversationsList())) return false;
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
    if (getConversationsCount() > 0) {
      hash = (37 * hash) + CONVERSATIONS_FIELD_NUMBER;
      hash = (53 * hash) + getConversationsList().hashCode();
    }
    hash = (37 * hash) + NEXT_PAGE_TOKEN_FIELD_NUMBER;
    hash = (53 * hash) + getNextPageToken().hashCode();
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parseFrom(
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
  public static Builder newBuilder(com.google.cloud.dialogflow.v2beta1.ListConversationsResponse prototype) {
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
   * The response message for
   * [Conversations.ListConversations][google.cloud.dialogflow.v2beta1.Conversations.ListConversations].
   * </pre>
   *
   * Protobuf type {@code google.cloud.dialogflow.v2beta1.ListConversationsResponse}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.cloud.dialogflow.v2beta1.ListConversationsResponse)
      com.google.cloud.dialogflow.v2beta1.ListConversationsResponseOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.cloud.dialogflow.v2beta1.ConversationProto.internal_static_google_cloud_dialogflow_v2beta1_ListConversationsResponse_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.cloud.dialogflow.v2beta1.ConversationProto.internal_static_google_cloud_dialogflow_v2beta1_ListConversationsResponse_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.cloud.dialogflow.v2beta1.ListConversationsResponse.class, com.google.cloud.dialogflow.v2beta1.ListConversationsResponse.Builder.class);
    }

    // Construct using com.google.cloud.dialogflow.v2beta1.ListConversationsResponse.newBuilder()
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
        getConversationsFieldBuilder();
      }
    }
    @java.lang.Override
    public Builder clear() {
      super.clear();
      if (conversationsBuilder_ == null) {
        conversations_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
      } else {
        conversationsBuilder_.clear();
      }
      nextPageToken_ = "";

      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.cloud.dialogflow.v2beta1.ConversationProto.internal_static_google_cloud_dialogflow_v2beta1_ListConversationsResponse_descriptor;
    }

    @java.lang.Override
    public com.google.cloud.dialogflow.v2beta1.ListConversationsResponse getDefaultInstanceForType() {
      return com.google.cloud.dialogflow.v2beta1.ListConversationsResponse.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.cloud.dialogflow.v2beta1.ListConversationsResponse build() {
      com.google.cloud.dialogflow.v2beta1.ListConversationsResponse result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.cloud.dialogflow.v2beta1.ListConversationsResponse buildPartial() {
      com.google.cloud.dialogflow.v2beta1.ListConversationsResponse result = new com.google.cloud.dialogflow.v2beta1.ListConversationsResponse(this);
      int from_bitField0_ = bitField0_;
      if (conversationsBuilder_ == null) {
        if (((bitField0_ & 0x00000001) != 0)) {
          conversations_ = java.util.Collections.unmodifiableList(conversations_);
          bitField0_ = (bitField0_ & ~0x00000001);
        }
        result.conversations_ = conversations_;
      } else {
        result.conversations_ = conversationsBuilder_.build();
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
      if (other instanceof com.google.cloud.dialogflow.v2beta1.ListConversationsResponse) {
        return mergeFrom((com.google.cloud.dialogflow.v2beta1.ListConversationsResponse)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.cloud.dialogflow.v2beta1.ListConversationsResponse other) {
      if (other == com.google.cloud.dialogflow.v2beta1.ListConversationsResponse.getDefaultInstance()) return this;
      if (conversationsBuilder_ == null) {
        if (!other.conversations_.isEmpty()) {
          if (conversations_.isEmpty()) {
            conversations_ = other.conversations_;
            bitField0_ = (bitField0_ & ~0x00000001);
          } else {
            ensureConversationsIsMutable();
            conversations_.addAll(other.conversations_);
          }
          onChanged();
        }
      } else {
        if (!other.conversations_.isEmpty()) {
          if (conversationsBuilder_.isEmpty()) {
            conversationsBuilder_.dispose();
            conversationsBuilder_ = null;
            conversations_ = other.conversations_;
            bitField0_ = (bitField0_ & ~0x00000001);
            conversationsBuilder_ = 
              com.google.protobuf.GeneratedMessageV3.alwaysUseFieldBuilders ?
                 getConversationsFieldBuilder() : null;
          } else {
            conversationsBuilder_.addAllMessages(other.conversations_);
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
      com.google.cloud.dialogflow.v2beta1.ListConversationsResponse parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.cloud.dialogflow.v2beta1.ListConversationsResponse) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private java.util.List<com.google.cloud.dialogflow.v2beta1.Conversation> conversations_ =
      java.util.Collections.emptyList();
    private void ensureConversationsIsMutable() {
      if (!((bitField0_ & 0x00000001) != 0)) {
        conversations_ = new java.util.ArrayList<com.google.cloud.dialogflow.v2beta1.Conversation>(conversations_);
        bitField0_ |= 0x00000001;
       }
    }

    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.dialogflow.v2beta1.Conversation, com.google.cloud.dialogflow.v2beta1.Conversation.Builder, com.google.cloud.dialogflow.v2beta1.ConversationOrBuilder> conversationsBuilder_;

    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public java.util.List<com.google.cloud.dialogflow.v2beta1.Conversation> getConversationsList() {
      if (conversationsBuilder_ == null) {
        return java.util.Collections.unmodifiableList(conversations_);
      } else {
        return conversationsBuilder_.getMessageList();
      }
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public int getConversationsCount() {
      if (conversationsBuilder_ == null) {
        return conversations_.size();
      } else {
        return conversationsBuilder_.getCount();
      }
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public com.google.cloud.dialogflow.v2beta1.Conversation getConversations(int index) {
      if (conversationsBuilder_ == null) {
        return conversations_.get(index);
      } else {
        return conversationsBuilder_.getMessage(index);
      }
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder setConversations(
        int index, com.google.cloud.dialogflow.v2beta1.Conversation value) {
      if (conversationsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureConversationsIsMutable();
        conversations_.set(index, value);
        onChanged();
      } else {
        conversationsBuilder_.setMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder setConversations(
        int index, com.google.cloud.dialogflow.v2beta1.Conversation.Builder builderForValue) {
      if (conversationsBuilder_ == null) {
        ensureConversationsIsMutable();
        conversations_.set(index, builderForValue.build());
        onChanged();
      } else {
        conversationsBuilder_.setMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder addConversations(com.google.cloud.dialogflow.v2beta1.Conversation value) {
      if (conversationsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureConversationsIsMutable();
        conversations_.add(value);
        onChanged();
      } else {
        conversationsBuilder_.addMessage(value);
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder addConversations(
        int index, com.google.cloud.dialogflow.v2beta1.Conversation value) {
      if (conversationsBuilder_ == null) {
        if (value == null) {
          throw new NullPointerException();
        }
        ensureConversationsIsMutable();
        conversations_.add(index, value);
        onChanged();
      } else {
        conversationsBuilder_.addMessage(index, value);
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder addConversations(
        com.google.cloud.dialogflow.v2beta1.Conversation.Builder builderForValue) {
      if (conversationsBuilder_ == null) {
        ensureConversationsIsMutable();
        conversations_.add(builderForValue.build());
        onChanged();
      } else {
        conversationsBuilder_.addMessage(builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder addConversations(
        int index, com.google.cloud.dialogflow.v2beta1.Conversation.Builder builderForValue) {
      if (conversationsBuilder_ == null) {
        ensureConversationsIsMutable();
        conversations_.add(index, builderForValue.build());
        onChanged();
      } else {
        conversationsBuilder_.addMessage(index, builderForValue.build());
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder addAllConversations(
        java.lang.Iterable<? extends com.google.cloud.dialogflow.v2beta1.Conversation> values) {
      if (conversationsBuilder_ == null) {
        ensureConversationsIsMutable();
        com.google.protobuf.AbstractMessageLite.Builder.addAll(
            values, conversations_);
        onChanged();
      } else {
        conversationsBuilder_.addAllMessages(values);
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder clearConversations() {
      if (conversationsBuilder_ == null) {
        conversations_ = java.util.Collections.emptyList();
        bitField0_ = (bitField0_ & ~0x00000001);
        onChanged();
      } else {
        conversationsBuilder_.clear();
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public Builder removeConversations(int index) {
      if (conversationsBuilder_ == null) {
        ensureConversationsIsMutable();
        conversations_.remove(index);
        onChanged();
      } else {
        conversationsBuilder_.remove(index);
      }
      return this;
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public com.google.cloud.dialogflow.v2beta1.Conversation.Builder getConversationsBuilder(
        int index) {
      return getConversationsFieldBuilder().getBuilder(index);
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public com.google.cloud.dialogflow.v2beta1.ConversationOrBuilder getConversationsOrBuilder(
        int index) {
      if (conversationsBuilder_ == null) {
        return conversations_.get(index);  } else {
        return conversationsBuilder_.getMessageOrBuilder(index);
      }
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public java.util.List<? extends com.google.cloud.dialogflow.v2beta1.ConversationOrBuilder> 
         getConversationsOrBuilderList() {
      if (conversationsBuilder_ != null) {
        return conversationsBuilder_.getMessageOrBuilderList();
      } else {
        return java.util.Collections.unmodifiableList(conversations_);
      }
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public com.google.cloud.dialogflow.v2beta1.Conversation.Builder addConversationsBuilder() {
      return getConversationsFieldBuilder().addBuilder(
          com.google.cloud.dialogflow.v2beta1.Conversation.getDefaultInstance());
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public com.google.cloud.dialogflow.v2beta1.Conversation.Builder addConversationsBuilder(
        int index) {
      return getConversationsFieldBuilder().addBuilder(
          index, com.google.cloud.dialogflow.v2beta1.Conversation.getDefaultInstance());
    }
    /**
     * <pre>
     * The list of conversations. There will be a maximum number of items
     * returned based on the page_size field in the request.
     * </pre>
     *
     * <code>repeated .google.cloud.dialogflow.v2beta1.Conversation conversations = 1;</code>
     */
    public java.util.List<com.google.cloud.dialogflow.v2beta1.Conversation.Builder> 
         getConversationsBuilderList() {
      return getConversationsFieldBuilder().getBuilderList();
    }
    private com.google.protobuf.RepeatedFieldBuilderV3<
        com.google.cloud.dialogflow.v2beta1.Conversation, com.google.cloud.dialogflow.v2beta1.Conversation.Builder, com.google.cloud.dialogflow.v2beta1.ConversationOrBuilder> 
        getConversationsFieldBuilder() {
      if (conversationsBuilder_ == null) {
        conversationsBuilder_ = new com.google.protobuf.RepeatedFieldBuilderV3<
            com.google.cloud.dialogflow.v2beta1.Conversation, com.google.cloud.dialogflow.v2beta1.Conversation.Builder, com.google.cloud.dialogflow.v2beta1.ConversationOrBuilder>(
                conversations_,
                ((bitField0_ & 0x00000001) != 0),
                getParentForChildren(),
                isClean());
        conversations_ = null;
      }
      return conversationsBuilder_;
    }

    private java.lang.Object nextPageToken_ = "";
    /**
     * <pre>
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
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
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
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
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
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
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
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
     * Token to retrieve the next page of results, or empty if there are no
     * more results in the list.
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


    // @@protoc_insertion_point(builder_scope:google.cloud.dialogflow.v2beta1.ListConversationsResponse)
  }

  // @@protoc_insertion_point(class_scope:google.cloud.dialogflow.v2beta1.ListConversationsResponse)
  private static final com.google.cloud.dialogflow.v2beta1.ListConversationsResponse DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.cloud.dialogflow.v2beta1.ListConversationsResponse();
  }

  public static com.google.cloud.dialogflow.v2beta1.ListConversationsResponse getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<ListConversationsResponse>
      PARSER = new com.google.protobuf.AbstractParser<ListConversationsResponse>() {
    @java.lang.Override
    public ListConversationsResponse parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new ListConversationsResponse(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<ListConversationsResponse> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<ListConversationsResponse> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.cloud.dialogflow.v2beta1.ListConversationsResponse getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

