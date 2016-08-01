<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Requests/Messages/GetIncensePokemonMessage.proto
 */


namespace POGOProtos\Networking\Requests\Messages;

/**
 * Protobuf message :
 * POGOProtos.Networking.Requests.Messages.GetIncensePokemonMessage
 */
class GetIncensePokemonMessage extends \Protobuf\AbstractMessage
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
     * player_latitude optional double = 1
     *
     * @var float
     */
    protected $player_latitude = null;

    /**
     * player_longitude optional double = 2
     *
     * @var float
     */
    protected $player_longitude = null;

    /**
     * Check if 'player_latitude' has a value
     *
     * @return bool
     */
    public function hasPlayerLatitude()
    {
        return $this->player_latitude !== null;
    }

    /**
     * Get 'player_latitude' value
     *
     * @return float
     */
    public function getPlayerLatitude()
    {
        return $this->player_latitude;
    }

    /**
     * Set 'player_latitude' value
     *
     * @param float $value
     */
    public function setPlayerLatitude($value = null)
    {
        $this->player_latitude = $value;
    }

    /**
     * Check if 'player_longitude' has a value
     *
     * @return bool
     */
    public function hasPlayerLongitude()
    {
        return $this->player_longitude !== null;
    }

    /**
     * Get 'player_longitude' value
     *
     * @return float
     */
    public function getPlayerLongitude()
    {
        return $this->player_longitude;
    }

    /**
     * Set 'player_longitude' value
     *
     * @param float $value
     */
    public function setPlayerLongitude($value = null)
    {
        $this->player_longitude = $value;
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
            'player_latitude' => null,
            'player_longitude' => null
        ], $values);

        $message->setPlayerLatitude($values['player_latitude']);
        $message->setPlayerLongitude($values['player_longitude']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetIncensePokemonMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'player_latitude',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_DOUBLE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'player_longitude',
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

        if ($this->player_latitude !== null) {
            $writer->writeVarint($stream, 9);
            $writer->writeDouble($stream, $this->player_latitude);
        }

        if ($this->player_longitude !== null) {
            $writer->writeVarint($stream, 17);
            $writer->writeDouble($stream, $this->player_longitude);
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

                $this->player_latitude = $reader->readDouble($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 1);

                $this->player_longitude = $reader->readDouble($stream);

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

        if ($this->player_latitude !== null) {
            $size += 1;
            $size += 8;
        }

        if ($this->player_longitude !== null) {
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
        $this->player_latitude = null;
        $this->player_longitude = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Requests\Messages\GetIncensePokemonMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->player_latitude = ($message->player_latitude !== null) ? $message->player_latitude : $this->player_latitude;
        $this->player_longitude = ($message->player_longitude !== null) ? $message->player_longitude : $this->player_longitude;
    }


}

