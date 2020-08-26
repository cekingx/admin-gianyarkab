<?php

class Subdomain extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('subdomain_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if(!empty($this->session->flashdata('message'))) {
            $data['message'] = $this->session->flashdata('message');
        }

        $data['content'] = 'subdomain/index';
        $data['subdomain'] = $this->subdomain_model->getAll();

        $this->load->view('layouts/master', $data);
    }

    public function show($sub_domain_id)
    {

    }

    public function create()
    {
        if(!empty($this->session->flashdata('error'))) {
            $data['error'] = $this->session->flashdata('error');
        }

        $data['content'] = 'subdomain/create';
        $this->load->view('layouts/master', $data);
    }

    public function store()
    {
        $subdomain = $this->subdomain_model;
        $validation = $this->form_validation;
        $validation->set_rules($subdomain->rules());

        if($validation->run()) {
            $subdomain->save();
            $this->session->set_flashdata('message', 'Data berhasil dibuat');
            redirect('/admin/subdomain');
        }  else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('/admin/subdomain/create');
        }
    }

    public function edit($sub_domain_id)
    {
        $data['subdomain'] = $this->subdomain_model->getById($sub_domain_id);
        if(empty($data['subdomain'])) {
            show_404();
        }

        if(!empty($this->session->flashdata('error'))) {
            $data['error'] = $this->session->flashdata('error');
        }
        $data['content'] = 'subdomain/edit';
        $this->load->view('layouts/master', $data);
    }

    public function update()
    {
        $post = $this->input->post();
        $sub_domain_id = $post['sub_domain_id'];
        $subdomain = $this->subdomain_model;
        $validation = $this->form_validation;
        $validation->set_rules($subdomain->rules());

        if($validation->run()) {
            $subdomain->update($sub_domain_id);
            $this->session->set_flashdata('message', 'Data berhasil diubah');
            redirect('/admin/subdomain');
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect("/admin/subdomain/edit/$sub_domain_id");
        }
    }

    public function delete($sub_domain_id)
    {
        if(!empty($this->subdomain_model->getById($sub_domain_id))) {
            $this->subdomain_model->delete($sub_domain_id);
            $this->session->set_flashdata('message', 'Data berhasil dihapus');
            redirect('admin/subdomain');
        } else {
            show_404();
        }
    }
}