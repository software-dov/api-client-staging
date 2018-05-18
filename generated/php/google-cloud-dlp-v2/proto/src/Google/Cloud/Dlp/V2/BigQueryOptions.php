<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/storage.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options defining BigQuery table and row identifiers.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.BigQueryOptions</code>
 */
class BigQueryOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     */
    private $table_reference = null;
    /**
     * References to fields uniquely identifying rows within the table.
     * Nested fields in the format, like `person.birthdate.year`, are allowed.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId identifying_fields = 2;</code>
     */
    private $identifying_fields;
    /**
     * Max number of rows to scan. If the table has more rows than this value, the
     * rest of the rows are omitted. If not set, or if set to 0, all rows will be
     * scanned. Cannot be used in conjunction with TimespanConfig.
     *
     * Generated from protobuf field <code>int64 rows_limit = 3;</code>
     */
    private $rows_limit = 0;
    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryOptions.SampleMethod sample_method = 4;</code>
     */
    private $sample_method = 0;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Storage::initOnce();
        parent::__construct();
    }

    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     * @return \Google\Cloud\Dlp\V2\BigQueryTable
     */
    public function getTableReference()
    {
        return $this->table_reference;
    }

    /**
     * Complete BigQuery table reference.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryTable table_reference = 1;</code>
     * @param \Google\Cloud\Dlp\V2\BigQueryTable $var
     * @return $this
     */
    public function setTableReference($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\BigQueryTable::class);
        $this->table_reference = $var;

        return $this;
    }

    /**
     * References to fields uniquely identifying rows within the table.
     * Nested fields in the format, like `person.birthdate.year`, are allowed.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId identifying_fields = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIdentifyingFields()
    {
        return $this->identifying_fields;
    }

    /**
     * References to fields uniquely identifying rows within the table.
     * Nested fields in the format, like `person.birthdate.year`, are allowed.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.FieldId identifying_fields = 2;</code>
     * @param \Google\Cloud\Dlp\V2\FieldId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIdentifyingFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\FieldId::class);
        $this->identifying_fields = $arr;

        return $this;
    }

    /**
     * Max number of rows to scan. If the table has more rows than this value, the
     * rest of the rows are omitted. If not set, or if set to 0, all rows will be
     * scanned. Cannot be used in conjunction with TimespanConfig.
     *
     * Generated from protobuf field <code>int64 rows_limit = 3;</code>
     * @return int|string
     */
    public function getRowsLimit()
    {
        return $this->rows_limit;
    }

    /**
     * Max number of rows to scan. If the table has more rows than this value, the
     * rest of the rows are omitted. If not set, or if set to 0, all rows will be
     * scanned. Cannot be used in conjunction with TimespanConfig.
     *
     * Generated from protobuf field <code>int64 rows_limit = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRowsLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->rows_limit = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryOptions.SampleMethod sample_method = 4;</code>
     * @return int
     */
    public function getSampleMethod()
    {
        return $this->sample_method;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.BigQueryOptions.SampleMethod sample_method = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSampleMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2\BigQueryOptions_SampleMethod::class);
        $this->sample_method = $var;

        return $this;
    }

}

