<?php
defined('BASEPATH') OR exit('No direct script acces allowed');

class Biodata extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function getBiodataQueryArray(){
		$query = $this->db->query("select * from Biodata");
		return $query->result_array();
	}
	public function getBiodataQueryObject(){
		$query = $this->db->query("select * from Biodata");
		return $query->result();
	}
	public function getBiodataBuilderArray(){
		$query = $this->db->query("select * from Biodata");
		return $query->result_array();
	}
	public function getBiodataBuilderObject(){
		$query = $this->db->query("select * from Biodata");
		return $query->result();
	}
}
?>