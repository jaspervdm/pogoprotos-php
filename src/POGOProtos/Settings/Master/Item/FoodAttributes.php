<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Settings/Master/Item/FoodAttributes.proto
 */


namespace POGOProtos\Settings\Master\Item;

/**
 * Protobuf message : POGOProtos.Settings.Master.Item.FoodAttributes
 */
class FoodAttributes extends \Protobuf\AbstractMessage
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
     * item_effect repeated enum = 1
     *
     * @var \Protobuf\Collection<\POGOProtos\Enums\ItemEffect>
     */
    protected $item_effect = null;

    /**
     * item_effect_percent repeated float = 2
     *
     * @var \Protobuf\Collection
     */
    protected $item_effect_percent = null;

    /**
     * growth_percent optional float = 3
     *
     * @var float
     */
    protected $growth_percent = null;

    /**
     * Check if 'item_effect' has a value
     *
     * @return bool
     */
    public function hasItemEffectList()
    {
        return $this->item_effect !== null;
    }

    /**
     * Get 'item_effect' value
     *
     * @return \Protobuf\Collection<\POGOProtos\Enums\ItemEffect>
     */
    public function getItemEffectList()
    {
        return $this->item_effect;
    }

    /**
     * Set 'item_effect' value
     *
     * @param \Protobuf\Collection<\POGOProtos\Enums\ItemEffect> $value
     */
    public function setItemEffectList(\Protobuf\Collection $value = null)
    {
        $this->item_effect = $value;
    }

    /**
     * Add a new element to 'item_effect'
     *
     * @param \POGOProtos\Enums\ItemEffect $value
     */
    public function addItemEffect(\POGOProtos\Enums\ItemEffect $value)
    {
        if ($this->item_effect === null) {
            $this->item_effect = new \Protobuf\EnumCollection();
        }

        $this->item_effect->add($value);
    }

    /**
     * Check if 'item_effect_percent' has a value
     *
     * @return bool
     */
    public function hasItemEffectPercentList()
    {
        return $this->item_effect_percent !== null;
    }

    /**
     * Get 'item_effect_percent' value
     *
     * @return \Protobuf\Collection
     */
    public function getItemEffectPercentList()
    {
        return $this->item_effect_percent;
    }

    /**
     * Set 'item_effect_percent' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setItemEffectPercentList(\Protobuf\Collection $value = null)
    {
        $this->item_effect_percent = $value;
    }

    /**
     * Add a new element to 'item_effect_percent'
     *
     * @param float $value
     */
    public function addItemEffectPercent($value)
    {
        if ($this->item_effect_percent === null) {
            $this->item_effect_percent = new \Protobuf\ScalarCollection();
        }

        $this->item_effect_percent->add($value);
    }

    /**
     * Check if 'growth_percent' has a value
     *
     * @return bool
     */
    public function hasGrowthPercent()
    {
        return $this->growth_percent !== null;
    }

    /**
     * Get 'growth_percent' value
     *
     * @return float
     */
    public function getGrowthPercent()
    {
        return $this->growth_percent;
    }

    /**
     * Set 'growth_percent' value
     *
     * @param float $value
     */
    public function setGrowthPercent($value = null)
    {
        $this->growth_percent = $value;
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
            'item_effect' => [],
            'item_effect_percent' => [],
            'growth_percent' => null
        ], $values);

        $message->setGrowthPercent($values['growth_percent']);

        foreach ($values['item_effect'] as $item) {
            $message->addItemEffect($item);
        }

        foreach ($values['item_effect_percent'] as $item) {
            $message->addItemEffectPercent($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'FoodAttributes',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'item_effect',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.POGOProtos.Enums.ItemEffect'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'item_effect_percent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'growth_percent',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
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

        if ($this->item_effect !== null) {
            foreach ($this->item_effect as $val) {
                $writer->writeVarint($stream, 8);
                $writer->writeVarint($stream, $val->value());
            }
        }

        if ($this->item_effect_percent !== null) {
            foreach ($this->item_effect_percent as $val) {
                $writer->writeVarint($stream, 21);
                $writer->writeFloat($stream, $val);
            }
        }

        if ($this->growth_percent !== null) {
            $writer->writeVarint($stream, 29);
            $writer->writeFloat($stream, $this->growth_percent);
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
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->item_effect === null) {
                    $this->item_effect = new \Protobuf\EnumCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->item_effect->add(\POGOProtos\Enums\ItemEffect::valueOf($reader->readVarint($stream)));
                }

                continue;
            }

            if ($tag === 2) {
                $innerSize  = $reader->readVarint($stream);
                $innerLimit = $stream->tell() + $innerSize;

                if ($this->item_effect_percent === null) {
                    $this->item_effect_percent = new \Protobuf\ScalarCollection();
                }

                while ($stream->tell() < $innerLimit) {
                    $this->item_effect_percent->add($reader->readFloat($stream));
                }

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->growth_percent = $reader->readFloat($stream);

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

        if ($this->item_effect !== null) {
            foreach ($this->item_effect as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
        }

        if ($this->item_effect_percent !== null) {
            foreach ($this->item_effect_percent as $val) {
                $size += 1;
                $size += 4;
            }
        }

        if ($this->growth_percent !== null) {
            $size += 1;
            $size += 4;
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
        $this->item_effect = null;
        $this->item_effect_percent = null;
        $this->growth_percent = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Settings\Master\Item\FoodAttributes) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->item_effect = ($message->item_effect !== null) ? $message->item_effect : $this->item_effect;
        $this->item_effect_percent = ($message->item_effect_percent !== null) ? $message->item_effect_percent : $this->item_effect_percent;
        $this->growth_percent = ($message->growth_percent !== null) ? $message->growth_percent : $this->growth_percent;
    }


}

