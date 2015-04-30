--TEST--
GET object which is serialized using SERIALIZER_PHP and deserialized 
with SERIALIZER_USER.

--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("Get", "testGetObjectPHPSerializedAndUDFDeserialized");
--XFAIL--
Fails because serialization and deserialization support is not present.
--EXPECT--
OK
