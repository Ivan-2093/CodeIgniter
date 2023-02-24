<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuariosController extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		/* Loading the header and the index view. */
		$this->load->view('header');
		$this->load->view('Usuarios/index');
	}

	public function createUser()
	{
		/* Loading the model UsuariosModel and assigning it to the variable Users. */
		$this->load->model('UsuariosModel', 'Users');
		$id_costomer = $this->input->POST('id_costomer');
		$first_name = $this->input->POST('first_name');
		$second_name = $this->input->POST('second_name');
		$first_surname = $this->input->POST('first_surname');
		$second_surname = $this->input->POST('second_surname');
		$email = $this->input->POST('email');
		$phone = $this->input->POST('phone');
		$address = $this->input->POST('address');

		$data = array(
			'id_costomer' => $id_costomer,
			'first_name' => $first_name,
			'second_name' => $second_name,
			'first_surname' => $first_surname,
			'second_surname' => $second_surname,
			'email' => $email,
			'phone' => $phone,
			'address' => $address
		);

		echo $this->Users->addUser($data);
	}
}
