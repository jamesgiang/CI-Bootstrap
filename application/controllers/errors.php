<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function not_found()
	{
		$this->load->view('errors/404');
	}
}

/* End of file errors.php */
/* Location: ./application/controllers/errors.php */