<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/datastore/v1/datastore.proto

namespace Google\Cloud\Datastore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A mutation to apply to an entity.
 *
 * Generated from protobuf message <code>google.datastore.v1.Mutation</code>
 */
class Mutation extends \Google\Protobuf\Internal\Message
{
    protected $operation;
    protected $conflict_detection_strategy;

    public function __construct() {
        \GPBMetadata\Google\Datastore\V1\Datastore::initOnce();
        parent::__construct();
    }

    /**
     * The entity to insert. The entity must not already exist.
     * The entity key's final path element may be incomplete.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Entity insert = 4;</code>
     * @return \Google\Cloud\Datastore\V1\Entity
     */
    public function getInsert()
    {
        return $this->readOneof(4);
    }

    /**
     * The entity to insert. The entity must not already exist.
     * The entity key's final path element may be incomplete.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Entity insert = 4;</code>
     * @param \Google\Cloud\Datastore\V1\Entity $var
     * @return $this
     */
    public function setInsert($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Entity::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The entity to update. The entity must already exist.
     * Must have a complete key path.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Entity update = 5;</code>
     * @return \Google\Cloud\Datastore\V1\Entity
     */
    public function getUpdate()
    {
        return $this->readOneof(5);
    }

    /**
     * The entity to update. The entity must already exist.
     * Must have a complete key path.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Entity update = 5;</code>
     * @param \Google\Cloud\Datastore\V1\Entity $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Entity::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The entity to upsert. The entity may or may not already exist.
     * The entity key's final path element may be incomplete.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Entity upsert = 6;</code>
     * @return \Google\Cloud\Datastore\V1\Entity
     */
    public function getUpsert()
    {
        return $this->readOneof(6);
    }

    /**
     * The entity to upsert. The entity may or may not already exist.
     * The entity key's final path element may be incomplete.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Entity upsert = 6;</code>
     * @param \Google\Cloud\Datastore\V1\Entity $var
     * @return $this
     */
    public function setUpsert($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Entity::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * The key of the entity to delete. The entity may or may not already exist.
     * Must have a complete key path and must not be reserved/read-only.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Key delete = 7;</code>
     * @return \Google\Cloud\Datastore\V1\Key
     */
    public function getDelete()
    {
        return $this->readOneof(7);
    }

    /**
     * The key of the entity to delete. The entity may or may not already exist.
     * Must have a complete key path and must not be reserved/read-only.
     *
     * Generated from protobuf field <code>.google.datastore.v1.Key delete = 7;</code>
     * @param \Google\Cloud\Datastore\V1\Key $var
     * @return $this
     */
    public function setDelete($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Datastore\V1\Key::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * The version of the entity that this mutation is being applied to. If this
     * does not match the current version on the server, the mutation conflicts.
     *
     * Generated from protobuf field <code>int64 base_version = 8;</code>
     * @return int|string
     */
    public function getBaseVersion()
    {
        return $this->readOneof(8);
    }

    /**
     * The version of the entity that this mutation is being applied to. If this
     * does not match the current version on the server, the mutation conflicts.
     *
     * Generated from protobuf field <code>int64 base_version = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBaseVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

    /**
     * @return string
     */
    public function getConflictDetectionStrategy()
    {
        return $this->whichOneof("conflict_detection_strategy");
    }

}

