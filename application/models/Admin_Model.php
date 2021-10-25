<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Model extends CI_Model {

    function login_admin($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('admin');
        $message = '';
        if ($result->num_rows() > 0) {
            $message = true;
        } else {
            $message = false;
        }
        $data = array(
            "message" => $message, "data" => $result->result()
        );
        return $data;
    }

    function showadmin($admin_id)
    {
        $this->db->where('admin_id', $admin_id);
        $query = $this->db->get('admin');
        return $query->result();
    }

}