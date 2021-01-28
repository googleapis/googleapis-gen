<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3beta1/translation_service.proto

namespace Google\Cloud\Translate\V3beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for discovering supported languages.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3beta1.GetSupportedLanguagesRequest</code>
 */
class GetSupportedLanguagesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-id}` or
     * `projects/{project-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-id}/locations/global` or
     * `projects/{project-id}`.
     * Non-global location is required for AutoML models.
     * Only models within the same region (have same location-id) can be used,
     * otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. The language to use to return localized, human readable names
     * of supported languages. If missing, then display names are not returned
     * in a response.
     *
     * Generated from protobuf field <code>string display_language_code = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_language_code = '';
    /**
     * Optional. Get supported languages of this model.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-id}/locations/{location-id}/models/general/nmt`,
     *   `projects/{project-id}/locations/{location-id}/models/general/base`
     * Returns languages supported by the specified model.
     * If missing, we get supported languages of Google general base (PBMT) model.
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $model = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Project or location to make a call. Must refer to a caller's
     *           project.
     *           Format: `projects/{project-id}` or
     *           `projects/{project-id}/locations/{location-id}`.
     *           For global calls, use `projects/{project-id}/locations/global` or
     *           `projects/{project-id}`.
     *           Non-global location is required for AutoML models.
     *           Only models within the same region (have same location-id) can be used,
     *           otherwise an INVALID_ARGUMENT (400) error is returned.
     *     @type string $display_language_code
     *           Optional. The language to use to return localized, human readable names
     *           of supported languages. If missing, then display names are not returned
     *           in a response.
     *     @type string $model
     *           Optional. Get supported languages of this model.
     *           The format depends on model type:
     *           - AutoML Translation models:
     *             `projects/{project-id}/locations/{location-id}/models/{model-id}`
     *           - General (built-in) models:
     *             `projects/{project-id}/locations/{location-id}/models/general/nmt`,
     *             `projects/{project-id}/locations/{location-id}/models/general/base`
     *           Returns languages supported by the specified model.
     *           If missing, we get supported languages of Google general base (PBMT) model.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3Beta1\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-id}` or
     * `projects/{project-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-id}/locations/global` or
     * `projects/{project-id}`.
     * Non-global location is required for AutoML models.
     * Only models within the same region (have same location-id) can be used,
     * otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-id}` or
     * `projects/{project-id}/locations/{location-id}`.
     * For global calls, use `projects/{project-id}/locations/global` or
     * `projects/{project-id}`.
     * Non-global location is required for AutoML models.
     * Only models within the same region (have same location-id) can be used,
     * otherwise an INVALID_ARGUMENT (400) error is returned.
     *
     * Generated from protobuf field <code>string parent = 3 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional. The language to use to return localized, human readable names
     * of supported languages. If missing, then display names are not returned
     * in a response.
     *
     * Generated from protobuf field <code>string display_language_code = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayLanguageCode()
    {
        return $this->display_language_code;
    }

    /**
     * Optional. The language to use to return localized, human readable names
     * of supported languages. If missing, then display names are not returned
     * in a response.
     *
     * Generated from protobuf field <code>string display_language_code = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_language_code = $var;

        return $this;
    }

    /**
     * Optional. Get supported languages of this model.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-id}/locations/{location-id}/models/general/nmt`,
     *   `projects/{project-id}/locations/{location-id}/models/general/base`
     * Returns languages supported by the specified model.
     * If missing, we get supported languages of Google general base (PBMT) model.
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Optional. Get supported languages of this model.
     * The format depends on model type:
     * - AutoML Translation models:
     *   `projects/{project-id}/locations/{location-id}/models/{model-id}`
     * - General (built-in) models:
     *   `projects/{project-id}/locations/{location-id}/models/general/nmt`,
     *   `projects/{project-id}/locations/{location-id}/models/general/base`
     * Returns languages supported by the specified model.
     * If missing, we get supported languages of Google general base (PBMT) model.
     *
     * Generated from protobuf field <code>string model = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->model = $var;

        return $this;
    }

}

