<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login/login_view');
	}
/* ------------------------------------------------------------------------------------------------- */
public function valida() {
	$this->load->model('login_model');	
	//set validation rules
	$this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric');
	$this->form_validation->set_rules('password', 'Password', 'required');
	
	if ($this->form_validation->run() == false) {
		
		// validation not ok, send validation errors to the view
		$this->load->view('login/login_view');
		
	 } else {
		
		// set variables from the form
		$something = $this->input->post('something');

		if ($this->user_model->getPeriodo()) {
			
			
			// set session user datas
			$_SESSION['user_id']      = (int)$user->id;
			$_SESSION['username']     = (string)$user->username;
			$_SESSION['logged_in']    = (bool)true;
			$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
			$_SESSION['is_admin']     = (bool)$user->is_admin;
			
			// user login ok
			$data['username']=$this->input->post('username');
			$data['password']=$this->input->post('password');
			
			// $data = array(
			// 	'username' => 'My Title',
			// 	'password' => 'My Heading'
			// );

			$this->load->view('main/principal_view',$data);
			
		} else {
			
		// login failed
		 	$data->error = 'Wrong username or password.';
			
		// send error to the view
			$this->load->view('header');
			$this->load->view('user/login/login', $data);
			$this->load->view('footer');
			
		}
		
	}
	
}
/* ------------------------------------------------------------------------------------------------- */
public function test($x, $y)
        {
                echo $x;
                echo $y;
        }
/* ------------------------------------------------------------------------------------------------- */

}
