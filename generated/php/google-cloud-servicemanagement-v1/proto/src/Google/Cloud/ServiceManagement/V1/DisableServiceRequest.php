<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicemanagement/v1/servicemanager.proto

namespace Google\Cloud\ServiceManagement\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for DisableService method.
 *
 * Generated from protobuf message <code>google.api.servicemanagement.v1.DisableServiceRequest</code>
 */
class DisableServiceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the service to disable. Specifying an unknown service name
     * will cause the request to fail.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     */
    private $service_name = '';
    /**
     * The identity of consumer resource which service disablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:<project_id>"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     *
     * Generated from protobuf field <code>string consumer_id = 2;</code>
     */
    private $consumer_id = '';

    public function __construct() {
        \GPBMetadata\Google\Api\Servicemanagement\V1\Servicemanager::initOnce();
        parent::__construct();
    }

    /**
     * Name of the service to disable. Specifying an unknown service name
     * will cause the request to fail.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @return string
     */
    public function getServiceName()
    {
        return $this->service_name;
    }

    /**
     * Name of the service to disable. Specifying an unknown service name
     * will cause the request to fail.
     *
     * Generated from protobuf field <code>string service_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_name = $var;

        return $this;
    }

    /**
     * The identity of consumer resource which service disablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:<project_id>"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     *
     * Generated from protobuf field <code>string consumer_id = 2;</code>
     * @return string
     */
    public function getConsumerId()
    {
        return $this->consumer_id;
    }

    /**
     * The identity of consumer resource which service disablement will be
     * applied to.
     * The Google Service Management implementation accepts the following
     * forms:
     * - "project:<project_id>"
     * Note: this is made compatible with
     * google.api.servicecontrol.v1.Operation.consumer_id.
     *
     * Generated from protobuf field <code>string consumer_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setConsumerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_id = $var;

        return $this;
    }

}

