<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}
	public function ambildata($kode)
	{
		$this->db->where('kode_penyakit', $kode);
		return $this->db->get('tbl_penyakit')->result();
	}

	public function selectPenyakit($id)
	{
		$selected = $this->db->get_where('tbl_penyakit', array('kode_penyakit' => $id))->row_array();
		return $selected;
	}

	// Function Get All Data
	public function getAllData()
	{
		$this->db->order_by('kode_penyakit', 'ASC');
		$data['penyakit'] = $this->db->get('tbl_penyakit')->result();
		return $data;
	}

	// Function Insert Data
	public function insertData($kodepenyakit, $namapenyakit, $solusi)
	{
		// Masukkan data ke dalam tabel database
		$data = array(
			'kode_penyakit' => $kodepenyakit,
			'nama_penyakit' => $namapenyakit,
			'solusi' => $solusi,
		);

		return $this->db->insert('tbl_penyakit', $data);
	}

	public function deleteData($kodepenyakit)
	{
		$this->db->where('kode_penyakit', $kodepenyakit);
		$this->db->delete('tbl_penyakit');
		return $this->db->affected_rows();
	}

	public function hapusdata($kodepenyakit)
	{
		// $this->db->delete('pengetahuan', array('kode_penyakit' => $kodepenyakit));
		return $this->db->delete('tbl_penyakit', array('kode_penyakit' => $kodepenyakit));
	}


	public function updatedata()
	{
		$data = array(
			'nama_penyakit' => $_POST['nama_penyakit'],
			'solusi' => $_POST['solusi'],
		);

		$this->db->where('kode_penyakit', $_POST['kode_penyakit']);
		return $this->db->update('tbl_penyakit', $data);
	}

	public function hitungtotal()
	{
		$query = $this->db->get('tbl_penyakit');
		return $query->num_rows();
	}
	public function getcode()
	{
		return $this->depalgoritma('P00');
	}
	private function depalgoritma($partone)
	{
		$datapenyakit = $this->db->get('tbl_penyakit');
		$result = count($datapenyakit->result());

		$bigkode = 0;
		if ($datapenyakit->result() != null) {
			$bigkode = $datapenyakit->result()[$result - 1]->kode_penyakit;
			$bigkode = substr($bigkode, 1) * 1;
		}
		$ceking = 1;
		$partend = "";
		$partone = $partone;
		foreach ($datapenyakit->result() as $value) {
			$substrak = substr($value->kode_penyakit, 1) * 1;
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
		if ($PANJANGKODE > 4) {
			$KODEKER = "P0" . $partend;
		}

		return $KODEKER;
	}
	public function getAllspes()
	{
		$this->db->order_by('kode_penyakit', 'ASC');
		return $this->db->get('tbl_penyakit')->result();
	}
}
