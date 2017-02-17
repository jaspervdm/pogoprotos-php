<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Networking/Responses/EvolvePokemonResponse.proto
 */


namespace POGOProtos\Networking\Responses\EvolvePokemonResponse;

/**
 * Protobuf enum : POGOProtos.Networking.Responses.EvolvePokemonResponse.Result
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
     * FAILED_POKEMON_MISSING = 2
     */
    const FAILED_POKEMON_MISSING_VALUE = 2;

    /**
     * FAILED_INSUFFICIENT_RESOURCES = 3
     */
    const FAILED_INSUFFICIENT_RESOURCES_VALUE = 3;

    /**
     * FAILED_POKEMON_CANNOT_EVOLVE = 4
     */
    const FAILED_POKEMON_CANNOT_EVOLVE_VALUE = 4;

    /**
     * FAILED_POKEMON_IS_DEPLOYED = 5
     */
    const FAILED_POKEMON_IS_DEPLOYED_VALUE = 5;

    /**
     * FAILED_INVALID_ITEM_REQUIREMENT = 6
     */
    const FAILED_INVALID_ITEM_REQUIREMENT_VALUE = 6;

    /**
     * @var \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    protected static $FAILED_POKEMON_MISSING = null;

    /**
     * @var \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    protected static $FAILED_INSUFFICIENT_RESOURCES = null;

    /**
     * @var \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    protected static $FAILED_POKEMON_CANNOT_EVOLVE = null;

    /**
     * @var \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    protected static $FAILED_POKEMON_IS_DEPLOYED = null;

    /**
     * @var \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    protected static $FAILED_INVALID_ITEM_REQUIREMENT = null;

    /**
     * @return \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    public static function FAILED_POKEMON_MISSING()
    {
        if (self::$FAILED_POKEMON_MISSING !== null) {
            return self::$FAILED_POKEMON_MISSING;
        }

        return self::$FAILED_POKEMON_MISSING = new self('FAILED_POKEMON_MISSING', self::FAILED_POKEMON_MISSING_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    public static function FAILED_INSUFFICIENT_RESOURCES()
    {
        if (self::$FAILED_INSUFFICIENT_RESOURCES !== null) {
            return self::$FAILED_INSUFFICIENT_RESOURCES;
        }

        return self::$FAILED_INSUFFICIENT_RESOURCES = new self('FAILED_INSUFFICIENT_RESOURCES', self::FAILED_INSUFFICIENT_RESOURCES_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    public static function FAILED_POKEMON_CANNOT_EVOLVE()
    {
        if (self::$FAILED_POKEMON_CANNOT_EVOLVE !== null) {
            return self::$FAILED_POKEMON_CANNOT_EVOLVE;
        }

        return self::$FAILED_POKEMON_CANNOT_EVOLVE = new self('FAILED_POKEMON_CANNOT_EVOLVE', self::FAILED_POKEMON_CANNOT_EVOLVE_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    public static function FAILED_POKEMON_IS_DEPLOYED()
    {
        if (self::$FAILED_POKEMON_IS_DEPLOYED !== null) {
            return self::$FAILED_POKEMON_IS_DEPLOYED;
        }

        return self::$FAILED_POKEMON_IS_DEPLOYED = new self('FAILED_POKEMON_IS_DEPLOYED', self::FAILED_POKEMON_IS_DEPLOYED_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    public static function FAILED_INVALID_ITEM_REQUIREMENT()
    {
        if (self::$FAILED_INVALID_ITEM_REQUIREMENT !== null) {
            return self::$FAILED_INVALID_ITEM_REQUIREMENT;
        }

        return self::$FAILED_INVALID_ITEM_REQUIREMENT = new self('FAILED_INVALID_ITEM_REQUIREMENT', self::FAILED_INVALID_ITEM_REQUIREMENT_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\EvolvePokemonResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::FAILED_POKEMON_MISSING();
            case 3: return self::FAILED_INSUFFICIENT_RESOURCES();
            case 4: return self::FAILED_POKEMON_CANNOT_EVOLVE();
            case 5: return self::FAILED_POKEMON_IS_DEPLOYED();
            case 6: return self::FAILED_INVALID_ITEM_REQUIREMENT();
            default: return null;
        }
    }


}

