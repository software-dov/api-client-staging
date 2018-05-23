<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/image_basis.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A set of properties that uniquely identify a given Docker image.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.DockerImage.Fingerprint</code>
 */
class DockerImage_Fingerprint extends \Google\Protobuf\Internal\Message
{
    /**
     * The layer-id of the final layer in the Docker image's v1
     * representation.
     * This field can be used as a filter in list requests.
     *
     * Generated from protobuf field <code>string v1_name = 1;</code>
     */
    private $v1_name = '';
    /**
     * The ordered list of v2 blobs that represent a given image.
     *
     * Generated from protobuf field <code>repeated string v2_blob = 2;</code>
     */
    private $v2_blob;
    /**
     * Output only. The name of the image's v2 blobs computed via:
     *   [bottom] := v2_blob[bottom]
     *   [N] := sha256(v2_blob[N] + " " + v2_name[N+1])
     * Only the name of the final blob is kept.
     * This field can be used as a filter in list requests.
     *
     * Generated from protobuf field <code>string v2_name = 3;</code>
     */
    private $v2_name = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\ImageBasis::initOnce();
        parent::__construct();
    }

    /**
     * The layer-id of the final layer in the Docker image's v1
     * representation.
     * This field can be used as a filter in list requests.
     *
     * Generated from protobuf field <code>string v1_name = 1;</code>
     * @return string
     */
    public function getV1Name()
    {
        return $this->v1_name;
    }

    /**
     * The layer-id of the final layer in the Docker image's v1
     * representation.
     * This field can be used as a filter in list requests.
     *
     * Generated from protobuf field <code>string v1_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setV1Name($var)
    {
        GPBUtil::checkString($var, True);
        $this->v1_name = $var;

        return $this;
    }

    /**
     * The ordered list of v2 blobs that represent a given image.
     *
     * Generated from protobuf field <code>repeated string v2_blob = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getV2Blob()
    {
        return $this->v2_blob;
    }

    /**
     * The ordered list of v2 blobs that represent a given image.
     *
     * Generated from protobuf field <code>repeated string v2_blob = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setV2Blob($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->v2_blob = $arr;

        return $this;
    }

    /**
     * Output only. The name of the image's v2 blobs computed via:
     *   [bottom] := v2_blob[bottom]
     *   [N] := sha256(v2_blob[N] + " " + v2_name[N+1])
     * Only the name of the final blob is kept.
     * This field can be used as a filter in list requests.
     *
     * Generated from protobuf field <code>string v2_name = 3;</code>
     * @return string
     */
    public function getV2Name()
    {
        return $this->v2_name;
    }

    /**
     * Output only. The name of the image's v2 blobs computed via:
     *   [bottom] := v2_blob[bottom]
     *   [N] := sha256(v2_blob[N] + " " + v2_name[N+1])
     * Only the name of the final blob is kept.
     * This field can be used as a filter in list requests.
     *
     * Generated from protobuf field <code>string v2_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setV2Name($var)
    {
        GPBUtil::checkString($var, True);
        $this->v2_name = $var;

        return $this;
    }

}

