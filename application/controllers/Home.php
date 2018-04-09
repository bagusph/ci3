<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index(){
		$this->load->model('Biodata');
		$data["Biodata_array"] = $this->Biodata->getBiodataQueryArray();
		$data["Biodata_object"] = $this->Biodata->getBiodataQueryObject();
		$data["Biodatabuilder_array"] = $this->Biodata->getBiodataBuilderArray();
		$data["Biodatabuilder_object"] = $this->Biodata->getBiodataBuilderObject();
		$this->load->view('home', $data);
	}
	public function indexblogviews(){
		$this->load->model('Berita');
		$data[""] = $this->Biodata->getBiodataQueryArray();
		$data["Biodata_object"] = $this->Biodata->getBiodataQueryObject();
		$data["Biodatabuilder_array"] = $this->Biodata->getBiodataBuilderArray();
		$data["Biodatabuilder_object"] = $this->Biodata->getBiodataBuilderObject();
		$this->load->view('home', $data);
	}
	public function view()
	{
		$this->load->view('Home');
	}
	public function biodata($nama=null)
	{
		echo $nama;
	}
}
