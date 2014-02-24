<?php 

class Advmodel extends CI_Model

{

    public function __construct()

    {

        parent::__construct();

        $this->load->database();

    }

    public function insert(array $data)

    {

        $this->db->insert('adv_detail',$data);

        return $this->db->insert_id();

    }

    public function delete($id)

    {

        $id = intval($id);

        $this->db->delete('adv_detail',array('id'=>$id));

    }

    public function load_adv()

    {

        $sql = "SELECT adv_detail.id as id_detail,adv_detail.file,adv_detail.exp_date,adv.name FROM adv_detail INNER JOIN adv ON adv.id = adv_detail.vi_tri";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

    public function load_type_adv()

    {

        $this->db->select();

        $query = $this->db->get('adv');

        return $query->result_array();

    }

    public function load_adv_detail($id)

    {

        $id = intval($id);

        $sql = "SELECT adv_detail.id as id_detail,adv_detail.file,adv_detail.exp_date,adv.name,adv_detail.vi_tri,adv_detail.link FROM adv_detail INNER JOIN adv ON adv.id = adv_detail.vi_tri WHERE adv_detail.id = $id";

        $query = $this->db->query($sql);

        return $query->result_array();

    }
    public function update($id,array $data)
    {
        $this->db->where('id',$id);
        $this->db->update('adv_detail',$data);
    }

}

?>