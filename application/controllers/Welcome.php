<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->database();
        $this->load->model('Template_Model', 'template');
        $data['home'] = $this->template->home();
		$data['cuadros'] = $this->template->cuadros();
		$data['aprende'] = $this->template->aprende();
        $data['cursos'] = $this->template->cursos();
        $data['entrenadores'] = $this->template->entrenadores();
        $data['testimonial'] = $this->template->cursos();
        $data['mapas'] = $this->template->mapas();
        $data['pie'] = $this->template->pie();
		$this->load->view('template', $data);
	}
} 
