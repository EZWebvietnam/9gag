<?php



if (!defined('BASEPATH'))

    exit('No direct script access allowed');



/**

 * @property CI_Upload $upload

 */

class Upload extends CI_Controller {



    public $view_data = array();

    private $upload_config;



     public function __construct() {



        parent::__construct();

        

    }



    public function index() {

        $this->load->library('myfunction');

        $this->load->helper(array('url', 'form'));

        $dir = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/post';

        $file = $this->myfunction->getlastfile($dir);

       

        $this->load->view('uploadify_v3', $this->view_data);

    }

    public function delete_file()
    {
        $code = $this->input->post('code');
        $file_name = $this->input->post('gid');
       if(is_file($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$code.'/'.$file_name)&&file_exists($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$code.'/'.$file_name))
       {
            unlink($_SERVER['DOCUMENT_ROOT'].ROT_DIR.'file/uploads/property/'.$code.'/'.$file_name);
            $data = array('msg'=>TRUE);
       }
       else
    {
       $data = array('msg'=>false); 
    }
       echo json_encode($data);
    }

    public function do_upload($code) {

        $this->load->library('upload');



        $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/nhadep/'.$code;



        if (!file_exists($image_upload_folder)) {

            mkdir($image_upload_folder, DIR_WRITE_MODE, true);

        }



        $this->upload_config = array(

            'upload_path' => $image_upload_folder,

            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',

            'max_size' => 2048,

            'remove_space' => TRUE,

            'encrypt_name' => TRUE,

        );



        $this->upload->initialize($this->upload_config);



        if (!$this->upload->do_upload()) {

            $upload_error = $this->upload->display_errors();

            echo json_encode($upload_error);

        } else {

            $file_info = $this->upload->data();

            echo json_encode($file_info);

        }

    }

     public function do_upload_property($code) {

        $this->load->library('upload');



        $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/property/'.$code;



        if (!file_exists($image_upload_folder)) {

            mkdir($image_upload_folder, DIR_WRITE_MODE, true);

        }



        $this->upload_config = array(

            'upload_path' => $image_upload_folder,

            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',

            'max_size' => 2048,

            'remove_space' => TRUE,

            'encrypt_name' => TRUE,

        );



        $this->upload->initialize($this->upload_config);



        if (!$this->upload->do_upload()) {

            $upload_error = $this->upload->display_errors();

            echo json_encode($upload_error);

        } else {

            $file_info = $this->upload->data();

            echo json_encode($file_info);

        }

    }

    public function do_workshop($id) {

      

        $this->load->library('upload');

        

        $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/services/xuong/' . $id;



        if (!file_exists($image_upload_folder)) {

            mkdir($image_upload_folder, DIR_WRITE_MODE, true);

        }



        $this->upload_config = array(

            'upload_path' => $image_upload_folder,

            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',

            'max_size' => 2048,

            'remove_space' => TRUE,

            'encrypt_name' => TRUE,

        );



        $this->upload->initialize($this->upload_config);

        

        if (!$this->upload->do_upload()) {

            $upload_error = $this->upload->display_errors();

            echo json_encode($upload_error);

        } else {

            $this->load->library('myfunction');

            $this->load->helper(array('url', 'form'));

            $file_info = $this->upload->data();

            $config['image_library'] = 'gd2';

            $config['source_image'] = $image_upload_folder."/".$file_info['file_name'];

            $file_thumb_name = $file_info['file_name'];

            $config['new_image'] = $image_upload_folder."/".$file_thumb_name;

            $config['create_thumb'] = TRUE;

            $config['maintain_ratio'] = TRUE;

            $config['width'] = 100;

            $config['height'] = 100;

            $this->load->library('image_lib', $config);

            $this->image_lib->resize();

            $file_thumb_name = $file_info['file_name']."_thumb";

            $file_thumb_name = str_replace($file_info['file_ext'], "", $file_thumb_name);

            $file_thumb_name = $file_thumb_name.$file_info['file_ext'];

            

            $data = array();

            $data = array('file'=>$file_info['file_name'],'id_xuong'=>$id,'file_thumb'=>$file_thumb_name);

            $this->load->model('admin/workshopmodel');

            $this->workshopmodel->insert_image($data);

            echo json_encode($file_info);

            

        }

        

    }



    public function do_ws() {

        $this->load->library('upload');

        $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/services';

        if (!file_exists($image_upload_folder)) {

            mkdir($image_upload_folder, DIR_WRITE_MODE, true);

        }



        $this->upload_config = array(

            'upload_path' => $image_upload_folder,

            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',

            'max_size' => 2048,

            'remove_space' => TRUE,

            'encrypt_name' => TRUE,

        );



        $this->upload->initialize($this->upload_config);



        if (!$this->upload->do_upload()) {

            $upload_error = $this->upload->display_errors();

            echo json_encode($upload_error);

        } else {

            $file_info = $this->upload->data();

            echo json_encode($file_info);

        }

    }



    public function upload_avatar() {

        $this->load->library('upload');



        $image_upload_folder = $_SERVER['DOCUMENT_ROOT'] . ROT_DIR . 'file/uploads/avatar';



        if (!file_exists($image_upload_folder)) {

            mkdir($image_upload_folder, DIR_WRITE_MODE, true);

        }



        $this->upload_config = array(

            'upload_path' => $image_upload_folder,

            'allowed_types' => 'png|jpg|jpeg|bmp|tiff',

            'max_size' => 2048,

            'remove_space' => TRUE,

            'encrypt_name' => TRUE,

        );



        $this->upload->initialize($this->upload_config);



        if (!$this->upload->do_upload()) {

            $upload_error = $this->upload->display_errors();

            echo json_encode($upload_error);

        } else {

            $file_info = $this->upload->data();

            echo json_encode($file_info);

        }

    }



}



/* End of file uploadify_v3.php */

/* Location: ./application/controllers/uploadify_v3.php */





