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
	$request = new \SGCSdk\api\user\sgc_group($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create group
	$User->setGroupName("TESTIN");
	echo "Create Group: " . $request->Create();
	echo "<br />";
	echo "<br />";

	//Read group list
	echo "Read Group: " . $request->Read();
	echo "<br />";
	echo "<br />";

	//Update group
	$User->setGroupName("MILIND");
	$User->setId(3);
	echo "Update Group: " . $request->Update();
	echo "<br />";
	echo "<br />";

	//Delete group
	$User->setId(3);
	echo "Delete Group: " . $request->Delete();
	