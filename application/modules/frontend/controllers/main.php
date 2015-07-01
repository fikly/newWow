<?php

date_default_timezone_set("Asia/Jakarta");

class Main extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('main_model');
    }

    public function index() {
        $this->load->view("frontend/landingPage");
    }

    public function career() {
        $this->load->view("frontend/career");
    }

    public function page() {
        $data = array(
            'viewClient' => $this->main_model->view_client()
        );
        $this->load->view("frontend/page", $data);
    }

    public function content($id) {
        $data = array(
            'contentClient' => $this->main_model->content_client($id),
            'getClient' => $this->main_model->get_client($id)
        );
        $this->load->view("frontend/client", $data);
    }

}

?>