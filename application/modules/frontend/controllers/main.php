<?php

date_default_timezone_set("Asia/Jakarta");

class Main extends MX_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('main_model');
        $this->load->model('admin/career_m');
    }

    public function index() {
        $this->load->view("frontend/landingPage");
    }

    public function career() {
        $data = array(
            'careerList' => $this->career_m->career_list()
        );
        $this->load->view("frontend/career", $data);
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

    public function postcareer() {
        $response = array();

        $position = $this->input->post('position');
        $reg_name = $this->input->post('reg_name');
        $reg_mail = $this->input->post('reg_mail');
        $reg_subj = 'TES';
        $reg_phone = $this->input->post('reg_phone');

        $inp_mssg = '<html>';
        $inp_mssg .= '<head>';
        $inp_mssg .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        $inp_mssg .= '<title>' . htmlspecialchars($reg_subj, ENT_QUOTES, $this->email->charset) . '</title>';
        $inp_mssg .= '</head>';
        $inp_mssg .= '<body>';
        $inp_mssg .= 'Message From:<br />';
        $inp_mssg .= $reg_name . '<br />';
        $inp_mssg .= $position . '<br />';
        $inp_mssg .= $reg_mail . '<br />';
        $inp_mssg .= $reg_phone;
        $inp_mssg .= '</body>';
        $inp_mssg .= '</html>';

        if ($reg_name != "" && $reg_mail != "" && $reg_phone != "") {
            $this->email->from($reg_mail);
            $this->email->to('riky@totalit.co.id');
            $this->email->subject($reg_subj);
            $this->email->message($inp_mssg);
            if ($this->email->send()) {
                $response['status'] = 1;
                $response['message'] = "Your message has been sent, well get in touch with you shortly.";
            } else {
                $response['status'] = 0;
                $response['message'] = "An error occured, your message cannot be sent, please try again.";
            }
        } else {
            $response['status'] = 0;
            $response['message'] = "An error occured, your text not empty, please try again.";
        }
        echo json_encode($response);
    }

}

?>