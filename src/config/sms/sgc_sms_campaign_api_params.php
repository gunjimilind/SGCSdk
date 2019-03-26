<?php

	/*	 * *******smsgatewaycentre******* * */

	namespace SGCSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	class sgc_sms_campaign_api_params {

		//API NAME
		const API_SMS_CAMPAIGN_API_NAME = "campaign";
		//Send Method Values
		const API_SMS_CAMPAIGN_METHOD_READ = "read";
		const API_SMS_CAMPAIGN_METHOD_UPDATE = "update";
		const API_SMS_CAMPAIGN_METHOD_DELETE = "delete";
		//Send Method Params
		const API_SMS_CAMPAIGN_PARAM_FROM_DATE = "fromdate";
		const API_SMS_CAMPAIGN_PARAM_TO_DATE = "todate";
		const API_SMS_CAMPAIGN_PARAM_UUID = "uuid";
		const API_SMS_CAMPAIGN_PARAM_CAMPAIGNID = "campaignid";
		const API_SMS_CAMPAIGN_READ_MAX_DAYS = 30;
		const API_SMS_CAMPAIGN_SCHEDULE_MAX_DAYS = 365;
		const API_SMS_CAMPAIGN_PARAM_SCHEDULE_TIME = "scheduletime";
		//REQUEST METHOD ACCEPT
		const API_SMS_CAMPAIGN_REQUEST_METHOD_READ = array('POST', 'GET');
		const API_SMS_CAMPAIGN_REQUEST_METHOD_UPDATE = array('POST', 'GET');
		const API_SMS_CAMPAIGN_REQUEST_METHOD_DELETE = array('POST', 'GET');

	}
	