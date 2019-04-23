<?php

/**
 *
 * �������� �����: 
 *
 * @������ 11.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Settings extends CI_Controller {
	
	public function __construct() {		
		parent::__construct();
		//��������� - ����� �� �������������
		$this->lib_auth->check_admin();
	}
	
	//���������� ������� 
	function index () {
		
		//������� ��� ���������
		$rules = array (
		
			array (
				'field' => 'admin_login',
				'label' => '�����',
				'rules' => 'required|az_numeric',
			),
			
			array (
				'field' => 'admin_pass',
				'label' => '������',
				'rules' => 'required|max_length[40]',
			),

			array (
				'field' => 'per_page',
				'label' => '������� �� ��������',
				'rules' => 'required|numeric',
			),
		
		);
		
		//��������� �������
		$this->form_validation->set_rules($rules);
		
		//��������� ����� �� ����������
		if ($this->form_validation->run ()) {
			//���� �� ��������� - ��������� ���������
			//��� ��� �� ������� - ����� �� ��������� � �� ������������ �����
			$data = array ();
			$data['cms_admin_login'] = $this->input->post ('admin_login');
			$data['cms_admin_pass'] = $this->input->post ('admin_pass');
			$data['cms_per_page'] = $this->input->post ('per_page');
			
			//������ � ����� - ��� ������ ��������� ������ ���������
			//�������� UPDATE
			foreach ($data as $key=>$one) {
				$this->db->where ('param',$key);
				//��� update ����� ������ - ������ ������ �������� ������
				$this->db->update ('settings',array ('value' => $one));			
			}
			
			//����� ���������� �������� - ������������ �� �������
			redirect ('admin');
			
			//�������� �������� - ���� ��� ����� ������, �� ��������������
			//������ (�� ����) ��������� �� ��������� ����� ������			
			
		} else {
			//����� - ����� �����
			$this->lib_view->admin_page ('settings',array(),'���������');
			
			//������ �������� ������ - �.�. �������� �� ��������� ������� ���
		}
		
		
	}

	
}

?>