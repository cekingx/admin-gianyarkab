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
        $data['content'] = 'pengumuman/create';
        $this->load->view('layouts/master', $data);
    }

    public function store()
    {

    }

    public function edit($pengumuman_id)
    {

    }
    
    public function update()
    {

    }

    public function delete($pengumuman_id)
    {

    }
}