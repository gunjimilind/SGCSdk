<?php

	namespace SGCSdk\api\reseller;

        defined('_SMPPCENTER_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SGCSdk\object\sgc_auth;
	use SGCSdk\config\sgc_common_api_params;
	use SGCSdk\config\sgc_reseller_credit_management_api_params;
	use SGCSdk\lib\sgc_callapi;
	use SGCSdk\config\sgc_constant;
	use SGCSdk\object\sgc_reseller;

	class sgc_credit_management {

		private $auth;
		private $reseller;
		private $header;
		private $data;
		private $useRestApi = false;

		/**
		 * Enable/Disable RestAPI
		 * @param type $useRestApi
		 */
		function useRestApi($useRestApi) {
			$this->useRestApi = $useRestApi;
		}

		/**
		 * Main Constructor
		 * @param Auth $auth
		 * @param User $user
		 */
		function __construct(sgc_auth $auth, sgc_reseller $reseller) {
			$this->auth = $auth;
			$this->reseller = $reseller;
			$this->header = [
				sgc_common_api_params::API_COMMON_PARAM_API_KEY => $this->auth->getApiKey(),
				sgc_common_api_params::API_COMMON_PARAM_ADMIN_KEY => $this->auth->getAdminKey()
			];

			$this->data = [
				sgc_common_api_params::API_COMMON_PARAM_USERID => $this->auth->getUsername(),
				sgc_common_api_params::API_COMMON_PARAM_PASSWORD => $this->auth->getPassword(),
				sgc_common_api_params::API_COMMON_PARAM_OUTPUT_FORMAT => $this->reseller->getOutput()
			];
		}

		/**
		 * Read User Credit Usage
		 * @return type
		 */
		function ReadUserCreditUsage() {
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_FROM_DATE] = $this->reseller->getFromDate();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_TO_DATE] = $this->reseller->getToDate();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_USER_LOGIN_NAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_RESELLER_READ_CREDIT_HISTORY, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Add Credit
		 * @return type
		 */
		function AddCredit() {
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_CREDIT] = $this->reseller->getCredit();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_PRODUCT] = $this->reseller->getProduct();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_TRANSACTION_TYPE] = $this->reseller->getTransactionType();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_COMMENT] = $this->reseller->getComment();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_USER_LOGIN_NAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_RESELLER_ADD_CREDIT, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Add Credit
		 * @return type
		 */
		function RemoveCredit() {
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_CREDIT] = $this->reseller->getCredit();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_COMMENT] = $this->reseller->getComment();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_PRODUCT] = $this->reseller->getProduct();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_TRANSACTION_TYPE] = $this->reseller->getTransactionType();
			$this->data[sgc_reseller_credit_management_api_params::API_RESELLER_CREDIT_MANAGEMENT_USER_LOGIN_NAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_RESELLER_REMOVE_CREDIT, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	