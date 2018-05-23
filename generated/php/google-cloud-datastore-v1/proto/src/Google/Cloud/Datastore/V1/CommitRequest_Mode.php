<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

/**
 * The modes available for commits.
 *
 * Protobuf enum <code>Google\Datastore\V1\CommitRequest\Mode</code>
 */
class CommitRequest_Mode
{
    /**
     * Unspecified. This value must not be used.
     *
     * Generated from protobuf enum <code>MODE_UNSPECIFIED = 0;</code>
     */
    const MODE_UNSPECIFIED = 0;
    /**
     * Transactional: The mutations are either all applied, or none are applied.
     * Learn about transactions [here](https://cloud.google.com/datastore/docs/concepts/transactions).
     *
     * Generated from protobuf enum <code>TRANSACTIONAL = 1;</code>
     */
    const TRANSACTIONAL = 1;
    /**
     * Non-transactional: The mutations may not apply as all or none.
     *
     * Generated from protobuf enum <code>NON_TRANSACTIONAL = 2;</code>
     */
    const NON_TRANSACTIONAL = 2;
}

