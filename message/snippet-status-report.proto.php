<?php

/**
 * SnippetStatusItem_Disapproval
 *
 * @message SnippetStatusItem.Disapproval
 *
 * -*- magic methods -*-
 *
 * @method int getReason()
 * @method void setReason()
 * @method array getDetail()
 * @method void appendDetail()
 *
 */
class SnippetStatusItem_Disapproval extends ProtocolBuffersMessage
{
  /** @var int $reason tag:1  optional ProtocolBuffers::TYPE_ENUM */
  protected $reason;

  /** @var array $detail tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $detail = array();


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
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "reason",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => SnippetStatusItem_DisapprovalReason::LENGTH_OF_IMAGE_ANIMATION,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "detail",
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
 * SnippetStatusItem_Correction
 *
 * @message SnippetStatusItem.Correction
 *
 * -*- magic methods -*-
 *
 * @method int getType()
 * @method void setType()
 * @method array getDetail()
 * @method void appendDetail()
 *
 */
class SnippetStatusItem_Correction extends ProtocolBuffersMessage
{
  /** @var int $type tag:1  optional ProtocolBuffers::TYPE_ENUM */
  protected $type;

  /** @var array $detail tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $detail = array();


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
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "type",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => SnippetStatusItem_CorrectionType::VENDOR_IDS,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "detail",
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
 * SnippetStatusItem_SnippetFiltering_FilteringItem
 *
 * @message SnippetStatusItem.SnippetFiltering.FilteringItem
 *
 * -*- magic methods -*-
 *
 * @method string getFilteringStatus()
 * @method void setFilteringStatus()
 * @method string getFilteringCount()
 * @method void setFilteringCount()
 *
 */
class SnippetStatusItem_SnippetFiltering_FilteringItem extends ProtocolBuffersMessage
{
  /** @var string $filtering_status tag:1  optional ProtocolBuffers::TYPE_INT32 */
  protected $filtering_status;

  /** @var string $filtering_count tag:2  optional ProtocolBuffers::TYPE_INT64 */
  protected $filtering_count;


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
        "name"     => "filtering_status",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "filtering_count",
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
 * SnippetStatusItem_SnippetFiltering
 *
 * @message SnippetStatusItem.SnippetFiltering
 *
 * -*- magic methods -*-
 *
 * @method string getDate()
 * @method void setDate()
 * @method array getItem()
 * @method void appendItem()
 *
 */
class SnippetStatusItem_SnippetFiltering extends ProtocolBuffersMessage
{
  /** @var string $date tag:1  optional ProtocolBuffers::TYPE_STRING */
  protected $date;

