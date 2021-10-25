<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_Controller extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
		$this->load->model('Customer_Model', 'CTM');
		$this->load->model('Photographer_Model', 'PTM');
		$this->load->model('Contract_Model', 'CM');
		$this->load->model('Payment_Model', 'PMM');
    }

    public function index()
	{
		$this->load->view('header2');
		$this->load->view('home');
		$this->load->view('footer');
	}

    public function home_cus()
	{
		$this->load->view('header_cus');
		$this->load->view('home_cus');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header2');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function logging_in()
    {
        if ($this->input->post('login')) {
            $cus_email = $this->input->post('cus_email');
            $cus_password = $this->input->post('cus_password');
            $check = $this->CTM->login($cus_email, $cus_password);
            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                //$data['query'] = $this->ffc->showuser_admin();
				echo "<script language='JavaScript'>";
                echo "alert('ล็อกอินสำเสร็จ')";
                echo "</script>";
				$this->load->view('header_cus');
                $this->load->view('home_cus');
				$this->load->view('footer');
            } else {
                    echo "<script language='JavaScript'>";
                    echo "alert('กรุณาใส่รหัสอีกครั้ง')";
                    echo "</script>";
					$this->load->view('header');
					$this->load->view('login');
					$this->load->view('footer');
                //$this->session->set_flashdata('msg_error', 'รหัสผ่านไม่ถูกต้องกรุณาตรวจสอบอีกครั้งค่ะ !');
                //redirect('Welcome/index');
            }
        }
    }

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function register_add()
	{
		$data = array(
			'cus_firstname' => $this->input->post("cus_firstname"),
			'cus_lastname' => $this->input->post("cus_lastname"),
			'cus_sex' => $this->input->post("cus_sex"),
			'cus_email' => $this->input->post("cus_email"),
            'cus_password' => $this->input->post("cus_password"),
			'cus_phone' => $this->input->post("cus_phone")
		);
		$data2 = array(
			'cus_house_number' => $this->input->post("cus_house_number"),
			'cus_canton' => $this->input->post("cus_canton"),
			'cus_district' => $this->input->post("cus_district"),
			'cus_province' => $this->input->post("cus_province"),
			'cus_postal_code' => $this->input->post("cus_postal_code"),
		);
		$this->CTM->register($data, $data2);
		echo "<script language='JavaScript'>";
        echo "alert('ลงทะเบียนสำเสร็จ')";
        echo "</script>";
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');

	}

	public function logout()
	{
		$this->session->sess_destroy();
		echo "<script language='JavaScript'>";
        echo "alert('ออกจากระบบ')";
        echo "</script>";
		$this->load->view('header2');
		$this->load->view('home');
		$this->load->view('footer');
	}

}