<?php

	namespace SGCSdk\api\reseller;

defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SGCSdk\object\sgc_auth;
	use SGCSdk\config\sgc_common_api_params;
	use SGCSdk\config\sgc_reseller_user_api_params;
	use SGCSdk\lib\sgc_callapi;
	use SGCSdk\config\sgc_constant;
	use SGCSdk\object\sgc_reseller;

	class sgc_user {

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
		function CreateUser() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USER_TYPE] = $this->reseller->getUserType();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_EMAIL_ID] = $this->reseller->getEmailId();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_CONTACT_NO] = $this->reseller->getMobileNo();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_FULL_NAME] = $this->reseller->getFullName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_ADDRESS] = $this->reseller->getAddress();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_CITY] = $this->reseller->getCity();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_REGION] = $this->reseller->getRegion();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_COUNTRY] = $this->reseller->getCountry();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_DOMAIN_NAME] = $this->reseller->getDomainName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_EXPIRY_DATE] = $this->reseller->getExpiryDate();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_ENABLE_CMS] = $this->reseller->getEnableCMS();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_RESELLER_CREATE_USER, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Read User
		 * @return type
		 */
		function ReadUser() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_RESELLER_READ_USER, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Read User Credit Usage
		 * @return type
		 */
		function UpdateUser() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USER_TYPE] = $this->reseller->getUserType();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_EMAIL_ID] = $this->reseller->getEmailId();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_CONTACT_NO] = $this->reseller->getMobileNo();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_FULL_NAME] = $this->reseller->getFullName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_ADDRESS] = $this->reseller->getAddress();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_CITY] = $this->reseller->getCity();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_REGION] = $this->reseller->getRegion();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_COUNTRY] = $this->reseller->getCountry();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_DOMAIN_NAME] = $this->reseller->getDomainName();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_EXPIRY_DATE] = $this->reseller->getExpiryDate();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_ENABLE_CMS] = $this->reseller->getEnableCMS();
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USER_STATUS] = $this->reseller->getUserStatus();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_RESELLER_UPDATE_USER, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Generate Password
		 * @return type
		 */
		function GeneratePassword() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_RESELLER_GENERATE_USER_PASSWORD, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Reset Password
		 * @return type
		 */
		function ResetPassword() {
			$this->data[sgc_reseller_user_api_params::API_RESELLER_USER_PARAM_USERNAME] = $this->reseller->getUserLoginName();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_RESELLER_RESET_USER_PASSWORD, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	