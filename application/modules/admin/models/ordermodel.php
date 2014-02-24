<?php 
class ordermodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function get_list_order()
    {
        $sql="SELECT *,orders.id as id_order FROM orders INNER JOIN users ON orders.id_user = users.id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function detail_order($id)
    {
        $sql="SELECT * FROM orders INNER JOIN users ON orders.id_user = users.id WHERE orders.id = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function user_blance($id)
    {
        $sql="SELECT * FROM user_blance  WHERE id_user = $id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function update_blance($id,array $data)
    {
        $this->db->where('id_user',$id);
        $this->db->update('user_blance',$data);
    }
    public function update_orders($id)
    {
        $this->db->where('id',$id);
        $this->db->update('orders',array('status'=>1));
    }
}
?>