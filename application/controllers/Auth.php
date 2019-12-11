<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        if($this->session->userdata('akses')){
            redirect('kontrol');
        }

        $this->form_validation->set_rules('username', 'Username', 'trim|required', [
            'required' => 'NIM/NIP harus diisi!'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password harus diisi!'
        ]);
        $this->form_validation->set_rules('akses', 'Akses', 'required', [
            'required' => 'Pilih akses!'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = "Login Surat FTI";
            $this->load->view('auth/login', $data);
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $akses = $this->input->post('akses');


        if ($akses == 1) {
            $user = $this->db->get_where('mahasiswa', ['nim' => $username])->row_array();

            if ($user) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'nim' => $user['nim'],
                        'akses' => $akses,
                    ];
                    $this->session->set_userdata($data);
                    redirect('kontrol');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Salah</div>');
                    redirect('auth');
                }

            } else {
                // jika user tidak ketemu
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Kombinasi Username, Password, dan Role Salah</div>');
                redirect('auth');
            }
        } elseif ($akses == 2) {
            $user = $this->db->get_where('pegawai', ['nip' => $username])->row_array();
            if ($user) {
                // cek password
                if (password_verify($password, $user['password'])) {
                    $cekakses = $this->db->get_where('jurusan', ['nip' => $username])->row_array();
                    if ($cekakses) {
                        $data = [
                            'nip' => $user['nip'],
                            'jur' => $cekakses['nama_instansi'],
                            'id_jur' => $cekakses['id'],
                            'akses' => $akses,
                        ];
                        $this->session->set_userdata($data);
                        redirect('kontrol');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger">Kombinasi Username, Password, dan Role Salah</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Salah</div>');
                    redirect('auth');
                }
            } else {
                // jika user tidak ketemu
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Kombinasi Username, Password, dan Role Salah</div>');
                redirect('auth');
            }
        }
    }

    public function logout()
    {
        if ($this->session->userdata('akses') == 1) {
            $this->session->unset_userdata('nim');
        } elseif ($this->session->userdata('akses') == 2) {
            $this->session->unset_userdata('nip');
        }

        $this->session->unset_userdata('akses');

        $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil logout!</div>');
        redirect('auth');
    }

    public function convert(){
        $s = $this->db->get('mahasiswa')->result_array();
        $pwd = $s[1]['password'];
        echo decode($pwd);
    }
}
