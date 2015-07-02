<?php

date_default_timezone_set("Asia/Jakarta");

class client extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('client_m');
        $this->load->helper(array('form', 'url'));
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
                'modelClient' => $this->client_m->client_list(),
                'content' => 'admin/client/view'
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
                'content' => 'admin/client/create',
                'detail' => '',
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function do_upload() {
        $config['upload_path'] = 'images/client/background/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('form_upload', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('sukses', $data);
        }
    }

    function Create() {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $this->load->library('form_validation');
            $title = $this->input->post('client');

            $this->form_validation->set_rules('client', 'Client', 'trim|required');
            $this->form_validation->set_rules('caption', 'Caption', 'trim|required');
            //$this->form_validation->set_rules('description', 'Text Content', 'trim|required|callback_description_check');

            if ($this->form_validation->run() == FALSE) {
                $this->Add();
            } else {
                $config['file_name'] = $title . '_' . '_' . $_FILES['background']['name'];
                $config['upload_path'] = './images/client/background/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '1600';
                $config['width'] = '600';
                $config['height'] = '400';

                //   Memuat Library Upload File
                $this->load->library('upload', $config);
                $this->upload->do_upload('background');
                $get_name = $this->upload->data();


                // Resize ukuran gambar
                $config['image_library'] = 'gd2';
                $config['source_image'] = './images/client/background/' . $get_name['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image'] = './images/client/background/risize/';
                $config['width'] = '800';
                $config['height'] = '400';

                $this->load->library('image_lib', $config);
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                }

                $nama_foto = $get_name['file_name'];
                $data = array(
                    'client' => $this->input->post('client'),
                    'caption' => $this->input->post('caption'),
                    'background' => $nama_foto,
                );


                if ($this->client_m->add_client($data)) {
                    $this->session->set_flashdata('message', 'Create client successful');
                    redirect('admin/client/view');
                } else {
                    $this->session->set_flashdata('error', 'Create client unsuccessful');
                    redirect('admin/client/add');
                }
            }
        }
    }

    function edit($id = false) {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = ($id) ? $id : $this->input->get('id_client');
            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'content' => 'admin/client/update',
                'detail' => $this->client_m->client_detail($id),
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function update() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = $this->input->post('id_client');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('client', 'Client', 'trim|required');
            $this->form_validation->set_rules('caption', 'Caption', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->edit($id);
            } else {
                $data = array(
                    'client' => $this->input->post('client'),
                    'caption' => $this->input->post('caption'),
                );
                if ($this->client_m->Update_client($data, $id)) {
                    $this->session->set_flashdata('message', 'Update client successful.');
                    $this->view($id);
                } else {
                    $this->session->set_flashdata('message', 'Update client unsuccessful.');
                    $this->edit($id);
                }
            }
        }
    }

    function edit_image($id = false) {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = ($id) ? $id : $this->input->get('id_client');
            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'content' => 'admin/client/update_image',
                'detail' => $this->client_m->client_detail($id),
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function update_image() {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = $this->input->post('id_client');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('client', 'Client', 'trim|required');

            $title = $this->input->post('client');

            if ($this->form_validation->run() == FALSE) {
                $this->edit_image($id);
            } else {
                $config['file_name'] = $title . '_' . '_' . $_FILES['background']['name'];
                $config['upload_path'] = './images/client/background/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '1600';
                $config['width'] = '600';
                $config['height'] = '400';

                //   Memuat Library Upload File
                $this->load->library('upload', $config);
                $this->upload->do_upload('background');
                $get_name = $this->upload->data();


                // Resize ukuran gambar
                $config['image_library'] = 'gd2';
                $config['source_image'] = './images/client/background/' . $get_name['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image'] = './images/client/background/risize/';
                $config['width'] = '800';
                $config['height'] = '400';

                $this->load->library('image_lib', $config);
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                }

                $nama_foto = $get_name['file_name'];

                $isinya = $this->client_m->client_detail($id);
//                $path = base_url() . 'images/client/background/' . $isinya->background;
//                $pathRisize = base_url() . 'images/client/background/risize/' . $isinya->background;
                $path = $_SERVER['DOCUMENT_ROOT'] . '/images/client/background/' . $isinya->background;
                $pathRisize = $_SERVER['DOCUMENT_ROOT'] . '/images/client/background/risize/' . $isinya->background;

                $this->deleteFiles($path);
                $this->deleteFilesRisize($pathRisize);

                $data = array(
                    'background' => $nama_foto,
                );

                if ($this->client_m->Update_client($data, $id)) {
                    $this->session->set_flashdata('message', 'Update client successful.');
                    $this->view($id);
                } else {
                    $this->session->set_flashdata('message', 'Update client unsuccessful.');
                    $this->edit_image($id);
                }
            }
        }
    }

    function Delete($id) {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $query = $this->db->get_where('tb_client', array('id_client' => $id));
            if ($query->num_rows() == 1) {
                $isinya = $this->client_m->client_detail($id);
//                $path = base_url() . 'images/client/background/' . $isinya->background;
//                $pathRisize = base_url() . 'images/client/background/risize/' . $isinya->background;
                $path = $_SERVER['DOCUMENT_ROOT'] . '/images/client/background/' . $isinya->background;
                $pathRisize = $_SERVER['DOCUMENT_ROOT'] . '/images/client/background/risize/' . $isinya->background;

                $this->deleteFiles($path);
                $this->deleteFilesRisize($pathRisize);

                if ($this->client_m->Delete_client($id)) {
                    $this->session->set_flashdata('message', 'Delete client successful.');
                    redirect('admin/client/view');
                } else {
                    $this->session->set_flashdata('error', 'Delete client unsuccessful.');
                    redirect('admin/client/view');
                }
            } else {
                $this->session->set_flashdata('error', 'Delete client unsuccessful.');
                redirect('admin/client/view');
            }
        }
    }

    function deleteFiles($path) {
        $files = glob($path . '*'); // get all file names
        foreach ($files as $file) { // iterate files
            if (is_file($file))
                unlink($file); // delete file
        }
    }

    function deleteFilesRisize($pathRisize) {
        $files = glob($pathRisize . '*'); // get all file names
        foreach ($files as $file) { // iterate files
            if (is_file($file))
                unlink($file); // delete file
        }
    }

}

?>
