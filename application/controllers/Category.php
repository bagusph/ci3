<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller{
  public function __construct()
  {
    parent::__construct();

    // Load custom helper applications/helpers/MY_helper.php
    // Load semua model yang kita pakai
    $this->load->model('Blog_models');
    $this->load->model('Category_model');
  }

  public function index() 
  {

    // Judul Halaman
    $data['page_title'] = 'List Kategori';
    $this->load->model('Category_model');
    // Dapatkan semua kategori
    $data['categories'] = $this->Category_model->get_all_categories();
    $this->load->view('cat_view', $data);
  }

  public function create() 
  {
    // Judul Halaman
    $data['page_title'] = 'Buat Kategori Baru';
    // Kita butuh helper dan library berikut
    $this->load->helper('form');
    $this->load->library('form_validation');

    // Form validasi untuk Nama Kategori
    $this->form_validation->set_rules(
      'cat_name',
      'Nama Kategori',
      'required|is_unique[categories.cat_name]',
      array(
        'required' => 'Isi %s donk, males amat.',
        'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
      )
    );

    if($this->form_validation->run() === FALSE){
      $this->load->view('cat_create', $data);
    } else {
      $this->Category_model->create_category();
      redirect('category');
    }
  }

  // Menampilkan semua artikel dalam kategori yang dipilih
  public function artikel($id) 
  {

    // Menampilkan judul berdasar nama kategorinya
    $data['page_title'] = $this->Category_model->get_category_by_id($id)->cat_name;

    // Dapatkan semua artikel dalam kategori ini
    $data['all_artikel'] = $this->Blog_models->get_artikel_by_category($id);

    // Kita gunakan view yang sama pada controller Blog
    $this->load->view('blog_view_2', $data);
  }

  // Membuat fungsi edit
  public function edit($id)
  {
    $this->load->model('Category_model');
    $data['data'] = $this->Category_model->get_category_by_id($id);
    $this->load->view('cat_edit',$data);
  }
  public function edit_action($id)
  {
    $this->load->model('Category_model');
    $this->Category_model->update_category($this->input->post(),$id);
    redirect('Category','refresh');
  }

  public function delete($id)
  {
    $this->load->model('Category_model');
    $this->Category_model->delete_category($id);
    redirect('Category','refresh');
  }
}
