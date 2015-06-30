<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class C_home extends MX_Controller {

    function C_home() {
        parent::__construct();
        $this->load->model('m_home');
        $this->load->library('antispam');
    }

    public function index() {
        $city = $this->m_home->findsCity();
        $select_city = array();
        $select_city[""] = "- Select City -";
        if (!empty($city)) {
            foreach ($city as $cty) {
                $select_city[$cty->city_name] = $cty->city_name;
            }
        }

        $response = array();
        $configs = array('img_height' => '50');
        $data['getCity'] = $select_city;
        $data['captcha'] = $this->antispam->get_antispam_image($configs);
        $data['capimg'] = $data['captcha']['image'];
        $data['capwrd'] = $data['captcha']['word'];
        $data['content'] = 'index_home';
        $this->load->view("v_home", $data);
    }

    public function e404() {

        $this->load->view('v_404');
    }

    public function postcontact() {
        $response = array();

        $reg_lokasi = $this->input->post('lokasi');
        $reg_jumlah_hari = $this->input->post('jumlah_hari');
        $reg_tgl_acara = $this->input->post('tanggal_acara');
        $reg_jenis_acara = $this->input->post('jenis_acara');
        $reg_jumlah_undangan = $this->input->post('jumlah_undangan');
        $reg_jenis_undangan = $this->input->post('jenis_undangan');
        $reg_jumlah_personil = $this->input->post('jumlah_personil_tamu');
        $reg_jumlah_personil_regis_baru = $this->input->post('jumlah_personil_regis_baru');
        $reg_mail = $this->input->post('email');
        $reg_telp = $this->input->post('telp');
        $reg_note = $this->input->post('note');
        $reg_atsp = sha1($this->input->post('reg_atsp'));
        $reg_atsp_wrd = $this->input->post('reg_atsp_wrd');

        $inp_mssg = '<table>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Lokasi Acara</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_lokasi . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Jumlah Hari</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_jumlah_hari . ' Hari</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Tanggal Acara</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_tgl_acara . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Jenis Acara</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_jenis_acara . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Jumlah Undangan</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_jumlah_undangan . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Jenis Undangan</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_jenis_undangan . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Jumlah Personil Tamu</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_jumlah_personil . ' Orang</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Jumlah Personil Registrasi Baru</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_jumlah_personil_regis_baru . ' Orang</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Email</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_mail . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Nomer HP</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_telp . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '<tr>';
        $inp_mssg .= '<td>Note</td>';
        $inp_mssg .= '<td>:</td>';
        $inp_mssg .= '<td>' . $reg_note . '</td>';
        $inp_mssg .= '</tr>';
        $inp_mssg .= '</table>';

        if ($reg_atsp == $reg_atsp_wrd) {

            $this->email->subject('Tes');
            $this->email->to('riky@totalit.co.id');
            $this->email->message($inp_mssg);

            if ($this->email->send()) {
                $data = array(
                    'lokasi' => $reg_lokasi,
                    'jumlah_hari' => $reg_jumlah_hari,
                    'tanggal_acara' => date('Y-m-d', strtotime($reg_tgl_acara)),
                    'jenis_acara' => $reg_jenis_acara,
                    'jumlah_undangan' => $reg_jumlah_undangan,
                    'jenis_undangan' => $reg_jenis_undangan,
                    'jumlah_personil_tamu' => $reg_jumlah_personil,
                    'jumlah_personil_regis_baru' => $reg_jumlah_personil_regis_baru,
                    'email' => $reg_mail,
                    'telp' => $reg_telp,
                    'note' => $reg_note,
                );

                $this->m_home->add_contact($data);

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

}
