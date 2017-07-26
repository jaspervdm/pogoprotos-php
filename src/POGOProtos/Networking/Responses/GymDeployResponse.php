<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/GymDeployResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.GymDeployResponse
 */
class GymDeployResponse extends \Protobuf\AbstractMessage
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
     * @var \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    protected $result = null;

    /**
     * gym_status_and_defenders optional message = 2
     *
     * @var \POGOProtos\Data\Gym\GymStatusAndDefenders
     */
    protected $gym_status_and_defenders = null;

    /**
     * awarded_gym_badge optional message = 3
     *
     * @var \POGOProtos\Data\Badge\AwardedGymBadge
     */
    protected $awarded_gym_badge = null;

    /**
     * cooldown_complete_timestamp_ms optional int64 = 4
     *
     * @var int
     */
    protected $cooldown_complete_timestamp_ms = null;

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
     * @return \POGOProtos\Networking\Responses\GymDeployResponse\Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set 'result' value
     *
     * @param \POGOProtos\Networking\Responses\GymDeployResponse\Result $value
     */
    public function setResult(\POGOProtos\Networking\Responses\GymDeployResponse\Result $value = null)
    {
        $this->result = $value;
    }

    /**
     * Check if 'gym_status_and_defenders' has a value
     *
     * @return bool
     */
    public function hasGymStatusAndDefenders()
    {
        return $this->gym_status_and_defenders !== null;
    }

    /**
     * Get 'gym_status_and_defenders' value
     *
     * @return \POGOProtos\Data\Gym\GymStatusAndDefenders
     */
    public function getGymStatusAndDefenders()
    {
        return $this->gym_status_and_defenders;
    }

    /**
     * Set 'gym_status_and_defenders' value
     *
     * @param \POGOProtos\Data\Gym\GymStatusAndDefenders $value
     */
    public function setGymStatusAndDefenders(\POGOProtos\Data\Gym\GymStatusAndDefenders $value = null)
    {
        $this->gym_status_and_defenders = $value;
    }

    /**
     * Check if 'awarded_gym_badge' has a value
     *
     * @return bool
     */
    public function hasAwardedGymBadge()
    {
        return $this->awarded_gym_badge !== null;
    }

    /**
     * Get 'awarded_gym_badge' value
     *
     * @return \POGOProtos\Data\Badge\AwardedGymBadge
     */
    public function getAwardedGymBadge()
    {
        return $this->awarded_gym_badge;
    }

    /**
     * Set 'awarded_gym_badge' value
     *
     * @param \POGOProtos\Data\Badge\AwardedGymBadge $value
     */
    public function setAwardedGymBadge(\POGOProtos\Data\Badge\AwardedGymBadge $value = null)
    {
        $this->awarded_gym_badge = $value;
    }

    /**
     * Check if 'cooldown_complete_timestamp_ms' has a value
     *
     * @return bool
     */
    public function hasCooldownCompleteTimestampMs()
    {
        return $this->cooldown_complete_timestamp_ms !== null;
    }

    /**
     * Get 'cooldown_complete_timestamp_ms' value
     *
     * @return int
     */
    public function getCooldownCompleteTimestampMs()
    {
        return $this->cooldown_complete_timestamp_ms;
    }

    /**
     * Set 'cooldown_complete_timestamp_ms' value
     *
     * @param int $value
     */
    public function setCooldownCompleteTimestampMs($value = null)
    {
        $this->cooldown_complete_timestamp_ms = $value;
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
            'gym_status_and_defenders' => null,
            'awarded_gym_badge' => null,
            'cooldown_complete_timestamp_ms' => null
        ], $values);

        $message->setResult($values['result']);
        $message->setGymStatusAndDefenders($values['gym_status_and_defenders']);
        $message->setAwardedGymBadge($values['awarded_gym_badge']);
        $message->setCooldownCompleteTimestampMs($values['cooldown_complete_timestamp_ms']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GymDeployResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'result',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Responses.GymDeployResponse.Result'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'gym_status_and_defenders',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Gym.GymStatusAndDefenders'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'awarded_gym_badge',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Data.Badge.AwardedGymBadge'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'cooldown_complete_timestamp_ms',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
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

        if ($this->gym_status_and_defenders !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->gym_status_and_defenders->serializedSize($sizeContext));
            $this->gym_status_and_defenders->writeTo($context);
        }

        if ($this->awarded_gym_badge !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeVarint($stream, $this->awarded_gym_badge->serializedSize($sizeContext));
            $this->awarded_gym_badge->writeTo($context);
        }

        if ($this->cooldown_complete_timestamp_ms !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->cooldown_complete_timestamp_ms);
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

                $this->result = \POGOProtos\Networking\Responses\GymDeployResponse\Result::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Gym\GymStatusAndDefenders();

                $this->gym_status_and_defenders = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Data\Badge\AwardedGymBadge();

                $this->awarded_gym_badge = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->cooldown_complete_timestamp_ms = $reader->readVarint($stream);

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

        if ($this->gym_status_and_defenders !== null) {
            $innerSize = $this->gym_status_and_defenders->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->awarded_gym_badge !== null) {
            $innerSize = $this->awarded_gym_badge->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->cooldown_complete_timestamp_ms !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->cooldown_complete_timestamp_ms);
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
        $this->gym_status_and_defenders = null;
        $this->awarded_gym_badge = null;
        $this->cooldown_complete_timestamp_ms = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\GymDeployResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->result = ($message->result !== null) ? $message->result : $this->result;
        $this->gym_status_and_defenders = ($message->gym_status_and_defenders !== null) ? $message->gym_status_and_defenders : $this->gym_status_and_defenders;
        $this->awarded_gym_badge = ($message->awarded_gym_badge !== null) ? $message->awarded_gym_badge : $this->awarded_gym_badge;
        $this->cooldown_complete_timestamp_ms = ($message->cooldown_complete_timestamp_ms !== null) ? $message->cooldown_complete_timestamp_ms : $this->cooldown_complete_timestamp_ms;
    }


}
