<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/LevelUpRewardsResponse.proto
 */


namespace POGOProtos\Networking\Responses;

/**
 * Protobuf message : POGOProtos.Networking.Responses.LevelUpRewardsResponse
 */
class LevelUpRewardsResponse extends \Protobuf\AbstractMessage
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
     * @var \POGOProtos\Networking\Responses\LevelUpRewardsResponse\Result
     */
    protected $result = null;

    /**
     * items_awarded repeated message = 2
     *
     * @var \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemAward>
     */
    protected $items_awarded = null;

    /**
     * items_unlocked repeated enum = 4
     *
     * @var \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemId>
     */
    protected $items_unlocked = null;

    /**
     * avatar_template_ids repeated string = 5
     *
     * @var \Protobuf\Collection
     */
    protected $avatar_template_ids = null;

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
     * @return \POGOProtos\Networking\Responses\LevelUpRewardsResponse\Result
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set 'result' value
     *
     * @param \POGOProtos\Networking\Responses\LevelUpRewardsResponse\Result $value
     */
    public function setResult(\POGOProtos\Networking\Responses\LevelUpRewardsResponse\Result $value = null)
    {
        $this->result = $value;
    }

    /**
     * Check if 'items_awarded' has a value
     *
     * @return bool
     */
    public function hasItemsAwardedList()
    {
        return $this->items_awarded !== null;
    }

    /**
     * Get 'items_awarded' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemAward>
     */
    public function getItemsAwardedList()
    {
        return $this->items_awarded;
    }

    /**
     * Set 'items_awarded' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemAward> $value
     */
    public function setItemsAwardedList(\Protobuf\Collection $value = null)
    {
        $this->items_awarded = $value;
    }

    /**
     * Add a new element to 'items_awarded'
     *
     * @param \POGOProtos\Inventory\Item\ItemAward $value
     */
    public function addItemsAwarded(\POGOProtos\Inventory\Item\ItemAward $value)
    {
        if ($this->items_awarded === null) {
            $this->items_awarded = new \Protobuf\MessageCollection();
        }

        $this->items_awarded->add($value);
    }

    /**
     * Check if 'items_unlocked' has a value
     *
     * @return bool
     */
    public function hasItemsUnlockedList()
    {
        return $this->items_unlocked !== null;
    }

    /**
     * Get 'items_unlocked' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemId>
     */
    public function getItemsUnlockedList()
    {
        return $this->items_unlocked;
    }

    /**
     * Set 'items_unlocked' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Inventory\Item\ItemId> $value
     */
    public function setItemsUnlockedList(\Protobuf\Collection $value = null)
    {
        $this->items_unlocked = $value;
    }

    /**
     * Add a new element to 'items_unlocked'
     *
     * @param \POGOProtos\Inventory\Item\ItemId $value
     */
    public function addItemsUnlocked(\POGOProtos\Inventory\Item\ItemId $value)
    {
        if ($this->items_unlocked === null) {
            $this->items_unlocked = new \Protobuf\EnumCollection();
        }

        $this->items_unlocked->add($value);
    }

    /**
     * Check if 'avatar_template_ids' has a value
     *
     * @return bool
     */
    public function hasAvatarTemplateIdsList()
    {
        return $this->avatar_template_ids !== null;
    }

    /**
     * Get 'avatar_template_ids' value
     *
     * @return \Protobuf\Collection
     */
    public function getAvatarTemplateIdsList()
    {
        return $this->avatar_template_ids;
    }

    /**
     * Set 'avatar_template_ids' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAvatarTemplateIdsList(\Protobuf\Collection $value = null)
    {
        $this->avatar_template_ids = $value;
    }

    /**
     * Add a new element to 'avatar_template_ids'
     *
     * @param string $value
     */
    public function addAvatarTemplateIds($value)
    {
        if ($this->avatar_template_ids === null) {
            $this->avatar_template_ids = new \Protobuf\ScalarCollection();
        }

        $this->avatar_template_ids->add($value);
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
            'items_awarded' => [],
            'items_unlocked' => [],
            'avatar_template_ids' => []
        ], $values);

        $message->setResult($values['result']);

        foreach ($values['items_awarded'] as $item) {
            $message->addItemsAwarded($item);
        }

        foreach ($values['items_unlocked'] as $item) {
            $message->addItemsUnlocked($item);
        }

        foreach ($values['avatar_template_ids'] as $item) {
            $message->addAvatarTemplateIds($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'LevelUpRewardsResponse',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'result',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Networking.Responses.LevelUpRewardsResponse.Result'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'items_awarded',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemAward'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'items_unlocked',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Inventory.Item.ItemId'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'avatar_template_ids',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->items_awarded !== null) {
            foreach ($this->items_awarded as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->items_unlocked !== null) {
            foreach ($this->items_unlocked as $val) {
                $writer->writeVarint($stream, 32);
                $writer->writeVarint($stream, $val->value());
            }
        }

        if ($this->avatar_template_ids !== null) {
            foreach ($this->avatar_template_ids as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeString($stream, $val);
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

                $this->result = \POGOProtos\Networking\Responses\LevelUpRewardsResponse\Result::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \POGOProtos\Inventory\Item\ItemAward();

                if ($this->items_awarded === null) {
                    $this->items_awarded = new \Protobuf\MessageCollection();
                }

                $this->items_awarded->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->items_unlocked === null) {
                    $this->items_unlocked = new \Protobuf\EnumCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->items_unlocked->add(\POGOProtos\Inventory\Item\ItemId::valueOf($reader->readVarint($stream)));
                }

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->avatar_template_ids === null) {
                    $this->avatar_template_ids = new \Protobuf\ScalarCollection();
                }

                $this->avatar_template_ids->add($reader->readString($stream));

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

        if ($this->items_awarded !== null) {
            foreach ($this->items_awarded as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->items_unlocked !== null) {
            foreach ($this->items_unlocked as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
        }

        if ($this->avatar_template_ids !== null) {
            foreach ($this->avatar_template_ids as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
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
        $this->items_awarded = null;
        $this->items_unlocked = null;
        $this->avatar_template_ids = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Responses\LevelUpRewardsResponse) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->result = ($message->result !== null) ? $message->result : $this->result;
        $this->items_awarded = ($message->items_awarded !== null) ? $message->items_awarded : $this->items_awarded;
        $this->items_unlocked = ($message->items_unlocked !== null) ? $message->items_unlocked : $this->items_unlocked;
        $this->avatar_template_ids = ($message->avatar_template_ids !== null) ? $message->avatar_template_ids : $this->avatar_template_ids;
    }


}

