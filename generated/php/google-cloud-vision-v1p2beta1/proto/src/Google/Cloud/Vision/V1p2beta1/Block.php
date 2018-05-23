<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1p2beta1/text_annotation.proto

namespace Google\Cloud\Vision\V1p2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Logical element on the page.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1p2beta1.Block</code>
 */
class Block extends \Google\Protobuf\Internal\Message
{
    /**
     * Additional information detected for the block.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.TextAnnotation.TextProperty property = 1;</code>
     */
    private $property = null;
    /**
     * The bounding box for the block.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     * * when the text is horizontal it might look like:
     *         0----1
     *         |    |
     *         3----2
     * * when it's rotated 180 degrees around the top-left corner it becomes:
     *         2----3
     *         |    |
     *         1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.BoundingPoly bounding_box = 2;</code>
     */
    private $bounding_box = null;
    /**
     * List of paragraphs in this block (if this blocks is of type text).
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Paragraph paragraphs = 3;</code>
     */
    private $paragraphs;
    /**
     * Detected block type (text, image etc) for this block.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Block.BlockType block_type = 4;</code>
     */
    private $block_type = 0;
    /**
     * Confidence of the OCR results on the block. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5;</code>
     */
    private $confidence = 0.0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1P2Beta1\TextAnnotation::initOnce();
        parent::__construct();
    }

    /**
     * Additional information detected for the block.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.TextAnnotation.TextProperty property = 1;</code>
     * @return \Google\Cloud\Vision\V1p2beta1\TextAnnotation_TextProperty
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Additional information detected for the block.
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
     * The bounding box for the block.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     * * when the text is horizontal it might look like:
     *         0----1
     *         |    |
     *         3----2
     * * when it's rotated 180 degrees around the top-left corner it becomes:
     *         2----3
     *         |    |
     *         1----0
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
     * The bounding box for the block.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     * * when the text is horizontal it might look like:
     *         0----1
     *         |    |
     *         3----2
     * * when it's rotated 180 degrees around the top-left corner it becomes:
     *         2----3
     *         |    |
     *         1----0
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
     * List of paragraphs in this block (if this blocks is of type text).
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Paragraph paragraphs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParagraphs()
    {
        return $this->paragraphs;
    }

    /**
     * List of paragraphs in this block (if this blocks is of type text).
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1p2beta1.Paragraph paragraphs = 3;</code>
     * @param \Google\Cloud\Vision\V1p2beta1\Paragraph[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParagraphs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1p2beta1\Paragraph::class);
        $this->paragraphs = $arr;

        return $this;
    }

    /**
     * Detected block type (text, image etc) for this block.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Block.BlockType block_type = 4;</code>
     * @return int
     */
    public function getBlockType()
    {
        return $this->block_type;
    }

    /**
     * Detected block type (text, image etc) for this block.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1p2beta1.Block.BlockType block_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setBlockType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Vision\V1p2beta1\Block_BlockType::class);
        $this->block_type = $var;

        return $this;
    }

    /**
     * Confidence of the OCR results on the block. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Confidence of the OCR results on the block. Range [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 5;</code>
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

