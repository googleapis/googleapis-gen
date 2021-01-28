<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3beta1/translation_service.proto

namespace Google\Cloud\Translate\V3beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.translation.v3beta1.TranslateTextResponse</code>
 */
class TranslateTextResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Text translation responses with no glossary applied.
     * This field has the same length as
     * [`contents`][google.cloud.translation.v3beta1.TranslateTextRequest.contents].
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.Translation translations = 1;</code>
     */
    private $translations;
    /**
     * Text translation responses if a glossary is provided in the request.
     * This can be the same as
     * [`translations`][google.cloud.translation.v3beta1.TranslateTextResponse.translations] if no terms apply.
     * This field has the same length as
     * [`contents`][google.cloud.translation.v3beta1.TranslateTextRequest.contents].
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.Translation glossary_translations = 3;</code>
     */
    private $glossary_translations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Translate\V3beta1\Translation[]|\Google\Protobuf\Internal\RepeatedField $translations
     *           Text translation responses with no glossary applied.
     *           This field has the same length as
     *           [`contents`][google.cloud.translation.v3beta1.TranslateTextRequest.contents].
     *     @type \Google\Cloud\Translate\V3beta1\Translation[]|\Google\Protobuf\Internal\RepeatedField $glossary_translations
     *           Text translation responses if a glossary is provided in the request.
     *           This can be the same as
     *           [`translations`][google.cloud.translation.v3beta1.TranslateTextResponse.translations] if no terms apply.
     *           This field has the same length as
     *           [`contents`][google.cloud.translation.v3beta1.TranslateTextRequest.contents].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3Beta1\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Text translation responses with no glossary applied.
     * This field has the same length as
     * [`contents`][google.cloud.translation.v3beta1.TranslateTextRequest.contents].
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.Translation translations = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * Text translation responses with no glossary applied.
     * This field has the same length as
     * [`contents`][google.cloud.translation.v3beta1.TranslateTextRequest.contents].
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.Translation translations = 1;</code>
     * @param \Google\Cloud\Translate\V3beta1\Translation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTranslations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Translate\V3beta1\Translation::class);
        $this->translations = $arr;

        return $this;
    }

    /**
     * Text translation responses if a glossary is provided in the request.
     * This can be the same as
     * [`translations`][google.cloud.translation.v3beta1.TranslateTextResponse.translations] if no terms apply.
     * This field has the same length as
     * [`contents`][google.cloud.translation.v3beta1.TranslateTextRequest.contents].
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.Translation glossary_translations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGlossaryTranslations()
    {
        return $this->glossary_translations;
    }

    /**
     * Text translation responses if a glossary is provided in the request.
     * This can be the same as
     * [`translations`][google.cloud.translation.v3beta1.TranslateTextResponse.translations] if no terms apply.
     * This field has the same length as
     * [`contents`][google.cloud.translation.v3beta1.TranslateTextRequest.contents].
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.Translation glossary_translations = 3;</code>
     * @param \Google\Cloud\Translate\V3beta1\Translation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGlossaryTranslations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Translate\V3beta1\Translation::class);
        $this->glossary_translations = $arr;

        return $this;
    }

}

