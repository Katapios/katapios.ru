<?php

/**
 *
 * Описание файла: Модель для "Страницы" 
 *
 * @изменён 8.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class mdl_stat extends CRUD {
	
	var $table = 'stat_pages'; //Имя таблицы
	
	var $idkey = 'page_id';
	
	//Правила валидации для добавления
	var $add_rules = array (
	
			array (
				'field'	=> 'page_id',
				'label'	=> 'ID страницы',
				'rules' => 'required|az_numeric|uniq[page_id]' 					
			),
			
			array (
				'field'	=> 'title',
				'label' => 'Название',
				'rules' => 'required|valid_title'
			
			),
            
            array (
				'field'	=> 'keywords',
				'label' => 'Ключевые слова',
				'rules' => 'required|valid_title'
			
			),
			
			array (
				'field' => 'text',
				'label' => 'Текст',
				'rules' => ''
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
				'label' => 'Ключевые слова',
				'rules' => 'required|valid_title'
			
			),
			
			array (
				'field' => 'text',
				'label' => 'Текст',
				'rules' => ''
			)
);
	
	
	
}


?>