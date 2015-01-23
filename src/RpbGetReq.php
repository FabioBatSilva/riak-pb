<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbGetReq extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbGetReq');

            // required bytes bucket = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "bucket";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // required bytes key = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "key";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional uint32 r = 3
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "r";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_UINT32;

            $descriptor->addField($f);

            // optional uint32 pr = 4
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 4;
            $f->name   = "pr";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_UINT32;

            $descriptor->addField($f);

            // optional bool basic_quorum = 5
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 5;
            $f->name   = "basic_quorum";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            // optional bool notfound_ok = 6
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 6;
            $f->name   = "notfound_ok";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            // optional bytes if_modified = 7
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 7;
            $f->name   = "if_modified";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional bool head = 8
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 8;
            $f->name   = "head";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            // optional bool deletedvclock = 9
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 9;
            $f->name   = "deletedvclock";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            // optional uint32 timeout = 10
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 10;
            $f->name   = "timeout";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_UINT32;

            $descriptor->addField($f);

            // optional bool sloppy_quorum = 11
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 11;
            $f->name   = "sloppy_quorum";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BOOL;

            $descriptor->addField($f);

            // optional uint32 n_val = 12
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 12;
            $f->name   = "n_val";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_UINT32;

            $descriptor->addField($f);

            // optional bytes type = 13
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 13;
            $f->name   = "type";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "bucket" has a value
         *
         * @return boolean
         */
        public function hasBucket()
        {
            return isset($this->bucket);
        }

        /**
         * Clear "bucket" value
         */
        public function clearBucket()
        {
            unset($this->bucket);
        }

        /**
         * Get "bucket" value
         * @return string                  *
         *
         */
        public function getBucket()
        {
            return $this->bucket;
        }

        /**
         * Set "bucket" value
         *
         * @param string $value
         */
        public function setBucket($value)
        {
            return $this->bucket = $value;
        }

        /**
         * Check if "key" has a value
         *
         * @return boolean
         */
        public function hasKey()
        {
            return isset($this->key);
        }

        /**
         * Clear "key" value
         */
        public function clearKey()
        {
            unset($this->key);
        }

        /**
         * Get "key" value
         * @return string                  *
         *
         */
        public function getKey()
        {
            return $this->key;
        }

        /**
         * Set "key" value
         *
         * @param string $value
         */
        public function setKey($value)
        {
            return $this->key = $value;
        }

        /**
         * Check if "r" has a value
         *
         * @return boolean
         */
        public function hasR()
        {
            return isset($this->r);
        }

        /**
         * Clear "r" value
         */
        public function clearR()
        {
            unset($this->r);
        }

        /**
         * Get "r" value
         * @return \PhpOption\Option of type (int)
         *
         *
         */
        public function getR()
        {
            return \PhpOption\Option::fromValue($this->r);
        }

        /**
         * Set "r" value
         *
         * @param int $value
         */
        public function setR($value)
        {
            return $this->r = $value;
        }

        /**
         * Check if "pr" has a value
         *
         * @return boolean
         */
        public function hasPr()
        {
            return isset($this->pr);
        }

        /**
         * Clear "pr" value
         */
        public function clearPr()
        {
            unset($this->pr);
        }

        /**
         * Get "pr" value
         * @return \PhpOption\Option of type (int)
         *
         *
         */
        public function getPr()
        {
            return \PhpOption\Option::fromValue($this->pr);
        }

        /**
         * Set "pr" value
         *
         * @param int $value
         */
        public function setPr($value)
        {
            return $this->pr = $value;
        }

        /**
         * Check if "basic_quorum" has a value
         *
         * @return boolean
         */
        public function hasBasicQuorum()
        {
            return isset($this->basic_quorum);
        }

        /**
         * Clear "basic_quorum" value
         */
        public function clearBasicQuorum()
        {
            unset($this->basic_quorum);
        }

        /**
         * Get "basic_quorum" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getBasicQuorum()
        {
            return \PhpOption\Option::fromValue($this->basic_quorum);
        }

        /**
         * Set "basic_quorum" value
         *
         * @param boolean $value
         */
        public function setBasicQuorum($value)
        {
            return $this->basic_quorum = $value;
        }

        /**
         * Check if "notfound_ok" has a value
         *
         * @return boolean
         */
        public function hasNotfoundOk()
        {
            return isset($this->notfound_ok);
        }

        /**
         * Clear "notfound_ok" value
         */
        public function clearNotfoundOk()
        {
            unset($this->notfound_ok);
        }

        /**
         * Get "notfound_ok" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getNotfoundOk()
        {
            return \PhpOption\Option::fromValue($this->notfound_ok);
        }

        /**
         * Set "notfound_ok" value
         *
         * @param boolean $value
         */
        public function setNotfoundOk($value)
        {
            return $this->notfound_ok = $value;
        }

        /**
         * Check if "if_modified" has a value
         *
         * @return boolean
         */
        public function hasIfModified()
        {
            return isset($this->if_modified);
        }

        /**
         * Clear "if_modified" value
         */
        public function clearIfModified()
        {
            unset($this->if_modified);
        }

        /**
         * Get "if_modified" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getIfModified()
        {
            return \PhpOption\Option::fromValue($this->if_modified);
        }

        /**
         * Set "if_modified" value
         *
         * @param string $value
         */
        public function setIfModified($value)
        {
            return $this->if_modified = $value;
        }

        /**
         * Check if "head" has a value
         *
         * @return boolean
         */
        public function hasHead()
        {
            return isset($this->head);
        }

        /**
         * Clear "head" value
         */
        public function clearHead()
        {
            unset($this->head);
        }

        /**
         * Get "head" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getHead()
        {
            return \PhpOption\Option::fromValue($this->head);
        }

        /**
         * Set "head" value
         *
         * @param boolean $value
         */
        public function setHead($value)
        {
            return $this->head = $value;
        }

        /**
         * Check if "deletedvclock" has a value
         *
         * @return boolean
         */
        public function hasDeletedvclock()
        {
            return isset($this->deletedvclock);
        }

        /**
         * Clear "deletedvclock" value
         */
        public function clearDeletedvclock()
        {
            unset($this->deletedvclock);
        }

        /**
         * Get "deletedvclock" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getDeletedvclock()
        {
            return \PhpOption\Option::fromValue($this->deletedvclock);
        }

        /**
         * Set "deletedvclock" value
         *
         * @param boolean $value
         */
        public function setDeletedvclock($value)
        {
            return $this->deletedvclock = $value;
        }

        /**
         * Check if "timeout" has a value
         *
         * @return boolean
         */
        public function hasTimeout()
        {
            return isset($this->timeout);
        }

        /**
         * Clear "timeout" value
         */
        public function clearTimeout()
        {
            unset($this->timeout);
        }

        /**
         * Get "timeout" value
         * @return \PhpOption\Option of type (int)
         *
         *
         */
        public function getTimeout()
        {
            return \PhpOption\Option::fromValue($this->timeout);
        }

        /**
         * Set "timeout" value
         *
         * @param int $value
         */
        public function setTimeout($value)
        {
            return $this->timeout = $value;
        }

        /**
         * Check if "sloppy_quorum" has a value
         *
         * @return boolean
         */
        public function hasSloppyQuorum()
        {
            return isset($this->sloppy_quorum);
        }

        /**
         * Clear "sloppy_quorum" value
         */
        public function clearSloppyQuorum()
        {
            unset($this->sloppy_quorum);
        }

        /**
         * Get "sloppy_quorum" value
         * @return \PhpOption\Option of type (boolean)
         *
         *
         */
        public function getSloppyQuorum()
        {
            return \PhpOption\Option::fromValue($this->sloppy_quorum);
        }

        /**
         * Set "sloppy_quorum" value
         *
         * @param boolean $value
         */
        public function setSloppyQuorum($value)
        {
            return $this->sloppy_quorum = $value;
        }

        /**
         * Check if "n_val" has a value
         *
         * @return boolean
         */
        public function hasNVal()
        {
            return isset($this->n_val);
        }

        /**
         * Clear "n_val" value
         */
        public function clearNVal()
        {
            unset($this->n_val);
        }

        /**
         * Get "n_val" value
         * @return \PhpOption\Option of type (int)
         *
         *
         */
        public function getNVal()
        {
            return \PhpOption\Option::fromValue($this->n_val);
        }

        /**
         * Set "n_val" value
         *
         * @param int $value
         */
        public function setNVal($value)
        {
            return $this->n_val = $value;
        }

        /**
         * Check if "type" has a value
         *
         * @return boolean
         */
        public function hasType()
        {
            return isset($this->type);
        }

        /**
         * Clear "type" value
         */
        public function clearType()
        {
            unset($this->type);
        }

        /**
         * Get "type" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getType()
        {
            return \PhpOption\Option::fromValue($this->type);
        }

        /**
         * Set "type" value
         *
         * @param string $value
         */
        public function setType($value)
        {
            return $this->type = $value;
        }
    }
}