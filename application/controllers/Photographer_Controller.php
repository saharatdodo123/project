<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photographer_Controller extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->library('session', 'database');
		$this->load->model('Customer_Model', 'CTM');
		$this->load->model('Photographer_Model', 'PTM');
		$this->load->model('Contract_Model', 'CM');
		$this->load->model('Payment_Model', 'PMM');
    }

    public function home_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->showphotographered($ptg_id);
		$data['query2'] = $this->PTM->showphotographered2($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function login_ptg()
	{
		$this->load->view('header2');
		$this->load->view('login_ptg');
		$this->load->view('footer');
	}

	public function logging_ptg_in()
    {
        if ($this->input->post('login')) {
            $ptg_email = $this->input->post('ptg_email');
            $ptg_password = $this->input->post('ptg_password');
            $check = $this->PTM->login_ptg($ptg_email, $ptg_password);
            if ($check['message'] == true) {
                $array = json_decode(json_encode($check['data']), true);
                $this->session->set_userdata($array[0]);
                //$data['query'] = $this->ffc->showuser_admin();
				$ptg_id = $this->session->userdata['ptg_id'];
				$data['query'] = $this->PTM->showphotographered($ptg_id);
				$data['query2'] = $this->PTM->showphotographered2($ptg_id);
				echo "<script language='JavaScript'>";
                echo "alert('ล็อกอินสำเสร็จ')";
                echo "</script>";
				$this->load->view('header_ptg');
                $this->load->view('home_ptg', $data);
				$this->load->view('footer_ptg');
            } else {
                    echo "<script language='JavaScript'>";
                    echo "alert('กรุณาใส่รหัสอีกครั้ง')";
                    echo "</script>";
					$this->load->view('header2');
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
		echo "<script language='JavaScript'>";
        echo "alert('ออกจากระบบ')";
        echo "</script>";
		$this->load->view('header2');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function register_ptg()
	{
		$this->load->view('header');
		$this->load->view('register_ptg');
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
		$this->PTM->register_ptg($photographer, $ptg_address, $ptg_electronicdevice, $ptg_social, $payment);
		echo "<script language='JavaScript'>";
        echo "alert('ลงทะเบียนสำเสร็จ')";
        echo "</script>";
		$this->load->view('header');
		$this->load->view('login_ptg');
		$this->load->view('footer');

	}

	public function photographer()
	{
		$photographer = new Photographer_Model;
		$data['photographer'] = $photographer->getphotographer();
		$this->load->view('header2');
		$this->load->view('listphotographer', $data);
		$this->load->view('footer');
	}

	public function photographer_cus()
	{
		$photographer = new Photographer_Model;
		$data['photographer'] = $photographer->getphotographer();
		$this->load->view('header_cus');
		$this->load->view('listphotographer_cus', $data);
		$this->load->view('footer');
	}

	public function showphotographer()
	{
		$ptg_id = $this->input->post('ptg_id');
		$data['query'] = $this->PTM->showphotographered($ptg_id);
		$data['query2'] = $this->PTM->showphotographered2($ptg_id);
		$this->load->view('header');
		$this->load->view('showphotographer', $data);
		$this->load->view('footer');
	}

	public function showphotographer_cus()
	{
		$ptg_id = $this->input->post('ptg_id');
		$data['query'] = $this->PTM->showphotographered($ptg_id);
		$data['query2'] = $this->PTM->showphotographered2($ptg_id);
		$this->load->view('header_cus2');
		$this->load->view('showphotographer_cus', $data);
		$this->load->view('footer');
	}

	public function edit_profile()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->getprofile($ptg_id);
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
			'ptg_email' => $this->input->post("ptg_email"),
			'ptg_password' => $this->input->post("ptg_password"),
			'ptg_phone' => $this->input->post("ptg_phone")
		);
		$ptg_profileid = array(
			'ptg_id' => $this->input->post("ptg_id")
		);
		$this->PTM->edit_profile($ptg_profile, $ptg_profileid);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->showphotographered($ptg_id);
		$data['query2'] = $this->PTM->showphotographered2($ptg_id);
		echo "<script language='JavaScript'>";
        echo "alert('แก้ไขสำเสร็จ')";
        echo "</script>";
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function edit_address()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->getaddress($ptg_id);
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
		$this->PTM->edit_address($ptg_address, $ptg_addressid);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->showphotographered($ptg_id);
		$data['query2'] = $this->PTM->showphotographered2($ptg_id);
		echo "<script language='JavaScript'>";
        echo "alert('แก้ไขสำเสร็จ')";
        echo "</script>";
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function edit_electronicdevice()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->getelectronicdevice($ptg_id);
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
		$this->PTM->edit_electronicdevice($ptg_electronicdevice, $ptg_electronicdeviceid);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->showphotographered($ptg_id);
		$data['query2'] = $this->PTM->showphotographered2($ptg_id);
		echo "<script language='JavaScript'>";
        echo "alert('แก้ไขสำเสร็จ')";
        echo "</script>";
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function edit_social()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->getsocial($ptg_id);
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
		$this->PTM->edit_social($ptg_social, $ptg_socialid);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->showphotographered($ptg_id);
		$data['query2'] = $this->PTM->showphotographered2($ptg_id);
		echo "<script language='JavaScript'>";
        echo "alert('แก้ไขสำเสร็จ')";
        echo "</script>";
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function add_picture()
	{
		$this->load->view('header_ptg');
		$this->load->view('add_picture');
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
		$this->PTM->add_picture($ptg_imageresult);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->PTM->showphotographered($ptg_id);
		$data['query2'] = $this->PTM->showphotographered2($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('home_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function submitwork()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('submitwork', $data);
		$this->load->view('footer_ptg');
	}

}