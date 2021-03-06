<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class DtOp extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.DtOp');

            // optional message counter_op = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "counter_op";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\CounterOp';

            $descriptor->addField($f);

            // optional message set_op = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "set_op";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\SetOp';

            $descriptor->addField($f);

            // optional message map_op = 3
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "map_op";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\MapOp';

            $descriptor->addField($f);

            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }

        /**
         * Check if "counter_op" has a value
         *
         * @return boolean
         */
        public function hasCounterOp()
        {
            return isset($this->counter_op);
        }

        /**
         * Clear "counter_op" value
         */
        public function clearCounterOp()
        {
            unset($this->counter_op);
        }

        /**
         * Get "counter_op" value
         * @return \PhpOption\Option of type (CounterOp)
         *
         *
         */
        public function getCounterOp()
        {
            return \PhpOption\Option::fromValue($this->counter_op);
        }

        /**
         * Set "counter_op" value
         *
         * @param CounterOp $value
         */
        public function setCounterOp($value)
        {
            return $this->counter_op = $value;
        }

        /**
         * Check if "set_op" has a value
         *
         * @return boolean
         */
        public function hasSetOp()
        {
            return isset($this->set_op);
        }

        /**
         * Clear "set_op" value
         */
        public function clearSetOp()
        {
            unset($this->set_op);
        }

        /**
         * Get "set_op" value
         * @return \PhpOption\Option of type (SetOp)
         *
         *
         */
        public function getSetOp()
        {
            return \PhpOption\Option::fromValue($this->set_op);
        }

        /**
         * Set "set_op" value
         *
         * @param SetOp $value
         */
        public function setSetOp($value)
        {
            return $this->set_op = $value;
        }

        /**
         * Check if "map_op" has a value
         *
         * @return boolean
         */
        public function hasMapOp()
        {
            return isset($this->map_op);
        }

        /**
         * Clear "map_op" value
         */
        public function clearMapOp()
        {
            unset($this->map_op);
        }

        /**
         * Get "map_op" value
         * @return \PhpOption\Option of type (MapOp)
         *
         *
         */
        public function getMapOp()
        {
            return \PhpOption\Option::fromValue($this->map_op);
        }

        /**
         * Set "map_op" value
         *
         * @param MapOp $value
         */
        public function setMapOp($value)
        {
            return $this->map_op = $value;
        }
    }
}
