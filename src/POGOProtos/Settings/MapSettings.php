<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/MapSettings.proto
 */


namespace POGOProtos\Settings;

/**
 * Protobuf message : POGOProtos.Settings.MapSettings
 */
class MapSettings extends \Protobuf\AbstractMessage
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
     * pokemon_visible_range optional double = 1
     *
     * @var float
     */
    protected $pokemon_visible_range = null;

    /**
     * poke_nav_range_meters optional double = 2
     *
     * @var float
     */
    protected $poke_nav_range_meters = null;

    /**
     * encounter_range_meters optional double = 3
     *
     * @var float
     */
    protected $encounter_range_meters = null;

    /**
     * get_map_objects_min_refresh_seconds optional float = 4
     *
     * @var float
     */
    protected $get_map_objects_min_refresh_seconds = null;

    /**
     * get_map_objects_max_refresh_seconds optional float = 5
     *
     * @var float
     */
    protected $get_map_objects_max_refresh_seconds = null;

    /**
     * get_map_objects_min_distance_meters optional float = 6
     *
     * @var float
     */
    protected $get_map_objects_min_distance_meters = null;

    /**
     * google_maps_api_key optional string = 7
     *
     * @var string
     */
    protected $google_maps_api_key = null;

    /**
     * min_nearby_hide_sightings optional int32 = 8
     *
     * @var int
     */
    protected $min_nearby_hide_sightings = null;

    /**
     * Check if 'pokemon_visible_range' has a value
     *
     * @return bool
     */
    public function hasPokemonVisibleRange()
    {
        return $this->pokemon_visible_range !== null;
    }

    /**
     * Get 'pokemon_visible_range' value
     *
     * @return float
     */
    public function getPokemonVisibleRange()
    {
        return $this->pokemon_visible_range;
    }

    /**
     * Set 'pokemon_visible_range' value
     *
     * @param float $value
     */
    public function setPokemonVisibleRange($value = null)
    {
        $this->pokemon_visible_range = $value;
    }

    /**
     * Check if 'poke_nav_range_meters' has a value
     *
     * @return bool
     */
    public function hasPokeNavRangeMeters()
    {
        return $this->poke_nav_range_meters !== null;
    }

    /**
     * Get 'poke_nav_range_meters' value
     *
     * @return float
     */
    public function getPokeNavRangeMeters()
    {
        return $this->poke_nav_range_meters;
    }

    /**
     * Set 'poke_nav_range_meters' value
     *
     * @param float $value
     */
    public function setPokeNavRangeMeters($value = null)
    {
        $this->poke_nav_range_meters = $value;
    }

    /**
     * Check if 'encounter_range_meters' has a value
     *
     * @return bool
     */
    public function hasEncounterRangeMeters()
    {
        return $this->encounter_range_meters !== null;
    }

    /**
     * Get 'encounter_range_meters' value
     *
     * @return float
     */
    public function getEncounterRangeMeters()
    {
        return $this->encounter_range_meters;
    }

    /**
     * Set 'encounter_range_meters' value
     *
     * @param float $value
     */
    public function setEncounterRangeMeters($value = null)
    {
        $this->encounter_range_meters = $value;
    }

    /**
     * Check if 'get_map_objects_min_refresh_seconds' has a value
     *
     * @return bool
     */
    public function hasGetMapObjectsMinRefreshSeconds()
    {
        return $this->get_map_objects_min_refresh_seconds !== null;
    }

    /**
     * Get 'get_map_objects_min_refresh_seconds' value
     *
     * @return float
     */
    public function getGetMapObjectsMinRefreshSeconds()
    {
        return $this->get_map_objects_min_refresh_seconds;
    }

    /**
     * Set 'get_map_objects_min_refresh_seconds' value
     *
     * @param float $value
     */
    public function setGetMapObjectsMinRefreshSeconds($value = null)
    {
        $this->get_map_objects_min_refresh_seconds = $value;
    }

    /**
     * Check if 'get_map_objects_max_refresh_seconds' has a value
     *
     * @return bool
     */
    public function hasGetMapObjectsMaxRefreshSeconds()
    {
        return $this->get_map_objects_max_refresh_seconds !== null;
    }

    /**
     * Get 'get_map_objects_max_refresh_seconds' value
     *
     * @return float
     */
    public function getGetMapObjectsMaxRefreshSeconds()
    {
        return $this->get_map_objects_max_refresh_seconds;
    }

    /**
     * Set 'get_map_objects_max_refresh_seconds' value
     *
     * @param float $value
     */
    public function setGetMapObjectsMaxRefreshSeconds($value = null)
    {
        $this->get_map_objects_max_refresh_seconds = $value;
    }

    /**
     * Check if 'get_map_objects_min_distance_meters' has a value
     *
     * @return bool
     */
    public function hasGetMapObjectsMinDistanceMeters()
    {
        return $this->get_map_objects_min_distance_meters !== null;
    }

    /**
     * Get 'get_map_objects_min_distance_meters' value
     *
     * @return float
     */
    public function getGetMapObjectsMinDistanceMeters()
    {
        return $this->get_map_objects_min_distance_meters;
    }

    /**
     * Set 'get_map_objects_min_distance_meters' value
     *
     * @param float $value
     */
    public function setGetMapObjectsMinDistanceMeters($value = null)
    {
        $this->get_map_objects_min_distance_meters = $value;
    }

    /**
     * Check if 'google_maps_api_key' has a value
     *
     * @return bool
     */
    public function hasGoogleMapsApiKey()
    {
        return $this->google_maps_api_key !== null;
    }

    /**
     * Get 'google_maps_api_key' value
     *
     * @return string
     */
    public function getGoogleMapsApiKey()
    {
        return $this->google_maps_api_key;
    }

    /**
     * Set 'google_maps_api_key' value
     *
     * @param string $value
     */
    public function setGoogleMapsApiKey($value = null)
    {
        $this->google_maps_api_key = $value;
    }

    /**
     * Check if 'min_nearby_hide_sightings' has a value
     *
     * @return bool
     */
    public function hasMinNearbyHideSightings()
    {
        return $this->min_nearby_hide_sightings !== null;
    }

    /**
     * Get 'min_nearby_hide_sightings' value
     *
     * @return int
     */
    public function getMinNearbyHideSightings()
    {
        return $this->min_nearby_hide_sightings;
    }

    /**
     * Set 'min_nearby_hide_sightings' value
     *
     * @param int $value
     */
    public function setMinNearbyHideSightings($value = null)
    {
        $this->min_nearby_hide_sightings = $value;
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
            'pokemon_visible_range' => null,
            'poke_nav_range_meters' => null,
            'encounter_range_meters' => null,
            'get_map_objects_min_refresh_seconds' => null,
            'get_map_objects_max_refresh_seconds' => null,
            'get_map_objects_min_distance_meters' => null,
            'google_maps_api_key' => null,
            'min_nearby_hide_sightings' => null
        ], $values);

        $message->setPokemonVisibleRange($values['pokemon_visible_range']);
        $message->setPokeNavRangeMeters($values['poke_nav_range_meters']);
        $message->setEncounterRangeMeters($values['encounter_range_meters']);
        $message->setGetMapObjectsMinRefreshSeconds($values['get_map_objects_min_refresh_seconds']);
        $message->setGetMapObjectsMaxRefreshSeconds($values['get_map_objects_max_refresh_seconds']);
        $message->setGetMapObjectsMinDistanceMeters($values['get_map_objects_min_distance_meters']);
        $message->setGoogleMapsApiKey($values['google_maps_api_key']);
        $message->setMinNearbyHideSightings($values['min_nearby_hide_sightings']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'MapSettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pokemon_visible_range',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'poke_nav_range_meters',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'encounter_range_meters',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'get_map_objects_min_refresh_seconds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'get_map_objects_max_refresh_seconds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'get_map_objects_min_distance_meters',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'google_maps_api_key',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'min_nearby_hide_sightings',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
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

        if ($this->pokemon_visible_range !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeDouble($stream, $this->pokemon_visible_range);
        }

        if ($this->poke_nav_range_meters !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeDouble($stream, $this->poke_nav_range_meters);
        }

        if ($this->encounter_range_meters !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeDouble($stream, $this->encounter_range_meters);
        }

        if ($this->get_map_objects_min_refresh_seconds !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFloat($stream, $this->get_map_objects_min_refresh_seconds);
        }

        if ($this->get_map_objects_max_refresh_seconds !== null) {
            $writer->writeVarint($stream, 45);
            $writer->writeFloat($stream, $this->get_map_objects_max_refresh_seconds);
        }

        if ($this->get_map_objects_min_distance_meters !== null) {
            $writer->writeVarint($stream, 53);
            $writer->writeFloat($stream, $this->get_map_objects_min_distance_meters);
        }

        if ($this->google_maps_api_key !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeString($stream, $this->google_maps_api_key);
        }

        if ($this->min_nearby_hide_sightings !== null) {
            $writer->writeVarint($stream, 64);
            $writer->writeVarint($stream, $this->min_nearby_hide_sightings);
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
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->pokemon_visible_range = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->poke_nav_range_meters = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->encounter_range_meters = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->get_map_objects_min_refresh_seconds = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->get_map_objects_max_refresh_seconds = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->get_map_objects_min_distance_meters = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->google_maps_api_key = $reader->readString($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->min_nearby_hide_sightings = $reader->readVarint($stream);

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

        if ($this->pokemon_visible_range !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->poke_nav_range_meters !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->encounter_range_meters !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->get_map_objects_min_refresh_seconds !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->get_map_objects_max_refresh_seconds !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->get_map_objects_min_distance_meters !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->google_maps_api_key !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->google_maps_api_key);
        }

        if ($this->min_nearby_hide_sightings !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->min_nearby_hide_sightings);
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
        $this->pokemon_visible_range = null;
        $this->poke_nav_range_meters = null;
        $this->encounter_range_meters = null;
        $this->get_map_objects_min_refresh_seconds = null;
        $this->get_map_objects_max_refresh_seconds = null;
        $this->get_map_objects_min_distance_meters = null;
        $this->google_maps_api_key = null;
        $this->min_nearby_hide_sightings = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Settings\MapSettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pokemon_visible_range = ($message->pokemon_visible_range !== null) ? $message->pokemon_visible_range : $this->pokemon_visible_range;
        $this->poke_nav_range_meters = ($message->poke_nav_range_meters !== null) ? $message->poke_nav_range_meters : $this->poke_nav_range_meters;
        $this->encounter_range_meters = ($message->encounter_range_meters !== null) ? $message->encounter_range_meters : $this->encounter_range_meters;
        $this->get_map_objects_min_refresh_seconds = ($message->get_map_objects_min_refresh_seconds !== null) ? $message->get_map_objects_min_refresh_seconds : $this->get_map_objects_min_refresh_seconds;
        $this->get_map_objects_max_refresh_seconds = ($message->get_map_objects_max_refresh_seconds !== null) ? $message->get_map_objects_max_refresh_seconds : $this->get_map_objects_max_refresh_seconds;
        $this->get_map_objects_min_distance_meters = ($message->get_map_objects_min_distance_meters !== null) ? $message->get_map_objects_min_distance_meters : $this->get_map_objects_min_distance_meters;
        $this->google_maps_api_key = ($message->google_maps_api_key !== null) ? $message->google_maps_api_key : $this->google_maps_api_key;
        $this->min_nearby_hide_sightings = ($message->min_nearby_hide_sightings !== null) ? $message->min_nearby_hide_sightings : $this->min_nearby_hide_sightings;
    }


}

