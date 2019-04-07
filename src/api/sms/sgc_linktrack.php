<?php

	namespace SGCSdk\api\sms;

defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	use SGCSdk\object\sgc_auth;
	use SGCSdk\config\sgc_common_api_params;
	use SGCSdk\config\sgc_sms_linktrack_api_params;
	use SGCSdk\lib\sgc_callapi;
	use SGCSdk\config\sgc_constant;
	use SGCSdk\object\sgc_sms;

	class sgc_linktrack {

		private $auth;
		private $sms;
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
		function __construct(sgc_auth $auth, sgc_sms $sms) {
			$this->auth = $auth;
			$this->sms = $sms;
			$this->header = [
				sgc_common_api_params::API_COMMON_PARAM_API_KEY => $this->auth->getApiKey(),
				sgc_common_api_params::API_COMMON_PARAM_ADMIN_KEY => $this->auth->getAdminKey()
			];

			$this->data = [
				sgc_common_api_params::API_COMMON_PARAM_USERID => $this->auth->getUsername(),
				sgc_common_api_params::API_COMMON_PARAM_PASSWORD => $this->auth->getPassword(),
				sgc_common_api_params::API_COMMON_PARAM_OUTPUT_FORMAT => $this->sms->getOutput()
			];
		}

		/**
		 * Read SenderId
		 * @return type
		 */
		function Create() {
			$Array = array();
			foreach ($this->data as $name => $contents) {
				array_push($Array, array("name" => $name, "contents" => $contents));
			}

			array_push($Array, array("name" => sgc_sms_linktrack_api_params::API_SMS_LINKTRACK_PARAM_IDENTIFIER, "contents" => $this->sms->getIdentifer()));
			array_push($Array, array("name" => sgc_sms_linktrack_api_params::API_SMS_LINKTRACK_PARAM_LONG_URL, "contents" => $this->sms->getLongUrl()));
			array_push($Array, array("name" => sgc_sms_linktrack_api_params::API_SMS_LINKTRACK_PARAM_TYPE, "contents" => $this->sms->getType()));
			if ($this->sms->getAttachment() != "") {
				array_push($Array, array("name" => sgc_sms_linktrack_api_params::API_SMS_LINKTRACK_PARAM_ATTACHMENT, "contents" => fopen($this->sms->getAttachment(), 'r')));
			}
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_LINKTRACK_CREATE, $Array, $this->header, sgc_common_api_params::API_COMMON_METHOD_FILE, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Read SenderId
		 * @return type
		 */
		function Read() {
			$this->data[sgc_sms_linktrack_api_params::API_SMS_LINKTRACK_PARAM_LINK_ID] = $this->sms->getId();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_LINKTRACK_READ, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

		/**
		 * Delete SenderId
		 * @return type
		 */
		function Delete() {
			$this->data[sgc_sms_linktrack_api_params::API_SMS_LINKTRACK_PARAM_LINK_ID] = $this->sms->getId();
			$response = new sgc_callapi(sgc_constant::SGC_API, sgc_constant::SGC_ENDPOINT_LINKTRACK_DELETE, $this->data, $this->header, sgc_common_api_params::API_COMMON_METHOD_POST, $this->useRestApi);
			return $response->getResponse();
		}

	}
	