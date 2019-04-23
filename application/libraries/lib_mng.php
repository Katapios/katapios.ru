<?php

/**
 *
 * �������� �����: ����� �������� ��� ������������ 
 *
 * @������ 3.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class lib_mng {	

    function add ($name, $title = '') {
        
        $CI = &get_instance ();
        
        $md = 'mdl_'.$name;
        
        $CI->load->model ($md); //�������� ������
         
        if ($CI->{$md}->add ()!==FALSE) {
            
            //������ �������� �� ������ ������
            redirect ('admin/'.$name.'s');
			            
        }
        else {      
            
            //����� ���������� ����� ����������
            $CI->lib_view->admin_page($name.'/add',array (), $title);
            
        }
        
    }
    
    /**
    * �������� �������� � ������  
    */
    function show ($name,$id,$title = '') {
        
        $CI = &get_instance ();
        
        $md = 'mdl_'.$name;
                
        $CI->load->model ($md);     
        
        $data = $CI->{$md}->get ($id);
        
        if (empty ($data)) {
            die ('����� ������ ��� � ����');
        }

        $CI->lib_view->admin_page($name.'/view',$data,$title);
                
    }
    
    

    

	/**
     * �������������� 
     */
    function edit ($name, $id, $title = '') {
        
        $CI = &get_instance ();
        
        $md = 'mdl_'.$name;
        
        $CI->load->model ($md); //�������� ������
        
        //��������� ������ ��� ����� �������
        $data = $CI->$md->get ($id);
         
        if ($CI->{$md}->edit ($id)!==FALSE) {
            
            //������ �������� �� ������ ������
            redirect ('admin/'.$name.'s');
			            
        }
        else {      
            
            //����� ���������� ����� ��������������
            $CI->lib_view->admin_page($name.'/edit',$data, $title);
            
        }
        
    }

    /**
    * �������� ������  
    */
    function del ($name,$id) {
        
        $CI = &get_instance ();        
        $md = 'mdl_'.$name;                
        $CI->load->model ($md);    
        
        $CI->{$md}->del ($id);        

        redirect ('admin/'.$name.'s'); //������ � ������ �������
                
    }
    
    //����� ������
    function show_index ($name, $title = '', $start_page = 0) {
    	
		//��������� �� ��� �� ������� ������
		if ($start_page === 'list') {
						
			$this->reset_set(); //����� ����� ������
			 
			$start_page = 0; //������ 0 - ��� ������					
		}		
		
		//���� �� ����� - ������ ����
		if (!is_numeric ($start_page)) {
			$start_page = 0;
		}
		
        $CI = &get_instance ();
        
        $md = 'mdl_'.$name;
                
        $CI->load->model ($md);     
        
        
        //������ ���������� Pagination
        $CI->load->library ('pagination');
        
        //�������� ������ ����������
        $total = $CI->{$md}->getlist ();
        
        //���������� ������� ��������
        $config = array ();
        $config['base_url'] = base_url ().'admin/'.$name.'s/index/';  
        $config['total_rows'] = count ($total);		        
        $config['per_page'] = $CI->config->item ('cms_per_page');
        $config['uri_segment'] = 4;
        
        //������������� ���������
        $CI->pagination->initialize ($config);
        
		unset ($total); //����������� ������ �� ���� ����������
		
		$list = $CI->{$md}->getlist ($start_page);
		        
        $data = array ();
        $data['list'] = $list; //����������� ������ �������
        $data['page_links'] = $CI->pagination->create_links (); //������

    	$CI->lib_view->admin_page($name.'/index',$data,$title);
    	
    }
    
    //������� ��������� ����������
    function set_sort ($name, $field) {
    	
        $CI = &get_instance ();        
        $md = 'mdl_'.$name;                
        $CI->load->model ($md);
        
        //������ � ������� ��� ������
        $data = array ();
        $data['sort_by'] = $field;
        $data['sort_dir'] = 'ASC';
        
        //���� � ������ ������� ���������� - ������ �� ��������
        if ( ($CI->session->userdata ('sort_by') == $field) AND
          		($CI->session->userdata ('sort_dir') == 'ASC')) {
          	$data['sort_dir'] = 'DESC';		
   		}      		

		//���������� � ������        
        $CI->session->set_userdata($data);
    	
    	//�������� � ������ �������
    	redirect ('admin/'.$name.'s/');
		    	
    }
    
    //����� ���������� � ������
    function reset_set () {
    	
		$CI = &get_instance ();
		
		//������ ����� ��� �������
    	$data = array ();
    	$data['sort_by'] = '';
    	$data['sort_dir'] = '';
    	$data['search'] = '';
    	$data['search_by'] = '';
    	
    	//����������
    	$CI->session->unset_userdata($data);
    }
    
    //�����
	function do_search ($name) {
		
        $CI = &get_instance ();        
		
		$search = $CI->input->post ('str');
		$search_by = $CI->input->post ('field');
		
		//���� ������ �� ������ ��� ������ - ������ ��������
		if (empty ($search)) {
			redirect ('admin/'.$name.'s/');
		}
		
		//������������ ������ ��� ������
		
        //������ � ������� ��� ������
        $data = array ();
		$data['search'] = $search;        
        $data['search_by'] = $search_by;

		//���������� � ������        
        $CI->session->set_userdata($data);
    	
    	//�������� � ������ �������
    	redirect ('admin/'.$name.'s/');
		    	
		
		
	}
	
	
}

?>