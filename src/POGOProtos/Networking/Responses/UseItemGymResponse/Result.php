<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/UseItemGymResponse.proto
 */


namespace POGOProtos\Networking\Responses\UseItemGymResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.UseItemGymResponse.Result
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
     * ERROR_CANNOT_USE = 2
     */
    const ERROR_CANNOT_USE_VALUE = 2;

    /**
     * ERROR_NOT_IN_RANGE = 3
     */
    const ERROR_NOT_IN_RANGE_VALUE = 3;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    protected static $ERROR_CANNOT_USE = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    protected static $ERROR_NOT_IN_RANGE = null;

    /**
     * @return \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    public static function ERROR_CANNOT_USE()
    {
        if (self::$ERROR_CANNOT_USE !== null) {
            return self::$ERROR_CANNOT_USE;
        }

        return self::$ERROR_CANNOT_USE = new self('ERROR_CANNOT_USE', self::ERROR_CANNOT_USE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    public static function ERROR_NOT_IN_RANGE()
    {
        if (self::$ERROR_NOT_IN_RANGE !== null) {
            return self::$ERROR_NOT_IN_RANGE;
        }

        return self::$ERROR_NOT_IN_RANGE = new self('ERROR_NOT_IN_RANGE', self::ERROR_NOT_IN_RANGE_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\UseItemGymResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_CANNOT_USE();
            case 3: return self::ERROR_NOT_IN_RANGE();
            default: return null;
        }
    }


}

