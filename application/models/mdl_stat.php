<?php

/**
 *
 * �������� �����: ������ ��� "��������" 
 *
 * @������ 8.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class mdl_stat extends CRUD {
	
	var $table = 'stat_pages'; //��� �������
	
	var $idkey = 'page_id';
	
	//������� ��������� ��� ����������
	var $add_rules = array (
	
			array (
				'field'	=> 'page_id',
				'label'	=> 'ID ��������',
				'rules' => 'required|az_numeric|uniq[page_id]' 					
			),
			
			array (
				'field'	=> 'title',
				'label' => '��������',
				'rules' => 'required|valid_title'
			
			),
            
            array (
				'field'	=> 'keywords',
				'label' => '�������� �����',
				'rules' => 'required|valid_title'
			
			),
			
			array (
				'field' => 'text',
				'label' => '�����',
				'rules' => ''
			)		
					
					
	
	);
	
	//������� ��������� ��� ��������������
	var $edit_rules = array (

			array (
				'field'	=> 'title',
				'label' => '��������',
				'rules' => 'required|valid_title'
			
			),
            
            array (
				'field'	=> 'keywords',
				'label' => '�������� �����',
				'rules' => 'required|valid_title'
			
			),
			
			array (
				'field' => 'text',
				'label' => '�����',
				'rules' => ''
			)
);
	
	
	
}


?>