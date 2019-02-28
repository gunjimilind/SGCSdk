<?php

	namespace SGCSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_user_draft_api_params extends sgc_common_api_params {

		//API NAME
		const API_USER_DRAFT_API_NAME = "draft";
		//User Method
		const API_USER_DRAFT_METHOD_CREATE = "create";
		const API_USER_DRAFT_METHOD_READ = "read";
		const API_USER_DRAFT_METHOD_UPDATE = "update";
		const API_USER_DRAFT_METHOD_DELETE = "delete";
		//User Params
		const API_USER_DRAFT_PARAM_ID = "id";
		const API_USER_DRAFT_PARAM_TITLE = "title";
		const API_USER_DRAFT_PARAM_CONTENT = "content";

	}
	