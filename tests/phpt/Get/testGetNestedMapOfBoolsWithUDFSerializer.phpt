--TEST--
 Get Nested Map of bools with UDF serializer.  

--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("Get", "testGetNestedMapOfBoolsWithUDFSerializer");
--XFAIL--
Fails because serializer support is not present.
--EXPECT--
OK
