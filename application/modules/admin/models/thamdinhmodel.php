<?php 
class thamdinhmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_tham_dinh()
    {
        $this->db->select();
        $query = $this->db->get('tham_dinh_gia');
        return $query->result_array();
    }
    public function delete_tham_dinh($id)
    {
        $this->db->delete('tham_dinh_gia',array('id'=>$id));
    }
}
?>