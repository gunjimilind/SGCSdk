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
	$Reseller = new \SGCSdk\object\sgc_reseller();
	$Reseller->setOutput("json");

	//INITIATE HANDLE
	$request = new \SGCSdk\api\reseller\sgc_credit_management($Auth, $Reseller);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Read Credit History
	$Reseller->setFromDate("2018-08-01");
	$Reseller->setToDate("2018-08-30");
	$Reseller->setUserLoginName("admin");
	echo "Read Credit History:" . $request->ReadUserCreditUsage();
	echo "<br />";
	echo "<br />";

	//Add Credit
	$Reseller->setCredit(1234);
	$Reseller->setComment("Test from API");
	$Reseller->setUserLoginName("admin");
	echo "Add Credit:" . $request->AddCredit();
	echo "<br />";
	echo "<br />";

	//Remove Credit
	$Reseller->setCredit(1234);
	$Reseller->setComment("Test from API");
	$Reseller->setUserLoginName("admin");
	echo "Add Credit:" . $request->RemoveCredit();
	echo "<br />";
	echo "<br />";
	