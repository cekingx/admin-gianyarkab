<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatanbupati extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('jabatanbupati_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['content'] = 'jabatanbupati/index';
        $data['jabatanbupati'] = $this->jabatanbupati_model->getAll();

        $this->load->view('layouts/master', $data);
    }

    public function show($jabatan_bupati_id)
    {
        $data['jabatanbupati'] = $this->jabatanbupati_model->getById($jabatan_bupati_id);
        if(empty($data['jabatanbupati'])) {
            show_404();
        }

        $data['content'] = 'jabatanbupati/show';
        $data['title'] = $data['jabatanbupati']['jabatan_bupati_nama'];

        $this->load->view('layouts/master', $data);
    }

    public function create()
    {
        if(!empty($this->session->flashdata('error'))) {
            $data['error'] = $this->session->flashdata('error');
        }

        $data['content'] = 'jabatanbupati/create';
        $this->load->view('layouts/master', $data);
    }

    public function store()
    {
        $jabatanbupati = $this->jabatanbupati_model;
        $validation = $this->form_validation;
        $validation->set_rules($jabatanbupati->rules());

        if($validation->run()) {
            $jabatanbupati->save();
            $this->session->set_flashdata('message', 'Data berhasil dibuat');
            redirect('/admin/jabatan-bupati');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/admin/jabatan-bupati/create');
        }
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}