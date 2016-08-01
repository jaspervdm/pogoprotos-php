<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : POGOProtos/Enums/CameraTarget.proto
 */


namespace POGOProtos\Enums;

/**
 * Protobuf enum : POGOProtos.Enums.CameraTarget
 */
class CameraTarget extends \Protobuf\Enum
{

    /**
     * CAM_TARGET_ATTACKER = 0
     */
    const CAM_TARGET_ATTACKER_VALUE = 0;

    /**
     * CAM_TARGET_ATTACKER_EDGE = 1
     */
    const CAM_TARGET_ATTACKER_EDGE_VALUE = 1;

    /**
     * CAM_TARGET_ATTACKER_GROUND = 2
     */
    const CAM_TARGET_ATTACKER_GROUND_VALUE = 2;

    /**
     * CAM_TARGET_DEFENDER = 3
     */
    const CAM_TARGET_DEFENDER_VALUE = 3;

    /**
     * CAM_TARGET_DEFENDER_EDGE = 4
     */
    const CAM_TARGET_DEFENDER_EDGE_VALUE = 4;

    /**
     * CAM_TARGET_DEFENDER_GROUND = 5
     */
    const CAM_TARGET_DEFENDER_GROUND_VALUE = 5;

    /**
     * CAM_TARGET_ATTACKER_DEFENDER = 6
     */
    const CAM_TARGET_ATTACKER_DEFENDER_VALUE = 6;

    /**
     * CAM_TARGET_ATTACKER_DEFENDER_EDGE = 7
     */
    const CAM_TARGET_ATTACKER_DEFENDER_EDGE_VALUE = 7;

    /**
     * CAM_TARGET_DEFENDER_ATTACKER = 8
     */
    const CAM_TARGET_DEFENDER_ATTACKER_VALUE = 8;

    /**
     * CAM_TARGET_DEFENDER_ATTACKER_EDGE = 9
     */
    const CAM_TARGET_DEFENDER_ATTACKER_EDGE_VALUE = 9;

    /**
     * CAM_TARGET_ATTACKER_DEFENDER_MIRROR = 11
     */
    const CAM_TARGET_ATTACKER_DEFENDER_MIRROR_VALUE = 11;

    /**
     * CAM_TARGET_SHOULDER_ATTACKER_DEFENDER = 12
     */
    const CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_VALUE = 12;

    /**
     * CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR = 13
     */
    const CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR_VALUE = 13;

    /**
     * CAM_TARGET_ATTACKER_DEFENDER_WORLD = 14
     */
    const CAM_TARGET_ATTACKER_DEFENDER_WORLD_VALUE = 14;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_ATTACKER = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_ATTACKER_EDGE = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_ATTACKER_GROUND = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_DEFENDER = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_DEFENDER_EDGE = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_DEFENDER_GROUND = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_ATTACKER_DEFENDER = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_ATTACKER_DEFENDER_EDGE = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_DEFENDER_ATTACKER = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_DEFENDER_ATTACKER_EDGE = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_ATTACKER_DEFENDER_MIRROR = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_SHOULDER_ATTACKER_DEFENDER = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR = null;

