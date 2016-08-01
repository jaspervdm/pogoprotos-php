<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/ReleasePokemonResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.ReleasePokemonResponse
 */
class ReleasePokemonResponse extends \Protobuf\AbstractMessage
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
     * result optional enum = 1
     *
     * @var \POGOProtos\Networking\Responses\ReleasePokemonResponse\Result
     */
    protected $result = null;

    /**
     * candy_awarded optional int32 = 2
     *
     * @var int
     */
    protected $candy_awarded = null;

    /**
     * Check if 'result' has a value
     *
     * @return bool
     */
    public function hasResult()
    {
        return $this->result !== null;
    }

    /**
     * Get 'result' value
     *
     * @return \POGOProtos\Networking\Responses\ReleasePokemonResponse\Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set 'result' value
     *
     * @param \POGOProtos\Networking\Responses\ReleasePokemonResponse\Result $value
     */
    public function setResult(\POGOProtos\Networking\Responses\ReleasePokemonResponse\Result $value = null)
    {
        $this->result = $value;
    }

    /**
     * Check if 'candy_awarded' has a value
     *
     * @return bool
     */
    public function hasCandyAwarded()
    {
        return $this->candy_awarded !== null;
    }

    /**
     * Get 'candy_awarded' value
     *
     * @return int
     */
    public function getCandyAwarded()
    {
        return $this->candy_awarded;
    }

    /**
     * Set 'candy_awarded' value
     *
     * @param int $value
     */
    public function setCandyAwarded($value = null)
    {
        $this->candy_awarded = $value;
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
            'result' => null,
            'candy_awarded' => null
        ], $values);

        $message->setResult($values['result']);
        $message->setCandyAwarded($values['candy_awarded']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ReleasePokemonResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'result',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Responses.ReleasePokemonResponse.Result'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'candy_awarded',
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

        if ($this->result !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->result->value());
        }

        if ($this->candy_awarded !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->candy_awarded);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->result = \POGOProtos\Networking\Responses\ReleasePokemonResponse\Result::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->candy_awarded = $reader->readVarint($stream);

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

        if ($this->result !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->result->value());
        }

        if ($this->candy_awarded !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->candy_awarded);
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
        $this->result = null;
        $this->candy_awarded = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\ReleasePokemonResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->result = ($message->result !== null) ? $message->result : $this->result;
        $this->candy_awarded = ($message->candy_awarded !== null) ? $message->candy_awarded : $this->candy_awarded;
    }


}

