<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: POGOProtos/Networking/Envelopes/Signature.proto

namespace POGOProtos\Networking\Envelopes;

use Google\Protobuf\Internal\DescriptorPool;
use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

class Signature extends \Google\Protobuf\Internal\Message
{
    private $field1;
    private $timestamp_since_start = 0;
    private $field3 = '';
    private $location_fix;
    private $gps_info;
    private $field6;
    private $sensor_info;
    private $device_info = null;
    private $activity_status = null;
    private $location_hash1 = 0;
    private $field11 = false;
    private $field12 = false;
    private $field13 = 0;
    private $field14 = 0;
    private $field15 = '';
    private $field16 = 0;
    private $field17 = '';
    private $field18 = '';
    private $field19 = false;
    private $location_hash2 = 0;
    private $field21 = false;
    private $session_hash = '';
    private $timestamp = 0;
    private $request_hash;
    private $unknown25 = 0;

    public function getField1()
    {
        return $this->field1;
    }

    public function setField1(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Networking\Envelopes\UnknownMessage::class);
        $this->field1 = $var;
    }

    public function getTimestampSinceStart()
    {
        return $this->timestamp_since_start;
    }

    public function setTimestampSinceStart($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp_since_start = $var;
    }

    public function getField3()
    {
        return $this->field3;
    }

    public function setField3($var)
    {
        GPBUtil::checkString($var, True);
        $this->field3 = $var;
    }

    public function getLocationFix()
    {
        return $this->location_fix;
    }

    public function setLocationFix(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Networking\Envelopes\Signature_LocationFix::class);
        $this->location_fix = $var;
    }

    public function getGpsInfo()
    {
        return $this->gps_info;
    }

    public function setGpsInfo(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Networking\Envelopes\Signature_AndroidGpsInfo::class);
        $this->gps_info = $var;
    }

    public function getField6()
    {
        return $this->field6;
    }

    public function setField6(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Networking\Envelopes\UnknownMessage::class);
        $this->field6 = $var;
    }

    public function getSensorInfo()
    {
        return $this->sensor_info;
    }

    public function setSensorInfo(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::MESSAGE, \POGOProtos\Networking\Envelopes\Signature_SensorInfo::class);
        $this->sensor_info = $var;
    }

    public function getDeviceInfo()
    {
        return $this->device_info;
    }

    public function setDeviceInfo(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Envelopes\Signature_DeviceInfo::class);
        $this->device_info = $var;
    }

    public function getActivityStatus()
    {
        return $this->activity_status;
    }

    public function setActivityStatus(&$var)
    {
        GPBUtil::checkMessage($var, \POGOProtos\Networking\Envelopes\Signature_ActivityStatus::class);
        $this->activity_status = $var;
    }

    public function getLocationHash1()
    {
        return $this->location_hash1;
    }

    public function setLocationHash1($var)
    {
        GPBUtil::checkUint32($var);
        $this->location_hash1 = $var;
    }

    public function getField11()
    {
        return $this->field11;
    }

    public function setField11($var)
    {
        GPBUtil::checkBool($var);
        $this->field11 = $var;
    }

    public function getField12()
    {
        return $this->field12;
    }

    public function setField12($var)
    {
        GPBUtil::checkBool($var);
        $this->field12 = $var;
    }

    public function getField13()
    {
        return $this->field13;
    }

    public function setField13($var)
    {
        GPBUtil::checkInt32($var);
        $this->field13 = $var;
    }

    public function getField14()
    {
        return $this->field14;
    }

    public function setField14($var)
    {
        GPBUtil::checkInt32($var);
        $this->field14 = $var;
    }

    public function getField15()
    {
        return $this->field15;
    }

    public function setField15($var)
    {
        GPBUtil::checkString($var, True);
        $this->field15 = $var;
    }

    public function getField16()
    {
        return $this->field16;
    }

    public function setField16($var)
    {
        GPBUtil::checkInt32($var);
        $this->field16 = $var;
    }

    public function getField17()
    {
        return $this->field17;
    }

    public function setField17($var)
    {
        GPBUtil::checkString($var, True);
        $this->field17 = $var;
    }

    public function getField18()
    {
        return $this->field18;
    }

    public function setField18($var)
    {
        GPBUtil::checkString($var, True);
        $this->field18 = $var;
    }

    public function getField19()
    {
        return $this->field19;
    }

    public function setField19($var)
    {
        GPBUtil::checkBool($var);
        $this->field19 = $var;
    }

    public function getLocationHash2()
    {
        return $this->location_hash2;
    }

    public function setLocationHash2($var)
    {
        GPBUtil::checkUint32($var);
        $this->location_hash2 = $var;
    }

    public function getField21()
    {
        return $this->field21;
    }

    public function setField21($var)
    {
        GPBUtil::checkBool($var);
        $this->field21 = $var;
    }

    public function getSessionHash()
    {
        return $this->session_hash;
    }

    public function setSessionHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->session_hash = $var;
    }

    public function getTimestamp()
    {
        return $this->timestamp;
    }

    public function setTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp = $var;
    }

    public function getRequestHash()
    {
        return $this->request_hash;
    }

    public function setRequestHash(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::UINT64);
        $this->request_hash = $var;
    }

    public function getUnknown25()
    {
        return $this->unknown25;
    }

    public function setUnknown25($var)
    {
        GPBUtil::checkInt64($var);
        $this->unknown25 = $var;
    }

}

