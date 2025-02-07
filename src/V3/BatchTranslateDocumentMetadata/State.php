<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3\BatchTranslateDocumentMetadata;

use UnexpectedValueException;

/**
 * State of the job.
 *
 * Protobuf type <code>google.cloud.translation.v3.BatchTranslateDocumentMetadata.State</code>
 */
class State
{
    /**
     * Invalid.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * Request is being processed.
     *
     * Generated from protobuf enum <code>RUNNING = 1;</code>
     */
    const RUNNING = 1;
    /**
     * The batch is processed, and at least one item was successfully processed.
     *
     * Generated from protobuf enum <code>SUCCEEDED = 2;</code>
     */
    const SUCCEEDED = 2;
    /**
     * The batch is done and no item was successfully processed.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * Request is in the process of being canceled after caller invoked
     * longrunning.Operations.CancelOperation on the request id.
     *
     * Generated from protobuf enum <code>CANCELLING = 4;</code>
     */
    const CANCELLING = 4;
    /**
     * The batch is done after the user has called the
     * longrunning.Operations.CancelOperation. Any records processed before the
     * cancel command are output as specified in the request.
     *
     * Generated from protobuf enum <code>CANCELLED = 5;</code>
     */
    const CANCELLED = 5;

    private static $valueToName = [
        self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED',
        self::RUNNING => 'RUNNING',
        self::SUCCEEDED => 'SUCCEEDED',
        self::FAILED => 'FAILED',
        self::CANCELLING => 'CANCELLING',
        self::CANCELLED => 'CANCELLED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


