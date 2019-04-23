<?php

/**
 *
 * �������� �����: 
 *
 * @������ 9.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Images extends CI_Controller {
	
	//�����������
	public function __construct() {		
		parent::__construct();
		
        //�������� ��� ��� ����
		$this->lib_auth->check_admin();
        
   
        
        
		
	}
	
	//������ ��������
	function index () {
		
		//�������� ������� Directory
		$this->load->helper ('directory');
		
		//������ ������
	//	$list = directory_map ('./img/upload/',TRUE);
        
        $list = scandir ('./img/upload/');
        $list = array_diff($list, array('.', '..', 'thumbs','pages_img','pages_file','pages_media'));
        		
		//������� ������ ������
		$data = array ();
		$data['list'] = $list;
		
		//���������� ��������� ������
		$this->lib_view->admin_page('images/index',$data,'������ ��������');
		
	}	
	
	//�������� ��������
	function del ($filename) {
		
		$filename = base64_decode($filename);
		
		unlink ('./img/upload/'.$filename);
       
        unlink ('./img/upload/thumbs/'.$filename);
                
		

$this->load->model('mdl_gall');
$this->mdl_gall->dell_db_ent($filename);       
        
        
        redirect ('admin/images');
		
	}
	
	//����������� ����� ��������
	function show_upload () {
	  $this->lib_view->admin_page ('images/upload',array(),'�������� ��������');
	}
	
	//���������� ���������� ��������
	function do_upload () {

 
 
       
        $this->load->library ('upload');
		
		//������������ ��� ��������
		$config = array ();
			
		$config['upload_path'] = './img/upload/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
		
		//��������� ���������
		$this->upload->initialize($config);				


   
             //���������� ������ ��������
//		$this->upload->do_upload();
        
        if ( ! $this->upload->do_upload())

        {

       redirect ('admin/images/show_upload');

        }
        else
        {
$this->load->model('mdl_gall');
$this->mdl_gall->insert_db_ent();  
        




        //������ ���������
        $filedata = $this->upload->data();
		
		$config = array(
			'source_image' => $filedata['full_path'],
			'new_image' => './img/upload/thumbs/',
			'maintain_ratio' => true,
			'width' => 150,
			'height' => 100
		);
		
	        
        $this->load->library('image_lib', $config); 

        $this->image_lib->resize();
        

    
$this->load->library('image_lib', $config); 

$this->image_lib->resize();


        
        //������������� � ������ ��������
        redirect ('admin/images');
   		
        }
}
        
        
        

}

?>