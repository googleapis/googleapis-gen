// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/devtools/containeranalysis/v1beta1/package/package.proto

package io.grafeas.v1beta1.pkg;

/**
 * <pre>
 * Instruction set architectures supported by various package managers.
 * </pre>
 *
 * Protobuf enum {@code grafeas.v1beta1.package.Architecture}
 */
public enum Architecture
    implements com.google.protobuf.ProtocolMessageEnum {
  /**
   * <pre>
   * Unknown architecture.
   * </pre>
   *
   * <code>ARCHITECTURE_UNSPECIFIED = 0;</code>
   */
  ARCHITECTURE_UNSPECIFIED(0),
  /**
   * <pre>
   * X86 architecture.
   * </pre>
   *
   * <code>X86 = 1;</code>
   */
  X86(1),
  /**
   * <pre>
   * X64 architecture.
   * </pre>
   *
   * <code>X64 = 2;</code>
   */
  X64(2),
  UNRECOGNIZED(-1),
  ;

  /**
   * <pre>
   * Unknown architecture.
   * </pre>
   *
   * <code>ARCHITECTURE_UNSPECIFIED = 0;</code>
   */
  public static final int ARCHITECTURE_UNSPECIFIED_VALUE = 0;
  /**
   * <pre>
   * X86 architecture.
   * </pre>
   *
   * <code>X86 = 1;</code>
   */
  public static final int X86_VALUE = 1;
  /**
   * <pre>
   * X64 architecture.
   * </pre>
   *
   * <code>X64 = 2;</code>
   */
  public static final int X64_VALUE = 2;


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
  public static Architecture valueOf(int value) {
    return forNumber(value);
  }

  /**
   * @param value The numeric wire value of the corresponding enum entry.
   * @return The enum associated with the given numeric wire value.
   */
  public static Architecture forNumber(int value) {
    switch (value) {
      case 0: return ARCHITECTURE_UNSPECIFIED;
      case 1: return X86;
      case 2: return X64;
      default: return null;
    }
  }

  public static com.google.protobuf.Internal.EnumLiteMap<Architecture>
      internalGetValueMap() {
    return internalValueMap;
  }
  private static final com.google.protobuf.Internal.EnumLiteMap<
      Architecture> internalValueMap =
        new com.google.protobuf.Internal.EnumLiteMap<Architecture>() {
          public Architecture findValueByNumber(int number) {
            return Architecture.forNumber(number);
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
    return io.grafeas.v1beta1.pkg.PackageOuterClass.getDescriptor().getEnumTypes().get(0);
  }

  private static final Architecture[] VALUES = values();

  public static Architecture valueOf(
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

  private Architecture(int value) {
    this.value = value;
  }

  // @@protoc_insertion_point(enum_scope:grafeas.v1beta1.package.Architecture)
}

