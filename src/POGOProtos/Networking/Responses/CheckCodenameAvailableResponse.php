<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Responses/CheckCodenameAvailableResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message :
 * POGOProtos.Networking.Responses.CheckCodenameAvailableResponse
 */
class CheckCodenameAvailableResponse extends \Protobuf\AbstractMessage
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
     * codename optional string = 1
     *
     * @var string
     */
    protected $codename = null;

    /**
     * user_message optional string = 2
     *
     * @var string
     */
    protected $user_message = null;

    /**
     * is_assignable optional bool = 3
     *
     * @var bool
     */
    protected $is_assignable = null;

    /**
     * status optional enum = 4
     *
     * @var \POGOProtos\Networking\Responses\CheckCodenameAvailableResponse\Status
     */
    protected $status = null;

    /**
     * Check if 'codename' has a value
     *
     * @return bool
     */
    public function hasCodename()
    {
        return $this->codename !== null;
    }

    /**
     * Get 'codename' value
     *
     * @return string
     */
    public function getCodename()
    {
        return $this->codename;
    }

    /**
     * Set 'codename' value
     *
     * @param string $value
     */
    public function setCodename($value = null)
    {
        $this->codename = $value;
    }

    /**
     * Check if 'user_message' has a value
     *
     * @return bool
     */
    public function hasUserMessage()
    {
        return $this->user_message !== null;
    }

    /**
     * Get 'user_message' value
     *
     * @return string
     */
    public function getUserMessage()
    {
        return $this->user_message;
    }

    /**
     * Set 'user_message' value
     *
     * @param string $value
     */
    public function setUserMessage($value = null)
    {
        $this->user_message = $value;
    }

    /**
     * Check if 'is_assignable' has a value
     *
     * @return bool
     */
    public function hasIsAssignable()
    {
        return $this->is_assignable !== null;
    }

    /**
     * Get 'is_assignable' value
     *
     * @return bool
     */
    public function getIsAssignable()
    {
        return $this->is_assignable;
    }

    /**
     * Set 'is_assignable' value
     *
     * @param bool $value
     */
    public function setIsAssignable($value = null)
    {
        $this->is_assignable = $value;
    }

    /**
     * Check if 'status' has a value
     *
     * @return bool
     */
    public function hasStatus()
    {
        return $this->status !== null;
    }

    /**
     * Get 'status' value
     *
     * @return \POGOProtos\Networking\Responses\CheckCodenameAvailableResponse\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set 'status' value
     *
     * @param \POGOProtos\Networking\Responses\CheckCodenameAvailableResponse\Status $value
     */
    public function setStatus(\POGOProtos\Networking\Responses\CheckCodenameAvailableResponse\Status $value = null)
    {
        $this->status = $value;
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
            'codename' => null,
            'user_message' => null,
            'is_assignable' => null,
            'status' => null
        ], $values);

        $message->setCodename($values['codename']);
        $message->setUserMessage($values['user_message']);
        $message->setIsAssignable($values['is_assignable']);
        $message->setStatus($values['status']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'CheckCodenameAvailableResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'codename',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'user_message',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'is_assignable',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Responses.CheckCodenameAvailableResponse.Status'
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

        if ($this->codename !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->codename);
        }

        if ($this->user_message !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->user_message);
        }

        if ($this->is_assignable !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->is_assignable);
        }

        if ($this->status !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->status->value());
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

                $this->codename = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->user_message = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->is_assignable = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->status = \POGOProtos\Networking\Responses\CheckCodenameAvailableResponse\Status::valueOf($reader->readVarint($stream));

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

        if ($this->codename !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->codename);
        }

        if ($this->user_message !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->user_message);
        }

        if ($this->is_assignable !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status->value());
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
        $this->codename = null;
        $this->user_message = null;
        $this->is_assignable = null;
        $this->status = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\CheckCodenameAvailableResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->codename = ($message->codename !== null) ? $message->codename : $this->codename;
        $this->user_message = ($message->user_message !== null) ? $message->user_message : $this->user_message;
        $this->is_assignable = ($message->is_assignable !== null) ? $message->is_assignable : $this->is_assignable;
        $this->status = ($message->status !== null) ? $message->status : $this->status;
    }


}

