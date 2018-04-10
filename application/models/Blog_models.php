<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_models extends CI_Model {

	public function getAll()
	{
		$query = $this->db->get('berita');
		return $query->result_array();
	}
	public function insert($data) { 
         if ($this->db->insert("berita", $data)) { 
            return true; 
         } 
    }
    public function delete($id) { 
         if ($this->db->delete("berita", "id = ".$id)) { 
            return true; 
         } 
      } 
   
    public function update($data,$old_id) { 
         $this->db->set($data); 
         $this->db->where("id", $old_id); 
         $this->db->update("berita", $data); 
	}

	public function getOne($id){
	    	$query = $this->db->query("select * from berita where id='$id'");
			return $query->result_array();
	    }
}
