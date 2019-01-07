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

	$Reseller->setUserType("customer");
	$Reseller->setUserLoginName("12343w");
	$Reseller->setEmailId("testing@test.com");
	$Reseller->setMobileNo("765676567");
	$Reseller->setFullName("MILND");
	$Reseller->setAddress("Karnat asd asd  asd  asd a sd  asd aka");
	$Reseller->setCountry("India");
	$Reseller->setRegion("Maharashtra");
	$Reseller->setCity("Mumbai");
	$Reseller->setDomainName("http://xyzz.cim");
	$Reseller->setExpiryDate("2019-01-20");
	$Reseller->setEnableCMS("false");
	echo $request->CreateUser();
	