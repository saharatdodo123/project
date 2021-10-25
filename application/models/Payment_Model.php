<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_Model extends CI_Model {

    function price()
    {
        $query = $this->db->query("SELECT * FROM `photographers_wage_rates`");
        return $query->result();
    }

    function showpayment($cm_id)
    {
        $this->db->select('*')->from('contract_employment')
        ->join('payment', 'payment.pg_id=contract_employment.pg_id')
        ->where('cm_id', $cm_id);
        $query = $this->db->get();  
        return $query->result();
    }
    
}