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
		$id_costomer = $this->input->POST('inputIdCostomer');
		$first_name = $this->input->POST('inputFirstName');
		$second_name = $this->input->POST('inputSecondName');
		$first_surname = $this->input->POST('inputFirstSurname');
		$second_surname = $this->input->POST('inputSecondSurname');
		$email = $this->input->POST('inputEmail');
		$phone = $this->input->POST('inputPhone');
		$address = $this->input->POST('inputPerfilUser');


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
		if (count($this->Users->getUser($id_costomer)->result()) == 0) {
			if ($this->Users->addUser($data)) {
				$dataResult = array(
					'resultado' => 'success',
					'data' => $data,
				);
				echo json_encode($dataResult);
			} else {
				$dataResult = array(
					'resultado' => 'error',
					'data' => $data,
				);
				echo json_encode($dataResult);
			}
		} else {
			$dataResult = array(
				'resultado' => 'error',
				'data' => $data,
			);
			echo json_encode($dataResult);
		}
	}
}
