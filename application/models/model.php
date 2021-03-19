<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model extends CI_Model {

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

    function login_ptg($ptg_email, $ptg_password)
    {
        $this->db->where('ptg_email', $ptg_email);
        $this->db->where('ptg_password', $ptg_password);
        $result = $this->db->get('photographer');
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

    function __construct()
    {
        parent::__construct();
    }

    function register($data, $data2)
    {
        $this->db->insert('customer', $data);
        $this->db->insert('cus_address', $data2);
    }

    function register_ptg($photographer, $ptg_address, $ptg_electronicdevice, $ptg_social, $payment)
    {
        $this->db->insert('photographer', $photographer);
        $this->db->insert('ptg_address', $ptg_address);
        $this->db->insert('ptg_electronicdevice', $ptg_electronicdevice);
        $this->db->insert('ptg_social', $ptg_social);
        $this->db->insert('payment', $payment);
    }

    function price()
    {
        $query = $this->db->query("SELECT * FROM `photographers_wage_rates`");
        return $query->result();
    }

    function contract($contract_employment)
    {
        $this->db->insert('contract_employment', $contract_employment);
    }

    function showcontractpcid($ptg_id, $cus_id)
    {
        $this->db->select('*')->from('contract_employment')
        ->join('photographer', 'photographer.ptg_id=contract_employment.pg_id')
        ->join('customer', 'customer.cus_id=contract_employment.cs_id')
        ->join('ptg_address', 'ptg_address.pg_id=contract_employment.pg_id')
        ->join('cus_address', 'cus_address.cus_id=contract_employment.cs_id')
        ->join('payment', 'payment.pg_id=contract_employment.pg_id')
        ->where('cs_id', $cus_id, 'pg_id', $ptg_id);
        $query = $this->db->get();
        return $query->result();
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

    function add_pictute($ptg_imageresult)
    {
        $this->db->insert('ptg_imageresult', $ptg_imageresult);
    }

    function getphotographer()
    {
        $query = $this->db->query("SELECT * FROM `photographer` ORDER BY `photographer`.`ptg_score` DESC");
        return $query->result();
    }

    function getprofile($ptg_id)
    {
        $this->db->where('ptg_id',$ptg_id);
        $query = $this->db->get('photographer');
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
        ->join('photographer', 'photographer.ptg_id=contract_employment.pg_id')
        ->where('cs_id', $cus_id);
        $query = $this->db->get();
        return $query->result();
    }

    function edit_profile($ptg_profile, $ptg_profileid)
    {
        $this->db->UPDATE('photographer', $ptg_profile, $ptg_profileid);
    }

    function getaddress($ptg_id)
    {
        $this->db->where('pg_id',$ptg_id);
        $query = $this->db->get('ptg_address');
        return $query->result();
    }

    function edit_address($ptg_address, $ptg_addressid)
    {
        $this->db->UPDATE('ptg_address', $ptg_address, $ptg_addressid);
    }

    function getelectronicdevice($ptg_id)
    {
        $this->db->where('pg_id',$ptg_id);
        $query = $this->db->get('ptg_electronicdevice');
        return $query->result();
    }

    function edit_electronicdevice($ptg_electronicdevice, $ptg_electronicdeviceid)
    {
        $this->db->UPDATE('ptg_electronicdevice', $ptg_electronicdevice, $ptg_electronicdeviceid);
    }

    function getsocial($ptg_id)
    {
        $this->db->where('pg_id',$ptg_id);
        $query = $this->db->get('ptg_social');
        return $query->result();
    }

    function edit_social($ptg_social, $ptg_socialid)
    {
        $this->db->UPDATE('ptg_social', $ptg_social, $ptg_socialid);
    }

    function edit_contract($contract_employment, $contract_employmentid)
    {
        $this->db->UPDATE('contract_employment', $contract_employment, $contract_employmentid);
    }

    function edit_contract_success($status, $cm_id)
    {
        $this->db->UPDATE('contract_employment', $status, $cm_id);
    }

    function showphotographered($ptg_id)
    {
        $this->db->select('*')->from('photographer')
        ->join('ptg_electronicdevice', 'ptg_electronicdevice.pg_id=photographer.ptg_id')
        ->join('ptg_social', 'ptg_social.pg_id=photographer.ptg_id')
        ->join('ptg_address', 'ptg_address.pg_id=photographer.ptg_id')
        ->where('ptg_id', $ptg_id);
        $query = $this->db->get();
        return $query->result();
    }

    function showphotographered2($ptg_id)
    {
        $this->db->where('pg_id',$ptg_id);
        $query = $this->db->get('ptg_imageresult');
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

    function deletecontract($cm_id)
    {
        $this->db->where('cm_id', $cm_id);
        $this->db->delete('contract_employment');
    }
}