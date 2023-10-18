<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/admin/bucket/v1/bucket.proto

namespace Couchbase\Protostellar\Generated\Admin\Bucket\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.admin.bucket.v1.UpdateBucketRequest</code>
 */
class UpdateBucketRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     */
    protected $bucket_name = '';
    /**
     * Generated from protobuf field <code>optional uint64 ram_quota_mb = 2;</code>
     */
    protected $ram_quota_mb = null;
    /**
     * Generated from protobuf field <code>optional uint32 num_replicas = 3;</code>
     */
    protected $num_replicas = null;
    /**
     * Generated from protobuf field <code>optional bool flush_enabled = 4;</code>
     */
    protected $flush_enabled = null;
    /**
     * Generated from protobuf field <code>optional .couchbase.admin.bucket.v1.EvictionMode eviction_mode = 5;</code>
     */
    protected $eviction_mode = null;
    /**
     * Generated from protobuf field <code>optional uint32 max_expiry_secs = 6;</code>
     */
    protected $max_expiry_secs = null;
    /**
     * Generated from protobuf field <code>optional .couchbase.admin.bucket.v1.CompressionMode compression_mode = 7;</code>
     */
    protected $compression_mode = null;
    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.DurabilityLevel minimum_durability_level = 8;</code>
     */
    protected $minimum_durability_level = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bucket_name
     *     @type int|string $ram_quota_mb
     *     @type int $num_replicas
     *     @type bool $flush_enabled
     *     @type int $eviction_mode
     *     @type int $max_expiry_secs
     *     @type int $compression_mode
     *     @type int $minimum_durability_level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Admin\Bucket\V1\Bucket::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @return string
     */
    public function getBucketName()
    {
        return $this->bucket_name;
    }

    /**
     * Generated from protobuf field <code>string bucket_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBucketName($var)
    {
        GPBUtil::checkString($var, True);
        $this->bucket_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint64 ram_quota_mb = 2;</code>
     * @return int|string
     */
    public function getRamQuotaMb()
    {
        return isset($this->ram_quota_mb) ? $this->ram_quota_mb : 0;
    }

    public function hasRamQuotaMb()
    {
        return isset($this->ram_quota_mb);
    }

    public function clearRamQuotaMb()
    {
        unset($this->ram_quota_mb);
    }

    /**
     * Generated from protobuf field <code>optional uint64 ram_quota_mb = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRamQuotaMb($var)
    {
        GPBUtil::checkUint64($var);
        $this->ram_quota_mb = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 num_replicas = 3;</code>
     * @return int
     */
    public function getNumReplicas()
    {
        return isset($this->num_replicas) ? $this->num_replicas : 0;
    }

    public function hasNumReplicas()
    {
        return isset($this->num_replicas);
    }

    public function clearNumReplicas()
    {
        unset($this->num_replicas);
    }

    /**
     * Generated from protobuf field <code>optional uint32 num_replicas = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNumReplicas($var)
    {
        GPBUtil::checkUint32($var);
        $this->num_replicas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional bool flush_enabled = 4;</code>
     * @return bool
     */
    public function getFlushEnabled()
    {
        return isset($this->flush_enabled) ? $this->flush_enabled : false;
    }

    public function hasFlushEnabled()
    {
        return isset($this->flush_enabled);
    }

    public function clearFlushEnabled()
    {
        unset($this->flush_enabled);
    }

    /**
     * Generated from protobuf field <code>optional bool flush_enabled = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setFlushEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->flush_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.admin.bucket.v1.EvictionMode eviction_mode = 5;</code>
     * @return int
     */
    public function getEvictionMode()
    {
        return isset($this->eviction_mode) ? $this->eviction_mode : 0;
    }

    public function hasEvictionMode()
    {
        return isset($this->eviction_mode);
    }

    public function clearEvictionMode()
    {
        unset($this->eviction_mode);
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.admin.bucket.v1.EvictionMode eviction_mode = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEvictionMode($var)
    {
        GPBUtil::checkEnum($var, \Couchbase\Protostellar\Generated\Admin\Bucket\V1\EvictionMode::class);
        $this->eviction_mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional uint32 max_expiry_secs = 6;</code>
     * @return int
     */
    public function getMaxExpirySecs()
    {
        return isset($this->max_expiry_secs) ? $this->max_expiry_secs : 0;
    }

    public function hasMaxExpirySecs()
    {
        return isset($this->max_expiry_secs);
    }

    public function clearMaxExpirySecs()
    {
        unset($this->max_expiry_secs);
    }

    /**
     * Generated from protobuf field <code>optional uint32 max_expiry_secs = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxExpirySecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_expiry_secs = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.admin.bucket.v1.CompressionMode compression_mode = 7;</code>
     * @return int
     */
    public function getCompressionMode()
    {
        return isset($this->compression_mode) ? $this->compression_mode : 0;
    }

    public function hasCompressionMode()
    {
        return isset($this->compression_mode);
    }

    public function clearCompressionMode()
    {
        unset($this->compression_mode);
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.admin.bucket.v1.CompressionMode compression_mode = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCompressionMode($var)
    {
        GPBUtil::checkEnum($var, \Couchbase\Protostellar\Generated\Admin\Bucket\V1\CompressionMode::class);
        $this->compression_mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.DurabilityLevel minimum_durability_level = 8;</code>
     * @return int
     */
    public function getMinimumDurabilityLevel()
    {
        return isset($this->minimum_durability_level) ? $this->minimum_durability_level : 0;
    }

    public function hasMinimumDurabilityLevel()
    {
        return isset($this->minimum_durability_level);
    }

    public function clearMinimumDurabilityLevel()
    {
        unset($this->minimum_durability_level);
    }

    /**
     * Generated from protobuf field <code>optional .couchbase.kv.v1.DurabilityLevel minimum_durability_level = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMinimumDurabilityLevel($var)
    {
        GPBUtil::checkEnum($var, \Couchbase\Protostellar\Generated\KV\V1\DurabilityLevel::class);
        $this->minimum_durability_level = $var;

        return $this;
    }

}

