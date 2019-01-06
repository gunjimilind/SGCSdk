<?php

	namespace SGCSdk\object;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_auth {

		private $username;
		private $password;
		private $apiKey;
		private $adminKey;

		/**
		 * Main Constructor
		 */
		function __construct() {
			
		}

		/**
		 * Username
		 * @return type
		 */
		function getUsername() {
			return $this->username;
		}

		/**
		 * Password
		 * @return type
		 */
		function getPassword() {
			return $this->password;
		}

		/**
		 * ApiKey
		 * @return type
		 */
		function getApiKey() {
			return $this->apiKey;
		}
		
		/**
		 * AdminKey
		 * @return type
		 */
		function getAdminKey() {
			return $this->adminKey;
		}

		/**
		 * Set UserName
		 * @param type $username
		 */
		function setUsername($username) {
			$this->username = $username;
		}

		/**
		 * Set Password
		 * @param type $password
		 */
		function setPassword($password) {
			$this->password = $password;
		}

		/**
		 * Set ApiKey
		 * @param type $apiKey
		 */
		function setApiKey($apiKey) {
			$this->apiKey = $apiKey;
		}
		
		/**
		 * Set AdminKey
		 * @param type $AdminKey
		 */
		function setAdminKey($adminKey) {
			$this->adminKey = $adminKey;
		}

	}
	