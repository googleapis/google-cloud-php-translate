<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for synchronous romanization.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.RomanizeTextRequest</code>
 */
class RomanizeTextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}/locations/{location-id}` or
     * `projects/{project-number-or-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     *
     * Generated from protobuf field <code>string parent = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The content of the input in string format.
     *
     * Generated from protobuf field <code>repeated string contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $contents;
    /**
     * Optional. The ISO-639 language code of the input text if
     * known, for example, "hi" or "zh". Supported language codes are
     * listed in [Language
     * Support](https://cloud.google.com/translate/docs/languages#roman). If the
     * source language isn't specified, the API attempts to identify the source
     * language automatically and returns the source language for each content in
     * the response.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $source_language_code = '';

    /**
     * @param string   $parent   Required. Project or location to make a call. Must refer to a caller's
     *                           project.
     *
     *                           Format: `projects/{project-number-or-id}/locations/{location-id}` or
     *                           `projects/{project-number-or-id}`.
     *
     *                           For global calls, use `projects/{project-number-or-id}/locations/global` or
     *                           `projects/{project-number-or-id}`. Please see
     *                           {@see TranslationServiceClient::locationName()} for help formatting this field.
     * @param string[] $contents Required. The content of the input in string format.
     *
     * @return \Google\Cloud\Translate\V3\RomanizeTextRequest
     *
     * @experimental
     */
    public static function build(string $parent, array $contents): self
    {
        return (new self())
            ->setParent($parent)
            ->setContents($contents);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Project or location to make a call. Must refer to a caller's
     *           project.
     *           Format: `projects/{project-number-or-id}/locations/{location-id}` or
     *           `projects/{project-number-or-id}`.
     *           For global calls, use `projects/{project-number-or-id}/locations/global` or
     *           `projects/{project-number-or-id}`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $contents
     *           Required. The content of the input in string format.
     *     @type string $source_language_code
     *           Optional. The ISO-639 language code of the input text if
     *           known, for example, "hi" or "zh". Supported language codes are
     *           listed in [Language
     *           Support](https://cloud.google.com/translate/docs/languages#roman). If the
     *           source language isn't specified, the API attempts to identify the source
     *           language automatically and returns the source language for each content in
     *           the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}/locations/{location-id}` or
     * `projects/{project-number-or-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     *
     * Generated from protobuf field <code>string parent = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Project or location to make a call. Must refer to a caller's
     * project.
     * Format: `projects/{project-number-or-id}/locations/{location-id}` or
     * `projects/{project-number-or-id}`.
     * For global calls, use `projects/{project-number-or-id}/locations/global` or
     * `projects/{project-number-or-id}`.
     *
     * Generated from protobuf field <code>string parent = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The content of the input in string format.
     *
     * Generated from protobuf field <code>repeated string contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Required. The content of the input in string format.
     *
     * Generated from protobuf field <code>repeated string contents = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->contents = $arr;

        return $this;
    }

    /**
     * Optional. The ISO-639 language code of the input text if
     * known, for example, "hi" or "zh". Supported language codes are
     * listed in [Language
     * Support](https://cloud.google.com/translate/docs/languages#roman). If the
     * source language isn't specified, the API attempts to identify the source
     * language automatically and returns the source language for each content in
     * the response.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSourceLanguageCode()
    {
        return $this->source_language_code;
    }

    /**
     * Optional. The ISO-639 language code of the input text if
     * known, for example, "hi" or "zh". Supported language codes are
     * listed in [Language
     * Support](https://cloud.google.com/translate/docs/languages#roman). If the
     * source language isn't specified, the API attempts to identify the source
     * language automatically and returns the source language for each content in
     * the response.
     *
     * Generated from protobuf field <code>string source_language_code = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSourceLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_language_code = $var;

        return $this;
    }

}

