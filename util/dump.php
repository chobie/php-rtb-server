<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "message" . DIRECTORY_SEPARATOR . "realtime-bidding.proto.php";
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "util" . DIRECTORY_SEPARATOR . "Util.php";

$data = file_get_contents("dat");
$request = BidRequest::parseFromString($data);
/** @var $request BidRequest */

echo RtbUtil::ip2str($request);
