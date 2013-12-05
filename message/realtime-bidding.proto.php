<?php


/**
 * BidRequest_Hyperlocal_Point
 *
 * @message BidRequest.Hyperlocal.Point
 *
 * -*- magic methods -*-
 *
 * @method string getLatitude()
 * @method void setLatitude()
 * @method string getLongitude()
 * @method void setLongitude()
 *
 */
class BidRequest_Hyperlocal_Point extends ProtocolBuffersMessage
{
  /** @var string $latitude tag:1  optional ProtocolBuffers::TYPE_FLOAT */
  protected $latitude;

  /** @var string $longitude tag:2  optional ProtocolBuffers::TYPE_FLOAT */
  protected $longitude;


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
        "type"     => ProtocolBuffers::TYPE_FLOAT,
        "name"     => "latitude",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_FLOAT,
        "name"     => "longitude",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * BidRequest_Hyperlocal
 *
 * @message BidRequest.Hyperlocal
 *
 * -*- magic methods -*-
 *
 * @method array getCorners()
 * @method void appendCorners()
 *
 */
class BidRequest_Hyperlocal extends ProtocolBuffersMessage
{
  /** @var array $corners tag:1  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $corners = array();


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
        "name"     => "corners",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_Hyperlocal_Point",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}


/**
 * BidRequest_HyperlocalSet
 *
 * @message BidRequest.HyperlocalSet
 *
 * -*- magic methods -*-
 *
 * @method array getHyperlocal()
 * @method void appendHyperlocal()
 * @method BidRequest_Hyperlocal_Point getCenterPoint()
 * @method void setCenterPoint()
 *
 */
class BidRequest_HyperlocalSet extends ProtocolBuffersMessage
{
  /** @var array $hyperlocal tag:1  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $hyperlocal = array();

  /** @var BidRequest_Hyperlocal_Point $center_point tag:2  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $center_point;


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
        "name"     => "hyperlocal",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_Hyperlocal",
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "center_point",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_Hyperlocal_Point",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}


/**
 * BidRequest_UserList
 *
 * @message BidRequest.UserList
 *
 * -*- magic methods -*-
 *
 * @method string getId()
 * @method void setId()
 * @method string getAgeSeconds()
 * @method void setAgeSeconds()
 *
 */
class BidRequest_UserList extends ProtocolBuffersMessage
{
  /** @var string $id tag:1  optional ProtocolBuffers::TYPE_INT64 */
  protected $id;

  /** @var string $age_seconds tag:2  optional ProtocolBuffers::TYPE_INT32 */
  protected $age_seconds;


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
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "age_seconds",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}


/**
 * BidRequest_Vertical
 *
 * @message BidRequest.Vertical
 *
 * -*- magic methods -*-
 *
 * @method string getId()
 * @method void setId()
 * @method string getWeight()
 * @method void setWeight()
 *
 */
class BidRequest_Vertical extends ProtocolBuffersMessage
{
  /** @var string $id tag:1  required ProtocolBuffers::TYPE_INT32 */
  protected $id;

  /** @var string $weight tag:2  required ProtocolBuffers::TYPE_FLOAT */
  protected $weight;


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
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "id",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_FLOAT,
        "name"     => "weight",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}


/**
 * BidRequest_KeyValue
 *
 * @message BidRequest.KeyValue
 *
 * -*- magic methods -*-
 *
 * @method string getKey()
 * @method void setKey()
 * @method string getValue()
 * @method void setValue()
 *
 */
class BidRequest_KeyValue extends ProtocolBuffersMessage
{
  /** @var string $key tag:1  optional ProtocolBuffers::TYPE_STRING */
  protected $key;

  /** @var string $value tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $value;


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
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "key",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "value",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}



/**
 * BidRequest_Mobile_DeviceOsVersion
 *
 * @message BidRequest.Mobile.DeviceOsVersion
 *
 * -*- magic methods -*-
 *
 * @method string getOsVersionMajor()
 * @method void setOsVersionMajor()
 * @method string getOsVersionMinor()
 * @method void setOsVersionMinor()
 * @method string getOsVersionMicro()
 * @method void setOsVersionMicro()
 *
 */
class BidRequest_Mobile_DeviceOsVersion extends ProtocolBuffersMessage
{
  /** @var string $os_version_major tag:1  optional ProtocolBuffers::TYPE_INT32 */
  protected $os_version_major;

  /** @var string $os_version_minor tag:2  optional ProtocolBuffers::TYPE_INT32 */
  protected $os_version_minor;

