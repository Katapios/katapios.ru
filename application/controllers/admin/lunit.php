<?php

/**
 *
 * �������� �����: ���������� ����� � ������ 
 *
 * @������ 1.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Lunit extends CI_Controller {
	
	function login () {
		
		//������� ���������
		$rules = array (
		
			array (
				'field' => 'login',
				'label' => '�����',
				'rules' => 'required|az_numeric',
			),
			
			array (
				'field' => 'pass',
				'label' => '������',
				'rules'	=> 'required|max_length[40]'			
			),
		
		);
		
		$this->form_validation->set_rules($rules);
		
		//���� ��������� ������ - �������� ������� ����
		if ($this->form_validation->run ()) {
			
			$this->lib_auth->do_login ($this->input->post ('login'),$this->input->post('pass'));
			
		} else {
			//����� - ���������� �����
			$this->lib_view->login_page('login',array (),'���� ��������������');
		}
		
	}
	
	function logout () {
		//�������� ��� ��� ����
		$this->lib_auth->check_admin();
		
		$this->lib_auth->logout ();
	}
	
	function index () {
		
		//�������� ��� ��� ����
		$this->lib_auth->check_admin();		
		
		$data = array ();
		
//		$this->db->select_sum('clicks');
//		$query = $this->db->get ('links');
		
//		$res = $query->row_array();
//		$data['clicks'] = $res['clicks'];
	 	
		
		//����� �������� �������
		$data['m_pages'] = $this->db->count_all_results ('stat_pages');
		
		//����� �������������� �������
		$data['d_pages'] = $this->db->count_all_results ('pages');
		//�����
//		$this->db->select_max('clicks');
//		$query = $this->db->get ('links');
//		
//		$res = $query->row_array();
//		$data['maxcount'] = $res['clicks'];	
//		
		//������������ ��������
//		$this->db->where ('clicks',$data['maxcount']);
//		$query = $this->db->get ('links');
//		$res = $query->row_array();
		
//		$data['max'] = $res['url']; //�� ������ � ������������ �������������
		
		$this->lib_view->admin_page('main',$data,'�������');
	}
	
	
}


?>