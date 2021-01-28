// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: google/cloud/texttospeech/v1beta1/cloud_tts.proto

package com.google.cloud.texttospeech.v1beta1;

public interface SynthesizeSpeechRequestOrBuilder extends
    // @@protoc_insertion_point(interface_extends:google.cloud.texttospeech.v1beta1.SynthesizeSpeechRequest)
    com.google.protobuf.MessageOrBuilder {

  /**
   * <pre>
   * Required. The Synthesizer requires either plain text or SSML as input.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.SynthesisInput input = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the input field is set.
   */
  boolean hasInput();
  /**
   * <pre>
   * Required. The Synthesizer requires either plain text or SSML as input.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.SynthesisInput input = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The input.
   */
  com.google.cloud.texttospeech.v1beta1.SynthesisInput getInput();
  /**
   * <pre>
   * Required. The Synthesizer requires either plain text or SSML as input.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.SynthesisInput input = 1 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.texttospeech.v1beta1.SynthesisInputOrBuilder getInputOrBuilder();

  /**
   * <pre>
   * Required. The desired voice of the synthesized audio.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.VoiceSelectionParams voice = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the voice field is set.
   */
  boolean hasVoice();
  /**
   * <pre>
   * Required. The desired voice of the synthesized audio.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.VoiceSelectionParams voice = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The voice.
   */
  com.google.cloud.texttospeech.v1beta1.VoiceSelectionParams getVoice();
  /**
   * <pre>
   * Required. The desired voice of the synthesized audio.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.VoiceSelectionParams voice = 2 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.texttospeech.v1beta1.VoiceSelectionParamsOrBuilder getVoiceOrBuilder();

  /**
   * <pre>
   * Required. The configuration of the synthesized audio.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.AudioConfig audio_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return Whether the audioConfig field is set.
   */
  boolean hasAudioConfig();
  /**
   * <pre>
   * Required. The configuration of the synthesized audio.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.AudioConfig audio_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   * @return The audioConfig.
   */
  com.google.cloud.texttospeech.v1beta1.AudioConfig getAudioConfig();
  /**
   * <pre>
   * Required. The configuration of the synthesized audio.
   * </pre>
   *
   * <code>.google.cloud.texttospeech.v1beta1.AudioConfig audio_config = 3 [(.google.api.field_behavior) = REQUIRED];</code>
   */
  com.google.cloud.texttospeech.v1beta1.AudioConfigOrBuilder getAudioConfigOrBuilder();

  /**
   * <pre>
   * Whether and what timepoints should be returned in the response.
   * </pre>
   *
   * <code>repeated .google.cloud.texttospeech.v1beta1.SynthesizeSpeechRequest.TimepointType enable_time_pointing = 4;</code>
   * @return A list containing the enableTimePointing.
   */
  java.util.List<com.google.cloud.texttospeech.v1beta1.SynthesizeSpeechRequest.TimepointType> getEnableTimePointingList();
  /**
   * <pre>
   * Whether and what timepoints should be returned in the response.
   * </pre>
   *
   * <code>repeated .google.cloud.texttospeech.v1beta1.SynthesizeSpeechRequest.TimepointType enable_time_pointing = 4;</code>
   * @return The count of enableTimePointing.
   */
  int getEnableTimePointingCount();
  /**
   * <pre>
   * Whether and what timepoints should be returned in the response.
   * </pre>
   *
   * <code>repeated .google.cloud.texttospeech.v1beta1.SynthesizeSpeechRequest.TimepointType enable_time_pointing = 4;</code>
   * @param index The index of the element to return.
   * @return The enableTimePointing at the given index.
   */
  com.google.cloud.texttospeech.v1beta1.SynthesizeSpeechRequest.TimepointType getEnableTimePointing(int index);
  /**
   * <pre>
   * Whether and what timepoints should be returned in the response.
   * </pre>
   *
   * <code>repeated .google.cloud.texttospeech.v1beta1.SynthesizeSpeechRequest.TimepointType enable_time_pointing = 4;</code>
   * @return A list containing the enum numeric values on the wire for enableTimePointing.
   */
  java.util.List<java.lang.Integer>
  getEnableTimePointingValueList();
  /**
   * <pre>
   * Whether and what timepoints should be returned in the response.
   * </pre>
   *
   * <code>repeated .google.cloud.texttospeech.v1beta1.SynthesizeSpeechRequest.TimepointType enable_time_pointing = 4;</code>
   * @param index The index of the value to return.
   * @return The enum numeric value on the wire of enableTimePointing at the given index.
   */
  int getEnableTimePointingValue(int index);
}