  /** @var string $os_version_micro tag:3  optional ProtocolBuffers::TYPE_INT32 */
  protected $os_version_micro;


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
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "os_version_major",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "os_version_minor",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "os_version_micro",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * BidRequest_Mobile_MobileDeviceType
 *
 * @enum BidRequest.Mobile.MobileDeviceType
 */
class BidRequest_Mobile_MobileDeviceType
{
  const UNKNOWN = 0;
  const HIGHEND_PHONE = 1;
  const TABLET = 2;
}

/**
 * BidRequest_Mobile_ScreenOrientation
 *
 * @enum BidRequest.Mobile.ScreenOrientation
 */
class BidRequest_Mobile_ScreenOrientation
{
  const SCREEN_ORIENTATION_UNKNOWN = 0;
  const SCREEN_ORIENTATION_PORTRAIT = 1;
  const SCREEN_ORIENTATION_LANDSCAPE = 2;
}

/**
 * BidRequest_Mobile
 *
 * @message BidRequest.Mobile
 *
 * -*- magic methods -*-
 *
 * @method string getPlatform()
 * @method void setPlatform()
 * @method string getBrand()
 * @method void setBrand()
 * @method string getModel()
 * @method void setModel()
 * @method BidRequest_Mobile_DeviceOsVersion getOsVersion()
 * @method void setOsVersion()
 * @method string getCarrierId()
 * @method void setCarrierId()
 * @method bool getIsApp()
 * @method void setIsApp()
 * @method string getAppId()
 * @method void setAppId()
 * @method int getMobileDeviceType()
 * @method void setMobileDeviceType()
 * @method string getScreenWidth()
 * @method void setScreenWidth()
 * @method string getScreenHeight()
 * @method void setScreenHeight()
 * @method string getScreenOrientation()
 * @method void setScreenOrientation()
 * @method bool getIsInterstitialRequest()
 * @method void setIsInterstitialRequest()
 * @method array getAppCategoryIds()
 * @method void appendAppCategoryIds()
 * @method bool getIsMobileWebOptimized()
 * @method void setIsMobileWebOptimized()
 * @method string getDevicePixelRatioMillis()
 * @method void setDevicePixelRatioMillis()
 * @method string getEncryptedIdfa()
 * @method void setEncryptedIdfa()
 * @method string getEncryptedHashedIdfa()
 * @method void setEncryptedHashedIdfa()
 * @method string getDEPRECATEDAppName()
 * @method void setDEPRECATEDAppName()
 * @method string getDEPRECATEDCompanyName()
 * @method void setDEPRECATEDCompanyName()
 * @method string getDEPRECATEDCarrierName()
 * @method void setDEPRECATEDCarrierName()
 * @method string getDEPRECATEDCarrierCountry()
 * @method void setDEPRECATEDCarrierCountry()
 *
 */
class BidRequest_Mobile extends ProtocolBuffersMessage
{
  /** @var string $platform tag:3  optional ProtocolBuffers::TYPE_STRING */
  protected $platform;

  /** @var string $brand tag:12  optional ProtocolBuffers::TYPE_STRING */
  protected $brand;

  /** @var string $model tag:13  optional ProtocolBuffers::TYPE_STRING */
  protected $model;

  /** @var BidRequest_Mobile_DeviceOsVersion $os_version tag:14  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $os_version;

  /** @var string $carrier_id tag:18  optional ProtocolBuffers::TYPE_INT64 */
  protected $carrier_id;

  /** @var bool $is_app tag:7  optional ProtocolBuffers::TYPE_BOOL */
  protected $is_app;

  /** @var string $app_id tag:6  optional ProtocolBuffers::TYPE_STRING */
  protected $app_id;

  /** @var int $mobile_device_type tag:8  optional ProtocolBuffers::TYPE_ENUM */
  protected $mobile_device_type;

  /** @var string $screen_width tag:15  optional ProtocolBuffers::TYPE_INT32 */
  protected $screen_width;

  /** @var string $screen_height tag:16  optional ProtocolBuffers::TYPE_INT32 */
  protected $screen_height;

  /** @var string $screen_orientation tag:9  optional ProtocolBuffers::TYPE_INT32 */
  protected $screen_orientation;

  /** @var bool $is_interstitial_request tag:10  optional ProtocolBuffers::TYPE_BOOL */
  protected $is_interstitial_request;

  /** @var array $app_category_ids tag:11  optional ProtocolBuffers::TYPE_INT32 */
  protected $app_category_ids = array();

  /** @var bool $is_mobile_web_optimized tag:17  optional ProtocolBuffers::TYPE_BOOL */
  protected $is_mobile_web_optimized;

  /** @var string $device_pixel_ratio_millis tag:19  optional ProtocolBuffers::TYPE_INT32 */
  protected $device_pixel_ratio_millis;

  /** @var string $encrypted_idfa tag:20  optional ProtocolBuffers::TYPE_BYTES */
  protected $encrypted_idfa;

  /** @var string $encrypted_hashed_idfa tag:21  optional ProtocolBuffers::TYPE_BYTES */
  protected $encrypted_hashed_idfa;

  /** @var string $DEPRECATED_app_name tag:1  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_app_name;

  /** @var string $DEPRECATED_company_name tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_company_name;

  /** @var string $DEPRECATED_carrier_name tag:4  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_carrier_name;

  /** @var string $DEPRECATED_carrier_country tag:5  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_carrier_country;


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
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "platform",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(12, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "brand",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(13, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "model",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(14, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "os_version",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_Mobile_DeviceOsVersion",
      )));
      $desc->addField(18, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "carrier_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(7, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_app",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "app_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(8, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "mobile_device_type",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => BidRequest_Mobile_MobileDeviceType::UNKNOWN,
      )));
      $desc->addField(15, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "screen_width",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(16, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "screen_height",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(9, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "screen_orientation",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(10, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_interstitial_request",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(11, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "app_category_ids",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(17, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_mobile_web_optimized",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(19, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "device_pixel_ratio_millis",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 1000,
      )));
      $desc->addField(20, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "encrypted_idfa",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(21, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "encrypted_hashed_idfa",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_app_name",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_company_name",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_carrier_name",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_carrier_country",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}



/**
 * BidRequest_Video_CompanionSlot_CreativeFormat
 *
 * @enum BidRequest.Video.CompanionSlot.CreativeFormat
 */
class BidRequest_Video_CompanionSlot_CreativeFormat
{
  const IMAGE_CREATIVE = 0;
  const FLASH_CREATIVE = 1;
  const HTML_CREATIVE = 2;
}

/**
 * BidRequest_Video_CompanionSlot
 *
 * @message BidRequest.Video.CompanionSlot
 *
 * -*- magic methods -*-
 *
 * @method array getHeight()
 * @method void appendHeight()
 * @method array getWidth()
 * @method void appendWidth()
 * @method array getCreativeFormat()
 * @method void appendCreativeFormat()
 *
 */
class BidRequest_Video_CompanionSlot extends ProtocolBuffersMessage
{
  /** @var array $height tag:1  optional ProtocolBuffers::TYPE_INT32 */
  protected $height = array();

