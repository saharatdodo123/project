<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function home_cus()
	{
		$this->load->view('header_cus');
		$this->load->view('home_cus');
		$this->load->view('footer');
	}

	public function home_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->showphotographered($ptg_id);
		$data['query2'] = $this->project->showphotographered2($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function history()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->project->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history', $data);
		$this->load->view('footer');
	}

	public function history_success_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->project->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_success_cus', $data);
		$this->load->view('footer');
	}

	public function history_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_ptg', $data);
		$this->load->view('footer');
	}

	public function history_success_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_success_ptg', $data);
		$this->load->view('footer');
	}

	public function history_payment_cus()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->project->showpayment($cm_id);
		$this->load->view('header_cus');
		$this->load->view('history_payment_cus', $data);
		$this->load->view('footer');
	}

	public function history_paymentcheck_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->project->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_paymentcheck_cus', $data);
		$this->load->view('footer');
	}

	public function history_paymentcheck_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_paymentcheck_ptg', $data);
		$this->load->view('footer');
	}

	public function history_paymentsuccess_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->project->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_paymentsuccess_cus', $data);
		$this->load->view('footer');
	}

	public function history_paymentsuccess_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_paymentsuccess_ptg', $data);
		$this->load->view('footer');
	}

	public function upload_file()
	{
		$cm_id = $this->input->post('cm_id');
        $data = array();
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 5024;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img')) {
            $img='';
        } else {
        	$fileData = $this->upload->data();
            $img= $data['img'] = $fileData['file_name'];
        }

            $this->db->set('img', $img);
            $this->db->where('cm_id', $cm_id);
            $result = $this->db->update('contract_employment');

 
            if ($result) {
				$status = array(
					'status' => $this->input->post("status")
				);
				$cm_id = array(
					'cm_id' => $this->input->post("cm_id")
				);
				$data['query'] = $this->project->edit_contract_success($status, $cm_id);
            	echo "<script language='JavaScript'>";
                echo "alert('อับโหลดสำเร็จ $img')";
                echo "</script>";
                $cus_id = $this->session->userdata['cus_id'];
				$data['query'] = $this->project->getcontract_cus($cus_id);
				$this->load->view('header_cus');
				$this->load->view('history_paymentcheck_cus', $data);
				$this->load->view('footer');
              } else {
                echo "<script language='JavaScript'>";
                echo "alert('อับโหลดไม่สำเร็จ')";
                echo "</script>";
                $this->load->view('history_payment_cus');
              }
	}

	public function price_cus()
	{
		$data['query'] = $this->project->price();
		$this->load->view('header_cus');
		$this->load->view('price', $data);
		$this->load->view('footer');
	}

	public function price()
	{
		$data['query'] = $this->project->price();
		$this->load->view('header');
		$this->load->view('price', $data);
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function login_ptg()
	{
		$this->load->view('header');
		$this->load->view('login_ptg');
		$this->load->view('footer');
	}

	public function register()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}

	public function register_ptg()
	{
		$this->load->view('header');
		$this->load->view('register_ptg');
		$this->load->view('footer');
	}

	public function photographer()
	{
		$photographer = new model;
		$data['photographer'] = $photographer->getphotographer();
		$this->load->view('header');
		$this->load->view('listphotographer', $data);
		$this->load->view('footer');
	}

	public function photographer_cus()
	{
		$photographer = new model;
		$data['photographer'] = $photographer->getphotographer();
		$this->load->view('header_cus');
		$this->load->view('listphotographer_cus', $data);
		$this->load->view('footer');
	}

	public function showphotographer()
	{
		$ptg_id = $this->input->post('ptg_id');
		$data['query'] = $this->project->showphotographered($ptg_id);
		$data['query2'] = $this->project->showphotographered2($ptg_id);
		$this->load->view('header');
		$this->load->view('showphotographer', $data);
		$this->load->view('footer');
	}

	public function showphotographer_cus()
	{
		$ptg_id = $this->input->post('ptg_id');
		$data['query'] = $this->project->showphotographered($ptg_id);
		$data['query2'] = $this->project->showphotographered2($ptg_id);
		$this->load->view('header_cus');
		$this->load->view('showphotographer_cus', $data);
		$this->load->view('footer');
	}

	public function edit_profile()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getprofile($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('edit_profile', $data);
		$this->load->view('footer_ptg');
	}

	public function editing_profile()
	{

		$ptg_id = $this->session->userdata['ptg_id'];
        $data = array();
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size'] = 5024;
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('ptg_img')) {
            $img='';
        } else {
        	$fileData = $this->upload->data();
            $img= $data['ptg_img'] = $fileData['file_name'];
        }

            $this->db->set('ptg_img', $img);
            $this->db->where('ptg_id', $ptg_id);
            $result = $this->db->update('photographer');

		$ptg_profile = array(
			'ptg_id' => $this->input->post("ptg_id"),
			'ptg_firstname' => $this->input->post("ptg_firstname"),
			'ptg_lastname' => $this->input->post("ptg_lastname"),
			'ptg_nickname' => $this->input->post("ptg_nickname"),
			'sex' => $this->input->post("sex"),
			'ptg_email' => $this->input->post("ptg_email"),
			'ptg_password' => $this->input->post("ptg_password"),
			'ptg_phone' => $this->input->post("ptg_phone")
		);
		$ptg_profileid = array(
			'ptg_id' => $this->input->post("ptg_id")
		);
		$this->project->edit_profile($ptg_profile, $ptg_profileid);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->showphotographered($ptg_id);
		$data['query2'] = $this->project->showphotographered2($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function edit_address()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getaddress($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('edit_address', $data);
		$this->load->view('footer_ptg');
	}

	public function editing_address()
	{
		$ptg_address = array(
			'pg_id' => $this->input->post("pg_id"),
			'pg_house_number' => $this->input->post("pg_house_number"),
			'pg_canton' => $this->input->post("pg_canton"),
			'pg_district' => $this->input->post("pg_district"),
			'pg_province' => $this->input->post("pg_province"),
			'pg_postal_code' => $this->input->post("pg_postal_code")
		);
		$ptg_addressid = array(
			'pg_id' => $this->input->post("pg_id")
		);
		$this->project->edit_address($ptg_address, $ptg_addressid);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->showphotographered($ptg_id);
		$data['query2'] = $this->project->showphotographered2($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function edit_electronicdevice()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getelectronicdevice($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('edit_electronicdevice', $data);
		$this->load->view('footer_ptg');
	}

	public function editing_electronicdevice()
	{
		$ptg_electronicdevice = array(
			'pg_id' => $this->input->post("pg_id"),
			'brand' => $this->input->post("brand"),
			'camera_lens' => $this->input->post("camera_lens"),
			'studio_light' => $this->input->post("studio_light"),
			'camera_tripod' => $this->input->post("camera_tripod"),
			'memory_card' => $this->input->post("memory_card"),
			'battery' => $this->input->post("battery")
		);
		$ptg_electronicdeviceid = array(
			'pg_id' => $this->input->post("pg_id")
		);
		$this->project->edit_electronicdevice($ptg_electronicdevice, $ptg_electronicdeviceid);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->showphotographered($ptg_id);
		$data['query2'] = $this->project->showphotographered2($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function edit_social()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getsocial($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('edit_social', $data);
		$this->load->view('footer_ptg');
	}

	public function editing_social()
	{
		$ptg_social = array(
			'pg_id' => $this->input->post("pg_id"),
			'favorite_job1' => $this->input->post("favorite_job1"),
			'favorite_job2' => $this->input->post("favorite_job2"),
			'favorite_job3' => $this->input->post("favorite_job3"),
			'favorite_job4' => $this->input->post("favorite_job4"),
			'favorite_job5' => $this->input->post("favorite_job5"),
			'favorite_job6' => $this->input->post("favorite_job6"),
			'message' => $this->input->post("message"),
			'website' => $this->input->post("website"),
			'youtube' => $this->input->post("youtube"),
			'twitter' => $this->input->post("twitter"),
			'instagram' => $this->input->post("instagram"),
			'facebook' => $this->input->post("facebook")
		);
		$ptg_socialid = array(
			'pg_id' => $this->input->post("pg_id")
		);
		$this->project->edit_social($ptg_social, $ptg_socialid);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->showphotographered($ptg_id);
		$data['query2'] = $this->project->showphotographered2($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function add_pictute()
	{
		$this->load->view('header_ptg');
		$this->load->view('add_pictute');
		$this->load->view('footer_ptg');
	}

	public function adding_picture()
	{
		$ptg_imageresult = array(
			'pg_id' => $this->input->post("pg_id"),
			'img' => $this->input->post("img"),
			'name_img' => $this->input->post("name_img"),
			'detail_img' => $this->input->post("detail_img")
		);
		$this->project->add_pictute($ptg_imageresult);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->showphotographered($ptg_id);
		$data['query2'] = $this->project->showphotographered2($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function contract()
	{
		$ptg_id = $this->input->post('ptg_id');
		$data['query'] = $this->project->getprofile($ptg_id);
		$this->load->view('header_cus');
		$this->load->view('contract', $data);
		$this->load->view('footer');
	}

	public function contracting()
	{
		$contract_employment = array(
			'cs_id' => $this->input->post("cus_id"),
			'pg_id' => $this->input->post("ptg_id"),
			'type_of_work' => $this->input->post("type_of_work"),
			'form_of_employment' => $this->input->post("form_of_employment"),
			'service_rates' => $this->input->post("service_rates"),
			'at' => $this->input->post("at"),
			'house_number' => $this->input->post("house_number"),
			'canton' => $this->input->post("canton"),
			'district' => $this->input->post("district"),
			'province' => $this->input->post("province"),
			'day_month_year' => $this->input->post("day_month_year"),
			'time' => $this->input->post("time"),
			'to_time' => $this->input->post("to_time"),
			'status' => $this->input->post("status")
		);
		$this->project->contract($contract_employment);
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->project->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history', $data);
		$this->load->view('footer');
	}

	public function showcontracting()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->project->showcontract($cm_id);
		$this->load->view('header_cus');
		$this->load->view('show_contract', $data);
		$this->load->view('footer');
	}

	public function showcontracting_ptg()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->project->showcontract($cm_id);
		$this->load->view('header_ptg');
		$this->load->view('show_contract_ptg', $data);
	}

	public function showcontractingsuccess_ptg()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->project->showcontract($cm_id);
		$this->load->view('header_ptg');
		$this->load->view('show_contractsuccess_ptg', $data);
	}

	public function edit_contract()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->project->showcontractByid($cm_id);
		$this->load->view('header_cus');
		$this->load->view('edit_contract', $data);
		$this->load->view('footer');
	}

	public function success_contract()
	{
		$status = array(
			'status' => $this->input->post("status")
		);
		$cm_id = array(
			'cm_id' => $this->input->post("cm_id")
		);
		$data['query'] = $this->project->edit_contract_success($status, $cm_id);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_success_ptg', $data);
		$this->load->view('footer');
	}

	public function success_payment()
	{
		$status = array(
			'status' => $this->input->post("status")
		);
		$cm_id = array(
			'cm_id' => $this->input->post("cm_id")
		);
		$data['query'] = $this->project->edit_contract_success($status, $cm_id);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_paymentsuccess_ptg', $data);
		$this->load->view('footer');
	}

	public function delete_contract()
	{
		$cm_id = $this->input->post("cm_id");
		$data['query'] = $this->project->deletecontract($cm_id);
		echo "<script language='JavaScript'>";
        echo "alert('ลบข้อมูลสำเร็จ')";
        echo "</script>";
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->project->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history', $data);
		$this->load->view('footer');
	}

	public function delete_contract_ptg()
	{
		$cm_id = $this->input->post("cm_id");
		$data['query'] = $this->project->deletecontract($cm_id);
		echo "<script language='JavaScript'>";
        echo "alert('ลบข้อมูลสำเร็จ')";
        echo "</script>";
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->project->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_ptg', $data);
		$this->load->view('footer');
	}

	public function editing_contract()
	{
		$contract_employment = array(
			'type_of_work' => $this->input->post("type_of_work"),
			'form_of_employment' => $this->input->post("form_of_employment"),
			'service_rates' => $this->input->post("service_rates"),
			'at' => $this->input->post("at"),
			'house_number' => $this->input->post("house_number"),
			'canton' => $this->input->post("canton"),
			'district' => $this->input->post("district"),
			'province' => $this->input->post("province"),
			'day_month_year' => $this->input->post("day_month_year"),
			'time' => $this->input->post("time"),
			'to_time' => $this->input->post("to_time")
		);
		$contract_employmentid = array(
			'cm_id' => $this->input->post("cm_id")
		);
		$this->project->edit_contract($contract_employment, $contract_employmentid);
		echo "<script language='JavaScript'>";
        echo "alert('แก้ไขสำเร็จ')";
        echo "</script>";
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->project->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history', $data);
		$this->load->view('footer');
	}

	function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
        $this->load->model('Model', 'project');

    }

	public function logging_in()
    {
        if ($this->input->post('login')) {
            $cus_email = $this->input->post('cus_email');
            $cus_password = $this->input->post('cus_password');
            $check = $this->project->login($cus_email, $cus_password);
            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                //$data['query'] = $this->ffc->showuser_admin();
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

	public function logging_ptg_in()
    {
        if ($this->input->post('login')) {
            $ptg_email = $this->input->post('ptg_email');
            $ptg_password = $this->input->post('ptg_password');
            $check = $this->project->login_ptg($ptg_email, $ptg_password);
            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                //$data['query'] = $this->ffc->showuser_admin();
				$ptg_id = $this->session->userdata['ptg_id'];
				$data['query'] = $this->project->showphotographered($ptg_id);
				$data['query2'] = $this->project->showphotographered2($ptg_id);
				$this->load->view('header_ptg');
                $this->load->view('home_ptg', $data);
				$this->load->view('footer_ptg');
            } else {
                    echo "<script language='JavaScript'>";
                    echo "alert('กรุณาใส่รหัสอีกครั้ง')";
                    echo "</script>";
					$this->load->view('header');
					$this->load->view('login_ptg');
					$this->load->view('footer');
                //$this->session->set_flashdata('msg_error', 'รหัสผ่านไม่ถูกต้องกรุณาตรวจสอบอีกครั้งค่ะ !');
                //redirect('Welcome/index');
            }
        }
    }

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function register_add()
	{
		$data = array(
			'cus_firstname' => $this->input->post("cus_firstname"),
			'cus_lastname' => $this->input->post("cus_lastname"),
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
		$this->project->register($data, $data2);
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');

	}

	public function register_ptg_add()
	{
		$photographer = array(
			'ptg_img' => $this->input->post("ptg_img"),
			'ptg_firstname' => $this->input->post("ptg_firstname"),
			'ptg_lastname' => $this->input->post("ptg_lastname"),
			'ptg_nickname' => $this->input->post("ptg_nickname"),
            'sex' => $this->input->post("sex"),
			'ptg_email' => $this->input->post("ptg_email"),
			'ptg_password' => $this->input->post("ptg_password"),
			'ptg_phone' => $this->input->post("ptg_phone")
		);
		$ptg_address = array(
			'pg_house_number' => $this->input->post("pg_house_number"),
			'pg_canton' => $this->input->post("pg_canton"),
			'pg_district' => $this->input->post("pg_district"),
			'pg_province' => $this->input->post("pg_province"),
			'pg_postal_code' => $this->input->post("pg_postal_code")
		);
		$ptg_electronicdevice = array(
			'brand' => $this->input->post("brand"),
			'camera_lens' => $this->input->post("camera_lens"),
			'studio_light' => $this->input->post("studio_light"),
			'camera_tripod' => $this->input->post("camera_tripod"),
			'memory_card' => $this->input->post("memory_card"),
			'battery' => $this->input->post("battery")
		);
		$ptg_social = array(
			'favorite_job1' => $this->input->post("favorite_job1"),
			'favorite_job2' => $this->input->post("favorite_job2"),
			'favorite_job3' => $this->input->post("favorite_job3"),
			'favorite_job4' => $this->input->post("favorite_job4"),
			'favorite_job5' => $this->input->post("favorite_job5"),
			'favorite_job6' => $this->input->post("favorite_job6"),
			'message' => $this->input->post("message"),
			'website' => $this->input->post("website"),
			'youtube' => $this->input->post("youtube"),
			'twitter' => $this->input->post("twitter"),
			'instagram' => $this->input->post("instagram"),
			'facebook' => $this->input->post("facebook")
		);
		$payment = array(
			'bank_name' => $this->input->post("bank_name"),
			'bank_branch' => $this->input->post("bank_branch"),
			'account_name' => $this->input->post("account_name"),
			'account_number' => $this->input->post("account_number")
		);
		$this->project->register_ptg($photographer, $ptg_address, $ptg_electronicdevice, $ptg_social, $payment);
		$this->load->view('header');
		$this->load->view('login_ptg');
		$this->load->view('footer');

	}

}