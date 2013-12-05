<?php
require __DIR__ . DIRECTORY_SEPARATOR . "message" . DIRECTORY_SEPARATOR . "realtime-bidding.proto.php";


$prior = microtime(true);
$request = BidRequest::parseFromString(file_get_contents("php://input"));
$end = microtime(true);
/** @var BidRequest $request */
//error_log(var_export($request, true));


try {
    $response = new BidResponse();
    $response->setProcessingTimeMs($end - $prior);
    $slots = $request->getAdslot();

    $ad = new BidResponse_Ad();
    $ad->setHtmlSnippet("<a href='%%CLICK_URL_UNESC%%http%3A%2F%2Fmy.adserver.com%2Fsome%2Fpath%2Fhandleclick%3Fclick%3Dclk'><img src='http://i.imgur.com/OJx87.png' width='120'/></a>");
    $ad->setBuyerCreativeId("my-creative-1234ABCD");
    $ad->appendVendorType(113);
    $ad->appendCategory(3);
    $ad->appendClickThroughUrl("http://www.google.com");
    $adslot = new BidResponse_Ad_AdSlot(array("id"=>$slots[0]->getId(), "max_cpm_micros"=>1000));
    $ad->appendAdslot($adslot);

    $response->appendAd($ad);
    $response->setDebugString("Helo World");

    echo $response->serializeToString();
} catch (Exception $e) {
    error_log($e->getMessage());
    error_log($e->getTraceAsString());
}
