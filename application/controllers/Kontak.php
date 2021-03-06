<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('kontak_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['content'] = 'kontak/index';
        $data['kontak'] = $this->kontak_model->getAll();

        $this->load->view('layouts/master', $data);
    }

    public function show($kontak_person_id)
    {
        $data['kontak'] = $this->kontak_model->getById($kontak_person_id);
        if(empty($data['kontak'])) {
            show_404();
        }

        $data['content'] = 'kontak/show';
        $data['title'] = $data['kontak']['kontak_person_isi_aduan'];

        $this->load->view('layouts/master', $data);
    }

    public function create()
    {
        if(!empty($this->session->flashdata('error'))) {
            $data['error'] = $this->session->flashdata('error');
        }

        if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $this->load->view('kontak/create');
    }

    public function store()
    {
        $kontak = $this->kontak_model;
        $validation = $this->form_validation;
        $validation->set_rules($kontak->rules());

        if($validation->run()) {
            $kontak->save();
            $this->session->set_flashdata('message', 'Data berhasil dibuat');
            redirect('hubungi-kami');
        }  else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('hubungi-kami');
        }
    }

    public function edit($kontak_person_id)
    {

    }

    public function update()
    {

    }

    public function delete($kontak_person_id)
    {
        if(!empty($this->kontak_model->getById($kontak_person_id))) {
            $this->kontak_model->delete($kontak_person_id);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('admin/hubungi-kami');
        } else {
            show_404();
        }
    }
}