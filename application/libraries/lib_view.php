<?php

/**
 *
 * �������� �����: ���������� ��������� 
 *
 * @������ 3.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class lib_view {
	
	
	//������� ���������� ��������� ������� �� ������ ������, ������ � ��������
	public function admin_page ($pagename, $data = array (), $title = '') {
		
		//������� ������� ����� - ��� ������� ������ ���������
		$d = array ();
		$d['page_title'] = $title;

		
		$CI = &get_instance (); //������ � CodeIgniter
        
//����� ����
//$data['page']=$CI->mdl_menu_ul->getAllEntries();
//$CI->load->vars($data);        

		$data['validation_errors'] = validation_errors ();        



$CI->load->view ('admin/blocks/preheader_view.php',$d);
$CI->load->view ('admin/blocks/header_view');            
//$CI->load->view ('admin/blocks/top_menu_view');  
		
		//������ ������� ����� ���������
		$CI->load->view ('admin/'.$pagename, $data);


        
$CI->load->view ('admin/blocks/sideleft_view',$data);
$CI->load->view ('admin/blocks/sideright_view',$data);        
        
        
		
		//������ ��� ������
		
		
		//����� ����� ������
//		$CI->load->view ('admin/footer.php',$fdata);		
$CI->load->view ('admin/blocks/footer_view'); 		
	}
	
	
    public function login_page($page, $data = array (), $title = '')
    {
        $CI = &get_instance (); //������ � CodeIgniter
	
		//������� ������� ����� - ��� ������� ������ ���������
		$d = array ();
		$d['page_title'] = $title;

		$CI->load->view ('admin/blocks/preheader_view',$d); 
        $CI->load->view ('admin/blocks/header_view');
//        $CI->load->view ('admin/blocks/top_menu_view');            
 
      
		
		//���������	        
        	
		$CI->load->view ($page,$data);	
        
        $CI->load->view ('admin/blocks/sideleft_view',$data);
        $CI->load->view ('admin/blocks/sideright_view',$data);        	
		//������ ��� ������
		$fdata = array();
		$fdata['validation_errors'] = validation_errors ();
		
		//����� ����� ������

		$CI->load->view ('admin/blocks/footer_view',$fdata);
    }
    
    
    
    //������� ���������� ��������� �� ������ ������, ������ � �������� �� ��
	public function user_page ($pagename,$year,$month) {  
		
		$CI = &get_instance (); //������ � CodeIgniter
		


		$CI->db->where('page_id',$pagename);
        
		$query = $CI->db->get ('pages');
		
		if ($query->num_rows()>0) {
			
		$row = $query->row_array(); 
		
		}
         else {
		die ('����� �������� �� ����������');			
		}
	

		$data = array ();
		$data['page_title'] = $row['title'];
        $data['keywords'] = $row['keywords'];
        $data['content'] = $row['text'];
        $data['news'] = $CI->mdl_new->getnewsEntries(); 

$CI->load->model('Mycal');
$data['calendar'] = $CI->Mycal->generate($year = date('Y'), $month = date('m'));  
        
        //����� ����1
        $data['page']=$CI->mdl_menu_ul->getAllEntries();
        $CI->load->vars($data);
        
                //����� ����2
        $data['pagenew']=$CI->mdl_menu_new->getAllEntries();
        $CI->load->vars($data);
        
       
        
        
        $data['validation_errors'] = '';
        

		$CI->load->view ('blocks/preheader_view',$data);
        $CI->load->view ('blocks/header_view',$data);            
//        $CI->load->view ('blocks/top_menu_view');            
        $CI->load->view ('blocks/content_view',$data);
        $CI->load->view ('blocks/sideleft_view',$data);
$CI->load->view ('blocks/sideright_view',$data);        
        $CI->load->view ('blocks/footer_view',$data);      

	
       }  
    
    	public function stat_page ($pagename) {  
		
		$CI = &get_instance (); //������ � CodeIgniter
		


		$CI->db->where('page_id',$pagename);
        
		$query = $CI->db->get ('stat_pages');
		
		if ($query->num_rows()>0) {
			
		$row = $query->row_array(); 

		} 
        else {
		die ('����� �������� �� ����������');			
		}
	

		$data = array ();
		$data['page_title'] = $row['title'];
        $data['keywords'] = $row['keywords'];
        $data['content'] = $row['text'];
        $data['news'] = $CI->mdl_new->getnewsEntries(); 
        
$CI->load->model('Mycal');
$data['calendar'] = $CI->Mycal->generate($year = date('Y'), $month = date('m'));  
        
        //����� ����1
        $data['page']=$CI->mdl_menu_ul->getAllEntries();
        $CI->load->vars($data);
        
                //����� ����2
        $data['pagenew']=$CI->mdl_menu_new->getAllEntries();
        $CI->load->vars($data);




        
        $data['validation_errors'] = '';
        

		$CI->load->view ('blocks/preheader_view',$data);
        $CI->load->view ('blocks/header_view',$data);            
//        $CI->load->view ('blocks/top_menu_view');            
        $CI->load->view ('blocks/content_view',$data);
        $CI->load->view ('blocks/sideleft_view',$data);
$CI->load->view ('blocks/sideright_view',$data);        
        $CI->load->view ('blocks/footer_view',$data);      

	
       } 
       
       
       
       
       
       
       
       
       
       
       
       
       
       public function ul_page ($pagename) {  
		
		$CI = &get_instance (); //������ � CodeIgniter
		


		$CI->db->where('page_id',$pagename);
        
		$query = $CI->db->get ('ulpages');
		
		if ($query->num_rows()>0) {
			
		$row = $query->row_array(); 

		} 
        else {
		die ('����� �������� �� ����������');			
		}
	

		$data = array ();
		$data['page_title'] = $row['title'];
        $data['keywords'] = $row['keywords'];
        $data['content'] = $row['text'];
        $data['news'] = $CI->mdl_new->getnewsEntries(); 
        
$CI->load->model('Mycal');
$data['calendar'] = $CI->Mycal->generate($year = date('Y'), $month = date('m')); 


    
        //����� ����1
        $data['page']=$CI->mdl_menu_ul->getAllEntries();
        $CI->load->vars($data);
        
                //����� ����2
        $data['pagenew']=$CI->mdl_menu_new->getAllEntries();
        $CI->load->vars($data);




        
        $data['validation_errors'] = '';
        

		$CI->load->view ('blocks/preheader_view',$data);
        $CI->load->view ('blocks/header_view',$data);            
//        $CI->load->view ('blocks/top_menu_view');            
        $CI->load->view ('blocks/content_view',$data);
        $CI->load->view ('blocks/sideleft_view',$data);
$CI->load->view ('blocks/sideright_view',$data);        
        $CI->load->view ('blocks/footer_view',$data);      

	
       } 
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        public function simple_page ($pagename, $data = array (), $title = '') {		
		
		$CI = &get_instance (); //������ � CodeIgniter
	
		$data['page_title'] = $title;
    
        //����� ����1
        $data['page']=$CI->mdl_menu_ul->getAllEntries();
        $CI->load->vars($data);
        
                //����� ����2
        $data['pagenew']=$CI->mdl_menu_new->getAllEntries();
        $CI->load->vars($data);
        
       
        $data['news'] = $CI->mdl_new->getnewsEntries();         
        $data['validation_errors'] = '';
$CI->load->model('Mycal');
$data['calendar'] = $CI->Mycal->generate($year = date('Y'), $month = date('m'));        
        
		$CI->load->view ('blocks/preheader_view',$data);
        $CI->load->view ('blocks/header_view',$data);            
       // $CI->load->view ('blocks/top_menu_view');            
        $CI->load->view ($pagename,$data);
        $CI->load->view ('blocks/sideleft_view',$data);
$CI->load->view ('blocks/sideright_view',$data);        
        $CI->load->view ('blocks/footer_view',$data); 
       
	}
    
    	 
    
	
	
}


?>