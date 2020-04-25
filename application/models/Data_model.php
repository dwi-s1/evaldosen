<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_model extends CI_Model
{

	function tampil_data(){
		return $this->db->get('form');
    }
    
}
