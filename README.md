Example Google RTB Server
=========================

this is a example rtb server implementation. It'll parse and generate a response only.

Usage
-----

````
php -S 0.0.0.0:8888 rtbserver.php
python requester.py  --url=http://localhost:8888 --max_qps=1 --requests=1
````

Requirements
------------

* PHP 5.3 higher

* https://github.com/chobie/php-protocolbuffers

References
----------

* https://developers.google.com/ad-exchange/rtb/
* https://developers.google.com/ad-exchange/rtb/downloads
