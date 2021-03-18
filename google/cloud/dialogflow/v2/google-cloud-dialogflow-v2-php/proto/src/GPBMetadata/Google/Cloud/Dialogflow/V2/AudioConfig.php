<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/audio_config.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2;

class AudioConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
-google/cloud/dialogflow/v2/audio_config.protogoogle.cloud.dialogflow.v2google/api/resource.protogoogle/protobuf/duration.protogoogle/api/annotations.proto"/
SpeechContext
phrases (	
boost ("�
SpeechWordInfo
word (	/
start_offset (2.google.protobuf.Duration-

end_offset (2.google.protobuf.Duration

confidence ("�
InputAudioConfigA
audio_encoding (2).google.cloud.dialogflow.v2.AudioEncoding
sample_rate_hertz (
language_code (	
enable_word_info (
phrase_hints (	BB
speech_contexts (2).google.cloud.dialogflow.v2.SpeechContext
model (	E
model_variant
 (2..google.cloud.dialogflow.v2.SpeechModelVariant
single_utterance (*
"disable_no_speech_recognized_event ("f
VoiceSelectionParams
name (	@
ssml_gender (2+.google.cloud.dialogflow.v2.SsmlVoiceGender"�
SynthesizeSpeechConfig
speaking_rate (
pitch (
volume_gain_db (
effects_profile_id (	?
voice (20.google.cloud.dialogflow.v2.VoiceSelectionParams"�
OutputAudioConfigL
audio_encoding (2/.google.cloud.dialogflow.v2.OutputAudioEncodingB�A
sample_rate_hertz (T
synthesize_speech_config (22.google.cloud.dialogflow.v2.SynthesizeSpeechConfig"g
SpeechToTextConfigQ
speech_model_variant (2..google.cloud.dialogflow.v2.SpeechModelVariantB�A*�
AudioEncoding
AUDIO_ENCODING_UNSPECIFIED 
AUDIO_ENCODING_LINEAR_16
AUDIO_ENCODING_FLAC
AUDIO_ENCODING_MULAW
AUDIO_ENCODING_AMR
AUDIO_ENCODING_AMR_WB
AUDIO_ENCODING_OGG_OPUS)
%AUDIO_ENCODING_SPEEX_WITH_HEADER_BYTE*v
SpeechModelVariant$
 SPEECH_MODEL_VARIANT_UNSPECIFIED 
USE_BEST_AVAILABLE
USE_STANDARD
USE_ENHANCED*�
SsmlVoiceGender!
SSML_VOICE_GENDER_UNSPECIFIED 
SSML_VOICE_GENDER_MALE
SSML_VOICE_GENDER_FEMALE
SSML_VOICE_GENDER_NEUTRAL*�
OutputAudioEncoding%
!OUTPUT_AUDIO_ENCODING_UNSPECIFIED #
OUTPUT_AUDIO_ENCODING_LINEAR_16
OUTPUT_AUDIO_ENCODING_MP3"
OUTPUT_AUDIO_ENCODING_OGG_OPUSB�
com.google.cloud.dialogflow.v2BAudioConfigProtoPZDgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2;dialogflow��DF�Google.Cloud.Dialogflow.V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

