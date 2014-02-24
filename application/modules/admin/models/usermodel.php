<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Usermodel extends CI_Model {

    public function __construct() {
        $this->load->database();
        parent::__construct();
    }

    public function list_user() {
        $this->db->select();
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function get_user($id) {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function update_user($id, array $data) {
        $id = intval($id);
        $this->db->where('id', $id);
        $this->db->update('users', $data);
    }
    public function get_user_role()
    {
        $this->db->select();
        $query = $this->db->get('user_role');
        return $query->result_array();
    }

}

?>
