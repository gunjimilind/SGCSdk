<?php

	namespace SGCSdk\config;

        defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_reseller_credit_management_api_params extends sgc_common_api_params {

		//API NAME
		const API_RESELLER_CREDIT_MANAGEMENT_API_NAME = "credit";
		//User Method
		const API_RESELLER_CREDIT_MANAGEMENT_METHOD_ADD_CREDIT = "addcredit";
		const API_RESELLER_CREDIT_MANAGEMENT_METHOD_REMOVE_CREDIT = "removecredit";
		const API_RESELLER_CREDIT_MANAGEMENT_METHOD_READ_CREDIT_HISTORY = "readcredithistory";
		//User Params
		const API_RESELLER_CREDIT_MANAGEMENT_CREDIT = "credits";
		const API_RESELLER_CREDIT_MANAGEMENT_PRODUCT = "product";
		const API_RESELLER_CREDIT_MANAGEMENT_TRANSACTION_TYPE = "transactiontype";
		const API_RESELLER_CREDIT_MANAGEMENT_COMMENT = "comment";
		const API_RESELLER_CREDIT_MANAGEMENT_USER_LOGIN_NAME = "userloginname";
		const API_RESELLER_CREDIT_MANAGEMENT_FROM_DATE = "fromdate";
		const API_RESELLER_CREDIT_MANAGEMENT_TO_DATE = "todate";
                const API_RESELLER_CREDIT_MANAGEMENT_EXPIRYDATE = "expiryDate";

	}
	