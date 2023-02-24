<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuariosModel extends CI_Model
{
    public function addUser($data){
        return $this->db->insert('users', $data);
    }
}
