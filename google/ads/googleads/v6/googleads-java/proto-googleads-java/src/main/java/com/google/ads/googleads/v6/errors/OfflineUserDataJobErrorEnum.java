// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/ads/googleads/v6/errors/offline_user_data_job_error.proto

package com.google.ads.googleads.v6.errors;

/**
 * <pre>
 * Container for enum describing possible offline user data job errors.
 * </pre>
 *
 * Protobuf type {@code google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum}
 */
public final class OfflineUserDataJobErrorEnum extends
    com.google.protobuf.GeneratedMessageV3 implements
    // @@protoc_insertion_point(message_implements:google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum)
    OfflineUserDataJobErrorEnumOrBuilder {
private static final long serialVersionUID = 0L;
  // Use OfflineUserDataJobErrorEnum.newBuilder() to construct.
  private OfflineUserDataJobErrorEnum(com.google.protobuf.GeneratedMessageV3.Builder<?> builder) {
    super(builder);
  }
  private OfflineUserDataJobErrorEnum() {
  }

  @java.lang.Override
  @SuppressWarnings({"unused"})
  protected java.lang.Object newInstance(
      UnusedPrivateParameter unused) {
    return new OfflineUserDataJobErrorEnum();
  }

  @java.lang.Override
  public final com.google.protobuf.UnknownFieldSet
  getUnknownFields() {
    return this.unknownFields;
  }
  private OfflineUserDataJobErrorEnum(
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
    return com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorProto.internal_static_google_ads_googleads_v6_errors_OfflineUserDataJobErrorEnum_descriptor;
  }

  @java.lang.Override
  protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
      internalGetFieldAccessorTable() {
    return com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorProto.internal_static_google_ads_googleads_v6_errors_OfflineUserDataJobErrorEnum_fieldAccessorTable
        .ensureFieldAccessorsInitialized(
            com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.class, com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.Builder.class);
  }

  /**
   * <pre>
   * Enum describing possible request errors.
   * </pre>
   *
   * Protobuf enum {@code google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.OfflineUserDataJobError}
   */
  public enum OfflineUserDataJobError
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
     * The user list ID provided for the job is invalid.
     * </pre>
     *
     * <code>INVALID_USER_LIST_ID = 3;</code>
     */
    INVALID_USER_LIST_ID(3),
    /**
     * <pre>
     * Type of the user list is not applicable for the job.
     * </pre>
     *
     * <code>INVALID_USER_LIST_TYPE = 4;</code>
     */
    INVALID_USER_LIST_TYPE(4),
    /**
     * <pre>
     * Customer is not allowisted for using user ID in upload data.
     * </pre>
     *
     * <code>NOT_ON_ALLOWLIST_FOR_USER_ID = 33;</code>
     */
    NOT_ON_ALLOWLIST_FOR_USER_ID(33),
    /**
     * <pre>
     * Upload data is not compatible with the upload key type of the associated
     * user list.
     * </pre>
     *
     * <code>INCOMPATIBLE_UPLOAD_KEY_TYPE = 6;</code>
     */
    INCOMPATIBLE_UPLOAD_KEY_TYPE(6),
    /**
     * <pre>
     * The user identifier is missing valid data.
     * </pre>
     *
     * <code>MISSING_USER_IDENTIFIER = 7;</code>
     */
    MISSING_USER_IDENTIFIER(7),
    /**
     * <pre>
     * The mobile ID is malformed.
     * </pre>
     *
     * <code>INVALID_MOBILE_ID_FORMAT = 8;</code>
     */
    INVALID_MOBILE_ID_FORMAT(8),
    /**
     * <pre>
     * Maximum number of user identifiers allowed per request is 100,000.
     * </pre>
     *
     * <code>TOO_MANY_USER_IDENTIFIERS = 9;</code>
     */
    TOO_MANY_USER_IDENTIFIERS(9),
    /**
     * <pre>
     * Customer is not on the allow-list for store sales direct data.
     * </pre>
     *
     * <code>NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT = 31;</code>
     */
    NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT(31),
    /**
     * <pre>
     * Customer is not on the allow-list for unified store sales data.
     * </pre>
     *
     * <code>NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES = 32;</code>
     */
    NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES(32),
    /**
     * <pre>
     * The partner ID in store sales direct metadata is invalid.
     * </pre>
     *
     * <code>INVALID_PARTNER_ID = 11;</code>
     */
    INVALID_PARTNER_ID(11),
    /**
     * <pre>
     * The data in user identifier should not be encoded.
     * </pre>
     *
     * <code>INVALID_ENCODING = 12;</code>
     */
    INVALID_ENCODING(12),
    /**
     * <pre>
     * The country code is invalid.
     * </pre>
     *
     * <code>INVALID_COUNTRY_CODE = 13;</code>
     */
    INVALID_COUNTRY_CODE(13),
    /**
     * <pre>
     * Incompatible user identifier when using third_party_user_id for store
     * sales direct first party data or not using third_party_user_id for store
     * sales third party data.
     * </pre>
     *
     * <code>INCOMPATIBLE_USER_IDENTIFIER = 14;</code>
     */
    INCOMPATIBLE_USER_IDENTIFIER(14),
    /**
     * <pre>
     * A transaction time in the future is not allowed.
     * </pre>
     *
     * <code>FUTURE_TRANSACTION_TIME = 15;</code>
     */
    FUTURE_TRANSACTION_TIME(15),
    /**
     * <pre>
     * The conversion_action specified in transaction_attributes is used to
     * report conversions to a conversion action configured in Google Ads. This
     * error indicates there is no such conversion action in the account.
     * </pre>
     *
     * <code>INVALID_CONVERSION_ACTION = 16;</code>
     */
    INVALID_CONVERSION_ACTION(16),
    /**
     * <pre>
     * Mobile ID is not supported for store sales direct data.
     * </pre>
     *
     * <code>MOBILE_ID_NOT_SUPPORTED = 17;</code>
     */
    MOBILE_ID_NOT_SUPPORTED(17),
    /**
     * <pre>
     * When a remove-all operation is provided, it has to be the first operation
     * of the operation list.
     * </pre>
     *
     * <code>INVALID_OPERATION_ORDER = 18;</code>
     */
    INVALID_OPERATION_ORDER(18),
    /**
     * <pre>
     * Mixing creation and removal of offline data in the same job is not
     * allowed.
     * </pre>
     *
     * <code>CONFLICTING_OPERATION = 19;</code>
     */
    CONFLICTING_OPERATION(19),
    /**
     * <pre>
     * The external update ID already exists.
     * </pre>
     *
     * <code>EXTERNAL_UPDATE_ID_ALREADY_EXISTS = 21;</code>
     */
    EXTERNAL_UPDATE_ID_ALREADY_EXISTS(21),
    /**
     * <pre>
     * Once the upload job is started, new operations cannot be added.
     * </pre>
     *
     * <code>JOB_ALREADY_STARTED = 22;</code>
     */
    JOB_ALREADY_STARTED(22),
    /**
     * <pre>
     * Remove operation is not allowed for store sales direct updates.
     * </pre>
     *
     * <code>REMOVE_NOT_SUPPORTED = 23;</code>
     */
    REMOVE_NOT_SUPPORTED(23),
    /**
     * <pre>
     * Remove-all is not supported for certain offline user data job types.
     * </pre>
     *
     * <code>REMOVE_ALL_NOT_SUPPORTED = 24;</code>
     */
    REMOVE_ALL_NOT_SUPPORTED(24),
    /**
     * <pre>
     * The SHA256 encoded value is malformed.
     * </pre>
     *
     * <code>INVALID_SHA256_FORMAT = 25;</code>
     */
    INVALID_SHA256_FORMAT(25),
    /**
     * <pre>
     * The custom key specified is not enabled for the unified store sales
     * upload.
     * </pre>
     *
     * <code>CUSTOM_KEY_DISABLED = 26;</code>
     */
    CUSTOM_KEY_DISABLED(26),
    /**
     * <pre>
     * The custom key specified is not predefined through the Google Ads UI.
     * </pre>
     *
     * <code>CUSTOM_KEY_NOT_PREDEFINED = 27;</code>
     */
    CUSTOM_KEY_NOT_PREDEFINED(27),
    /**
     * <pre>
     * The custom key specified is not set in the upload.
     * </pre>
     *
     * <code>CUSTOM_KEY_NOT_SET = 29;</code>
     */
    CUSTOM_KEY_NOT_SET(29),
    /**
     * <pre>
     * The customer has not accepted the customer data terms in the conversion
     * settings page.
     * </pre>
     *
     * <code>CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS = 30;</code>
     */
    CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS(30),
    /**
     * <pre>
     * User attributes cannot be uploaded into a user list.
     * </pre>
     *
     * <code>ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST = 34;</code>
     */
    ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST(34),
    /**
     * <pre>
     * Lifetime value bucket must be a number from 1-10, except for remove
     * operation where 0 will be accepted.
     * </pre>
     *
     * <code>LIFETIME_VALUE_BUCKET_NOT_IN_RANGE = 35;</code>
     */
    LIFETIME_VALUE_BUCKET_NOT_IN_RANGE(35),
    /**
     * <pre>
     * Identifiers not supported for Customer Match attributes. User attributes
     * can only be provided with contact info (email, phone, address) user
     * identifiers.
     * </pre>
     *
     * <code>INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES = 36;</code>
     */
    INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES(36),
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
     * The user list ID provided for the job is invalid.
     * </pre>
     *
     * <code>INVALID_USER_LIST_ID = 3;</code>
     */
    public static final int INVALID_USER_LIST_ID_VALUE = 3;
    /**
     * <pre>
     * Type of the user list is not applicable for the job.
     * </pre>
     *
     * <code>INVALID_USER_LIST_TYPE = 4;</code>
     */
    public static final int INVALID_USER_LIST_TYPE_VALUE = 4;
    /**
     * <pre>
     * Customer is not allowisted for using user ID in upload data.
     * </pre>
     *
     * <code>NOT_ON_ALLOWLIST_FOR_USER_ID = 33;</code>
     */
    public static final int NOT_ON_ALLOWLIST_FOR_USER_ID_VALUE = 33;
    /**
     * <pre>
     * Upload data is not compatible with the upload key type of the associated
     * user list.
     * </pre>
     *
     * <code>INCOMPATIBLE_UPLOAD_KEY_TYPE = 6;</code>
     */
    public static final int INCOMPATIBLE_UPLOAD_KEY_TYPE_VALUE = 6;
    /**
     * <pre>
     * The user identifier is missing valid data.
     * </pre>
     *
     * <code>MISSING_USER_IDENTIFIER = 7;</code>
     */
    public static final int MISSING_USER_IDENTIFIER_VALUE = 7;
    /**
     * <pre>
     * The mobile ID is malformed.
     * </pre>
     *
     * <code>INVALID_MOBILE_ID_FORMAT = 8;</code>
     */
    public static final int INVALID_MOBILE_ID_FORMAT_VALUE = 8;
    /**
     * <pre>
     * Maximum number of user identifiers allowed per request is 100,000.
     * </pre>
     *
     * <code>TOO_MANY_USER_IDENTIFIERS = 9;</code>
     */
    public static final int TOO_MANY_USER_IDENTIFIERS_VALUE = 9;
    /**
     * <pre>
     * Customer is not on the allow-list for store sales direct data.
     * </pre>
     *
     * <code>NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT = 31;</code>
     */
    public static final int NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT_VALUE = 31;
    /**
     * <pre>
     * Customer is not on the allow-list for unified store sales data.
     * </pre>
     *
     * <code>NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES = 32;</code>
     */
    public static final int NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES_VALUE = 32;
    /**
     * <pre>
     * The partner ID in store sales direct metadata is invalid.
     * </pre>
     *
     * <code>INVALID_PARTNER_ID = 11;</code>
     */
    public static final int INVALID_PARTNER_ID_VALUE = 11;
    /**
     * <pre>
     * The data in user identifier should not be encoded.
     * </pre>
     *
     * <code>INVALID_ENCODING = 12;</code>
     */
    public static final int INVALID_ENCODING_VALUE = 12;
    /**
     * <pre>
     * The country code is invalid.
     * </pre>
     *
     * <code>INVALID_COUNTRY_CODE = 13;</code>
     */
    public static final int INVALID_COUNTRY_CODE_VALUE = 13;
    /**
     * <pre>
     * Incompatible user identifier when using third_party_user_id for store
     * sales direct first party data or not using third_party_user_id for store
     * sales third party data.
     * </pre>
     *
     * <code>INCOMPATIBLE_USER_IDENTIFIER = 14;</code>
     */
    public static final int INCOMPATIBLE_USER_IDENTIFIER_VALUE = 14;
    /**
     * <pre>
     * A transaction time in the future is not allowed.
     * </pre>
     *
     * <code>FUTURE_TRANSACTION_TIME = 15;</code>
     */
    public static final int FUTURE_TRANSACTION_TIME_VALUE = 15;
    /**
     * <pre>
     * The conversion_action specified in transaction_attributes is used to
     * report conversions to a conversion action configured in Google Ads. This
     * error indicates there is no such conversion action in the account.
     * </pre>
     *
     * <code>INVALID_CONVERSION_ACTION = 16;</code>
     */
    public static final int INVALID_CONVERSION_ACTION_VALUE = 16;
    /**
     * <pre>
     * Mobile ID is not supported for store sales direct data.
     * </pre>
     *
     * <code>MOBILE_ID_NOT_SUPPORTED = 17;</code>
     */
    public static final int MOBILE_ID_NOT_SUPPORTED_VALUE = 17;
    /**
     * <pre>
     * When a remove-all operation is provided, it has to be the first operation
     * of the operation list.
     * </pre>
     *
     * <code>INVALID_OPERATION_ORDER = 18;</code>
     */
    public static final int INVALID_OPERATION_ORDER_VALUE = 18;
    /**
     * <pre>
     * Mixing creation and removal of offline data in the same job is not
     * allowed.
     * </pre>
     *
     * <code>CONFLICTING_OPERATION = 19;</code>
     */
    public static final int CONFLICTING_OPERATION_VALUE = 19;
    /**
     * <pre>
     * The external update ID already exists.
     * </pre>
     *
     * <code>EXTERNAL_UPDATE_ID_ALREADY_EXISTS = 21;</code>
     */
    public static final int EXTERNAL_UPDATE_ID_ALREADY_EXISTS_VALUE = 21;
    /**
     * <pre>
     * Once the upload job is started, new operations cannot be added.
     * </pre>
     *
     * <code>JOB_ALREADY_STARTED = 22;</code>
     */
    public static final int JOB_ALREADY_STARTED_VALUE = 22;
    /**
     * <pre>
     * Remove operation is not allowed for store sales direct updates.
     * </pre>
     *
     * <code>REMOVE_NOT_SUPPORTED = 23;</code>
     */
    public static final int REMOVE_NOT_SUPPORTED_VALUE = 23;
    /**
     * <pre>
     * Remove-all is not supported for certain offline user data job types.
     * </pre>
     *
     * <code>REMOVE_ALL_NOT_SUPPORTED = 24;</code>
     */
    public static final int REMOVE_ALL_NOT_SUPPORTED_VALUE = 24;
    /**
     * <pre>
     * The SHA256 encoded value is malformed.
     * </pre>
     *
     * <code>INVALID_SHA256_FORMAT = 25;</code>
     */
    public static final int INVALID_SHA256_FORMAT_VALUE = 25;
    /**
     * <pre>
     * The custom key specified is not enabled for the unified store sales
     * upload.
     * </pre>
     *
     * <code>CUSTOM_KEY_DISABLED = 26;</code>
     */
    public static final int CUSTOM_KEY_DISABLED_VALUE = 26;
    /**
     * <pre>
     * The custom key specified is not predefined through the Google Ads UI.
     * </pre>
     *
     * <code>CUSTOM_KEY_NOT_PREDEFINED = 27;</code>
     */
    public static final int CUSTOM_KEY_NOT_PREDEFINED_VALUE = 27;
    /**
     * <pre>
     * The custom key specified is not set in the upload.
     * </pre>
     *
     * <code>CUSTOM_KEY_NOT_SET = 29;</code>
     */
    public static final int CUSTOM_KEY_NOT_SET_VALUE = 29;
    /**
     * <pre>
     * The customer has not accepted the customer data terms in the conversion
     * settings page.
     * </pre>
     *
     * <code>CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS = 30;</code>
     */
    public static final int CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS_VALUE = 30;
    /**
     * <pre>
     * User attributes cannot be uploaded into a user list.
     * </pre>
     *
     * <code>ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST = 34;</code>
     */
    public static final int ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST_VALUE = 34;
    /**
     * <pre>
     * Lifetime value bucket must be a number from 1-10, except for remove
     * operation where 0 will be accepted.
     * </pre>
     *
     * <code>LIFETIME_VALUE_BUCKET_NOT_IN_RANGE = 35;</code>
     */
    public static final int LIFETIME_VALUE_BUCKET_NOT_IN_RANGE_VALUE = 35;
    /**
     * <pre>
     * Identifiers not supported for Customer Match attributes. User attributes
     * can only be provided with contact info (email, phone, address) user
     * identifiers.
     * </pre>
     *
     * <code>INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES = 36;</code>
     */
    public static final int INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES_VALUE = 36;


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
    public static OfflineUserDataJobError valueOf(int value) {
      return forNumber(value);
    }

    /**
     * @param value The numeric wire value of the corresponding enum entry.
     * @return The enum associated with the given numeric wire value.
     */
    public static OfflineUserDataJobError forNumber(int value) {
      switch (value) {
        case 0: return UNSPECIFIED;
        case 1: return UNKNOWN;
        case 3: return INVALID_USER_LIST_ID;
        case 4: return INVALID_USER_LIST_TYPE;
        case 33: return NOT_ON_ALLOWLIST_FOR_USER_ID;
        case 6: return INCOMPATIBLE_UPLOAD_KEY_TYPE;
        case 7: return MISSING_USER_IDENTIFIER;
        case 8: return INVALID_MOBILE_ID_FORMAT;
        case 9: return TOO_MANY_USER_IDENTIFIERS;
        case 31: return NOT_ON_ALLOWLIST_FOR_STORE_SALES_DIRECT;
        case 32: return NOT_ON_ALLOWLIST_FOR_UNIFIED_STORE_SALES;
        case 11: return INVALID_PARTNER_ID;
        case 12: return INVALID_ENCODING;
        case 13: return INVALID_COUNTRY_CODE;
        case 14: return INCOMPATIBLE_USER_IDENTIFIER;
        case 15: return FUTURE_TRANSACTION_TIME;
        case 16: return INVALID_CONVERSION_ACTION;
        case 17: return MOBILE_ID_NOT_SUPPORTED;
        case 18: return INVALID_OPERATION_ORDER;
        case 19: return CONFLICTING_OPERATION;
        case 21: return EXTERNAL_UPDATE_ID_ALREADY_EXISTS;
        case 22: return JOB_ALREADY_STARTED;
        case 23: return REMOVE_NOT_SUPPORTED;
        case 24: return REMOVE_ALL_NOT_SUPPORTED;
        case 25: return INVALID_SHA256_FORMAT;
        case 26: return CUSTOM_KEY_DISABLED;
        case 27: return CUSTOM_KEY_NOT_PREDEFINED;
        case 29: return CUSTOM_KEY_NOT_SET;
        case 30: return CUSTOMER_NOT_ACCEPTED_CUSTOMER_DATA_TERMS;
        case 34: return ATTRIBUTES_NOT_APPLICABLE_FOR_CUSTOMER_MATCH_USER_LIST;
        case 35: return LIFETIME_VALUE_BUCKET_NOT_IN_RANGE;
        case 36: return INCOMPATIBLE_USER_IDENTIFIER_FOR_ATTRIBUTES;
        default: return null;
      }
    }

    public static com.google.protobuf.Internal.EnumLiteMap<OfflineUserDataJobError>
        internalGetValueMap() {
      return internalValueMap;
    }
    private static final com.google.protobuf.Internal.EnumLiteMap<
        OfflineUserDataJobError> internalValueMap =
          new com.google.protobuf.Internal.EnumLiteMap<OfflineUserDataJobError>() {
            public OfflineUserDataJobError findValueByNumber(int number) {
              return OfflineUserDataJobError.forNumber(number);
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
      return com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.getDescriptor().getEnumTypes().get(0);
    }

    private static final OfflineUserDataJobError[] VALUES = values();

    public static OfflineUserDataJobError valueOf(
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

    private OfflineUserDataJobError(int value) {
      this.value = value;
    }

    // @@protoc_insertion_point(enum_scope:google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.OfflineUserDataJobError)
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
    if (!(obj instanceof com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum)) {
      return super.equals(obj);
    }
    com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum other = (com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum) obj;

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

  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(
      java.nio.ByteBuffer data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(
      java.nio.ByteBuffer data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(
      com.google.protobuf.ByteString data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(
      com.google.protobuf.ByteString data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(byte[] data)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(
      byte[] data,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws com.google.protobuf.InvalidProtocolBufferException {
    return PARSER.parseFrom(data, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseDelimitedFrom(java.io.InputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseDelimitedFrom(
      java.io.InputStream input,
      com.google.protobuf.ExtensionRegistryLite extensionRegistry)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseDelimitedWithIOException(PARSER, input, extensionRegistry);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(
      com.google.protobuf.CodedInputStream input)
      throws java.io.IOException {
    return com.google.protobuf.GeneratedMessageV3
        .parseWithIOException(PARSER, input);
  }
  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parseFrom(
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
  public static Builder newBuilder(com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum prototype) {
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
   * Container for enum describing possible offline user data job errors.
   * </pre>
   *
   * Protobuf type {@code google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum}
   */
  public static final class Builder extends
      com.google.protobuf.GeneratedMessageV3.Builder<Builder> implements
      // @@protoc_insertion_point(builder_implements:google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum)
      com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnumOrBuilder {
    public static final com.google.protobuf.Descriptors.Descriptor
        getDescriptor() {
      return com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorProto.internal_static_google_ads_googleads_v6_errors_OfflineUserDataJobErrorEnum_descriptor;
    }

    @java.lang.Override
    protected com.google.protobuf.GeneratedMessageV3.FieldAccessorTable
        internalGetFieldAccessorTable() {
      return com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorProto.internal_static_google_ads_googleads_v6_errors_OfflineUserDataJobErrorEnum_fieldAccessorTable
          .ensureFieldAccessorsInitialized(
              com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.class, com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.Builder.class);
    }

    // Construct using com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.newBuilder()
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
      return com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorProto.internal_static_google_ads_googleads_v6_errors_OfflineUserDataJobErrorEnum_descriptor;
    }

    @java.lang.Override
    public com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum getDefaultInstanceForType() {
      return com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.getDefaultInstance();
    }

    @java.lang.Override
    public com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum build() {
      com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum result = buildPartial();
      if (!result.isInitialized()) {
        throw newUninitializedMessageException(result);
      }
      return result;
    }

    @java.lang.Override
    public com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum buildPartial() {
      com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum result = new com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum(this);
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
      if (other instanceof com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum) {
        return mergeFrom((com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum)other);
      } else {
        super.mergeFrom(other);
        return this;
      }
    }

    public Builder mergeFrom(com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum other) {
      if (other == com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum.getDefaultInstance()) return this;
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
      com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum parsedMessage = null;
      try {
        parsedMessage = PARSER.parsePartialFrom(input, extensionRegistry);
      } catch (com.google.protobuf.InvalidProtocolBufferException e) {
        parsedMessage = (com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum) e.getUnfinishedMessage();
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


    // @@protoc_insertion_point(builder_scope:google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum)
  }

  // @@protoc_insertion_point(class_scope:google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum)
  private static final com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum DEFAULT_INSTANCE;
  static {
    DEFAULT_INSTANCE = new com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum();
  }

  public static com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum getDefaultInstance() {
    return DEFAULT_INSTANCE;
  }

  private static final com.google.protobuf.Parser<OfflineUserDataJobErrorEnum>
      PARSER = new com.google.protobuf.AbstractParser<OfflineUserDataJobErrorEnum>() {
    @java.lang.Override
    public OfflineUserDataJobErrorEnum parsePartialFrom(
        com.google.protobuf.CodedInputStream input,
        com.google.protobuf.ExtensionRegistryLite extensionRegistry)
        throws com.google.protobuf.InvalidProtocolBufferException {
      return new OfflineUserDataJobErrorEnum(input, extensionRegistry);
    }
  };

  public static com.google.protobuf.Parser<OfflineUserDataJobErrorEnum> parser() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.protobuf.Parser<OfflineUserDataJobErrorEnum> getParserForType() {
    return PARSER;
  }

  @java.lang.Override
  public com.google.ads.googleads.v6.errors.OfflineUserDataJobErrorEnum getDefaultInstanceForType() {
    return DEFAULT_INSTANCE;
  }

}

