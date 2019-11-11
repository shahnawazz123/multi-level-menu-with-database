<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
    
		parent::__construct();
		$this->load->model('User_Model');
		
			
    }

	public function index()
	{
				$shoe = $this->User_Model->show_menu();
		$this->load->view('header',array('shoe' => $shoe ));
		
		$this->load->view('footer');		
		
		}
	
	
	
}