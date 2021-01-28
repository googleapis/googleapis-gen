<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1beta1/tags.proto

namespace Google\Cloud\DataCatalog\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A tag template defines a tag, which can have one or more typed fields.
 * The template is used to create and attach the tag to GCP resources.
 * [Tag template
 * roles](https://cloud.google.com/iam/docs/understanding-roles#data-catalog-roles)
 * provide permissions to create, edit, and use the template. See, for example,
 * the [TagTemplate
 * User](https://cloud.google.com/data-catalog/docs/how-to/template-user) role,
 * which includes permission to use the tag template to tag resources.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1beta1.TagTemplate</code>
 */
class TagTemplate extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the tag template in URL format. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}
     * Note that this TagTemplate and its child resources may not actually be
     * stored in the location in this name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The display name for this template. Defaults to an empty string.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Required. Map of tag template field IDs to the settings for the field.
     * This map is an exhaustive list of the allowed fields. This map must contain
     * at least one field and at most 500 fields.
     * The keys to this map are tag template field IDs. Field IDs can contain
     * letters (both uppercase and lowercase), numbers (0-9) and underscores (_).
     * Field IDs must be at least 1 character long and at most
     * 64 characters long. Field IDs must start with a letter or underscore.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1beta1.TagTemplateField> fields = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $fields;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the tag template in URL format. Example:
     *           * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}
     *           Note that this TagTemplate and its child resources may not actually be
     *           stored in the location in this name.
     *     @type string $display_name
     *           The display name for this template. Defaults to an empty string.
     *     @type array|\Google\Protobuf\Internal\MapField $fields
     *           Required. Map of tag template field IDs to the settings for the field.
     *           This map is an exhaustive list of the allowed fields. This map must contain
     *           at least one field and at most 500 fields.
     *           The keys to this map are tag template field IDs. Field IDs can contain
     *           letters (both uppercase and lowercase), numbers (0-9) and underscores (_).
     *           Field IDs must be at least 1 character long and at most
     *           64 characters long. Field IDs must start with a letter or underscore.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1Beta1\Tags::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the tag template in URL format. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}
     * Note that this TagTemplate and its child resources may not actually be
     * stored in the location in this name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the tag template in URL format. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}
     * Note that this TagTemplate and its child resources may not actually be
     * stored in the location in this name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The display name for this template. Defaults to an empty string.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * The display name for this template. Defaults to an empty string.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Required. Map of tag template field IDs to the settings for the field.
     * This map is an exhaustive list of the allowed fields. This map must contain
     * at least one field and at most 500 fields.
     * The keys to this map are tag template field IDs. Field IDs can contain
     * letters (both uppercase and lowercase), numbers (0-9) and underscores (_).
     * Field IDs must be at least 1 character long and at most
     * 64 characters long. Field IDs must start with a letter or underscore.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1beta1.TagTemplateField> fields = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Required. Map of tag template field IDs to the settings for the field.
     * This map is an exhaustive list of the allowed fields. This map must contain
     * at least one field and at most 500 fields.
     * The keys to this map are tag template field IDs. Field IDs can contain
     * letters (both uppercase and lowercase), numbers (0-9) and underscores (_).
     * Field IDs must be at least 1 character long and at most
     * 64 characters long. Field IDs must start with a letter or underscore.
     *
     * Generated from protobuf field <code>map<string, .google.cloud.datacatalog.v1beta1.TagTemplateField> fields = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\V1beta1\TagTemplateField::class);
        $this->fields = $arr;

        return $this;
    }

}

