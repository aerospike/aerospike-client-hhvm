--TEST--
Operate with generation policy POLICY_GEN_EQ positive.

--FILE--
<?php
include dirname(__FILE__)."/../../astestframework/astest-phpt-loader.inc";
aerospike_phpt_runtest("Operate", "testOperateWithGenEQPositive");
--XFAIL--
Fails because exists() API is currently not implemented, Which is used to get metadata(i.e. Generation value).
--EXPECT--
OK

