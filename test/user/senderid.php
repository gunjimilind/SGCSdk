<?php

	define("_SMSGATEWAYCENTRE_ACCESS", true);

	ini_set("display_errors", 1);

	//AUTOLOAD CLASS
	require_once '../../vendor/autoload.php';

	//SET AUTH
	$Auth = new \SGCSdk\object\sgc_auth();
	$Auth->setUsername("admin");
	$Auth->setPassword("admin123");

	//SET PARAMS
	$User = new \SGCSdk\object\sgc_user();
	$User->setOutput("json");

	//INITIATE HANDLE
	$request = new \SGCSdk\api\user\sgc_senderid($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create SenderId
	$User->setSenderId("TESTIN");
	echo "Create SenderId: " . $request->Create();
	echo "<br />";
	echo "<br />";

	//Read SenderId list
	echo "Read SenderId: " . $request->Read();
	echo "<pre>";
	print_r(json_decode($request->Read())->response->senderidList);
	echo "<pre>";
	echo "<br />";
	echo "<br />";

	//Update SenderId
	$User->setSenderId("MILIND");
	$User->setId(33);
	echo "Update SenderId: " . $request->Update();
	echo "<br />";
	echo "<br />";

	//Delete SenderId
	$User->setId(33);
	echo "Delete SenderId: " . $request->Delete();
	