  /** @var array $item tag:2  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $item = array();


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
        "name"     => "date",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(2, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "item",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "SnippetStatusItem_SnippetFiltering_FilteringItem",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * SnippetStatusItem_Status
 *
 * @enum SnippetStatusItem.Status
 */
class SnippetStatusItem_Status
{
  const UNKNOWN = 0;
  const NOT_CHECKED = 1;
  const APPROVED = 2;
  const DISAPPROVED = 3;
}

/**
 * SnippetStatusItem_DisapprovalReason
 *
 * @enum SnippetStatusItem.DisapprovalReason
 */
class SnippetStatusItem_DisapprovalReason
{
  const LENGTH_OF_IMAGE_ANIMATION = 0;
  const BROKEN_URL = 1;
  const MEDIA_NOT_FUNCTIONAL = 2;
  const INVALID_FOURTH_PARTY_CALL = 3;
  const INCORRECT_REMARKETING_DECLARATION = 4;
  const LANDING_PAGE_ERROR = 5;
  const AD_SIZE_DOES_NOT_MATCH_AD_SLOT = 6;
  const NO_BORDER = 7;
  const FOURTH_PARTY_BROWSER_COOKIES = 8;
  const LSO_OBJECTS = 9;
  const BLANK_CREATIVE = 10;
  const DESTINATION_URLS_UNDECLARED = 11;
  const PROBLEM_WITH_CLICK_MACRO = 12;
  const INCORRECT_AD_TECHNOLOGY_DECLARATION = 13;
  const INCORRECT_DESTINATION_URL_DECLARATION = 14;
  const EXPANDABLE_INCORRECT_DIRECTION = 15;
  const EXPANDABLE_DIRECTION_NOT_SUPPORTED = 16;
  const EXPANDABLE_INVALID_VENDOR = 17;
  const EXPANDABLE_FUNCTIONALITY = 18;
  const VIDEO_INVALID_VENDOR = 19;
  const VIDEO_UNSUPPORTED_LENGTH = 20;
  const VIDEO_UNSUPPORTED_FORMAT = 21;
  const VIDEO_FUNCTIONALITY = 22;
  const LANDING_PAGE_DISABLED = 23;
  const MALWARE_SUSPECTED = 24;
  const ADULT_IMAGE_OR_VIDEO = 25;
  const INACCURATE_AD_TEXT = 26;
  const COUNTERFEIT_DESIGNER_GOODS = 27;
  const POP_UP = 28;
  const INVALID_RTB_PROTOCOL_USAGE = 29;
  const RAW_IP_ADDRESS_IN_SNIPPET = 30;
  const UNACCEPTABLE_CONTENT_SOFTWARE = 31;
  const UNAUTHORIZED_COOKIE_ON_GOOGLE_DOMAIN = 32;
  const UNDECLARED_FLASH_OBJECTS = 33;
  const INVALID_SSL_DECLARATION = 34;
  const DIRECT_DOWNLOAD_IN_AD = 35;
  const INVALID_CREATIVE_DOWNLOAD_SIZE = 36;
  const DESTINATION_URL_SITE_NOT_CRAWLABLE = 37;
  const BAD_URL_LEGAL_DISAPPROVAL = 38;
  const PHARMA_GAMBLING_ALCOHOL_NOT_ALLOWED = 39;
  const DYNAMIC_DNS_AT_DESTINATION_URL = 40;
}

/**
 * SnippetStatusItem_CorrectionType
 *
 * @enum SnippetStatusItem.CorrectionType
 */
class SnippetStatusItem_CorrectionType
{
  const VENDOR_IDS = 1;
  const SSL_ATTRIBUTE = 2;
  const FLASH_ATTRIBUTE = 3;
}

/**
 * SnippetStatusItem_Source
 *
 * @enum SnippetStatusItem.Source
 */
class SnippetStatusItem_Source
{
  const RTB = 0;
  const UI = 1;
}

/**
 * SnippetStatusItem
 *
 * @message SnippetStatusItem
 *
 * -*- magic methods -*-
 *
 * @method int getStatus()
 * @method void setStatus()
 * @method int getSource()
 * @method void setSource()
 * @method string getBuyerCreativeId()
 * @method void setBuyerCreativeId()
 * @method string getCreativeId()
 * @method void setCreativeId()
 * @method string getWidth()
 * @method void setWidth()
 * @method string getHeight()
 * @method void setHeight()
 * @method array getAdvertiserId()
 * @method void appendAdvertiserId()
 * @method array getClickThroughUrl()
 * @method void appendClickThroughUrl()
 * @method array getDetectedSensitiveCategory()
 * @method void appendDetectedSensitiveCategory()
 * @method array getDetectedProductCategory()
 * @method void appendDetectedProductCategory()
 * @method bool getIsSslCapable()
 * @method void setIsSslCapable()
 * @method array getDEPRECATEDDisapprovalReason()
 * @method void appendDEPRECATEDDisapprovalReason()
 * @method array getDisapprovalReason()
 * @method void appendDisapprovalReason()
 * @method array getSnippetCorrection()
 * @method void appendSnippetCorrection()
 * @method SnippetStatusItem_SnippetFiltering getSnippetFiltering()
 * @method void setSnippetFiltering()
 *
 */
class SnippetStatusItem extends ProtocolBuffersMessage
{
  /** @var int $status tag:1  optional ProtocolBuffers::TYPE_ENUM */
  protected $status;

