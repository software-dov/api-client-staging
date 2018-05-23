<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/jobs.proto

namespace Google\Cloud\Dataproc\V1beta2;

/**
 * The job state.
 *
 * Protobuf enum <code>Google\Cloud\Dataproc\V1beta2\JobStatus\State</code>
 */
class JobStatus_State
{
    /**
     * The job state is unknown.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The job is pending; it has been submitted, but is not yet running.
     *
     * Generated from protobuf enum <code>PENDING = 1;</code>
     */
    const PENDING = 1;
    /**
     * Job has been received by the service and completed initial setup;
     * it will soon be submitted to the cluster.
     *
     * Generated from protobuf enum <code>SETUP_DONE = 8;</code>
     */
    const SETUP_DONE = 8;
    /**
     * The job is running on the cluster.
     *
     * Generated from protobuf enum <code>RUNNING = 2;</code>
     */
    const RUNNING = 2;
    /**
     * A CancelJob request has been received, but is pending.
     *
     * Generated from protobuf enum <code>CANCEL_PENDING = 3;</code>
     */
    const CANCEL_PENDING = 3;
    /**
     * Transient in-flight resources have been canceled, and the request to
     * cancel the running job has been issued to the cluster.
     *
     * Generated from protobuf enum <code>CANCEL_STARTED = 7;</code>
     */
    const CANCEL_STARTED = 7;
    /**
     * The job cancellation was successful.
     *
     * Generated from protobuf enum <code>CANCELLED = 4;</code>
     */
    const CANCELLED = 4;
    /**
     * The job has completed successfully.
     *
     * Generated from protobuf enum <code>DONE = 5;</code>
     */
    const DONE = 5;
    /**
     * The job has completed, but encountered an error.
     *
     * Generated from protobuf enum <code>ERROR = 6;</code>
     */
    const ERROR = 6;
    /**
     * Job attempt has failed. The detail field contains failure details for
     * this attempt.
     * Applies to restartable jobs only.
     *
     * Generated from protobuf enum <code>ATTEMPT_FAILURE = 9;</code>
     */
    const ATTEMPT_FAILURE = 9;
}

