<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/automl_translation.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ExportData.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.ExportDataRequest</code>
 */
class ExportDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the dataset. In form of
     * `projects/{project-number-or-id}/locations/{location-id}/datasets/{dataset-id}`
     *
     * Generated from protobuf field <code>string dataset = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $dataset = '';
    /**
     * Required. The config for the output content.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DatasetOutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $output_config = null;

    /**
     * @param string                                         $dataset      Required. Name of the dataset. In form of
     *                                                                     `projects/{project-number-or-id}/locations/{location-id}/datasets/{dataset-id}`
     * @param \Google\Cloud\Translate\V3\DatasetOutputConfig $outputConfig Required. The config for the output content.
     *
     * @return \Google\Cloud\Translate\V3\ExportDataRequest
     *
     * @experimental
     */
    public static function build(string $dataset, \Google\Cloud\Translate\V3\DatasetOutputConfig $outputConfig): self
    {
        return (new self())
            ->setDataset($dataset)
            ->setOutputConfig($outputConfig);
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
     *     @type \Google\Cloud\Translate\V3\DatasetOutputConfig $output_config
     *           Required. The config for the output content.
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
     * Required. The config for the output content.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DatasetOutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Translate\V3\DatasetOutputConfig|null
     */
    public function getOutputConfig()
    {
        return $this->output_config;
    }

    public function hasOutputConfig()
    {
        return isset($this->output_config);
    }

    public function clearOutputConfig()
    {
        unset($this->output_config);
    }

    /**
     * Required. The config for the output content.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DatasetOutputConfig output_config = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Translate\V3\DatasetOutputConfig $var
     * @return $this
     */
    public function setOutputConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Translate\V3\DatasetOutputConfig::class);
        $this->output_config = $var;

        return $this;
    }

}

