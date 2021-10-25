<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photographer_Model extends CI_Model {

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

    function register_ptg($photographer, $ptg_address, $ptg_electronicdevice, $ptg_social, $payment)
    {
        $this->db->insert('photographer', $photographer);
        $this->db->insert('ptg_address', $ptg_address);
        $this->db->insert('ptg_electronicdevice', $ptg_electronicdevice);
        $this->db->insert('ptg_social', $ptg_social);
        $this->db->insert('payment', $payment);
    }

    function add_picture($ptg_imageresult)
    {
        $this->db->insert('ptg_imageresult', $ptg_imageresult);
    }

    function edit_profile($ptg_profile, $ptg_profileid)
    {
        $this->db->UPDATE('photographer', $ptg_profile, $ptg_profileid);
    }

    function edit_address($ptg_address, $ptg_addressid)
    {
        $this->db->UPDATE('ptg_address', $ptg_address, $ptg_addressid);
    }

    function edit_electronicdevice($ptg_electronicdevice, $ptg_electronicdeviceid)
    {
        $this->db->UPDATE('ptg_electronicdevice', $ptg_electronicdevice, $ptg_electronicdeviceid);
    }

    function edit_social($ptg_social, $ptg_socialid)
    {
        $this->db->UPDATE('ptg_social', $ptg_social, $ptg_socialid);
    }

    function getaddress($ptg_id)
    {
        $this->db->where('pg_id',$ptg_id);
        $query = $this->db->get('ptg_address');
        return $query->result();
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

    function getelectronicdevice($ptg_id)
    {
        $this->db->where('pg_id',$ptg_id);
        $query = $this->db->get('ptg_electronicdevice');
        return $query->result();
    }
    
    function getsocial($ptg_id)
    {
        $this->db->where('pg_id',$ptg_id);
        $query = $this->db->get('ptg_social');
        return $query->result();
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

}