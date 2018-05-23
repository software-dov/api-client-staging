<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/operations.proto

namespace Google\Cloud\Dataproc\V1beta2;

/**
 * The operation state.
 *
 * Protobuf enum <code>Google\Cloud\Dataproc\V1beta2\ClusterOperationStatus\State</code>
 */
class ClusterOperationStatus_State
{
    /**
     * Unused.
     *
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * The operation has been created.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * The operation is running.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * The operation is done; either cancelled or completed.
     *
     * Generated from protobuf enum <code>DONE = 3;</code>
     */
    const DONE = 3;
}

