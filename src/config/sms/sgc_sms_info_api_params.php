<?php

	/*	 * *******smsgatewaycentre******* * */

	namespace SGCSdk\config;

	defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	class sgc_sms_info_api_params {

		//API NAME
		const API_SMS_INFO_API_NAME = "info";
		//Send Method Values
		const API_SMS_INFO_METHOD_MSG = "msg";
		const API_SMS_INFO_METHOD_DELIVERY_CODES = "deliverycodes";
		const API_SMS_INFO_METHOD_RESPONSE_CODE = "responsecodes";
		//Send Method Params
		const API_SMS_SEND_PARAM_MSG = "msg";
		const API_SMS_SEND_PARAM_errorcode = "errorcode";
		//REQUEST METHOD ACCEPT
		const API_SMS_INFO_REQUEST_METHOD_MSG = array('POST', 'GET');
		const API_SMS_INFO_REQUEST_METHOD_DELIVERY_CODES = array('POST', 'GET');
		const API_SMS_INFO_REQUEST_METHOD_RESPONSE_CODES = array('POST', 'GET');

	}
	