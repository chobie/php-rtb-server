<?php
require dirname(__DIR__) . DIRECTORY_SEPARATOR . "message" . DIRECTORY_SEPARATOR . "realtime-bidding.proto.php";
$data = file_get_contents("dat");
$request = BidRequest::parseFromString($data);

var_dump($request);