  /** @var array $width tag:2  optional ProtocolBuffers::TYPE_INT32 */
  protected $width = array();

  /** @var array $creative_format tag:3  optional ProtocolBuffers::TYPE_ENUM */
  protected $creative_format = array();


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
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "height",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "width",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "creative_format",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => BidRequest_Video_CompanionSlot_CreativeFormat::IMAGE_CREATIVE,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * BidRequest_Video_InventoryType
 *
 * @enum BidRequest.Video.InventoryType
 */
class BidRequest_Video_InventoryType
{
  const WEB_VIDEO = 0;
  const GAMES = 1;
  const MOBILE_INTERSTITIAL = 2;
}

/**
 * BidRequest_Video_SkippableBidRequestType
 *
 * @enum BidRequest.Video.SkippableBidRequestType
 */
class BidRequest_Video_SkippableBidRequestType
{
  const ALLOW_SKIPPABLE = 0;
  const REQUIRE_SKIPPABLE = 1;
  const BLOCK_SKIPPABLE = 2;
}

/**
 * BidRequest_Video_VideoFormat
 *
 * @enum BidRequest.Video.VideoFormat
 */
class BidRequest_Video_VideoFormat
{
  const VIDEO_FLASH = 0;
  const VIDEO_HTML5 = 1;
}

/**
 * BidRequest_Video
 *
 * @message BidRequest.Video
 *
 * -*- magic methods -*-
 *
 * @method string getDescriptionUrl()
 * @method void setDescriptionUrl()
 * @method bool getIsEmbeddedOffsite()
 * @method void setIsEmbeddedOffsite()
 * @method string getVideoadStartDelay()
 * @method void setVideoadStartDelay()
 * @method string getMaxAdDuration()
 * @method void setMaxAdDuration()
 * @method string getMinAdDuration()
 * @method void setMinAdDuration()
 * @method string getInventoryType()
 * @method void setInventoryType()
 * @method int getVideoAdSkippable()
 * @method void setVideoAdSkippable()
 * @method string getSkippableMaxAdDuration()
 * @method void setSkippableMaxAdDuration()
 * @method array getAllowedVideoFormats()
 * @method void appendAllowedVideoFormats()
 * @method array getCompanionSlot()
 * @method void appendCompanionSlot()
 *
 */
class BidRequest_Video extends ProtocolBuffersMessage
{
  /** @var string $description_url tag:10  optional ProtocolBuffers::TYPE_STRING */
  protected $description_url;

  /** @var bool $is_embedded_offsite tag:11  optional ProtocolBuffers::TYPE_BOOL */
  protected $is_embedded_offsite;

  /** @var string $videoad_start_delay tag:1  optional ProtocolBuffers::TYPE_INT32 */
  protected $videoad_start_delay;

  /** @var string $max_ad_duration tag:2  optional ProtocolBuffers::TYPE_INT32 */
  protected $max_ad_duration;

  /** @var string $min_ad_duration tag:8  optional ProtocolBuffers::TYPE_INT32 */
  protected $min_ad_duration;

  /** @var string $inventory_type tag:3  optional ProtocolBuffers::TYPE_INT32 */
  protected $inventory_type;

  /** @var int $video_ad_skippable tag:4  optional ProtocolBuffers::TYPE_ENUM */
  protected $video_ad_skippable;

  /** @var string $skippable_max_ad_duration tag:5  optional ProtocolBuffers::TYPE_INT32 */
  protected $skippable_max_ad_duration;

  /** @var array $allowed_video_formats tag:6  optional ProtocolBuffers::TYPE_ENUM */
  protected $allowed_video_formats = array();

  /** @var array $companion_slot tag:7  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $companion_slot = array();


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
      $desc->addField(10, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "description_url",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(11, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_embedded_offsite",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "videoad_start_delay",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "max_ad_duration",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(8, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "min_ad_duration",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "inventory_type",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "video_ad_skippable",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => BidRequest_Video_SkippableBidRequestType::ALLOW_SKIPPABLE,
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "skippable_max_ad_duration",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "allowed_video_formats",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => BidRequest_Video_VideoFormat::VIDEO_FLASH,
      )));
      $desc->addField(7, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "companion_slot",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_Video_CompanionSlot",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}




/**
 * BidRequest_AdSlot_MatchingAdData_DirectDeal
 *
 * @message BidRequest.AdSlot.MatchingAdData.DirectDeal
 *
 * -*- magic methods -*-
 *
 * @method string getDirectDealId()
 * @method void setDirectDealId()
 * @method string getFixedCpmMicros()
 * @method void setFixedCpmMicros()
 *
 */
class BidRequest_AdSlot_MatchingAdData_DirectDeal extends ProtocolBuffersMessage
{
  /** @var string $direct_deal_id tag:1  optional ProtocolBuffers::TYPE_INT64 */
  protected $direct_deal_id;