class Signature_LocationFix extends \Google\Protobuf\Internal\Message
{
    private $provider = '';
    private $timestamp_snapshot = 0;
    private $altitude = 0.0;
    private $latitude = 0.0;
    private $longitude = 0.0;
    private $speed = 0.0;
    private $course = 0.0;
    private $horizontal_accuracy = 0.0;
    private $vertical_accuracy = 0.0;
    private $provider_status = 0;
    private $floor = 0;
    private $location_type = 0;

    public function getProvider()
    {
        return $this->provider;
    }

    public function setProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider = $var;
    }

    public function getTimestampSnapshot()
    {
        return $this->timestamp_snapshot;
    }

    public function setTimestampSnapshot($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp_snapshot = $var;
    }

    public function getAltitude()
    {
        return $this->altitude;
    }

    public function setAltitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->altitude = $var;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->latitude = $var;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($var)
    {
        GPBUtil::checkFloat($var);
        $this->longitude = $var;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($var)
    {
        GPBUtil::checkFloat($var);
        $this->speed = $var;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($var)
    {
        GPBUtil::checkFloat($var);
        $this->course = $var;
    }

    public function getHorizontalAccuracy()
    {
        return $this->horizontal_accuracy;
    }

    public function setHorizontalAccuracy($var)
    {
        GPBUtil::checkFloat($var);
        $this->horizontal_accuracy = $var;
    }

    public function getVerticalAccuracy()
    {
        return $this->vertical_accuracy;
    }

    public function setVerticalAccuracy($var)
    {
        GPBUtil::checkFloat($var);
        $this->vertical_accuracy = $var;
    }

    public function getProviderStatus()
    {
        return $this->provider_status;
    }

    public function setProviderStatus($var)
    {
        GPBUtil::checkUint64($var);
        $this->provider_status = $var;
    }

    public function getFloor()
    {
        return $this->floor;
    }

    public function setFloor($var)
    {
        GPBUtil::checkUint32($var);
        $this->floor = $var;
    }

    public function getLocationType()
    {
        return $this->location_type;
    }

    public function setLocationType($var)
    {
        GPBUtil::checkUint64($var);
        $this->location_type = $var;
    }

}

class Signature_AndroidGpsInfo extends \Google\Protobuf\Internal\Message
{
    private $time_to_fix = 0;
    private $satellites_prn;
    private $azimuth;
    private $elevation;
    private $snr;
    private $has_almanac;
    private $has_ephemeris;
    private $used_in_fix;

    public function getTimeToFix()
    {
        return $this->time_to_fix;
    }

    public function setTimeToFix($var)
    {
        GPBUtil::checkUint64($var);
        $this->time_to_fix = $var;
    }

    public function getSatellitesPrn()
    {
        return $this->satellites_prn;
    }

    public function setSatellitesPrn(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::INT32);
        $this->satellites_prn = $var;
    }

    public function getAzimuth()
    {
        return $this->azimuth;
    }

    public function setAzimuth(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::FLOAT);
        $this->azimuth = $var;
    }

    public function getElevation()
    {
        return $this->elevation;
    }

    public function setElevation(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::FLOAT);
        $this->elevation = $var;
    }

    public function getSnr()
    {
        return $this->snr;
    }

    public function setSnr(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::FLOAT);
        $this->snr = $var;
    }

    public function getHasAlmanac()
    {
        return $this->has_almanac;
    }

    public function setHasAlmanac(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::BOOL);
        $this->has_almanac = $var;
    }

    public function getHasEphemeris()
    {
        return $this->has_ephemeris;
    }

    public function setHasEphemeris(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::BOOL);
        $this->has_ephemeris = $var;
    }

    public function getUsedInFix()
    {
        return $this->used_in_fix;
    }

    public function setUsedInFix(&$var)
    {
        GPBUtil::checkRepeatedField($var, GPBType::BOOL);
        $this->used_in_fix = $var;
    }

}

