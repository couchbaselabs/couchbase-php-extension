<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: couchbase/kv/v1/kv.proto

namespace Couchbase\Protostellar\Generated\KV\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>couchbase.kv.v1.GetResponse</code>
 */
class GetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes content = 1;</code>
     */
    protected $content = '';
    /**
     * Generated from protobuf field <code>uint32 content_flags = 6;</code>
     */
    protected $content_flags = 0;
    /**
     * Generated from protobuf field <code>uint64 cas = 3;</code>
     */
    protected $cas = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 4;</code>
     */
    protected $expiry = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $content
     *     @type int $content_flags
     *     @type int|string $cas
     *     @type \Google\Protobuf\Timestamp $expiry
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Couchbase\Kv\V1\Kv::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 content_flags = 6;</code>
     * @return int
     */
    public function getContentFlags()
    {
        return $this->content_flags;
    }

    /**
     * Generated from protobuf field <code>uint32 content_flags = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setContentFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->content_flags = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 cas = 3;</code>
     * @return int|string
     */
    public function getCas()
    {
        return $this->cas;
    }

    /**
     * Generated from protobuf field <code>uint64 cas = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCas($var)
    {
        GPBUtil::checkUint64($var);
        $this->cas = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    public function hasExpiry()
    {
        return isset($this->expiry);
    }

    public function clearExpiry()
    {
        unset($this->expiry);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiry = $var;

        return $this;
    }

}

