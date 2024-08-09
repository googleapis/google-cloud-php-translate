<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/automl_translation.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A sentence pair.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.Example</code>
 */
class Example extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the example, in form of
     * `projects/{project-number-or-id}/locations/{location_id}/datasets/{dataset_id}/examples/{example_id}'
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Sentence in source language.
     *
     * Generated from protobuf field <code>string source_text = 2;</code>
     */
    private $source_text = '';
    /**
     * Sentence in target language.
     *
     * Generated from protobuf field <code>string target_text = 3;</code>
     */
    private $target_text = '';
    /**
     * Output only. Usage of the sentence pair. Options are TRAIN|VALIDATION|TEST.
     *
     * Generated from protobuf field <code>string usage = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $usage = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the example, in form of
     *           `projects/{project-number-or-id}/locations/{location_id}/datasets/{dataset_id}/examples/{example_id}'
     *     @type string $source_text
     *           Sentence in source language.
     *     @type string $target_text
     *           Sentence in target language.
     *     @type string $usage
     *           Output only. Usage of the sentence pair. Options are TRAIN|VALIDATION|TEST.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AutomlTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the example, in form of
     * `projects/{project-number-or-id}/locations/{location_id}/datasets/{dataset_id}/examples/{example_id}'
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the example, in form of
     * `projects/{project-number-or-id}/locations/{location_id}/datasets/{dataset_id}/examples/{example_id}'
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Sentence in source language.
     *
     * Generated from protobuf field <code>string source_text = 2;</code>
     * @return string
     */
    public function getSourceText()
    {
        return $this->source_text;
    }

    /**
     * Sentence in source language.
     *
     * Generated from protobuf field <code>string source_text = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceText($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_text = $var;

        return $this;
    }

    /**
     * Sentence in target language.
     *
     * Generated from protobuf field <code>string target_text = 3;</code>
     * @return string
     */
    public function getTargetText()
    {
        return $this->target_text;
    }

    /**
     * Sentence in target language.
     *
     * Generated from protobuf field <code>string target_text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetText($var)
    {
        GPBUtil::checkString($var, True);
        $this->target_text = $var;

        return $this;
    }

    /**
     * Output only. Usage of the sentence pair. Options are TRAIN|VALIDATION|TEST.
     *
     * Generated from protobuf field <code>string usage = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUsage()
    {
        return $this->usage;
    }

    /**
     * Output only. Usage of the sentence pair. Options are TRAIN|VALIDATION|TEST.
     *
     * Generated from protobuf field <code>string usage = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUsage($var)
    {
        GPBUtil::checkString($var, True);
        $this->usage = $var;

        return $this;
    }

}

