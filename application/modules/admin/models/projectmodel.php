<?php 
class Projectmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_project()
    {
        $sql="SELECT users.full_name,project.create_date,project.id as id_pro,project.content, project.title,project.id_district,project.id_city,project.img,cate_project.id as id_cate, cate_project.name  FROM project INNER JOIN cate_project ON cate_project.id = project.id_cate INNER JOIN users ON users.id = project.id_user ORDER BY project.id DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_list_district_city($id)
    {
        $this->db->select('*');
        $this->db->where('provinceid',$id);
        $query = $this->db->get('district');
        return $query->result_array();
    }
    public function get_list_project_city($id)
    {
        $this->db->select('*');
        $this->db->where('id_city',$id);
        $query = $this->db->get('project');
        return $query->result_array();
    }
    public function insert(array $data)
    {
        $this->db->insert('project',$data);
        return $this->db->insert_id();
    }
    public function project_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('project');
        return $query->result_array();
    }
    public function update($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('project',$data);
      
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('project',array('id'=>$id));
    }
}
?>