<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Map/Fort/FortSponsor.proto
 */


namespace POGOProtos\Map\Fort;

/**
 * Protobuf enum : POGOProtos.Map.Fort.FortSponsor
 */
class FortSponsor extends \Protobuf\Enum
{

    /**
     * UNSET_SPONSOR = 0
     */
    const UNSET_SPONSOR_VALUE = 0;

    /**
     * MCDONALDS = 1
     */
    const MCDONALDS_VALUE = 1;

    /**
     * POKEMON_STORE = 2
     */
    const POKEMON_STORE_VALUE = 2;

    /**
     * @var \POGOProtos\Map\Fort\FortSponsor
     */
    protected static $UNSET_SPONSOR = null;

    /**
     * @var \POGOProtos\Map\Fort\FortSponsor
     */
    protected static $MCDONALDS = null;

    /**
     * @var \POGOProtos\Map\Fort\FortSponsor
     */
    protected static $POKEMON_STORE = null;

    /**
     * @return \POGOProtos\Map\Fort\FortSponsor
     */
    public static function UNSET_SPONSOR()
    {
        if (self::$UNSET_SPONSOR !== null) {
            return self::$UNSET_SPONSOR;
        }

        return self::$UNSET_SPONSOR = new self('UNSET_SPONSOR', self::UNSET_SPONSOR_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\FortSponsor
     */
    public static function MCDONALDS()
    {
        if (self::$MCDONALDS !== null) {
            return self::$MCDONALDS;
        }

        return self::$MCDONALDS = new self('MCDONALDS', self::MCDONALDS_VALUE);
    }

    /**
     * @return \POGOProtos\Map\Fort\FortSponsor
     */
    public static function POKEMON_STORE()
    {
        if (self::$POKEMON_STORE !== null) {
            return self::$POKEMON_STORE;
        }

        return self::$POKEMON_STORE = new self('POKEMON_STORE', self::POKEMON_STORE_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Map\Fort\FortSponsor
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::UNSET_SPONSOR();
            case 1: return self::MCDONALDS();
            case 2: return self::POKEMON_STORE();
            default: return null;
        }
    }


}

