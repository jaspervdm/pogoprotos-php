<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/AttackGymResponse.proto
 */


namespace POGOProtos\Networking\Responses\AttackGymResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.AttackGymResponse.Result
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
     * ERROR_INVALID_ATTACK_ACTIONS = 2
     */
    const ERROR_INVALID_ATTACK_ACTIONS_VALUE = 2;

    /**
     * ERROR_NOT_IN_RANGE = 3
     */
    const ERROR_NOT_IN_RANGE_VALUE = 3;

    /**
     * @var \POGOProtos\Networking\Responses\AttackGymResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\AttackGymResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\AttackGymResponse\Result
     */
    protected static $ERROR_INVALID_ATTACK_ACTIONS = null;

    /**
     * @var \POGOProtos\Networking\Responses\AttackGymResponse\Result
     */
    protected static $ERROR_NOT_IN_RANGE = null;

    /**
     * @return \POGOProtos\Networking\Responses\AttackGymResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\AttackGymResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\AttackGymResponse\Result
     */
    public static function ERROR_INVALID_ATTACK_ACTIONS()
    {
        if (self::$ERROR_INVALID_ATTACK_ACTIONS !== null) {
            return self::$ERROR_INVALID_ATTACK_ACTIONS;
        }

        return self::$ERROR_INVALID_ATTACK_ACTIONS = new self('ERROR_INVALID_ATTACK_ACTIONS', self::ERROR_INVALID_ATTACK_ACTIONS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\AttackGymResponse\Result
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
     * @return \POGOProtos\Networking\Responses\AttackGymResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_INVALID_ATTACK_ACTIONS();
            case 3: return self::ERROR_NOT_IN_RANGE();
            default: return null;
        }
    }


}

