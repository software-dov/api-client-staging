<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/containeranalysis.proto

namespace Google\Devtools\Containeranalysis\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list occurrences.
 *
 * Generated from protobuf message <code>google.devtools.containeranalysis.v1alpha1.ListOccurrencesRequest</code>
 */
class ListOccurrencesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name field contains the project Id. For example:
     * "projects/{project_id}
     * &#64;Deprecated
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * This contains the project Id for example: projects/{project_id}.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     */
    private $parent = '';
    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     */
    private $filter = '';
    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     */
    private $page_token = '';
    /**
     * The kind of occurrences to filter on.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Note.Kind kind = 6;</code>
     */
    private $kind = 0;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\Containeranalysis::initOnce();
        parent::__construct();
    }

    /**
     * The name field contains the project Id. For example:
     * "projects/{project_id}
     * &#64;Deprecated
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name field contains the project Id. For example:
     * "projects/{project_id}
     * &#64;Deprecated
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

    /**
     * This contains the project Id for example: projects/{project_id}.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * This contains the project Id for example: projects/{project_id}.
     *
     * Generated from protobuf field <code>string parent = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @return string
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * The filter expression.
     *
     * Generated from protobuf field <code>string filter = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilter($var)
    {
        GPBUtil::checkString($var, True);
        $this->filter = $var;

        return $this;
    }

    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Number of occurrences to return in the list.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Token to provide to skip to a particular spot in the list.
     *
     * Generated from protobuf field <code>string page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * The kind of occurrences to filter on.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Note.Kind kind = 6;</code>
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * The kind of occurrences to filter on.
     *
     * Generated from protobuf field <code>.google.devtools.containeranalysis.v1alpha1.Note.Kind kind = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkEnum($var, \Google\Devtools\Containeranalysis\V1alpha1\Note_Kind::class);
        $this->kind = $var;

        return $this;
    }

}

