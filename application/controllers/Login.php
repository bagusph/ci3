<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function proses_login()
	{
		$this->load->model('Login_model');
		$username = $this->input->post('username');
		$validasi = $this->Login_model->validasi_login('admin','admin');
		if($validasi){
			$data = array(
				'username' => $username,
				"level" => $this->Login_model->getRole($username)
			);
			/* Ini yang Tambah fitur user level pak*/
			$this->session->set_userdata('login',$data);
			if($data['level'] == '1')
				redirect('Home','refresh');
			else if($data['level'] == '2')
				redirect('Home','refresh');
			else
				redirect('login','refresh');
		}

	}
	public function coba()
	{
		$this->load->model('Login_model');
		var_dump($this->Login_model->getRole('admin'));
	}
	public function logout()
	{
		$this->session->unset_userdata('login');
		redirect('Home_login','refresh');
	}
	public function proses_signup()
	{
		$this->load->model('Login_model');
		$this->Login_model->signup($this->input->post('username'),$this->input->post('password'));
		redirect('Home_login');
	}
}
