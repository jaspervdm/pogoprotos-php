<?php
// Generated by https://github.com/jaspervdm/protoc-gen-php
namespace POGOProtos\Networking\Responses {

  use Protobuf;
  use ProtobufIO;
  use ProtobufEnum;
  use ProtobufMessage;

  // enum POGOProtos.Networking.Responses.UseItemGymResponse.Result
  abstract class UseItemGymResponse_Result extends ProtobufEnum {
    const UNSET = 0;
    const SUCCESS = 1;
    const ERROR_CANNOT_USE = 2;
    const ERROR_NOT_IN_RANGE = 3;

    public static $_values = array(
      0 => "UNSET",
      1 => "SUCCESS",
      2 => "ERROR_CANNOT_USE",
      3 => "ERROR_NOT_IN_RANGE",
    );

    public static function isValid($value) {
      return array_key_exists($value, self::$_values);
    }

    public static function toString($value) {
      checkArgument(is_int($value), 'value must be a integer');
      if (array_key_exists($value, self::$_values))
        return self::$_values[$value];
      return 'UNKNOWN';
    }
  }

  // message POGOProtos.Networking.Responses.UseItemGymResponse
  final class UseItemGymResponse extends ProtobufMessage {

    private $_unknown;
    private $result = \POGOProtos\Networking\Responses\UseItemGymResponse_Result::UNSET; // optional .POGOProtos.Networking.Responses.UseItemGymResponse.Result result = 1
    private $updatedGp = 0; // optional int64 updated_gp = 2

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional .POGOProtos.Networking.Responses.UseItemGymResponse.Result result = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            $this->result = $tmp;

            break;
          case 2: // optional int64 updated_gp = 2
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->updatedGp = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->result !== \POGOProtos\Networking\Responses\UseItemGymResponse_Result::UNSET) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->result);
      }
      if ($this->updatedGp !== 0) {
        fwrite($fp, "\x10", 1);
        Protobuf::write_varint($fp, $this->updatedGp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->result !== \POGOProtos\Networking\Responses\UseItemGymResponse_Result::UNSET) {
        $size += 1 + Protobuf::size_varint($this->result);
      }
      if ($this->updatedGp !== 0) {
        $size += 1 + Protobuf::size_varint($this->updatedGp);
      }
      return $size;
    }

    public function clearResult() { $this->result = \POGOProtos\Networking\Responses\UseItemGymResponse_Result::UNSET; }
    public function getResult() { return $this->result;}
    public function setResult($value) { $this->result = $value; }

    public function clearUpdatedGp() { $this->updatedGp = 0; }
    public function getUpdatedGp() { return $this->updatedGp;}
    public function setUpdatedGp($value) { $this->updatedGp = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('result', $this->result, \POGOProtos\Networking\Responses\UseItemGymResponse_Result::UNSET)
           . Protobuf::toString('updated_gp', $this->updatedGp, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Networking.Responses.UseItemGymResponse)
  }

}