<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/image_basis.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Derived describes the derived image portion (Occurrence) of the
 * DockerImage relationship.  This image would be produced from a Dockerfile
 * with FROM <DockerImage.Basis in attached Note>.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.DockerImage.Derived</code>
 */
class DockerImage_Derived extends \Google\Protobuf\Internal\Message
{
    /**
     * The fingerprint of the derived image.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.DockerImage.Fingerprint fingerprint = 1;</code>
     */
    private $fingerprint = null;
    /**
     * Output only. The number of layers by which this image differs from the
     * associated image basis.
     *
     * Generated from protobuf field <code>uint32 distance = 2;</code>
     */
    private $distance = 0;
    /**
     * This contains layer-specific metadata, if populated it has length
     * "distance" and is ordered with [distance] being the layer immediately
     * following the base image and [1] being the final layer.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.DockerImage.Layer layer_info = 3;</code>
     */
    private $layer_info;
    /**
     * Output only. This contains the base image URL for the derived image
     * occurrence.
     *
     * Generated from protobuf field <code>string base_resource_url = 4;</code>
     */
    private $base_resource_url = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\ImageBasis::initOnce();
        parent::__construct();
    }

    /**
     * The fingerprint of the derived image.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.DockerImage.Fingerprint fingerprint = 1;</code>
     * @return \Google\Devtools\Containeranalysis\V1alpha1\DockerImage_Fingerprint
     */
    public function getFingerprint()
    {
        return $this->fingerprint;
    }

    /**
     * The fingerprint of the derived image.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.DockerImage.Fingerprint fingerprint = 1;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\DockerImage_Fingerprint $var
     * @return $this
     */
    public function setFingerprint($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Containeranalysis\V1alpha1\DockerImage_Fingerprint::class);
        $this->fingerprint = $var;

        return $this;
    }

    /**
     * Output only. The number of layers by which this image differs from the
     * associated image basis.
     *
     * Generated from protobuf field <code>uint32 distance = 2;</code>
     * @return int
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Output only. The number of layers by which this image differs from the
     * associated image basis.
     *
     * Generated from protobuf field <code>uint32 distance = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDistance($var)
    {
        GPBUtil::checkUint32($var);
        $this->distance = $var;

        return $this;
    }

    /**
     * This contains layer-specific metadata, if populated it has length
     * "distance" and is ordered with [distance] being the layer immediately
     * following the base image and [1] being the final layer.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.DockerImage.Layer layer_info = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLayerInfo()
    {
        return $this->layer_info;
    }

    /**
     * This contains layer-specific metadata, if populated it has length
     * "distance" and is ordered with [distance] being the layer immediately
     * following the base image and [1] being the final layer.
     *
     * Generated from protobuf field <code>repeated .google.devtools.containeranalysis.v1alpha1.DockerImage.Layer layer_info = 3;</code>
     * @param \Google\Devtools\Containeranalysis\V1alpha1\DockerImage_Layer[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLayerInfo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Containeranalysis\V1alpha1\DockerImage_Layer::class);
        $this->layer_info = $arr;

        return $this;
    }

    /**
     * Output only. This contains the base image URL for the derived image
     * occurrence.
     *
     * Generated from protobuf field <code>string base_resource_url = 4;</code>
     * @return string
     */
    public function getBaseResourceUrl()
    {
        return $this->base_resource_url;
    }

    /**
     * Output only. This contains the base image URL for the derived image
     * occurrence.
     *
     * Generated from protobuf field <code>string base_resource_url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBaseResourceUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->base_resource_url = $var;

        return $this;
    }

}

