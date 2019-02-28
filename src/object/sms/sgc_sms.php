<?php

	namespace SGCSdk\object;

defined('_SMSGATEWAYCENTRE_ACCESS') OR exit('Direct access to this location is not allowed.');

	/*	 * *******smsgatewaycentre******* * */

	class sgc_sms {

		private $text;
		private $date;
		private $fromDate;
		private $toDate;
		private $phone;
		private $msgType;
		private $scheduleTime;
		private $senderId;
		private $groupName;
		private $duplicateCheck;
		private $testMessage;
		private $file;
		private $output;
		private $uuId;

		/**
		 * Main Constructor
		 */
		function __construct() {
			
		}

		/**
		 * Text
		 * @return type
		 */
		function getText() {
			return $this->text;
		}

		/**
		 * Date
		 * @return type
		 */
		function getDate() {
			return $this->date;
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
		 * Phone
		 * @return type
		 */
		function getPhone() {
			return $this->phone;
		}

		/**
		 * MsgType
		 * @return type
		 */
		function getMsgType() {
			return $this->msgType;
		}

		/**
		 * ScheduleTime
		 * @return type
		 */
		function getScheduleTime() {
			return $this->scheduleTime;
		}

		/**
		 * SenderId
		 * @return type
		 */
		function getSenderId() {
			return $this->senderId;
		}

		/**
		 * GroupName
		 * @return type
		 */
		function getGroupName() {
			return $this->groupName;
		}

		/**
		 * DuplicateCheck
		 * @return type
		 */
		function getDuplicateCheck() {
			return $this->duplicateCheck;
		}

		/**
		 * TestMessage
		 * @return type
		 */
		function getTestMessage() {
			return $this->testMessage;
		}

		/**
		 * File
		 * @return type
		 */
		function getFile() {
			return $this->file;
		}

		/**
		 * Output
		 * @return type
		 */
		function getOutput() {
			return $this->output;
		}

		/**
		 * UuId
		 * @return type
		 */
		function getUuId() {
			return $this->uuId;
		}

		/**
		 * Set Text
		 * @param type $text
		 */
		function setText($text) {
			$this->text = $text;
		}

		/**
		 * Set Date
		 * @param type $date
		 */
		function setDate($date) {
			$this->date = $date;
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
		 * Set Phone
		 * @param type $phone
		 */
		function setPhone($phone) {
			$this->phone = $phone;
		}

		/**
		 * Set MsgType
		 * @param type $msgType
		 */
		function setMsgType($msgType) {
			$this->msgType = $msgType;
		}

		/**
		 * Set ScheduleTime
		 * @param type $scheduleTime
		 */
		function setScheduleTime($scheduleTime) {
			$this->scheduleTime = $scheduleTime;
		}

		/**
		 * Set SenderId
		 * @param type $senderId
		 */
		function setSenderId($senderId) {
			$this->senderId = $senderId;
		}

		/**
		 * Set GroupName
		 * @param type $groupName
		 */
		function setGroupName($groupName) {
			$this->groupName = $groupName;
		}

		/**
		 * Set DuplicateCheck
		 * @param type $duplicateCheck
		 */
		function setDuplicateCheck($duplicateCheck) {
			$this->duplicateCheck = $duplicateCheck;
		}

		/**
		 * Set TestMessage
		 * @param type $testMessage
		 */
		function setTestMessage($testMessage) {
			$this->testMessage = $testMessage;
		}

		/**
		 * Set File
		 * @param type $file
		 */
		function setFile($file) {
			$this->file = $file;
		}

		/**
		 * Set Output
		 * @param type $output
		 */
		function setOutput($output) {
			$this->output = $output;
		}

		/**
		 * Set UuId
		 * @param type $uuId
		 */
		function setUuId($uuId) {
			$this->uuId = $uuId;
		}

	}
	