<?php

class RtbUtil
{
    /**
     * convert ip bytes to readable string.
     *
     * @param BidRequest $request
     * @return string
     * @throws RuntimeException
     * @throws InvalidArgumentException
     * @see https://developers.google.com/ad-exchange/rtb/downloads/realtime-bidding-proto.txt (ip field)
     */
    public static function ip2str(BidRequest $request)
    {
        if ($request instanceof BidRequest || method_exists($request, "getIp")) {
            $ip = $request->getIp();
        } else {
            if (is_object($request)) {
                throw new InvalidArgumentException(sprintf("%s class does not support. expects getIp method.", get_class($request)));
            }
            $ip = $request;
        }

        switch (strlen($ip)) {
            case 3:
                return self::ipv4bytes2str($ip);
                break;
            case 6:
                return self::ipv4bytes2str($ip);
                break;
            default:
                throw new RuntimeException(sprintf("can't detect which encoding: given length %d", strlen($ip)));
                break;
        }
    }

    protected static function ipv4bytes2str($ipstr)
    {
        return long2ip(current(unpack("N", $ipstr . pack("C", 0))));
    }

    protected static function ipv6bytes2str($ipstr)
    {
        return join(":", array_map("dechex", (unpack("v*", $ipstr)))) . "::";
    }
}