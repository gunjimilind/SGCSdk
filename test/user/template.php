<?php

	define("_SMSGATEWAYCENTRE_ACCESS", true);

	ini_set("display_errors", 1);

	//AUTOLOAD CLASS
	require_once '../../vendor/autoload.php';

	//SET AUTH
	$Auth = new \SGCSdk\object\sgc_auth();
	$Auth->setUsername("admin");
	$Auth->setPassword("Admin@123");

	//SET PARAMS
	$User = new \SGCSdk\object\sgc_user();
	$User->setOutput("json");

	//INITIATE HANDLE
	$request = new \SGCSdk\api\user\sgc_template($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create Template
	$User->setMessage("Hello this is test");
	echo "Create Template: " . $request->Create();
	echo "<br />";
	echo "<br />";

	//Read Template list
	echo "Read Template: " . $request->Read();
	echo "<br />";
	echo "<br />";

	//Update Template
	$User->setMessage("Updated message");
	$User->setId(3);
	echo "Update Template: " . $request->Update();
	echo "<br />";
	echo "<br />";

	//Delete Template
	$User->setId(3);
	echo "Delete Template: " . $request->Delete();
	