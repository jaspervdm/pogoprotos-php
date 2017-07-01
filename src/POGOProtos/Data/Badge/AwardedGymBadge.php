<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Badge/AwardedGymBadge.proto
 */


namespace POGOProtos\Data\Badge;

/**
 * Protobuf message : POGOProtos.Data.Badge.AwardedGymBadge
 */
class AwardedGymBadge extends \Protobuf\AbstractMessage
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
     * fort_id optional string = 1
     *
     * @var string
     */
    protected $fort_id = null;

    /**
     * gym_badge_type optional enum = 2
     *
     * @var \POGOProtos\Enums\GymBadgeType
     */
    protected $gym_badge_type = null;

    /**
     * score optional uint32 = 3
     *
     * @var int
     */
    protected $score = null;

    /**
     * gym_badge_stats optional message = 4
     *
     * @var \POGOProtos\Data\Badge\GymBadgeStats
     */
    protected $gym_badge_stats = null;

    /**
     * last_update_timestamp_ms optional uint64 = 5
     *
     * @var int
     */
    protected $last_update_timestamp_ms = null;

    /**
     * last_check_timestamp_ms optional uint64 = 11
     *
     * @var int
     */
    protected $last_check_timestamp_ms = null;

    /**
     * earned_points optional uint32 = 12
     *
     * @var int
     */
    protected $earned_points = null;

    /**
     * progress optional float = 13
     *
     * @var float
     */
    protected $progress = null;

    /**
     * level_up optional bool = 14
     *
     * @var bool
     */
    protected $level_up = null;

    /**
     * name optional string = 6
     *
     * @var string
     */
    protected $name = null;

    /**
     * image_url optional string = 7
     *
     * @var string
     */
    protected $image_url = null;

    /**
     * description optional string = 8
     *
     * @var string
     */
    protected $description = null;

    /**
     * latitude optional double = 9
     *
     * @var float
     */
    protected $latitude = null;

    /**
     * longitude optional double = 10
     *
     * @var float
     */
    protected $longitude = null;

    /**
     * raids optional message = 15
     *
     * @var \POGOProtos\Data\Raid\PlayerRaidInfo
     */
    protected $raids = null;

    /**
     * Check if 'fort_id' has a value
     *
     * @return bool
     */
    public function hasFortId()
    {
        return $this->fort_id !== null;
    }

    /**
     * Get 'fort_id' value
     *
     * @return string
     */
    public function getFortId()
    {
        return $this->fort_id;
    }

    /**
     * Set 'fort_id' value
     *
     * @param string $value
     */
    public function setFortId($value = null)
    {
        $this->fort_id = $value;
    }

    /**
     * Check if 'gym_badge_type' has a value
     *
     * @return bool
     */
    public function hasGymBadgeType()
    {
        return $this->gym_badge_type !== null;
    }

    /**
     * Get 'gym_badge_type' value
     *
     * @return \POGOProtos\Enums\GymBadgeType
     */
    public function getGymBadgeType()
    {
        return $this->gym_badge_type;
    }

    /**
     * Set 'gym_badge_type' value
     *
     * @param \POGOProtos\Enums\GymBadgeType $value
     */
    public function setGymBadgeType(\POGOProtos\Enums\GymBadgeType $value = null)
    {
        $this->gym_badge_type = $value;
    }

    /**
     * Check if 'score' has a value
     *
     * @return bool
     */
    public function hasScore()
    {
        return $this->score !== null;
    }

    /**
     * Get 'score' value
     *
     * @return int
     */
    public function getScore()
    {
        return $this->score;
    }

    /**
     * Set 'score' value
     *
     * @param int $value
     */
    public function setScore($value = null)
    {
        $this->score = $value;
    }

    /**
     * Check if 'gym_badge_stats' has a value
     *
     * @return bool
     */
    public function hasGymBadgeStats()
    {
        return $this->gym_badge_stats !== null;
    }

    /**
     * Get 'gym_badge_stats' value
     *
     * @return \POGOProtos\Data\Badge\GymBadgeStats
     */
    public function getGymBadgeStats()
    {
        return $this->gym_badge_stats;
    }

    /**
     * Set 'gym_badge_stats' value
     *
     * @param \POGOProtos\Data\Badge\GymBadgeStats $value
     */
    public function setGymBadgeStats(\POGOProtos\Data\Badge\GymBadgeStats $value = null)
    {
        $this->gym_badge_stats = $value;
    }

    /**
     * Check if 'last_update_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasLastUpdateTimestampMs()
    {
        return $this->last_update_timestamp_ms !== null;
    }

    /**
     * Get 'last_update_timestamp_ms' value
     *
     * @return int
     */
    public function getLastUpdateTimestampMs()
    {
        return $this->last_update_timestamp_ms;
    }

    /**
     * Set 'last_update_timestamp_ms' value
     *
     * @param int $value
     */
    public function setLastUpdateTimestampMs($value = null)
    {
        $this->last_update_timestamp_ms = $value;
    }

    /**
     * Check if 'last_check_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasLastCheckTimestampMs()
    {
        return $this->last_check_timestamp_ms !== null;
    }

    /**
     * Get 'last_check_timestamp_ms' value
     *
     * @return int
     */
    public function getLastCheckTimestampMs()
    {
        return $this->last_check_timestamp_ms;
    }

    /**
     * Set 'last_check_timestamp_ms' value
     *
     * @param int $value
     */
    public function setLastCheckTimestampMs($value = null)
    {
        $this->last_check_timestamp_ms = $value;
    }

    /**
     * Check if 'earned_points' has a value
     *
     * @return bool
     */
    public function hasEarnedPoints()
    {
        return $this->earned_points !== null;
    }

    /**
     * Get 'earned_points' value
     *
     * @return int
     */
    public function getEarnedPoints()
    {
        return $this->earned_points;
    }

    /**
     * Set 'earned_points' value
     *
     * @param int $value
     */
    public function setEarnedPoints($value = null)
    {
        $this->earned_points = $value;
    }

    /**
     * Check if 'progress' has a value
     *
     * @return bool
     */
    public function hasProgress()
    {
        return $this->progress !== null;
    }

    /**
     * Get 'progress' value
     *
     * @return float
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * Set 'progress' value
     *
     * @param float $value
     */
    public function setProgress($value = null)
    {
        $this->progress = $value;
    }

    /**
     * Check if 'level_up' has a value
     *
     * @return bool
     */
    public function hasLevelUp()
    {
        return $this->level_up !== null;
    }

    /**
     * Get 'level_up' value
     *
     * @return bool
     */
    public function getLevelUp()
    {
        return $this->level_up;
    }

    /**
     * Set 'level_up' value
     *
     * @param bool $value
     */
    public function setLevelUp($value = null)
    {
        $this->level_up = $value;
    }

    /**
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value = null)
    {
        $this->name = $value;
    }

    /**
     * Check if 'image_url' has a value
     *
     * @return bool
     */
    public function hasImageUrl()
    {
        return $this->image_url !== null;
    }

    /**
     * Get 'image_url' value
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Set 'image_url' value
     *
     * @param string $value
     */
    public function setImageUrl($value = null)
    {
        $this->image_url = $value;
    }

    /**
     * Check if 'description' has a value
     *
     * @return bool
     */
    public function hasDescription()
    {
        return $this->description !== null;
    }

    /**
     * Get 'description' value
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set 'description' value
     *
     * @param string $value
     */
    public function setDescription($value = null)
    {
        $this->description = $value;
    }

    /**
     * Check if 'latitude' has a value
     *
     * @return bool
     */
    public function hasLatitude()
    {
        return $this->latitude !== null;
    }

    /**
     * Get 'latitude' value
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set 'latitude' value
     *
     * @param float $value
     */
    public function setLatitude($value = null)
    {
        $this->latitude = $value;
    }

    /**
     * Check if 'longitude' has a value
     *
     * @return bool
     */
    public function hasLongitude()
    {
        return $this->longitude !== null;
    }

    /**
     * Get 'longitude' value
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set 'longitude' value
     *
     * @param float $value
     */
    public function setLongitude($value = null)
    {
        $this->longitude = $value;
    }

    /**
     * Check if 'raids' has a value
     *
     * @return bool
     */
    public function hasRaids()
    {
        return $this->raids !== null;
    }

    /**
     * Get 'raids' value
     *
     * @return \POGOProtos\Data\Raid\PlayerRaidInfo
     */
    public function getRaids()
    {
        return $this->raids;
    }

    /**
     * Set 'raids' value
     *
     * @param \POGOProtos\Data\Raid\PlayerRaidInfo $value
     */
    public function setRaids(\POGOProtos\Data\Raid\PlayerRaidInfo $value = null)
    {
        $this->raids = $value;
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
            'fort_id' => null,
            'gym_badge_type' => null,
            'score' => null,
            'gym_badge_stats' => null,
            'last_update_timestamp_ms' => null,
            'last_check_timestamp_ms' => null,
            'earned_points' => null,
            'progress' => null,
            'level_up' => null,
            'name' => null,
            'image_url' => null,
            'description' => null,
            'latitude' => null,
            'longitude' => null,
            'raids' => null
        ], $values);

        $message->setFortId($values['fort_id']);
        $message->setGymBadgeType($values['gym_badge_type']);
        $message->setScore($values['score']);
        $message->setGymBadgeStats($values['gym_badge_stats']);
        $message->setLastUpdateTimestampMs($values['last_update_timestamp_ms']);
        $message->setLastCheckTimestampMs($values['last_check_timestamp_ms']);
        $message->setEarnedPoints($values['earned_points']);
        $message->setProgress($values['progress']);
        $message->setLevelUp($values['level_up']);
        $message->setName($values['name']);
        $message->setImageUrl($values['image_url']);
        $message->setDescription($values['description']);
        $message->setLatitude($values['latitude']);
        $message->setLongitude($values['longitude']);
        $message->setRaids($values['raids']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'AwardedGymBadge',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'fort_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'gym_badge_type',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.GymBadgeType'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'score',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'gym_badge_stats',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Badge.GymBadgeStats'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'last_update_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'last_check_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'earned_points',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 13,
                    'name' => 'progress',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 14,
                    'name' => 'level_up',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'image_url',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'description',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'longitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 15,
                    'name' => 'raids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Raid.PlayerRaidInfo'
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

        if ($this->fort_id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->fort_id);
        }

        if ($this->gym_badge_type !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->gym_badge_type->value());
        }

        if ($this->score !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->score);
        }

        if ($this->gym_badge_stats !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->gym_badge_stats->serializedSize($sizeContext));
            $this->gym_badge_stats->writeTo($context);
        }

        if ($this->last_update_timestamp_ms !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->last_update_timestamp_ms);
        }

        if ($this->last_check_timestamp_ms !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeVarint($stream, $this->last_check_timestamp_ms);
        }

        if ($this->earned_points !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeVarint($stream, $this->earned_points);
        }

        if ($this->progress !== null) {
            $writer->writeVarint($stream, 109);
            $writer->writeFloat($stream, $this->progress);
        }

        if ($this->level_up !== null) {
            $writer->writeVarint($stream, 112);
            $writer->writeBool($stream, $this->level_up);
        }

        if ($this->name !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->name);
        }

        if ($this->image_url !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->image_url);
        }

        if ($this->description !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->description);
        }

        if ($this->latitude !== null) {
            $writer->writeVarint($stream, 73);
            $writer->writeDouble($stream, $this->latitude);
        }

        if ($this->longitude !== null) {
            $writer->writeVarint($stream, 81);
            $writer->writeDouble($stream, $this->longitude);
        }

        if ($this->raids !== null) {
            $writer->writeVarint($stream, 122);
            $writer->writeVarint($stream, $this->raids->serializedSize($sizeContext));
            $this->raids->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->fort_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->gym_badge_type = \POGOProtos\Enums\GymBadgeType::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->score = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Badge\GymBadgeStats();

                $this->gym_badge_stats = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->last_update_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 4);

                $this->last_check_timestamp_ms = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->earned_points = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 13) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->progress = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 14) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->level_up = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->image_url = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->description = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->longitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 15) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Raid\PlayerRaidInfo();

                $this->raids = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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

        if ($this->fort_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->fort_id);
        }

        if ($this->gym_badge_type !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->gym_badge_type->value());
        }

        if ($this->score !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->score);
        }

        if ($this->gym_badge_stats !== null) {
            $innerSize = $this->gym_badge_stats->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->last_update_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_update_timestamp_ms);
        }

        if ($this->last_check_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->last_check_timestamp_ms);
        }

        if ($this->earned_points !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->earned_points);
        }

        if ($this->progress !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->level_up !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->image_url !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->image_url);
        }

        if ($this->description !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->description);
        }

        if ($this->latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->longitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->raids !== null) {
            $innerSize = $this->raids->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->fort_id = null;
        $this->gym_badge_type = null;
        $this->score = null;
        $this->gym_badge_stats = null;
        $this->last_update_timestamp_ms = null;
        $this->last_check_timestamp_ms = null;
        $this->earned_points = null;
        $this->progress = null;
        $this->level_up = null;
        $this->name = null;
        $this->image_url = null;
        $this->description = null;
        $this->latitude = null;
        $this->longitude = null;
        $this->raids = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Badge\AwardedGymBadge) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->fort_id = ($message->fort_id !== null) ? $message->fort_id : $this->fort_id;
        $this->gym_badge_type = ($message->gym_badge_type !== null) ? $message->gym_badge_type : $this->gym_badge_type;
        $this->score = ($message->score !== null) ? $message->score : $this->score;
        $this->gym_badge_stats = ($message->gym_badge_stats !== null) ? $message->gym_badge_stats : $this->gym_badge_stats;
        $this->last_update_timestamp_ms = ($message->last_update_timestamp_ms !== null) ? $message->last_update_timestamp_ms : $this->last_update_timestamp_ms;
        $this->last_check_timestamp_ms = ($message->last_check_timestamp_ms !== null) ? $message->last_check_timestamp_ms : $this->last_check_timestamp_ms;
        $this->earned_points = ($message->earned_points !== null) ? $message->earned_points : $this->earned_points;
        $this->progress = ($message->progress !== null) ? $message->progress : $this->progress;
        $this->level_up = ($message->level_up !== null) ? $message->level_up : $this->level_up;
        $this->name = ($message->name !== null) ? $message->name : $this->name;
        $this->image_url = ($message->image_url !== null) ? $message->image_url : $this->image_url;
        $this->description = ($message->description !== null) ? $message->description : $this->description;
        $this->latitude = ($message->latitude !== null) ? $message->latitude : $this->latitude;
        $this->longitude = ($message->longitude !== null) ? $message->longitude : $this->longitude;
        $this->raids = ($message->raids !== null) ? $message->raids : $this->raids;
    }


}
