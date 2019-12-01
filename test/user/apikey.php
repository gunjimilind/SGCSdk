<?php

	define("_SMPPCENTER_ACCESS", true);

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
	$request = new \SGCSdk\api\user\sgc_apikey($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create apiKey
	echo "Create apiKey: " . $request->Create();
	echo "<br />";
	echo "<br />";

	//Read apiKey list
	echo "Read apiKey: " . $request->Read();
	echo "<br />";
	echo "<br />";

	//Update apiKey
	echo "Update apiKey: " . $request->Update();
	echo "<br />";
	echo "<br />";

	//Delete apiKey
	echo "Delete apiKey: " . $request->Delete();
	