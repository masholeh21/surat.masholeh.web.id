<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontrol extends CI_Controller
{
    // private $api_key = '4d4352ac5641cab3b8d309df2be5017b';

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
        $this->load->library('pdf');
        $this->load->library('Spreadsheet_Excel_Reader');
        $this->load->helper('file');
        $this->curl = curl_init();
    }

    public function index()
    {
        $data['title'] = "Home";
        $data['akses'] = $this->session->userdata('akses');

        if ($data['akses'] == 1) {
            $data['user'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_page', $data);
            $this->load->view('templates/navigasi', $data);
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('templates/footer');
        } elseif ($data['akses'] == 2) {
            $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
            $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_page', $data);
            $this->load->view('templates/navigasi', $data);
            $this->load->view('pegawai/index', $data);
            $this->load->view('templates/footer');
        }
    }

    public function profil()
    {
        $data['title'] = "My Profile";
        $akses = $data['akses'] = $this->session->userdata('akses');

        if($akses == 1){
            $data['user'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row_array();
        }else{
            $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
            $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();
        }


        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('profil', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_profil()
    {
        $id  = $this->input->post('id');
        $tgl = $this->input->post('tanggal_lahir');
        $nama = $this->input->post('nama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = substr($tgl, 6, 4) . '-' . substr($tgl, 0, 2) . '-' . substr($tgl, 3, 2);
        $pwd_lama = $this->input->post('pwd_lama');
        $pwd_baru = $this->input->post('pwd_baru');
        $pwd_confirm = $this->input->post('pwd_confirm');
        $akses = $this->input->post('akses');

        if ($akses == 1) {
            if ($pwd_baru != '') {
                if ($pwd_baru == $pwd_confirm) {
                    $data = array(
                        'nama' => $nama,
                        'tempat_lahir' => $tempat_lahir,
                        'tanggal_lahir' => $tanggal_lahir,
                    );

                    $this->db->set(xss_clean($data), true);
                    $this->db->set('password', password_hash(xss_clean($pwd_confirm), PASSWORD_BCRYPT));
                    $this->db->where('nim', $id, true);
                    $this->db->update('mahasiswa');

                    $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diubah.</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Password tidak sesuai, silahkan cek apakah password lama salah atau kombinasi password baru tidak sesuai.</div>');
                }
            } else {
                $data = array(
                    'nama' => $nama,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                );

                $this->db->set(xss_clean($data), true);
                $this->db->where('nim', $id);
                $this->db->update('mahasiswa');

                $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diubah.</div>');
            }
        } else {
            if ($pwd_baru != '') {
                if ($pwd_baru == $pwd_confirm) {
                    $this->db->set('password', password_hash(xss_clean($pwd_confirm), PASSWORD_BCRYPT));
                    $this->db->where('nip', $id, true);
                    $this->db->update('pegawai');

                    $this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diubah.</div>');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Password tidak sesuai, silahkan cek apakah password lama salah atau kombinasi password baru tidak sesuai.</div>');
                }
            }
        }

        redirect('kontrol/profil');
    }

    public function pesan_surat1()
    {
        $data['title'] = "Pesan Surat";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('mahasiswa/pesansurat1', $data);
        $this->load->view('templates/footer', $data);
    }

    public function pesan_surat2()
    {
        $data['title'] = "Pesan Surat";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row_array();

        $this->db->from('dosen');
        $this->db->order_by("nama", "asc");
        $data['dosen'] = $this->db->get()->result_array();

        $this->db->from('dosen');
        $this->db->order_by("nama", "asc");
        $data['dosen2'] = $this->db->get()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('mahasiswa/pesansurat2', $data);
        $this->load->view('templates/footer', $data);
    }

    public function pesan_surat()
    {
        $jenis_surat = $this->input->post('jenis_surat');
        $nama = $this->input->post('nama');
        $nim = $this->input->post('nim');
        $email = $this->input->post('email');
        $jurusan = $this->input->post('jurusan');
        $fakultas = $this->input->post('fakultas');
        $tgl_pesan = date("Y-m-d");
            // var_dump($this->db->set('id_jenis_surat',$jenis_surat,true));die;

        if ($jenis_surat == 1) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'kedubes' => ' ',
                'no_paspor' => ' ',
                'smst_jln' => $this->input->post('smst_jln'),
                'alamat' => $this->input->post('alamat1'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'alamat' => $this->input->post('alamat')
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);

        } elseif ($jenis_surat == 2) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 3) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'kedubes' => ' ',
                'no_paspor' => ' ',
                'no_ijazah' => $this->input->post('no_ijazah'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'tgl_ijazah' => $this->input->post('tgl_ijazah'),
                'dikirim' => $this->input->post('dikirim1'),
                'kirim_alamat' => $this->input->post('kirim_alamat'),
                'kirim_kabupaten' => $this->input->post('kirim_kabupaten'),
                'kirim_provinsi' => $this->input->post('kirim_provinsi')
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 4 || $jenis_surat == 5) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('bahan'),
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 6 || $jenis_surat == 7) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('maksud'),
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 8) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'subyek' => $this->input->post('subyek'),
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('maksud'),
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 9) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'subyek' => $this->input->post('subyek'),
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('maksud'),
                'lokasi' => $this->input->post('lokasi'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 10 || $jenis_surat == 11) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('maksud'),
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 12) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 13) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'nama_ortu' => $this->input->post('nama_ortu'),
                'alamat' => $this->input->post('alamat_rumah'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'nip' => $this->input->post('nip'),
                'instansi' => $this->input->post('instansi'),
                'pangkat' => $this->input->post('pangkat'),
                'smst_jln' => $this->input->post('smst_jln'),
                'maksud' => $this->input->post('keperluan'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 14) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'alamat' => $this->input->post('pelaksanaan'),
                'maksud' => $this->input->post('maksud'),
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 15) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'smst_jln' => $this->input->post('smst_jln'),
                'alamat' => $this->input->post('alamat'),
            );
            $this->db->insert('surat',xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 16) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 17) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'subyek' => $this->input->post('subyek'),
                'maksud' => $this->input->post('maksud'),
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
                'pembimbing1' => $this->input->post('pembimbing1'),
            );
            $this->db->insert('surat', xss_clean($data1), true);
            $last_insert_id = $this->db->insert_id();

            if ($this->input->post('perijinan1') == "grup") {
                $data2 = array(
                    'id_ITMK' => ' ',
                    'id_surat' => $last_insert_id,
                    'id_jenis_surat' => $jenis_surat,
                    'mhs1' => $this->input->post('mhs1'),
                    'mhs2' => $this->input->post('mhs2'),
                    'mhs3' => $this->input->post('mhs3'),
                    'mhs4' => $this->input->post('mhs4'),
                    'mhs5' => $this->input->post('mhs5'),
                    'mhs6' => $this->input->post('mhs6'),
                    'mhs7' => $this->input->post('mhs7'),
                    'mhs8' => $this->input->post('mhs8'),
                    'mhs9' => $this->input->post('mhs9'),
                    'mhs10' => $this->input->post('mhs10'),
                    'nim1' => $this->input->post('nim1'),
                    'nim2' => $this->input->post('nim2'),
                    'nim3' => $this->input->post('nim3'),
                    'nim4' => $this->input->post('nim4'),
                    'nim5' => $this->input->post('nim5'),
                    'nim6' => $this->input->post('nim6'),
                    'nim7' => $this->input->post('nim7'),
                    'nim8' => $this->input->post('nim8'),
                    'nim9' => $this->input->post('nim9'),
                    'nim10' => $this->input->post('nim10'),
                );
                $this->db->insert('itmk', xss_clean($data2), true);
            }

            $nim = $this->input->post('nim', true);
            $data3 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data3), true);
        } elseif ($jenis_surat == 18) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
            );
            $this->db->insert('surat', xss_clean($data1), true);
            $last_insert_id = $this->db->insert_id();

            $data2 = array(
                'id_ITMK' => ' ',
                'id_surat' => $last_insert_id,
                'id_jenis_surat' => $jenis_surat,
                'mhs1' => $this->input->post('mhs1'),
                'nim1' => $this->input->post('nim1'),
            );
            $this->db->insert('itmk', xss_clean($data2), true);

            $nim = $this->input->post('nim', true);
            $data3 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data3), true);
        } elseif ($jenis_surat == 19) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
                'maksud' => $this->input->post('maksud'),
            );
            $this->db->insert('surat', xss_clean($data1), true);
            $last_insert_id = $this->db->insert_id();

            $data2 = array(
                'id_ITMK' => ' ',
                'id_surat' => $last_insert_id,
                'id_jenis_surat' => $jenis_surat,
                'mhs1' => $this->input->post('mhs1'),
                'nim1' => $this->input->post('nim1'),
            );
            $this->db->insert('itmk', xss_clean($data2), true);

            $nim = $this->input->post('nim', true);
            $data3 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data3), true);
        } elseif ($jenis_surat == 20) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'judul' => $this->input->post('nama_praktikum'),
                'smst_jln' => $this->input->post('smst_jln'),
                'subyek' => $this->input->post('subyek'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        } elseif ($jenis_surat == 21) {
            $data1 = array(
                'id_surat' => ' ',
                'id_jenis_surat' => $jenis_surat,
                'nim1' => $this->input->post('nim'),
                'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
                'judul' => $this->input->post('judul'),
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim, true);
            $this->db->update('mahasiswa', xss_clean($data2), true);
        }
        redirect('kontrol/sejarahpesan');
    }

    public function sejarahpesan()
    {
        $data['title'] = "Sejarah Pesan";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row_array();
        $nim1 = $this->session->userdata('nim');

        $this->db->select('surat.*, jenis_surat.*, mahasiswa.*');
        $this->db->from('surat, jenis_surat, mahasiswa');
        $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
        $this->db->where('surat.nim1 = mahasiswa.nim');
        $this->db->where('surat.nim1', $nim1, true);
        $this->db->order_by('surat.id_surat', 'desc');
        $data['surat'] = $this->db->get()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('mahasiswa/sejarahpesan', $data);
        $this->load->view('templates/footer', $data);
    }

    public function hapuskeranjang()
    {
        $id_surat = $this->input->post('id_surat');

        $this->db->where('id_surat', $id_surat, true);
        $this->db->delete('surat');

        redirect('kontrol/sejarahpesan');
    }

    public function v_upload_ijazah()
    {
        $data['title'] = "Upload Ijazah";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('mahasiswa/upload_scan_ijazah');
        $this->load->view('templates/footer', $data);
    }

    public function upload_ijazah($id)
    {
        $upload_image = $_FILES['files']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'pdf|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './application/views/scan/ijazah/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('files')) {
                $new_image = xss_clean($this->upload->data('file_name'));
                $data = array('scan' => $new_image);

                $this->db->where('id_surat', $id, true);
                $this->db->update('surat', xss_clean($data), true);
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">' . $this->upload->display_errors() . '</div>');
                redirect('kontrol/v_upload_ijazah/' . $id);
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil mengunggah scan ijazah.</div>');
            redirect('kontrol/sejarahpesan');
        }
    }

    public function v_upload_bayar()
    {
        $data['title'] = "Upload Bukti Bayar";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('mahasiswa/upload_scan_bayar');
        $this->load->view('templates/footer');
    }

    public function upload_bayar($id)
    {
        $upload_image = $_FILES['files']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = '2048';
            $config['upload_path'] = './application/views/scan/bukti_bayar/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('files')) {
                $new_image = xss_clean($this->upload->data('file_name'));
                $data = array('scan_bayar' => $new_image);

                $this->db->where('id_surat', $id, true);
                $this->db->update('surat', xss_clean($data));
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">' . $this->upload->display_errors() . '</div>');
                redirect('kontrol/v_upload_bayar/' . $id);
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil mengunggah scan bukti bayar.</div>');
            redirect('kontrol/sejarahpesan');
        }
    }

    public function sejarahpermhs($nim)
    {
        $data['title'] = 'Sejarah Pesan';
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->db->select('surat.*, jenis_surat.*, mahasiswa.*');
        $this->db->from('surat, jenis_surat, mahasiswa');
        $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
        $this->db->where('surat.nim1 = mahasiswa.nim');
        $this->db->where('mahasiswa.nim', $nim, true);
        $data['rekap'] = $this->db->get()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/sejarahpermahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_pesanan($id)
    {
        $data['title'] = 'Rekap Pemesanan Pesan';
        $data['akses'] = $this->session->userdata('akses');
        $data['user']  = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->db->from('dosen');
        $this->db->order_by("nama", "asc");
        $data['dosen'] = $this->db->get()->result_array();

        $this->db->select('surat.*,surat.alamat as alamat_surat, mahasiswa.*');
        $this->db->from('surat, mahasiswa');
        $this->db->where('surat.id_surat ='.$id);
        $this->db->where('surat.nim1 = mahasiswa.nim');
        $data['s'] = $this->db->get()->row_array();

        $this->db->select('surat.*, itmk.*');
        $this->db->from('surat, itmk');
        $this->db->where('surat.id_surat =' . $id);
        $this->db->where('surat.id_surat = itmk.id_surat');
        $data['v'] = $this->db->get()->row_array();

        $this->db->select('dosen.*, surat.*');
        $this->db->from('dosen, surat');
        $this->db->where('surat.id_surat ='.$id);
        $this->db->where('dosen.nip',$data['s']['pembimbing1']);
        $data['dosbing1'] = $this->db->get()->row_array();

        $this->db->select('dosen.*, surat.*');
        $this->db->from('dosen, surat');
        $this->db->where('surat.id_surat ='.$id);
        $this->db->where('dosen.nip',$data['s']['pembimbing2']);
        $data['dosbing2'] = $this->db->get()->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/lihat_pesanan', $data);
        $this->load->view('templates/footer');
    }

    public function lihat_ijazah($file)
    {
        $path = 'application/views/scan/ijazah/'.$file;
        header('Content-Length: '.filesize($path));
        header("Content-type: application/pdf");
        header("Content-disposition: inline; filename=$file");
        readfile($path);
    }

    public function lihat_bukti_bayar($file)
    {
        $path = 'application/views/scan/bukti_bayar/'.$file;
        header('Content-Length: '.filesize($path));
        header("Content-type: application/pdf");
        header("Content-disposition: inline; filename=$file");
        readfile($path);
    }

    public function getSurat($idJnsSurat)
    {
        $jurusan = $this->session->userdata('jur', true);
        if($jurusan == "Koordinator Lab Statistika"){
            $jur = "Statistika";
        }elseif($jurusan == "Koordinator Lab Farmasi"){
            $jur = "Farmasi";
        }elseif($jurusan == "Koordinator Lab Pendidikan Kimia"){
            $jur = "Pendidikan Kimia";
        }elseif($jurusan == "Koordinator Lab Apoteker"){
            $jur = "Apoteker";
        }elseif($jurusan == "Koordinator Lab Kimia"){
            $jur = "Kimia";
        }elseif($jurusan == "Koordinator Lab D3 Analisis Kimia"){
            $jur = "D3 Analisis Kimia";
        }

        if($idJnsSurat == 20 && (strpos($jurusan,'Koordinator') !== false)){
            $this->db->select('surat.*,jenis_surat.*, mahasiswa.*');
            $this->db->from('surat,jenis_surat, mahasiswa');
            $this->db->where('surat.status != 4');
            $this->db->where('surat.penolakan = ', ' ');
            $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
            $this->db->where('surat.id_jenis_surat = ' . $idJnsSurat);
            $this->db->where('mahasiswa.jurusan',$jur);
            $this->db->where('surat.nim1 = mahasiswa.nim');
            $data = $this->db->count_all_results();

            $this->db->select('jenis_surat.*');
            $this->db->from('jenis_surat');
            $this->db->where('id_jenis_surat = ' . $idJnsSurat);
            $data2 = $this->db->get()->row_array();
        }else{
            $this->db->select('surat.*, jenis_surat.*');
            $this->db->from('surat, jenis_surat');
            $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
            $this->db->where('surat.status = 0');
            $this->db->where('jenis_surat.id_jenis_surat = ' . $idJnsSurat);
            $data = $this->db->count_all_results();

            $this->db->select('jenis_surat.*');
            $this->db->from('jenis_surat');
            $this->db->where('id_jenis_surat = ' . $idJnsSurat);
            $data2 = $this->db->get()->row_array();
        }

        return array($data, $data2);
    }

    public function daftarsurat()
    {
        $data['title'] = "Daftar Pesan";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $data['surat1'] = $this->getSurat(1);
        $data['surat2'] = $this->getSurat(2);
        $data['surat3'] = $this->getSurat(3);
        $data['surat4'] = $this->getSurat(4);
        $data['surat5'] = $this->getSurat(5);
        $data['surat6'] = $this->getSurat(6);
        $data['surat7'] = $this->getSurat(7);
        $data['surat8'] = $this->getSurat(8);
        $data['surat9'] = $this->getSurat(9);
        $data['surat10'] = $this->getSurat(10);
        $data['surat11'] = $this->getSurat(11);
        $data['surat12'] = $this->getSurat(12);
        $data['surat13'] = $this->getSurat(13);
        $data['surat14'] = $this->getSurat(14);
        $data['surat15'] = $this->getSurat(15);
        $data['surat16'] = $this->getSurat(16);
        $data['surat17'] = $this->getSurat(17);
        $data['surat18'] = $this->getSurat(18);
        $data['surat19'] = $this->getSurat(19);
        $data['surat20'] = $this->getSurat(20);
        $data['surat21'] = $this->getSurat(21);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/daftarsurat', $data);
        $this->load->view('templates/footer');
    }

    public function detail_daftarsurat_($id)
    {
        $jurusan = $this->session->userdata('jur', true);
        if($jurusan == "Koordinator Lab Statistika"){
            $jur = "Statistika";
        }elseif($jurusan == "Koordinator Lab Farmasi"){
            $jur = "Farmasi";
        }elseif($jurusan == "Koordinator Lab Pendidikan Kimia"){
            $jur = "Pendidikan Kimia";
        }elseif($jurusan == "Koordinator Lab Apoteker"){
            $jur == "Apoteker";
        }elseif($jurusan == "Koordinator Lab Kimia"){
            $jur == "Kimia";
        }elseif($jurusan == "Koordinator Lab D3 Analisis Kimia"){
            $jur = "D3 Analisis Kimia";
        }

        $data['title'] = 'Daftar Pesanan';
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->db->select('surat.*,jenis_surat.*, mahasiswa.*');
        $this->db->from('surat,jenis_surat, mahasiswa');
        $this->db->where('surat.status != 4');
        $this->db->where('surat.penolakan = ', ' ');
        $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
        $this->db->where('surat.id_jenis_surat = ' . $id);
        $this->db->where('mahasiswa.jurusan', $jur);
        $this->db->where('surat.nim1 = mahasiswa.nim');
        $this->db->order_by('surat.id_surat', 'desc');
        $data['detailsurat'] = $this->db->get()->result_array();

        $this->db->select('jenis_surat.*');
        $this->db->from('jenis_surat');
        $this->db->where('id_jenis_surat =' . $id);
        $data['m'] = $this->db->get()->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/detail_daftarsurat_', $data);
        $this->load->view('templates/footer');
    }

    public function detail_daftarsurat($id)
    {
        $data['title'] = 'Daftar Pesanan';
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->db->select('jenis_surat.*');
        $this->db->from('jenis_surat');
        $this->db->where('id_jenis_surat =' . $id);
        $data['m'] = $this->db->get()->row_array();

        $this->db->select('surat.*,jenis_surat.*, mahasiswa.*');
        $this->db->from('surat,jenis_surat, mahasiswa');
        $this->db->where('surat.status !=','4');
        $this->db->where('surat.penolakan = ', ' ');
        $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
        $this->db->where('surat.nim1 = mahasiswa.nim');
        $this->db->where('surat.id_jenis_surat = ' . $id);
        $this->db->order_by('surat.id_surat', 'desc');
        $data['detailsurat2'] = $this->db->get()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/detail_daftarsurat', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_pesansurat($idJns, $idS)
    {
        $nama = $this->input->post('nama');
        $jurusan = $this->input->post('jurusan');
        $fakultas = $this->input->post('fakultas');
        $nim = $this->input->post('nim');
        $tgl_pesan = date("Y-m-d");

        if($idJns == '1')
        {
            $data = array(
                'smst_jln' => $this->input->post('smst_jln'),
                'alamat'   => $this->input->post('alamat1'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');

            redirect('kontrol/detail_daftarsurat/1');
        } elseif($idJns == '2')
        {
            $data = array(
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');

            redirect('kontrol/detail_daftarsurat/2');
        } elseif($idJns == '3')
        {
            $tgl = $this->input->post('tgl_ijazah');
            $tgl_ijazah = substr($tgl, 6, 4) . '-' . substr($tgl, 0, 2) . '-' . substr($tgl, 3, 2);
            $data = array(
                'no_ijazah' => $this->input->post('no_ijazah'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'tgl_ijazah' => $tgl_ijazah,
                'kirim_alamat' => $this->input->post('kirim_alamat'),
                'kirim_kabupaten' => $this->input->post('kirim_kabupaten'),
                'kirim_provinsi' => $this->input->post('kirim_provinsi'),
                'tarif' => $this->input->post('tarif'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');

            redirect('kontrol/detail_daftarsurat/3');
        } elseif($idJns == '4' || $idJns == '5')
        {
            $data = array(
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('maksud'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            if($idJns == '4'){
                redirect('kontrol/detail_daftarsurat/4');
            }else{
                redirect('kontrol/detail_daftarsurat/5');
            }
        } elseif($idJns == '6' || $idJns == '7')
        {
            $data = array(
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('maksud'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            if($idJns == '6'){
                redirect('kontrol/detail_daftarsurat/6');
            }else{
                redirect('kontrol/detail_daftarsurat/7');
            }
        } elseif($idJns == '8' || $idJns == '9')
        {
            $data = array(
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('maksud'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            if($idJns == '8'){
                redirect('kontrol/detail_daftarsurat/8');
            }else{
                redirect('kontrol/detail_daftarsurat/9');
            }
        } elseif($idJns == '10' || $idJns == '11')
        {
            $data = array(
                'judul' => $this->input->post('judul'),
                'maksud' => $this->input->post('maksud'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'pembimbing2' => $this->input->post('pembimbing2'),
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            if($idJns == 10){
                redirect('kontrol/detail_daftarsurat/10');
            }else{
                redirect('kontrol/detail_daftarsurat/11');
            }
        } elseif($idJns == '12')
        {
            $data1 = array(
                // 'id_surat' => ' ',
                // 'id_jenis_surat' => $jenis_surat,
                // 'nim1' => $this->input->post('nim', true),
                // 'email' => $email,
                'status' => ' ',
                'tgl_pesan' => $tgl_pesan,
                'tgl_setujui' => ' ',
                'tgl_ambil' => ' ',
                'persetujuan' => ' ',
                'penolakan' => ' ',
                'nosurat' => ' ',
                'nomersurat' => ' ',
            );
            $this->db->insert('surat', xss_clean($data1), true);

            $nim = $this->input->post('nim', true);
            $data2 = array(
                'tempat_lahir' => $this->input->post('tempat_lahir'),
            );
            $this->db->where('nim', $nim);
            $this->db->update('mahasiswa', xss_clean($data2), true);
            redirect('kontrol/detail_daftarsurat/12');
        } elseif($idJns == '13')
        {
            $data = array(
                'maksud' => $this->input->post('keperluan'),
                'smst_jln' => $this->input->post('smst_jln'),
                'nama_ortu' => $this->input->post('nama_ortu'),
                'alamat' => $this->input->post('alamat'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'nip' => $this->input->post('nip'),
                'instansi' => $this->input->post('instansi'),
                'pangkat' => $this->input->post('pangkat'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            redirect('kontrol/detail_daftarsurat/13');
        } elseif($idJns == '14')
        {
            $data = array(
                'maksud' => $this->input->post('maksud'),
                'smst_jln' => $this->input->post('smst_jln'),
                'nama_ortu' => $this->input->post('nama_ortu'),
                'alamat' => $this->input->post('alamat'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'nip' => $this->input->post('nip'),
                'pangkat' => $this->input->post('pangkat'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            redirect('kontrol/detail_daftarsurat/14');
        } elseif($idJns == '15')
        {
            $data = array(
                'smst_jln' => $this->input->post('smst_jln'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            redirect('kontrol/detail_daftarsurat/15');
        } elseif($idJns == '17')
        {
            $data = array(
                'subyek' => $this->input->post('subyek'),
                'maksud' => $this->input->post('maksud'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            redirect('kontrol/detail_daftarsurat/17');
        } elseif($idJns == '18')
        {
            $data = array(
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            redirect('kontrol/detail_daftarsurat/18');
        } elseif($idJns == '19')
        {
            $data = array(
                'maksud' => $this->input->post('maksud'),
                'lokasi' => $this->input->post('lokasi'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            redirect('kontrol/detail_daftarsurat/19');
        } elseif($idJns == '20')
        {
            $data = array(
                'judul' => $this->input->post('judul'),
                'smst_jln' => $this->input->post('smst_jln'),
                'subyek' => $this->input->post('subyek'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');

            $jurusan = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();
            if ($jurusan['id'] == '2317' || $jurusan['id'] == '6117' || $jurusan['id'] == '6127'  || $jurusan['id'] == '6137' || $jurusan['id'] == '6147'  || $jurusan['id'] == '6157')
            {
                redirect('kontrol/detail_daftarsurat_/20');
            }else
            {
                redirect('kontrol/detail_daftarsurat/20');
            }
        } elseif($idJns == '21')
        {
            $data = array(
                'judul' => $this->input->post('judul'),
                'pembimbing1' => $this->input->post('pembimbing1'),
                'lokasi' => $this->input->post('lokasi'),
                'nama_pimpinan' => $this->input->post('nama_pimpinan'),
                'kota' => $this->input->post('kota'),
            );

            $this->db->set(xss_clean($data), true);
            $this->db->where('id_surat', $idS, true);
            $this->db->update('surat');
            redirect('kontrol/detail_daftarsurat/21');
        }
    }

    public function setujui($id, $idJns)
    {
        $tgl_setujui = date("Y-m-d");
        $jurusan = $this->session->userdata('id_jur');

        $data = array(
            'status' => 1,
            'tgl_setujui' => $tgl_setujui,
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('id_surat', $id, true);
        $this->db->update('surat');

        if ($jurusan == '2317' || $jurusan == '6117' || $jurusan == '6127'  || $jurusan == '6137' || $jurusan == '6147'  || $jurusan == '6157')
        {
            redirect('kontrol/detail_daftarsurat_/'.$idJns);
        } else
        {
            redirect('kontrol/detail_daftarsurat/'.$idJns);
        }
    }

    public function batalkan($id, $idJns)
    {
        $tgl_setujui = date("Y-m-d");

        $data = array(
            'status' => 2,
            'tgl_setujui' => $tgl_setujui,
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('id_surat', $id, true);
        $this->db->update('surat');

        redirect('kontrol/v_penolakan/'.$idJns.'/'.$id);
    }

    public function v_penolakan($id,$idJns)
    {
        $data['title'] = "";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $data['id'] = $id;
        $data['idJns'] = $idJns;

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/penolakan', $data);
        $this->load->view('templates/footer');
    }

    public function penolakan($id,$idJns)
    {
        $jurusan = $this->session->userdata('id_jur');

        $data = array(
            'penolakan' => $this->input->post('penolakan'),
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('id_surat', $id, true);
        $this->db->update('surat');

        if ($jurusan == '2317' || $jurusan == '6117' || $jurusan == '6127'  || $jurusan == '6137' || $jurusan == '6147'  || $jurusan == '6157')
        {
            redirect('kontrol/detail_daftarsurat_/'.$idJns);
        } else
        {
            redirect('kontrol/detail_daftarsurat/'.$idJns);
        }
    }

    public function v_acc($idS,$idJns)
    {
        $data['title'] = "Acc Surat";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $data['idJns'] = $idJns;
        $data['idS'] = $idS;

        $this->db->select('surat.*, mahasiswa.*, jurusan.*');
        $this->db->from('surat,mahasiswa,jurusan');
        $this->db->where('surat.nim1 = mahasiswa.nim');
        $this->db->where('mahasiswa.jurusan = jurusan.nama_instansi');
        $this->db->where('surat.id_surat ='.$idS);
        $data['m'] = $this->db->get()->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/acc', $data);
        $this->load->view('templates/footer');
    }

    public function acc($idS, $idJns)
    {
        $data = array(
            'persetujuan' => $this->input->post('acc'),
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('id_surat', $idS, true);
        $this->db->update('surat');

        redirect('kontrol/detail_daftarsurat/'.$idJns);
    }

    public function cetak_surat($id)
    {
        $this->load->view('konfig/tgl_indo');
        $data['tgl']=date('d');
        $data['bln']=date('m');
        $data['thn']=date('y');

        $this->db->select('surat.*,jurusan.*');
        $this->db->from('surat, jurusan');
        $this->db->where('surat.persetujuan = jurusan.id');
        $this->db->where('id_surat = '.$id);
        $data['surat'] = $this->db->get()->row_array();

        $this->db->select('mahasiswa.*,surat.*,jurusan.*');
        $this->db->from('mahasiswa,surat, jurusan');
        $this->db->where('mahasiswa.nim = surat.nim1');
        $this->db->where('jurusan.nama_instansi = mahasiswa.jurusan');
        $this->db->where('id_surat = '.$id);
        $data['surat2'] = $this->db->get()->row_array();

        $this->db->select('surat.*,jenis_surat.*');
        $this->db->from('surat, jenis_surat');
        $this->db->where('id_surat = '.$id);
        $data['surat3'] = $this->db->get()->row_array();

        $data['surat4'] = $this->db->get('tahun_akademik')->row_array();

        $this->db->select('surat.*,surat.alamat as alamat_surat,mahasiswa.*');
        $this->db->from('surat, mahasiswa');
        $this->db->where('surat.nim1 = mahasiswa.nim');
        $this->db->where('id_surat = '.$id);
        $data['surat5'] = $this->db->get()->row_array();

        $this->db->select('surat.*,dosen.*');
        $this->db->from('surat, dosen');
        $this->db->where('surat.id_surat = '.$id);
        $this->db->where('dosen.nip = ' . $data['surat5']['pembimbing1']);
        $data['surat6'] = $this->db->get()->row_array();

        $this->db->select('surat.*,dosen.*');
        $this->db->from('surat, dosen');
        $this->db->where('surat.id_surat = '.$id);
        $this->db->where('dosen.nip = ' . $data['surat5']['pembimbing2']);
        $data['surat7'] = $this->db->get()->row_array();

        $this->db->select('surat.*,jenis_surat.*');
        $this->db->from('surat, jenis_surat');
        $this->db->where('id_surat = '.$id);
        $this->db->where('jenis_surat.id_jenis_surat = 7');
        $data['surat8'] = $this->db->get()->row_array();

        $this->db->select('surat.*,jenis_surat.*');
        $this->db->from('surat, jenis_surat');
        $this->db->where('id_surat = '.$id);
        $this->db->where('jenis_surat.id_jenis_surat = 13');
        $data['surat9'] = $this->db->get()->row_array();

        $this->db->select('surat.*,jenis_surat.*');
        $this->db->from('surat, jenis_surat');
        $this->db->where('id_surat = '.$id);
        $this->db->where('jenis_surat.id_jenis_surat = 15');
        $data['surat10'] = $this->db->get()->row_array();

        $this->db->select('surat.*,jenis_surat.*');
        $this->db->from('surat, jenis_surat');
        $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
        $this->db->where('surat.id_surat = ' . $id);
        $data['surat11'] = $this->db->get()->row_array();

        $this->db->select('surat.*,jenis_surat.*');
        $this->db->from('surat, jenis_surat');
        $this->db->where('id_surat = '.$id);
        $this->db->where('jenis_surat.id_jenis_surat = 5');
        $data['surat12'] = $this->db->get()->row_array();

        $this->db->select('surat.*,dosen.*');
        $this->db->from('surat, dosen');
        $this->db->where('surat.id_surat = '.$id);
        $this->db->where('dosen.nip = ' . $data['surat12']['pembimbing1']);
        $data['f'] = $this->db->get()->row_array();

        $this->db->select('surat.*,dosen.*');
        $this->db->from('surat, dosen');
        $this->db->where('surat.id_surat = '.$id);
        $this->db->where('dosen.nip = ' . $data['surat12']['pembimbing2']);
        $data['t'] = $this->db->get()->row_array();

        $this->db->select('surat.*,itmk.*');
        $this->db->from('surat, itmk');
        $this->db->where('surat.id_surat = itmk.id_surat');
        $this->db->where('surat.id_surat = ' . $id);
        $data['itmk'] = $this->db->get()->row_array();

        $id_jenis_surat = $data['surat2']['id_jenis_surat'];

        $margin = $this->db->get_where('jenis_surat',['id_jenis_surat'=>$id_jenis_surat])->row_array();
        $data['top']    = $margin['margin_top'];
        $data['left']   = $margin['margin_left'];
        $data['right']  = $margin['margin_right'];
        $data['bottom'] = $margin['margin_bottom'];

        if ($id_jenis_surat == 1) {
            $this->load->view('cetak/1', $data);
        } elseif ($id_jenis_surat == 2) {
            $this->load->view('cetak/2', $data);
        } elseif ($id_jenis_surat == 3) {
            $this->load->view('cetak/3', $data);
        } elseif ($id_jenis_surat == 4) {
            $this->load->view('cetak/4', $data);
        } elseif ($id_jenis_surat == 5) {
            $this->load->view('cetak/5', $data);
        } elseif ($id_jenis_surat == 6) {
            $this->load->view('cetak/6', $data);
        } elseif ($id_jenis_surat == 7) {
            $this->load->view('cetak/7', $data);
        } elseif ($id_jenis_surat == 8) {
            $this->load->view('cetak/8', $data);
        } elseif ($id_jenis_surat == 9) {
            $this->load->view('cetak/9', $data);
        } elseif ($id_jenis_surat == 10) {
            $this->load->view('cetak/10', $data);
        } elseif ($id_jenis_surat == 11) {
            $this->load->view('cetak/11', $data);
        } elseif ($id_jenis_surat == 12) {
            $this->load->view('cetak/12', $data);
        } elseif ($id_jenis_surat == 13) {
            $this->load->view('cetak/13', $data);
        } elseif ($id_jenis_surat == 14) {
            $this->load->view('cetak/14', $data);
        } elseif ($id_jenis_surat == 15) {
            $this->load->view('cetak/15', $data);
        } elseif ($id_jenis_surat == 16) {
            $this->load->view('cetak/16', $data);
        } elseif ($id_jenis_surat == 17) {
            $this->load->view('cetak/17', $data);
        } elseif ($id_jenis_surat == 18) {
            $this->load->view('cetak/18', $data);
        } elseif ($id_jenis_surat == 19) {
            $this->load->view('cetak/19', $data);
        } elseif ($id_jenis_surat == 20) {
            $this->load->view('cetak/20', $data);
        } elseif ($id_jenis_surat == 21) {
            $this->load->view('cetak/21', $data);
        }
    }

    public function sudahjadi($id, $idJns)
    {
        $akses = $this->session->userdata('akses');
        $tgl_jadi = date("Y-m-d");

        $data = array(
            'status' => 3,
            'tgl_jadi' => $tgl_jadi,
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('id_surat', $id, true);
        $this->db->update('surat');

        if($akses == 2)
        {
            redirect('kontrol/detail_daftarsurat/'.$idJns);
        }else
        {
            redirect('kontrol/sejarahpesan');
        }
    }

    public function telahdiambil($id, $idJns)
    {
        $akses = $this->session->userdata('akses');
        $tgl_ambil = date("Y-m-d");

        $data = array(
            'status' => 4,
            'tgl_ambil' => $tgl_ambil,
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('id_surat', $id, true);
        $this->db->update('surat');

        if($akses == 2)
        {
            redirect('kontrol/detail_daftarsurat/'.$idJns);
        }else
        {
            redirect('kontrol/sejarahpesan');
        }
    }

    public function pengaturan()
    {
        $data['s'] = $this->db->get('tahun_akademik')->row_array();
        $data['t'] = $this->db->get('rekening')->row_array();;

        $data['title'] = "Pengaturan";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/akademik', $data);
        $this->load->view('templates/footer');
    }

    public function akademik()
    {
        $data = array(
            'awal' => $this->input->post('awal'),
            'akhir' => $this->input->post('akhir'),
            'semester' => $this->input->post('semester'),
        );

        $this->db->set(xss_clean($data), true);
        $this->db->update('tahun_akademik');

        redirect('kontrol/pengaturan');
    }

    public function rekening()
    {
        $data = array(
            'rekening' => $this->input->post('rekening'),
            'bank' => $this->input->post('bank'),
            'an' => $this->input->post('an'),
        );

        $this->db->set(xss_clean($data), true);
        $this->db->update('rekening');

        redirect('kontrol/pengaturan');
    }

    public function masterjurusan()
    {
        $data['title'] = "Master Jurusan";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->db->order_by('id','asc');
        $data['data'] = $this->db->get('jurusan')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/masterjurusan', $data);
        $this->load->view('templates/footer');
    }

    public function tambahunit()
    {
        $data['title'] = "Input Unit";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/tambahunit', $data);
        $this->load->view('templates/footer');
    }

    public function inputunit()
    {
        $data = array(
            'id' => $this->input->post('id'),
            'nama_instansi' => $this->input->post('nama_instansi'),
            'ket_akreditasi'=> $this->input->post('ket_akreditasi'),
            'akreditasi'    => $this->input->post('akreditasi'),
            'jangka_awal'   => $this->input->post('jangka_awal'),
            'jangka_akhir'  => $this->input->post('jangka_akhir'),
            'jabatan'       => $this->input->post('jabatan'),
            'nama_pimpinan' => $this->input->post('nama_pimpinan'),
            'nip'           => $this->input->post('nip'),
            'kode_surat'    => $this->input->post('kode_surat'),
        );

        $this->db->insert('jurusan', xss_clean($data), true);
        redirect('kontrol/masterjurusan');
    }

    public function editunit($id)
    {
        $data['title'] = "Edit Unit";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $data['c'] = $this->db->get_where('jurusan', array('id'=> $id))->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/editunit', $data);
        $this->load->view('templates/footer');
    }

    public function perbaruiunit($id)
    {
        $data = array(
            'id' => $this->input->post('id'),
            'nama_instansi' => $this->input->post('nama_instansi'),
            'ket_akreditasi'=> $this->input->post('ket_akreditasi'),
            'akreditasi'    => $this->input->post('akreditasi'),
            'jangka_awal'   => $this->input->post('jangka_awal'),
            'jangka_akhir'  => $this->input->post('jangka_akhir'),
            'jabatan'       => $this->input->post('jabatan'),
            'nama_pimpinan' => $this->input->post('nama_pimpinan'),
            'nip'           => $this->input->post('nip'),
            'kode_surat'    => $this->input->post('kode_surat'),
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('id', $id);
        $this->db->update('jurusan');

        redirect('kontrol/masterjurusan');
    }

    public function hapusunit($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('jurusan');

        redirect('kontrol/masterjurusan');
    }

    public function master_dosen()
    {
        $data['title'] = "Master Dosen";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->db->order_by('nip','asc');
        $data['data'] = $this->db->get('dosen')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/master_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_dosen()
    {
        $data['title'] = "Tambah Dosen";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/tambah_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function inputdosen()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
            'jabatan'=> $this->input->post('jabatan'),
        );

        $this->db->insert('dosen', xss_clean($data), true);
        redirect('kontrol/master_dosen');
    }

    public function detail_dosen($id)
    {
        $data['title'] = "Detil Dosen";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['s'] = $this->db->get_where('dosen', array('nip' => $id))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/detail_dosen', $data);
        $this->load->view('templates/footer');
    }

    public function ubah_datadosen($id)
    {
        $nip = $this->input->post('nip', true);
        $data = array(
            'nama' => $this->input->post('nama'),
            'nip' => $this->input->post('nip'),
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('nip', $id);
        $this->db->update('dosen');

        redirect('kontrol/detail_dosen/'.$nip);
    }

    public function master_mahasiswa()
    {
        $data['title'] = "Master Mahasiswa";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->db->order_by('nim', 'asc');
        $data['data'] = $this->db->get('mahasiswa')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/master_mahasiswa', $data);
        $this->load->view('templates/footer');
    }

    public function tambahmhs()
    {
        $data['title'] = "Tambah Mahasiswa";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/tambahmhs', $data);
        $this->load->view('templates/footer');
    }

    public function inputmhs()
    {
       $data = array(
           'nama'   => $this->input->post('nama'),
           'nim'   => $this->input->post('nim'),
           'jk'   => $this->input->post('jk'),
           'tempat_lahir'   => $this->input->post('tempat_lahir'),
           'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
           'status_mahasiswa'   => $this->input->post('status'),
           'jurusan'   => $this->input->post('jurusan'),
           'fakultas'  => $this->input->post('fakultas'),
           'password'  => password_hash($this->input->post('nim'),PASSWORD_BCRYPT),
       );

       $this->db->insert('mahasiswa',xss_clean($data), true);

       redirect('kontrol/master_mahasiswa');
    }

    public function detail_mastermahasiswa($id)
    {
        $data['title'] = "Detail Mahasiswa";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['s'] = $this->db->get_where('mahasiswa', array('nim' => $id))->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/data_mastermahasiswa', $data);
        $this->load->view('templates/footer');

    }

    public function ubah_status($nim)
    {
        $data = array(
            'status_mahasiswa' => $this->input->post('ubah_status'),
        );
        $this->db->set(xss_clean($data), true);
        $this->db->where('nim', $nim);
        $this->db->update('mahasiswa');

        redirect('kontrol/detail_mastermahasiswa/'.$nim);
    }

    public function deletemhs($id)
    {
        $this->db->where('nim', $id);
        $this->db->delete('mahasiswa');

        redirect('kontrol/master_mahasiswa');
    }

    public function master_pegawai()
    {
        $data['title'] = "Master Pegawai";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->db->order_by('nip', 'asc');
        $data['data'] = $this->db->get('pegawai')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/master_pegawai', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_pegawai()
    {
        $data['title'] = "Tambah Pegawai";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/tambah_pegawai', $data);
        $this->load->view('templates/footer');
    }

    public function inputpegawai()
    {
        $data = array(
            'nama'   => $this->input->post('nama'),
            'nip'   => $this->input->post('nip'),
            'username'   => $this->input->post('nip'),
            'password'  => password_hash($this->input->post('nip'),PASSWORD_BCRYPT),
        );

        $this->db->insert('pegawai',xss_clean($data));

        redirect('kontrol/master_pegawai');
    }

    public function hapuspegawai($nip)
    {
        $this->db->where('nip',$nip);
        $this->db->delete('pegawai');

        redirect('kontrol/master_pegawai');
    }

    public function rekapsurat()
    {
        $data['title'] = "Rekap Surat";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/rekapsurat', $data);
        $this->load->view('templates/footer');
    }

    public function _getrekap($idJns, $jurusan, $awal, $akhir)
    {
        // var_dump($query02);die;
        // query0 ke i
        $this->db->select('surat.*, jenis_surat.*, mahasiswa.*,jurusan.*');
        $this->db->from('surat,jenis_surat,mahasiswa,jurusan');
        $this->db->where('mahasiswa.jurusan = jurusan.nama_instansi');
        $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
        $this->db->where('mahasiswa.nim = surat.nim1');
        $this->db->where('mahasiswa.jurusan',$jurusan);
        $this->db->where('tgl_pesan BETWEEN "'. $awal. '" AND "'. $akhir.'"');
        $this->db->where('surat.id_jenis_surat = '.$idJns);
        $query0 = $this->db->get()->row_array();

        // query00 ke i
        $this->db->select('surat.*,mahasiswa.*,jurusan.*');
        $this->db->from('surat,mahasiswa,jurusan');
        $this->db->where('id_jenis_surat = '.$idJns);
        $this->db->where('jurusan.nama_instansi = mahasiswa.jurusan');
        $this->db->where('mahasiswa.nim = surat.nim1');
        $this->db->where('mahasiswa.jurusan',$jurusan);
        $this->db->where('tgl_pesan BETWEEN "'. $awal. '" AND "'. $akhir.'"');
        $query00 = $this->db->count_all_results();

        // query02 ke i
        $this->db->select('surat.*,mahasiswa.*,jurusan.*');
        $this->db->from('surat,mahasiswa,jurusan');
        $this->db->where('id_jenis_surat = '.$idJns);
        $this->db->where('jurusan.nama_instansi = mahasiswa.jurusan');
        $this->db->where('mahasiswa.nim = surat.nim1');
        $this->db->where('mahasiswa.jurusan',$jurusan);
        $this->db->where('tgl_pesan BETWEEN "'. $awal. '" AND "'. $akhir.'"');
        $this->db->where('surat.status = 1');
        $query02 = $this->db->count_all_results();

        // query03 ke i
        $this->db->select('surat.*,mahasiswa.*,jurusan.*');
        $this->db->from('surat,mahasiswa,jurusan');
        $this->db->where('id_jenis_surat = '.$idJns);
        $this->db->where('jurusan.nama_instansi = mahasiswa.jurusan');
        $this->db->where('mahasiswa.nim = surat.nim1');
        $this->db->where('mahasiswa.jurusan',$jurusan);
        $this->db->where('tgl_pesan BETWEEN "'. $awal. '" AND "'. $akhir.'"');
        $this->db->where('surat.status = 2');
        $query03 = $this->db->count_all_results();

        // query04 ke i
        $this->db->select('surat.*,mahasiswa.*,jurusan.*');
        $this->db->from('surat,mahasiswa,jurusan');
        $this->db->where('id_jenis_surat = '.$idJns);
        $this->db->where('jurusan.nama_instansi = mahasiswa.jurusan');
        $this->db->where('mahasiswa.nim = surat.nim1');
        $this->db->where('mahasiswa.jurusan',$jurusan);
        $this->db->where('tgl_pesan BETWEEN "'. $awal. '" AND "'. $akhir.'"');
        $this->db->where('surat.status = 3');
        $query04 = $this->db->count_all_results();

        // query05 ke i
        $this->db->select('surat.*,mahasiswa.*,jurusan.*');
        $this->db->from('surat,mahasiswa,jurusan');
        $this->db->where('id_jenis_surat = '.$idJns);
        $this->db->where('jurusan.nama_instansi = mahasiswa.jurusan');
        $this->db->where('mahasiswa.nim = surat.nim1');
        $this->db->where('mahasiswa.jurusan',$jurusan);
        $this->db->where('tgl_pesan BETWEEN "'. $awal. '" AND "'. $akhir.'"');
        $this->db->where('surat.status = 4');
        $query05 = $this->db->count_all_results();

        // query06 ke i
        $this->db->select('surat.*,mahasiswa.*,jurusan.*');
        $this->db->from('surat,mahasiswa,jurusan');
        $this->db->where('id_jenis_surat = '.$idJns);
        $this->db->where('jurusan.nama_instansi = mahasiswa.jurusan');
        $this->db->where('mahasiswa.nim = surat.nim1');
        $this->db->where('mahasiswa.jurusan',$jurusan);
        $this->db->where('tgl_pesan BETWEEN "'. $awal. '" AND "'. $akhir.'"');
        $this->db->where('surat.status = 0');
        $query06 = $this->db->count_all_results();

        return array($query0,$query00,$query02,$query03,$query04,$query05,$query06);
    }

    public function hasil_rekap()
    {
        $this->load->view('konfig/tgl_indo');
        $data['title'] = "Hasil Rekap";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $data['awl'] = tgl_indo($this->input->post('tanggal_awal'));
        $data['akr'] = tgl_indo($this->input->post('tanggal_akhir'));

        $data['jur'] = $this->input->post('jurusan');
        $data['t_awal'] = $this->input->post('tanggal_awal');
        $data['t_akhir'] = $this->input->post('tanggal_akhir');

        $jurusan = $this->input->post('jurusan');
        $tanggal_awal = $this->input->post('tanggal_awal');
        $tanggal_akhir = $this->input->post('tanggal_akhir');

        $data['surat1'] = $this->_getrekap(1,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat2'] = $this->_getrekap(2,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat3'] = $this->_getrekap(3,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat4'] = $this->_getrekap(4,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat5'] = $this->_getrekap(5,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat6'] = $this->_getrekap(6,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat7'] = $this->_getrekap(7,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat8'] = $this->_getrekap(8,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat9'] = $this->_getrekap(9,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat10'] = $this->_getrekap(10,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat11'] = $this->_getrekap(12,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat12'] = $this->_getrekap(12,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat13'] = $this->_getrekap(13,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat14'] = $this->_getrekap(14,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat15'] = $this->_getrekap(15,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat16'] = $this->_getrekap(16,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat17'] = $this->_getrekap(17,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat18'] = $this->_getrekap(18,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat19'] = $this->_getrekap(19,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat20'] = $this->_getrekap(20,$jurusan,$tanggal_awal,$tanggal_akhir);
        $data['surat21'] = $this->_getrekap(21,$jurusan,$tanggal_awal,$tanggal_akhir);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/hasil_rekap', $data);
        $this->load->view('templates/footer');
    }

    public function detail_rekap($idJns,$t_awal, $t_akhir, $j)
    {
        $data['title'] = "Detail Rekap";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();
        $jur = str_replace("%20"," ",$j);

        $this->db->select('surat.*,jenis_surat.*,mahasiswa.*,jurusan.*');
        $this->db->from('surat,jenis_surat,mahasiswa,jurusan');
        $this->db->where('surat.id_jenis_surat',$idJns);
        $this->db->where('mahasiswa.jurusan = jurusan.nama_instansi');
        $this->db->where('surat.id_jenis_surat = jenis_surat.id_jenis_surat');
        $this->db->where('surat.nim1 = mahasiswa.nim');
        $this->db->where('jurusan.nama_instansi',$jur);
        $this->db->where('tgl_pesan BETWEEN "'. $t_awal. '" AND "'. $t_akhir.'"');
        $data['data'] = $this->db->get()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/detail_rekap', $data);
        $this->load->view('templates/footer');
    }

    public function excel_dosen()
    {
        $data['title'] = "Import Excel";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/exceldosen');
        $this->load->view('templates/footer');
    }

    public function exceldosen()
    {
        $target = basename($_FILES['filedosen']['name']);
        move_uploaded_file($_FILES['filedosen']['tmp_name'], $target);

        $data = new Spreadsheet_Excel_Reader($_FILES['filedosen']['name'], false);
        // menghitung jumlah baris file xls
        $baris = $data->rowcount($sheet_index = 0);
        // var_dump($baris);die;
        //    jika kosongkan data dicentang jalankan kode berikut
        /*if($_POST['drop']==1){
            kosongkan tabel pegawai
            $truncate ="TRUNCATE TABLE mahasiswa";
            mysql_query($truncate);
        };*/

        // import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
        for($i=2; $i<=$baris; $i++)
        {
            // membaca data (kolom ke-1 sd terakhir)
            $nip     = $data->val($i, 1);
            $nama    = $data->val($i, 2);
            $jabatan = $data->val($i, 3);
            $kodeJab = $data->val($i, 4);

            $level          = "user";
            $useradmin      = "karyawan";
            $passadmin      = "karyawan";
            $passadmin1     = password_hash($passadmin,PASSWORD_BCRYPT);
            $leveladmin     = "karyawan";
            $superadmin     = "admin";
            $passsuperadmin = "admin";
            $passsuperadmin1     = password_hash($passsuperadmin,PASSWORD_BCRYPT);
            $levelsuperadmin     = "admin";

            // setelah data dibaca, masukkan ke tabel dosen sql

            $data1 = array(
                'nip'   => $nip,
                'nama'  => $nama,
                'jabatan' => $jabatan,
                'kodeJab' => $kodeJab
            );
            $this->db->insert('dosen', xss_clean($data1), true);
        }
        // hapus file xls yang sudah dibaca
        unlink($_FILES['filedosen']['name']);
        // jika import berhasil
        redirect( base_url('kontrol/master_dosen') );
    }

    public function excel_mhs()
    {
        $data['title'] = "Import Excel";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/excelmhs');
        $this->load->view('templates/footer');
    }

    public function excelmhs()
    {
        $target = basename($_FILES['filemahasiswa']['name']);
        move_uploaded_file($_FILES['filemahasiswa']['tmp_name'], $target);

        $data = new Spreadsheet_Excel_Reader($_FILES['filemahasiswa']['name'], false);
        // menghitung jumlah baris file xls
        $baris = $data->rowcount($sheet_index = 0);
        // var_dump($baris);die;
        //    jika kosongkan data dicentang jalankan kode berikut
        /*if($_POST['drop']==1){
            kosongkan tabel pegawai
            $truncate ="TRUNCATE TABLE mahasiswa";
            mysql_query($truncate);
        };*/

        // import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
        for($i=2; $i<=$baris; $i++)
        {
            // membaca data (kolom ke-1 sd terakhir)
            $nim   			   = $data->val($i, 1);
            $nama              = $data->val($i, 2);
            $angkatan          = $data->val($i, 3);
            $tanggal_lahir     = $data->val($i, 4);
            $tempat_lahir      = $data->val($i, 5);
            $jurusan           = $data->val($i, 6);
            $fakultas          = "Fakultas Matematika dan Ilmu Pengetahuan Alam";
            $password          = password_hash($nim,PASSWORD_BCRYPT);

            $level      = "user";
            $useradmin      = "karyawan";
            $passadmin      = "karyawan";
            $passadmin1     = password_hash($passadmin,PASSWORD_BCRYPT);
            $leveladmin     = "karyawan";
            $superadmin     = "admin";
            $passsuperadmin = "admin";
            $passsuperadmin1     = password_hash($passsuperadmin,PASSWORD_BCRYPT);
            $levelsuperadmin     = "admin";

            // setelah data dibaca, masukkan ke tabel dosen sql

            $data1 = array(
                'nim'   => $nim,
                'nama'  => $nama,
                'angkatan' => $angkatan,
                'password' => $password,
                'jurusan' => $jurusan,
                'fakultas' => $fakultas,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'level' => $level,
            );
            // var_dump($data['password']);die;

            $this->db->insert('mahasiswa', xss_clean($data1), true);
        }
        // hapus file xls yang sudah dibaca
        unlink($_FILES['filemahasiswa']['name']);
        // jika import berhasil
        redirect( base_url('kontrol/master_mahasiswa') );
    }

    // cek ongkir
    public function cek_tarif()
    {
        $data['title'] = "Cek Tarif";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();
        // $data['province'] = json_decode($this->province());
        // $data['city'] = json_decode($this->city());

        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/cek_tarif', $data);
        $this->load->view('templates/footer');
    }

    public function set_margin($idJns)
    {
        $data['title'] = "Set Margin";
        $data['akses'] = $this->session->userdata('akses');
        $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
        $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();

        $data['margin']  = $this->db->get_where('jenis_surat',['id_jenis_surat' => $idJns])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/header_page', $data);
        $this->load->view('templates/navigasi', $data);
        $this->load->view('pegawai/set_margin', $data);
        $this->load->view('templates/footer');
    }

    public function setmargin($idJns)
    {
        $data = array(
            'margin_top' => $this->input->post('top'),
            'margin_bottom' => $this->input->post('bottom'),
            'margin_left' => $this->input->post('left'),
            'margin_right' => $this->input->post('right'),
        );

        $this->db->set(xss_clean($data), true);
        $this->db->where('id_jenis_surat', $idJns, true);
        $this->db->update('jenis_surat');

        redirect('kontrol/set_margin/'.$idJns);
    }


/*
    public function province()
	{
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		if ($err) {
		  echo 'cURL Error #:' . $err;
		} else {
			return $response;
		}
    }

    public function city()
	{
		$id = $this->input->get('q');

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province_id=".$id,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"key: $this->api_key"
			),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
        curl_close($curl);
        // var_dump($response);die;

		if ($err) {
			echo 'cURL Error #:' . $err;
        } else
        {
			$data = json_decode($response, true);
			for ($i=0; $i < count($data['rajaongkir']['results']); $i++)
			{
    			echo "<option value='".$data['rajaongkir']['results'][$i]['city_id']."'>".$data['rajaongkir']['results'][$i]['city_name']."</option>";
			}
		}
    }

    function cost()
	{
		$origin 		= $this->input->get('origincity');
		$destination 	= $this->input->get('destinationcity');
		$weight 		= $this->input->get('weight')*1000;
		$courier 		= $this->input->get('courier');

		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "origin=".$origin."&destination=".$destination."&weight=".$weight."&courier=".$courier,
		  CURLOPT_HTTPHEADER => array(
		    "content-type: application/x-www-form-urlencoded",
		    "key: $this->api_key"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
            $data['title'] = "Cek Tarif";
            $data['akses'] = $this->session->userdata('akses');
            $data['user'] = $this->db->get_where('pegawai', ['nip' => $this->session->userdata('nip')])->row_array();
            $data['jurusan'] = $this->db->get_where('jurusan', ['nip' => $this->session->userdata('nip')])->row_array();
            $data['query'] = json_decode($response);
            // var_dump($data['query']);die;

            $this->load->view('templates/header', $data);
            $this->load->view('templates/header_page', $data);
            $this->load->view('templates/navigasi', $data);
            $this->load->view('pegawai/cek_tarif_hasil', $data);
            $this->load->view('templates/footer');
		}
    }
*/
}
?>
