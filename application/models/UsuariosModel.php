<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UsuariosModel extends CI_Model
{
    /**
     * It takes an array of data and inserts it into the database
     * 
     * @param data The data array to be inserted into the database.
     * 
     * @return The result of the insert query.
     */
    public function addUser($data){
        return $this->db->insert('users', $data);
    }

    public function getUser($id_costomer){
        $this->db->where('id_costomer', $id_costomer);
        return $this->db->get('users');
        
    }
        
    
}
