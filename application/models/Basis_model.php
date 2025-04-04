<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Basis_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}


	// Function Get All Data
	public function getAllData()
	{
		$this->db->order_by('id', 'ASC');
		$data = $this->db->get('tbl_basispengetahuan')->result();
		return $data;
	}
	public function selectBasis($id)
	{
		$selected = $this->db->get_where('tbl_basispengetahuan', array('id' => $id))->row_array();
		return $selected;
	}

	// Function Insert Data
	public function insertData($kodegejala,$kodepenyakit, $nilai)
	{
		// Masukkan data ke dalam tabel database
		$namagejala = $this->Gejala_model->selectGejala($kodegejala)['nama_gejala'];
		$namapenyakit = $this->Penyakit_model->selectPenyakit($kodepenyakit)['nama_penyakit'];
		$data = array(
			'kode_gejala' => $kodegejala,
			'nama_gejala'=>$namagejala,
            'kode_penyakit'=> $kodepenyakit,
			'nama_penyakit'=>$namapenyakit,
			'nilai' => $nilai,
		);

		return $this->db->insert('tbl_basispengetahuan', $data);
	}

	public function hapusdata($id)
	{
		// $this->db->delete('pengetahuan', array('kode_penyakit' => $kodepenyakit));
		return $this->db->delete('tbl_basispengetahuan', array('id' => $id));
	}


	public function updatedata()
	{
		$data = array(
			'nilai' => $_POST['nilai'],
		);
		$this->db->where('id', $_POST['id']);
		return $this->db->update('tbl_basispengetahuan', $data);
	}

	
	
	
}
