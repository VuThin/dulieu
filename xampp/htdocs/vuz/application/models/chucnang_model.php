<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class chucnang_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function insertDanhMuc($tendanhmuc)
	{
		$dl = array( 'tendanhmuc' => $tendanhmuc );
		return $this->db->insert('tatcachucnang', $dl);
	}

}

/* End of file  */
/* Location: ./application/models/ */