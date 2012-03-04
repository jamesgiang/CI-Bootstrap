<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function not_found() {
		$data['page_title'] = 'Page not Found';
		$data['css_file'] = '404';
		$data['main_content'] = 'errors/404';
		$this->load->view('includes/template',$data);
	}
}

/* End of file errors.php */
/* Location: ./application/controllers/errors.php */