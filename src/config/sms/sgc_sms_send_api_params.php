<?php

	namespace SGCSdk\config;
	
	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_sms_send_api_params extends sgc_common_api_params {

		//API NAME
		const API_SMS_SEND_API_NAME = "send";
		//Send Method Values
		const API_SMS_SEND_METHOD_COMMA_SEPARATED = "batch";
		const API_SMS_SEND_METHOD_PHONEBOOK = "phonebook";
		const API_SMS_SEND_METHOD_FILE_UPLOAD = "file";
		//Send Method Params
		const API_SMS_SEND_PARAM_MOBILE = "phone";
		const API_SMS_SEND_PARAM_MESSAGE_TEXT = "text";
		const API_SMS_SEND_PARAM_MESSAGE_TYPE = "type";
		const API_SMS_SEND_PARAM_SCHEDULE_TIME = "time";
		const API_SMS_SEND_PARAM_SENDER_ID = "senderid";
		const API_SMS_SEND_PARAM_TEST_MESSAGE = "test";
		const API_SMS_SEND_PARAM_GROUP_NAME = "group";
		const API_SMS_SEND_PARAM_DUPLICATE_CHECK = "duplicatecheck";
		const API_SMS_SEND_PARAM_FILE_NAME = "file";

	}
	