  /** @var string $fixed_cpm_micros tag:2  optional ProtocolBuffers::TYPE_INT64 */
  protected $fixed_cpm_micros;


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
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "direct_deal_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "fixed_cpm_micros",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * BidRequest_AdSlot_MatchingAdData
 *
 * @message BidRequest.AdSlot.MatchingAdData
 *
 * -*- magic methods -*-
 *
 * @method string getAdgroupId()
 * @method void setAdgroupId()
 * @method string getMinimumCpmMicros()
 * @method void setMinimumCpmMicros()
 * @method array getDirectDeal()
 * @method void appendDirectDeal()
 * @method string getDEPRECATEDCampaignId()
 * @method void setDEPRECATEDCampaignId()
 * @method bool getDEPRECATEDPerBuyerMinimumCpm()
 * @method void setDEPRECATEDPerBuyerMinimumCpm()
 * @method string getDEPRECATEDFixedCpmMicros()
 * @method void setDEPRECATEDFixedCpmMicros()
 *
 */
class BidRequest_AdSlot_MatchingAdData extends ProtocolBuffersMessage
{
  /** @var string $adgroup_id tag:2  optional ProtocolBuffers::TYPE_INT64 */
  protected $adgroup_id;

  /** @var string $minimum_cpm_micros tag:5  optional ProtocolBuffers::TYPE_INT64 */
  protected $minimum_cpm_micros;

  /** @var array $direct_deal tag:6  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $direct_deal = array();

  /** @var string $DEPRECATED_campaign_id tag:1  optional ProtocolBuffers::TYPE_INT64 */
  protected $DEPRECATED_campaign_id;

  /** @var bool $DEPRECATED_per_buyer_minimum_cpm tag:3  optional ProtocolBuffers::TYPE_BOOL */
  protected $DEPRECATED_per_buyer_minimum_cpm;

  /** @var string $DEPRECATED_fixed_cpm_micros tag:4  optional ProtocolBuffers::TYPE_INT64 */
  protected $DEPRECATED_fixed_cpm_micros;


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
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "adgroup_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "minimum_cpm_micros",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "direct_deal",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_AdSlot_MatchingAdData_DirectDeal",
      )));
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "DEPRECATED_campaign_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "DEPRECATED_per_buyer_minimum_cpm",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "DEPRECATED_fixed_cpm_micros",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * BidRequest_AdSlot_SlotVisibility
 *
 * @enum BidRequest.AdSlot.SlotVisibility
 */
class BidRequest_AdSlot_SlotVisibility
{
  const NO_DETECTION = 0;
  const ABOVE_THE_FOLD = 1;
  const BELOW_THE_FOLD = 2;
}

/**
 * BidRequest_AdSlot
 *
 * @message BidRequest.AdSlot
 *
 * -*- magic methods -*-
 *
 * @method string getId()
 * @method void setId()
 * @method string getAdBlockKey()
 * @method void setAdBlockKey()
 * @method array getTargetableChannel()
 * @method void appendTargetableChannel()
 * @method array getWidth()
 * @method void appendWidth()
 * @method array getHeight()
 * @method void appendHeight()
 * @method array getExcludedAttribute()
 * @method void appendExcludedAttribute()
 * @method array getAllowedVendorType()
 * @method void appendAllowedVendorType()
 * @method array getExcludedSensitiveCategory()
 * @method void appendExcludedSensitiveCategory()
 * @method array getAllowedRestrictedCategory()
 * @method void appendAllowedRestrictedCategory()
 * @method array getExcludedProductCategory()
 * @method void appendExcludedProductCategory()
 * @method array getMatchingAdData()
 * @method void appendMatchingAdData()
 * @method string getPublisherSettingsListId()
 * @method void setPublisherSettingsListId()
 * @method int getSlotVisibility()
 * @method void setSlotVisibility()
 * @method array getDEPRECATEDAllowedAttribute()
 * @method void appendDEPRECATEDAllowedAttribute()
 * @method array getDEPRECATEDPublisherSettingsListId()
 * @method void appendDEPRECATEDPublisherSettingsListId()
 * @method array getDEPRECATEDExcludedClickThroughUrl()
 * @method void appendDEPRECATEDExcludedClickThroughUrl()
 *
 */
class BidRequest_AdSlot extends ProtocolBuffersMessage
{
  /** @var string $id tag:1  required ProtocolBuffers::TYPE_INT32 */
  protected $id;

  /** @var string $ad_block_key tag:14  optional ProtocolBuffers::TYPE_UINT64 */
  protected $ad_block_key;

  /** @var array $targetable_channel tag:10  optional ProtocolBuffers::TYPE_STRING */
  protected $targetable_channel = array();

  /** @var array $width tag:2  optional ProtocolBuffers::TYPE_INT32 */
  protected $width = array();

  /** @var array $height tag:3  optional ProtocolBuffers::TYPE_INT32 */
  protected $height = array();

  /** @var array $excluded_attribute tag:4  optional ProtocolBuffers::TYPE_INT32 */
  protected $excluded_attribute = array();

  /** @var array $allowed_vendor_type tag:6  optional ProtocolBuffers::TYPE_INT32 */
  protected $allowed_vendor_type = array();

  /** @var array $excluded_sensitive_category tag:7  optional ProtocolBuffers::TYPE_INT32 */
  protected $excluded_sensitive_category = array();

  /** @var array $allowed_restricted_category tag:16  optional ProtocolBuffers::TYPE_INT32 */
  protected $allowed_restricted_category = array();

  /** @var array $excluded_product_category tag:13  optional ProtocolBuffers::TYPE_INT32 */
  protected $excluded_product_category = array();

  /** @var array $matching_ad_data tag:9  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $matching_ad_data = array();

  /** @var string $publisher_settings_list_id tag:15  optional ProtocolBuffers::TYPE_FIXED64 */
  protected $publisher_settings_list_id;

  /** @var int $slot_visibility tag:12  optional ProtocolBuffers::TYPE_ENUM */
  protected $slot_visibility;

  /** @var array $DEPRECATED_allowed_attribute tag:5  optional ProtocolBuffers::TYPE_INT32 */
  protected $DEPRECATED_allowed_attribute = array();

