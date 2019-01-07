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
	$request = new \SGCSdk\api\reseller\sgc_user($Auth, $Reseller);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	echo $request->CreateUser();