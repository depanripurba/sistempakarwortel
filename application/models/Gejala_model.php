<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	// Function Get All Data
	public function getAllGejala()
	{
		// Query untuk mengambil semua data dari tabel
		$this->db->order_by("kode_gejala", "asc");
		$query = $this->db->get('tbl_gejala');
		// Mengembalikan hasil query dalam bentuk array
		return $query->result_array();
	}

	public function getNewGejala()
	{
		$this->db->order_by('kode_gejala', 'DESC');
		$query = $this->db->get('tbl_gejala', 1);
		return $query->row();
	}

	// Function Insert Data
	public function insertGejala($data)
	{
		// Masukkan data ke dalam tabel database
		$this->db->insert('tbl_gejala', $data);
	}

	public function selectGejala($id)
	{
		$selected = $this->db->get_where('tbl_gejala', array('kode_gejala' => $id))->row_array();
		return $selected;
	}

	public function deleteGejala($id)
	{
		$this->db->where('kode_gejala', $id);
		$this->db->delete('tbl_gejala');

		// Mengembalikan jumlah baris yang terpengaruh oleh operasi penghapusan
		return $this->db->affected_rows();
	}
	public function getcode()
	{
		return $this->depalgoritma('G0');
	}
	private function depalgoritma($partone)
	{
		$datagejala = $this->db->get('tbl_gejala');
		$result = count($datagejala->result());

		$bigkode = 0;
		if ($datagejala->result() != null) {
			$bigkode = $datagejala->result()[$result - 1]->kode_gejala;
			$bigkode = substr($bigkode, 1) * 1;
		}
		$ceking = 1;
		$partend = "";
		$partone = $partone;
		foreach ($datagejala->result() as $value) {
			$substrak = substr($value->kode_gejala, 1) * 1;
			if ($substrak === $ceking) {
			} else {
				$partend = $ceking;
				continue;
			}
			$ceking++;
		}
		if ($partend === "") {
			$partend = $bigkode + 1;
		}
		$KODEKER = $partone . $partend;
		$PANJANGKODE = strlen($KODEKER);
		if ($PANJANGKODE > 3) {
			$KODEKER = "G" . $partend;
		}

		return $KODEKER;
	}
	public function getAllspes()
	{
		$this->db->order_by('kode_gejala', 'ASC');
		return $this->db->get('tbl_gejala')->result();
	}

}
