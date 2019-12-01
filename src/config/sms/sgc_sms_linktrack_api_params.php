<?php

	/*	 * *******smsgatewaycentre******* * */

	namespace SGCSdk\config;

defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	class sgc_sms_linktrack_api_params {

		//API NAME
		const API_SMS_LINKTRACK_API_NAME = "linktrack";
		//Send Method Values
		const API_SMS_LINKTRACK_METHOD_CREATE = "create";
		const API_SMS_LINKTRACK_METHOD_READ = "read";
		const API_SMS_LINKTRACK_METHOD_REPORT = "report";
		const API_SMS_LINKTRACK_METHOD_UPDATE = "update";
		const API_SMS_LINKTRACK_METHOD_DELETE = "delete";
		//Send Method Params
		const API_SMS_LINKTRACK_PARAM_LINK_ID = "id";
		const API_SMS_LINKTRACK_PARAM_CAMPAIGN_ID = "campaignid";
		const API_SMS_LINKTRACK_PARAM_FROM_DATE = "fromdate";
		const API_SMS_LINKTRACK_PARAM_TO_DATE = "todate";
		const API_SMS_LINKTRACK_PARAM_GROUP_BY = "groupby";
		const API_SMS_LINKTRACK_PARAM_IDENTIFIER = "identifier";
		const API_SMS_LINKTRACK_PARAM_LONG_URL = "longurl";
		const API_SMS_LINKTRACK_PARAM_TYPE = "type";
		const API_SMS_LINKTRACK_PARAM_ATTACHMENT = "attachment";
		const API_SMS_LINKTRACK_PARAM_TYPE_ARRAY = array('url', 'attachment');
		//REQUEST METHOD ACCEPT
		const API_SMS_LINKTRACK_REQUEST_METHOD_CREATE = array('POST', 'GET');
		const API_SMS_LINKTRACK_REQUEST_METHOD_READ = array('POST', 'GET');
		const API_SMS_LINKTRACK_REQUEST_METHOD_REPORT = array('POST', 'GET');
		const API_SMS_LINKTRACK_REQUEST_METHOD_UPDATE = array('POST', 'GET');
		const API_SMS_LINKTRACK_REQUEST_METHOD_DELETE = array('POST', 'GET');

	}
	