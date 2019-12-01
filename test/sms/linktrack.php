<?php

	define("_SMPPCENTER_ACCESS", true);

	ini_set("display_errors", 1);

	//AUTOLOAD CLASS
	require_once '../../vendor/autoload.php';

	//SET AUTH
	$Auth = new \SGCSdk\object\sgc_auth();
	$Auth->setUsername("userAdmin");
	$Auth->setPassword("Admin1234?");

	//SET PARAMS
	$Sms = new \SGCSdk\object\sgc_sms();
	$Sms->setOutput("json");

	//INITIATE HANDLE
	$request = new \SGCSdk\api\sms\sgc_linktrack($Auth, $Sms);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);
	echo $request->Read();
	exit;
	//Read Schedule list
	$Sms->setIdentifier("Hello World");
	//$Sms->setLongUrl("http://smppcenter.com");
	$Sms->setType("attachment");
	$Sms->setAttachment("/vaoads/5ca9e8f9efaad.jpg");
	echo $request->Create();
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
	