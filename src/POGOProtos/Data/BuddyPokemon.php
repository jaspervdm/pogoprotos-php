<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/BuddyPokemon.proto
 */


namespace POGOProtos\Data;

/**
 * Protobuf message : POGOProtos.Data.BuddyPokemon
 */
class BuddyPokemon extends \Protobuf\AbstractMessage
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
     * id optional fixed64 = 1
     *
     * @var int
     */
    protected $id = null;

    /**
     * start_km_walked optional double = 2
     *
     * @var float
     */
    protected $start_km_walked = null;

    /**
     * last_km_awarded optional double = 3
     *
     * @var float
     */
    protected $last_km_awarded = null;

    /**
     * Check if 'id' has a value
     *
     * @return bool
     */
    public function hasId()
    {
        return $this->id !== null;
    }

    /**
     * Get 'id' value
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set 'id' value
     *
     * @param int $value
     */
    public function setId($value = null)
    {
        $this->id = $value;
    }

    /**
     * Check if 'start_km_walked' has a value
     *
     * @return bool
     */
    public function hasStartKmWalked()
    {
        return $this->start_km_walked !== null;
    }

    /**
     * Get 'start_km_walked' value
     *
     * @return float
     */
    public function getStartKmWalked()
    {
        return $this->start_km_walked;
    }

    /**
     * Set 'start_km_walked' value
     *
     * @param float $value
     */
    public function setStartKmWalked($value = null)
    {
        $this->start_km_walked = $value;
    }

    /**
     * Check if 'last_km_awarded' has a value
     *
     * @return bool
     */
    public function hasLastKmAwarded()
    {
        return $this->last_km_awarded !== null;
    }

    /**
     * Get 'last_km_awarded' value
     *
     * @return float
     */
    public function getLastKmAwarded()
    {
        return $this->last_km_awarded;
    }

    /**
     * Set 'last_km_awarded' value
     *
     * @param float $value
     */
    public function setLastKmAwarded($value = null)
    {
        $this->last_km_awarded = $value;
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
            'id' => null,
            'start_km_walked' => null,
            'last_km_awarded' => null
        ], $values);

        $message->setId($values['id']);
        $message->setStartKmWalked($values['start_km_walked']);
        $message->setLastKmAwarded($values['last_km_awarded']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'BuddyPokemon',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FIXED64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'start_km_walked',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'last_km_awarded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
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

        if ($this->id !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeFixed64($stream, $this->id);
        }

        if ($this->start_km_walked !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeDouble($stream, $this->start_km_walked);
        }

        if ($this->last_km_awarded !== null) {
            $writer->writeVarint($stream, 25);
            $writer->writeDouble($stream, $this->last_km_awarded);
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
                \Protobuf\WireFormat::assertWireType($wire, 6);

                $this->id = $reader->readFixed64($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->start_km_walked = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->last_km_awarded = $reader->readDouble($stream);

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

        if ($this->id !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->start_km_walked !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->last_km_awarded !== null) {
            $size += 1;
            $size += 8;
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
        $this->id = null;
        $this->start_km_walked = null;
        $this->last_km_awarded = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\BuddyPokemon) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->start_km_walked = ($message->start_km_walked !== null) ? $message->start_km_walked : $this->start_km_walked;
        $this->last_km_awarded = ($message->last_km_awarded !== null) ? $message->last_km_awarded : $this->last_km_awarded;
    }


}

