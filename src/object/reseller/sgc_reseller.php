<?php

	namespace SGCSdk\object;

	defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_reseller {

		private $credit;
		private $comment;
		private $userLoginName;
		private $fromDate;
		private $toDate;
		private $userType;
		private $emailId;
		private $mobileNo;
		private $fullName;
		private $address;
		private $region;
		private $country;
		private $newPassword;
		private $notifyUser;
		private $city;
		private $output;

		/**
		 * Main Constructor
		 */
		function __construct() {
			
		}

		/**
		 * Credit
		 * @return type
		 */
		function getCredit() {
			return $this->credit;
		}

		/**
		 * Comment
		 * @return type
		 */
		function getComment() {
			return $this->comment;
		}

		/**
		 * LoginName
		 * @return type
		 */
		function getUserLoginName() {
			return $this->userLoginName;
		}

		/**
		 * FromDate
		 * @return type
		 */
		function getFromDate() {
			return $this->fromDate;
		}

		/**
		 * ToDate
		 * @return type
		 */
		function getToDate() {
			return $this->toDate;
		}

		/**
		 * UserType
		 * @return type
		 */
		function getUserType() {
			return $this->userType;
		}

		/**
		 * EmailId
		 * @return type
		 */
		function getEmailId() {
			return $this->emailId;
		}

		/**
		 * MobileNo
		 * @return type
		 */
		function getMobileNo() {
			return $this->mobileNo;
		}

		/**
		 * FullName
		 * @return type
		 */
		function getFullName() {
			return $this->fullName;
		}

		/**
		 * Address
		 * @return type
		 */
		function getAddress() {
			return $this->address;
		}

		/**
		 * Region
		 * @return type
		 */
		function getRegion() {
			return $this->region;
		}

		/**
		 * Country
		 * @return type
		 */
		function getCountry() {
			return $this->country;
		}

		/**
		 * NewPassword
		 * @return type
		 */
		function getNewPassword() {
			return $this->newPassword;
		}

		/**
		 * NotifyUser
		 * @return type
		 */
		function getNotifyUser() {
			return $this->notifyUser;
		}

		/**
		 * City
		 * @return type
		 */
		function getCity() {
			return $this->city;
		}

		/**
		 * Output
		 * @return type
		 */
		function getOutput() {
			return $this->output;
		}

		/**
		 * Set Credit
		 * @param type $credit
		 */
		function setCredit($credit) {
			$this->credit = $credit;
		}

		/**
		 * Set Comment
		 * @param type $comment
		 */
		function setComment($comment) {
			$this->comment = $comment;
		}

		/**
		 * Set UserLoginName
		 * @param type $userLoginName
		 */
		function setUserLoginName($userLoginName) {
			$this->userLoginName = $userLoginName;
		}

		/**
		 * Set FromDate
		 * @param type $fromDate
		 */
		function setFromDate($fromDate) {
			$this->fromDate = $fromDate;
		}

		/**
		 * Set ToDate
		 * @param type $toDate
		 */
		function setToDate($toDate) {
			$this->toDate = $toDate;
		}

		/**
		 * Set UserType
		 * @param type $userType
		 */
		function setUserType($userType) {
			$this->userType = $userType;
		}

		/**
		 * Set EmailId
		 * @param type $emailId
		 */
		function setEmailId($emailId) {
			$this->emailId = $emailId;
		}

		/**
		 * Set MobileNo
		 * @param type $mobileNo
		 */
		function setMobileNo($mobileNo) {
			$this->mobileNo = $mobileNo;
		}

		/**
		 * Set FullName
		 * @param type $fullName
		 */
		function setFullName($fullName) {
			$this->fullName = $fullName;
		}

		/**
		 * Set Address
		 * @param type $address
		 */
		function setAddress($address) {
			$this->address = $address;
		}

		/**
		 * Set Region
		 * @param type $region
		 */
		function setRegion($region) {
			$this->region = $region;
		}

		/**
		 * Set Country
		 * @param type $country
		 */
		function setCountry($country) {
			$this->country = $country;
		}

		/**
		 * Set NewPassword
		 * @param type $newPassword
		 */
		function setNewPassword($newPassword) {
			$this->newPassword = $newPassword;
		}

		/**
		 * Set NotifyUser
		 * @param type $notifyUser
		 */
		function setNotifyUser($notifyUser) {
			$this->notifyUser = $notifyUser;
		}

		/**
		 * Set City
		 * @param type $city
		 */
		function setCity($city) {
			$this->city = $city;
		}

		/**
		 * Set Output
		 * @param type $output
		 */
		function setOutput($output) {
			$this->output = $output;
		}

	}
	