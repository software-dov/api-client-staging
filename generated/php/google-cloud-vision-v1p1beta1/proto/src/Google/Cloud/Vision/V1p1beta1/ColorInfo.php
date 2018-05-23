<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p1beta1/image_annotator.proto

namespace Google\Cloud\Vision\V1p1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Color information consists of RGB channels, score, and the fraction of
 * the image that the color occupies in the image.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p1beta1.ColorInfo</code>
 */
class ColorInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * RGB components of the color.
     *
     * Generated from protobuf field <code>.google.type.Color color = 1;</code>
     */
    private $color = null;
    /**
     * Image-specific score for this color. Value in range [0, 1].
     *
     * Generated from protobuf field <code>float score = 2;</code>
     */
    private $score = 0.0;
    /**
     * The fraction of pixels the color occupies in the image.
     * Value in range [0, 1].
     *
     * Generated from protobuf field <code>float pixel_fraction = 3;</code>
     */
    private $pixel_fraction = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1P1Beta1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * RGB components of the color.
     *
     * Generated from protobuf field <code>.google.type.Color color = 1;</code>
     * @return \Google\Type\Color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * RGB components of the color.
     *
     * Generated from protobuf field <code>.google.type.Color color = 1;</code>
     * @param \Google\Type\Color $var
     * @return $this
     */
    public function setColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Color::class);
        $this->color = $var;

        return $this;
    }

    /**
     * Image-specific score for this color. Value in range [0, 1].
     *
     * Generated from protobuf field <code>float score = 2;</code>
     * @return float
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Image-specific score for this color. Value in range [0, 1].
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
     * The fraction of pixels the color occupies in the image.
     * Value in range [0, 1].
     *
     * Generated from protobuf field <code>float pixel_fraction = 3;</code>
     * @return float
     */
    public function getPixelFraction()
    {
        return $this->pixel_fraction;
    }

    /**
     * The fraction of pixels the color occupies in the image.
     * Value in range [0, 1].
     *
     * Generated from protobuf field <code>float pixel_fraction = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPixelFraction($var)
    {
        GPBUtil::checkFloat($var);
        $this->pixel_fraction = $var;

        return $this;
    }

}

