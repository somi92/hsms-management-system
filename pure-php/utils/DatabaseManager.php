<?php

	public class DatabaseManager {

		private $connection;
		private $db_host;
		private $db_user;
		private $db_password;

		public function __construct() {
			$this->connection = null;
		}

		// public function __construct($db_host, $db_host, $db_password) {
		// 	$this->connection = null;
		// 	$this->db_host = $db_host;
		// 	$this->db_user = $db_user;
		// 	$this->db_password = $db_password;
		// }

		public function setDatabaseHost($db_host) {
			$this->db_host = $db_host;
		}

		public function setDatabaseUser($db_user) {
			$this->db_user = $db_user;
		}

		public function setDatabasePassword($db_password) {
			$this->db_password = $db_password;
		}

		public function open() {
			
		}

		public function close() {

		}

		public function query($query) {
			
		}
	}

?>