<?php

	/*	 * *******smsgatewaycentre******* * */

	namespace SGCSdk\config;

	defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	class sgc_sms_send_otp_params {

		//API NAME
		const API_SMS_SEND_OTP_API_NAME = "otp";
		//Send Method Params
		const API_SMS_SEND_OTP_PARAM_SENDER_ID = "senderid";
		const API_SMS_SEND_OTP_PARAM_SEND_METHOD = "sendMethod";
		const API_SMS_SEND_OTP_PARAM_MESSAGE_TYPE = "msgType";
		const API_SMS_SEND_OTP_PARAM_MOBILE = "mobile";
		const API_SMS_SEND_OTP_PARAM_MESSAGE_TEXT = "msg";
		const API_SMS_SEND_OTP_PARAM_CODE_EXPIRY = "codeExpiry";
		const API_SMS_SEND_OTP_PARAM_CODE_LENGTH = "codeLength";
		const API_SMS_SEND_OTP_PARAM_CODE_TYPE = "codeType";
		const API_SMS_SEND_OTP_PARAM_RETRY_EXPIRY = "expiry";
		const API_SMS_SEND_OTP_PARAM_RENEW = "renew";
		const API_SMS_SEND_OTP_PARAM_MEDIUM = "medium";
		const API_SMS_SEND_OTP_PARAM_EMAILID = "emailId";
		const API_SMS_SEND_OTP_PARAM_CALLBACK = "callback";
		const API_SMS_SEND_OTP_PARAM_OTP = "otp";
		
		//REQUEST METHOD ACCEPT
		const API_SMS_SEND_OTP_REQUEST_METHOD_BATCH = array('POST', 'GET');
		const API_SMS_SEND_OTP_REQUEST_METHOD_PHONEBOOK = array('POST', 'GET');
		const API_SMS_SEND_OTP_REQUEST_METHOD_FILE_UPLOAD = array('POST');

	}
	