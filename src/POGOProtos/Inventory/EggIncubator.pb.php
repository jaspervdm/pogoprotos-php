<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Inventory/EggIncubator.proto

namespace POGOProtos\Inventory;

require_once('POGOProtos/Inventory/Item/ItemId.pb.php');
require_once('POGOProtos/Inventory/EggIncubatorType.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class EggIncubator extends \Google\Protobuf\Internal\Message
{
    private $id = '';
    private $item_id = 0;
    private $incubator_type = 0;
    private $uses_remaining = 0;
    private $pokemon_id = 0;
    private $start_km_walked = 0.0;
    private $target_km_walked = 0.0;

    public function getId()
    {
        return $this->id;
    }

    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
    }

    public function getItemId()
    {
        return $this->item_id;
    }

    public function setItemId($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\Item\ItemId::class);
        $this->item_id = $var;
    }

    public function getIncubatorType()
    {
        return $this->incubator_type;
    }

    public function setIncubatorType($var)
    {
        GPBUtil::checkEnum($var, \POGOProtos\Inventory\EggIncubatorType::class);
        $this->incubator_type = $var;
    }

    public function getUsesRemaining()
    {
        return $this->uses_remaining;
    }

    public function setUsesRemaining($var)
    {
        GPBUtil::checkInt32($var);
        $this->uses_remaining = $var;
    }

    public function getPokemonId()
    {
        return $this->pokemon_id;
    }

    public function setPokemonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->pokemon_id = $var;
    }

    public function getStartKmWalked()
    {
        return $this->start_km_walked;
    }

    public function setStartKmWalked($var)
    {
        GPBUtil::checkDouble($var);
        $this->start_km_walked = $var;
    }

    public function getTargetKmWalked()
    {
        return $this->target_km_walked;
    }

    public function setTargetKmWalked($var)
    {
        GPBUtil::checkDouble($var);
        $this->target_km_walked = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a8c030a27504f474f50726f746f732f496e76656e746f72792f45676749" .
    "6e63756261746f722e70726f746f1214504f474f50726f746f732e496e76" .
    "656e746f72791a26504f474f50726f746f732f496e76656e746f72792f49" .
    "74656d2f4974656d49642e70726f746f1a2b504f474f50726f746f732f49" .
    "6e76656e746f72792f456767496e63756261746f72547970652e70726f74" .
    "6f22ed010a0c456767496e63756261746f72120a0a026964180120012809" .
    "12320a076974656d5f696418022001280e32212e504f474f50726f746f73" .
    "2e496e76656e746f72792e4974656d2e4974656d4964123e0a0e696e6375" .
    "6261746f725f7479706518032001280e32262e504f474f50726f746f732e" .
    "496e76656e746f72792e456767496e63756261746f725479706512160a0e" .
    "757365735f72656d61696e696e6718042001280512120a0a706f6b656d6f" .
    "6e5f696418052001280412170a0f73746172745f6b6d5f77616c6b656418" .
    "062001280112180a107461726765745f6b6d5f77616c6b65641807200128" .
    "01620670726f746f33"
));
