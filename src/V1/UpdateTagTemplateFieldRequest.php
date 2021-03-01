<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/datacatalog.proto

namespace Google\Cloud\DataCatalog\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [UpdateTagTemplateField][google.cloud.datacatalog.v1.DataCatalog.UpdateTagTemplateField].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.v1.UpdateTagTemplateFieldRequest</code>
 */
class UpdateTagTemplateFieldRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the tag template field. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{tag_template_field_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * Required. The template to update.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $tag_template_field = null;
    /**
     * Optional. The field mask specifies the parts of the template to be updated.
     * Allowed fields:
     *   * `display_name`
     *   * `type.enum_type`
     *   * `is_required`
     * If `update_mask` is not set or empty, all of the allowed fields above will
     * be updated.
     * When updating an enum type, the provided values will be merged with the
     * existing values. Therefore, enum values can only be added, existing enum
     * values cannot be deleted nor renamed. Updating a template field from
     * optional to required is NOT allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the tag template field. Example:
     *           * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{tag_template_field_id}
     *     @type \Google\Cloud\DataCatalog\V1\TagTemplateField $tag_template_field
     *           Required. The template to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Optional. The field mask specifies the parts of the template to be updated.
     *           Allowed fields:
     *             * `display_name`
     *             * `type.enum_type`
     *             * `is_required`
     *           If `update_mask` is not set or empty, all of the allowed fields above will
     *           be updated.
     *           When updating an enum type, the provided values will be merged with the
     *           existing values. Therefore, enum values can only be added, existing enum
     *           values cannot be deleted nor renamed. Updating a template field from
     *           optional to required is NOT allowed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\V1\Datacatalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the tag template field. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{tag_template_field_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the tag template field. Example:
     * * projects/{project_id}/locations/{location}/tagTemplates/{tag_template_id}/fields/{tag_template_field_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The template to update.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\DataCatalog\V1\TagTemplateField|null
     */
    public function getTagTemplateField()
    {
        return isset($this->tag_template_field) ? $this->tag_template_field : null;
    }

    public function hasTagTemplateField()
    {
        return isset($this->tag_template_field);
    }

    public function clearTagTemplateField()
    {
        unset($this->tag_template_field);
    }

    /**
     * Required. The template to update.
     *
     * Generated from protobuf field <code>.google.cloud.datacatalog.v1.TagTemplateField tag_template_field = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\DataCatalog\V1\TagTemplateField $var
     * @return $this
     */
    public function setTagTemplateField($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataCatalog\V1\TagTemplateField::class);
        $this->tag_template_field = $var;

        return $this;
    }

    /**
     * Optional. The field mask specifies the parts of the template to be updated.
     * Allowed fields:
     *   * `display_name`
     *   * `type.enum_type`
     *   * `is_required`
     * If `update_mask` is not set or empty, all of the allowed fields above will
     * be updated.
     * When updating an enum type, the provided values will be merged with the
     * existing values. Therefore, enum values can only be added, existing enum
     * values cannot be deleted nor renamed. Updating a template field from
     * optional to required is NOT allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return isset($this->update_mask) ? $this->update_mask : null;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Optional. The field mask specifies the parts of the template to be updated.
     * Allowed fields:
     *   * `display_name`
     *   * `type.enum_type`
     *   * `is_required`
     * If `update_mask` is not set or empty, all of the allowed fields above will
     * be updated.
     * When updating an enum type, the provided values will be merged with the
     * existing values. Therefore, enum values can only be added, existing enum
     * values cannot be deleted nor renamed. Updating a template field from
     * optional to required is NOT allowed.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

