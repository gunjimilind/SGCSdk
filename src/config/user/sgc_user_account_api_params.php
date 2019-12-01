<?php

	namespace SGCSdk\config;

	defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_account_api_params extends sgc_common_api_params {

		//API NAME
		const API_USER_ACCOUNT_API_NAME = "account";
		//User Method
		const API_USER_ACCOUNT_METHOD_READ_STATUS = "readstatus";
		const API_USER_ACCOUNT_METHOD_READ_PROFILE = "readprofile";
		const API_USER_ACCOUNT_METHOD_UPDATE_PROFILE = "updateprofile";
		const API_USER_ACCOUNT_METHOD_READ_CREDIT_TRAIL = "readcredithistory";
		//User Params
		const API_USER_ACCOUNT_PARAM_EMAIL_ID = "email";
		const API_USER_ACCOUNT_PARAM_CONTACT_NO = "mobileno";
		const API_USER_ACCOUNT_PARAM_FULL_NAME = "fullname";
		const API_USER_ACCOUNT_PARAM_ADDRESS = "address";
		const API_USER_ACCOUNT_PARAM_DOMAIN_NAME = "domainname";
		const API_USER_ACCOUNT_PARAM_INDUSTRY = "industry";
		const API_USER_ACCOUNT_PARAM_REGION = "region";
		const API_USER_ACCOUNT_PARAM_COUNTRY = "country";
		const API_USER_ACCOUNT_PARAM_CITY = "city";
		const API_USER_ACCOUNT_PARAM_FROM_DATE = "fromdate";
		const API_USER_ACCOUNT_PARAM_TO_DATE = "todate";
		const API_USER_ACCOUNT_PARAM_PROFILE_IMAGE = "profilepic";

	}
	