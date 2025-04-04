<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Load Model
		$this->load->model('Pasien_model');
		$this->load->model('Gejala_model');
	}

	public function index(){
		$data['judul']='SISTEM PAKAR WORTEL';
		$data['user']=$this->session->userdata();
		$data['aktif']='Dashboard Pasien';
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('user/home',$data);
		$this->load->view('template/footer',$data);

	}

	public function dashboard(){ 
		$data['judul']='SISTEM PAKAR DIAGNOSA ENDOKRIN - DASHBOARD USER';
		$data['aktif']='Dashboard Pasien';
		$data['user']=$this->session->userdata();
		$this->load->view('user/template/header',$data);
		$this->load->view('user/template/sidebar',$data);
		$this->load->view('user/dashboard',$data);
		$this->load->view('user/template/footer',$data);
	}

	public function info()
	{
		$data['judul']='SISTEM PAKAR DIAGNOSA ENDOKRIN - HOME';
		$this->load->view('user/info',$data);
	}

	public function diagnosa(){

		$data['judul']='Sistem Pakar Diagnosa Penyakit Wortel';
		$data['aktif']='Diagnosa Pasien';
		$data['user']=$this->session->userdata();
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header',$data);
		$this->load->view('template/sidebar',$data);
		$this->load->view('user/diagnosa',$data);
		$this->load->view('template/footer',$data);
	}

	public function login(){
		
		// Check Apakah ada yang login?
		if($this->session->userdata('username') && $this->session->userdata('role')==='Pasien')
		{
			redirect('user/dashboard');
		}

		$data['judul']='SP Teorema Bayes Endokrin - Register';
		$this->load->view('user/login',$data);
	}

	public function login_act(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Query User
		$login = $this->db->get_where('tbl_pasien', ['username' => $username])->row_array();

		// Check Data Login (Terdaftar / Tidak di dalam database)
		if ($login) {
			// Jika Terdaftar (Ada)
			// Check Password
			if (password_verify($password, $login['password'])) {
				// Jika Password Benar
				$data = [
					'username' => $login['username'],
					'fullname' => $login['fullname'],
					'alamat' => $login['alamat'],
					'role' => 'Pasien'
				];
				$this->session->set_userdata($data);
			redirect('user/dashboard');
			} else {
				// Jika Password Salah
				$this->session->set_flashdata('message', '
				<div class="alert alert-danger" role="alert">
				Password Salah
			  </div>
				');
				redirect('user/login');
			}
		} else {
			// Jika Tidak Terdaftar (Tidak Ada)
			$this->session->set_flashdata('message', '
			<div class="alert alert-danger" role="alert">
			Username Tidak Terdaftar
		  </div>
			');
			redirect('user/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('fullname');
		$this->session->unset_userdata('role');

		// Flash
		$this->session->set_flashdata('message', '
		<div class="alert alert-danger" role="alert">
		Anda Telah Log out, sesi berakhir
	  </div>
		');
		redirect('user/login');
	}

	public function register(){
		$data['judul']='SP Theorema Bayes Endokrin - Register';
		$this->load->view('user/register',$data);
	}

	public function register_act(){
		$data = $_POST;
		// Check Jika ada yang kosong
		if($data['fullname']==='' || $data['usia']==='' || $data['jenis_kelamin']==='' || $data['alamat']==='' || $data['username']==='' || $data['password']==='' )
		{
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning" role="alert">
					Tidak Boleh Ada Form Yang Kosong
				</div>
			');
			redirect('user/register');
		}

		// Check Apakah Ada Username yang Sama
		$username = $this->Pasien_model->selectDataUsername($data['username']);

		if($username){
		$this->session->set_flashdata('message', '
			<div class="alert alert-warning" role="alert">
				Username Telah Terdaftar
			</div>
		');
		redirect('user/register');
		}else{
			$data_to_register = [
				"username"=>$data['username'],
				"password"=>password_hash($data['password'], PASSWORD_DEFAULT),
				"fullname"=>$data['fullname'],
				"usia"=>$data['usia'],
				"jenis_kelamin"=>$data['jenis_kelamin'],
				"alamat"=>$data['alamat'],
			];
	
			$this->Pasien_model->insertData($data_to_register);
			$this->session->set_flashdata('message', '
				<div class="alert alert-success" role="alert">
					Akun Pasien Berhasil Di Daftarkan!
				</div>
			');
			redirect('user/login');
		}

	}

	public function cetakhasil()
	{
		$this->load->view('user/cetakhasil');
		
	}
}
