<?php

class User_model extends CI_Model {

    protected $user = 'tb_user';
    protected $up = 'tb_user_position';

    //put your code here
    public function add_user($data) {
        $query = $this->db->insert($this->user, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function login($username, $password) {
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->where("username", $username);
        $this->db->where("password", $password);
//        $this->db->order_by("id_news", "desc");
        $query = $this->db->get();
        return $query->row();
    }

    function Update_user($data, $id) {
        $this->db->where('user_id', $id);
        $query = $this->db->update($this->user, $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function Up_list() {
        $this->db->select('*');
        $this->db->where('status', 'A');
        $this->db->from('tb_user_position');
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result() : null;
    }

    function User_detail($id) {
        $this->db->select('*');
        $this->db->from('tb_user');
        //$this->db->join('');
        $this->db->where('tb_user.user_id', $id);
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->row() : null;
    }

    function Delete_user($id) {
        $this->db->where('user_id', $id);
        if ($this->db->delete($this->user)) {
            return true;
        } else {
            return false;
        }
    }

    function User_list() {
        $this->db->select('*');
        $this->db->from('tb_user');
        $query = $this->db->get();
        return $query;
    }

    function change_password($id, $data) {
        $this->db->where('user_id', $id);
        return $this->db->update($this->user, $data);
    }

    function forgot_password($email, $data) {


        $this->db->where('email', $email);

        return $this->db->update($this->user, $data);
    }

    function check_email_exist($email) {
        return $this->db->get_where($this->user, array('email' => $email))->row();
    }

}

?>
