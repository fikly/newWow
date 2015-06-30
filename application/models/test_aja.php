<?php
class M_home extends CI_Model {
    function postcontact() {
        $response = array();

        $reg_name = $this->input->post('reg_name');
        $reg_mail = $this->input->post('reg_mail');
        $reg_telp = $this->input->post('reg_telp');
        $reg_subj = $this->input->post('reg_subj');
        $reg_mssg = $this->input->post('reg_mssg');
        $reg_atsp = sha1($this->input->post('reg_atsp'));
        $reg_atsp_wrd = $this->input->post('reg_atsp_wrd');

        $inp_mssg = '<html>';
        $inp_mssg .= '<head>';
        $inp_mssg .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
        $inp_mssg .= '<title>' . htmlspecialchars($reg_subj, ENT_QUOTES, $this->email->charset) . '</title>';
        $inp_mssg .= '</head>';
        $inp_mssg .= '<body>';
        $inp_mssg .= 'Message From:<br />';
        $inp_mssg .= $reg_name . '<br />';
        $inp_mssg .= $reg_mail . '<br />';
        $inp_mssg .= $reg_telp . '<br /><br />';
        $inp_mssg .= $reg_mssg;
        $inp_mssg .= '</body>';
        $inp_mssg .= '</html>';

        if ($reg_atsp == $reg_atsp_wrd) {

            $this->email->from('noreply.grandkamala@gmail.com');
            $this->email->to('ricko@totalit.co.id');
//            $this->email->to('markom@grandkamala.com');
            $this->email->cc('info@totalit.co.id');
            $this->email->subject($reg_subj);
            $this->email->message($inp_mssg);

            if ($this->email->send()) {
                $response['status'] = 1;
                $response['message'] = "Your message has been sent, we'll get in touch with you shortly.";
            } else {
                $response['status'] = 0;
                $response['message'] = "An error occured, your message cannot be sent, please try again.";
            }
        } else {
            $response['status'] = 0;
            $response['message'] = "An error occured, your anti-spam text is incorrect, please try again.";
        }

        echo json_encode($response);
    }

    function News_list() {
//        $this->db->select('*');
        $this->db->where(array('status' => 'A', 'position' => 'Thumbnail', 'description' => ''));
        $this->db->order_by("id_news", "desc");
//        $this->db->from('tbl_news');
        $query = $this->db->get('tbl_news');
//        return $query->result();
//        $query = $this->db->get($this->news);

        return $query->result();
    }

    function News_list_full() {
        $this->db->where(array('status' => 'A', 'position' => 'Thumbnail'));

        $this->db->order_by("id_news", "desc");
        $query = $this->db->get("tbl_news");
//        return $query->result();
//        $query = $this->db->get($this->news);

        return $query->result();
    }

    function News_list_banner() {
        $this->db->where(array('status' => 'A', 'position' => 'Banner'));

        $this->db->order_by("id_news", "desc");
        $query = $this->db->get("tbl_news");
//        return $query->result();
//        $query = $this->db->get($this->news);

        return $query->result();
    }

}

?>