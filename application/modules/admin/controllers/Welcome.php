<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $data_user = $this->session->userdata('data_user');
        if (($this->session->userdata('data_user') == "")) {
            redirect('gkl_admin_com/user/login');
        } else {
            $data['iduser'] = $data_user['user_id'];
            $data['user'] = $data_user['username'];
            $data['nameuser'] = $data_user['name'];
            $data['jk'] = $data_user['jk'];
            $data['content'] = "index";
            $this->load->view("layout/main", $data);
//		$this->load->view('welcome_message');
        }
    }

}
