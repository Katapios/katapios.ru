<?php

/**
 *
 * Описание файла: Модель для "Страницы" 
 *
 * @изменён 8.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class mdl_menu_new extends CI_Model{
    public function __construct() {		
		parent::__construct();
}
function getAllEntries(){
    $data = array();
    $q= $this->db->get('pages');
    if($q->num_rows()>0){
        foreach($q->result_array()as $row){
    $data[] = $row;            
        }
    }
$q->free_result();
return $data;
}
}
?>