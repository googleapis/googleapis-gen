// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/datacatalog/v1/table_spec.proto

package com.google.cloud.datacatalog.v1;

/**
 * <pre>
 * Table source type.
 * </pre>
 *
 * Protobuf enum {@code google.cloud.datacatalog.v1.TableSourceType}
 */
public enum TableSourceType
    implements com.google.protobuf.ProtocolMessageEnum {
  /**
   * <pre>
   * Default unknown type.
   * </pre>
   *
   * <code>TABLE_SOURCE_TYPE_UNSPECIFIED = 0;</code>
   */
  TABLE_SOURCE_TYPE_UNSPECIFIED(0),
  /**
   * <pre>
   * Table view.
   * </pre>
   *
   * <code>BIGQUERY_VIEW = 2;</code>
   */
  BIGQUERY_VIEW(2),
  /**
   * <pre>
   * BigQuery native table.
   * </pre>
   *
   * <code>BIGQUERY_TABLE = 5;</code>
   */
  BIGQUERY_TABLE(5),
  UNRECOGNIZED(-1),
  ;

  /**
   * <pre>
   * Default unknown type.
   * </pre>
   *
   * <code>TABLE_SOURCE_TYPE_UNSPECIFIED = 0;</code>
   */
  public static final int TABLE_SOURCE_TYPE_UNSPECIFIED_VALUE = 0;
  /**
   * <pre>
   * Table view.
   * </pre>
   *
   * <code>BIGQUERY_VIEW = 2;</code>
   */
  public static final int BIGQUERY_VIEW_VALUE = 2;
  /**
   * <pre>
   * BigQuery native table.
   * </pre>
   *
   * <code>BIGQUERY_TABLE = 5;</code>
   */
  public static final int BIGQUERY_TABLE_VALUE = 5;


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
  public static TableSourceType valueOf(int value) {
    return forNumber(value);
  }

  /**
   * @param value The numeric wire value of the corresponding enum entry.
   * @return The enum associated with the given numeric wire value.
   */
  public static TableSourceType forNumber(int value) {
    switch (value) {
      case 0: return TABLE_SOURCE_TYPE_UNSPECIFIED;
      case 2: return BIGQUERY_VIEW;
      case 5: return BIGQUERY_TABLE;
      default: return null;
    }
  }

  public static com.google.protobuf.Internal.EnumLiteMap<TableSourceType>
      internalGetValueMap() {
    return internalValueMap;
  }
  private static final com.google.protobuf.Internal.EnumLiteMap<
      TableSourceType> internalValueMap =
        new com.google.protobuf.Internal.EnumLiteMap<TableSourceType>() {
          public TableSourceType findValueByNumber(int number) {
            return TableSourceType.forNumber(number);
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
    return com.google.cloud.datacatalog.v1.TableSpecOuterClass.getDescriptor().getEnumTypes().get(0);
  }

  private static final TableSourceType[] VALUES = values();

  public static TableSourceType valueOf(
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

  private TableSourceType(int value) {
    this.value = value;
  }

  // @@protoc_insertion_point(enum_scope:google.cloud.datacatalog.v1.TableSourceType)
}