class Signature_SensorInfo extends \Google\Protobuf\Internal\Message
{
    private $timestamp_snapshot = 0;
    private $linear_acceleration_x = 0.0;
    private $linear_acceleration_y = 0.0;
    private $linear_acceleration_z = 0.0;
    private $magnetic_field_x = 0.0;
    private $magnetic_field_y = 0.0;
    private $magnetic_field_z = 0.0;
    private $magnetic_field_accuracy = 0;
    private $attitude_pitch = 0.0;
    private $attitude_yaw = 0.0;
    private $attitude_roll = 0.0;
    private $rotation_rate_x = 0.0;
    private $rotation_rate_y = 0.0;
    private $rotation_rate_z = 0.0;
    private $gravity_x = 0.0;
    private $gravity_y = 0.0;
    private $gravity_z = 0.0;
    private $status = 0;

    public function getTimestampSnapshot()
    {
        return $this->timestamp_snapshot;
    }

    public function setTimestampSnapshot($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp_snapshot = $var;
    }

    public function getLinearAccelerationX()
    {
        return $this->linear_acceleration_x;
    }

    public function setLinearAccelerationX($var)
    {
        GPBUtil::checkDouble($var);
        $this->linear_acceleration_x = $var;
    }

    public function getLinearAccelerationY()
    {
        return $this->linear_acceleration_y;
    }

    public function setLinearAccelerationY($var)
    {
        GPBUtil::checkDouble($var);
        $this->linear_acceleration_y = $var;
    }

    public function getLinearAccelerationZ()
    {
        return $this->linear_acceleration_z;
    }

    public function setLinearAccelerationZ($var)
    {
        GPBUtil::checkDouble($var);
        $this->linear_acceleration_z = $var;
    }

    public function getMagneticFieldX()
    {
        return $this->magnetic_field_x;
    }

    public function setMagneticFieldX($var)
    {
        GPBUtil::checkDouble($var);
        $this->magnetic_field_x = $var;
    }

    public function getMagneticFieldY()
    {
        return $this->magnetic_field_y;
    }

    public function setMagneticFieldY($var)
    {
        GPBUtil::checkDouble($var);
        $this->magnetic_field_y = $var;
    }

    public function getMagneticFieldZ()
    {
        return $this->magnetic_field_z;
    }

    public function setMagneticFieldZ($var)
    {
        GPBUtil::checkDouble($var);
        $this->magnetic_field_z = $var;
    }

    public function getMagneticFieldAccuracy()
    {
        return $this->magnetic_field_accuracy;
    }

    public function setMagneticFieldAccuracy($var)
    {
        GPBUtil::checkInt32($var);
        $this->magnetic_field_accuracy = $var;
    }

    public function getAttitudePitch()
    {
        return $this->attitude_pitch;
    }

    public function setAttitudePitch($var)
    {
        GPBUtil::checkDouble($var);
        $this->attitude_pitch = $var;
    }

    public function getAttitudeYaw()
    {
        return $this->attitude_yaw;
    }

    public function setAttitudeYaw($var)
    {
        GPBUtil::checkDouble($var);
        $this->attitude_yaw = $var;
    }

    public function getAttitudeRoll()
    {
        return $this->attitude_roll;
    }

    public function setAttitudeRoll($var)
    {
        GPBUtil::checkDouble($var);
        $this->attitude_roll = $var;
    }

    public function getRotationRateX()
    {
        return $this->rotation_rate_x;
    }

