<?php 

class Crud extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->helper('url'); 
    }
    
    public function index() {
        $data['title'] = "Menampilkan data tabel";
        $data['judul'] = "Membuat CRUD dengan CodeIgniter";
        $data['user'] = $this->m_data->ambil_data2()->result();
        $this->load->view('v_tampil', $data);  
    }

    public function tambah() {
        $data['title'] = "Membuat tambah data";
        $data['judul'] = "Membuat tambah data dengan CodeIgniter";
        $this->load->view('v_input', $data);
    }

    public function tambah_aksi() {
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
        $this->m_data->input_data($data, 'tb_masuk');
        redirect('crud','refresh');
    }

    public function edit($id) {
        $data['title'] = "Edit Data tabel";
        $data['judul'] = "Membuat EDIT pada CRUD dengan CodeIgniter";
        $where = array('id'=> $id);
        $data['user'] = $this->m_data->edit_data($where, 'tb_masuk')->result();
        $this->load->view('v_edit', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');

        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' =>$pekerjaan
        );

        $where = array(
            'id' => $id
        );

        $this->m_data->update_data($where, $data, 'tb_masuk');
        redirect('crud','refresh');
    }

    public function hapus($id) {
        $where = array('id' => $id);
        $this->m_data->hapus_data($where, 'tb_masuk');
        redirect('crud','refresh'); 
    }

}
