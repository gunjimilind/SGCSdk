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
	$request = new \SGCSdk\api\user\sgc_account($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Read Profile
	echo "Read Profile:" . $request->ReadProfile();
	echo "<br />";
	echo "<br />";

	//Read Profile
	echo "Read Account Status:" . $request->ReadAccountStatus();
	echo "<br />";
	echo "<br />";

	//Read Credit History
	$User->setFromDate("2018-08-01");
	$User->setToDate("2018-08-30");
	echo "Read Credit History:" . $request->ReadCreditHistory();
	echo "<br />";
	echo "<br />";

	//Update Profile
	$User->setEmail("test@gmail.com");
	$User->setMobileNo("919999999999");
	$User->setFullName("Testing");
	$User->setAddress("Test Street, India");
	$User->setRegion(1);
	$User->setCountry(1);
	$User->setCity(1);
	echo "Update Profile: " . $request->UpdateProfile();
	