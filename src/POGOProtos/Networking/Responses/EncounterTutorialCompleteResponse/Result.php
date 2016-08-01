<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor :
 * POGOProtos/Networking/Responses/EncounterTutorialCompleteResponse.proto
 */


namespace POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse;

/**
 * Protobuf enum :
 * POGOProtos.Networking.Responses.EncounterTutorialCompleteResponse.Result
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
     * ERROR_INVALID_POKEMON = 2
     */
    const ERROR_INVALID_POKEMON_VALUE = 2;

    /**
     * @var \POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse\Result
     */
    protected static $UNSET = null;

    /**
     * @var \POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse\Result
     */
    protected static $SUCCESS = null;

    /**
     * @var \POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse\Result
     */
    protected static $ERROR_INVALID_POKEMON = null;

    /**
     * @return \POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse\Result
     */
    public static function UNSET()
    {
        if (self::$UNSET !== null) {
            return self::$UNSET;
        }

        return self::$UNSET = new self('UNSET', self::UNSET_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse\Result
     */
    public static function SUCCESS()
    {
        if (self::$SUCCESS !== null) {
            return self::$SUCCESS;
        }

        return self::$SUCCESS = new self('SUCCESS', self::SUCCESS_VALUE);
    }

    /**
     * @return \POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse\Result
     */
    public static function ERROR_INVALID_POKEMON()
    {
        if (self::$ERROR_INVALID_POKEMON !== null) {
            return self::$ERROR_INVALID_POKEMON;
        }

        return self::$ERROR_INVALID_POKEMON = new self('ERROR_INVALID_POKEMON', self::ERROR_INVALID_POKEMON_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Networking\Responses\EncounterTutorialCompleteResponse\Result
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET();
            case 1: return self::SUCCESS();
            case 2: return self::ERROR_INVALID_POKEMON();
            default: return null;
        }
    }


}

