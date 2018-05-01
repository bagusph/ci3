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

         $this->load->model('Blog_models');
         $this->load->helper(array('form','url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('id', 'Id', 'required');
      $this->form_validation->set_rules('author', 'Author', 'required');
      $this->form_validation->set_rules('date', 'Date', 'required');
      $this->form_validation->set_rules('title', 'Title', 'required');
      $this->form_validation->set_rules('content', 'Content', 'required');
      $data['getCategory'] = $this->Blog_models->getCategory();
      if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('blog_create',$data);
                }
                else
                {
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
              }else { 
            $dataUpload = $this->upload->data(); 
            $data = array( 
                  'id' => $this->input->post('id'),
                  'author' => $this->input->post('author'),
                  'date' => $this->input->post('date'),
                  'title' => $this->input->post('title'),
                  'content' => $this->input->post('content'),
                  'image_file' => $dataUpload['file_name'],
                  'fk_cat_id' => $this->input->post('fk_cat_id')
               );
               $this->Blog_models->insert($data);
            redirect('Blog'); 
      }      
                } 
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
                  'image_file' => $dataUpload['file_name'],
                  'fk_cat_id' => $this->input->post('fk_cat_id') 
               ); 
               $this->Blog_models->insert($data);
            redirect('Blog'); 
      }
}
      public function update_view($id) {
         $data['error'] = "";
         $this->load->model("Blog_models");
         $data['result'] = $this->Blog_models->getOne($id);
         $data['getCategory'] = $this->Blog_models->getCategory();
         $this->load->view('blog_update',$data); 
      } 
     public function update_action() { 
      $this->load->model('Blog_models');
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 80000; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
         $data['getCategory'] = $this->Blog_models->getCategory();
         if ( ! $this->upload->do_upload('image_file')) {
            $error = array('error' => $this->upload->display_errors()); 
            $this->load->view('blog_update', $error); 
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
            $condition = $this->input->post('id');
               $this->Blog_models->update($data, $condition);
               redirect('Blog');
      }
  }
      public function delete_view($id){
        $data['error'] = "";
        $this->load->model('Blog_models');
        $data['result'] = $this->Blog_models->getOne($id);
        $this->load->view('blog_delete');
      }
      public function delete_action($id){
        $this->load->model('Blog_models');
    //Function yang dipanggil ketika ingin melakukan delete produk dari database
        $this->Blog_models->delete($id); //Memanggil fungsi deleteProduct yang ada pada model products_model dan mengirimkan parameter yaitu productId yang akan di delete
        
        $this->load->view('blog_delete'); //redirect page ke halaman utama controller products
      }
    public function byId($id){
       $this->load->model('Blog_models');
       $data['records'] = $this->Blog_models->getOne($id); 
         $this->load->view('blog_view',$data); 
    }
  }