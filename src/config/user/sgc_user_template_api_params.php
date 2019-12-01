<?php

	/*	 * *******smsgatewaycentre******* * */

	namespace SGCSdk\config;

	defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	class sgc_user_template_api_params {

		//API NAME
		const API_USER_TEMPLATE_API_NAME = "template";
		//User Method
		const API_USER_TEMPLATE_METHOD_CREATE = "create";
		const API_USER_TEMPLATE_METHOD_READ = "read";
		const API_USER_TEMPLATE_METHOD_UPDATE = "update";
		const API_USER_TEMPLATE_METHOD_DELETE = "delete";
		//User Params
		const API_USER_TEMPLATE_PARAM_ID = "id";
		const API_USER_TEMPLATE_PARAM_MESSAGE = "message";
	}
	