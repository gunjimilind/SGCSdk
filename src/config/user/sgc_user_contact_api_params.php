<?php

	namespace SGCSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_contact_api_params extends sgc_common_api_params {

		//API NAME
		const API_USER_CONTACT_API_NAME = "contact";
		//User Method
		const API_USER_CONTACT_METHOD_CREATE = "create";
		const API_USER_CONTACT_METHOD_READ = "read";
		const API_USER_CONTACT_METHOD_UPDATE = "update";
		const API_USER_CONTACT_METHOD_DELETE = "delete";
		//User Params
		const API_USER_CONTACT_PARAM_GROUP_NAME = "groupname";
		const API_USER_CONTACT_PARAM_GROUP_ID = "groupid";
		const API_USER_CONTACT_PARAM_CONTACT_NAME = "contactname";
		const API_USER_CONTACT_PARAM_MOBILE_NO = "mobileno";
		const API_USER_CONTACT_PARAM_CONTACT_ID = "id";

	}
	