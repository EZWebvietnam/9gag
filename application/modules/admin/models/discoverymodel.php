<?php 
class Discoverymodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_discovery()
    {
       $sql_get_discovery = "SELECT discovery.title,discovery.img,discovery.content,discovery.create_date,discovery.id as id_disco, cate_discovery.id as id_cate,cate_discovery.name
        FROM discovery INNER JOIN cate_discovery ON cate_discovery.id = discovery.id_cate  ORDER BY discovery.id DESC";
        $query = $this->db->query($sql_get_discovery);
        return $query->result_array();
    }
    public function insert_discovery(array $data)
    {
        $this->db->insert('discovery',$data);
        return $this->db->insert_id();
    }
    public function discovery_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('discovery');
        return $query->result_array();
    }
    public function update($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('discovery',$data);
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('discovery',array('id'=>$id));
    }
}
?>