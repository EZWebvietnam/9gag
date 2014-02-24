<?php 
class Emailsubcrisemodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_email()
    {
        $this->db->select();
        $query = $this->db->get('email_subcrise');
        return $query->result_array();
    }
    public function delete($id)
    {
        $this->db->delete('email_subcrise',array('id'=>$id));
    }
}
?>