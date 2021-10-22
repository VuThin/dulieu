<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class chucnang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{

	}

	public function tatcachucnang()
	{
		$this->load->view('chucnang_view');
	}

	public function adddata()
	{
		$tendanhmuc = $this->input->post('tendanhmuc');
		$this->load->model('chucnang_model');
		if ($this->chucnang_model->insertDanhMuc($tendanhmuc))
		{
			$this->load->view('thanhcong');
		}
		else 
		{
			$this->load->view('thatbai');
		}
	}
}
