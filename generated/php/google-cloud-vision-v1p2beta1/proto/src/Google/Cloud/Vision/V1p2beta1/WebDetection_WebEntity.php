<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/web_detection.proto

namespace Google\Cloud\Vision\V1p2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Entity deduced from similar images on the Internet.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p2beta1.WebDetection.WebEntity</code>
 */
class WebDetection_WebEntity extends \Google\Protobuf\Internal\Message
{
    /**
     * Opaque entity ID.
     *
     * Generated from protobuf field <code>string entity_id = 1;</code>
     */
    private $entity_id = '';
    /**
     * Overall relevancy score for the entity.
     * Not normalized and not comparable across different image queries.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     */
    private $score = 0.0;
    /**
     * Canonical description of the entity, in English.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1P2Beta1\WebDetection::initOnce();
        parent::__construct();
    }

    /**
     * Opaque entity ID.
     *
     * Generated from protobuf field <code>string entity_id = 1;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Opaque entity ID.
     *
     * Generated from protobuf field <code>string entity_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Overall relevancy score for the entity.
     * Not normalized and not comparable across different image queries.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Overall relevancy score for the entity.
     * Not normalized and not comparable across different image queries.
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setScore($var)
    {
        GPBUtil::checkFloat($var);
        $this->score = $var;

        return $this;
    }

    /**
     * Canonical description of the entity, in English.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Canonical description of the entity, in English.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

