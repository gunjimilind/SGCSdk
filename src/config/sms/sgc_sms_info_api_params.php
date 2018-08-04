<?php

	namespace SGCSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_sms_info_api_params extends sgc_common_api_params {

		//API NAME
		const API_SMS_INFO_API_NAME = "info";
		//Send Method Values
		const API_SMS_INFO_METHOD_MSG = "msg";
		const API_SMS_INFO_METHOD_DELIVERY_CODES = "deliverycodes";
		const API_SMS_INFO_METHOD_RESPONSE_CODE = "responsecodes";
		//Send Method Params
		const API_SMS_SEND_PARAM_MESSAGE_TEXT = "text";

	}
	