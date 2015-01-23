<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: riak.proto
//   Date: 2015-01-16 03:40:25


namespace Riak\Client\ProtoBuf {

    class MapUpdate extends \DrSlump\Protobuf\Message
    {
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.MapUpdate');

            // required message field = 1
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "field";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REQUIRED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\MapField';

            $descriptor->addField($f);

            // optional message counter_op = 2
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "counter_op";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\CounterOp';

            $descriptor->addField($f);

            // optional message set_op = 3
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "set_op";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;

            $f->reference = '\Riak\Client\ProtoBuf\SetOp';

            $descriptor->addField($f);

            // optional bytes register_op = 4
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 4;
            $f->name   = "register_op";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_BYTES;

            $descriptor->addField($f);

            // optional enum flag_op = 5
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 5;
            $f->name   = "flag_op";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_ENUM;

            $f->reference = '\Riak\Client\ProtoBuf\MapUpdate\FlagOp';

            $descriptor->addField($f);

            // optional message map_op = 6
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 6;
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
         * Check if "field" has a value
         *
         * @return boolean
         */
        public function hasField()
        {
            return isset($this->field);
        }

        /**
         * Clear "field" value
         */
        public function clearField()
        {
            unset($this->field);
        }

        /**
         * Get "field" value
         * @return MapField                  *
         *
         */
        public function getField()
        {
            return $this->field;
        }

        /**
         * Set "field" value
         *
         * @param MapField $value
         */
        public function setField($value)
        {
            return $this->field = $value;
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
         * Check if "register_op" has a value
         *
         * @return boolean
         */
        public function hasRegisterOp()
        {
            return isset($this->register_op);
        }

        /**
         * Clear "register_op" value
         */
        public function clearRegisterOp()
        {
            unset($this->register_op);
        }

        /**
         * Get "register_op" value
         * @return \PhpOption\Option of type (string)
         *
         *
         */
        public function getRegisterOp()
        {
            return \PhpOption\Option::fromValue($this->register_op);
        }

        /**
         * Set "register_op" value
         *
         * @param string $value
         */
        public function setRegisterOp($value)
        {
            return $this->register_op = $value;
        }

        /**
         * Check if "flag_op" has a value
         *
         * @return boolean
         */
        public function hasFlagOp()
        {
            return isset($this->flag_op);
        }

        /**
         * Clear "flag_op" value
         */
        public function clearFlagOp()
        {
            unset($this->flag_op);
        }

        /**
         * Get "flag_op" value
         * @return \PhpOption\Option of type (int - MapUpdate\FlagOp)
         *
         *
         */
        public function getFlagOp()
        {
            return \PhpOption\Option::fromValue($this->flag_op);
        }

        /**
         * Set "flag_op" value
         *
         * @param int - MapUpdate\FlagOp $value
         */
        public function setFlagOp($value)
        {
            return $this->flag_op = $value;
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