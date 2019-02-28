<?php

	namespace SGCSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_reseller_user_api_params extends sgc_common_api_params {

		//API NAME
		const API_RESELLER_USER_API_NAME = "user";
		//User Method
		const API_RESELLER_USER_METHOD_CREATE_USER = "createuser";
		const API_RESELLER_USER_METHOD_UPDATE_USER = "updateuser";
		const API_RESELLER_USER_METHOD_READ_USER = "readuser";
		const API_RESELLER_USER_METHOD_GENERATE_USER_PASSWORD = "generateuserpassword";
		const API_RESELLER_USER_METHOD_RESET_USER_PASSWORD = "resetuserpassword";
		//User Params
		const API_RESELLER_USER_PARAM_USER_TYPE = "usertype";
		const API_RESELLER_USER_PARAM_USERNAME = "userloginname";
		const API_RESELLER_USER_PARAM_EMAIL_ID = "email";
		const API_RESELLER_USER_PARAM_CONTACT_NO = "mobileno";
		const API_RESELLER_USER_PARAM_FULL_NAME = "fullname";
		const API_RESELLER_USER_PARAM_ADDRESS = "address";
		const API_RESELLER_USER_PARAM_REGION = "region";
		const API_RESELLER_USER_PARAM_COUNTRY = "country";
		const API_RESELLER_USER_PARAM_DOMAIN_NAME = "domainname";
		const API_RESELLER_USER_PARAM_EXPIRY_DATE = "expirydate";
		const API_RESELLER_USER_PARAM_ENABLE_CMS = "enablecms";
		const API_RESELLER_USER_PARAM_USER_STATUS = "userstatus";
		const API_RESELLER_USER_PARAM_NEW_PASSWORD = "newpassword";
		const API_RESELLER_USER_PARAM_NOTIFY_USER = "notifyuser";
		const API_RESELLER_USER_PARAM_CITY = "city";

	}
	