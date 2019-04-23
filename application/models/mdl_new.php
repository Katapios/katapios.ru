<?php

/**
 *
 * �������� �����: ������ ��� "������" 
 *
 * @������ 3.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class mdl_new extends CRUD {
	
	var $table = 'news'; //��� �������
	
	var $idkey = 'news_id';
	
	//������� ��������� ��� ����������
	var $add_rules = array (	
			
            array (
				'field'	=> 'title',
				'label' => '��������',
				'rules' => 'required|valid_title'
			
			),
			array (
				'field'	=> 'keywords',
				'label' => '�������� �����',
				'rules' => 'required'
			
			),
            array (
				'field'	=> 'announs',
				'label' => '�����',
				'rules' => ''
			
			),
            array (
				'field'	=> 'text',
				'label' => '�����',
				'rules' => ''
			),
            array (
				'field'	=> 'date',
				'label' => '����',
				'rules' => 'required|numeric'
			
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
				'rules' => 'required'
			
			),
            array (
				'field'	=> 'announs',
				'label' => '�����',
				'rules' => ''
			
			),
            array (
				'field'	=> 'text',
				'label' => '�����',
				'rules' => ''
			),
            array (
				'field'	=> 'date',
				'label' => '����',
				'rules' => 'required'
			
			)

	);
    
   
	
	
}


?>