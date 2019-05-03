<?php
//Pics.php
class Pics extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
				$this->config->set_item('banner', 'Flickr Archive');
        }
    
        public function index()
		{
				$tags = 'Keto';
                $data['page_id'] = 'pics';
                $data['title'] = 'Flickr archive';
                $data['pics'] = $this->pics_model->get_pics($tags);
				$this->config->set_item('title', 'Flickr Keto');
                $this->load->view('pics/index', $data);
        }
    
        public function view($tags = NULL)
        {
				$data['page_id'] = 'pics'; 
                $data['title'] = 'Flickr archive';  
                $data['pics'] = $this->pics_model->get_pics($tags);
				$this->config->set_item('title', 'Flickr' . $tags);
                $this->load->view('pics/view', $data);
        }
    }
