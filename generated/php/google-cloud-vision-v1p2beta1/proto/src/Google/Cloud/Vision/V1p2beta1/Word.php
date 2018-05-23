<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/text_annotation.proto

namespace Google\Cloud\Vision\V1p2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A word representation.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p2beta1.Word</code>
 */
class Word extends \Google\Protobuf\Internal\Message
{
    /**
     * Additional information detected for the word.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.TextAnnotation.TextProperty property = 1;</code>
     */
    private $property = null;
    /**
     * The bounding box for the word.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.BoundingPoly bounding_box = 2;</code>
     */
    private $bounding_box = null;
    /**
     * List of symbols in the word.
     * The order of the symbols follows the natural reading order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Symbol symbols = 3;</code>
     */
    private $symbols;
    /**
     * Confidence of the OCR results for the word. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     */
    private $confidence = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1P2Beta1\TextAnnotation::initOnce();
        parent::__construct();
    }

    /**
     * Additional information detected for the word.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.TextAnnotation.TextProperty property = 1;</code>
     * @return \Google\Cloud\Vision\V1p2beta1\TextAnnotation_TextProperty
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Additional information detected for the word.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.TextAnnotation.TextProperty property = 1;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\TextAnnotation_TextProperty $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1p2beta1\TextAnnotation_TextProperty::class);
        $this->property = $var;

        return $this;
    }

    /**
     * The bounding box for the word.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.BoundingPoly bounding_box = 2;</code>
     * @return \Google\Cloud\Vision\V1p2beta1\BoundingPoly
     */
    public function getBoundingBox()
    {
        return $this->bounding_box;
    }

    /**
     * The bounding box for the word.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.BoundingPoly bounding_box = 2;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\BoundingPoly $var
     * @return $this
     */
    public function setBoundingBox($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1p2beta1\BoundingPoly::class);
        $this->bounding_box = $var;

        return $this;
    }

    /**
     * List of symbols in the word.
     * The order of the symbols follows the natural reading order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Symbol symbols = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSymbols()
    {
        return $this->symbols;
    }

    /**
     * List of symbols in the word.
     * The order of the symbols follows the natural reading order.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Symbol symbols = 3;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\Symbol[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSymbols($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1p2beta1\Symbol::class);
        $this->symbols = $arr;

        return $this;
    }

    /**
     * Confidence of the OCR results for the word. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Confidence of the OCR results for the word. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

