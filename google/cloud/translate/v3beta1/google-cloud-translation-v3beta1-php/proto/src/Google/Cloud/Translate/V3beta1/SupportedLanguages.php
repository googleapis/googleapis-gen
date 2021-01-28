<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3beta1/translation_service.proto

namespace Google\Cloud\Translate\V3beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The response message for discovering supported languages.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3beta1.SupportedLanguages</code>
 */
class SupportedLanguages extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of supported language responses. This list contains an entry
     * for each language the Translation API supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.SupportedLanguage languages = 1;</code>
     */
    private $languages;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Translate\V3beta1\SupportedLanguage[]|\Google\Protobuf\Internal\RepeatedField $languages
     *           A list of supported language responses. This list contains an entry
     *           for each language the Translation API supports.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3Beta1\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of supported language responses. This list contains an entry
     * for each language the Translation API supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.SupportedLanguage languages = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * A list of supported language responses. This list contains an entry
     * for each language the Translation API supports.
     *
     * Generated from protobuf field <code>repeated .google.cloud.translation.v3beta1.SupportedLanguage languages = 1;</code>
     * @param \Google\Cloud\Translate\V3beta1\SupportedLanguage[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLanguages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Translate\V3beta1\SupportedLanguage::class);
        $this->languages = $arr;

        return $this;
    }

}

