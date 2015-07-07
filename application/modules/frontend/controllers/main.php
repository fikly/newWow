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

        $reg_name = $this->input->post('reg_name');
        $reg_mail = $this->input->post('reg_mail');
        $posisi = $this->input->post('position');
        $reg_phone = $this->input->post('reg_phone');
        $reg_subj = 'Career Submission - wow.id';

        $inp_mssg = '<table>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Name</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_name . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Position</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $posisi . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Email</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_mail . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Phone</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_phone . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '</table>';

        if ($reg_name != "" && $reg_mail != "" && $reg_phone != "" && $posisi != "") {
            $this->email->to('hrd@wow.id');
            $this->email->subject($reg_subj);
            $this->email->message($inp_mssg);
            if ($this->email->send()) {
                $response['status'] = 1;
                $response['message'] = "Your message has been sent, well get in touch with you shortly";
            } else {
                $response['status'] = 0;
                $response['message'] = $this->email->print_debugger();
            }
        } else {
            $response['status'] = 0;
            $response['message'] = "An error occured, your text not empty, please try again.";
        }
        echo json_encode($response);
    }

    public function email() {
        $this->load->view("frontend/email");
    }

    public function postemail() {
        $response = array();

        $reg_name = $this->input->post('reg_name');
        $reg_city = $this->input->post('reg_city');
        $reg_mail = $this->input->post('reg_mail');
        $reg_message = $this->input->post('reg_message');
        $reg_subj = 'Contact Submission - wow.id';

        $inp_mssg = '<table>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Name</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_name . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>City</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_city . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Email</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_mail . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Message</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_message . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '</table>';

        if ($reg_name != "" && $reg_mail != "" && $reg_city != "" && $reg_message != "") {
            $this->email->to('didie@wow.id');
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