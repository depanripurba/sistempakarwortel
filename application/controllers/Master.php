<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Master extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
		if (!$this->session->userdata('username') || $this->session->userdata('role')!=='Admin') {
			redirect('auth');
		}
		// Load Model
		$this->load->model('Penyakit_model');
		$this->load->model('Gejala_model');
		$this->load->model('Pasien_model');
		$this->load->model('Basis_model');
	}


	public function index()
	{
		$data['aktif'] = 'home';
		$data['judul'] = 'Sistem Pakar Diagnosa Wortel - Dashboard';
		// NumRows
		$this->db->from('tbl_gejala');
		$data['gejala'] = $this->db->count_all_results();
		$this->db->from('tbl_penyakit');
		$data['penyakit'] = $this->db->count_all_results();
		$this->db->from('tbl_diagnosa');
		$data['pasien'] = $this->db->count_all_results();
		$this->db->from('tbl_basispengetahuan');
		$data['pengetahuan'] = $this->db->count_all_results();

		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template/footer');
		// }
	}

	public function datagejala()
	{
		$data['aktif'] = 'datagejala';
		$data['judul'] = 'Sistem Pakar Wortel - Data Gejala';
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datagejala',$data);
		$this->load->view('template/footer');
	}

	public function datapenyakit()
	{
		$data['penyakit'] = $this->Penyakit_model->getAllData();
		$data['aktif'] = 'datapenyakit';
		$data['judul'] = 'Data Penyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datapenyakit',$data);
		$this->load->view('template/footer');
	}
	public function basispengetahuan()
	{

		$data['aktif'] = 'basispengetahuan';
		$data['judul'] = 'Basis Pengetahuan';
		$data['basis'] = $this->Basis_model->getAllData();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/basispengetahuan',$data);
		$this->load->view('template/footer');
	}
	public function datapasien()
	{
		$data['aktif'] = 'home';
		$data['judul'] = 'Data Pengguna';
		$data['pasien'] = $this->Pasien_model->getAllData();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/datapasien',$data);
		$this->load->view('template/footer');
	}

	public function delete_pasien($id){
		$this->Pasien_model->deleteData($id);
		$this->session->set_flashdata('message', '
		<div class="alert alert-danger" role="alert">
			Anda Telah Menghapus Data Pasien
		</div>
		');
		redirect('/datapasien');
	}

	public function tambahdatagejala()
	{
		$data['kode'] = $this->Gejala_model->getcode();
		$data['aktif'] = 'datagejala';
		$data['judul'] = 'Form Tambah Data Gejala';
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahdatagejala',$data);
		$this->load->view('template/footer');
	}

	public function ubahdatagejala($id)
	{
		$data['aktif'] = 'datagejala';
		$data['judul'] = 'Form Ubah Data Gejala';
		$data['selected'] = $this->Gejala_model->selectGejala($id);
		// $data['kode_gejala'] = $this->Gejala_model->getNewGejala();
		
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formubahdatagejala',$data);
		$this->load->view('template/footer');
	}

	public function addGejala(){
		$data_to_insert = array(
			'kode_gejala' => $_POST['kode_gejala'],
			'nama_gejala' => $_POST['nama_gejala'],
		);

		$insertGejala = $this->Gejala_model->insertGejala($data_to_insert);

		if($insertGejala===null){
			redirect('/datagejala');
		}else{
			redirect('/tambahdatagejala');
		}
	}

	public function edtGejala(){
		$data_to_update=array(
			'nama_gejala' => $_POST['nama_gejala'],
		);

		$this->db->where('kode_gejala', $_POST['kode_gejala']);
		$update = $this->db->update('tbl_gejala', $data_to_update);

		if($update){
			redirect('/datagejala');
		}
	}

	public function deleteGejala($id){
		$this->Gejala_model->deleteGejala($id);
		redirect('/datagejala');
	}

	public function tambahdatapenyakit()
	{

		$data['aktif'] = 'datapenyakit';
		$data['judul'] = 'Form Tambah Data Penyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahdatapenyakit');
		$this->load->view('template/footer');
	}

	public function addpenyakit()
	{
		$kodepenyakit = $_POST['kode_penyakit'];
		$namapenyakit = $_POST['nama_penyakit'];
		$solusi = $_POST['solusi'];
		$tambahpenyakitbaru = $this->Penyakit_model->insertData($kodepenyakit, $namapenyakit, $solusi);
		if ($tambahpenyakitbaru) {
			$this->session->set_flashdata('berhasil', 'Data Penyakit '.$_POST['kode_penyakit'].' berhasil ditambahkan ke dalam database');
			redirect(base_url('datapenyakit'));
		}
	}

	public function editpenyakit($id)
	{
		$data['dataedit'] = $this->Penyakit_model->ambildata($id);
		$data['judul'] = 'Form Edit Penyakit';
		$data['aktif'] = 'datapenyakit';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/editpenyakit',$data);
		$this->load->view('template/footer');
	}

	public function posteditpenyakit()
	{
		$cek = $this->Penyakit_model->updatedata();
		if ($cek) {
			$this->session->set_flashdata('berhasil', 'Data Penyakit '.$_POST['kode_penyakit'].' berhasil di update');
			redirect(base_url('datapenyakit'));
		}
	}

	public function hapuspenyakit($kodepenyakit)
	{
		$cek = $this->Penyakit_model->hapusdata($kodepenyakit);
		if ($cek) {
			$this->session->set_flashdata('deleted', 'berhasil dihapus');
			redirect(base_url('datapenyakit'));
		}
	}

	public function tambahdatapengetahuan()
	{
		$data['penyakit'] = $this->Penyakit_model->getAllspes();
		$data['gejala'] = $this->Gejala_model->getAllspes();
		$data['judul'] = 'Form Add Basis Pengetahuan';
		$data['aktif'] = 'basispengetahuan';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/formtambahbasis',$data);
		$this->load->view('template/footer');
	}
	
	public function diagnosa(){
		$data['judul']='Diagnosa Pasien';
		$data['aktif']='home';
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('user/diagnosa',$data);
		$this->load->view('template/footer',$data);
	}	public function postpengetahuan()
	{

		$cek = $this->Basis_model->insertData($this->input->post('kode_gejala'),$this->input->post('kode_penyakit'),$this->input->post('nilai'));
		if ($cek) {
			$this->session->set_flashdata('berhasil', 'Basis pengetahuan berhasil di tambahkan');
			redirect(base_url('basispengetahuan'));
		}
	}
	public function editbasis($id)
	{
		$data['aktif'] = 'basispengetahuan';
		$data['judul'] = 'Edit Basis Pegetahuan';
		$data['id'] =$id;
		$data['basis'] = $this->Basis_model->selectBasis($id);
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('admin/editbasis',$data);
		$this->load->view('template/footer');
	}
	public function postupdatebasis()
	{
		$cek = $this->Basis_model->updatedata();
		if ($cek) {
			$this->session->set_flashdata('berhasil', 'Basis Pengetahuan Berhasil di update');
			redirect(base_url('basispengetahuan'));
		}
	}
	
	public function hapusbasis($id)
	{
		$cek = $this->Basis_model->hapusdata($id);
		if ($cek) {
			$this->session->set_flashdata('deleted', 'berhasil dihapus');
			redirect(base_url('basispengetahuan'));
		}
	}


}
