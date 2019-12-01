<?php

	/*	 * *******smsgatewaycentre******* * */

	namespace SGCSdk\config;

	defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	class sgc_sms_schedule_api_params {

		//API NAME
		const API_SMS_SCHEDULE_API_NAME = "schedule";
		//Send Method Values
		const API_SMS_SCHEDULE_METHOD_READ = "read";
		const API_SMS_SCHEDULE_METHOD_UPDATE = "update";
		const API_SMS_SCHEDULE_METHOD_DELETE = "delete";
		//Send Method Params
		const API_SMS_SCHEDULE_PARAM_FROM_DATE = "fromdate";
		const API_SMS_SCHEDULE_PARAM_TO_DATE = "todate";
		const API_SMS_SCHEDULE_PARAM_UUID = "uuid";
		const API_SMS_SCHEDULE_PARAM_SCHEDULE_TIME = "scheduletime";

	}
	