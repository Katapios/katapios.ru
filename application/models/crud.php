<?php

/**
 *
 * �������� �����: ����� ��� ���� ������ 
 *
 * @������ 3.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud extends CI_Model {
	
	var $table = ''; //��� �������
	
	var $idkey = 'id'; //���� ID
	
	var $add_rules = array (); //������� ��������� ��� ����������
	
	var $edit_rules = array (); //������� ��������� ��� ��������������
	
	//�����������
	public function __construct() {		
		parent::__construct();		
	}
	
	/**
 	* ������� ��� ���������� 
	*/	
	function add () {
		
		$this->form_validation->set_rules($this->add_rules);
		
		if ($this->form_validation->run ()) {
			
			$data = array ();
			
			foreach ($this->add_rules as $one) {
				
				$f = $one['field'];
				
				$data[$f] = $this->input->post ($f);
			}
			
			$this->db->insert ($this->table,$data);
			return $this->db->insert_id(); //���������� ����� �����
			
		} else {
			
			return FALSE;
			
		}		
	}
	
	/**
	 * ������� ��� ��������������
	 */
    function edit ($id) {
    	
		$this->form_validation->set_rules($this->edit_rules);
		
		if ($this->form_validation->run ()) {
			
			$data = array ();
			
			foreach ($this->edit_rules as $one) {
				
				$f = $one['field'];
				
				$data[$f] = $this->input->post ($f);
			}
			
  			$this->db->where ($this->idkey, $id);
			$this->db->update ($this->table,$data);
			return TRUE; //���������� �������
			
		} else {
			
			return FALSE;
			
		}		
    }
    
    /**
     * ������� ��������
     */
    function del ($id) {    	
    	$this->db->where ($this->idkey, $id);
    	$this->db->delete($this->table);
    }
    
    /**
     * ��������� ������
     */
    function get ($id) {
    	$this->db->where ($this->idkey, $id);
    	$query = $this->db->get ($this->table);
    	return $query->row_array ();
    }
    
    
    
    

    
    
    
    
    
    /**
     * ��������� ������
     */
    function getlist ($start_from = FALSE)
	{
		
		//������ ������ ����������
		$sort_by = $this->session->userdata ('sort_by');
		$sort_dir = $this->session->userdata ('sort_dir');
		
		//���� �� ������ �������� - ������ ����������
		if (!empty ($sort_by)) {
			$this->db->order_by($sort_by,$sort_dir);			
		}
		
		//��� ������
		$search = $this->session->userdata ('search');		
		$search_by = $this->session->userdata ('search_by');

		//���� �� ������ �������� - ������ �����
		if (!empty ($search)) {
			$this->db->like($search_by,$search);			
		}

		

    	if ($start_from !== FALSE) {
    		$this->db->limit($this->config->item ('cms_per_page'), $start_from);
			//�����������    		
    	}
    	
    	$query = $this->db->get ($this->table);
    	return $query->result_array ();
    }
 
 
 
 
    
    public function getnewsEntries()
    {
    $this->db->order_by($this->idkey,'desc');
    $query = $this->db->get($this->table);
    return $query->result_array();
    }
	
    public function getntext($news_id)
    {
    $this->db->where($this->idkey,$news_id);
    $query = $this->db->get($this->table);
    return $query->row_array();
    }
    public function get_news_list_lim($start_from = 0)
    {
    $this->db->limit($this->config->item ('cms_per_page'), $start_from);
    $this->db->order_by($this->idkey,'desc');
    $query = $this->db->get($this->table);
    return $query->result_array();
    }
    public function get_news_list()
    {
    $query = $this->db->get($this->table);
    return $query->result_array();
    }
    
    // ���������� �������� �������� ����������
    public function update_counter($news_id,$counter_data)
    {
    $this->db->where($this->idkey,$news_id);
    $this->db->update($this->table,$counter_data);
    }
    
    

    
    
    
    
    
} 



?>