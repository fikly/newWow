<?php

class Image_m extends CI_Model {

    protected $contact = 'tb_contact';

    function contact_list() {
        $this->db->select('*');
        $this->db->from('tb_contact');
        $query = $this->db->get();
        return $query;
    }

    function contact_detail($id) {
        $this->db->where('id_contact', $id);
        $query = $this->db->get($this->contact);
        return ($query->num_rows() > 0) ? $query->row() : null;
    }

}

?>
