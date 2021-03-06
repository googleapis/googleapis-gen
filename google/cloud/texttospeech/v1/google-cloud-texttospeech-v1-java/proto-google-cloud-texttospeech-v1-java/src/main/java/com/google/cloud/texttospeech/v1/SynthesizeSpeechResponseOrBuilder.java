// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/texttospeech/v1/cloud_tts.proto

package com.google.cloud.texttospeech.v1;

public interface SynthesizeSpeechResponseOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.texttospeech.v1.SynthesizeSpeechResponse)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * The audio data bytes encoded as specified in the request, including the
   * header for encodings that are wrapped in containers (e.g. MP3, OGG_OPUS).
   * For LINEAR16 audio, we include the WAV header. Note: as
   * with all bytes fields, protobuffers use a pure binary representation,
   * whereas JSON representations use base64.
   * </pre>
   *
   * <code>bytes audio_content = 1;</code>
   * @return The audioContent.
   */
  com.google.protobuf.ByteString getAudioContent();
}