    /**
     * @var \POGOProtos\Enums\CameraTarget
     */
    protected static $CAM_TARGET_ATTACKER_DEFENDER_WORLD = null;

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_ATTACKER()
    {
        if (self::$CAM_TARGET_ATTACKER !== null) {
            return self::$CAM_TARGET_ATTACKER;
        }

        return self::$CAM_TARGET_ATTACKER = new self('CAM_TARGET_ATTACKER', self::CAM_TARGET_ATTACKER_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_ATTACKER_EDGE()
    {
        if (self::$CAM_TARGET_ATTACKER_EDGE !== null) {
            return self::$CAM_TARGET_ATTACKER_EDGE;
        }

        return self::$CAM_TARGET_ATTACKER_EDGE = new self('CAM_TARGET_ATTACKER_EDGE', self::CAM_TARGET_ATTACKER_EDGE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_ATTACKER_GROUND()
    {
        if (self::$CAM_TARGET_ATTACKER_GROUND !== null) {
            return self::$CAM_TARGET_ATTACKER_GROUND;
        }

        return self::$CAM_TARGET_ATTACKER_GROUND = new self('CAM_TARGET_ATTACKER_GROUND', self::CAM_TARGET_ATTACKER_GROUND_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_DEFENDER()
    {
        if (self::$CAM_TARGET_DEFENDER !== null) {
            return self::$CAM_TARGET_DEFENDER;
        }

        return self::$CAM_TARGET_DEFENDER = new self('CAM_TARGET_DEFENDER', self::CAM_TARGET_DEFENDER_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_DEFENDER_EDGE()
    {
        if (self::$CAM_TARGET_DEFENDER_EDGE !== null) {
            return self::$CAM_TARGET_DEFENDER_EDGE;
        }

        return self::$CAM_TARGET_DEFENDER_EDGE = new self('CAM_TARGET_DEFENDER_EDGE', self::CAM_TARGET_DEFENDER_EDGE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_DEFENDER_GROUND()
    {
        if (self::$CAM_TARGET_DEFENDER_GROUND !== null) {
            return self::$CAM_TARGET_DEFENDER_GROUND;
        }

        return self::$CAM_TARGET_DEFENDER_GROUND = new self('CAM_TARGET_DEFENDER_GROUND', self::CAM_TARGET_DEFENDER_GROUND_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_ATTACKER_DEFENDER()
    {
        if (self::$CAM_TARGET_ATTACKER_DEFENDER !== null) {
            return self::$CAM_TARGET_ATTACKER_DEFENDER;
        }

        return self::$CAM_TARGET_ATTACKER_DEFENDER = new self('CAM_TARGET_ATTACKER_DEFENDER', self::CAM_TARGET_ATTACKER_DEFENDER_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_ATTACKER_DEFENDER_EDGE()
    {
        if (self::$CAM_TARGET_ATTACKER_DEFENDER_EDGE !== null) {
            return self::$CAM_TARGET_ATTACKER_DEFENDER_EDGE;
        }

        return self::$CAM_TARGET_ATTACKER_DEFENDER_EDGE = new self('CAM_TARGET_ATTACKER_DEFENDER_EDGE', self::CAM_TARGET_ATTACKER_DEFENDER_EDGE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_DEFENDER_ATTACKER()
    {
        if (self::$CAM_TARGET_DEFENDER_ATTACKER !== null) {
            return self::$CAM_TARGET_DEFENDER_ATTACKER;
        }

        return self::$CAM_TARGET_DEFENDER_ATTACKER = new self('CAM_TARGET_DEFENDER_ATTACKER', self::CAM_TARGET_DEFENDER_ATTACKER_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_DEFENDER_ATTACKER_EDGE()
    {
        if (self::$CAM_TARGET_DEFENDER_ATTACKER_EDGE !== null) {
            return self::$CAM_TARGET_DEFENDER_ATTACKER_EDGE;
        }

        return self::$CAM_TARGET_DEFENDER_ATTACKER_EDGE = new self('CAM_TARGET_DEFENDER_ATTACKER_EDGE', self::CAM_TARGET_DEFENDER_ATTACKER_EDGE_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_ATTACKER_DEFENDER_MIRROR()
    {
        if (self::$CAM_TARGET_ATTACKER_DEFENDER_MIRROR !== null) {
            return self::$CAM_TARGET_ATTACKER_DEFENDER_MIRROR;
        }

        return self::$CAM_TARGET_ATTACKER_DEFENDER_MIRROR = new self('CAM_TARGET_ATTACKER_DEFENDER_MIRROR', self::CAM_TARGET_ATTACKER_DEFENDER_MIRROR_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_SHOULDER_ATTACKER_DEFENDER()
    {
        if (self::$CAM_TARGET_SHOULDER_ATTACKER_DEFENDER !== null) {
            return self::$CAM_TARGET_SHOULDER_ATTACKER_DEFENDER;
        }

        return self::$CAM_TARGET_SHOULDER_ATTACKER_DEFENDER = new self('CAM_TARGET_SHOULDER_ATTACKER_DEFENDER', self::CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR()
    {
        if (self::$CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR !== null) {
            return self::$CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR;
        }

        return self::$CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR = new self('CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR', self::CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR_VALUE);
    }

    /**
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function CAM_TARGET_ATTACKER_DEFENDER_WORLD()
    {
        if (self::$CAM_TARGET_ATTACKER_DEFENDER_WORLD !== null) {
            return self::$CAM_TARGET_ATTACKER_DEFENDER_WORLD;
        }

        return self::$CAM_TARGET_ATTACKER_DEFENDER_WORLD = new self('CAM_TARGET_ATTACKER_DEFENDER_WORLD', self::CAM_TARGET_ATTACKER_DEFENDER_WORLD_VALUE);
    }

    /**
     * @param int $value
     * @return \POGOProtos\Enums\CameraTarget
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::CAM_TARGET_ATTACKER();
            case 1: return self::CAM_TARGET_ATTACKER_EDGE();
            case 2: return self::CAM_TARGET_ATTACKER_GROUND();
            case 3: return self::CAM_TARGET_DEFENDER();
            case 4: return self::CAM_TARGET_DEFENDER_EDGE();
            case 5: return self::CAM_TARGET_DEFENDER_GROUND();
            case 6: return self::CAM_TARGET_ATTACKER_DEFENDER();
            case 7: return self::CAM_TARGET_ATTACKER_DEFENDER_EDGE();
            case 8: return self::CAM_TARGET_DEFENDER_ATTACKER();
            case 9: return self::CAM_TARGET_DEFENDER_ATTACKER_EDGE();
            case 11: return self::CAM_TARGET_ATTACKER_DEFENDER_MIRROR();
            case 12: return self::CAM_TARGET_SHOULDER_ATTACKER_DEFENDER();
            case 13: return self::CAM_TARGET_SHOULDER_ATTACKER_DEFENDER_MIRROR();
            case 14: return self::CAM_TARGET_ATTACKER_DEFENDER_WORLD();
            default: return null;
        }
    }


}

