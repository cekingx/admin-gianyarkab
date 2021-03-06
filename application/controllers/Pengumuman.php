<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('pengumuman_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['content'] = 'pengumuman/index';
        $data['pengumumans'] = $this->pengumuman_model->getAll();

        $this->load->view('layouts/master', $data);
    }

    public function show($pengumuman_id)
    {
        $data['pengumuman'] = $this->pengumuman_model->getById($pengumuman_id);
        if (empty($data['pengumuman'])) {
            show_404();
        }

        $data['content'] = 'pengumuman/show';
        $data['title'] = $data['pengumuman']['pengumuman_judul'];
        $this->load->view('layouts/master', $data);
    }

    public function create()
    {
        if(!empty($this->session->flashdata('error'))) {
            $data['error'] = $this->session->flashdata('error');
        }

        $data['content'] = 'pengumuman/create';
        $this->load->view('layouts/master', $data);
    }

    public function store()
    {
        $pengumuman = $this->pengumuman_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengumuman->rules());

        if ($validation->run()) {
            $pengumuman->save();
            $this->session->set_flashdata('message', 'Pengumuman berhasil dibuat');
            redirect('/admin/pengumuman');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/admin/pengumuman/create');
        }
    }

    public function edit($pengumuman_id)
    {
        $data['pengumuman'] = $this->pengumuman_model->getById($pengumuman_id);
        if(empty($data['pengumuman'])) {
            show_404();
        }

        if(!empty($this->session->flashdata('error'))) {
            $data['error'] = $this->session->flashdata('error');
        }

        $data['content'] = 'pengumuman/edit';
        $this->load->view('layouts/master', $data);
    }
    
    public function update()
    {
        $post = $this->input->post();
        $pengumuman_id = $post['pengumuman_id'];
        $pengumuman = $this->pengumuman_model;
        $validation = $this->form_validation;
        $validation->set_rules($pengumuman->rules());

        if ($validation->run()) {
            $pengumuman->update($pengumuman_id);
            $this->session->set_flashdata('message', 'Pengumuman berhasil diubah');
            redirect('/admin/pengumuman');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect("/admin/pengumuman/edit/$pengumuman_id");
        }
    }

    public function delete($pengumuman_id)
    {
        if(!empty($this->pengumuman_model->getById($pengumuman_id))) {
            $this->pengumuman_model->delete($pengumuman_id);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('/admin/pengumuman');
        } else {
            show_404();
        }
    }
}