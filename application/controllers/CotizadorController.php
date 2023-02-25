<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CotizadorController extends CI_Controller
{
    public function index(){
        /* Loading the header and the index view. */
		$this->load->view('header');
		$this->load->view('Cotizador/index');
    }
}