<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Responses/GetSuggestedCodenamesResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.GetSuggestedCodenamesResponse
 */
class GetSuggestedCodenamesResponse extends \Protobuf\AbstractMessage
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
     * codenames repeated string = 1
     *
     * @var \Protobuf\Collection
     */
    protected $codenames = null;

    /**
     * success optional bool = 2
     *
     * @var bool
     */
    protected $success = null;

    /**
     * Check if 'codenames' has a value
     *
     * @return bool
     */
    public function hasCodenamesList()
    {
        return $this->codenames !== null;
    }

    /**
     * Get 'codenames' value
     *
     * @return \Protobuf\Collection
     */
    public function getCodenamesList()
    {
        return $this->codenames;
    }

    /**
     * Set 'codenames' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setCodenamesList(\Protobuf\Collection $value = null)
    {
        $this->codenames = $value;
    }

    /**
     * Add a new element to 'codenames'
     *
     * @param string $value
     */
    public function addCodenames($value)
    {
        if ($this->codenames === null) {
            $this->codenames = new \Protobuf\ScalarCollection();
        }

        $this->codenames->add($value);
    }

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
            'codenames' => [],
            'success' => null
        ], $values);

        $message->setSuccess($values['success']);

        foreach ($values['codenames'] as $item) {
            $message->addCodenames($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetSuggestedCodenamesResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'codenames',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'success',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
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

        if ($this->codenames !== null) {
            foreach ($this->codenames as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->success !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->success);
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

                if ($this->codenames === null) {
                    $this->codenames = new \Protobuf\ScalarCollection();
                }

                $this->codenames->add($reader->readString($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->success = $reader->readBool($stream);

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

        if ($this->codenames !== null) {
            foreach ($this->codenames as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->success !== null) {
            $size += 1;
            $size += 1;
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
        $this->codenames = null;
        $this->success = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\GetSuggestedCodenamesResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->codenames = ($message->codenames !== null) ? $message->codenames : $this->codenames;
        $this->success = ($message->success !== null) ? $message->success : $this->success;
    }


}

