<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Responses/DownloadItemTemplatesResponse.proto

namespace POGOProtos\Networking\Responses;

require_once('POGOProtos/Settings/Master/ItemSettings.pb.php');
require_once('POGOProtos/Settings/Master/MoveSettings.pb.php');
require_once('POGOProtos/Settings/Master/BadgeSettings.pb.php');
require_once('POGOProtos/Settings/Master/PokemonSettings.pb.php');
require_once('POGOProtos/Settings/Master/MoveSequenceSettings.pb.php');
require_once('POGOProtos/Settings/Master/TypeEffectiveSettings.pb.php');
require_once('POGOProtos/Settings/Master/CameraSettings.pb.php');
require_once('POGOProtos/Settings/Master/PlayerLevelSettings.pb.php');
require_once('POGOProtos/Settings/Master/GymLevelSettings.pb.php');
require_once('POGOProtos/Settings/Master/GymBattleSettings.pb.php');
require_once('POGOProtos/Settings/Master/EncounterSettings.pb.php');
require_once('POGOProtos/Settings/Master/IapItemDisplay.pb.php');
require_once('POGOProtos/Settings/Master/IapSettings.pb.php');
require_once('POGOProtos/Settings/Master/PokemonUpgradeSettings.pb.php');
require_once('POGOProtos/Settings/Master/EquippedBadgeSettings.pb.php');
require_once('POGOProtos/Settings/Master/QuestSettings.pb.php');
use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class DownloadItemTemplatesResponse extends \Google\Protobuf\Internal\Message
{
    private $success = false;
    private $item_templates;
    private $timestamp_ms = 0;

    public function getSuccess()
    {
        return $this->success;
    }

    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;
    }

    public function getItemTemplates()
    {
        return $this->item_templates;
    }

    public function setItemTemplates(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Networking\Responses\DownloadItemTemplatesResponse_ItemTemplate::class);
        $this->item_templates = $var;
    }

    public function getTimestampMs()
    {
        return $this->timestamp_ms;
    }

    public function setTimestampMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp_ms = $var;
    }

}

class DownloadItemTemplatesResponse_ItemTemplate extends \Google\Protobuf\Internal\Message
{
    private $template_id = '';
    private $pokemon_settings = null;
    private $item_settings = null;
    private $move_settings = null;
    private $move_sequence_settings = null;
    private $type_effective = null;
    private $badge_settings = null;
    private $camera = null;
    private $player_level = null;
    private $gym_level = null;
    private $battle_settings = null;
    private $encounter_settings = null;
    private $iap_item_display = null;
    private $iap_settings = null;
    private $pokemon_upgrades = null;
    private $equipped_badges = null;
    private $quest_settings = null;

