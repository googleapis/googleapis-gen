// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/video/transcoder/v1/resources.proto

package com.google.cloud.video.transcoder.v1;

public interface EncryptionOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.video.transcoder.v1.Encryption)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. 128 bit encryption key represented as lowercase hexadecimal digits.
   * </pre>
   *
   * <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The key.
   */
  java.lang.String getKey();
  /**
   * <pre>
   * Required. 128 bit encryption key represented as lowercase hexadecimal digits.
   * </pre>
   *
   * <code>string key = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for key.
   */
  com.google.protobuf.ByteString
      getKeyBytes();

  /**
   * <pre>
   * Required. 128 bit Initialization Vector (IV) represented as lowercase hexadecimal
   * digits.
   * </pre>
   *
   * <code>string iv = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The iv.
   */
  java.lang.String getIv();
  /**
   * <pre>
   * Required. 128 bit Initialization Vector (IV) represented as lowercase hexadecimal
   * digits.
   * </pre>
   *
   * <code>string iv = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The bytes for iv.
   */
  com.google.protobuf.ByteString
      getIvBytes();

  /**
   * <pre>
   * Configuration for AES-128 encryption.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.Aes128Encryption aes_128 = 3;</code>
   * @return Whether the aes128 field is set.
   */
  boolean hasAes128();
  /**
   * <pre>
   * Configuration for AES-128 encryption.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.Aes128Encryption aes_128 = 3;</code>
   * @return The aes128.
   */
  com.google.cloud.video.transcoder.v1.Encryption.Aes128Encryption getAes128();
  /**
   * <pre>
   * Configuration for AES-128 encryption.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.Aes128Encryption aes_128 = 3;</code>
   */
  com.google.cloud.video.transcoder.v1.Encryption.Aes128EncryptionOrBuilder getAes128OrBuilder();

  /**
   * <pre>
   * Configuration for SAMPLE-AES encryption.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.SampleAesEncryption sample_aes = 4;</code>
   * @return Whether the sampleAes field is set.
   */
  boolean hasSampleAes();
  /**
   * <pre>
   * Configuration for SAMPLE-AES encryption.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.SampleAesEncryption sample_aes = 4;</code>
   * @return The sampleAes.
   */
  com.google.cloud.video.transcoder.v1.Encryption.SampleAesEncryption getSampleAes();
  /**
   * <pre>
   * Configuration for SAMPLE-AES encryption.
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.SampleAesEncryption sample_aes = 4;</code>
   */
  com.google.cloud.video.transcoder.v1.Encryption.SampleAesEncryptionOrBuilder getSampleAesOrBuilder();

  /**
   * <pre>
   * Configuration for MPEG Common Encryption (MPEG-CENC).
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.MpegCommonEncryption mpeg_cenc = 5;</code>
   * @return Whether the mpegCenc field is set.
   */
  boolean hasMpegCenc();
  /**
   * <pre>
   * Configuration for MPEG Common Encryption (MPEG-CENC).
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.MpegCommonEncryption mpeg_cenc = 5;</code>
   * @return The mpegCenc.
   */
  com.google.cloud.video.transcoder.v1.Encryption.MpegCommonEncryption getMpegCenc();
  /**
   * <pre>
   * Configuration for MPEG Common Encryption (MPEG-CENC).
   * </pre>
   *
   * <code>.google.cloud.video.transcoder.v1.Encryption.MpegCommonEncryption mpeg_cenc = 5;</code>
   */
  com.google.cloud.video.transcoder.v1.Encryption.MpegCommonEncryptionOrBuilder getMpegCencOrBuilder();

  public com.google.cloud.video.transcoder.v1.Encryption.EncryptionModeCase getEncryptionModeCase();
}
