<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
  public function index() { 
         $this->load->model('Blog_models');
         $data['records'] = $this->Blog_models->getAll(); 
         $this->load->view('Blog_list',$data); 
      } 
  
      public function add_view() {
         $data['error'] = "";
         $this->load->view('blog_create',$data); 
      } 
     public function add_action() { 
      $this->load->model('Blog_models');
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 80000; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
         
         if ( ! $this->upload->do_upload('image_file')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('blog_create', $error); 
         }
         
         else { 
            $dataUpload = $this->upload->data(); 
            $data = array( 
                  'id' => $this->input->post('id'),
                  'author' => $this->input->post('author'),
                  'date' => $this->input->post('date'),
                  'title' => $this->input->post('title'),
                  'content' => $this->input->post('content'),
                  'image_file' => $dataUpload['file_name'] 
               ); 
               $this->Blog_models->insert($data);
            redirect('Blog'); 
      }
}
        public function byId($id){
       $this->load->model('Blog_models');
       $data['records'] = $this->Blog_models->getOne($id); 
         $this->load->view('blog_view',$data); 
    }
  }