<?php 
class Propertymodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function list_property()
    {
        $sql="SELECT property.*,property.id as id_proper,loai_dia_oc.name as loai_dia_oc,loai_dia_oc.id as id_ldo, tinh_trang_phap_ly.name as tinh_trang_phap_ly,tinh_trang_phap_ly.id as id_ttpl,
        huong.name as huong,huong.id as id_huong,vi_tri_dia_oc.name as vi_tri_dia_oc,vi_tri_dia_oc.id as id_vtdo,phong_ngu.name as phong_ngu
        ,users.full_name,users.phone,users.address
        FROM property
        LEFT JOIN loai_dia_oc
        ON property.loai_dia_oc = loai_dia_oc.id
        LEFT JOIN tinh_trang_phap_ly
        ON property.tinh_trang_phap_ly = tinh_trang_phap_ly.id
        LEFT JOIN huong
        ON property.huong = huong.id
        LEFT JOIN vi_tri_dia_oc
        ON property.vi_tri_dia_oc = vi_tri_dia_oc.id
        LEFT JOIN phong_ngu
        ON property.so_phong_ngu = phong_ngu.id
        LEFT JOIN users
        ON users.id = property.id_user
        ORDER BY property.goi_giao_dich DESC";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function get_proper_detail($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id',$id);
        $query = $this->db->get('property');
        return $query->result_array();
    }
    public function update_property($id,array $data)
    {
        $id = intval($id);
        $this->db->where('id',$id);
        $this->db->update('property',$data);
    }
    public function inser_property(array $data)
    {
        $this->db->insert('property',$data);
        return $this->db->insert_id();
    }
    public function delete_property($id = null)
    {
        $this->db->delete('property',array('id'=>$id));
    }
}
?>