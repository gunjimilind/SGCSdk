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
	$request = new \SGCSdk\api\user\sgc_webhook($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create Webhook
	$User->setSmsWebhook("http://google.com");
	echo "Create Webhook: " . $request->Create();
	echo "<br />";
	echo "<br />";

	//Read Webhook list
	echo "Read Webhook: " . $request->Read();
	echo "<br />";
	echo "<br />";

	//Update Webhook
	$User->setSmsWebhook("http://");
	$User->setSmsWebhookRate(50);
	echo "Update Webhook: " . $request->Update();
	echo "<br />";
	echo "<br />";

	//Delete Webhook
	echo "Delete Webhook: " . $request->Delete();
	