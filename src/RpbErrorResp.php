<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class RpbErrorResp extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.RpbErrorResp');

            // required bytes errmsg = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "errmsg";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // required uint32 errcode = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "errcode";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_UINT32;

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "errmsg" has a value
         *
         * @return boolean
         */
        public function hasErrmsg()
        {
            return isset($this->errmsg);
        }

        /**
         * Clear "errmsg" value
         */
        public function clearErrmsg()
        {
            unset($this->errmsg);
        }

        /**
         * Get "errmsg" value
         * @return string                  *
         *
         */
        public function getErrmsg()
        {
            return $this->errmsg;
        }

        /**
         * Set "errmsg" value
         *
         * @param string $value
         */
        public function setErrmsg($value)
        {
            return $this->errmsg = $value;
        }

        /**
         * Check if "errcode" has a value
         *
         * @return boolean
         */
        public function hasErrcode()
        {
            return isset($this->errcode);
        }

        /**
         * Clear "errcode" value
         */
        public function clearErrcode()
        {
            unset($this->errcode);
        }

        /**
         * Get "errcode" value
         * @return int                  *
         *
         */
        public function getErrcode()
        {
            return $this->errcode;
        }

        /**
         * Set "errcode" value
         *
         * @param int $value
         */
        public function setErrcode($value)
        {
            return $this->errcode = $value;
        }
    }
}