  /** @var int $source tag:8  optional ProtocolBuffers::TYPE_ENUM */
  protected $source;

  /** @var string $buyer_creative_id tag:2  optional ProtocolBuffers::TYPE_STRING */
  protected $buyer_creative_id;

  /** @var string $creative_id tag:9  optional ProtocolBuffers::TYPE_STRING */
  protected $creative_id;

  /** @var string $width tag:3  optional ProtocolBuffers::TYPE_INT32 */
  protected $width;

  /** @var string $height tag:4  optional ProtocolBuffers::TYPE_INT64 */
  protected $height;

  /** @var array $advertiser_id tag:5  optional ProtocolBuffers::TYPE_INT64 */
  protected $advertiser_id = array();

  /** @var array $click_through_url tag:11  optional ProtocolBuffers::TYPE_STRING */
  protected $click_through_url = array();

  /** @var array $detected_sensitive_category tag:6  optional ProtocolBuffers::TYPE_INT32 */
  protected $detected_sensitive_category = array();

  /** @var array $detected_product_category tag:7  optional ProtocolBuffers::TYPE_INT32 */
  protected $detected_product_category = array();

  /** @var bool $is_ssl_capable tag:15  optional ProtocolBuffers::TYPE_BOOL */
  protected $is_ssl_capable;

  /** @var array $DEPRECATED_disapproval_reason tag:10  optional ProtocolBuffers::TYPE_ENUM */
  protected $DEPRECATED_disapproval_reason = array();

  /** @var array $disapproval_reason tag:12  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $disapproval_reason = array();

  /** @var array $snippet_correction tag:13  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $snippet_correction = array();

  /** @var SnippetStatusItem_SnippetFiltering $snippet_filtering tag:14  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $snippet_filtering;


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
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "status",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => SnippetStatusItem_Status::NOT_CHECKED,
      )));
      $desc->addField(8, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "source",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => SnippetStatusItem_Source::RTB,
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
      $desc->addField(9, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "creative_id",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(3, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "width",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(4, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "height",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(5, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT64,
        "name"     => "advertiser_id",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(11, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_STRING,
        "name"     => "click_through_url",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => "",
      )));
      $desc->addField(6, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "detected_sensitive_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(7, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_INT32,
        "name"     => "detected_product_category",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => 0,
      )));
      $desc->addField(15, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_BOOL,
        "name"     => "is_ssl_capable",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => false,
      )));
      $desc->addField(10, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_ENUM,
        "name"     => "DEPRECATED_disapproval_reason",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => SnippetStatusItem_DisapprovalReason::LENGTH_OF_IMAGE_ANIMATION,
      )));
      $desc->addField(12, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "disapproval_reason",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "SnippetStatusItem_Disapproval",
      )));
      $desc->addField(13, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "snippet_correction",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "SnippetStatusItem_Correction",
      )));
      $desc->addField(14, new ProtocolBuffersFieldDescriptor(array(
        "type"     => ProtocolBuffers::TYPE_MESSAGE,
        "name"     => "snippet_filtering",
        "required" => false,
        "optional" => true,
        "repeated" => false,
        "packable" => false,
        "default"  => null,
        "message"  => "SnippetStatusItem_SnippetFiltering",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

/**
 * SnippetStatusReport
 *
 * @message SnippetStatusReport
 *
 * -*- magic methods -*-
 *
 * @method array getSnippetStatus()
 * @method void appendSnippetStatus()
 *
 */
class SnippetStatusReport extends ProtocolBuffersMessage
{
  /** @var array $snippet_status tag:1  optional ProtocolBuffers::TYPE_MESSAGE */
  protected $snippet_status = array();


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
        "name"     => "snippet_status",
        "required" => false,
        "optional" => false,
        "repeated" => true,
        "packable" => false,
        "default"  => null,
        "message"  => "SnippetStatusItem",
      )));
      $descriptor = $desc->build();
    }

    return $descriptor;
  }

}

