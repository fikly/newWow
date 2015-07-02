<?php

date_default_timezone_set("Asia/Jakarta");

class career extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('career_m');
    }

    public function index() {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {

        }
    }

    function view() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'modelCareer' => $this->career_m->career_list(),
                'content' => 'admin/career/view'
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function Add() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'content' => 'admin/career/create',
                'detail' => '',
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function Create() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $this->load->library('form_validation');
            // field name, error message, validation rules
            $this->form_validation->set_rules('posisi', 'Publish', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $this->Add();
            } else {
                $data = array(
                    'posisi' => $this->input->post('posisi'),
                    'description' => $this->input->post('description'),
                );
                if ($this->career_m->add_career($data)) {
                    $this->session->set_flashdata('message', 'Create career successful');
                    redirect('admin/career/view');
                } else {
                    $this->session->set_flashdata('error', 'Create career unsuccessful');
                    redirect('admin/career/add');
                }
            }
        }
    }

    function edit($id = false) {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = ($id) ? $id : $this->input->get('id_career');
            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'content' => 'admin/career/update',
                'detail' => $this->career_m->career_detail($id),
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function update() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = $this->input->post('id_career');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('posisi', 'Posisi', 'trim|required');
            $this->form_validation->set_rules('description', 'Description', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->edit($id);
            } else {
                $data = array(
                    'posisi' => $this->input->post('posisi'),
                    'description' => $this->input->post('description'),
                );
                if ($this->career_m->Update_career($data, $id)) {
                    $this->session->set_flashdata('message', 'Update career successful');
                    redirect('admin/career/view');
                } else {
                    $this->session->set_flashdata('message', 'Update career unsuccessful');
                    $this->edit($id);
                }
            }
        }
    }

    function Delete($id) {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $query = $this->db->get_where('tb_career', array('id_career' => $id));
            if ($query->num_rows() == 1) {
                if ($this->career_m->Delete_career($id)) {
                    $this->session->set_flashdata('message', 'Delete career successful');
                    redirect('admin/career/view');
                } else {
                    $this->session->set_flashdata('error', 'Delete career unsuccessful');
                    redirect('admin/career/view');
                }
            } else {
                $this->session->set_flashdata('error', 'Delete career unsuccessful');
                redirect('admin/career/view');
            }
        }
    }

}

?>
