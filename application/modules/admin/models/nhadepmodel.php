<?php 
class Nhadepmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_nha_dep()
    {
        $sql ="SELECT *,nhadep.id as id_nha FROM nhadep LEFT JOIN cate_nhadep ON nhadep.id_cate = cate_nhadep.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function insert(array $data)
    {
        $this->db->insert('nhadep',$data);
        return $this->db->insert_id();
    }
    public function insert_to_nha_dep_img(array $data)
    {
        $this->db->insert('nhadep_img',$data);
        return $this->db->insert_id();
    }
    public function nha_dep_cate()
    {
        $sql ="SELECT * FROM cate_nhadep";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function nhadep_dt($id)
    {
        $id = intval($id);
        $sql ="SELECT * FROM nhadep WHERE nhadep.id =$id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function update($id, array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('nhadep',$data);
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('nhadep',array('id'=>$id));
    }
    public function delete_img($id)
    {
        $id = intval($id);
        $this->db->delete('nhadep_img',array('id_nha'=>$id));
    }
}
?>