    public function setRotationRateX($var)
    {
        GPBUtil::checkDouble($var);
        $this->rotation_rate_x = $var;
    }

    public function getRotationRateY()
    {
        return $this->rotation_rate_y;
    }

    public function setRotationRateY($var)
    {
        GPBUtil::checkDouble($var);
        $this->rotation_rate_y = $var;
    }

    public function getRotationRateZ()
    {
        return $this->rotation_rate_z;
    }

    public function setRotationRateZ($var)
    {
        GPBUtil::checkDouble($var);
        $this->rotation_rate_z = $var;
    }

    public function getGravityX()
    {
        return $this->gravity_x;
    }

    public function setGravityX($var)
    {
        GPBUtil::checkDouble($var);
        $this->gravity_x = $var;
    }

    public function getGravityY()
    {
        return $this->gravity_y;
    }

    public function setGravityY($var)
    {
        GPBUtil::checkDouble($var);
        $this->gravity_y = $var;
    }

    public function getGravityZ()
    {
        return $this->gravity_z;
    }

    public function setGravityZ($var)
    {
        GPBUtil::checkDouble($var);
        $this->gravity_z = $var;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($var)
    {
        GPBUtil::checkInt32($var);
        $this->status = $var;
    }

}

class Signature_DeviceInfo extends \Google\Protobuf\Internal\Message
{
    private $device_id = '';
    private $android_board_name = '';
    private $android_bootloader = '';
    private $device_brand = '';
    private $device_model = '';
    private $device_model_identifier = '';
    private $device_model_boot = '';
    private $hardware_manufacturer = '';
    private $hardware_model = '';
    private $firmware_brand = '';
    private $firmware_tags = '';
    private $firmware_type = '';
    private $firmware_fingerprint = '';

    public function getDeviceId()
    {
        return $this->device_id;
    }

    public function setDeviceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_id = $var;
    }

    public function getAndroidBoardName()
    {
        return $this->android_board_name;
    }

    public function setAndroidBoardName($var)
    {
        GPBUtil::checkString($var, True);
        $this->android_board_name = $var;
    }

    public function getAndroidBootloader()
    {
        return $this->android_bootloader;
    }

    public function setAndroidBootloader($var)
    {
        GPBUtil::checkString($var, True);
        $this->android_bootloader = $var;
    }

    public function getDeviceBrand()
    {
        return $this->device_brand;
    }

    public function setDeviceBrand($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_brand = $var;
    }

    public function getDeviceModel()
    {
        return $this->device_model;
    }

    public function setDeviceModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_model = $var;
    }

    public function getDeviceModelIdentifier()
    {
        return $this->device_model_identifier;
    }

    public function setDeviceModelIdentifier($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_model_identifier = $var;
    }

    public function getDeviceModelBoot()
    {
        return $this->device_model_boot;
    }

    public function setDeviceModelBoot($var)
    {
        GPBUtil::checkString($var, True);
        $this->device_model_boot = $var;
    }

    public function getHardwareManufacturer()
    {
        return $this->hardware_manufacturer;
    }

    public function setHardwareManufacturer($var)
    {
        GPBUtil::checkString($var, True);
        $this->hardware_manufacturer = $var;
    }

    public function getHardwareModel()
    {
        return $this->hardware_model;
    }

    public function setHardwareModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->hardware_model = $var;
    }

    public function getFirmwareBrand()
    {
        return $this->firmware_brand;
    }

    public function setFirmwareBrand($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_brand = $var;
    }

    public function getFirmwareTags()
    {
        return $this->firmware_tags;
    }

    public function setFirmwareTags($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_tags = $var;
    }

    public function getFirmwareType()
    {
        return $this->firmware_type;
    }

    public function setFirmwareType($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_type = $var;
    }

    public function getFirmwareFingerprint()
    {
        return $this->firmware_fingerprint;
    }

    public function setFirmwareFingerprint($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_fingerprint = $var;
    }

}

class Signature_ActivityStatus extends \Google\Protobuf\Internal\Message
{
    private $start_time_ms = 0;
    private $unknown_status = false;
    private $walking = false;
    private $running = false;
    private $stationary = false;
    private $automotive = false;
    private $tilting = false;
    private $cycling = false;
    private $status = '';

    public function getStartTimeMs()
    {
        return $this->start_time_ms;
    }

