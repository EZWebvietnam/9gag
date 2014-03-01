<?php 
class Postmodel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function load_home($number,$offset)
    {
        $number = intval($number);
        $offset = intval($offset);
        $sql = "SELECT *,cate.id as id_cate,posts.id as id_post FROM posts INNER JOIN cate ON cate.id = posts.id_cate WHERE status = 1 ORDER BY posts.count_view DESC LIMIT $offset,$number";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
     public function count_load_home()
    {
        $sql = "SELECT *,cate.id as id_cate,posts.id as id_post FROM posts INNER JOIN cate ON cate.id = posts.id_cate WHERE status = 1";
        $query = $this->db->query($sql);
        return count($query->result_array());
    }
    public function load_post($code)
    {
        $code = addslashes($code);
        $sql = "SELECT *,cate.id as id_cate,posts.id as id_post FROM posts INNER JOIN cate ON cate.id = posts.id_cate WHERE posts.code = '$code' AND status = 1";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function update_post($code,array $data)
    {
        $this->db->where('code',$code);
        $this->db->update('posts',$data);
    }
    public function top_post_hot()
    {
        $sql='SELECT * FROM posts WHERE count_like > 1000 ORDER BY rand() LIMIT 3';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    public function insert_like_post(array $data)
    {
        $this->db->insert('like_post',$data);
        return $this->db->insert_id();
    }
    public function get_like_post($id_user,$id_post)
    {
        $id_user = intval($id_user);
        $id_post = intval($id_post);
        $this->db->select();
        $this->db->where('id_user',$id_user);
        $this->db->where('id_post',$id_post);
        $query = $this->db->get('like_post');
        return $query->result_array();
    }
    public function new_post()
    {
        $sql='SELECT * FROM posts  ORDER BY posts.id DESC LIMIT 3';
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    //
    public function load_member_post($id)
    {
        $id = intval($id);
        $this->db->select();
        $this->db->where('id_user',$id);
        $this->db->where('status',1);
        $query = $this->db->get('posts');
        return count($query->result_array());
    }
    public function load_member_post_query($id,$position,$limit)
    {
        $id = intval($id);
        $position = intval($position);
        $limit = intval($limit);
        $sql="SELECT * FROM posts WHERE id_user = $id LIMIT $position,$limit";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
}
?>