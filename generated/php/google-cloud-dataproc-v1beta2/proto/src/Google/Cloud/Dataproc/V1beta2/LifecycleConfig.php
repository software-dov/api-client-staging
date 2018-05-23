<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1beta2/clusters.proto

namespace Google\Cloud\Dataproc\V1beta2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the cluster auto delete related schedule configuration.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1beta2.LifecycleConfig</code>
 */
class LifecycleConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. The longest duration that cluster would keep alive while staying
     *  idle; passing this threshold will cause cluster to be auto-deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_delete_ttl = 1;</code>
     */
    private $idle_delete_ttl = null;
    protected $ttl;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dataproc\V1Beta2\Clusters::initOnce();
        parent::__construct();
    }

    /**
     * Optional. The longest duration that cluster would keep alive while staying
     *  idle; passing this threshold will cause cluster to be auto-deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_delete_ttl = 1;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getIdleDeleteTtl()
    {
        return $this->idle_delete_ttl;
    }

    /**
     * Optional. The longest duration that cluster would keep alive while staying
     *  idle; passing this threshold will cause cluster to be auto-deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration idle_delete_ttl = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setIdleDeleteTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->idle_delete_ttl = $var;

        return $this;
    }

    /**
     * Optional. The time when cluster will be auto-deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp auto_delete_time = 2;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getAutoDeleteTime()
    {
        return $this->readOneof(2);
    }

    /**
     * Optional. The time when cluster will be auto-deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp auto_delete_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setAutoDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. The life duration of cluster, the cluster will be auto-deleted
     * at the end of this duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration auto_delete_ttl = 3;</code>
     * @return \Google\Protobuf\Duration
     */
    public function getAutoDeleteTtl()
    {
        return $this->readOneof(3);
    }

    /**
     * Optional. The life duration of cluster, the cluster will be auto-deleted
     * at the end of this duration.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration auto_delete_ttl = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setAutoDeleteTtl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTtl()
    {
        return $this->whichOneof("ttl");
    }

}

