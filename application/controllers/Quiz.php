<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Quiz extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Mahasiswa_model');
        // $this->load->model('Prodi_model');
    }
    public function index()
    {
        $data['judul'] = "Formulir Pendaftaran";
        // $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        // $data['mahasiswa'] = $this->Mahasiswa_model->get();
        $this->load->view("layout/quiz_header");
        $this->load->view("quiz/vw_quiz", $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Registrasi";
        $this->load->view("layout/quiz_header");
        // $this->load->view("quiz/vw_quiz", $data);

        // Mengambil data dari POST
        $nama = $this->input->post('nama');
        $nisn = $this->input->post('nisn');
        $nik = $this->input->post('nik');
        $email = $this->input->post('email');
        $no_hp = $this->input->post('no_hp');
        $no_wa = $this->input->post('no_wa');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $kabupaten_tinggal = $this->input->post('kabupaten_tinggal');
        $kecamatan_tinggal = $this->input->post('kecamatan_tinggal');
        $kabupaten_sekolah = $this->input->post('kabupaten_sekolah');
        $sekolah_asal = $this->input->post('sekolah_asal');
        $jurusan = $this->input->post('jurusan');
        $tahun_lulus = $this->input->post('email');

        // Menampilkan data
        $data['nama'] = $nama;
        $data['nisn'] = $nisn;
        $data['nik'] = $nik;
        $data['email'] = $email;
        $data['no_hp'] = $no_hp;
        $data['no_wa'] = $no_wa;
        $data['tempat_lahir'] = $tempat_lahir;
        $data['tanggal_lahir'] = $tanggal_lahir;
        $data['jenis_kelamin'] = $jenis_kelamin;
        $data['kabupaten_tinggal'] = $kabupaten_tinggal;
        $data['kecamatan_tinggal'] = $kecamatan_tinggal;
        $data['kabupaten_sekolah'] = $kabupaten_sekolah;
        $data['sekolah_asal'] = $sekolah_asal;
        $data['jurusan'] = $jurusan;
        $data['tahun_lulus'] = $tahun_lulus;

        $this->load->view('quiz/vw_tambah_quiz', $data);
        // redirect('Quiz/login');
    }
    // $data['quiz'] = $this->Quiz_model->get();

    //         $data['user'] = $this->db->get_where('user', [
//             'email' =>
//                 $this->session->userdata('email')
//         ])->row_array();
//         $data['prodi'] = $this->Prodi_model->get();
//         $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
//             'required' => 'Nama Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('nim', 'NIM', 'required', [
//             'required' => 'NIM Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('email', 'Email', 'required', [
//             'required' => 'Email Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('prodi', 'Prodi', 'required', [
//             'required' => 'Prodi Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
//             'required' => 'Alamat Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
//             'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('no_hp', 'No HP', 'required|integer', [
//             'required' => 'NO HP Mahasiswa Wajib di isi',
//             'integer' => 'NO HP harus Angka'
//         ]);
//         $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
//             'required' => 'Jenis Kelamin Mahasiswa Wajib di isi',
//         ]);
//         if ($this->form_validation->run() == false) {
//             $this->load->view("layout/header", $data);
//             $this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
//         } else {
//             $data = [
//                 'nama' => $this->input->post('nama'),
//                 'nim' => $this->input->post('nim'),
//                 'email' => $this->input->post('email'),
//                 'prodi' => $this->input->post('prodi'),
//                 'alamat' => $this->input->post('alamat'),
//                 'jenis_kelamin' => $this->input->post('jenis_kelamin'),
//                 'no_hp' => $this->input->post('no_hp'),
//                 'asal_sekolah' => $this->input->post('asal_sekolah'),
//             ];
//             $this->Mahasiswa_model->insert($data);
//             $this->session->set_flashdata('message', '<div class="alert alert-success"
// role="alert">Data Mahasiswa Berhasil Ditambah!</div>');
//             redirect('Mahasiswa');
//         }
    // }
//     public function detail($id)
//     {
//         $data['judul'] = "Halaman Detail Mahasiswa";
//         $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
//         $this->load->view("layout/header");
//         $this->load->view("mahasiswa/vw_detail_mahasiswa", $data);
//     }
//     public function hapus($id)
//     {
//         $this->Mahasiswa_model->delete($id);
//         $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data
//         Mahasiswa Berhasil Dihapus!</div>');
//         redirect('Mahasiswa');
//     }
//     function upload()
//     {
//         $data = [
//             'nama' => $this->input->post('nama'),
//             'nim' => $this->input->post('nim'),
//             'email' => $this->input->post('email'),
//             'prodi' => $this->input->post('prodi'),
//             'alamat' => $this->input->post('alamat'),
//             'no_hp' => $this->input->post('no_hp'),
//             'jenis_kelamin' => $this->input->post('jenis_kelamin'),
//             'asal_sekolah' => $this->input->post('asal_sekolah'),
//         ];
//         $this->Mahasiswa_model->insert($data);
//         redirect('Mahasiswa');
//     }
//     function edit($id)
//     {
//         $data['judul'] = "Halaman Edit Mahasiswa";
//         $data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
//         $data['user'] = $this->db->get_where('user', [
//             'email' =>
//                 $this->session->userdata('email')
//         ])->row_array();
//         $data['prodi'] = $this->Prodi_model->get();
//         $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required', [
//             'required' => 'Nama Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('nim', 'NIM', 'required', [
//             'required' => 'NIM Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('email', 'Email', 'required', [
//             'required' => 'Email Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('prodi', 'Prodi', 'required', [
//             'required' => 'Prodi Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('alamat', 'Alamat', 'required', [
//             'required' => 'Alamat Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('asal_sekolah', 'Asal Sekolah', 'required', [
//             'required' => 'Asal Sekolah Mahasiswa Wajib di isi'
//         ]);
//         $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric', [
//             'required' => 'NO HP Mahasiswa Wajib di isi',
//             'numeric' => 'NO HP harus Angka'
//         ]);
//         $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required', [
//             'required' => 'Jenis Kelamin Mahasiswa Wajib di isi',
//         ]);
//         if ($this->form_validation->run() == false) {
//             $this->load->view("layout/header", $data);
//             $this->load->view("mahasiswa/vw_edit_mahasiswa", $data);
//         } else {
//             $data = [
//                 'nama' => $this->input->post('nama'),
//                 'nim' => $this->input->post('nim'),
//                 'email' => $this->input->post('email'),
//                 'prodi' => $this->input->post('prodi'),
//                 'alamat' => $this->input->post('alamat'),
//                 'jenis_kelamin' => $this->input->post('jenis_kelamin'),
//                 'no_hp' => $this->input->post('no_hp'),
//                 'asal_sekolah' => $this->input->post('asal_sekolah'),
//             ];
//             $id = $this->input->post('id');
//             $this->Mahasiswa_model->update(['id' => $id], $data);
//             $this->session->set_flashdata('message', '<div class="alert alert-success"
// role="alert">Data Mahasiswa Berhasil DiUbah!</div>');
//             redirect('Mahasiswa');
//         }
//     }


    // function ubah()
    // {
    //     $data = [
    //         'nama' => $this->input->post('nama'),
    //         'nim' => $this->input->post('nim'),
    //         'email' => $this->input->post('email'),
    //         'prodi' => $this->input->post('prodi'),
    //         'alamat' => $this->input->post('alamat'),
    //         'no_hp' => $this->input->post('no_hp'),
    //         'jenis_kelamin' => $this->input->post('jenis_kelamin'),
    //         'asal_sekolah' => $this->input->post('asal_sekolah'),
    //     ];
    //     $id = $this->input->post('id');
    //     $this->Mahasiswa_model->update(['id' => $id], $data);
    //     redirect('Mahasiswa');

    // }
}
?>