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
		$this->load->view('home');
	}

	function registerNow()
	{

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('username','User Name','required');
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$data = array(
					'username'=>$username,
					'email'=>$email,
					'password'=>sha1($password),
					'status'=>'1'
				);

				$this->load->model('user_model');
				$this->user_model->insertuser($data);
				$this->session->set_flashdata('success','Successfully User Created');
				redirect(base_url('welcome/index'));
			}
			else
			{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('welcome/index'));
			}
		}
	}

	function login()
	{
		$this->load->view('login');
	}

	function loginnow()
	{
		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');

			if($this->form_validation->run()==TRUE)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$password = sha1($password);

				$this->load->model('user_model');
				$status = $this->user_model->checkPassword($password,$email);
				if($status!=false)
				{
					$user_id = $status->user_id;
					$username = $status->username;
					$email = $status->email;

					$session_data = array(
						'user_id'=>$user_id,
						'username'=>$username,
						'email' => $email,
					);

					$this->session->set_userdata('UserLoginSession',$session_data);

					redirect(base_url('welcome/dashboard'));
				}
				else
				{
					$this->session->set_flashdata('error','Email or Password is Wrong');
					redirect(base_url('welcome/login'));
				}

			}
			else
			{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('welcome/login'));
			}
		}
	}

	function dashboard()
	{
		$this->load->view('dashboard');
	}

	function blogs()
	{
		$this->load->view('blogs');
	}

	function logout()
	{
		session_destroy();
		redirect(base_url('welcome/login'));
	}


	
	function add_new_blog()
	{

		if($_SERVER['REQUEST_METHOD']=='POST')
		{
			$this->form_validation->set_rules('post_title','Post title','required');
			$this->form_validation->set_rules('post','Post description','required');

			if($this->form_validation->run()==TRUE)
			{
				$post_title = $this->input->post('post_title');
				$post = $this->input->post('post');
				$user_id = $this->input->post('user_id');
				$data = array(
					'post_title'=>$post_title,
					'post'=>$post,
					'user_id'=>$user_id,
					'active'=>'1'
				);

				$this->load->model('user_model');
				$this->user_model->insertblog($data);
				$this->session->set_flashdata('success','Successfully Post Created');
				redirect(base_url('welcome/dashboard'));

			}
			else
			{
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('welcome/dashboard'));
			}
		}
	}

}
