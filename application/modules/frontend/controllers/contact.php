<?php

date_default_timezone_set("Asia/Jakarta");

class Contact extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('contact_model');
    }

    public function index() {
        $this->load->view("frontend/contact");
    }

    public function contact() {
        $data = array(
            'contact' => $this->contact_model->contact()
        );
        $this->load->view("frontend/contact", $data);
    }

}

?>