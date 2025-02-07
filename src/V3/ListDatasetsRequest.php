<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/automl_translation.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListDatasets.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.ListDatasetsRequest</code>
 */
class ListDatasetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the parent project. In form of
     * `projects/{project-number-or-id}/locations/{location-id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Optional. Requested page size. The server can return fewer results than
     * requested.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained from next_page_token field in the response of a
     * ListDatasets call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';

    /**
     * @param string $parent Required. Name of the parent project. In form of
     *                       `projects/{project-number-or-id}/locations/{location-id}`
     *                       Please see {@see TranslationServiceClient::locationName()} for help formatting this field.
     *
     * @return \Google\Cloud\Translate\V3\ListDatasetsRequest
     *
     * @experimental
     */
    public static function build(string $parent): self
    {
        return (new self())
            ->setParent($parent);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Name of the parent project. In form of
     *           `projects/{project-number-or-id}/locations/{location-id}`
     *     @type int $page_size
     *           Optional. Requested page size. The server can return fewer results than
     *           requested.
     *     @type string $page_token
     *           Optional. A token identifying a page of results for the server to return.
     *           Typically obtained from next_page_token field in the response of a
     *           ListDatasets call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\AutomlTranslation::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the parent project. In form of
     * `projects/{project-number-or-id}/locations/{location-id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Name of the parent project. In form of
     * `projects/{project-number-or-id}/locations/{location-id}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional. Requested page size. The server can return fewer results than
     * requested.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. The server can return fewer results than
     * requested.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained from next_page_token field in the response of a
     * ListDatasets call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token identifying a page of results for the server to return.
     * Typically obtained from next_page_token field in the response of a
     * ListDatasets call.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

