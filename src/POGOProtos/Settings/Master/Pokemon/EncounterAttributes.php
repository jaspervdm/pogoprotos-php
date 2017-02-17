<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/Master/Pokemon/EncounterAttributes.proto
 */


namespace POGOProtos\Settings\Master\Pokemon;

/**
 * Protobuf message : POGOProtos.Settings.Master.Pokemon.EncounterAttributes
 */
class EncounterAttributes extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * base_capture_rate optional float = 1
     *
     * @var float
     */
    protected $base_capture_rate = null;

    /**
     * base_flee_rate optional float = 2
     *
     * @var float
     */
    protected $base_flee_rate = null;

    /**
     * collision_radius_m optional float = 3
     *
     * @var float
     */
    protected $collision_radius_m = null;

    /**
     * collision_height_m optional float = 4
     *
     * @var float
     */
    protected $collision_height_m = null;

    /**
     * collision_head_radius_m optional float = 5
     *
     * @var float
     */
    protected $collision_head_radius_m = null;

    /**
     * movement_type optional enum = 6
     *
     * @var \POGOProtos\Enums\PokemonMovementType
     */
    protected $movement_type = null;

    /**
     * movement_timer_s optional float = 7
     *
     * @var float
     */
    protected $movement_timer_s = null;

    /**
     * jump_time_s optional float = 8
     *
     * @var float
     */
    protected $jump_time_s = null;

    /**
     * attack_timer_s optional float = 9
     *
     * @var float
     */
    protected $attack_timer_s = null;

    /**
     * bonus_candy_capture_reward optional int32 = 10
     *
     * @var int
     */
    protected $bonus_candy_capture_reward = null;

    /**
     * bonus_stardust_capture_reward optional int32 = 11
     *
     * @var int
     */
    protected $bonus_stardust_capture_reward = null;

    /**
     * attack_probability optional float = 12
     *
     * @var float
     */
    protected $attack_probability = null;

    /**
     * dodge_probability optional float = 13
     *
     * @var float
     */
    protected $dodge_probability = null;

    /**
     * dodge_duration_s optional float = 14
     *
     * @var float
     */
    protected $dodge_duration_s = null;

    /**
     * dodge_distance optional float = 15
     *
     * @var float
     */
    protected $dodge_distance = null;

    /**
     * camera_distance optional float = 16
     *
     * @var float
     */
    protected $camera_distance = null;

    /**
     * min_pokemon_action_frequency_s optional float = 17
     *
     * @var float
     */
    protected $min_pokemon_action_frequency_s = null;

    /**
     * max_pokemon_action_frequency_s optional float = 18
     *
     * @var float
     */
    protected $max_pokemon_action_frequency_s = null;

    /**
     * Check if 'base_capture_rate' has a value
     *
     * @return bool
     */
    public function hasBaseCaptureRate()
    {
        return $this->base_capture_rate !== null;
    }

    /**
     * Get 'base_capture_rate' value
     *
     * @return float
     */
    public function getBaseCaptureRate()
    {
        return $this->base_capture_rate;
    }

    /**
     * Set 'base_capture_rate' value
     *
     * @param float $value
     */
    public function setBaseCaptureRate($value = null)
    {
        $this->base_capture_rate = $value;
    }

    /**
     * Check if 'base_flee_rate' has a value
     *
     * @return bool
     */
    public function hasBaseFleeRate()
    {
        return $this->base_flee_rate !== null;
    }

    /**
     * Get 'base_flee_rate' value
     *
     * @return float
     */
    public function getBaseFleeRate()
    {
        return $this->base_flee_rate;
    }

    /**
     * Set 'base_flee_rate' value
     *
     * @param float $value
     */
    public function setBaseFleeRate($value = null)
    {
        $this->base_flee_rate = $value;
    }

    /**
     * Check if 'collision_radius_m' has a value
     *
     * @return bool
     */
    public function hasCollisionRadiusM()
    {
        return $this->collision_radius_m !== null;
    }

    /**
     * Get 'collision_radius_m' value
     *
     * @return float
     */
    public function getCollisionRadiusM()
    {
        return $this->collision_radius_m;
    }

    /**
     * Set 'collision_radius_m' value
     *
     * @param float $value
     */
    public function setCollisionRadiusM($value = null)
    {
        $this->collision_radius_m = $value;
    }

    /**
     * Check if 'collision_height_m' has a value
     *
     * @return bool
     */
    public function hasCollisionHeightM()
    {
        return $this->collision_height_m !== null;
    }

    /**
     * Get 'collision_height_m' value
     *
     * @return float
     */
    public function getCollisionHeightM()
    {
        return $this->collision_height_m;
    }

    /**
     * Set 'collision_height_m' value
     *
     * @param float $value
     */
    public function setCollisionHeightM($value = null)
    {
        $this->collision_height_m = $value;
    }

    /**
     * Check if 'collision_head_radius_m' has a value
     *
     * @return bool
     */
    public function hasCollisionHeadRadiusM()
    {
        return $this->collision_head_radius_m !== null;
    }

    /**
     * Get 'collision_head_radius_m' value
     *
     * @return float
     */
    public function getCollisionHeadRadiusM()
    {
        return $this->collision_head_radius_m;
    }

    /**
     * Set 'collision_head_radius_m' value
     *
     * @param float $value
     */
    public function setCollisionHeadRadiusM($value = null)
    {
        $this->collision_head_radius_m = $value;
    }

    /**
     * Check if 'movement_type' has a value
     *
     * @return bool
     */
    public function hasMovementType()
    {
        return $this->movement_type !== null;
    }

    /**
     * Get 'movement_type' value
     *
     * @return \POGOProtos\Enums\PokemonMovementType
     */
    public function getMovementType()
    {
        return $this->movement_type;
    }

    /**
     * Set 'movement_type' value
     *
     * @param \POGOProtos\Enums\PokemonMovementType $value
     */
    public function setMovementType(\POGOProtos\Enums\PokemonMovementType $value = null)
    {
        $this->movement_type = $value;
    }

    /**
     * Check if 'movement_timer_s' has a value
     *
     * @return bool
     */
    public function hasMovementTimerS()
    {
        return $this->movement_timer_s !== null;
    }

    /**
     * Get 'movement_timer_s' value
     *
     * @return float
     */
    public function getMovementTimerS()
    {
        return $this->movement_timer_s;
    }

    /**
     * Set 'movement_timer_s' value
     *
     * @param float $value
     */
    public function setMovementTimerS($value = null)
    {
        $this->movement_timer_s = $value;
    }

    /**
     * Check if 'jump_time_s' has a value
     *
     * @return bool
     */
    public function hasJumpTimeS()
    {
        return $this->jump_time_s !== null;
    }

    /**
     * Get 'jump_time_s' value
     *
     * @return float
     */
    public function getJumpTimeS()
    {
        return $this->jump_time_s;
    }

    /**
     * Set 'jump_time_s' value
     *
     * @param float $value
     */
    public function setJumpTimeS($value = null)
    {
        $this->jump_time_s = $value;
    }

    /**
     * Check if 'attack_timer_s' has a value
     *
     * @return bool
     */
    public function hasAttackTimerS()
    {
        return $this->attack_timer_s !== null;
    }

    /**
     * Get 'attack_timer_s' value
     *
     * @return float
     */
    public function getAttackTimerS()
    {
        return $this->attack_timer_s;
    }

    /**
     * Set 'attack_timer_s' value
     *
     * @param float $value
     */
    public function setAttackTimerS($value = null)
    {
        $this->attack_timer_s = $value;
    }

    /**
     * Check if 'bonus_candy_capture_reward' has a value
     *
     * @return bool
     */
    public function hasBonusCandyCaptureReward()
    {
        return $this->bonus_candy_capture_reward !== null;
    }

    /**
     * Get 'bonus_candy_capture_reward' value
     *
     * @return int
     */
    public function getBonusCandyCaptureReward()
    {
        return $this->bonus_candy_capture_reward;
    }

    /**
     * Set 'bonus_candy_capture_reward' value
     *
     * @param int $value
     */
    public function setBonusCandyCaptureReward($value = null)
    {
        $this->bonus_candy_capture_reward = $value;
    }

    /**
     * Check if 'bonus_stardust_capture_reward' has a value
     *
     * @return bool
     */
    public function hasBonusStardustCaptureReward()
    {
        return $this->bonus_stardust_capture_reward !== null;
    }

    /**
     * Get 'bonus_stardust_capture_reward' value
     *
     * @return int
     */
    public function getBonusStardustCaptureReward()
    {
        return $this->bonus_stardust_capture_reward;
    }

    /**
     * Set 'bonus_stardust_capture_reward' value
     *
     * @param int $value
     */
    public function setBonusStardustCaptureReward($value = null)
    {
        $this->bonus_stardust_capture_reward = $value;
    }

    /**
     * Check if 'attack_probability' has a value
     *
     * @return bool
     */
    public function hasAttackProbability()
    {
        return $this->attack_probability !== null;
    }

    /**
     * Get 'attack_probability' value
     *
     * @return float
     */
    public function getAttackProbability()
    {
        return $this->attack_probability;
    }

    /**
     * Set 'attack_probability' value
     *
     * @param float $value
     */
    public function setAttackProbability($value = null)
    {
        $this->attack_probability = $value;
    }

    /**
     * Check if 'dodge_probability' has a value
     *
     * @return bool
     */
    public function hasDodgeProbability()
    {
        return $this->dodge_probability !== null;
    }

    /**
     * Get 'dodge_probability' value
     *
     * @return float
     */
    public function getDodgeProbability()
    {
        return $this->dodge_probability;
    }

    /**
     * Set 'dodge_probability' value
     *
     * @param float $value
     */
    public function setDodgeProbability($value = null)
    {
        $this->dodge_probability = $value;
    }

    /**
     * Check if 'dodge_duration_s' has a value
     *
     * @return bool
     */
    public function hasDodgeDurationS()
    {
        return $this->dodge_duration_s !== null;
    }

    /**
     * Get 'dodge_duration_s' value
     *
     * @return float
     */
    public function getDodgeDurationS()
    {
        return $this->dodge_duration_s;
    }

    /**
     * Set 'dodge_duration_s' value
     *
     * @param float $value
     */
    public function setDodgeDurationS($value = null)
    {
        $this->dodge_duration_s = $value;
    }

    /**
     * Check if 'dodge_distance' has a value
     *
     * @return bool
     */
    public function hasDodgeDistance()
    {
        return $this->dodge_distance !== null;
    }

    /**
     * Get 'dodge_distance' value
     *
     * @return float
     */
    public function getDodgeDistance()
    {
        return $this->dodge_distance;
    }

    /**
     * Set 'dodge_distance' value
     *
     * @param float $value
     */
    public function setDodgeDistance($value = null)
    {
        $this->dodge_distance = $value;
    }

    /**
     * Check if 'camera_distance' has a value
     *
     * @return bool
     */
    public function hasCameraDistance()
    {
        return $this->camera_distance !== null;
    }

    /**
     * Get 'camera_distance' value
     *
     * @return float
     */
    public function getCameraDistance()
    {
        return $this->camera_distance;
    }

    /**
     * Set 'camera_distance' value
     *
     * @param float $value
     */
    public function setCameraDistance($value = null)
    {
        $this->camera_distance = $value;
    }

    /**
     * Check if 'min_pokemon_action_frequency_s' has a value
     *
     * @return bool
     */
    public function hasMinPokemonActionFrequencyS()
    {
        return $this->min_pokemon_action_frequency_s !== null;
    }

    /**
     * Get 'min_pokemon_action_frequency_s' value
     *
     * @return float
     */
    public function getMinPokemonActionFrequencyS()
    {
        return $this->min_pokemon_action_frequency_s;
    }

    /**
     * Set 'min_pokemon_action_frequency_s' value
     *
     * @param float $value
     */
    public function setMinPokemonActionFrequencyS($value = null)
    {
        $this->min_pokemon_action_frequency_s = $value;
    }

    /**
     * Check if 'max_pokemon_action_frequency_s' has a value
     *
     * @return bool
     */
    public function hasMaxPokemonActionFrequencyS()
    {
        return $this->max_pokemon_action_frequency_s !== null;
    }

    /**
     * Get 'max_pokemon_action_frequency_s' value
     *
     * @return float
     */
    public function getMaxPokemonActionFrequencyS()
    {
        return $this->max_pokemon_action_frequency_s;
    }

    /**
     * Set 'max_pokemon_action_frequency_s' value
     *
     * @param float $value
     */
    public function setMaxPokemonActionFrequencyS($value = null)
    {
        $this->max_pokemon_action_frequency_s = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        $message = new self();
        $values  = array_merge([
            'base_capture_rate' => null,
            'base_flee_rate' => null,
            'collision_radius_m' => null,
            'collision_height_m' => null,
            'collision_head_radius_m' => null,
            'movement_type' => null,
            'movement_timer_s' => null,
            'jump_time_s' => null,
            'attack_timer_s' => null,
            'bonus_candy_capture_reward' => null,
            'bonus_stardust_capture_reward' => null,
            'attack_probability' => null,
            'dodge_probability' => null,
            'dodge_duration_s' => null,
            'dodge_distance' => null,
            'camera_distance' => null,
            'min_pokemon_action_frequency_s' => null,
            'max_pokemon_action_frequency_s' => null
        ], $values);

        $message->setBaseCaptureRate($values['base_capture_rate']);
        $message->setBaseFleeRate($values['base_flee_rate']);
        $message->setCollisionRadiusM($values['collision_radius_m']);
        $message->setCollisionHeightM($values['collision_height_m']);
        $message->setCollisionHeadRadiusM($values['collision_head_radius_m']);
        $message->setMovementType($values['movement_type']);
        $message->setMovementTimerS($values['movement_timer_s']);
        $message->setJumpTimeS($values['jump_time_s']);
        $message->setAttackTimerS($values['attack_timer_s']);
        $message->setBonusCandyCaptureReward($values['bonus_candy_capture_reward']);
        $message->setBonusStardustCaptureReward($values['bonus_stardust_capture_reward']);
        $message->setAttackProbability($values['attack_probability']);
        $message->setDodgeProbability($values['dodge_probability']);
        $message->setDodgeDurationS($values['dodge_duration_s']);
        $message->setDodgeDistance($values['dodge_distance']);
        $message->setCameraDistance($values['camera_distance']);
        $message->setMinPokemonActionFrequencyS($values['min_pokemon_action_frequency_s']);
        $message->setMaxPokemonActionFrequencyS($values['max_pokemon_action_frequency_s']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'EncounterAttributes',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'base_capture_rate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'base_flee_rate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'collision_radius_m',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'collision_height_m',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'collision_head_radius_m',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'movement_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.PokemonMovementType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'movement_timer_s',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'jump_time_s',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'attack_timer_s',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'bonus_candy_capture_reward',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'bonus_stardust_capture_reward',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'attack_probability',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'dodge_probability',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'dodge_duration_s',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'dodge_distance',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 16,
                    'name' => 'camera_distance',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 17,
                    'name' => 'min_pokemon_action_frequency_s',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 18,
                    'name' => 'max_pokemon_action_frequency_s',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->base_capture_rate !== null) {
            $writer->writeVarint($stream, 13);
            $writer->writeFloat($stream, $this->base_capture_rate);
        }

        if ($this->base_flee_rate !== null) {
            $writer->writeVarint($stream, 21);
            $writer->writeFloat($stream, $this->base_flee_rate);
        }

        if ($this->collision_radius_m !== null) {
            $writer->writeVarint($stream, 29);
            $writer->writeFloat($stream, $this->collision_radius_m);
        }

        if ($this->collision_height_m !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFloat($stream, $this->collision_height_m);
        }

        if ($this->collision_head_radius_m !== null) {
            $writer->writeVarint($stream, 45);
            $writer->writeFloat($stream, $this->collision_head_radius_m);
        }

        if ($this->movement_type !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->movement_type->value());
        }

        if ($this->movement_timer_s !== null) {
            $writer->writeVarint($stream, 61);
            $writer->writeFloat($stream, $this->movement_timer_s);
        }

        if ($this->jump_time_s !== null) {
            $writer->writeVarint($stream, 69);
            $writer->writeFloat($stream, $this->jump_time_s);
        }

        if ($this->attack_timer_s !== null) {
            $writer->writeVarint($stream, 77);
            $writer->writeFloat($stream, $this->attack_timer_s);
        }

        if ($this->bonus_candy_capture_reward !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->bonus_candy_capture_reward);
        }

        if ($this->bonus_stardust_capture_reward !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeVarint($stream, $this->bonus_stardust_capture_reward);
        }

        if ($this->attack_probability !== null) {
            $writer->writeVarint($stream, 101);
            $writer->writeFloat($stream, $this->attack_probability);
        }

        if ($this->dodge_probability !== null) {
            $writer->writeVarint($stream, 109);
            $writer->writeFloat($stream, $this->dodge_probability);
        }

        if ($this->dodge_duration_s !== null) {
            $writer->writeVarint($stream, 117);
            $writer->writeFloat($stream, $this->dodge_duration_s);
        }

        if ($this->dodge_distance !== null) {
            $writer->writeVarint($stream, 125);
            $writer->writeFloat($stream, $this->dodge_distance);
        }

        if ($this->camera_distance !== null) {
            $writer->writeVarint($stream, 133);
            $writer->writeFloat($stream, $this->camera_distance);
        }

        if ($this->min_pokemon_action_frequency_s !== null) {
            $writer->writeVarint($stream, 141);
            $writer->writeFloat($stream, $this->min_pokemon_action_frequency_s);
        }

        if ($this->max_pokemon_action_frequency_s !== null) {
            $writer->writeVarint($stream, 149);
            $writer->writeFloat($stream, $this->max_pokemon_action_frequency_s);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->base_capture_rate = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->base_flee_rate = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->collision_radius_m = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->collision_height_m = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->collision_head_radius_m = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->movement_type = \POGOProtos\Enums\PokemonMovementType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->movement_timer_s = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->jump_time_s = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->attack_timer_s = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->bonus_candy_capture_reward = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->bonus_stardust_capture_reward = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->attack_probability = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->dodge_probability = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->dodge_duration_s = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->dodge_distance = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 16) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->camera_distance = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 17) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->min_pokemon_action_frequency_s = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 18) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->max_pokemon_action_frequency_s = $reader->readFloat($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->base_capture_rate !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->base_flee_rate !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->collision_radius_m !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->collision_height_m !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->collision_head_radius_m !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->movement_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->movement_type->value());
        }

        if ($this->movement_timer_s !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->jump_time_s !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->attack_timer_s !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->bonus_candy_capture_reward !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->bonus_candy_capture_reward);
        }

        if ($this->bonus_stardust_capture_reward !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->bonus_stardust_capture_reward);
        }

        if ($this->attack_probability !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->dodge_probability !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->dodge_duration_s !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->dodge_distance !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->camera_distance !== null) {
            $size += 2;
            $size += 4;
        }

        if ($this->min_pokemon_action_frequency_s !== null) {
            $size += 2;
            $size += 4;
        }

        if ($this->max_pokemon_action_frequency_s !== null) {
            $size += 2;
            $size += 4;
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->base_capture_rate = null;
        $this->base_flee_rate = null;
        $this->collision_radius_m = null;
        $this->collision_height_m = null;
        $this->collision_head_radius_m = null;
        $this->movement_type = null;
        $this->movement_timer_s = null;
        $this->jump_time_s = null;
        $this->attack_timer_s = null;
        $this->bonus_candy_capture_reward = null;
        $this->bonus_stardust_capture_reward = null;
        $this->attack_probability = null;
        $this->dodge_probability = null;
        $this->dodge_duration_s = null;
        $this->dodge_distance = null;
        $this->camera_distance = null;
        $this->min_pokemon_action_frequency_s = null;
        $this->max_pokemon_action_frequency_s = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Settings\Master\Pokemon\EncounterAttributes) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->base_capture_rate = ($message->base_capture_rate !== null) ? $message->base_capture_rate : $this->base_capture_rate;
        $this->base_flee_rate = ($message->base_flee_rate !== null) ? $message->base_flee_rate : $this->base_flee_rate;
        $this->collision_radius_m = ($message->collision_radius_m !== null) ? $message->collision_radius_m : $this->collision_radius_m;
        $this->collision_height_m = ($message->collision_height_m !== null) ? $message->collision_height_m : $this->collision_height_m;
        $this->collision_head_radius_m = ($message->collision_head_radius_m !== null) ? $message->collision_head_radius_m : $this->collision_head_radius_m;
        $this->movement_type = ($message->movement_type !== null) ? $message->movement_type : $this->movement_type;
        $this->movement_timer_s = ($message->movement_timer_s !== null) ? $message->movement_timer_s : $this->movement_timer_s;
        $this->jump_time_s = ($message->jump_time_s !== null) ? $message->jump_time_s : $this->jump_time_s;
        $this->attack_timer_s = ($message->attack_timer_s !== null) ? $message->attack_timer_s : $this->attack_timer_s;
        $this->bonus_candy_capture_reward = ($message->bonus_candy_capture_reward !== null) ? $message->bonus_candy_capture_reward : $this->bonus_candy_capture_reward;
        $this->bonus_stardust_capture_reward = ($message->bonus_stardust_capture_reward !== null) ? $message->bonus_stardust_capture_reward : $this->bonus_stardust_capture_reward;
        $this->attack_probability = ($message->attack_probability !== null) ? $message->attack_probability : $this->attack_probability;
        $this->dodge_probability = ($message->dodge_probability !== null) ? $message->dodge_probability : $this->dodge_probability;
        $this->dodge_duration_s = ($message->dodge_duration_s !== null) ? $message->dodge_duration_s : $this->dodge_duration_s;
        $this->dodge_distance = ($message->dodge_distance !== null) ? $message->dodge_distance : $this->dodge_distance;
        $this->camera_distance = ($message->camera_distance !== null) ? $message->camera_distance : $this->camera_distance;
        $this->min_pokemon_action_frequency_s = ($message->min_pokemon_action_frequency_s !== null) ? $message->min_pokemon_action_frequency_s : $this->min_pokemon_action_frequency_s;
        $this->max_pokemon_action_frequency_s = ($message->max_pokemon_action_frequency_s !== null) ? $message->max_pokemon_action_frequency_s : $this->max_pokemon_action_frequency_s;
    }


}

