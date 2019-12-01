<?php

	namespace SGCSdk\config;
	
	defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_senderId_api_params extends sgc_common_api_params {

		//API NAME
		const API_USER_SENDER_ID_API_NAME = "senderid";
		//User Method
		const API_USER_SENDER_ID_METHOD_CREATE = "create";
		const API_USER_SENDER_ID_METHOD_READ = "read";
		const API_USER_SENDER_ID_METHOD_UPDATE = "update";
		const API_USER_SENDER_ID_METHOD_DELETE = "delete";
		//User Params
		const API_USER_SENDER_ID_PARAM_SENDER_ID = "senderid";
		const API_USER_SENDER_ID_PARAM_ID = "id";

	}
	