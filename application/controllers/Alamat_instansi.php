<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alamat_instansi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('alamat_instansi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['content'] = 'alamat_instansi/index';
        $data['alamat_instansi'] = $this->alamat_instansi_model->getAll();

        $this->load->view('layouts/master', $data);
    }

    public function show($alamat_instansi_id)
    {
        $data['alamat_instansi'] = $this->alamat_instansi_model->getById($alamat_instansi_id);
        if(empty($data['alamat_instansi'])) {
            show_404();
        }

        $data['content'] = 'alamat_instansi/show';
        $data['title'] = $data['alamat_instansi']['alamat_instansi_nama'];

        $this->load->view('layouts/master', $data);
    }

    public function create()
    {
        if(!empty($this->session->flashdata('error'))) {
            $data['error'] = $this->session->flashdata('error');
        }

        $data['content'] = 'alamat_instansi/create';
        $this->load->view('layouts/master', $data);
    }

    public function store()
    {
        $alamat_instansi = $this->alamat_instansi_model;
        $validation = $this->form_validation;
        $validation->set_rules($alamat_instansi->rules());

        if($validation->run()) {
            $alamat_instansi->save();
            $this->session->set_flashdata('message', 'Data berhasil dibuat');
            redirect('/admin/alamat-instansi');
        }  else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/admin/alamat-instansi/create');
        }
    }

    public function edit($alamat_instansi_id)
    {
        $data['alamat_instansi'] = $this->alamat_instansi_model->getById($alamat_instansi_id);
        if(empty($data['alamat_instansi'])) {
            show_404();
        }

        if(!empty($this->session->flashdata('error'))) {
            $data['error'] = $this->session->flashdata('error');
        }
        $data['content'] = 'alamat_instansi/edit';
        $data['title'] = $data['alamat_instansi']['alamat_instansi_nama'];
        $this->load->view('layouts/master', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $alamat_instansi_id = $post['alamat_instansi_id'];
        $alamat_instansi = $this->alamat_instansi_model;
        $validation = $this->form_validation;
        $validation->set_rules($alamat_instansi->rules());

        if($validation->run()) {
            $alamat_instansi->update($alamat_instansi_id);
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect('/admin/alamat-instansi');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect("/admin/alamat-instansi/edit/$alamat_instansi_id");
        }
    }

    public function delete($alamat_instansi_id)
    {
        if(!empty($this->alamat_instansi_model->getById($alamat_instansi_id))) {
            $this->alamat_instansi_model->delete($alamat_instansi_id);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('admin/alamat-instansi');
        } else {
            show_404();
        }
    }
}