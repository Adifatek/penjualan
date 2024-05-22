<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Kategori_model extends CI_Model
{
	protected $_table ='kategori';	
	protected $primary = 'id';

	public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
	    
}
