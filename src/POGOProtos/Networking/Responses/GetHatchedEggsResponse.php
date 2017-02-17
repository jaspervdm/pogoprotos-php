<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/GetHatchedEggsResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.GetHatchedEggsResponse
 */
class GetHatchedEggsResponse extends \Protobuf\AbstractMessage
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
     * success optional bool = 1
     *
     * @var bool
     */
    protected $success = null;

    /**
     * pokemon_id repeated fixed64 = 2
     *
     * @var \Protobuf\Collection
     */
    protected $pokemon_id = null;

    /**
     * experience_awarded repeated int32 = 3
     *
     * @var \Protobuf\Collection
     */
    protected $experience_awarded = null;

    /**
     * candy_awarded repeated int32 = 4
     *
     * @var \Protobuf\Collection
     */
    protected $candy_awarded = null;

    /**
     * stardust_awarded repeated int32 = 5
     *
     * @var \Protobuf\Collection
     */
    protected $stardust_awarded = null;

    /**
     * egg_km_walked repeated float = 6
     *
     * @var \Protobuf\Collection
     */
    protected $egg_km_walked = null;

    /**
     * hatched_pokemon repeated message = 7
     *
     * @var \Protobuf\Collection<\POGOProtos\Data\PokemonData>
     */
    protected $hatched_pokemon = null;

    /**
     * Check if 'success' has a value
     *
     * @return bool
     */
    public function hasSuccess()
    {
        return $this->success !== null;
    }

    /**
     * Get 'success' value
     *
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     * Set 'success' value
     *
     * @param bool $value
     */
    public function setSuccess($value = null)
    {
        $this->success = $value;
    }

    /**
     * Check if 'pokemon_id' has a value
     *
     * @return bool
     */
    public function hasPokemonIdList()
    {
        return $this->pokemon_id !== null;
    }

    /**
     * Get 'pokemon_id' value
     *
     * @return \Protobuf\Collection
     */
    public function getPokemonIdList()
    {
        return $this->pokemon_id;
    }

    /**
     * Set 'pokemon_id' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setPokemonIdList(\Protobuf\Collection $value = null)
    {
        $this->pokemon_id = $value;
    }

    /**
     * Add a new element to 'pokemon_id'
     *
     * @param int $value
     */
    public function addPokemonId($value)
    {
        if ($this->pokemon_id === null) {
            $this->pokemon_id = new \Protobuf\ScalarCollection();
        }

        $this->pokemon_id->add($value);
    }

    /**
     * Check if 'experience_awarded' has a value
     *
     * @return bool
     */
    public function hasExperienceAwardedList()
    {
        return $this->experience_awarded !== null;
    }

    /**
     * Get 'experience_awarded' value
     *
     * @return \Protobuf\Collection
     */
    public function getExperienceAwardedList()
    {
        return $this->experience_awarded;
    }

    /**
     * Set 'experience_awarded' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setExperienceAwardedList(\Protobuf\Collection $value = null)
    {
        $this->experience_awarded = $value;
    }

    /**
     * Add a new element to 'experience_awarded'
     *
     * @param int $value
     */
    public function addExperienceAwarded($value)
    {
        if ($this->experience_awarded === null) {
            $this->experience_awarded = new \Protobuf\ScalarCollection();
        }

        $this->experience_awarded->add($value);
    }

    /**
     * Check if 'candy_awarded' has a value
     *
     * @return bool
     */
    public function hasCandyAwardedList()
    {
        return $this->candy_awarded !== null;
    }

    /**
     * Get 'candy_awarded' value
     *
     * @return \Protobuf\Collection
     */
    public function getCandyAwardedList()
    {
        return $this->candy_awarded;
    }

    /**
     * Set 'candy_awarded' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setCandyAwardedList(\Protobuf\Collection $value = null)
    {
        $this->candy_awarded = $value;
    }

    /**
     * Add a new element to 'candy_awarded'
     *
     * @param int $value
     */
    public function addCandyAwarded($value)
    {
        if ($this->candy_awarded === null) {
            $this->candy_awarded = new \Protobuf\ScalarCollection();
        }

        $this->candy_awarded->add($value);
    }

    /**
     * Check if 'stardust_awarded' has a value
     *
     * @return bool
     */
    public function hasStardustAwardedList()
    {
        return $this->stardust_awarded !== null;
    }

    /**
     * Get 'stardust_awarded' value
     *
     * @return \Protobuf\Collection
     */
    public function getStardustAwardedList()
    {
        return $this->stardust_awarded;
    }

    /**
     * Set 'stardust_awarded' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setStardustAwardedList(\Protobuf\Collection $value = null)
    {
        $this->stardust_awarded = $value;
    }

    /**
     * Add a new element to 'stardust_awarded'
     *
     * @param int $value
     */
    public function addStardustAwarded($value)
    {
        if ($this->stardust_awarded === null) {
            $this->stardust_awarded = new \Protobuf\ScalarCollection();
        }

        $this->stardust_awarded->add($value);
    }

    /**
     * Check if 'egg_km_walked' has a value
     *
     * @return bool
     */
    public function hasEggKmWalkedList()
    {
        return $this->egg_km_walked !== null;
    }

    /**
     * Get 'egg_km_walked' value
     *
     * @return \Protobuf\Collection
     */
    public function getEggKmWalkedList()
    {
        return $this->egg_km_walked;
    }

    /**
     * Set 'egg_km_walked' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setEggKmWalkedList(\Protobuf\Collection $value = null)
    {
        $this->egg_km_walked = $value;
    }

    /**
     * Add a new element to 'egg_km_walked'
     *
     * @param float $value
     */
    public function addEggKmWalked($value)
    {
        if ($this->egg_km_walked === null) {
            $this->egg_km_walked = new \Protobuf\ScalarCollection();
        }

        $this->egg_km_walked->add($value);
    }

    /**
     * Check if 'hatched_pokemon' has a value
     *
     * @return bool
     */
    public function hasHatchedPokemonList()
    {
        return $this->hatched_pokemon !== null;
    }

    /**
     * Get 'hatched_pokemon' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Data\PokemonData>
     */
    public function getHatchedPokemonList()
    {
        return $this->hatched_pokemon;
    }

    /**
     * Set 'hatched_pokemon' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Data\PokemonData> $value
     */
    public function setHatchedPokemonList(\Protobuf\Collection $value = null)
    {
        $this->hatched_pokemon = $value;
    }

    /**
     * Add a new element to 'hatched_pokemon'
     *
     * @param \POGOProtos\Data\PokemonData $value
     */
    public function addHatchedPokemon(\POGOProtos\Data\PokemonData $value)
    {
        if ($this->hatched_pokemon === null) {
            $this->hatched_pokemon = new \Protobuf\MessageCollection();
        }

        $this->hatched_pokemon->add($value);
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
            'success' => null,
            'pokemon_id' => [],
            'experience_awarded' => [],
            'candy_awarded' => [],
            'stardust_awarded' => [],
            'egg_km_walked' => [],
            'hatched_pokemon' => []
        ], $values);

        $message->setSuccess($values['success']);

        foreach ($values['pokemon_id'] as $item) {
            $message->addPokemonId($item);
        }

        foreach ($values['experience_awarded'] as $item) {
            $message->addExperienceAwarded($item);
        }

        foreach ($values['candy_awarded'] as $item) {
            $message->addCandyAwarded($item);
        }

        foreach ($values['stardust_awarded'] as $item) {
            $message->addStardustAwarded($item);
        }

        foreach ($values['egg_km_walked'] as $item) {
            $message->addEggKmWalked($item);
        }

        foreach ($values['hatched_pokemon'] as $item) {
            $message->addHatchedPokemon($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetHatchedEggsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'success',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'pokemon_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'experience_awarded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'candy_awarded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'stardust_awarded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'egg_km_walked',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'hatched_pokemon',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Data.PokemonData'
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

        if ($this->success !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->success);
        }

        if ($this->pokemon_id !== null) {
            $innerSize   = 0;
            $calculator  = $sizeContext->getSizeCalculator();

            foreach ($this->pokemon_id as $val) {
                $innerSize += 8;
            }

            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $innerSize);

            foreach ($this->pokemon_id as $val) {
                $writer->writeFixed64($stream, $val);
            }
        }

        if ($this->experience_awarded !== null) {
            foreach ($this->experience_awarded as $val) {
                $writer->writeVarint($stream, 24);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->candy_awarded !== null) {
            foreach ($this->candy_awarded as $val) {
                $writer->writeVarint($stream, 32);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->stardust_awarded !== null) {
            foreach ($this->stardust_awarded as $val) {
                $writer->writeVarint($stream, 40);
                $writer->writeVarint($stream, $val);
            }
        }

        if ($this->egg_km_walked !== null) {
            foreach ($this->egg_km_walked as $val) {
                $writer->writeVarint($stream, 53);
                $writer->writeFloat($stream, $val);
            }
        }

        if ($this->hatched_pokemon !== null) {
            foreach ($this->hatched_pokemon as $val) {
                $writer->writeVarint($stream, 58);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->success = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->pokemon_id === null) {
                    $this->pokemon_id = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->pokemon_id->add($reader->readFixed64($stream));
                }

                continue;
            }

            if ($tag === 3) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->experience_awarded === null) {
                    $this->experience_awarded = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->experience_awarded->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 4) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->candy_awarded === null) {
                    $this->candy_awarded = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->candy_awarded->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 5) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->stardust_awarded === null) {
                    $this->stardust_awarded = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->stardust_awarded->add($reader->readVarint($stream));
                }

                continue;
            }

            if ($tag === 6) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->egg_km_walked === null) {
                    $this->egg_km_walked = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->egg_km_walked->add($reader->readFloat($stream));
                }

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\PokemonData();

                if ($this->hatched_pokemon === null) {
                    $this->hatched_pokemon = new \Protobuf\MessageCollection();
                }

                $this->hatched_pokemon->add($innerMessage);

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

        if ($this->success !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->pokemon_id !== null) {
            $innerSize = 0;

            foreach ($this->pokemon_id as $val) {
                $innerSize += 8;
            }

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->experience_awarded !== null) {
            foreach ($this->experience_awarded as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->candy_awarded !== null) {
            foreach ($this->candy_awarded as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->stardust_awarded !== null) {
            foreach ($this->stardust_awarded as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val);
            }
        }

        if ($this->egg_km_walked !== null) {
            foreach ($this->egg_km_walked as $val) {
                $size += 1;
                $size += 4;
            }
        }

        if ($this->hatched_pokemon !== null) {
            foreach ($this->hatched_pokemon as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->success = null;
        $this->pokemon_id = null;
        $this->experience_awarded = null;
        $this->candy_awarded = null;
        $this->stardust_awarded = null;
        $this->egg_km_walked = null;
        $this->hatched_pokemon = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\GetHatchedEggsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->success = ($message->success !== null) ? $message->success : $this->success;
        $this->pokemon_id = ($message->pokemon_id !== null) ? $message->pokemon_id : $this->pokemon_id;
        $this->experience_awarded = ($message->experience_awarded !== null) ? $message->experience_awarded : $this->experience_awarded;
        $this->candy_awarded = ($message->candy_awarded !== null) ? $message->candy_awarded : $this->candy_awarded;
        $this->stardust_awarded = ($message->stardust_awarded !== null) ? $message->stardust_awarded : $this->stardust_awarded;
        $this->egg_km_walked = ($message->egg_km_walked !== null) ? $message->egg_km_walked : $this->egg_km_walked;
        $this->hatched_pokemon = ($message->hatched_pokemon !== null) ? $message->hatched_pokemon : $this->hatched_pokemon;
    }


}

