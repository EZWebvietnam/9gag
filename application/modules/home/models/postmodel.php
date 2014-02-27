<?php 
class Postmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function load_home()
    {
        $sql = "SELECT *,cate.id as id_cate,posts.id as id_post FROM posts INNER JOIN cate ON cate.id = posts.id_cate WHERE status = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function load_post($code)
    {
        $code = addslashes($code);
        $sql = "SELECT *,cate.id as id_cate,posts.id as id_post FROM posts INNER JOIN cate ON cate.id = posts.id_cate WHERE posts.code = '$code' AND status = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>