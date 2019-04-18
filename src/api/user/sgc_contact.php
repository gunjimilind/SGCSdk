<?php

	namespace SGCSdk\api\user;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SGCSdk\object\sgc_auth;
	use SGCSdk\config\sgc_common_api_params;
	use SGCSdk\config\sgc_user_contact_api_params;
	use SGCSdk\lib\sgc_callapi;
	use SGCSdk\config\sgc_constant;
	use SGCSdk\object\sgc_user;

	class sgc_contact {

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
		 * Create Contact
		 * @return type
		 */
		function Create() {
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_GROUP_NAME] = $this->user->getGroupName();
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_GROUP_ID] = $this->user->getGroupId();
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_CONTACT_NAME] = $this->user->getContactName();
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_MOBILE_NO] = $this->user->getMobileNo();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_CONTACT_CREATE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Read Contact
		 * @return type
		 */
		function Read() {
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_GROUP_NAME] = $this->user->getGroupName();
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_GROUP_ID] = $this->user->getGroupId();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_CONTACT_READ, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_GET, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Update Contact
		 * @return type
		 */
		function Update() {
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_GROUP_NAME] = $this->user->getGroupName();
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_GROUP_ID] = $this->user->getGroupId();
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_CONTACT_NAME] = $this->user->getContactName();
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_MOBILE_NO] = $this->user->getMobileNo();
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_CONTACT_ID] = $this->user->getContactId();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_CONTACT_UPDATE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Delete Contact
		 * @return type
		 */
		function Delete() {
			$this->data[sgc_user_contact_api_params::API_USER_CONTACT_PARAM_CONTACT_ID] = $this->user->getContactId();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_CONTACT_DELETE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	