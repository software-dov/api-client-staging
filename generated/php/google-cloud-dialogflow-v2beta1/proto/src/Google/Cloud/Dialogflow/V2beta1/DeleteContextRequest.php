<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/context.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Contexts.DeleteContext][google.cloud.dialogflow.v2beta1.Contexts.DeleteContext].
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.DeleteContextRequest</code>
 */
class DeleteContextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the context to delete. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context ID>`
     * or `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>/contexts/<Context ID>`. Note: Environments and
     * users are under construction and will be available soon. If <Environment
     * ID> is not specified, we assume default 'draft' environment. If <User ID>
     * is not specified, we assume default
     * '-' user.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Context::initOnce();
        parent::__construct();
    }

    /**
     * Required. The name of the context to delete. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context ID>`
     * or `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>/contexts/<Context ID>`. Note: Environments and
     * users are under construction and will be available soon. If <Environment
     * ID> is not specified, we assume default 'draft' environment. If <User ID>
     * is not specified, we assume default
     * '-' user.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the context to delete. Format:
     * `projects/<Project ID>/agent/sessions/<Session ID>/contexts/<Context ID>`
     * or `projects/<Project ID>/agent/environments/<Environment ID>/users/<User
     * ID>/sessions/<Session ID>/contexts/<Context ID>`. Note: Environments and
     * users are under construction and will be available soon. If <Environment
     * ID> is not specified, we assume default 'draft' environment. If <User ID>
     * is not specified, we assume default
     * '-' user.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

