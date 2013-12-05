<?php
/**
 * PublisherSettingsList
 *
 * @message PublisherSettingsList
 *
 * -*- magic methods -*-
 *
 * @method array getPublisherSettings()
 * @method void appendPublisherSettings()
 *
 */
class PublisherSettingsList extends ProtocolBuffersMessage
{
  /** @var array $publisher_settings tag:1  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $publisher_settings = array();


  /**
   * get descriptor for protocol buffers
   * 
   * @return ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;

    if (!isset($descriptor)) {
      $desc = new ProtocolBuffersDescriptorBuilder();
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "publisher_settings",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "PublisherSettings",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * PublisherSettings
 *
 * @message PublisherSettings
 *
 * -*- magic methods -*-
 *
 * @method string getDEPRECATEDId()
 * @method void setDEPRECATEDId()
 * @method string getId()
 * @method void setId()
 * @method array getExcludedUrl()
 * @method void appendExcludedUrl()
 * @method array getDEPRECATEDExcludedSensitiveCategory()
 * @method void appendDEPRECATEDExcludedSensitiveCategory()
 * @method array getExcludedSensitiveCategory()
 * @method void appendExcludedSensitiveCategory()
 * @method array getExcludedProductCategory()
 * @method void appendExcludedProductCategory()
 * @method array getExcludedAttribute()
 * @method void appendExcludedAttribute()
 * @method array getAllowedVendorType()
 * @method void appendAllowedVendorType()
 * @method array getDEPRECATEDExcludedVertical()
 * @method void appendDEPRECATEDExcludedVertical()
 * @method bool getCanSendIp()
 * @method void setCanSendIp()
 * @method array getAllowedLanguage()
 * @method void appendAllowedLanguage()
 *
 */
class PublisherSettings extends ProtocolBuffersMessage
{
  /** @var string $DEPRECATED_id tag:1  required ProtocolBuffers::TYPE_BYTES */
  protected $DEPRECATED_id;

  /** @var string $id tag:10  optional ProtocolBuffers::TYPE_FIXED64 */
  protected $id;

  /** @var array $excluded_url tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $excluded_url = array();

  /** @var array $DEPRECATED_excluded_sensitive_category tag:3  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_excluded_sensitive_category = array();

  /** @var array $excluded_sensitive_category tag:9  optional ProtocolBuffers::TYPE_INT32 */
  protected $excluded_sensitive_category = array();

  /** @var array $excluded_product_category tag:8  optional ProtocolBuffers::TYPE_INT32 */
  protected $excluded_product_category = array();

  /** @var array $excluded_attribute tag:4  optional ProtocolBuffers::TYPE_INT32 */
  protected $excluded_attribute = array();

  /** @var array $allowed_vendor_type tag:5  optional ProtocolBuffers::TYPE_INT32 */
  protected $allowed_vendor_type = array();

  /** @var array $DEPRECATED_excluded_vertical tag:6  optional ProtocolBuffers::TYPE_INT32 */
  protected $DEPRECATED_excluded_vertical = array();

  /** @var bool $can_send_ip tag:7  optional ProtocolBuffers::TYPE_BOOL */
  protected $can_send_ip;

  /** @var array $allowed_language tag:11  optional ProtocolBuffers::TYPE_STRING */
  protected $allowed_language = array();


  /**
   * get descriptor for protocol buffers
   * 
   * @return ProtocolBuffersDescriptor
   */
  public static function getDescriptor()
  {
    static $descriptor;

    if (!isset($descriptor)) {
      $desc = new ProtocolBuffersDescriptorBuilder();
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "DEPRECATED_id",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(10, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_FIXED64,
        "name"     => "id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "excluded_url",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_excluded_sensitive_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(9, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "excluded_sensitive_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(8, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "excluded_product_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "excluded_attribute",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "allowed_vendor_type",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "DEPRECATED_excluded_vertical",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(7, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "can_send_ip",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => true,
      )));
      $desc->addField(11, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "allowed_language",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

