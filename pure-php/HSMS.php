<?php

	class HSMS {

		private $id;
		private $desc;
		private $number;
		private $price;
		private $organisation;
		private $web;
		private $priority;
		private $remark;

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
		}

		public function getDesc() {
			return $this->desc;
		}

		public function setDesc($desc) {
			$this->desc = $desc;
		}

		public function getNumber() {
			return $this->number;
		}

		public function setNumber($number) {
			$this->number = $number;
		}

		public function getPrice() {
			return $this->price;
		}

		public function setPrice($price) {
			$this->price = $price;
		}

		public function getOrganisation() {
			return $this->organisation;
		}

		public function setOrganisation($organisation) {
			$this->organisation = $organisation;
		}

		public function getWeb() {
			return $this->web;
		}

		public function setWeb($web) {
			$this->web = $web;
		}

		public function getPriority() {
			return $this->priority;
		}

		public function setPriority($priority) {
			$this->priority = $priority;
		}

		public function getRemark() {
			return $this->remark;
		}

		public function setRemark($remark) {
			$this->remark = $remark;
		}
	}

?>