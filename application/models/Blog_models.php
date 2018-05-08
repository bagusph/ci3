<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_models extends CI_Model {

	public function getAll($limit = FALSE, $offset = FALSE)
	{
        if ($limit){
            $this->db->limit($limit, $offset);
        }
        $this->db->order_by('berita.date', 'DESC');
        $query = $this->db->get('berita');
        return $query->result_array();

	}
  public function getAll2()
  {
    $query = $this->db->get('berita');
    return $query->result_array();
  }
    public function get_total()
    {
        return $this->db->count_all("berita");
    }
    public function getCategory()
    {
        return $this->db->get('categories')->result_array();
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
         public function get_artikel_by_id($id)
    {
         // Inner Join dengan table Categories
        $this->db->select ( '
            blogs.*, 
            categories.cat_id as category_id, 
            categories.cat_name,
            categories.cat_description,
        ' );
        $this->db->join('categories', 'categories.cat_id = blogs.fk_cat_id');

        $query = $this->db->get_where('blogs', array('blogs.post_id' => $id));
                    
        return $query->row();
    }
    public function get_artikel_by_category($category_id)
    {

        $this->db->order_by('blogs.post_id', 'DESC');

        $this->db->join('categories', 'categories.cat_id = blogs.fk_cat_id');
        $query = $this->db->get_where('blogs', array('cat_id' => $category_id));
  
        return $query->result();
    }
}