  /** @var array $DEPRECATED_publisher_settings_list_id tag:11  optional ProtocolBuffers::TYPE_BYTES */
  protected $DEPRECATED_publisher_settings_list_id = array();

  /** @var array $DEPRECATED_excluded_click_through_url tag:8  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_excluded_click_through_url = array();


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
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "id",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(14, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_UINT64,
        "name"     => "ad_block_key",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(10, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "targetable_channel",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "width",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "height",
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
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "allowed_vendor_type",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(7, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "excluded_sensitive_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(16, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "allowed_restricted_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(13, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "excluded_product_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(9, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "matching_ad_data",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_AdSlot_MatchingAdData",
      )));
      $desc->addField(15, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_FIXED64,
        "name"     => "publisher_settings_list_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(12, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "slot_visibility",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => BidRequest_AdSlot_SlotVisibility::NO_DETECTION,
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "DEPRECATED_allowed_attribute",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(11, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "DEPRECATED_publisher_settings_list_id",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(8, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_excluded_click_through_url",
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


/**
 * BidRequest_BidResponseFeedback
 *
 * @message BidRequest.BidResponseFeedback
 *
 * -*- magic methods -*-
 *
 * @method string getRequestId()
 * @method void setRequestId()
 * @method string getCreativeIndex()
 * @method void setCreativeIndex()
 * @method string getCreativeStatusCode()
 * @method void setCreativeStatusCode()
 * @method string getCpmMicros()
 * @method void setCpmMicros()
 *
 */
class BidRequest_BidResponseFeedback extends ProtocolBuffersMessage
{
  /** @var string $request_id tag:1  optional ProtocolBuffers::TYPE_BYTES */
  protected $request_id;

  /** @var string $creative_index tag:2  optional ProtocolBuffers::TYPE_INT32 */
  protected $creative_index;

  /** @var string $creative_status_code tag:3  optional ProtocolBuffers::TYPE_INT32 */
  protected $creative_status_code;

  /** @var string $cpm_micros tag:4  optional ProtocolBuffers::TYPE_INT64 */
  protected $cpm_micros;


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
        "name"     => "request_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "creative_index",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "creative_status_code",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "cpm_micros",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}


/**
 * BidRequest_MatchingNetwork
 *
 * @message BidRequest.MatchingNetwork
 *
 * -*- magic methods -*-
 *
 * @method string getDEPRECATEDNetworkId()
 * @method void setDEPRECATEDNetworkId()
 * @method string getDEPRECATEDGoogleUserId()
 * @method void setDEPRECATEDGoogleUserId()
 *
 */
class BidRequest_MatchingNetwork extends ProtocolBuffersMessage
{
  /** @var string $DEPRECATED_network_id tag:1  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_network_id;

  /** @var string $DEPRECATED_google_user_id tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_google_user_id;


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
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_network_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_google_user_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * BidRequest
 *
 * @message BidRequest
 *
 * -*- magic methods -*-
 *
 * @method string getId()
 * @method void setId()
 * @method string getIp()
 * @method void setIp()
 * @method string getGoogleUserId()
 * @method void setGoogleUserId()
 * @method string getCookieVersion()
 * @method void setCookieVersion()
 * @method string getCookieAgeSeconds()
 * @method void setCookieAgeSeconds()
 * @method string getHostedMatchData()
 * @method void setHostedMatchData()
 * @method string getUserAgent()
 * @method void setUserAgent()
 * @method string getGeoCriteriaId()
 * @method void setGeoCriteriaId()
 * @method string getPostalCode()
 * @method void setPostalCode()
 * @method string getPostalCodePrefix()
 * @method void setPostalCodePrefix()
 * @method string getEncryptedHyperlocalSet()
 * @method void setEncryptedHyperlocalSet()
 * @method string getTimezoneOffset()
 * @method void setTimezoneOffset()
 * @method array getUserVertical()
 * @method void appendUserVertical()
 * @method array getUserList()
 * @method void appendUserList()
 * @method string getSellerNetworkId()
 * @method void setSellerNetworkId()
 * @method string getUrl()
 * @method void setUrl()
 * @method string getAnonymousId()
 * @method void setAnonymousId()
 * @method array getDetectedLanguage()
 * @method void appendDetectedLanguage()
 * @method array getDetectedVertical()
 * @method void appendDetectedVertical()
 * @method string getVerticalDictionaryVersion()
 * @method void setVerticalDictionaryVersion()
 * @method array getDetectedContentLabel()
 * @method void appendDetectedContentLabel()
 * @method array getSiteListId()
 * @method void appendSiteListId()
 * @method array getKeyValue()
 * @method void appendKeyValue()
 * @method BidRequest_Mobile getMobile()
 * @method void setMobile()
 * @method BidRequest_Video getVideo()
 * @method void setVideo()
 * @method string getPublisherSettingsListId()
 * @method void setPublisherSettingsListId()
 * @method array getAdslot()
 * @method void appendAdslot()
 * @method array getBidResponseFeedback()
 * @method void appendBidResponseFeedback()
 * @method bool getIsTest()
 * @method void setIsTest()
 * @method bool getIsPing()
 * @method void setIsPing()
 * @method bool getIsPredictedToBeIgnored()
 * @method void setIsPredictedToBeIgnored()
 * @method string getDEPRECATEDProtocolVersion()
 * @method void setDEPRECATEDProtocolVersion()
 * @method string getDEPRECATEDClickTrackingUrl()
 * @method void setDEPRECATEDClickTrackingUrl()
 * @method string getDEPRECATEDCookie()
 * @method void setDEPRECATEDCookie()
 * @method string getDEPRECATEDCountry()
 * @method void setDEPRECATEDCountry()
 * @method string getDEPRECATEDRegion()
 * @method void setDEPRECATEDRegion()
 * @method string getDEPRECATEDCity()
 * @method void setDEPRECATEDCity()
 * @method string getDEPRECATEDMetro()
 * @method void setDEPRECATEDMetro()
 * @method string getDEPRECATEDHashedCookie()
 * @method void setDEPRECATEDHashedCookie()
 * @method array getDEPRECATEDExcludedClickThroughUrl()
 * @method void appendDEPRECATEDExcludedClickThroughUrl()
 * @method string getDEPRECATEDSellerNetwork()
 * @method void setDEPRECATEDSellerNetwork()
 * @method string getDEPRECATEDPublisherSettingsListId()
 * @method void setDEPRECATEDPublisherSettingsListId()
 * @method array getDEPRECATEDMatchingNetwork()
 * @method void appendDEPRECATEDMatchingNetwork()
 * @method bool getDEPRECATEDExperimentalDeadline()
 * @method void setDEPRECATEDExperimentalDeadline()
 *
 */
class BidRequest extends ProtocolBuffersMessage
{
  /** @var string $id tag:2  required ProtocolBuffers::TYPE_BYTES */
  protected $id;

