<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/EquipBadgeResponse.proto
 */


namespace POGOProtos\Networking\Responses\EquipBadgeResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.EquipBadgeResponse.Result
 */
class Result extends \Protobuf\Enum
{

    /**
     * UNSET = 0
     */
    const UNSET_VALUE = 0;

    /**
     * SUCCESS = 1
     */
    const SUCCESS_VALUE = 1;

    /**
     * COOLDOWN_ACTIVE = 2
     */
    const COOLDOWN_ACTIVE_VALUE = 2;

    /**
     * NOT_QUALIFIED = 3
     */
    const NOT_QUALIFIED_VALUE = 3;

    /**
     * @var \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    protected static $COOLDOWN_ACTIVE = null;

    /**
     * @var \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    protected static $NOT_QUALIFIED = null;

    /**
     * @return \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    public static function COOLDOWN_ACTIVE()
    {
        if (self::$COOLDOWN_ACTIVE !== null) {
            return self::$COOLDOWN_ACTIVE;
        }

        return self::$COOLDOWN_ACTIVE = new self('COOLDOWN_ACTIVE', self::COOLDOWN_ACTIVE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    public static function NOT_QUALIFIED()
    {
        if (self::$NOT_QUALIFIED !== null) {
            return self::$NOT_QUALIFIED;
        }

        return self::$NOT_QUALIFIED = new self('NOT_QUALIFIED', self::NOT_QUALIFIED_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\EquipBadgeResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::COOLDOWN_ACTIVE();
            case 3: return self::NOT_QUALIFIED();
            default: return null;
        }
    }


}

