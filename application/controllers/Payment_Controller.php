<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Payment_Controller extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
		$this->load->model('Customer_Model', 'CTM');
		$this->load->model('Photographer_Model', 'PTM');
		$this->load->model('Contract_Model', 'CM');
		$this->load->model('Payment_Model', 'PMM');
    }

	public function price()
	{
		$data['query'] = $this->PMM->price();
		$this->load->view('header2');
		$this->load->view('price', $data);
		$this->load->view('footer');
	}
	
	public function price_cus()
	{
		$data['query'] = $this->PMM->price();
		$this->load->view('header_cus');
		$this->load->view('price', $data);
		$this->load->view('footer');
	}

	public function showpayment_admin()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontractByid($cm_id);
		$this->load->view('header_admin');
		$this->load->view('showpayment_admin',$data);
		$this->load->view('footer');
	}

	public function showpayment2_admin()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontractByid($cm_id);
		$this->load->view('header_admin');
		$this->load->view('showpayment2_admin',$data);
		$this->load->view('footer');
	}

	public function showpayment3_admin()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontractByid($cm_id);
		$this->load->view('header_admin');
		$this->load->view('showpayment3_admin',$data);
		$this->load->view('footer');
	}
}