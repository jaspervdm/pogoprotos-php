<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Data/Player/ContactSettings.proto
 */


namespace POGOProtos\Data\Player;

/**
 * Protobuf message : POGOProtos.Data.Player.ContactSettings
 */
class ContactSettings extends \Protobuf\AbstractMessage
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
     * send_marketing_emails optional bool = 1
     *
     * @var bool
     */
    protected $send_marketing_emails = null;

    /**
     * send_push_notifications optional bool = 2
     *
     * @var bool
     */
    protected $send_push_notifications = null;

    /**
     * Check if 'send_marketing_emails' has a value
     *
     * @return bool
     */
    public function hasSendMarketingEmails()
    {
        return $this->send_marketing_emails !== null;
    }

    /**
     * Get 'send_marketing_emails' value
     *
     * @return bool
     */
    public function getSendMarketingEmails()
    {
        return $this->send_marketing_emails;
    }

    /**
     * Set 'send_marketing_emails' value
     *
     * @param bool $value
     */
    public function setSendMarketingEmails($value = null)
    {
        $this->send_marketing_emails = $value;
    }

    /**
     * Check if 'send_push_notifications' has a value
     *
     * @return bool
     */
    public function hasSendPushNotifications()
    {
        return $this->send_push_notifications !== null;
    }

    /**
     * Get 'send_push_notifications' value
     *
     * @return bool
     */
    public function getSendPushNotifications()
    {
        return $this->send_push_notifications;
    }

    /**
     * Set 'send_push_notifications' value
     *
     * @param bool $value
     */
    public function setSendPushNotifications($value = null)
    {
        $this->send_push_notifications = $value;
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
            'send_marketing_emails' => null,
            'send_push_notifications' => null
        ], $values);

        $message->setSendMarketingEmails($values['send_marketing_emails']);
        $message->setSendPushNotifications($values['send_push_notifications']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ContactSettings',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'send_marketing_emails',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'send_push_notifications',
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

        if ($this->send_marketing_emails !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->send_marketing_emails);
        }

        if ($this->send_push_notifications !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->send_push_notifications);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->send_marketing_emails = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->send_push_notifications = $reader->readBool($stream);

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

        if ($this->send_marketing_emails !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->send_push_notifications !== null) {
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
        $this->send_marketing_emails = null;
        $this->send_push_notifications = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \POGOProtos\Data\Player\ContactSettings) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->send_marketing_emails = ($message->send_marketing_emails !== null) ? $message->send_marketing_emails : $this->send_marketing_emails;
        $this->send_push_notifications = ($message->send_push_notifications !== null) ? $message->send_push_notifications : $this->send_push_notifications;
    }


}

