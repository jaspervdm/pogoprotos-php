<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/GetPlayerProfileResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.GetPlayerProfileResponse
 */
class GetPlayerProfileResponse extends \Protobuf\AbstractMessage
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
     * @var \POGOProtos\Networking\Responses\GetPlayerProfileResponse\Result
     */
    protected $result = null;

    /**
     * start_time optional int64 = 2
     *
     * @var int
     */
    protected $start_time = null;

    /**
     * badges repeated message = 3
     *
     * @var \Protobuf\Collection<\POGOProtos\Data\PlayerBadge>
     */
    protected $badges = null;

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
     * @return \POGOProtos\Networking\Responses\GetPlayerProfileResponse\Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set 'result' value
     *
     * @param \POGOProtos\Networking\Responses\GetPlayerProfileResponse\Result $value
     */
    public function setResult(\POGOProtos\Networking\Responses\GetPlayerProfileResponse\Result $value = null)
    {
        $this->result = $value;
    }

    /**
     * Check if 'start_time' has a value
     *
     * @return bool
     */
    public function hasStartTime()
    {
        return $this->start_time !== null;
    }

    /**
     * Get 'start_time' value
     *
     * @return int
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * Set 'start_time' value
     *
     * @param int $value
     */
    public function setStartTime($value = null)
    {
        $this->start_time = $value;
    }

    /**
     * Check if 'badges' has a value
     *
     * @return bool
     */
    public function hasBadgesList()
    {
        return $this->badges !== null;
    }

    /**
     * Get 'badges' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Data\PlayerBadge>
     */
    public function getBadgesList()
    {
        return $this->badges;
    }

    /**
     * Set 'badges' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Data\PlayerBadge> $value
     */
    public function setBadgesList(\Protobuf\Collection $value = null)
    {
        $this->badges = $value;
    }

    /**
     * Add a new element to 'badges'
     *
     * @param \POGOProtos\Data\PlayerBadge $value
     */
    public function addBadges(\POGOProtos\Data\PlayerBadge $value)
    {
        if ($this->badges === null) {
            $this->badges = new \Protobuf\MessageCollection();
        }

        $this->badges->add($value);
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
            'start_time' => null,
            'badges' => []
        ], $values);

        $message->setResult($values['result']);
        $message->setStartTime($values['start_time']);

        foreach ($values['badges'] as $item) {
            $message->addBadges($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetPlayerProfileResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'result',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Responses.GetPlayerProfileResponse.Result'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'start_time',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'badges',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Data.PlayerBadge'
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

        if ($this->start_time !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->start_time);
        }

        if ($this->badges !== null) {
            foreach ($this->badges as $val) {
                $writer->writeVarint($stream, 26);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                $this->result = \POGOProtos\Networking\Responses\GetPlayerProfileResponse\Result::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->start_time = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\PlayerBadge();

                if ($this->badges === null) {
                    $this->badges = new \Protobuf\MessageCollection();
                }

                $this->badges->add($innerMessage);

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

        if ($this->result !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->result->value());
        }

        if ($this->start_time !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->start_time);
        }

        if ($this->badges !== null) {
            foreach ($this->badges as $val) {
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
        $this->result = null;
        $this->start_time = null;
        $this->badges = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\GetPlayerProfileResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->result = ($message->result !== null) ? $message->result : $this->result;
        $this->start_time = ($message->start_time !== null) ? $message->start_time : $this->start_time;
        $this->badges = ($message->badges !== null) ? $message->badges : $this->badges;
    }


}

