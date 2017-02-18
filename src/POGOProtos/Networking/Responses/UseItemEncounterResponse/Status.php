<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/UseItemEncounterResponse.proto
 */


namespace POGOProtos\Networking\Responses\UseItemEncounterResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.UseItemEncounterResponse.Status
 */
class Status extends \Protobuf\Enum
{

    /**
     * SUCCESS = 0
     */
    const SUCCESS_VALUE = 0;

    /**
     * ALREADY_COMPLETED = 1
     */
    const ALREADY_COMPLETED_VALUE = 1;

    /**
     * ACTIVE_ITEM_EXISTS = 2
     */
    const ACTIVE_ITEM_EXISTS_VALUE = 2;

    /**
     * NO_ITEM_IN_INVENTORY = 3
     */
    const NO_ITEM_IN_INVENTORY_VALUE = 3;

    /**
     * INVALID_ITEM_CATEGORY = 4
     */
    const INVALID_ITEM_CATEGORY_VALUE = 4;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    protected static $ALREADY_COMPLETED = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    protected static $ACTIVE_ITEM_EXISTS = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    protected static $NO_ITEM_IN_INVENTORY = null;

    /**
     * @var \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    protected static $INVALID_ITEM_CATEGORY = null;

    /**
     * @return \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    public static function ALREADY_COMPLETED()
    {
        if (self::$ALREADY_COMPLETED !== null) {
            return self::$ALREADY_COMPLETED;
        }

        return self::$ALREADY_COMPLETED = new self('ALREADY_COMPLETED', self::ALREADY_COMPLETED_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    public static function ACTIVE_ITEM_EXISTS()
    {
        if (self::$ACTIVE_ITEM_EXISTS !== null) {
            return self::$ACTIVE_ITEM_EXISTS;
        }

        return self::$ACTIVE_ITEM_EXISTS = new self('ACTIVE_ITEM_EXISTS', self::ACTIVE_ITEM_EXISTS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    public static function NO_ITEM_IN_INVENTORY()
    {
        if (self::$NO_ITEM_IN_INVENTORY !== null) {
            return self::$NO_ITEM_IN_INVENTORY;
        }

        return self::$NO_ITEM_IN_INVENTORY = new self('NO_ITEM_IN_INVENTORY', self::NO_ITEM_IN_INVENTORY_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    public static function INVALID_ITEM_CATEGORY()
    {
        if (self::$INVALID_ITEM_CATEGORY !== null) {
            return self::$INVALID_ITEM_CATEGORY;
        }

        return self::$INVALID_ITEM_CATEGORY = new self('INVALID_ITEM_CATEGORY', self::INVALID_ITEM_CATEGORY_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\UseItemEncounterResponse\Status
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::SUCCESS();
            case 1: return self::ALREADY_COMPLETED();
            case 2: return self::ACTIVE_ITEM_EXISTS();
            case 3: return self::NO_ITEM_IN_INVENTORY();
            case 4: return self::INVALID_ITEM_CATEGORY();
            default: return null;
        }
    }


}
