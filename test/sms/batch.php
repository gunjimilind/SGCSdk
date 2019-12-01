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
	$request = new \SGCSdk\api\sms\sgc_sms_send($Auth, $Sms);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//SEND BATCH
	$Sms->setSenderId("TESTSG");
	$Sms->setText("Hello  World");
	$Sms->setPhone("919999999999");
	$Sms->setMsgType("text");
	$Sms->setScheduleTime("2019-11-01 00:00:00");
	$Sms->setTestMessage("true");
	$Sms->setDuplicateCheck("true");

	echo $request->batch();
	echo "<br><br>";

	//SEND PHONEBOOK
	$Sms->setSenderId("TESTSG");
	$Sms->setText("Hello  World");
	$Sms->setGroupName("TESTSMS");
	$Sms->setMsgType("text");
	$Sms->setScheduleTime("2019-11-01 00:00:00");
	$Sms->setTestMessage("true");
	$Sms->setDuplicateCheck("true");

	echo $request->phonebook();
	echo "<br><br>";

	//SEND BULK
	$Sms->setSenderId("TESTSG");
	$Sms->setText("Hello  World");
	$Sms->setFile("@/home/root/Sample.csv");
	$Sms->setMsgType("text");
	$Sms->setScheduleTime("2019-11-01 00:00:00");
	$Sms->setTestMessage("true");
	$Sms->setDuplicateCheck("true");

	echo $request->file();