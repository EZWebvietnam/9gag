<?php 
class Cateprojectmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_cate_project()
    {
        $sql="SELECT * FROM cate_project";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('cate_project');
        return $query->result_array();
    }
    public function insert(array $data)
    {
        $this->db->insert('cate_project',$data);
        return $this->db->insert_id();
    }
    public function update($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('cate_project',$data);
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('cate_project',array('id'=>$id));
    }
}
?>