    public function setStartTimeMs($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_time_ms = $var;
    }

    public function getUnknownStatus()
    {
        return $this->unknown_status;
    }

    public function setUnknownStatus($var)
    {
        GPBUtil::checkBool($var);
        $this->unknown_status = $var;
    }

    public function getWalking()
    {
        return $this->walking;
    }

    public function setWalking($var)
    {
        GPBUtil::checkBool($var);
        $this->walking = $var;
    }

    public function getRunning()
    {
        return $this->running;
    }

    public function setRunning($var)
    {
        GPBUtil::checkBool($var);
        $this->running = $var;
    }

    public function getStationary()
    {
        return $this->stationary;
    }

    public function setStationary($var)
    {
        GPBUtil::checkBool($var);
        $this->stationary = $var;
    }

    public function getAutomotive()
    {
        return $this->automotive;
    }

    public function setAutomotive($var)
    {
        GPBUtil::checkBool($var);
        $this->automotive = $var;
    }

    public function getTilting()
    {
        return $this->tilting;
    }

    public function setTilting($var)
    {
        GPBUtil::checkBool($var);
        $this->tilting = $var;
    }

    public function getCycling()
    {
        return $this->cycling;
    }

    public function setCycling($var)
    {
        GPBUtil::checkBool($var);
        $this->cycling = $var;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($var)
    {
        GPBUtil::checkString($var, False);
        $this->status = $var;
    }

}

class UnknownMessage extends \Google\Protobuf\Internal\Message
{

}

$pool = DescriptorPool::getGeneratedPool();

$pool->internalAddGeneratedFile(hex2bin(
    "0a86130a2f504f474f50726f746f732f4e6574776f726b696e672f456e76" .
    "656c6f7065732f5369676e61747572652e70726f746f121f504f474f5072" .
    "6f746f732e4e6574776f726b696e672e456e76656c6f7065732297120a09" .
    "5369676e6174757265123f0a066669656c643118012003280b322f2e504f" .
    "474f50726f746f732e4e6574776f726b696e672e456e76656c6f7065732e" .
    "556e6b6e6f776e4d657373616765121d0a1574696d657374616d705f7369" .
    "6e63655f7374617274180220012804120e0a066669656c64331803200128" .
    "09124c0a0c6c6f636174696f6e5f66697818042003280b32362e504f474f" .
    "50726f746f732e4e6574776f726b696e672e456e76656c6f7065732e5369" .
    "676e61747572652e4c6f636174696f6e466978124b0a086770735f696e66" .
    "6f18052003280b32392e504f474f50726f746f732e4e6574776f726b696e" .
    "672e456e76656c6f7065732e5369676e61747572652e416e64726f696447" .
    "7073496e666f123f0a066669656c643618062003280b322f2e504f474f50" .
    "726f746f732e4e6574776f726b696e672e456e76656c6f7065732e556e6b" .
    "6e6f776e4d657373616765124a0a0b73656e736f725f696e666f18072003" .
    "280b32352e504f474f50726f746f732e4e6574776f726b696e672e456e76" .
    "656c6f7065732e5369676e61747572652e53656e736f72496e666f124a0a" .
    "0b6465766963655f696e666f18082001280b32352e504f474f50726f746f" .
    "732e4e6574776f726b696e672e456e76656c6f7065732e5369676e617475" .
    "72652e446576696365496e666f12520a0f61637469766974795f73746174" .
    "757318092001280b32392e504f474f50726f746f732e4e6574776f726b69" .
    "6e672e456e76656c6f7065732e5369676e61747572652e41637469766974" .
    "7953746174757312160a0e6c6f636174696f6e5f6861736831180a200128" .
    "0d120f0a076669656c643131180b20012808120f0a076669656c64313218" .
    "0c20012808120f0a076669656c643133180d20012805120f0a076669656c" .
    "643134180e20012805120f0a076669656c643135180f20012809120f0a07" .
    "6669656c643136181020012805120f0a076669656c643137181120012809" .
    "120f0a076669656c643138181220012809120f0a076669656c6431391813" .
    "2001280812160a0e6c6f636174696f6e5f686173683218142001280d120f" .
    "0a076669656c64323118152001280812140a0c73657373696f6e5f686173" .
    "6818162001280c12110a0974696d657374616d7018172001280412140a0c" .
    "726571756573745f6861736818182003280412110a09756e6b6e6f776e32" .
    "351819200128031a88020a0b4c6f636174696f6e46697812100a0870726f" .
    "7669646572180120012809121a0a1274696d657374616d705f736e617073" .
    "686f7418022001280412100a08616c74697475646518042001280212100a" .
    "086c61746974756465180d2001280212110a096c6f6e676974756465180e" .
    "20012802120d0a057370656564181220012802120e0a06636f7572736518" .
    "1420012802121b0a13686f72697a6f6e74616c5f61636375726163791815" .
    "2001280212190a11766572746963616c5f61636375726163791816200128" .
    "0212170a0f70726f76696465725f737461747573181a20012804120d0a05" .
    "666c6f6f72181b2001280d12150a0d6c6f636174696f6e5f74797065181c" .
    "200128041aaf010a0e416e64726f6964477073496e666f12130a0b74696d" .
    "655f746f5f66697818012001280412160a0e736174656c6c697465735f70" .
    "726e180220032805120f0a07617a696d75746818032003280212110a0965" .
    "6c65766174696f6e180420032802120b0a03736e7218052003280212130a" .
    "0b6861735f616c6d616e616318062003280812150a0d6861735f65706865" .
    "6d6572697318072003280812130a0b757365645f696e5f66697818082003" .
    "28081acd030a0a53656e736f72496e666f121a0a1274696d657374616d70" .
    "5f736e617073686f74180120012804121d0a156c696e6561725f61636365" .
    "6c65726174696f6e5f78180320012801121d0a156c696e6561725f616363" .
    "656c65726174696f6e5f79180420012801121d0a156c696e6561725f6163" .
    "63656c65726174696f6e5f7a18052001280112180a106d61676e65746963" .
    "5f6669656c645f7818062001280112180a106d61676e657469635f666965" .
    "6c645f7918072001280112180a106d61676e657469635f6669656c645f7a" .
    "180820012801121f0a176d61676e657469635f6669656c645f6163637572" .
    "61637918092001280512160a0e61747469747564655f7069746368180a20" .
    "01280112140a0c61747469747564655f796177180b2001280112150a0d61" .
    "747469747564655f726f6c6c180c2001280112170a0f726f746174696f6e" .
    "5f726174655f78180d2001280112170a0f726f746174696f6e5f72617465" .
    "5f79180e2001280112170a0f726f746174696f6e5f726174655f7a180f20" .
    "01280112110a09677261766974795f7818102001280112110a0967726176" .
    "6974795f7918112001280112110a09677261766974795f7a181220012801" .
    "120e0a067374617475731813200128051ada020a0a446576696365496e66" .
    "6f12110a096465766963655f6964180120012809121a0a12616e64726f69" .
    "645f626f6172645f6e616d65180220012809121a0a12616e64726f69645f" .
    "626f6f746c6f6164657218032001280912140a0c6465766963655f627261" .
    "6e6418042001280912140a0c6465766963655f6d6f64656c180520012809" .
    "121f0a176465766963655f6d6f64656c5f6964656e746966696572180620" .
    "01280912190a116465766963655f6d6f64656c5f626f6f74180720012809" .
    "121d0a1568617264776172655f6d616e7566616374757265721808200128" .
    "0912160a0e68617264776172655f6d6f64656c18092001280912160a0e66" .
    "69726d776172655f6272616e64180a2001280912150a0d6669726d776172" .
    "655f74616773180c2001280912150a0d6669726d776172655f7479706518" .
    "0d20012809121c0a146669726d776172655f66696e6765727072696e7418" .
    "0e200128091abb010a0e416374697669747953746174757312150a0d7374" .
    "6172745f74696d655f6d7318012001280412160a0e756e6b6e6f776e5f73" .
    "7461747573180220012808120f0a0777616c6b696e67180320012808120f" .
    "0a0772756e6e696e6718042001280812120a0a73746174696f6e61727918" .
    "052001280812120a0a6175746f6d6f74697665180620012808120f0a0774" .
    "696c74696e67180720012808120f0a076379636c696e6718082001280812" .
    "0e0a0673746174757318092001280c22100a0e556e6b6e6f776e4d657373" .
    "616765620670726f746f33"
));
