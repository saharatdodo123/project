<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contract_Model extends CI_Model {

    function contract($contract_employment)
    {
        $this->db->insert('contract_employment', $contract_employment);
    }

    function showcontract($cm_id)
    {
        $this->db->select('*')->from('contract_employment')
        ->join('photographer', 'photographer.ptg_id=contract_employment.pg_id')
        ->join('customer', 'customer.cus_id=contract_employment.cs_id')
        ->join('ptg_address', 'ptg_address.pg_id=contract_employment.pg_id')
        ->join('cus_address', 'cus_address.cus_id=contract_employment.cs_id')
        ->join('payment', 'payment.pg_id=contract_employment.pg_id')
        ->where('cm_id', $cm_id);
        $query = $this->db->get();
        return $query->result();
    }

    function showcontractByid($cm_id)
    {
        $this->db->where('cm_id',$cm_id);
        $query = $this->db->get('contract_employment');
        return $query->result();
    }

    function getcontract($cus_id)
    {
        $this->db->select('*')->from('contract_employment')
        ->join('photographer', 'photographer.ptg_id=contract_employment.pg_id')
        ->where('cs_id', $cus_id);
        $query = $this->db->get();
        return $query->result();
    }

    function getcontract_admin()
    {
        $this->db->select('*')->from('contract_employment')
        ->join('customer', 'customer.cus_id=contract_employment.cs_id')
        ->join('photographer', 'photographer.ptg_id=contract_employment.pg_id');
        $query = $this->db->get();
        return $query->result();
    }

    function getcontract_ptg($ptg_id)
    {
        $this->db->select('*')->from('contract_employment')
        ->join('customer', 'customer.cus_id=contract_employment.cs_id')
        ->where('pg_id', $ptg_id);
        $query = $this->db->get();
        return $query->result();
    }

    function getcontract_cus($cus_id)
    {
        $this->db->select('*')->from('contract_employment')
        ->join('photographer', 'photographer.ptg_id
        =contract_employment.pg_id')
        ->where('cs_id', $cus_id);
        $query = $this->db->get();
        return $query->result();
    }

    function edit_contract($contract_employment, $contract_employmentid)
    {
        $this->db->UPDATE('contract_employment', $contract_employment, $contract_employmentid);
    }

    function edit_contract_success($status, $cm_id)
    {
        $this->db->UPDATE('contract_employment', $status, $cm_id);
    }

    function deletecontract($cm_id)
    {
        $this->db->where('cm_id', $cm_id);
        $this->db->delete('contract_employment');
    }
    
}