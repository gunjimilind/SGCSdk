<?php

	namespace SGCSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_sms_report_api_params extends sgc_common_api_params {

		//API NAME
		const API_SMS_REPORT_API_NAME = "report";
		//Send Method Values
		const API_SMS_REPORT_METHOD_STATUS = "status";
		const API_SMS_REPORT_METHOD_REPORT = "day";
		const API_SMS_REPORT_METHOD_SUMMARY = "summary";
		const API_SMS_REPORT_METHOD_FILEUPLOAD = "fileupload";
		//Send Method Params
		const API_SMS_REPORT_PARAM_DATE = "date";
		const API_SMS_REPORT_PARAM_FROM_DATE = "fromdate";
		const API_SMS_REPORT_PARAM_TO_DATE = "todate";
	
	}
	