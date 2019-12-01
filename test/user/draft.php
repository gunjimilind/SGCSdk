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
	$request = new \SGCSdk\api\user\sgc_draft($Auth, $User);

	//If you want to use true rest api like DELETE, PATCH, POST , GET
	$request->useRestApi(true);

	//Create draft
	$User->setDraftTitle("THISISTESTING");
	$User->setDraftContent("THISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHIS");
	echo "Create Draft: " . $request->Create();
	echo "<br />";
	echo "<br />";

	//Read draft list
	echo "Read Draft: " . $request->Read();
	echo "<br />";
	echo "<br />";

	//Update draft
	$User->setDraftTitle("THISISTESTING1234321");
	$User->setDraftContent("12321THISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHISTHIS");
	$User->setId(8);
	echo "Update Draft: " . $request->Update();
	echo "<br />";
	echo "<br />";

	//Delete draft
	$User->setId(8);
	echo "Delete Draft: " . $request->Delete();
	