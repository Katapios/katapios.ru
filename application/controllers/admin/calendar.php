<?php

/**
 *
 * Описание файла: 
 *
 * @изменён 9.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller {
var $iname = 'cal';	
	//Конструктор
	public function __construct() {		
		parent::__construct();
		
        //Проверка или был вход
		$this->lib_auth->check_admin();
        
$mdl_name = 'mdl_'.$this->iname; //Имя модели
		
$this->load->model ($mdl_name); //Загружаем модель		
	}
	

	function index ($year = null, $month = null,$id = '') {
		
		if (!$year) {
			$year = date('Y');
		}
		if (!$month) {
			$month = date('m');
		}
		
//		$this->load->model('Mycal_model');
		
		if ($day = $this->input->post('day')) {
			$this->mdl_cal->add_calendar_data(
             
            
            
				"$year-$month-$day",
				$this->input->post('data')
			);
		}
   		
   	$data['calendar'] = $this->mdl_cal->generate($year, $month);
       		
//	$this->load->view('admin/calendar', $data);	
$this->lib_view->admin_page('calendar',$data,'Календарь');

if ($id != 'day' && $id > 0)
{       
$text = array();
$text['year'] = $year;
$text['month'] = $month;
$text['id'] = $id;

//$text['id'] = $id;

 

       
$den['den'] = $text['year'].'-'.$text['month'].'-'.$text['id'];
$this->d = $den['den'];


$d = $this->d;
$this->mdl_cal->dell_calendar_data($d);
//echo $this->d;
redirect ('http://katapios.ru/admin/calendar/index/'.$year.'/'.$month.'/'.'day');     
}
}
}

?>