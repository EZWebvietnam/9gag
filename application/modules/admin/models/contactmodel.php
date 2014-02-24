<?php 
class Contactmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_contact()
    {
        $this->db->select();
        $query = $this->db->get('contact');
        return $query->result_array();
    }
    public function delete($id)
    {
        $this->db->delete('contact',array('id'=>$id));
    }
}
?>