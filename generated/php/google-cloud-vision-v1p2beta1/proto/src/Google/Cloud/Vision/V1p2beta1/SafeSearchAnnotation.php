<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/image_annotator.proto

namespace Google\Cloud\Vision\V1p2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Set of features pertaining to the image, computed by computer vision
 * methods over safe-search verticals (for example, adult, spoof, medical,
 * violence).
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p2beta1.SafeSearchAnnotation</code>
 */
class SafeSearchAnnotation extends \Google\Protobuf\Internal\Message
{
    /**
     * Represents the adult content likelihood for the image. Adult content may
     * contain elements such as nudity, pornographic images or cartoons, or
     * sexual activities.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood adult = 1;</code>
     */
    private $adult = 0;
    /**
     * Spoof likelihood. The likelihood that an modification
     * was made to the image's canonical version to make it appear
     * funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood spoof = 2;</code>
     */
    private $spoof = 0;
    /**
     * Likelihood that this is a medical image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood medical = 3;</code>
     */
    private $medical = 0;
    /**
     * Likelihood that this image contains violent content.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood violence = 4;</code>
     */
    private $violence = 0;
    /**
     * Likelihood that the request image contains racy content. Racy content may
     * include (but is not limited to) skimpy or sheer clothing, strategically
     * covered nudity, lewd or provocative poses, or close-ups of sensitive
     * body areas.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood racy = 9;</code>
     */
    private $racy = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1P2Beta1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * Represents the adult content likelihood for the image. Adult content may
     * contain elements such as nudity, pornographic images or cartoons, or
     * sexual activities.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood adult = 1;</code>
     * @return int
     */
    public function getAdult()
    {
        return $this->adult;
    }

    /**
     * Represents the adult content likelihood for the image. Adult content may
     * contain elements such as nudity, pornographic images or cartoons, or
     * sexual activities.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood adult = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAdult($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1p2beta1\Likelihood::class);
        $this->adult = $var;

        return $this;
    }

    /**
     * Spoof likelihood. The likelihood that an modification
     * was made to the image's canonical version to make it appear
     * funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood spoof = 2;</code>
     * @return int
     */
    public function getSpoof()
    {
        return $this->spoof;
    }

    /**
     * Spoof likelihood. The likelihood that an modification
     * was made to the image's canonical version to make it appear
     * funny or offensive.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood spoof = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSpoof($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1p2beta1\Likelihood::class);
        $this->spoof = $var;

        return $this;
    }

    /**
     * Likelihood that this is a medical image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood medical = 3;</code>
     * @return int
     */
    public function getMedical()
    {
        return $this->medical;
    }

    /**
     * Likelihood that this is a medical image.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood medical = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMedical($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1p2beta1\Likelihood::class);
        $this->medical = $var;

        return $this;
    }

    /**
     * Likelihood that this image contains violent content.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood violence = 4;</code>
     * @return int
     */
    public function getViolence()
    {
        return $this->violence;
    }

    /**
     * Likelihood that this image contains violent content.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood violence = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setViolence($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1p2beta1\Likelihood::class);
        $this->violence = $var;

        return $this;
    }

    /**
     * Likelihood that the request image contains racy content. Racy content may
     * include (but is not limited to) skimpy or sheer clothing, strategically
     * covered nudity, lewd or provocative poses, or close-ups of sensitive
     * body areas.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood racy = 9;</code>
     * @return int
     */
    public function getRacy()
    {
        return $this->racy;
    }

    /**
     * Likelihood that the request image contains racy content. Racy content may
     * include (but is not limited to) skimpy or sheer clothing, strategically
     * covered nudity, lewd or provocative poses, or close-ups of sensitive
     * body areas.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Likelihood racy = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setRacy($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1p2beta1\Likelihood::class);
        $this->racy = $var;

        return $this;
    }

}

