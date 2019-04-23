<?php

/**
 *
 * �������� �����: ���������� "��������" 
 *
 * @������ 3.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Ulpages extends CI_Controller {
	
	var $iname = 'ulpage';
	
	//�����������
	public function __construct() {		
		parent::__construct();
		
		//�������� ��� ��� ����
		$this->lib_auth->check_admin();
		
		$mdl_name = 'mdl_'.$this->iname; //��� ������
		
		$this->load->model ($mdl_name); //��������� ������
		
	}
	
	function index ($link_num = 0) {		
		
		$this->lib_mng->show_index($this->iname,'������ �������', $link_num);
		
	}
	
	/**
	 * ���������� ����� ��������
	 */
 	function add () {
 		
 		$this->load->helper ('tinymce');
 		
        $this->lib_mng->add ($this->iname,'���������� ����� ��������');
 	}
 	
 	/**
 	 * �������� ��������
 	 */
	function show ($id) {		
		$this->lib_mng->show ($this->iname,$id,'�������� ��������');		
	} 

	/**
	 * �������������� ��������
	 */
 	function edit ($id) {
 		$this->load->helper ('tinymce');//�������� ������� ��� HTML-���������	
        $this->lib_mng->edit ($this->iname,$id,'��������� ��������');
 	}
 	
	/**
	 * �������� ��������
	 */
 	function del ($id) {
        $this->lib_mng->del ($this->iname,$id);
 	}
	 
	/**
 	 * ����������  
	 */
	function sort ($field) {
		$this->lib_mng->set_sort ($this->iname, $field);
	}
	
	/**
 	 * �����  
	 */
	function search () {
		$this->lib_mng->do_search ($this->iname);
	} 	
	 	
	
}


?>