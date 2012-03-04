<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()	{
		$data['page_title'] = 'CI Bootstrap';
		$data['css_file'] = 'home';
		$data['main_content'] = 'home/index';
		$this->load->view('includes/template',$data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */