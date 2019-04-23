<?php

/**
 *
 * Описание файла: 
 *
 * @изменён 9.9.2009
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {  
          

	
	public function show ($page_id = '',$year = null, $month = null) {	   
         
		
	$this->lib_view->user_page($page_id,$year,$month);   
	
	}
    

 	
	public function index () {
		redirect ('/about/');
	}
    
    
    
    
        public function facilities($page_id = '')    
    
     {
       
        $this->load->model('mdl_ulpage');
        $data['main_info'] = $this->mdl_ulpage->get($page_id);
        $main_info['title'] = $data['main_info']['title'];
        $main_info['text'] = $data['main_info']['text'];
        $main_info['keywords'] = $data['main_info']['keywords'];
    

        $this->lib_view->ul_page($page_id,$main_info,$main_info['title']);
    }



    

    public function show_stat($page_id = '')    
    
     {
       
        $this->load->model('mdl_stat');
        $data['main_info'] = $this->mdl_stat->get($page_id);
        $main_info['title'] = $data['main_info']['title'];
        $main_info['text'] = $data['main_info']['text'];
        $main_info['keywords'] = $data['main_info']['keywords'];
    

        $this->lib_view->stat_page($page_id,$main_info,$main_info['title']);
    }
    
    public function news($start_page = 0)
    {
    $this->load->library('pagination');
    $this->load->model('mdl_new');
    $list = $this->mdl_new->get_news_list_lim($start_page);
    $data['news_all'] = $list;
$data['keywords'] = 'невс!';    
    
        $total = $this->mdl_new->get_news_list();
        
        $config['base_url'] = base_url ().'pages/news/';
        $config['total_rows'] = count($total);
        $config['per_page'] = $this->config->item ('cms_per_page');
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);
        
        $data['page_links'] = $this->pagination->create_links (); 
    
    
    $this->lib_view->simple_page('news_list',$data,'Все Новости');

    }


    public function event($news_id)
    {
    $this->load->model('mdl_new');
    
    $data = array();
    $list = $this->mdl_new->getntext($news_id);
    $data['news_text'] = $list; 
    $data['keywords'] = $list['keywords'];


//Формируем массив для обновления поля count_views (текущее число показов материала +1)  
$counter_data = array('clicks' => $data['news_text']['clicks'] + 1);
     
//Запускаем функцию обновления, меняющую значение счетчика в базе 
$this->mdl_new->update_counter($news_id,$counter_data);

    
    $this->lib_view->simple_page('news',$data,$list['title']);
    }
    
    //Форма обратной связи
	public function contact () {
		
		//Правила валидации
		$rules = array (
		
			array (
				'field' => 'email',
				'label' => 'Ваш e-mail',
				'rules' => 'required|valid_email',
			),
			
			array (
				'field' => 'subject',
				'label' => 'Тема сообщения',
				'rules' => 'required|valid_title|max_length[150]|xss_clean',
			),
			
			array (
				'field' => 'text',
				'label' => 'Текст сообщения',
				'rules' => 'required|xss_clean',			
			),		
			
			array (
				'field' => 'captcha',
				'label' => 'Код с картинки',
				'rules' => 'required|numeric|min_length[6]|max_length[6]',		
			),
		
		);
		
		//Применяем правила
		$this->form_validation->set_rules($rules);
		
		//Проверяем - проходит ли форма валидацию
		$ok_form = $this->form_validation->run();
		
		if ($ok_form) { //Если остальные поля в порядке
			//Проверка строки Каптчи - сравниваем со значением из сессии
			$entered_captcha = $this->input->post ('captcha');
			
			if ($entered_captcha!=$this->session->userdata('captcha_rnd_str')) {
				$ok_form = FALSE; //Если не соответствует значению в сессии
			}
						
		}
		
		//Если валидация не пройдена - показываем форму
		if (!$ok_form) {
			//Загружаем плагин Каптча
			$this->load->helper('captcha');
           // $this->load->plugin('captcha');
			
			//Модуль для генерирования случайной строки
			$this->load->helper ('string');		
			$rnd_str = random_string ('numeric',6);
			
			//Записываем строку в сессию
			$ses_data = array();
			$ses_data['captcha_rnd_str'] = $rnd_str;
			$this->session->set_userdata($ses_data);
			
			//Формируем картинку
			$vals = array(
						'word'		 => $rnd_str,
						'img_path'	 => './img/captcha/',
						'img_url'	 => base_url().'img/captcha/',
						'font_path'	 => './system/fonts/bkant.ttf',
						'img_width'	 => 120,
						'img_height' => 30,
						'expiration' => 10
					);
		
			$cap = create_captcha($vals);
			
			$data = array ();
			$data['imgcode'] = $cap['image']; //Код картинки
$data['keywords'] = 'нез!';			
			$this->lib_view->simple_page('contact',$data,'Обратная связь');
				
		} else {
			
			//Иначе - отправляем письмо			
			$this->load->library('phpmailer'); //Класс phpmailer
			
	  		$this->phpmailer->ClearAllRecipients();
		    
			//Емайл получателя		
	  		$this->phpmailer->AddAddress ('fresh_idea@inbox.ru'); //Мой адрес
		
			//От кого
			$this->phpmailer->From = $this->input->post ('email');
			
			//Тема
			$this->phpmailer->Subject = $this->input->post ('subject',TRUE);
			//Тип
			$this->phpmailer->ContentType = 'text/plain';
			//Текст
			$this->phpmailer->Body = $this->input->post ('text',TRUE);
		
			//Отправляем
			$this->phpmailer->send ();			
			
			//Здесь в принципе можно сделать редирект на любую страничку
			die ('Ваше сообщение отправлено');
			
		}
		
		
	}
    
    
  
}

?>