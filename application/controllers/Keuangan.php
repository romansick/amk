<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] = 'Dashboard';
        $this->load->model('Admin_model');
        $data['tipe'] = $this->Admin_model->countRumah();
        $data['lokasi'] = $this->Admin_model->countRumahByLokasi();

        $this->load->view('template/head', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('keuangan/index', $data);
        $this->load->view('template/footer', $data);
    }
    public function transaksi()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Admin_model');
        $data['bayar'] = $this->Admin_model->getTransaksi();


        $this->load->view('template/head', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('keuangan/transaksi', $data);
        $this->load->view('template/footer', $data);
    }
    public function view_invoice($id)
    {
        $data['title'] = 'Invoice';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Admin_model');
        $data['invoice'] = $this->Admin_model->getInvoice($id);

        $this->load->view('template/head', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('keuangan/invoice', $data);
        $this->load->view('template/footer', $data);
    }
    public function konsumen()
    {
        $data['title'] = 'Data Konsumen';
        $this->load->model('Admin_model');
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['getuser'] = $this->Admin_model->getKonsumen();

        $this->load->view('template/head', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('keuangan/user', $data);
        $this->load->view('template/footer', $data);
    }
    public function rumah()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Admin_model');

        $data['title'] = 'Data Rumah';
        $data['kategori'] = $this->db->get('tipe_rumah')->result_array();
        $data['lokasi'] = $this->db->get('lokasi_rumah')->result_array();
        $data['list'] = $this->db->get('list_rumah')->result_array();
        $data['rumah'] = $this->Admin_model->getRumah();

        $this->load->view('template/head', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('keuangan/rumah', $data);
        $this->load->view('template/footer', $data);
    }

    public function detailrumah($id)
    {
        $data['title'] = 'Detail Rumah';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Admin_model');
        $data['rumah'] = $this->Admin_model->countRumahById($id);

        $this->load->view('template/head', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('keuangan/detail_rumah', $data);
        $this->load->view('template/footer', $data);
    }
}
