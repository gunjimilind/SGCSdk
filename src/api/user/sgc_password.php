<?php

	namespace SGCSdk\api\user;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SGCSdk\object\sgc_auth;
	use SGCSdk\config\sgc_common_api_params;
	use SGCSdk\config\sgc_user_password_api_params;
	use SGCSdk\lib\sgc_callapi;
	use SGCSdk\config\sgc_constant;
	use SGCSdk\object\sgc_user;

	class sgc_password {

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
				sgc_common_api_params::API_COMMON_PARAM_API_KEY => $this->auth->getApiKey()
			];

			$this->data = [
				sgc_common_api_params::API_COMMON_PARAM_USERID => $this->auth->getUsername(),
				sgc_common_api_params::API_COMMON_PARAM_PASSWORD => $this->auth->getPassword(),
				sgc_common_api_params::API_COMMON_PARAM_OUTPUT_FORMAT => $this->user->getOutput()
			];
		}

		
		/**
		 * Change Password
		 * @return type
		 */
		function Change() {
			$this->data[sgc_user_password_api_params::API_USER_PASSWORD_PARAM_NEW_PASSWORD] = $this->user->getNewPassword();
			$this->data[sgc_user_password_api_params::API_USER_PASSWORD_PARAM_CONFIRM_PASSWORD] = $this->user->getConfirmPassword();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_PASSWORD_CHANGE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	