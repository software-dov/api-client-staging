<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/bigtable/admin/v2/bigtable_instance_admin.proto

namespace Google\Bigtable\Admin\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for BigtableInstanceAdmin.CreateCluster.
 *
 * Generated from protobuf message <code>google.bigtable.admin.v2.CreateClusterRequest</code>
 */
class CreateClusterRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique name of the instance in which to create the new cluster.
     * Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * The ID to be used when referring to the new cluster within its instance,
     * e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     *
     * Generated from protobuf field <code>string cluster_id = 2;</code>
     */
    private $cluster_id = '';
    /**
     * The cluster to be created.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster cluster = 3;</code>
     */
    private $cluster = null;

    public function __construct() {
        \GPBMetadata\Google\Bigtable\Admin\V2\BigtableInstanceAdmin::initOnce();
        parent::__construct();
    }

    /**
     * The unique name of the instance in which to create the new cluster.
     * Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * The unique name of the instance in which to create the new cluster.
     * Values are of the form
     * `projects/<project>/instances/<instance>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
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
     * The ID to be used when referring to the new cluster within its instance,
     * e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     *
     * Generated from protobuf field <code>string cluster_id = 2;</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * The ID to be used when referring to the new cluster within its instance,
     * e.g., just `mycluster` rather than
     * `projects/myproject/instances/myinstance/clusters/mycluster`.
     *
     * Generated from protobuf field <code>string cluster_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * The cluster to be created.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster cluster = 3;</code>
     * @return \Google\Bigtable\Admin\V2\Cluster
     */
    public function getCluster()
    {
        return $this->cluster;
    }

    /**
     * The cluster to be created.
     * Fields marked `OutputOnly` must be left blank.
     *
     * Generated from protobuf field <code>.google.bigtable.admin.v2.Cluster cluster = 3;</code>
     * @param \Google\Bigtable\Admin\V2\Cluster $var
     * @return $this
     */
    public function setCluster($var)
    {
        GPBUtil::checkMessage($var, \Google\Bigtable\Admin\V2\Cluster::class);
        $this->cluster = $var;

        return $this;
    }

}

