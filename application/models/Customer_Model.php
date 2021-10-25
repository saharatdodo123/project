<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_Model extends CI_Model {

    function login($cus_email, $cus_password)
    {
        $this->db->where('cus_email', $cus_email);
        $this->db->where('cus_password', $cus_password);
        $result = $this->db->get('customer');
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

    function register($data, $data2)
    {
        $this->db->insert('customer', $data);
        $this->db->insert('cus_address', $data2);
    }
}