// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datacatalog/v1/search.proto

package com.google.cloud.datacatalog.v1;

/**
 * <pre>
 * The different types of resources that can be returned in search.
 * </pre>
 *
 * Protobuf enum {@code google.cloud.datacatalog.v1.SearchResultType}
 */
public enum SearchResultType
    implements com.google.protobuf.ProtocolMessageEnum {
  /**
   * <pre>
   * Default unknown type.
   * </pre>
   *
   * <code>SEARCH_RESULT_TYPE_UNSPECIFIED = 0;</code>
   */
  SEARCH_RESULT_TYPE_UNSPECIFIED(0),
  /**
   * <pre>
   * An [Entry][google.cloud.datacatalog.v1.Entry].
   * </pre>
   *
   * <code>ENTRY = 1;</code>
   */
  ENTRY(1),
  /**
   * <pre>
   * A [TagTemplate][google.cloud.datacatalog.v1.TagTemplate].
   * </pre>
   *
   * <code>TAG_TEMPLATE = 2;</code>
   */
  TAG_TEMPLATE(2),
  /**
   * <pre>
   * An [EntryGroup][google.cloud.datacatalog.v1.EntryGroup].
   * </pre>
   *
   * <code>ENTRY_GROUP = 3;</code>
   */
  ENTRY_GROUP(3),
  UNRECOGNIZED(-1),
  ;

  /**
   * <pre>
   * Default unknown type.
   * </pre>
   *
   * <code>SEARCH_RESULT_TYPE_UNSPECIFIED = 0;</code>
   */
  public static final int SEARCH_RESULT_TYPE_UNSPECIFIED_VALUE = 0;
  /**
   * <pre>
   * An [Entry][google.cloud.datacatalog.v1.Entry].
   * </pre>
   *
   * <code>ENTRY = 1;</code>
   */
  public static final int ENTRY_VALUE = 1;
  /**
   * <pre>
   * A [TagTemplate][google.cloud.datacatalog.v1.TagTemplate].
   * </pre>
   *
   * <code>TAG_TEMPLATE = 2;</code>
   */
  public static final int TAG_TEMPLATE_VALUE = 2;
  /**
   * <pre>
   * An [EntryGroup][google.cloud.datacatalog.v1.EntryGroup].
   * </pre>
   *
   * <code>ENTRY_GROUP = 3;</code>
   */
  public static final int ENTRY_GROUP_VALUE = 3;


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
  public static SearchResultType valueOf(int value) {
    return forNumber(value);
  }

  /**
   * @param value The numeric wire value of the corresponding enum entry.
   * @return The enum associated with the given numeric wire value.
   */
  public static SearchResultType forNumber(int value) {
    switch (value) {
      case 0: return SEARCH_RESULT_TYPE_UNSPECIFIED;
      case 1: return ENTRY;
      case 2: return TAG_TEMPLATE;
      case 3: return ENTRY_GROUP;
      default: return null;
    }
  }

  public static com.google.protobuf.Internal.EnumLiteMap<SearchResultType>
      internalGetValueMap() {
    return internalValueMap;
  }
  private static final com.google.protobuf.Internal.EnumLiteMap<
      SearchResultType> internalValueMap =
        new com.google.protobuf.Internal.EnumLiteMap<SearchResultType>() {
          public SearchResultType findValueByNumber(int number) {
            return SearchResultType.forNumber(number);
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
    return com.google.cloud.datacatalog.v1.Search.getDescriptor().getEnumTypes().get(0);
  }

  private static final SearchResultType[] VALUES = values();

  public static SearchResultType valueOf(
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

  private SearchResultType(int value) {
    this.value = value;
  }

  // @@protoc_insertion_point(enum_scope:google.cloud.datacatalog.v1.SearchResultType)
}

