<?php

	namespace SGCSdk\config;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_constant {

		//SGC API LINK
		const SGC_API = "http://localhost/project/api";
		
		//SENDERID API ENDPOINTS
		const SGC_ENDPOINT_SENDER_ID_CREATE = "/senderid/create";
		const SGC_ENDPOINT_SENDER_ID_READ = "/senderid/read";
		const SGC_ENDPOINT_SENDER_ID_UPDATE = "/senderid/update";
		const SGC_ENDPOINT_SENDER_ID_DELETE = "/senderid/delete";
		
		//TEMPLATE API ENDPOINTS
		const SGC_ENDPOINT_TEMPLATE_CREATE = "/template/create";
		const SGC_ENDPOINT_TEMPLATE_READ = "/template/read";
		const SGC_ENDPOINT_TEMPLATE_UPDATE = "/template/update";
		const SGC_ENDPOINT_TEMPLATE_DELETE = "/template/delete";
		
		//DRAFT API ENDPOINTS
		const SGC_ENDPOINT_DRAFT_CREATE = "/draft/create";
		const SGC_ENDPOINT_DRAFT_READ = "/draft/read";
		const SGC_ENDPOINT_DRAFT_UPDATE = "/draft/update";
		const SGC_ENDPOINT_DRAFT_DELETE = "/draft/delete";
		
		//WEBHOOK API ENDPOINTS
		const SGC_ENDPOINT_WEBHOOK_CREATE = "/webhook/create";
		const SGC_ENDPOINT_WEBHOOK_READ = "/webhook/read";
		const SGC_ENDPOINT_WEBHOOK_UPDATE = "/webhook/update";
		const SGC_ENDPOINT_WEBHOOK_DELETE = "/webhook/delete";
		
		//ACCOUNT API ENDPOINTS
		const SGC_ENDPOINT_ACCOUNT_READ_STATUS = "/account/readstatus";
		const SGC_ENDPOINT_ACCOUNT_READ_PROFILE = "/account/readprofile";
		const SGC_ENDPOINT_ACCOUNT_UPDATE_PROFILE = "/account/updateprofile";
		const SGC_ENDPOINT_ACCOUNT_READ_CREDIT_HISTORY = "/account/readcredithistory";
		
		//PASSWORD API ENDPOINTS
		const SGC_ENDPOINT_PASSWORD_CHANGE = "/password/change";
		const SGC_ENDPOINT_PASSWORD_FORGOT = "/password/forgot";
		const SGC_ENDPOINT_PASSWORD_RESET = "/password/reset";
	
		//APIKEY API ENDPOINTS
		const SGC_ENDPOINT_APIKEY_CREATE = "/apikey/create";
		const SGC_ENDPOINT_APIKEY_READ = "/apikey/read";
		const SGC_ENDPOINT_APIKEY_UPDATE = "/apikey/update";
		const SGC_ENDPOINT_APIKEY_DELETE = "/apikey/delete";
		
		//GROUP API ENDPOINTS
		const SGC_ENDPOINT_GROUP_CREATE = "/group/create";
		const SGC_ENDPOINT_GROUP_READ = "/group/read";	
		const SGC_ENDPOINT_GROUP_UPDATE = "/group/update";
		const SGC_ENDPOINT_GROUP_DELETE = "/group/delete";
		
		//CONTACTS API ENDPOINTS
		const SGC_ENDPOINT_CONTACT_CREATE = "/contact/create";
		const SGC_ENDPOINT_CONTACT_READ = "/contact/read";
		const SGC_ENDPOINT_CONTACT_UPDATE = "/contact/update";
		const SGC_ENDPOINT_CONTACT_DELETE = "/contact/delete";					
		
		//SMS API ENDPOINTS
		const SGC_ENDPOINT_SMS_BATCH = "/send/batch";
		const SGC_ENDPOINT_SMS_PHONEBOOK = "/send/phonebook";
		const SGC_ENDPOINT_SMS_FILE = "/send/file";
		
		//SCHEDULE API ENDPOINTS
		const SGC_ENDPOINT_SCHEDULE_READ = "/schedule/read";
		const SGC_ENDPOINT_SCHEDULE_CANCEL = "/schedule/cancel";	
		
		//SCHEDULE API ENDPOINTS
		const SGC_ENDPOINT_REPORT_GETSTATUS = "/report/status";
		const SGC_ENDPOINT_REPORT_GET = "/report/day";	
		const SGC_ENDPOINT_REPORT_SUMMARY = "/report/summary";	
		const SGC_ENDPOINT_REPORT_FILEUPLOAD = "/report/fileupload";
		
		//INFO API ENDPOINTS
		const SGC_ENDPOINT_INFO_MSG = "/info/msg";
		const SGC_ENDPOINT_INFO_DELIVERY_CODES = "/info/deliverycodes";	
		const SGC_ENDPOINT_INFO_RESPONSE_CODES = "/info/responsecodes";	
		
		//RESELLER USER API ENDPOINTS
		const SGC_ENDPOINT_RESELLER_CREATE_USER = "/reseller/createuser";
		const SGC_ENDPOINT_RESELLER_UPDATE_USER = "/reseller/updateuser";	
		const SGC_ENDPOINT_RESELLER_READ_USER = "/reseller/readuser";	
		const SGC_ENDPOINT_RESELLER_GENERATE_USER_PASSWORD = "/reseller/generateuserpassword";	
		const SGC_ENDPOINT_RESELLER_RESET_USER_PASSWORD = "/reseller/resetuserpassword";	
		
		//RESELLER CREDIT MANAGEMENT API ENDPOINTS
		const SGC_ENDPOINT_RESELLER_ADD_CREDIT = "/reseller/addcredit";	
		const SGC_ENDPOINT_RESELLER_REMOVE_CREDIT = "/reseller/removecredit";	
		const SGC_ENDPOINT_RESELLER_READ_CREDIT_HISTORY = "/reseller/readcredithistory";	
		
	}
	