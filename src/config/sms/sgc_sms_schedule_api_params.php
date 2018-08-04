<?php

	namespace SGCSdk\config;

	sdefined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_sms_schedule_api_params extends sgc_common_api_params {

		//API NAME
		const API_SMS_SCHEDULE_API_NAME = "schedule";
		//Send Method Values
		const API_SMS_SCHEDULE_METHOD_READ = "read";
		const API_SMS_SCHEDULE_METHOD_CANCEL = "cancel";
		//Send Method Params
		const API_SMS_SCHEDULE_PARAM_DATE = "date";

	}
	