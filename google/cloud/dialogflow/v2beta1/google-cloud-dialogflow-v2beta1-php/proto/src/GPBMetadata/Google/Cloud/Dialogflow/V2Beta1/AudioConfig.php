<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/audio_config.proto

namespace GPBMetadata\Google\Cloud\Dialogflow\V2Beta1;

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
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
2google/cloud/dialogflow/v2beta1/audio_config.protogoogle.cloud.dialogflow.v2beta1google/api/resource.protogoogle/protobuf/duration.proto google/protobuf/field_mask.protogoogle/api/annotations.proto"/
SpeechContext
phrases (	
boost ("�
SpeechWordInfo
word (	/
start_offset (2.google.protobuf.Duration-

end_offset (2.google.protobuf.Duration

confidence ("�
InputAudioConfigF
audio_encoding (2..google.cloud.dialogflow.v2beta1.AudioEncoding
sample_rate_hertz (
language_code (	
enable_word_info (
phrase_hints (	BG
speech_contexts (2..google.cloud.dialogflow.v2beta1.SpeechContext
model (	J
model_variant
 (23.google.cloud.dialogflow.v2beta1.SpeechModelVariant
single_utterance ("k
VoiceSelectionParams
name (	E
ssml_gender (20.google.cloud.dialogflow.v2beta1.SsmlVoiceGender"�
SynthesizeSpeechConfig
speaking_rate (
pitch (
volume_gain_db (
effects_profile_id (	D
voice (25.google.cloud.dialogflow.v2beta1.VoiceSelectionParams"�
OutputAudioConfigQ
audio_encoding (24.google.cloud.dialogflow.v2beta1.OutputAudioEncodingB�A
sample_rate_hertz (Y
synthesize_speech_config (27.google.cloud.dialogflow.v2beta1.SynthesizeSpeechConfig"Z
TelephonyDtmfEventsC
dtmf_events (2..google.cloud.dialogflow.v2beta1.TelephonyDtmf*�
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
OUTPUT_AUDIO_ENCODING_OGG_OPUS*�
TelephonyDtmf
TELEPHONY_DTMF_UNSPECIFIED 
DTMF_ONE
DTMF_TWO

DTMF_THREE
	DTMF_FOUR
	DTMF_FIVE
DTMF_SIX

DTMF_SEVEN

DTMF_EIGHT
	DTMF_NINE	
	DTMF_ZERO


DTMF_A

DTMF_B

DTMF_C

DTMF_D
	DTMF_STAR

DTMF_POUNDB�
#com.google.cloud.dialogflow.v2beta1BAudioConfigProtoPZIgoogle.golang.org/genproto/googleapis/cloud/dialogflow/v2beta1;dialogflow��DF�Google.Cloud.Dialogflow.V2beta1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

