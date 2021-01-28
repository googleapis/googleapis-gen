// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/privacy/dlp/v2/dlp.proto

package com.google.privacy.dlp.v2;

public interface CharacterMaskConfigOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.privacy.dlp.v2.CharacterMaskConfig)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Character to use to mask the sensitive values&amp;mdash;for example, `*` for an
   * alphabetic string such as a name, or `0` for a numeric string such as ZIP
   * code or credit card number. This string must have a length of 1. If not
   * supplied, this value defaults to `*` for strings, and `0` for digits.
   * </pre>
   *
   * <code>string masking_character = 1;</code>
   * @return The maskingCharacter.
   */
  java.lang.String getMaskingCharacter();
  /**
   * <pre>
   * Character to use to mask the sensitive values&amp;mdash;for example, `*` for an
   * alphabetic string such as a name, or `0` for a numeric string such as ZIP
   * code or credit card number. This string must have a length of 1. If not
   * supplied, this value defaults to `*` for strings, and `0` for digits.
   * </pre>
   *
   * <code>string masking_character = 1;</code>
   * @return The bytes for maskingCharacter.
   */
  com.google.protobuf.ByteString
      getMaskingCharacterBytes();

  /**
   * <pre>
   * Number of characters to mask. If not set, all matching chars will be
   * masked. Skipped characters do not count towards this tally.
   * </pre>
   *
   * <code>int32 number_to_mask = 2;</code>
   * @return The numberToMask.
   */
  int getNumberToMask();

  /**
   * <pre>
   * Mask characters in reverse order. For example, if `masking_character` is
   * `0`, `number_to_mask` is `14`, and `reverse_order` is `false`, then the
   * input string `1234-5678-9012-3456` is masked as `00000000000000-3456`.
   * If `masking_character` is `*`, `number_to_mask` is `3`, and `reverse_order`
   * is `true`, then the string `12345` is masked as `12***`.
   * </pre>
   *
   * <code>bool reverse_order = 3;</code>
   * @return The reverseOrder.
   */
  boolean getReverseOrder();

  /**
   * <pre>
   * When masking a string, items in this list will be skipped when replacing
   * characters. For example, if the input string is `555-555-5555` and you
   * instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
   * returns `***-**5-5555`.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2.CharsToIgnore characters_to_ignore = 4;</code>
   */
  java.util.List<com.google.privacy.dlp.v2.CharsToIgnore> 
      getCharactersToIgnoreList();
  /**
   * <pre>
   * When masking a string, items in this list will be skipped when replacing
   * characters. For example, if the input string is `555-555-5555` and you
   * instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
   * returns `***-**5-5555`.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2.CharsToIgnore characters_to_ignore = 4;</code>
   */
  com.google.privacy.dlp.v2.CharsToIgnore getCharactersToIgnore(int index);
  /**
   * <pre>
   * When masking a string, items in this list will be skipped when replacing
   * characters. For example, if the input string is `555-555-5555` and you
   * instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
   * returns `***-**5-5555`.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2.CharsToIgnore characters_to_ignore = 4;</code>
   */
  int getCharactersToIgnoreCount();
  /**
   * <pre>
   * When masking a string, items in this list will be skipped when replacing
   * characters. For example, if the input string is `555-555-5555` and you
   * instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
   * returns `***-**5-5555`.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2.CharsToIgnore characters_to_ignore = 4;</code>
   */
  java.util.List<? extends com.google.privacy.dlp.v2.CharsToIgnoreOrBuilder> 
      getCharactersToIgnoreOrBuilderList();
  /**
   * <pre>
   * When masking a string, items in this list will be skipped when replacing
   * characters. For example, if the input string is `555-555-5555` and you
   * instruct Cloud DLP to skip `-` and mask 5 characters with `*`, Cloud DLP
   * returns `***-**5-5555`.
   * </pre>
   *
   * <code>repeated .google.privacy.dlp.v2.CharsToIgnore characters_to_ignore = 4;</code>
   */
  com.google.privacy.dlp.v2.CharsToIgnoreOrBuilder getCharactersToIgnoreOrBuilder(
      int index);
}
