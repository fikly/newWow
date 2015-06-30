<?php

date_default_timezone_set("Asia/Jakarta");

class user extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {

        }
    }

    function list_view() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('admin/login');
        } else {
            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'modelUser' => $this->user_model->user_list(),
                'content' => 'admin/user/list_view'
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function Register() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $data = array(
                'nameuser' => $data_user['name'],
                'username' => $data_user['username'],
                'iduser' => $data_user['user_id'],
                'jk' => $data_user['jk'],
                'content' => 'admin/user/create',
                'detail' => '',
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function view($id) {
        $data_user = $this->session->userdata('data_user');
//        $data['test'] = "test AA";
        $data['id'] = ($id) ? $id : $this->input->get('user_id');
        $data['detail'] = $this->user_model->user_detail($id);
        $data['content'] = "admin/user/view";
        $data['iduser'] = $data_user['user_id'];
        $data['user'] = $data_user['username'];
        $data['nameuser'] = $data_user['name'];
        $this->load->view("admin/layout/main", $data);
    }

    function edit($id = false) {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $id = ($id) ? $id : $this->input->get('user_id');
            $data = array(
                'iduser' => $data_user['user_id'],
                'user' => $data_user['username'],
                'nameuser' => $data_user['name'],
                'jk' => $data_user['jk'],
                'content' => 'admin/user/update',
                'detail' => $this->user_model->user_detail($id),
            );
            $this->load->view("admin/layout/main", $data);
        }
    }

    function change_password() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $data = array(
                'iduser' => $data_user['user_id'],
                'user' => $data_user['username'],
                'nameuser' => $data_user['name'],
                'content' => 'admin/user/changePassword',
            );
        }
        $this->load->view("admin/layout/main", $data);
    }

    function change_pass_process() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('admin/user/login');
        } else {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
            $this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|min_length[4]|max_length[32]|matches[password]');
            if ($this->form_validation->run() == FALSE) {
                $this->change_password();
            } else {
                $id = $data_user['user_id'];
//                $username = $data_user['username'];
//                $oldpassword = $this->input->post('old_password');
                $password = $this->input->post('password');
                $data = array(
                    'password' => md5($password)
                );
                if ($this->user_model->change_password($id, $data)) {
                    $this->session->set_flashdata('message', 'Change password successful.');
                    $this->view($id);
                } else {
                    //Ini Gagal
                }

//                $this->view($id);
            }
        }
    }

    function Create() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $this->load->library('form_validation');
            // field name, error message, validation rules
            $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|is_unique[tb_user.username]');
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email|is_unique[tb_user.email]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[32]');
            $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
            $this->form_validation->set_rules('jk', 'JK', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->register();
            } else {
                $data = array(
                    'username' => $this->input->post('username'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'jk' => $this->input->post('jk'),
                );
                if ($this->user_model->add_user($data)) {
                    $this->session->set_flashdata('message', 'Add user successful.');
                    redirect('admin/user/list_view');
                } else {
                    $this->session->set_flashdata('error', 'Add user failed .');
                    redirect('admin/user/list_view');
                }
            }
        }
    }

    function Update() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[32]');
            $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');
            $this->form_validation->set_rules('jk', 'JK', 'trim|required');

            $id = $this->input->post('user_id');
            if ($this->form_validation->run() == FALSE) {
                $this->edit($id);
            } else {

                $data = array(
                    'username' => $this->input->post('username'),
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => md5($this->input->post('password')),
                    'jk' => $this->input->post('jk'),
                );
                if ($this->user_model->update_user($data, $id)) {
                    $this->session->set_flashdata('message', 'Update user successful.');
                    redirect('admin/user/list_view');
                } else {
                    $this->session->set_flashdata('message', 'Update user successful.');
                    redirect('admin/user/list_view');
                }
            }
        }
    }

    function login() {
        $data = array(
            'content' => 'admin/user/login',
        );
        $this->load->view("admin/layout/main_login", $data);
    }

    function forgot_password() {

        $data = array(
            'content' => 'admin/user/forgot_password',
        );
        $this->load->view("admin/layout/main_login", $data);
    }

    function forgot_pass_process() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required|min_length[4]|max_length[32]|matches[password]');
        if ($this->form_validation->run() == FALSE) {
            $this->forgot_password();
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $check_email = $this->user_model->check_email_exist($email);

            if (!empty($check_email)) {
                $data = array(
                    'password' => md5($password),
                );
                $this->user_model->forgot_password($email, $data);
                redirect('login/');
//                } else {
//                    $this->session->set_flashdata('message', 'Your email incorrect.');
//                    $this->forgot_password();
            } else {
                $this->session->set_flashdata('message', 'Your email doesn`t exist.');
                $this->forgot_password();
            }
        }
    }

    function signin() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->login();
        } else {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));

            $result = $this->user_model->login($username, $password);
            if (!empty($result)) {
                $data = array(
                    'user_id' => $result->user_id,
                    'username' => $result->username,
                    'name' => $result->name,
                    'email' => $result->email,
                    'jk' => $result->jk,
                    'logged_in' => TRUE,
                );
                $this->session->set_userdata('data_user', $data);
                redirect('welcome');
//                } else {
//                    $this->session->set_flashdata('message', 'Username or password incorrect.');
//                    redirect('user/login');
//                }
            } else {
                $this->session->set_flashdata('message', 'Username doesn`t exist.');
                redirect('login');
            }
        }
    }

    function logout() {
        $this->session->unset_userdata('data_user');
        redirect('login', 'refresh');
    }

    function Delete($id) {
        if (($this->session->userdata('data_user') == "")) {
            redirect('login');
        } else {
            $query = $this->db->get_where('tb_user', array('user_id' => $id));
            if ($query->num_rows() == 1) {
                if ($this->user_model->Delete_user($id)) {
                    $this->session->set_flashdata('message', 'Data user berhasil terhapus');
                    redirect('admin/user/list_view');
                } else {
                    $this->session->set_flashdata('error', 'Data user gagal terhapus');
                    redirect('admin/user/list_view');
                }
            } else {
                $this->session->set_flashdata('error', 'Data user gagal terhapus');
                redirect('admin/user/list_view');
            }
        }
    }

    //put your code here
}
?>
