<?php

	namespace SGCSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_webhook_params extends sgc_common_api_params {

		//API NAME
		const API_USER_WEBHOOK_API_NAME = "webhook";
		//User Method
		const API_USER_WEBHOOK_METHOD_CREATE = "create";
		const API_USER_WEBHOOK_METHOD_READ = "read";
		const API_USER_WEBHOOK_METHOD_UPDATE = "update";
		const API_USER_WEBHOOK_METHOD_DELETE = "delete";
		//User Params
		const API_USER_WEBHOOK_PARAM_URL = "url";

	}
	