  /** @var string $ip tag:4  optional ProtocolBuffers::TYPE_BYTES */
  protected $ip;

  /** @var string $google_user_id tag:21  optional ProtocolBuffers::TYPE_STRING */
  protected $google_user_id;

  /** @var string $cookie_version tag:20  optional ProtocolBuffers::TYPE_UINT32 */
  protected $cookie_version;

  /** @var string $cookie_age_seconds tag:31  optional ProtocolBuffers::TYPE_INT32 */
  protected $cookie_age_seconds;

  /** @var string $hosted_match_data tag:37  optional ProtocolBuffers::TYPE_BYTES */
  protected $hosted_match_data;

  /** @var string $user_agent tag:6  optional ProtocolBuffers::TYPE_STRING */
  protected $user_agent;

  /** @var string $geo_criteria_id tag:39  optional ProtocolBuffers::TYPE_INT32 */
  protected $geo_criteria_id;

  /** @var string $postal_code tag:33  optional ProtocolBuffers::TYPE_STRING */
  protected $postal_code;

  /** @var string $postal_code_prefix tag:34  optional ProtocolBuffers::TYPE_STRING */
  protected $postal_code_prefix;

  /** @var string $encrypted_hyperlocal_set tag:40  optional ProtocolBuffers::TYPE_BYTES */
  protected $encrypted_hyperlocal_set;

  /** @var string $timezone_offset tag:25  optional ProtocolBuffers::TYPE_INT32 */
  protected $timezone_offset;

  /** @var array $user_vertical tag:30  optional ProtocolBuffers::TYPE_INT32 */
  protected $user_vertical = array();

  /** @var array $user_list tag:32  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $user_list = array();

  /** @var string $seller_network_id tag:41  optional ProtocolBuffers::TYPE_INT32 */
  protected $seller_network_id;

  /** @var string $url tag:11  optional ProtocolBuffers::TYPE_STRING */
  protected $url;

  /** @var string $anonymous_id tag:19  optional ProtocolBuffers::TYPE_STRING */
  protected $anonymous_id;

  /** @var array $detected_language tag:12  optional ProtocolBuffers::TYPE_STRING */
  protected $detected_language = array();

  /** @var array $detected_vertical tag:13  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $detected_vertical = array();

  /** @var string $vertical_dictionary_version tag:24  optional ProtocolBuffers::TYPE_INT32 */
  protected $vertical_dictionary_version;

  /** @var array $detected_content_label tag:26  optional ProtocolBuffers::TYPE_INT32 */
  protected $detected_content_label = array();

  /** @var array $site_list_id tag:36  optional ProtocolBuffers::TYPE_INT32 */
  protected $site_list_id = array();

  /** @var array $key_value tag:38  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $key_value = array();

  /** @var BidRequest_Mobile $mobile tag:28  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $mobile;

  /** @var BidRequest_Video $video tag:29  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $video;

  /** @var string $publisher_settings_list_id tag:42  optional ProtocolBuffers::TYPE_FIXED64 */
  protected $publisher_settings_list_id;

  /** @var array $adslot tag:14  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $adslot = array();

  /** @var array $bid_response_feedback tag:44  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $bid_response_feedback = array();

  /** @var bool $is_test tag:15  optional ProtocolBuffers::TYPE_BOOL */
  protected $is_test;

  /** @var bool $is_ping tag:17  optional ProtocolBuffers::TYPE_BOOL */
  protected $is_ping;

  /** @var bool $is_predicted_to_be_ignored tag:45  optional ProtocolBuffers::TYPE_BOOL */
  protected $is_predicted_to_be_ignored;

  /** @var string $DEPRECATED_protocol_version tag:1  optional ProtocolBuffers::TYPE_INT32 */
  protected $DEPRECATED_protocol_version;

  /** @var string $DEPRECATED_click_tracking_url tag:3  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_click_tracking_url;

  /** @var string $DEPRECATED_cookie tag:5  optional ProtocolBuffers::TYPE_UINT64 */
  protected $DEPRECATED_cookie;

  /** @var string $DEPRECATED_country tag:7  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_country;

  /** @var string $DEPRECATED_region tag:8  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_region;

  /** @var string $DEPRECATED_city tag:9  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_city;

  /** @var string $DEPRECATED_metro tag:10  optional ProtocolBuffers::TYPE_INT32 */
  protected $DEPRECATED_metro;

  /** @var string $DEPRECATED_hashed_cookie tag:16  optional ProtocolBuffers::TYPE_BYTES */
  protected $DEPRECATED_hashed_cookie;

