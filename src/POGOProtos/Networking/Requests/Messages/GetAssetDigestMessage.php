<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Requests/Messages/GetAssetDigestMessage.proto
 */


namespace POGOProtos\Networking\Requests\Messages;

/**
 * Protobuf message : POGOProtos.Networking.Requests.Messages.GetAssetDigestMessage
 */
class GetAssetDigestMessage extends \Protobuf\AbstractMessage
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
     * platform optional enum = 1
     *
     * @var \POGOProtos\Enums\Platform
     */
    protected $platform = null;

    /**
     * device_manufacturer optional string = 2
     *
     * @var string
     */
    protected $device_manufacturer = null;

    /**
     * device_model optional string = 3
     *
     * @var string
     */
    protected $device_model = null;

    /**
     * locale optional string = 4
     *
     * @var string
     */
    protected $locale = null;

    /**
     * app_version optional uint32 = 5
     *
     * @var int
     */
    protected $app_version = null;

    /**
     * Check if 'platform' has a value
     *
     * @return bool
     */
    public function hasPlatform()
    {
        return $this->platform !== null;
    }

    /**
     * Get 'platform' value
     *
     * @return \POGOProtos\Enums\Platform
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Set 'platform' value
     *
     * @param \POGOProtos\Enums\Platform $value
     */
    public function setPlatform(\POGOProtos\Enums\Platform $value = null)
    {
        $this->platform = $value;
    }

    /**
     * Check if 'device_manufacturer' has a value
     *
     * @return bool
     */
    public function hasDeviceManufacturer()
    {
        return $this->device_manufacturer !== null;
    }

    /**
     * Get 'device_manufacturer' value
     *
     * @return string
     */
    public function getDeviceManufacturer()
    {
        return $this->device_manufacturer;
    }

    /**
     * Set 'device_manufacturer' value
     *
     * @param string $value
     */
    public function setDeviceManufacturer($value = null)
    {
        $this->device_manufacturer = $value;
    }

    /**
     * Check if 'device_model' has a value
     *
     * @return bool
     */
    public function hasDeviceModel()
    {
        return $this->device_model !== null;
    }

    /**
     * Get 'device_model' value
     *
     * @return string
     */
    public function getDeviceModel()
    {
        return $this->device_model;
    }

    /**
     * Set 'device_model' value
     *
     * @param string $value
     */
    public function setDeviceModel($value = null)
    {
        $this->device_model = $value;
    }

    /**
     * Check if 'locale' has a value
     *
     * @return bool
     */
    public function hasLocale()
    {
        return $this->locale !== null;
    }

    /**
     * Get 'locale' value
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set 'locale' value
     *
     * @param string $value
     */
    public function setLocale($value = null)
    {
        $this->locale = $value;
    }

    /**
     * Check if 'app_version' has a value
     *
     * @return bool
     */
    public function hasAppVersion()
    {
        return $this->app_version !== null;
    }

    /**
     * Get 'app_version' value
     *
     * @return int
     */
    public function getAppVersion()
    {
        return $this->app_version;
    }

    /**
     * Set 'app_version' value
     *
     * @param int $value
     */
    public function setAppVersion($value = null)
    {
        $this->app_version = $value;
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
            'platform' => null,
            'device_manufacturer' => null,
            'device_model' => null,
            'locale' => null,
            'app_version' => null
        ], $values);

        $message->setPlatform($values['platform']);
        $message->setDeviceManufacturer($values['device_manufacturer']);
        $message->setDeviceModel($values['device_model']);
        $message->setLocale($values['locale']);
        $message->setAppVersion($values['app_version']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'GetAssetDigestMessage',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'platform',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.POGOProtos.Enums.Platform'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'device_manufacturer',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'device_model',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'locale',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'app_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
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

        if ($this->platform !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->platform->value());
        }

        if ($this->device_manufacturer !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->device_manufacturer);
        }

        if ($this->device_model !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->device_model);
        }

        if ($this->locale !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->locale);
        }

        if ($this->app_version !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->app_version);
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

                $this->platform = \POGOProtos\Enums\Platform::valueOf($reader->readVarint($stream));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->device_manufacturer = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->device_model = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->locale = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->app_version = $reader->readVarint($stream);

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

        if ($this->platform !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->platform->value());
        }

        if ($this->device_manufacturer !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->device_manufacturer);
        }

        if ($this->device_model !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->device_model);
        }

        if ($this->locale !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->locale);
        }

        if ($this->app_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->app_version);
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
        $this->platform = null;
        $this->device_manufacturer = null;
        $this->device_model = null;
        $this->locale = null;
        $this->app_version = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Networking\Requests\Messages\GetAssetDigestMessage) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->platform = ($message->platform !== null) ? $message->platform : $this->platform;
        $this->device_manufacturer = ($message->device_manufacturer !== null) ? $message->device_manufacturer : $this->device_manufacturer;
        $this->device_model = ($message->device_model !== null) ? $message->device_model : $this->device_model;
        $this->locale = ($message->locale !== null) ? $message->locale : $this->locale;
        $this->app_version = ($message->app_version !== null) ? $message->app_version : $this->app_version;
    }


}

