<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Envelopes/ResponseEnvelope.proto
 */


namespace POGOProtos\Networking\Envelopes\ResponseEnvelope;

/**
 * Protobuf message : POGOProtos.Networking.Envelopes.ResponseEnvelope.Unknown7
 */
class Unknown7 extends \Protobuf\AbstractMessage
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
     * unknown71 optional bytes = 1
     *
     * @var \Protobuf\Stream
     */
    protected $unknown71 = null;

    /**
     * unknown72 optional int64 = 2
     *
     * @var int
     */
    protected $unknown72 = null;

    /**
     * unknown73 optional bytes = 3
     *
     * @var \Protobuf\Stream
     */
    protected $unknown73 = null;

    /**
     * Check if 'unknown71' has a value
     *
     * @return bool
     */
    public function hasUnknown71()
    {
        return $this->unknown71 !== null;
    }

    /**
     * Get 'unknown71' value
     *
     * @return \Protobuf\Stream
     */
    public function getUnknown71()
    {
        return $this->unknown71;
    }

    /**
     * Set 'unknown71' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setUnknown71($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->unknown71 = $value;
    }

    /**
     * Check if 'unknown72' has a value
     *
     * @return bool
     */
    public function hasUnknown72()
    {
        return $this->unknown72 !== null;
    }

    /**
     * Get 'unknown72' value
     *
     * @return int
     */
    public function getUnknown72()
    {
        return $this->unknown72;
    }

    /**
     * Set 'unknown72' value
     *
     * @param int $value
     */
    public function setUnknown72($value = null)
    {
        $this->unknown72 = $value;
    }

    /**
     * Check if 'unknown73' has a value
     *
     * @return bool
     */
    public function hasUnknown73()
    {
        return $this->unknown73 !== null;
    }

    /**
     * Get 'unknown73' value
     *
     * @return \Protobuf\Stream
     */
    public function getUnknown73()
    {
        return $this->unknown73;
    }

    /**
     * Set 'unknown73' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setUnknown73($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->unknown73 = $value;
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
            'unknown71' => null,
            'unknown72' => null,
            'unknown73' => null
        ], $values);

        $message->setUnknown71($values['unknown71']);
        $message->setUnknown72($values['unknown72']);
        $message->setUnknown73($values['unknown73']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Unknown7',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'unknown71',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'unknown72',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'unknown73',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
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

        if ($this->unknown71 !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeByteStream($stream, $this->unknown71);
        }

        if ($this->unknown72 !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->unknown72);
        }

        if ($this->unknown73 !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeByteStream($stream, $this->unknown73);
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
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->unknown71 = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->unknown72 = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->unknown73 = $reader->readByteStream($stream);

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

        if ($this->unknown71 !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->unknown71);
        }

        if ($this->unknown72 !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->unknown72);
        }

        if ($this->unknown73 !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->unknown73);
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
        $this->unknown71 = null;
        $this->unknown72 = null;
        $this->unknown73 = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Envelopes\ResponseEnvelope\Unknown7) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->unknown71 = ($message->unknown71 !== null) ? $message->unknown71 : $this->unknown71;
        $this->unknown72 = ($message->unknown72 !== null) ? $message->unknown72 : $this->unknown72;
        $this->unknown73 = ($message->unknown73 !== null) ? $message->unknown73 : $this->unknown73;
    }


}

