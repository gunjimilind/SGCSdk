<?php

	namespace SGCSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_password_api_params extends sgc_common_api_params {

		//API NAME
		const API_USER_PASSWORD_API_NAME = "password";
		//User Method
		const API_USER_PASSWORD_METHOD_CHANGE = "change";
		const API_USER_PASSWORD_METHOD_FORGOT = "forgot";
		const API_USER_PASSWORD_METHOD_RESET = "reset";
		//User Params
		const API_USER_PASSWORD_PARAM_NEW_PASSWORD = "newpassword";
		
	}
	