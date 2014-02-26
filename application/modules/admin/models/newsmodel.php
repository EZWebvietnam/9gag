<?php 
class Newsmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_new()
    {
        $sql ="SELECT news.id as id_new,news.create_date,news.content,news.title,news.img,cate_new.id as id_cate,cate_new.name FROM news INNER JOIN cate_new ON cate_new.id = news.id_cate  ORDER BY news.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function insert_new(array $data)
    {
        $this->db->insert('news',$data);
        return $this->db->insert_id();
    }
    public function new_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('news');
        return $query->result_array();
    }
    public function update($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('news',$data);
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('news',array('id'=>$id));
    }
}
?>