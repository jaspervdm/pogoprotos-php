<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Inventory/InventoryItemData.proto
 */


namespace POGOProtos\Inventory;

/**
 * Protobuf message : POGOProtos.Inventory.InventoryItemData
 */
class InventoryItemData extends \Protobuf\AbstractMessage
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
     * pokemon_data optional message = 1
     *
     * @var \POGOProtos\Data\PokemonData
     */
    protected $pokemon_data = null;

    /**
     * item optional message = 2
     *
     * @var \POGOProtos\Inventory\Item\ItemData
     */
    protected $item = null;

    /**
     * pokedex_entry optional message = 3
     *
     * @var \POGOProtos\Data\PokedexEntry
     */
    protected $pokedex_entry = null;

    /**
     * player_stats optional message = 4
     *
     * @var \POGOProtos\Data\Player\PlayerStats
     */
    protected $player_stats = null;

    /**
     * player_currency optional message = 5
     *
     * @var \POGOProtos\Data\Player\PlayerCurrency
     */
    protected $player_currency = null;

    /**
     * player_camera optional message = 6
     *
     * @var \POGOProtos\Data\Player\PlayerCamera
     */
    protected $player_camera = null;

    /**
     * inventory_upgrades optional message = 7
     *
     * @var \POGOProtos\Inventory\InventoryUpgrades
     */
    protected $inventory_upgrades = null;

    /**
     * applied_items optional message = 8
     *
     * @var \POGOProtos\Inventory\AppliedItems
     */
    protected $applied_items = null;

    /**
     * egg_incubators optional message = 9
     *
     * @var \POGOProtos\Inventory\EggIncubators
     */
    protected $egg_incubators = null;

    /**
     * pokemon_family optional message = 10
     *
     * @var \POGOProtos\Inventory\PokemonFamily
     */
    protected $pokemon_family = null;

    /**
     * Check if 'pokemon_data' has a value
     *
     * @return bool
     */
    public function hasPokemonData()
    {
        return $this->pokemon_data !== null;
    }

    /**
     * Get 'pokemon_data' value
     *
     * @return \POGOProtos\Data\PokemonData
     */
    public function getPokemonData()
    {
        return $this->pokemon_data;
    }

    /**
     * Set 'pokemon_data' value
     *
     * @param \POGOProtos\Data\PokemonData $value
     */
    public function setPokemonData(\POGOProtos\Data\PokemonData $value = null)
    {
        $this->pokemon_data = $value;
    }

    /**
     * Check if 'item' has a value
     *
     * @return bool
     */
    public function hasItem()
    {
        return $this->item !== null;
    }

    /**
     * Get 'item' value
     *
     * @return \POGOProtos\Inventory\Item\ItemData
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set 'item' value
     *
     * @param \POGOProtos\Inventory\Item\ItemData $value
     */
    public function setItem(\POGOProtos\Inventory\Item\ItemData $value = null)
    {
        $this->item = $value;
    }

    /**
     * Check if 'pokedex_entry' has a value
     *
     * @return bool
     */
    public function hasPokedexEntry()
    {
        return $this->pokedex_entry !== null;
    }

    /**
     * Get 'pokedex_entry' value
     *
     * @return \POGOProtos\Data\PokedexEntry
     */
    public function getPokedexEntry()
    {
        return $this->pokedex_entry;
    }

    /**
     * Set 'pokedex_entry' value
     *
     * @param \POGOProtos\Data\PokedexEntry $value
     */
    public function setPokedexEntry(\POGOProtos\Data\PokedexEntry $value = null)
    {
        $this->pokedex_entry = $value;
    }

    /**
     * Check if 'player_stats' has a value
     *
     * @return bool
     */
    public function hasPlayerStats()
    {
        return $this->player_stats !== null;
    }

    /**
     * Get 'player_stats' value
     *
     * @return \POGOProtos\Data\Player\PlayerStats
     */
    public function getPlayerStats()
    {
        return $this->player_stats;
    }

    /**
     * Set 'player_stats' value
     *
     * @param \POGOProtos\Data\Player\PlayerStats $value
     */
    public function setPlayerStats(\POGOProtos\Data\Player\PlayerStats $value = null)
    {
        $this->player_stats = $value;
    }

    /**
     * Check if 'player_currency' has a value
     *
     * @return bool
     */
    public function hasPlayerCurrency()
    {
        return $this->player_currency !== null;
    }

    /**
     * Get 'player_currency' value
     *
     * @return \POGOProtos\Data\Player\PlayerCurrency
     */
    public function getPlayerCurrency()
    {
        return $this->player_currency;
    }

    /**
     * Set 'player_currency' value
     *
     * @param \POGOProtos\Data\Player\PlayerCurrency $value
     */
    public function setPlayerCurrency(\POGOProtos\Data\Player\PlayerCurrency $value = null)
    {
        $this->player_currency = $value;
    }

    /**
     * Check if 'player_camera' has a value
     *
     * @return bool
     */
    public function hasPlayerCamera()
    {
        return $this->player_camera !== null;
    }

    /**
     * Get 'player_camera' value
     *
     * @return \POGOProtos\Data\Player\PlayerCamera
     */
    public function getPlayerCamera()
    {
        return $this->player_camera;
    }

    /**
     * Set 'player_camera' value
     *
     * @param \POGOProtos\Data\Player\PlayerCamera $value
     */
    public function setPlayerCamera(\POGOProtos\Data\Player\PlayerCamera $value = null)
    {
        $this->player_camera = $value;
    }

    /**
     * Check if 'inventory_upgrades' has a value
     *
     * @return bool
     */
    public function hasInventoryUpgrades()
    {
        return $this->inventory_upgrades !== null;
    }

    /**
     * Get 'inventory_upgrades' value
     *
     * @return \POGOProtos\Inventory\InventoryUpgrades
     */
    public function getInventoryUpgrades()
    {
        return $this->inventory_upgrades;
    }

    /**
     * Set 'inventory_upgrades' value
     *
     * @param \POGOProtos\Inventory\InventoryUpgrades $value
     */
    public function setInventoryUpgrades(\POGOProtos\Inventory\InventoryUpgrades $value = null)
    {
        $this->inventory_upgrades = $value;
    }

    /**
     * Check if 'applied_items' has a value
     *
     * @return bool
     */
    public function hasAppliedItems()
    {
        return $this->applied_items !== null;
    }

    /**
     * Get 'applied_items' value
     *
     * @return \POGOProtos\Inventory\AppliedItems
     */
    public function getAppliedItems()
    {
        return $this->applied_items;
    }

    /**
     * Set 'applied_items' value
     *
     * @param \POGOProtos\Inventory\AppliedItems $value
     */
    public function setAppliedItems(\POGOProtos\Inventory\AppliedItems $value = null)
    {
        $this->applied_items = $value;
    }

    /**
     * Check if 'egg_incubators' has a value
     *
     * @return bool
     */
    public function hasEggIncubators()
    {
        return $this->egg_incubators !== null;
    }

    /**
     * Get 'egg_incubators' value
     *
     * @return \POGOProtos\Inventory\EggIncubators
     */
    public function getEggIncubators()
    {
        return $this->egg_incubators;
    }

    /**
     * Set 'egg_incubators' value
     *
     * @param \POGOProtos\Inventory\EggIncubators $value
     */
    public function setEggIncubators(\POGOProtos\Inventory\EggIncubators $value = null)
    {
        $this->egg_incubators = $value;
    }

    /**
     * Check if 'pokemon_family' has a value
     *
     * @return bool
     */
    public function hasPokemonFamily()
    {
        return $this->pokemon_family !== null;
    }

    /**
     * Get 'pokemon_family' value
     *
     * @return \POGOProtos\Inventory\PokemonFamily
     */
    public function getPokemonFamily()
    {
        return $this->pokemon_family;
    }

    /**
     * Set 'pokemon_family' value
     *
     * @param \POGOProtos\Inventory\PokemonFamily $value
     */
    public function setPokemonFamily(\POGOProtos\Inventory\PokemonFamily $value = null)
    {
        $this->pokemon_family = $value;
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
            'pokemon_data' => null,
            'item' => null,
            'pokedex_entry' => null,
            'player_stats' => null,
            'player_currency' => null,
            'player_camera' => null,
            'inventory_upgrades' => null,
            'applied_items' => null,
            'egg_incubators' => null,
            'pokemon_family' => null
        ], $values);

        $message->setPokemonData($values['pokemon_data']);
        $message->setItem($values['item']);
        $message->setPokedexEntry($values['pokedex_entry']);
        $message->setPlayerStats($values['player_stats']);
        $message->setPlayerCurrency($values['player_currency']);
        $message->setPlayerCamera($values['player_camera']);
        $message->setInventoryUpgrades($values['inventory_upgrades']);
        $message->setAppliedItems($values['applied_items']);
        $message->setEggIncubators($values['egg_incubators']);
        $message->setPokemonFamily($values['pokemon_family']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'InventoryItemData',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'pokemon_data',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.PokemonData'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'item',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemData'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'pokedex_entry',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.PokedexEntry'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'player_stats',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.PlayerStats'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'player_currency',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.PlayerCurrency'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'player_camera',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Player.PlayerCamera'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'inventory_upgrades',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.InventoryUpgrades'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'applied_items',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.AppliedItems'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'egg_incubators',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.EggIncubators'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'pokemon_family',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Inventory.PokemonFamily'
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

        if ($this->pokemon_data !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->pokemon_data->serializedSize($sizeContext));
            $this->pokemon_data->writeTo($context);
        }

        if ($this->item !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->item->serializedSize($sizeContext));
            $this->item->writeTo($context);
        }

        if ($this->pokedex_entry !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->pokedex_entry->serializedSize($sizeContext));
            $this->pokedex_entry->writeTo($context);
        }

        if ($this->player_stats !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->player_stats->serializedSize($sizeContext));
            $this->player_stats->writeTo($context);
        }

        if ($this->player_currency !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeVarint($stream, $this->player_currency->serializedSize($sizeContext));
            $this->player_currency->writeTo($context);
        }

        if ($this->player_camera !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeVarint($stream, $this->player_camera->serializedSize($sizeContext));
            $this->player_camera->writeTo($context);
        }

        if ($this->inventory_upgrades !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->inventory_upgrades->serializedSize($sizeContext));
            $this->inventory_upgrades->writeTo($context);
        }

        if ($this->applied_items !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->applied_items->serializedSize($sizeContext));
            $this->applied_items->writeTo($context);
        }

        if ($this->egg_incubators !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeVarint($stream, $this->egg_incubators->serializedSize($sizeContext));
            $this->egg_incubators->writeTo($context);
        }

        if ($this->pokemon_family !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeVarint($stream, $this->pokemon_family->serializedSize($sizeContext));
            $this->pokemon_family->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\PokemonData();

                $this->pokemon_data = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Inventory\Item\ItemData();

                $this->item = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\PokedexEntry();

                $this->pokedex_entry = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\PlayerStats();

                $this->player_stats = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\PlayerCurrency();

                $this->player_currency = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Player\PlayerCamera();

                $this->player_camera = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Inventory\InventoryUpgrades();

                $this->inventory_upgrades = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Inventory\AppliedItems();

                $this->applied_items = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Inventory\EggIncubators();

                $this->egg_incubators = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Inventory\PokemonFamily();

                $this->pokemon_family = $innerMessage;

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

        if ($this->pokemon_data !== null) {
            $innerSize = $this->pokemon_data->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->item !== null) {
            $innerSize = $this->item->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->pokedex_entry !== null) {
            $innerSize = $this->pokedex_entry->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->player_stats !== null) {
            $innerSize = $this->player_stats->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->player_currency !== null) {
            $innerSize = $this->player_currency->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->player_camera !== null) {
            $innerSize = $this->player_camera->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->inventory_upgrades !== null) {
            $innerSize = $this->inventory_upgrades->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->applied_items !== null) {
            $innerSize = $this->applied_items->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->egg_incubators !== null) {
            $innerSize = $this->egg_incubators->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->pokemon_family !== null) {
            $innerSize = $this->pokemon_family->serializedSize($context);

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
        $this->pokemon_data = null;
        $this->item = null;
        $this->pokedex_entry = null;
        $this->player_stats = null;
        $this->player_currency = null;
        $this->player_camera = null;
        $this->inventory_upgrades = null;
        $this->applied_items = null;
        $this->egg_incubators = null;
        $this->pokemon_family = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Inventory\InventoryItemData) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->pokemon_data = ($message->pokemon_data !== null) ? $message->pokemon_data : $this->pokemon_data;
        $this->item = ($message->item !== null) ? $message->item : $this->item;
        $this->pokedex_entry = ($message->pokedex_entry !== null) ? $message->pokedex_entry : $this->pokedex_entry;
        $this->player_stats = ($message->player_stats !== null) ? $message->player_stats : $this->player_stats;
        $this->player_currency = ($message->player_currency !== null) ? $message->player_currency : $this->player_currency;
        $this->player_camera = ($message->player_camera !== null) ? $message->player_camera : $this->player_camera;
        $this->inventory_upgrades = ($message->inventory_upgrades !== null) ? $message->inventory_upgrades : $this->inventory_upgrades;
        $this->applied_items = ($message->applied_items !== null) ? $message->applied_items : $this->applied_items;
        $this->egg_incubators = ($message->egg_incubators !== null) ? $message->egg_incubators : $this->egg_incubators;
        $this->pokemon_family = ($message->pokemon_family !== null) ? $message->pokemon_family : $this->pokemon_family;
    }


}

