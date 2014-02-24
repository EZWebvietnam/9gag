<?php 
class Catepropertymodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_list_cate_pro()
    {
        $this->db->select();
        $query = $this->db->get('loai_dia_oc');
        return $query->result_array();
    }
    public function get_list_vi_tri_dia_oc_pro()
    {
        $this->db->select();
        $query = $this->db->get('vi_tri_dia_oc');
        return $query->result_array();
    }
    public function get_list_tt_pn()
    {
        $this->db->select();
        $query = $this->db->get('tinh_trang_phap_ly');
        return $query->result_array();
    }
    public function get_list_huong()
    {
        $this->db->select();
        $query = $this->db->get('huong');
        return $query->result_array();
    }
    public function get_phong_ngu()
    {
        $this->db->select();
        $query = $this->db->get('phong_ngu');
        return $query->result_array();
    }
    public function list_cate_property()
    {
        $sql="SELECT * FROM loai_dia_oc";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('loai_dia_oc');
        return $query->result_array();
    }
    public function insert(array $data)
    {
        $this->db->insert('loai_dia_oc',$data);
        return $this->db->insert_id();
    }
    public function update($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('loai_dia_oc',$data);
    }
    public function delete($id)
    {
        $id = intval($id);
        $this->db->delete('loai_dia_oc',array('id'=>$id));
    }
}
?>