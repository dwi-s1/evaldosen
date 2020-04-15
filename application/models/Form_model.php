<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_model extends CI_Model
{
	public function tampil_semester()
	{
		$query = $this->db->get('semester');
		return $query;
    }
    
    public function tampil_dosen()
	{
		$query = $this->db->get('dosen');
		return $query;
    }
    
    public function tampil_matkul()
	{
		$query = $this->db->get('matkul');
		return $query;
    }
    
    public function tampil_nilai()
	{
		$query = $this->db->get('nilai');
		return $query;
	}

	public function isiform()
	{
		// User data array
		$data = array(
		 'id_mhs' => $this->input->post('nim'),
		 'nama' => $this->input->post('nama'),
		 'smt' => $this->input->post('smt'),
		 'dosen' => $this->input->post('dosen'),
		 'matkul' => $this->input->post('matkul'),
		 'total_nilai' => $this->input->post('totalnilai'),
		 'teks' => $this->input->post('message')
		);
	 
		// Insert user
		return $this->db->insert('form', $data);
	   }

}