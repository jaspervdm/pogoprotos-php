<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Requests/Messages/GetIncensePokemonMessage.proto

namespace POGOProtos\Networking\Requests\Messages;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class GetIncensePokemonMessage extends \Google\Protobuf\Internal\Message
{
    private $player_latitude = 0.0;
    private $player_longitude = 0.0;

    public function getPlayerLatitude()
    {
        return $this->player_latitude;
    }

    public function setPlayerLatitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_latitude = $var;
    }

    public function getPlayerLongitude()
    {
        return $this->player_longitude;
    }

    public function setPlayerLongitude($var)
    {
        GPBUtil::checkDouble($var);
        $this->player_longitude = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ac8010a46504f474f50726f746f732f4e6574776f726b696e672f526571" .
    "75657374732f4d657373616765732f476574496e63656e7365506f6b656d" .
    "6f6e4d6573736167652e70726f746f1227504f474f50726f746f732e4e65" .
    "74776f726b696e672e52657175657374732e4d65737361676573224d0a18" .
    "476574496e63656e7365506f6b656d6f6e4d65737361676512170a0f706c" .
    "617965725f6c6174697475646518012001280112180a10706c617965725f" .
    "6c6f6e676974756465180220012801620670726f746f33"
));
