<?php

	define("_SMPPCENTER_ACCESS", true);

	ini_set("display_errors", 1);

	//AUTOLOAD CLASS
	require_once '../../vendor/autoload.php';

	//SET AUTH
	$Auth = new \SGCSdk\object\sgc_auth();
	$Auth->setUsername("admin");
	$Auth->setPassword("Admin@123");

	//SET PARAMS
	$Sms = new \SGCSdk\object\sgc_sms();
	$Sms->setOutput("json");

	//INITIATE HANDLE
	$request = new \SGCSdk\api\sms\sgc_schedule($Auth, $Sms);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Read Schedule list
	//$Sms->setFromDate("2018-10-01");
	//$Sms->setToDate("2018-10-30");
	$Sms->setUuId("1212345432");
	echo "Read Schedule: " . $request->Read();
	echo "<br />";
	echo "<br />";

	exit;
	//Update Schedule
	$Sms->setScheduleTime("2019-01-01 00:00:00");
	$Sms->setUuId("121234542132");
	echo "Update Schedule: " . $request->Update();
	echo "<br />";
	echo "<br />";

	//Delete Schedule
	$Sms->setUuId("121234542132");
	echo "Delete Schedule: " . $request->Delete();
	