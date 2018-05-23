<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Returns the `BuildTrigger` with the specified ID.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.GetBuildTriggerRequest</code>
 */
class GetBuildTriggerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * ID of the project that owns the trigger.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     */
    private $project_id = '';
    /**
     * ID of the `BuildTrigger` to get.
     *
     * Generated from protobuf field <code>string trigger_id = 2;</code>
     */
    private $trigger_id = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * ID of the project that owns the trigger.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * ID of the project that owns the trigger.
     *
     * Generated from protobuf field <code>string project_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * ID of the `BuildTrigger` to get.
     *
     * Generated from protobuf field <code>string trigger_id = 2;</code>
     * @return string
     */
    public function getTriggerId()
    {
        return $this->trigger_id;
    }

    /**
     * ID of the `BuildTrigger` to get.
     *
     * Generated from protobuf field <code>string trigger_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTriggerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->trigger_id = $var;

        return $this;
    }

}

