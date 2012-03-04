<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function not_found() {
<<<<<<< HEAD
		$data['page_title'] = 'Page not Found';
		$data['css_file'] = '404';
		$data['main_content'] = 'errors/404';
		$this->load->view('includes/template',$data);
=======
		$this->load->view('errors/404');
>>>>>>> e1e0c62eb3ff9c00f2f770e503d509653a736500
	}
}

/* End of file errors.php */
/* Location: ./application/controllers/errors.php */