  /** @var array $DEPRECATED_excluded_click_through_url tag:18  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_excluded_click_through_url = array();

  /** @var string $DEPRECATED_seller_network tag:22  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_seller_network;

  /** @var string $DEPRECATED_publisher_settings_list_id tag:23  optional ProtocolBuffers::TYPE_BYTES */
  protected $DEPRECATED_publisher_settings_list_id;

  /** @var array $DEPRECATED_matching_network tag:27  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $DEPRECATED_matching_network = array();

  /** @var bool $DEPRECATED_experimental_deadline tag:35  optional ProtocolBuffers::TYPE_BOOL */
  protected $DEPRECATED_experimental_deadline;


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
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "id",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "ip",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(21, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "google_user_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(20, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_UINT32,
        "name"     => "cookie_version",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(31, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "cookie_age_seconds",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(37, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "hosted_match_data",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "user_agent",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(39, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "geo_criteria_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(33, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "postal_code",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(34, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "postal_code_prefix",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(40, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "encrypted_hyperlocal_set",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(25, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "timezone_offset",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(30, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "user_vertical",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(32, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "user_list",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_UserList",
      )));
      $desc->addField(41, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "seller_network_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(11, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "url",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(19, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "anonymous_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(12, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "detected_language",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(13, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "detected_vertical",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_Vertical",
      )));
      $desc->addField(24, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "vertical_dictionary_version",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(26, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "detected_content_label",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => true,
        "default"  => 0,
      )));
      $desc->addField(36, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "site_list_id",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(38, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "key_value",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_KeyValue",
      )));
      $desc->addField(28, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "mobile",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_Mobile",
      )));
      $desc->addField(29, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "video",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_Video",
      )));
      $desc->addField(42, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_FIXED64,
        "name"     => "publisher_settings_list_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(14, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "adslot",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_AdSlot",
      )));
      $desc->addField(44, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "bid_response_feedback",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_BidResponseFeedback",
      )));
      $desc->addField(15, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_test",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(17, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_ping",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(45, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_predicted_to_be_ignored",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "DEPRECATED_protocol_version",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_click_tracking_url",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_UINT64,
        "name"     => "DEPRECATED_cookie",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(7, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_country",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(8, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_region",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(9, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_city",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(10, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "DEPRECATED_metro",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(16, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "DEPRECATED_hashed_cookie",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(18, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_excluded_click_through_url",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(22, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_seller_network",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(23, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BYTES,
        "name"     => "DEPRECATED_publisher_settings_list_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(27, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "DEPRECATED_matching_network",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidRequest_MatchingNetwork",
      )));
      $desc->addField(35, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "DEPRECATED_experimental_deadline",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}



/**
 * BidResponse_Ad_TemplateParameter
 *
 * @message BidResponse.Ad.TemplateParameter
 *
 * -*- magic methods -*-
 *
 * @method string getParameterValue()
 * @method void setParameterValue()
 * @method string getBlankAdParameterValue()
 * @method void setBlankAdParameterValue()
 * @method string getBuyerCreativeId()
 * @method void setBuyerCreativeId()
 * @method string getClickThroughUrl()
 * @method void setClickThroughUrl()
 * @method string getLeft()
 * @method void setLeft()
 * @method string getRight()
 * @method void setRight()
 * @method string getTop()
 * @method void setTop()
 * @method string getBottom()
 * @method void setBottom()
 * @method string getBackupIndex()
 * @method void setBackupIndex()
 *
 */
class BidResponse_Ad_TemplateParameter extends ProtocolBuffersMessage
{
  /** @var string $parameter_value tag:1  optional ProtocolBuffers::TYPE_STRING */
  protected $parameter_value;

  /** @var string $blank_ad_parameter_value tag:8  optional ProtocolBuffers::TYPE_STRING */
  protected $blank_ad_parameter_value;

  /** @var string $buyer_creative_id tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $buyer_creative_id;

  /** @var string $click_through_url tag:3  optional ProtocolBuffers::TYPE_STRING */
  protected $click_through_url;

  /** @var string $left tag:4  optional ProtocolBuffers::TYPE_INT32 */
  protected $left;

  /** @var string $right tag:5  optional ProtocolBuffers::TYPE_INT32 */
  protected $right;

  /** @var string $top tag:6  optional ProtocolBuffers::TYPE_INT32 */
  protected $top;

  /** @var string $bottom tag:7  optional ProtocolBuffers::TYPE_INT32 */
  protected $bottom;

  /** @var string $backup_index tag:9  optional ProtocolBuffers::TYPE_INT32 */
  protected $backup_index;


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
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "parameter_value",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(8, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "blank_ad_parameter_value",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "buyer_creative_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "click_through_url",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "left",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "right",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "top",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(7, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "bottom",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(9, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "backup_index",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}


/**
 * BidResponse_Ad_AdSlot
 *
 * @message BidResponse.Ad.AdSlot
 *
 * -*- magic methods -*-
 *
 * @method string getId()
 * @method void setId()
 * @method string getMaxCpmMicros()
 * @method void setMaxCpmMicros()
 * @method string getMinCpmMicros()
 * @method void setMinCpmMicros()
 * @method string getAdgroupId()
 * @method void setAdgroupId()
 * @method string getDealId()
 * @method void setDealId()
 *
 */
class BidResponse_Ad_AdSlot extends ProtocolBuffersMessage
{
  /** @var string $id tag:1  required ProtocolBuffers::TYPE_INT32 */
  protected $id;

  /** @var string $max_cpm_micros tag:2  required ProtocolBuffers::TYPE_INT64 */
  protected $max_cpm_micros;

  /** @var string $min_cpm_micros tag:3  optional ProtocolBuffers::TYPE_INT64 */
  protected $min_cpm_micros;

  /** @var string $adgroup_id tag:4  optional ProtocolBuffers::TYPE_INT64 */
  protected $adgroup_id;

  /** @var string $deal_id tag:5  optional ProtocolBuffers::TYPE_INT64 */
  protected $deal_id;


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
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "id",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "max_cpm_micros",
        "required" => true,
        "optional" => false,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "min_cpm_micros",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "adgroup_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "deal_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * BidResponse_Ad
 *
 * @message BidResponse.Ad
 *
 * -*- magic methods -*-
 *
 * @method string getBuyerCreativeId()
 * @method void setBuyerCreativeId()
 * @method string getHtmlSnippet()
 * @method void setHtmlSnippet()
 * @method string getVideoUrl()
 * @method void setVideoUrl()
 * @method string getSnippetTemplate()
 * @method void setSnippetTemplate()
 * @method array getTemplateParameter()
 * @method void appendTemplateParameter()
 * @method array getClickThroughUrl()
 * @method void appendClickThroughUrl()
 * @method array getVendorType()
 * @method void appendVendorType()
 * @method array getAttribute()
 * @method void appendAttribute()
 * @method array getCategory()
 * @method void appendCategory()
 * @method array getRestrictedCategory()
 * @method void appendRestrictedCategory()
 * @method array getAdvertiserName()
 * @method void appendAdvertiserName()
 * @method string getWidth()
 * @method void setWidth()
 * @method string getHeight()
 * @method void setHeight()
 * @method string getAgencyId()
 * @method void setAgencyId()
 * @method array getAdslot()
 * @method void appendAdslot()
 * @method string getDEPRECATEDCreativeId()
 * @method void setDEPRECATEDCreativeId()
 * @method string getDEPRECATEDClickThroughUrl()
 * @method void setDEPRECATEDClickThroughUrl()
 *
 */
class BidResponse_Ad extends ProtocolBuffersMessage
{
  /** @var string $buyer_creative_id tag:10  optional ProtocolBuffers::TYPE_STRING */
  protected $buyer_creative_id;

  /** @var string $html_snippet tag:1  optional ProtocolBuffers::TYPE_STRING */
  protected $html_snippet;

  /** @var string $video_url tag:9  optional ProtocolBuffers::TYPE_STRING */
  protected $video_url;

  /** @var string $snippet_template tag:12  optional ProtocolBuffers::TYPE_STRING */
  protected $snippet_template;

  /** @var array $template_parameter tag:13  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $template_parameter = array();

  /** @var array $click_through_url tag:4  optional ProtocolBuffers::TYPE_STRING */
  protected $click_through_url = array();

  /** @var array $vendor_type tag:5  optional ProtocolBuffers::TYPE_INT32 */
  protected $vendor_type = array();

  /** @var array $attribute tag:6  optional ProtocolBuffers::TYPE_INT32 */
  protected $attribute = array();

  /** @var array $category tag:7  optional ProtocolBuffers::TYPE_INT32 */
  protected $category = array();

  /** @var array $restricted_category tag:17  optional ProtocolBuffers::TYPE_INT32 */
  protected $restricted_category = array();

  /** @var array $advertiser_name tag:11  optional ProtocolBuffers::TYPE_STRING */
  protected $advertiser_name = array();

  /** @var string $width tag:14  optional ProtocolBuffers::TYPE_INT32 */
  protected $width;

  /** @var string $height tag:15  optional ProtocolBuffers::TYPE_INT32 */
  protected $height;

  /** @var string $agency_id tag:16  optional ProtocolBuffers::TYPE_INT64 */
  protected $agency_id;

  /** @var array $adslot tag:3  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $adslot = array();

  /** @var string $DEPRECATED_creative_id tag:8  optional ProtocolBuffers::TYPE_INT64 */
  protected $DEPRECATED_creative_id;

  /** @var string $DEPRECATED_click_through_url tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $DEPRECATED_click_through_url;


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
      $desc->addField(10, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "buyer_creative_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "html_snippet",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(9, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "video_url",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(12, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "snippet_template",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(13, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "template_parameter",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidResponse_Ad_TemplateParameter",
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "click_through_url",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "vendor_type",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "attribute",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(7, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(17, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "restricted_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(11, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "advertiser_name",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(14, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "width",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(15, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "height",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(16, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "agency_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "adslot",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidResponse_Ad_AdSlot",
      )));
      $desc->addField(8, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "DEPRECATED_creative_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "DEPRECATED_click_through_url",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * BidResponse
 *
 * @message BidResponse
 *
 * -*- magic methods -*-
 *
 * @method array getAd()
 * @method void appendAd()
 * @method string getDebugString()
 * @method void setDebugString()
 * @method string getProcessingTimeMs()
 * @method void setProcessingTimeMs()
 * @method string getDEPRECATEDProtocolVersion()
 * @method void setDEPRECATEDProtocolVersion()
 *
 */
class BidResponse extends ProtocolBuffersMessage
{
  /** @var array $ad tag:2  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $ad = array();

  /** @var string $debug_string tag:5  optional ProtocolBuffers::TYPE_STRING */
  protected $debug_string;

  /** @var string $processing_time_ms tag:4  optional ProtocolBuffers::TYPE_INT32 */
  protected $processing_time_ms;

  /** @var string $DEPRECATED_protocol_version tag:1  optional ProtocolBuffers::TYPE_INT32 */
  protected $DEPRECATED_protocol_version;


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
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "ad",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "BidResponse_Ad",
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "debug_string",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "processing_time_ms",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(1, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "DEPRECATED_protocol_version",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

