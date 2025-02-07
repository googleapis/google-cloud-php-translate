<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/automl_translation.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ImportData.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.ImportDataRequest</code>
 */
class ImportDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the dataset. In form of
     * `projects/{project-number-or-id}/locations/{location-id}/datasets/{dataset-id}`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dataset = '';
    /**
     * Required. The config for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DatasetInputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $input_config = null;

    /**
     * @param string                                        $dataset     Required. Name of the dataset. In form of
     *                                                                   `projects/{project-number-or-id}/locations/{location-id}/datasets/{dataset-id}`
     * @param \Google\Cloud\Translate\V3\DatasetInputConfig $inputConfig Required. The config for the input content.
     *
     * @return \Google\Cloud\Translate\V3\ImportDataRequest
     *
     * @experimental
     */
    public static function build(string $dataset, \Google\Cloud\Translate\V3\DatasetInputConfig $inputConfig): self
    {
        return (new self())
            ->setDataset($dataset)
            ->setInputConfig($inputConfig);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $dataset
     *           Required. Name of the dataset. In form of
     *           `projects/{project-number-or-id}/locations/{location-id}/datasets/{dataset-id}`
     *     @type \Google\Cloud\Translate\V3\DatasetInputConfig $input_config
     *           Required. The config for the input content.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AutomlTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the dataset. In form of
     * `projects/{project-number-or-id}/locations/{location-id}/datasets/{dataset-id}`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDataset()
    {
        return $this->dataset;
    }

    /**
     * Required. Name of the dataset. In form of
     * `projects/{project-number-or-id}/locations/{location-id}/datasets/{dataset-id}`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDataset($var)
    {
        GPBUtil::checkString($var, True);
        $this->dataset = $var;

        return $this;
    }

    /**
     * Required. The config for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DatasetInputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Translate\V3\DatasetInputConfig|null
     */
    public function getInputConfig()
    {
        return $this->input_config;
    }

    public function hasInputConfig()
    {
        return isset($this->input_config);
    }

    public function clearInputConfig()
    {
        unset($this->input_config);
    }

    /**
     * Required. The config for the input content.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DatasetInputConfig input_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Translate\V3\DatasetInputConfig $var
     * @return $this
     */
    public function setInputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\DatasetInputConfig::class);
        $this->input_config = $var;

        return $this;
    }

}

