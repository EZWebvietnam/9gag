<?php 
class Businessmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_business()
    {
        $this->db->select();
        $query = $this->db->get('business');
        return $query->result_array();
    }
    public function insert( array $data)
    {
        $this->db->insert('business',$data);
        return $this->db->insert_id();
    }
    public function business_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('business');
        return $query->result_array();
    }
    public function update($id, array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('business',$data);
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('business',array('id'=>$id));
    }
}
?>