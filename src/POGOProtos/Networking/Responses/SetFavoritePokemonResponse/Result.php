<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Responses/SetFavoritePokemonResponse.proto
 */


namespace POGOProtos\Networking\Responses\SetFavoritePokemonResponse;

/**
 * Protobuf enum :
 * POGOProtos.Networking.Responses.SetFavoritePokemonResponse.Result
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
     * ERROR_POKEMON_NOT_FOUND = 2
     */
    const ERROR_POKEMON_NOT_FOUND_VALUE = 2;

    /**
     * ERROR_POKEMON_IS_EGG = 3
     */
    const ERROR_POKEMON_IS_EGG_VALUE = 3;

    /**
     * @var \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    protected static $ERROR_POKEMON_NOT_FOUND = null;

    /**
     * @var \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    protected static $ERROR_POKEMON_IS_EGG = null;

    /**
     * @return \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    public static function ERROR_POKEMON_NOT_FOUND()
    {
        if (self::$ERROR_POKEMON_NOT_FOUND !== null) {
            return self::$ERROR_POKEMON_NOT_FOUND;
        }

        return self::$ERROR_POKEMON_NOT_FOUND = new self('ERROR_POKEMON_NOT_FOUND', self::ERROR_POKEMON_NOT_FOUND_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    public static function ERROR_POKEMON_IS_EGG()
    {
        if (self::$ERROR_POKEMON_IS_EGG !== null) {
            return self::$ERROR_POKEMON_IS_EGG;
        }

        return self::$ERROR_POKEMON_IS_EGG = new self('ERROR_POKEMON_IS_EGG', self::ERROR_POKEMON_IS_EGG_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\SetFavoritePokemonResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_POKEMON_NOT_FOUND();
            case 3: return self::ERROR_POKEMON_IS_EGG();
            default: return null;
        }
    }


}

