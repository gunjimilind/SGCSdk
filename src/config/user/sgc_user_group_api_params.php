<?php

	namespace SGCSdk\config;
	
	defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_group_api_params extends sgc_common_api_params {

		//API NAME
		const API_USER_GROUP_API_NAME = "group";
		//User Method
		const API_USER_GROUP_METHOD_CREATE = "create";
		const API_USER_GROUP_METHOD_READ = "read";
		const API_USER_GROUP_METHOD_UPDATE = "update";
		const API_USER_GROUP_METHOD_DELETE = "delete";
		//User Params
		const API_USER_GROUP_PARAM_GROUP_NAME = "groupname";
		const API_USER_GROUP_PARAM_GROUP_ID = "id";

	}
	