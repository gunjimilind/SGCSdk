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
	$request = new \SGCSdk\api\user\sgc_contact($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create Contact
	$User->setGroupId(7);
	$User->setContactName("Milind");
	$User->setMobileNo("911234567890");
	echo "Create Contact: " . $request->Create();
	echo "<br />";
	echo "<br />";

	//Read Contact list
	$User->setGroupName("HELLO");
	echo "Read Contact: " . $request->Read();
	echo "<br />";
	echo "<br />";

	//Update Contact
	$User->setGroupId(7);
	$User->setContactId(3);
	$User->setContactName("Milind");
	$User->setMobileNo("911234567890");
	echo "Update Contact: " . $request->Update();
	echo "<br />";
	echo "<br />";

	//Delete Contact
	$User->setId(3);
	echo "Delete Contact: " . $request->Delete();
	