<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/agent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Agents.ExportAgent][google.cloud.dialogflow.v2beta1.Agents.ExportAgent].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.ExportAgentRequest</code>
 */
class ExportAgentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The project that the agent to export is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Optional. The Google Cloud Storage URI to export the agent to.
     * Note: The URI must start with
     * "gs://". If left unspecified, the serialized agent is returned inline.
     *
     * Generated from protobuf field <code>string agent_uri = 2;</code>
     */
    private $agent_uri = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Agent::initOnce();
        parent::__construct();
    }

    /**
     * Required. The project that the agent to export is associated with.
     * Format: `projects/<Project ID>`.
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The project that the agent to export is associated with.
     * Format: `projects/<Project ID>`.
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
     * Optional. The Google Cloud Storage URI to export the agent to.
     * Note: The URI must start with
     * "gs://". If left unspecified, the serialized agent is returned inline.
     *
     * Generated from protobuf field <code>string agent_uri = 2;</code>
     * @return string
     */
    public function getAgentUri()
    {
        return $this->agent_uri;
    }

    /**
     * Optional. The Google Cloud Storage URI to export the agent to.
     * Note: The URI must start with
     * "gs://". If left unspecified, the serialized agent is returned inline.
     *
     * Generated from protobuf field <code>string agent_uri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAgentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->agent_uri = $var;

        return $this;
    }

}

