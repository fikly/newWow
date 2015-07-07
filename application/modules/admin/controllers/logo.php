<?php

date_default_timezone_set("Asia/Jakarta");

class logo extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('logo_m');
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
                'modelLogo' => $this->logo_m->logo_list(),
                'content' => 'admin/logo/view'
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function Add() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $client = $this->logo_m->findsClient();
            $select_client = array();
            $select_client[""] = "- Select Client -";
            if (!empty($client)) {
                foreach ($client as $clnt) {
                    $select_client[$clnt->id_client] = $clnt->client;
                }
            }

            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'content' => 'admin/logo/create',
                'jk' => $data_user['jk'],
                'getClient' => $select_client,
                'detail' => '',
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function do_upload() {
        $config['upload_path'] = 'images/client/logo/';
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



            $this->form_validation->set_rules('id_client', 'Client', 'trim|required');
            //$this->form_validation->set_rules('description', 'Text Content', 'trim|required|callback_description_check');

            if ($this->form_validation->run() == FALSE) {
                $this->Add();
            } else {
                $client = $this->input->post('id_client');

                $data_client = $this->client_m->find_byid($client);
                $title = $data_client->client;

                $config['file_name'] = $title . '_' . '_' . $_FILES['logo']['name'];
                $config['upload_path'] = './images/client/logo/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '1600';
                $config['width'] = '600';
                $config['height'] = '400';

                //   Memuat Library Upload File
                $this->load->library('upload', $config);
                $this->upload->do_upload('logo');
                $get_name = $this->upload->data();


                // Resize ukuran gambar
                $config['image_library'] = 'gd2';
                $config['source_image'] = './images/client/logo/' . $get_name['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image'] = './images/client/logo/risize/';
                $config['width'] = '200';
                $config['height'] = '200';

                $this->load->library('image_lib', $config);
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                }

                $nama_foto = $get_name['file_name'];
                $data = array(
                    'logo' => $nama_foto,
                    'id_client' => $this->input->post('id_client')
                );


                if ($this->logo_m->add_logo($data)) {
                    $this->session->set_flashdata('message', 'Create logo client successful');
                    redirect('admin/logo/view');
                } else {
                    $this->session->set_flashdata('error', 'Create logo client unsuccessful');
                    redirect('admin/logo/add');
                }
            }
        }
    }

    function edit($id = false) {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = ($id) ? $id : $this->input->get('id_logo');
            $client = $this->logo_m->findsClient();
            $select_client = array();
            $select_client[""] = "- Select Client -";
            if (!empty($client)) {
                foreach ($client as $clnt) {
                    $select_client[$clnt->id_client] = $clnt->client;
                }
            }

            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'content' => 'admin/logo/update',
                'getClient' => $select_client,
                'detail' => $this->logo_m->logo_detail($id),
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function update() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = $this->input->post('id_logo');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('id_client', 'Client', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->edit($id);
            } else {
                $data = array(
                    'id_client' => $this->input->post('id_client')
                );
                if ($this->logo_m->Update_logo($data, $id)) {
                    $this->session->set_flashdata('message', 'Update logo client successful.');
                    $this->view($id);
                } else {
                    $this->session->set_flashdata('message', 'Update logo client unsuccessful.');
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
            $id = ($id) ? $id : $this->input->get('id_logo');
            $client = $this->logo_m->findsClient();
            $select_client = array();
            $select_client[""] = "- Select Client -";
            if (!empty($client)) {
                foreach ($client as $clnt) {
                    $select_client[$clnt->id_client] = $clnt->client;
                }
            }

            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'content' => 'admin/logo/update_image',
                'getClient' => $select_client,
                'detail' => $this->logo_m->logo_detail($id),
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function update_image() {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = $this->input->post('id_logo');

            $this->load->library('form_validation');
            $this->form_validation->set_rules('id_client', 'Client', 'trim|required');


            if ($this->form_validation->run() == FALSE) {
                $this->edit_image($id);
            } else {
                $client = $this->input->post('id_client');

                $data_client = $this->client_m->find_byid($client);
                $title = $data_client->client;

                $config['file_name'] = $title . '_' . '_' . $_FILES['logo']['name'];
                $config['upload_path'] = './images/client/logo/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '1600';
                $config['width'] = '600';
                $config['height'] = '400';

                //   Memuat Library Upload File
                $this->load->library('upload', $config);
                $this->upload->do_upload('logo');
                $get_name = $this->upload->data();


                // Resize ukuran gambar
                $config['image_library'] = 'gd2';
                $config['source_image'] = './images/client/logo/' . $get_name['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = TRUE;
                $config['new_image'] = './images/client/logo/risize/';
                $config['width'] = '800';
                $config['height'] = '400';

                $this->load->library('image_lib', $config);
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                }

                $nama_foto = $get_name['file_name'];

                $isinya = $this->logo_m->logo_detail($id);
//                $path = base_url() . 'images/client/background/' . $isinya->background;
//                $pathRisize = base_url() . 'images/client/background/risize/' . $isinya->background;
                $path = $_SERVER['DOCUMENT_ROOT'] . '/images/client/logo/' . $isinya->logo;
                $pathRisize = $_SERVER['DOCUMENT_ROOT'] . '/images/client/logo/risize/' . $isinya->logo;

                $this->deleteFiles($path);
                $this->deleteFilesRisize($pathRisize);

                $data = array(
                    'logo' => $nama_foto,
                );

                if ($this->logo_m->Update_logo($data, $id)) {
                    $this->session->set_flashdata('message', 'Update logo  client successful.');
                    $this->view($id);
                } else {
                    $this->session->set_flashdata('message', 'Update logo client unsuccessful.');
                    $this->edit_image($id);
                }
            }
        }
    }

    function Delete($id) {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $query = $this->db->get_where('tb_logo', array('id_logo' => $id));
            if ($query->num_rows() == 1) {
                $isinya = $this->logo_m->logo_detail($id);
//                $path = base_url() . 'images/client/background/' . $isinya->background;
//                $pathRisize = base_url() . 'images/client/background/risize/' . $isinya->background;
                $path = $_SERVER['DOCUMENT_ROOT'] . '/images/client/logo/' . $isinya->logo;
                $pathRisize = $_SERVER['DOCUMENT_ROOT'] . '/images/client/logo/risize/' . $isinya->logo;

                $this->deleteFiles($path);
                $this->deleteFilesRisize($pathRisize);

                if ($this->logo_m->Delete_logo($id)) {
                    $this->session->set_flashdata('message', 'Delete logo client successful.');
                    redirect('admin/logo/view');
                } else {
                    $this->session->set_flashdata('error', 'Delete logo client unsuccessful.');
                    redirect('admin/logo/view');
                }
            } else {
                $this->session->set_flashdata('error', 'Delete logo client unsuccessful.');
                redirect('admin/logo/view');
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
