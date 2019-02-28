<?php

	namespace SGCSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_apikey_api_params extends sgc_common_api_params {

		//API NAME
		const API_USER_APIKEY_API_NAME = "apikey";
		//User Method
		const API_USER_APIKEY_METHOD_CREATE = "create";
		const API_USER_APIKEY_METHOD_READ = "read";
		const API_USER_APIKEY_METHOD_UPDATE = "update";
		const API_USER_APIKEY_METHOD_DELETE = "delete";
		//User Params

	}
	