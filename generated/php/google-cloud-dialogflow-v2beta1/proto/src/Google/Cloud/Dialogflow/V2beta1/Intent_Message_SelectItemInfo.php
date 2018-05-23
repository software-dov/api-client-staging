<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2beta1/intent.proto

namespace Google\Cloud\Dialogflow\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional info about the select item for when it is triggered in a
 * dialog.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2beta1.Intent.Message.SelectItemInfo</code>
 */
class Intent_Message_SelectItemInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A unique key that will be sent back to the agent if this
     * response is given.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     */
    private $key = '';
    /**
     * Optional. A list of synonyms that can also be used to trigger this
     * item in dialog.
     *
     * Generated from protobuf field <code>repeated string synonyms = 2;</code>
     */
    private $synonyms;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2Beta1\Intent::initOnce();
        parent::__construct();
    }

    /**
     * Required. A unique key that will be sent back to the agent if this
     * response is given.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Required. A unique key that will be sent back to the agent if this
     * response is given.
     *
     * Generated from protobuf field <code>string key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Optional. A list of synonyms that can also be used to trigger this
     * item in dialog.
     *
     * Generated from protobuf field <code>repeated string synonyms = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSynonyms()
    {
        return $this->synonyms;
    }

    /**
     * Optional. A list of synonyms that can also be used to trigger this
     * item in dialog.
     *
     * Generated from protobuf field <code>repeated string synonyms = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSynonyms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->synonyms = $arr;

        return $this;
    }

}

