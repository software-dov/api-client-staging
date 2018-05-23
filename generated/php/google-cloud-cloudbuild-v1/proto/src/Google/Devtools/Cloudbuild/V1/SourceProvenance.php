<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Devtools\Cloudbuild\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provenance of the source. Ways to find the original source, or verify that
 * some source was used for this build.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.SourceProvenance</code>
 */
class SourceProvenance extends \Google\Protobuf\Internal\Message
{
    /**
     * A copy of the build's `source.storage_source`, if exists, with any
     * generations resolved.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSource resolved_storage_source = 3;</code>
     */
    private $resolved_storage_source = null;
    /**
     * A copy of the build's `source.repo_source`, if exists, with any
     * revisions resolved.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource resolved_repo_source = 6;</code>
     */
    private $resolved_repo_source = null;
    /**
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build. Note that `FileHashes` will
     * only be populated if `BuildOptions` has requested a `SourceProvenanceHash`.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (`.tar.gz`), the `FileHash` will be for the single path to that file.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudbuild.v1.FileHashes> file_hashes = 4;</code>
     */
    private $file_hashes;

    public function __construct() {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct();
    }

    /**
     * A copy of the build's `source.storage_source`, if exists, with any
     * generations resolved.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSource resolved_storage_source = 3;</code>
     * @return \Google\Devtools\Cloudbuild\V1\StorageSource
     */
    public function getResolvedStorageSource()
    {
        return $this->resolved_storage_source;
    }

    /**
     * A copy of the build's `source.storage_source`, if exists, with any
     * generations resolved.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.StorageSource resolved_storage_source = 3;</code>
     * @param \Google\Devtools\Cloudbuild\V1\StorageSource $var
     * @return $this
     */
    public function setResolvedStorageSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\StorageSource::class);
        $this->resolved_storage_source = $var;

        return $this;
    }

    /**
     * A copy of the build's `source.repo_source`, if exists, with any
     * revisions resolved.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource resolved_repo_source = 6;</code>
     * @return \Google\Devtools\Cloudbuild\V1\RepoSource
     */
    public function getResolvedRepoSource()
    {
        return $this->resolved_repo_source;
    }

    /**
     * A copy of the build's `source.repo_source`, if exists, with any
     * revisions resolved.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.RepoSource resolved_repo_source = 6;</code>
     * @param \Google\Devtools\Cloudbuild\V1\RepoSource $var
     * @return $this
     */
    public function setResolvedRepoSource($var)
    {
        GPBUtil::checkMessage($var, \Google\Devtools\Cloudbuild\V1\RepoSource::class);
        $this->resolved_repo_source = $var;

        return $this;
    }

    /**
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build. Note that `FileHashes` will
     * only be populated if `BuildOptions` has requested a `SourceProvenanceHash`.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (`.tar.gz`), the `FileHash` will be for the single path to that file.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudbuild.v1.FileHashes> file_hashes = 4;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getFileHashes()
    {
        return $this->file_hashes;
    }

    /**
     * Hash(es) of the build source, which can be used to verify that the original
     * source integrity was maintained in the build. Note that `FileHashes` will
     * only be populated if `BuildOptions` has requested a `SourceProvenanceHash`.
     * The keys to this map are file paths used as build source and the values
     * contain the hash values for those files.
     * If the build source came in a single package such as a gzipped tarfile
     * (`.tar.gz`), the `FileHash` will be for the single path to that file.
     * &#64;OutputOnly
     *
     * Generated from protobuf field <code>map<string, .google.devtools.cloudbuild.v1.FileHashes> file_hashes = 4;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setFileHashes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Devtools\Cloudbuild\V1\FileHashes::class);
        $this->file_hashes = $arr;

        return $this;
    }

}

