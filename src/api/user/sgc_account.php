<?php

	namespace SGCSdk\api\user;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SGCSdk\object\sgc_auth;
	use SGCSdk\config\sgc_common_api_params;
	use SGCSdk\config\sgc_user_account_api_params;
	use SGCSdk\lib\sgc_callapi;
	use SGCSdk\config\sgc_constant;
	use SGCSdk\object\sgc_user;

	class sgc_account {

		private $auth;
		private $user;
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
		function __construct(sgc_auth $auth, sgc_user $user) {
			$this->auth = $auth;
			$this->user = $user;
			$this->header = [
				sgc_common_api_params::API_COMMON_PARAM_API_KEY => $this->auth->getApiKey(),
				sgc_common_api_params::API_COMMON_PARAM_ADMIN_KEY => $this->auth->getAdminKey()
			];

			$this->data = [
				sgc_common_api_params::API_COMMON_PARAM_USERID => $this->auth->getUsername(),
				sgc_common_api_params::API_COMMON_PARAM_PASSWORD => $this->auth->getPassword(),
				sgc_common_api_params::API_COMMON_PARAM_OUTPUT_FORMAT => $this->user->getOutput()
			];
		}

		/**
		 * Read Account Status
		 * @return type
		 */
		function ReadAccountStatus() {
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_ACCOUNT_READ_STATUS, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Read Profile
		 * @return type
		 */
		function ReadProfile() {
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_ACCOUNT_READ_PROFILE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Read Credit History
		 * @return type
		 */
		function ReadCreditHistory() {
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_FROM_DATE] = $this->user->getFromDate();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_TO_DATE] = $this->user->getToDate();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_ACCOUNT_READ_CREDIT_HISTORY, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Update User Profile
		 * @return type
		 */
		function UpdateProfile() {
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_EMAIL_ID] = $this->user->getEmail();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_CONTACT_NO] = $this->user->getMobileNo();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_FULL_NAME] = $this->user->getFullName();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_ADDRESS] = $this->user->getAddress();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_REGION] = $this->user->getRegion();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_COUNTRY] = $this->user->getCountry();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_CITY] = $this->user->getCity();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_PROFILE_IMAGE] = $this->user->getProfilePic();
			$this->data[sgc_user_account_api_params::API_USER_ACCOUNT_PARAM_DOMAIN_NAME] = $this->user->getDomainName();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_ACCOUNT_UPDATE_PROFILE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	