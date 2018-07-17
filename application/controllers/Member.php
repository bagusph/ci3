<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	//konstruktor (statement yang selalu dipanggil pada setiap function)
	function __construct() {
		parent::__construct();
		//load model Penulis_m
		$this->load->model('Member_m');
		//load helper form
		$this->load->helper('form');	
	}

	/* index (fungsi yang akan berjalan jika tidak ada fungsi yang dipangggil)
	jika url = ".[]/penulis" maka fungsi index yang dijalankan */
	public function index()
	{
		/* mengisi $data['getData'] berupa data yang 
		terlah direturn pada fungsi getData() pada Penulis_m */
		$data['getData'] = $this->Member_m->getData();
		// memanggil view 'penulis/penulis.php' dan diberi variable $data
		$this->load->view('Member/member.php',$data);
	}

	public function tambah()
	{
		$data['message'] = "";
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('id','ID','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'penulis/tambah.php'
			$this->load->view('Member/tambah.php',$data); 
		}
		// jika kita sudah melalukan submit
		else{
			$upload = $this->Member_m->upload();
			if($upload['result'] == "success"){ // Jika proses upload sukses
				//memanggil fungsi insertData pada model
				$this->Member_m->insertData($upload['file']['file_name']);
				//redirect / pergi ke halaman 'penulis'
				redirect('Member');
			}else{ // Jika proses upload gagal
				$data['message'] = $upload['error'];
				$this->load->view('Member/tambah.php',$data); 
			}
		}
	}

	/*$id adalah parameter
	contoh penggunakan penulis/ubah/1 
	*/ 
	public function ubah($username)
	{
		$data['message'] = "";
		//load library form_validation
		$this->load->library("form_validation");
		/* aturan form validation 
		- parameter 1 ('id') = ditujukan pada input yang name="id"
		- parameter 2 ('ID') = untuk tampilan error
		- parameter 3 ('required') = rule nya (ada banyak rule buka di userguide)
		*/
		$this->form_validation->set_rules('username','Username','required');

		// intinya membuat warna error menjadi merah :D
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

		

		//memberikan data berisi data yang sesuai dengan $id
		$data['getData'] = $this->Member_m->getDataWhereId($username)[0];

		// if jika kita belum melakukan submit
		if($this->form_validation->run()==FALSE){
			//menampilkan view 'penulis/ubah.php'
			$this->load->view('Member/ubah',$data);
		}
		// jika kita sudah melalukan submit
		else{
			if ($_FILES['foto']['name'] == "")
			{
				//memanggil fungsi insertData pada model
				$this->Member_m->updateData($username);
			//redirect / pergi ke halaman 'penulis'
				redirect('member');
			}
			else
			{
				$upload = $this->Member_m->upload();
				if($upload['result'] == "success"){ 
					$this->Member_m->updateData($id,$upload['file']['file_name']);
					redirect('Member');
				}else{ 
					$data['error_upload'] = $upload['error'];
					$this->load->view('Member/ubah',$data);
				}
			}
		}
	}

	/*$id adalah parameter
	contoh penggunakan penulis/hapus/1 
	*/ 
	public function hapus($id)
	{
		//memanggil fungsi hapusData pada model
		$this->Member_m->hapusData($id);
		redirect('member');
	}
}
