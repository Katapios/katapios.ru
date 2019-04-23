<?php

/**
 *
 * �������� �����: ���������� ����������� 
 *
 * @������ 10.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');


class lib_auth {
	
	//��������� �������� �� ������������ ������ � ������
	//� ������ ����� - ������������
	function do_login ($login, $pass) {
		
		$CI = &get_instance ();
		
		//���������� ������
		$right_login = $CI->config->item ('cms_admin_login');
		$right_pass = $CI->config->item ('cms_admin_pass');
		
		//�������� �� ������������
		if (($right_login==$login) && ($right_pass==$pass)) {
			//���� ��������� - ���������� ������
			$ses = array ();
			$ses['admin_logined'] = 'ok'; //����� �����
			//�������������� ������ - ���
			$ses['admin_hash'] = $this->the_hash ();
			//������
			$CI->session->set_userdata($ses);
						
			//�������� �� �������
			redirect ('admin');
			
		} else {
			//����� - �������� �� ��������� �����
			redirect ('admin/login');
		}
		
	}
	
	//��������� �������������� ��� �������� 
	function the_hash () {
		
		$CI = &get_instance ();
		
		//��������� ���: ������+IP+���.�����
		$hash = md5 ($CI->config->item('pass').$_SERVER['REMOTE_ADDR'].'CICMS');
		
		return $hash;
		
	}
	
	//�������� - �������� �� ����
	function check_admin () {
		
		$CI = &get_instance ();
		
		if (($CI->session->userdata('admin_logined')=='ok')
				&& ($CI->session->userdata('admin_hash')==$this->the_hash())) {
					
					return TRUE; //���� �� � ������� - ������ ������� 
					
				} else {
					
					//����� �������� �� �������� �����
					redirect ('admin/login');
				}
		
	}
	
	//������ - ������ ������
	function logout () {
		
		$CI = &get_instance ();

		$ses = array ();
		$ses['admin_logined'] = ''; 
		$ses['admin_hash'] = '';
			
		$CI->session->unset_userdata($ses); //������� ������
		
		//�������� �� ��������� �����
		redirect ('admin/login');		
	}
	
	
}


?>