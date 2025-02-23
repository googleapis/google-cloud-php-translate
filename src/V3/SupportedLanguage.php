<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single supported language response corresponds to information related
 * to one supported language.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.SupportedLanguage</code>
 */
class SupportedLanguage extends \Google\Protobuf\Internal\Message
{
    /**
     * Supported language code, generally consisting of its ISO 639-1
     * identifier, for example, 'en', 'ja'. In certain cases, ISO-639 codes
     * including language and region identifiers are returned (for example,
     * 'zh-TW' and 'zh-CN').
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     */
    protected $language_code = '';
    /**
     * Human-readable name of the language localized in the display language
     * specified in the request.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    protected $display_name = '';
    /**
     * Can be used as a source language.
     *
     * Generated from protobuf field <code>bool support_source = 3;</code>
     */
    protected $support_source = false;
    /**
     * Can be used as a target language.
     *
     * Generated from protobuf field <code>bool support_target = 4;</code>
     */
    protected $support_target = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $language_code
     *           Supported language code, generally consisting of its ISO 639-1
     *           identifier, for example, 'en', 'ja'. In certain cases, ISO-639 codes
     *           including language and region identifiers are returned (for example,
     *           'zh-TW' and 'zh-CN').
     *     @type string $display_name
     *           Human-readable name of the language localized in the display language
     *           specified in the request.
     *     @type bool $support_source
     *           Can be used as a source language.
     *     @type bool $support_target
     *           Can be used as a target language.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Supported language code, generally consisting of its ISO 639-1
     * identifier, for example, 'en', 'ja'. In certain cases, ISO-639 codes
     * including language and region identifiers are returned (for example,
     * 'zh-TW' and 'zh-CN').
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Supported language code, generally consisting of its ISO 639-1
     * identifier, for example, 'en', 'ja'. In certain cases, ISO-639 codes
     * including language and region identifiers are returned (for example,
     * 'zh-TW' and 'zh-CN').
     *
     * Generated from protobuf field <code>string language_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Human-readable name of the language localized in the display language
     * specified in the request.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Human-readable name of the language localized in the display language
     * specified in the request.
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
     * Can be used as a source language.
     *
     * Generated from protobuf field <code>bool support_source = 3;</code>
     * @return bool
     */
    public function getSupportSource()
    {
        return $this->support_source;
    }

    /**
     * Can be used as a source language.
     *
     * Generated from protobuf field <code>bool support_source = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportSource($var)
    {
        GPBUtil::checkBool($var);
        $this->support_source = $var;

        return $this;
    }

    /**
     * Can be used as a target language.
     *
     * Generated from protobuf field <code>bool support_target = 4;</code>
     * @return bool
     */
    public function getSupportTarget()
    {
        return $this->support_target;
    }

    /**
     * Can be used as a target language.
     *
     * Generated from protobuf field <code>bool support_target = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportTarget($var)
    {
        GPBUtil::checkBool($var);
        $this->support_target = $var;

        return $this;
    }

}

