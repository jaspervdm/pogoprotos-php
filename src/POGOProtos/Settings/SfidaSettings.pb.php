<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Settings/SfidaSettings.proto

namespace POGOProtos\Settings;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class SfidaSettings extends \Google\Protobuf\Internal\Message
{
    private $low_battery_threshold = 0.0;

    public function getLowBatteryThreshold()
    {
        return $this->low_battery_threshold;
    }

    public function setLowBatteryThreshold($var)
    {
        GPBUtil::checkFloat($var);
        $this->low_battery_threshold = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a760a27504f474f50726f746f732f53657474696e67732f536669646153" .
    "657474696e67732e70726f746f1213504f474f50726f746f732e53657474" .
    "696e6773222e0a0d536669646153657474696e6773121d0a156c6f775f62" .
    "6174746572795f7468726573686f6c64180120012802620670726f746f33"
));