    public function getTemplateId()
    {
        return $this->template_id;
    }

    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->template_id = $var;
    }

    public function getPokemonSettings()
    {
        return $this->pokemon_settings;
    }

    public function setPokemonSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\PokemonSettings::class);
        $this->pokemon_settings = $var;
    }

    public function getItemSettings()
    {
        return $this->item_settings;
    }

    public function setItemSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\ItemSettings::class);
        $this->item_settings = $var;
    }

    public function getMoveSettings()
    {
        return $this->move_settings;
    }

    public function setMoveSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\MoveSettings::class);
        $this->move_settings = $var;
    }

    public function getMoveSequenceSettings()
    {
        return $this->move_sequence_settings;
    }

    public function setMoveSequenceSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\MoveSequenceSettings::class);
        $this->move_sequence_settings = $var;
    }

    public function getTypeEffective()
    {
        return $this->type_effective;
    }

    public function setTypeEffective(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\TypeEffectiveSettings::class);
        $this->type_effective = $var;
    }

    public function getBadgeSettings()
    {
        return $this->badge_settings;
    }

    public function setBadgeSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\BadgeSettings::class);
        $this->badge_settings = $var;
    }

    public function getCamera()
    {
        return $this->camera;
    }

    public function setCamera(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\CameraSettings::class);
        $this->camera = $var;
    }

    public function getPlayerLevel()
    {
        return $this->player_level;
    }

    public function setPlayerLevel(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\PlayerLevelSettings::class);
        $this->player_level = $var;
    }

    public function getGymLevel()
    {
        return $this->gym_level;
    }

    public function setGymLevel(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\GymLevelSettings::class);
        $this->gym_level = $var;
    }

    public function getBattleSettings()
    {
        return $this->battle_settings;
    }

    public function setBattleSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\GymBattleSettings::class);
        $this->battle_settings = $var;
    }

    public function getEncounterSettings()
    {
        return $this->encounter_settings;
    }

    public function setEncounterSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\EncounterSettings::class);
        $this->encounter_settings = $var;
    }

    public function getIapItemDisplay()
    {
        return $this->iap_item_display;
    }

    public function setIapItemDisplay(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\IapItemDisplay::class);
        $this->iap_item_display = $var;
    }

    public function getIapSettings()
    {
        return $this->iap_settings;
    }

    public function setIapSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\IapSettings::class);
        $this->iap_settings = $var;
    }

    public function getPokemonUpgrades()
    {
        return $this->pokemon_upgrades;
    }

    public function setPokemonUpgrades(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\PokemonUpgradeSettings::class);
        $this->pokemon_upgrades = $var;
    }

    public function getEquippedBadges()
    {
        return $this->equipped_badges;
    }

    public function setEquippedBadges(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\EquippedBadgeSettings::class);
        $this->equipped_badges = $var;
    }

    public function getQuestSettings()
    {
        return $this->quest_settings;
    }

    public function setQuestSettings(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Settings\Master\QuestSettings::class);
        $this->quest_settings = $var;
    }

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0ad5110a43504f474f50726f746f732f4e6574776f726b696e672f526573" .
    "706f6e7365732f446f776e6c6f61644974656d54656d706c617465735265" .
    "73706f6e73652e70726f746f121f504f474f50726f746f732e4e6574776f" .
    "726b696e672e526573706f6e7365731a2d504f474f50726f746f732f5365" .
    "7474696e67732f4d61737465722f4974656d53657474696e67732e70726f" .
    "746f1a2d504f474f50726f746f732f53657474696e67732f4d6173746572" .
    "2f4d6f766553657474696e67732e70726f746f1a2e504f474f50726f746f" .
    "732f53657474696e67732f4d61737465722f426164676553657474696e67" .
    "732e70726f746f1a30504f474f50726f746f732f53657474696e67732f4d" .
    "61737465722f506f6b656d6f6e53657474696e67732e70726f746f1a3550" .
    "4f474f50726f746f732f53657474696e67732f4d61737465722f4d6f7665" .
    "53657175656e636553657474696e67732e70726f746f1a36504f474f5072" .
    "6f746f732f53657474696e67732f4d61737465722f547970654566666563" .
    "7469766553657474696e67732e70726f746f1a2f504f474f50726f746f73" .
    "2f53657474696e67732f4d61737465722f43616d65726153657474696e67" .
    "732e70726f746f1a34504f474f50726f746f732f53657474696e67732f4d" .
    "61737465722f506c617965724c6576656c53657474696e67732e70726f74" .
    "6f1a31504f474f50726f746f732f53657474696e67732f4d61737465722f" .
    "47796d4c6576656c53657474696e67732e70726f746f1a32504f474f5072" .
    "6f746f732f53657474696e67732f4d61737465722f47796d426174746c65" .
    "53657474696e67732e70726f746f1a32504f474f50726f746f732f536574" .
    "74696e67732f4d61737465722f456e636f756e74657253657474696e6773" .
    "2e70726f746f1a2f504f474f50726f746f732f53657474696e67732f4d61" .
    "737465722f4961704974656d446973706c61792e70726f746f1a2c504f47" .
    "4f50726f746f732f53657474696e67732f4d61737465722f496170536574" .
    "74696e67732e70726f746f1a37504f474f50726f746f732f53657474696e" .
    "67732f4d61737465722f506f6b656d6f6e5570677261646553657474696e" .
    "67732e70726f746f1a36504f474f50726f746f732f53657474696e67732f" .
    "4d61737465722f4571756970706564426164676553657474696e67732e70" .
    "726f746f1a2e504f474f50726f746f732f53657474696e67732f4d617374" .
    "65722f517565737453657474696e67732e70726f746f22b30a0a1d446f77" .
    "6e6c6f61644974656d54656d706c61746573526573706f6e7365120f0a07" .
    "7375636365737318012001280812630a0e6974656d5f74656d706c617465" .
    "7318022003280b324b2e504f474f50726f746f732e4e6574776f726b696e" .
    "672e526573706f6e7365732e446f776e6c6f61644974656d54656d706c61" .
    "746573526573706f6e73652e4974656d54656d706c61746512140a0c7469" .
    "6d657374616d705f6d731803200128041a85090a0c4974656d54656d706c" .
    "61746512130a0b74656d706c6174655f696418012001280912450a10706f" .
    "6b656d6f6e5f73657474696e677318022001280b322b2e504f474f50726f" .
    "746f732e53657474696e67732e4d61737465722e506f6b656d6f6e536574" .
    "74696e6773123f0a0d6974656d5f73657474696e677318032001280b3228" .
    "2e504f474f50726f746f732e53657474696e67732e4d61737465722e4974" .
    "656d53657474696e6773123f0a0d6d6f76655f73657474696e6773180420" .
    "01280b32282e504f474f50726f746f732e53657474696e67732e4d617374" .
    "65722e4d6f766553657474696e677312500a166d6f76655f73657175656e" .
    "63655f73657474696e677318052001280b32302e504f474f50726f746f73" .
    "2e53657474696e67732e4d61737465722e4d6f766553657175656e636553" .
    "657474696e677312490a0e747970655f6566666563746976651808200128" .
    "0b32312e504f474f50726f746f732e53657474696e67732e4d6173746572" .
    "2e5479706545666665637469766553657474696e677312410a0e62616467" .
    "655f73657474696e6773180a2001280b32292e504f474f50726f746f732e" .
    "53657474696e67732e4d61737465722e426164676553657474696e677312" .
    "3a0a0663616d657261180b2001280b322a2e504f474f50726f746f732e53" .
    "657474696e67732e4d61737465722e43616d65726153657474696e677312" .
    "450a0c706c617965725f6c6576656c180c2001280b322f2e504f474f5072" .
    "6f746f732e53657474696e67732e4d61737465722e506c617965724c6576" .
    "656c53657474696e6773123f0a0967796d5f6c6576656c180d2001280b32" .
    "2c2e504f474f50726f746f732e53657474696e67732e4d61737465722e47" .
    "796d4c6576656c53657474696e677312460a0f626174746c655f73657474" .
    "696e6773180e2001280b322d2e504f474f50726f746f732e53657474696e" .
    "67732e4d61737465722e47796d426174746c6553657474696e677312490a" .
    "12656e636f756e7465725f73657474696e6773180f2001280b322d2e504f" .
    "474f50726f746f732e53657474696e67732e4d61737465722e456e636f75" .
    "6e74657253657474696e677312440a106961705f6974656d5f646973706c" .
    "617918102001280b322a2e504f474f50726f746f732e53657474696e6773" .
    "2e4d61737465722e4961704974656d446973706c6179123d0a0c6961705f" .
    "73657474696e677318112001280b32272e504f474f50726f746f732e5365" .
    "7474696e67732e4d61737465722e49617053657474696e6773124c0a1070" .
    "6f6b656d6f6e5f757067726164657318122001280b32322e504f474f5072" .
    "6f746f732e53657474696e67732e4d61737465722e506f6b656d6f6e5570" .
    "677261646553657474696e6773124a0a0f65717569707065645f62616467" .
    "657318132001280b32312e504f474f50726f746f732e53657474696e6773" .
    "2e4d61737465722e4571756970706564426164676553657474696e677312" .
    "410a0e71756573745f73657474696e677318142001280b32292e504f474f" .
    "50726f746f732e53657474696e67732e4d61737465722e51756573745365" .
    "7474696e6773620670726f746f33"
));

