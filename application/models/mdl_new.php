<?php

/**
 *
 * Описание файла: Модель для "Ссылок" 
 *
 * @изменён 3.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class mdl_new extends CRUD {
	
	var $table = 'news'; //Имя таблицы
	
	var $idkey = 'news_id';
	
	//Правила валидации для добавления
	var $add_rules = array (	
			
            array (
				'field'	=> 'title',
				'label' => 'Название',
				'rules' => 'required|valid_title'
			
			),
			array (
				'field'	=> 'keywords',
				'label' => 'ключевые слова',
				'rules' => 'required'
			
			),
            array (
				'field'	=> 'announs',
				'label' => 'анонс',
				'rules' => ''
			
			),
            array (
				'field'	=> 'text',
				'label' => 'текст',
				'rules' => ''
			),
            array (
				'field'	=> 'date',
				'label' => 'дата',
				'rules' => 'required|numeric'
			
			)

					
					
	
	);
	
	//Правила валидации для редактирования
	var $edit_rules = array (


            array (
				'field'	=> 'title',
				'label' => 'Название',
				'rules' => 'required|valid_title'
			
			),
			array (
				'field'	=> 'keywords',
				'label' => 'ключевые слова',
				'rules' => 'required'
			
			),
            array (
				'field'	=> 'announs',
				'label' => 'анонс',
				'rules' => ''
			
			),
            array (
				'field'	=> 'text',
				'label' => 'текст',
				'rules' => ''
			),
            array (
				'field'	=> 'date',
				'label' => 'дата',
				'rules' => 'required'
			
			)

	);
    
   
	
	
}


?>