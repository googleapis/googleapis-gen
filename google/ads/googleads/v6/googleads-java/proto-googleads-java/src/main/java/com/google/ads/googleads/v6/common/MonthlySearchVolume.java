// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/common/keyword_plan_common.proto

package com.google.ads.googleads.v6.common;

/**
 * <pre>
 * Monthly search volume.
 * </pre>
 *
 * Protobuf type {@code google.ads.googleads.v6.common.MonthlySearchVolume}
 */
public final class MonthlySearchVolume extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.ads.googleads.v6.common.MonthlySearchVolume)
    MonthlySearchVolumeOrBuilder {
private static final long serialVersionUID = 0L;
  // Use MonthlySearchVolume.newBuilder() to construct.
  private MonthlySearchVolume(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private MonthlySearchVolume() {
    month_ = 0;
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new MonthlySearchVolume();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private MonthlySearchVolume(
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
          case 16: {
            int rawValue = input.readEnum();

            month_ = rawValue;
            break;
          }
          case 32: {
            bitField0_ |= 0x00000001;
            year_ = input.readInt64();
            break;
          }
          case 40: {
            bitField0_ |= 0x00000002;
            monthlySearches_ = input.readInt64();
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
    return com.google.ads.googleads.v6.common.KeywordPlanCommonProto.internal_static_google_ads_googleads_v6_common_MonthlySearchVolume_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.ads.googleads.v6.common.KeywordPlanCommonProto.internal_static_google_ads_googleads_v6_common_MonthlySearchVolume_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.ads.googleads.v6.common.MonthlySearchVolume.class, com.google.ads.googleads.v6.common.MonthlySearchVolume.Builder.class);
  }

  private int bitField0_;
  public static final int YEAR_FIELD_NUMBER = 4;
  private long year_;
  /**
   * <pre>
   * The year of the search volume (e.g. 2020).
   * </pre>
   *
   * <code>int64 year = 4;</code>
   * @return Whether the year field is set.
   */
  @java.lang.Override
  public boolean hasYear() {
    return ((bitField0_ & 0x00000001) != 0);
  }
  /**
   * <pre>
   * The year of the search volume (e.g. 2020).
   * </pre>
   *
   * <code>int64 year = 4;</code>
   * @return The year.
   */
  @java.lang.Override
  public long getYear() {
    return year_;
  }

  public static final int MONTH_FIELD_NUMBER = 2;
  private int month_;
  /**
   * <pre>
   * The month of the search volume.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
   * @return The enum numeric value on the wire for month.
   */
  @java.lang.Override public int getMonthValue() {
    return month_;
  }
  /**
   * <pre>
   * The month of the search volume.
   * </pre>
   *
   * <code>.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
   * @return The month.
   */
  @java.lang.Override public com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear getMonth() {
    @SuppressWarnings("deprecation")
    com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear result = com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear.valueOf(month_);
    return result == null ? com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear.UNRECOGNIZED : result;
  }

  public static final int MONTHLY_SEARCHES_FIELD_NUMBER = 5;
  private long monthlySearches_;
  /**
   * <pre>
   * Approximate number of searches for the month.
   * A null value indicates the search volume is unavailable for
   * that month.
   * </pre>
   *
   * <code>int64 monthly_searches = 5;</code>
   * @return Whether the monthlySearches field is set.
   */
  @java.lang.Override
  public boolean hasMonthlySearches() {
    return ((bitField0_ & 0x00000002) != 0);
  }
  /**
   * <pre>
   * Approximate number of searches for the month.
   * A null value indicates the search volume is unavailable for
   * that month.
   * </pre>
   *
   * <code>int64 monthly_searches = 5;</code>
   * @return The monthlySearches.
   */
  @java.lang.Override
  public long getMonthlySearches() {
    return monthlySearches_;
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
    if (month_ != com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear.UNSPECIFIED.getNumber()) {
      output.writeEnum(2, month_);
    }
    if (((bitField0_ & 0x00000001) != 0)) {
      output.writeInt64(4, year_);
    }
    if (((bitField0_ & 0x00000002) != 0)) {
      output.writeInt64(5, monthlySearches_);
    }
    unknownFields.writeTo(output);
  }

  @java.lang.Override
  public int getSerializedSize() {
    int size = memoizedSize;
    if (size != -1) return size;

    size = 0;
    if (month_ != com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear.UNSPECIFIED.getNumber()) {
      size += com.google.protobuf.CodedOutputStream
        .computeEnumSize(2, month_);
    }
    if (((bitField0_ & 0x00000001) != 0)) {
      size += com.google.protobuf.CodedOutputStream
        .computeInt64Size(4, year_);
    }
    if (((bitField0_ & 0x00000002) != 0)) {
      size += com.google.protobuf.CodedOutputStream
        .computeInt64Size(5, monthlySearches_);
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
    if (!(obj instanceof com.google.ads.googleads.v6.common.MonthlySearchVolume)) {
      return super.equals(obj);
    }
    com.google.ads.googleads.v6.common.MonthlySearchVolume other = (com.google.ads.googleads.v6.common.MonthlySearchVolume) obj;

    if (hasYear() != other.hasYear()) return false;
    if (hasYear()) {
      if (getYear()
          != other.getYear()) return false;
    }
    if (month_ != other.month_) return false;
    if (hasMonthlySearches() != other.hasMonthlySearches()) return false;
    if (hasMonthlySearches()) {
      if (getMonthlySearches()
          != other.getMonthlySearches()) return false;
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
    if (hasYear()) {
      hash = (37 * hash) + YEAR_FIELD_NUMBER;
      hash = (53 * hash) + com.google.protobuf.Internal.hashLong(
          getYear());
    }
    hash = (37 * hash) + MONTH_FIELD_NUMBER;
    hash = (53 * hash) + month_;
    if (hasMonthlySearches()) {
      hash = (37 * hash) + MONTHLY_SEARCHES_FIELD_NUMBER;
      hash = (53 * hash) + com.google.protobuf.Internal.hashLong(
          getMonthlySearches());
    }
    hash = (29 * hash) + unknownFields.hashCode();
    memoizedHashCode = hash;
    return hash;
  }

  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v6.common.MonthlySearchVolume parseFrom(
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
  public static Builder newBuilder(com.google.ads.googleads.v6.common.MonthlySearchVolume prototype) {
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
   * Monthly search volume.
   * </pre>
   *
   * Protobuf type {@code google.ads.googleads.v6.common.MonthlySearchVolume}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.ads.googleads.v6.common.MonthlySearchVolume)
      com.google.ads.googleads.v6.common.MonthlySearchVolumeOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.ads.googleads.v6.common.KeywordPlanCommonProto.internal_static_google_ads_googleads_v6_common_MonthlySearchVolume_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.ads.googleads.v6.common.KeywordPlanCommonProto.internal_static_google_ads_googleads_v6_common_MonthlySearchVolume_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.ads.googleads.v6.common.MonthlySearchVolume.class, com.google.ads.googleads.v6.common.MonthlySearchVolume.Builder.class);
    }

    // Construct using com.google.ads.googleads.v6.common.MonthlySearchVolume.newBuilder()
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
      year_ = 0L;
      bitField0_ = (bitField0_ & ~0x00000001);
      month_ = 0;

      monthlySearches_ = 0L;
      bitField0_ = (bitField0_ & ~0x00000002);
      return this;
    }

    @java.lang.Override
    public com.google.protobuf.Descriptors.Descriptor
        getDescriptorForType() {
      return com.google.ads.googleads.v6.common.KeywordPlanCommonProto.internal_static_google_ads_googleads_v6_common_MonthlySearchVolume_descriptor;
    }

    @java.lang.Override
    public com.google.ads.googleads.v6.common.MonthlySearchVolume getDefaultInstanceForType() {
      return com.google.ads.googleads.v6.common.MonthlySearchVolume.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.ads.googleads.v6.common.MonthlySearchVolume build() {
      com.google.ads.googleads.v6.common.MonthlySearchVolume result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.ads.googleads.v6.common.MonthlySearchVolume buildPartial() {
      com.google.ads.googleads.v6.common.MonthlySearchVolume result = new com.google.ads.googleads.v6.common.MonthlySearchVolume(this);
      int from_bitField0_ = bitField0_;
      int to_bitField0_ = 0;
      if (((from_bitField0_ & 0x00000001) != 0)) {
        result.year_ = year_;
        to_bitField0_ |= 0x00000001;
      }
      result.month_ = month_;
      if (((from_bitField0_ & 0x00000002) != 0)) {
        result.monthlySearches_ = monthlySearches_;
        to_bitField0_ |= 0x00000002;
      }
      result.bitField0_ = to_bitField0_;
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
      if (other instanceof com.google.ads.googleads.v6.common.MonthlySearchVolume) {
        return mergeFrom((com.google.ads.googleads.v6.common.MonthlySearchVolume)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.ads.googleads.v6.common.MonthlySearchVolume other) {
      if (other == com.google.ads.googleads.v6.common.MonthlySearchVolume.getDefaultInstance()) return this;
      if (other.hasYear()) {
        setYear(other.getYear());
      }
      if (other.month_ != 0) {
        setMonthValue(other.getMonthValue());
      }
      if (other.hasMonthlySearches()) {
        setMonthlySearches(other.getMonthlySearches());
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
      com.google.ads.googleads.v6.common.MonthlySearchVolume parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.ads.googleads.v6.common.MonthlySearchVolume) e.getUnfinishedMessage();
        throw e.unwrapIOException();
      } finally {
        if (parsedMessage != null) {
          mergeFrom(parsedMessage);
        }
      }
      return this;
    }
    private int bitField0_;

    private long year_ ;
    /**
     * <pre>
     * The year of the search volume (e.g. 2020).
     * </pre>
     *
     * <code>int64 year = 4;</code>
     * @return Whether the year field is set.
     */
    @java.lang.Override
    public boolean hasYear() {
      return ((bitField0_ & 0x00000001) != 0);
    }
    /**
     * <pre>
     * The year of the search volume (e.g. 2020).
     * </pre>
     *
     * <code>int64 year = 4;</code>
     * @return The year.
     */
    @java.lang.Override
    public long getYear() {
      return year_;
    }
    /**
     * <pre>
     * The year of the search volume (e.g. 2020).
     * </pre>
     *
     * <code>int64 year = 4;</code>
     * @param value The year to set.
     * @return This builder for chaining.
     */
    public Builder setYear(long value) {
      bitField0_ |= 0x00000001;
      year_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The year of the search volume (e.g. 2020).
     * </pre>
     *
     * <code>int64 year = 4;</code>
     * @return This builder for chaining.
     */
    public Builder clearYear() {
      bitField0_ = (bitField0_ & ~0x00000001);
      year_ = 0L;
      onChanged();
      return this;
    }

    private int month_ = 0;
    /**
     * <pre>
     * The month of the search volume.
     * </pre>
     *
     * <code>.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
     * @return The enum numeric value on the wire for month.
     */
    @java.lang.Override public int getMonthValue() {
      return month_;
    }
    /**
     * <pre>
     * The month of the search volume.
     * </pre>
     *
     * <code>.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
     * @param value The enum numeric value on the wire for month to set.
     * @return This builder for chaining.
     */
    public Builder setMonthValue(int value) {
      
      month_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The month of the search volume.
     * </pre>
     *
     * <code>.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
     * @return The month.
     */
    @java.lang.Override
    public com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear getMonth() {
      @SuppressWarnings("deprecation")
      com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear result = com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear.valueOf(month_);
      return result == null ? com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear.UNRECOGNIZED : result;
    }
    /**
     * <pre>
     * The month of the search volume.
     * </pre>
     *
     * <code>.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
     * @param value The month to set.
     * @return This builder for chaining.
     */
    public Builder setMonth(com.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear value) {
      if (value == null) {
        throw new NullPointerException();
      }
      
      month_ = value.getNumber();
      onChanged();
      return this;
    }
    /**
     * <pre>
     * The month of the search volume.
     * </pre>
     *
     * <code>.google.ads.googleads.v6.enums.MonthOfYearEnum.MonthOfYear month = 2;</code>
     * @return This builder for chaining.
     */
    public Builder clearMonth() {
      
      month_ = 0;
      onChanged();
      return this;
    }

    private long monthlySearches_ ;
    /**
     * <pre>
     * Approximate number of searches for the month.
     * A null value indicates the search volume is unavailable for
     * that month.
     * </pre>
     *
     * <code>int64 monthly_searches = 5;</code>
     * @return Whether the monthlySearches field is set.
     */
    @java.lang.Override
    public boolean hasMonthlySearches() {
      return ((bitField0_ & 0x00000002) != 0);
    }
    /**
     * <pre>
     * Approximate number of searches for the month.
     * A null value indicates the search volume is unavailable for
     * that month.
     * </pre>
     *
     * <code>int64 monthly_searches = 5;</code>
     * @return The monthlySearches.
     */
    @java.lang.Override
    public long getMonthlySearches() {
      return monthlySearches_;
    }
    /**
     * <pre>
     * Approximate number of searches for the month.
     * A null value indicates the search volume is unavailable for
     * that month.
     * </pre>
     *
     * <code>int64 monthly_searches = 5;</code>
     * @param value The monthlySearches to set.
     * @return This builder for chaining.
     */
    public Builder setMonthlySearches(long value) {
      bitField0_ |= 0x00000002;
      monthlySearches_ = value;
      onChanged();
      return this;
    }
    /**
     * <pre>
     * Approximate number of searches for the month.
     * A null value indicates the search volume is unavailable for
     * that month.
     * </pre>
     *
     * <code>int64 monthly_searches = 5;</code>
     * @return This builder for chaining.
     */
    public Builder clearMonthlySearches() {
      bitField0_ = (bitField0_ & ~0x00000002);
      monthlySearches_ = 0L;
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


    // @@protoc_insertion_point(builder_scope:google.ads.googleads.v6.common.MonthlySearchVolume)
  }

  // @@protoc_insertion_point(class_scope:google.ads.googleads.v6.common.MonthlySearchVolume)
  private static final com.google.ads.googleads.v6.common.MonthlySearchVolume DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.ads.googleads.v6.common.MonthlySearchVolume();
  }

  public static com.google.ads.googleads.v6.common.MonthlySearchVolume getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<MonthlySearchVolume>
      PARSER = new com.google.protobuf.AbstractParser<MonthlySearchVolume>() {
    @java.lang.Override
    public MonthlySearchVolume parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new MonthlySearchVolume(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<MonthlySearchVolume> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<MonthlySearchVolume> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.ads.googleads.v6.common.MonthlySearchVolume getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

