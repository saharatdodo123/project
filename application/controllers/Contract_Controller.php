<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contract_Controller extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session', 'database');
		$this->load->model('Customer_Model', 'CTM');
		$this->load->model('Photographer_Model', 'PTM');
		$this->load->model('Contract_Model', 'CM');
		$this->load->model('Payment_Model', 'PMM');
	}

	public function contract()
	{
		$ptg_id = $this->input->post('ptg_id');
		$data['query'] = $this->PTM->getprofile($ptg_id);
		$this->load->view('header_cus2');
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
		$this->CM->contract($contract_employment);
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract($cus_id);
		echo "<script language='JavaScript'>";
		echo "alert('ทำรายการสำเสร็จ')";
		echo "</script>";
		$this->load->view('header_cus');
		$this->load->view('history', $data);
		$this->load->view('footer');
	}

	public function edit_contract()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontractByid($cm_id);
		$this->load->view('header_cus');
		$this->load->view('edit_contract', $data);
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
		$this->CM->edit_contract($contract_employment, $contract_employmentid);
		echo "<script language='JavaScript'>";
		echo "alert('แก้ไขสำเร็จ')";
		echo "</script>";
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history', $data);
		$this->load->view('footer');
	}

	public function delete_contract()
	{
		$cm_id = $this->input->post("cm_id");
		$data['query'] = $this->CM->deletecontract($cm_id);
		echo "<script language='JavaScript'>";
		echo "alert('ลบข้อมูลสำเร็จ')";
		echo "</script>";
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract($cus_id);
		echo "<script language='JavaScript'>";
		echo "alert('ปฏิเสธสัญญา')";
		echo "</script>";
		$this->load->view('header_cus');
		$this->load->view('history', $data);
		$this->load->view('footer');
	}

	public function delete_contract_ptg()
	{
		$cm_id = $this->input->post("cm_id");
		$data['query'] = $this->CM->deletecontract($cm_id);
		echo "<script language='JavaScript'>";
		echo "alert('ลบข้อมูลสำเร็จ')";
		echo "</script>";
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_ptg', $data);
		$this->load->view('footer');
	}

	public function history()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history', $data);
		$this->load->view('footer');
	}

	public function history_success_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_success_cus', $data);
		$this->load->view('footer');
	}

	public function history_success2_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_success2_cus', $data);
		$this->load->view('footer');
	}

	public function history_success3_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_success3_cus', $data);
		$this->load->view('footer');
	}

	public function history_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function history_success_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_success_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function history_payment_cus()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->PMM->showpayment($cm_id);
		$this->load->view('header_cus');
		$this->load->view('history_payment_cus', $data);
		$this->load->view('footer');
	}

	public function history_payment2_cus()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->PMM->showpayment($cm_id);
		$this->load->view('header_cus2');
		$this->load->view('history_payment2_cus', $data);
		$this->load->view('footer');
	}

	public function history_payment3_cus()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->PMM->showpayment($cm_id);
		$this->load->view('header_cus2');
		$this->load->view('history_payment3_cus', $data);
		$this->load->view('footer');
	}

	public function history_paymentcheck_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_paymentcheck_cus', $data);
		$this->load->view('footer');
	}

	public function history_paymentcheck2_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_paymentcheck2_cus', $data);
		$this->load->view('footer');
	}

	public function history_paymentcheck3_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_paymentcheck3_cus', $data);
		$this->load->view('footer');
	}

	public function history_checkpicture_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_checkpicture_cus', $data);
		$this->load->view('footer');
	}

	public function history_paymentcheck_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_paymentcheck_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function history_submitwork_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_submitwork_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function history_checkpicture_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_checkpicture_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function history_paymentcheck_admin()
	{
		$data['query'] = $this->CM->getcontract_admin();
		$this->load->view('header_admin');
		$this->load->view('history_paymentcheck_admin', $data);
		$this->load->view('footer_ptg');
	}

	public function history_paymentcheck2_admin()
	{
		$data['query'] = $this->CM->getcontract_admin();
		$this->load->view('header_admin');
		$this->load->view('history_paymentcheck2_admin', $data);
		$this->load->view('footer_ptg');
	}

	public function history_paymentcheck3_admin()
	{
		$data['query'] = $this->CM->getcontract_admin();
		$this->load->view('header_admin');
		$this->load->view('history_paymentcheck3_admin', $data);
		$this->load->view('footer_ptg');
	}

	public function history_paymentsuccess_cus()
	{
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_paymentsuccess_cus', $data);
		$this->load->view('footer');
	}

	public function history_paymentsuccess_ptg()
	{
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		$this->load->view('header_ptg');
		$this->load->view('history_paymentsuccess_ptg', $data);
		$this->load->view('footer_ptg');
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
			$img = '';
		} else {
			$fileData = $this->upload->data();
			$img = $data['img'] = $fileData['file_name'];
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
			$data['query'] = $this->CM->edit_contract_success($status, $cm_id);
			echo "<script language='JavaScript'>";
			echo "alert('อับโหลดสำเร็จ $img')";
			echo "</script>";
			$cus_id = $this->session->userdata['cus_id'];
			$data['query'] = $this->CM->getcontract_cus($cus_id);
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

	public function upload_file2()
	{
		$cm_id = $this->input->post('cm_id');
		$data = array();
		$config['upload_path'] = 'img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 5024;
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('img2')) {
			$img2 = '';
		} else {
			$fileData = $this->upload->data();
			$img2 = $data['img2'] = $fileData['file_name'];
		}

		$this->db->set('img2', $img2);
		$this->db->where('cm_id', $cm_id);
		$result = $this->db->update('contract_employment');


		if ($result) {
			$status = array(
				'status' => $this->input->post("status")
			);
			$cm_id = array(
				'cm_id' => $this->input->post("cm_id")
			);
			$data['query'] = $this->CM->edit_contract_success($status, $cm_id);
			echo "<script language='JavaScript'>";
			echo "alert('อับโหลดสำเร็จ $img2')";
			echo "</script>";
			$cus_id = $this->session->userdata['cus_id'];
			$data['query'] = $this->CM->getcontract_cus($cus_id);
			$this->load->view('header_cus');
			$this->load->view('history_paymentcheck2_cus', $data);
			$this->load->view('footer');
		} else {
			echo "<script language='JavaScript'>";
			echo "alert('อับโหลดไม่สำเร็จ')";
			echo "</script>";
			$this->load->view('history_payment_cus');
		}
	}

	public function upload_file3()
	{
		$cm_id = $this->input->post('cm_id');
		$data = array();
		$config['upload_path'] = 'img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 5024;
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('img3')) {
			$img3 = '';
		} else {
			$fileData = $this->upload->data();
			$img3 = $data['img3'] = $fileData['file_name'];
		}

		$this->db->set('img3', $img3);
		$this->db->where('cm_id', $cm_id);
		$result = $this->db->update('contract_employment');


		if ($result) {
			$status = array(
				'status' => $this->input->post("status")
			);
			$cm_id = array(
				'cm_id' => $this->input->post("cm_id")
			);
			$data['query'] = $this->CM->edit_contract_success($status, $cm_id);
			echo "<script language='JavaScript'>";
			echo "alert('อับโหลดสำเร็จ $img3')";
			echo "</script>";
			$ptg_id = $this->session->userdata['ptg_id'];
			$data['query'] = $this->CM->getcontract_ptg($ptg_id);
			$this->load->view('header_ptg');
			$this->load->view('history_ptg', $data);
			$this->load->view('footer');
		} else {
			echo "<script language='JavaScript'>";
			echo "alert('อับโหลดไม่สำเร็จ')";
			echo "</script>";
			$this->load->view('history_payment_cus');
		}
	}

	public function upload_file4()
	{
		$cm_id = $this->input->post('cm_id');
		$data = array();
		$config['upload_path'] = 'img/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 5024;
		$config['encrypt_name'] = true;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('img4')) {
			$img4 = '';
		} else {
			$fileData = $this->upload->data();
			$img4 = $data['img4'] = $fileData['file_name'];
		}

		$this->db->set('img4', $img4);
		$this->db->where('cm_id', $cm_id);
		$result = $this->db->update('contract_employment');


		if ($result) {
			$status = array(
				'status' => $this->input->post("status")
			);
			$cm_id = array(
				'cm_id' => $this->input->post("cm_id")
			);
			$data['query'] = $this->CM->edit_contract_success($status, $cm_id);
			echo "<script language='JavaScript'>";
			echo "alert('อับโหลดสำเร็จ $img4')";
			echo "</script>";
			$cus_id = $this->session->userdata['cus_id'];
			$data['query'] = $this->CM->getcontract_cus($cus_id);
			$this->load->view('header_cus');
			$this->load->view('history', $data);
			$this->load->view('footer');
		} else {
			echo "<script language='JavaScript'>";
			echo "alert('อับโหลดไม่สำเร็จ')";
			echo "</script>";
			$this->load->view('history_payment_cus');
		}
	}

	public function showcontracting_ptg()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontract($cm_id);
		$this->load->view('header_ptg');
		$this->load->view('show_contract_ptg', $data);
		$this->load->view('footer_ptg');
	}

	public function success_contract()
	{
		$status = array(
			'status' => $this->input->post("status")
		);
		$cm_id = array(
			'cm_id' => $this->input->post("cm_id")
		);
		$data['query'] = $this->CM->edit_contract_success($status, $cm_id);
		$ptg_id = $this->session->userdata['ptg_id'];
		$data['query'] = $this->CM->getcontract_ptg($ptg_id);
		echo "<script language='JavaScript'>";
		echo "alert('ยืนยันการทำสัญญา')";
		echo "</script>";
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
		$data['query'] = $this->CM->edit_contract_success($status, $cm_id);
		$data['query'] = $this->CM->getcontract_admin();
		echo "<script language='JavaScript'>";
		echo "alert('ยืนยันการชำระเงิน')";
		echo "</script>";
		$this->load->view('header_admin');
		$this->load->view('history_paymentcheck_admin', $data);
		$this->load->view('footer');
	}

	public function showcontractingsuccess_ptg()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontract($cm_id);
		$this->load->view('header_ptg');
		$this->load->view('show_contractsuccess_ptg', $data);
	}

	public function showcontracting()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontract($cm_id);
		$this->load->view('header_cus');
		$this->load->view('show_contract', $data);
		$this->load->view('footer');
	}

	public function work_confirmation()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontract($cm_id);
		$this->load->view('header_cus');
		$this->load->view('work_confirmation', $data);
		$this->load->view('footer');
	}

	public function working_confirmation()
	{
		$status = array(
			'status' => $this->input->post("status")
		);
		$cm_id = array(
			'cm_id' => $this->input->post("cm_id")
		);
		$data['query'] = $this->CM->edit_contract_success($status, $cm_id);
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_success2_cus', $data);
		$this->load->view('footer');
	}

	public function checkpicture_cus()
	{
		$cm_id = $this->input->post('cm_id');
		$data['query'] = $this->CM->showcontract($cm_id);
		$this->load->view('header_cus2');
		$this->load->view('checkpicture_cus', $data);
		$this->load->view('footer');
	}

	public function checkingpicture_cus()
	{
		$status = array(
			'status' => $this->input->post("status")
		);
		$cm_id = array(
			'cm_id' => $this->input->post("cm_id")
		);
		$data['query'] = $this->CM->edit_contract_success($status, $cm_id);
		$cus_id = $this->session->userdata['cus_id'];
		$data['query'] = $this->CM->getcontract_cus($cus_id);
		$this->load->view('header_cus');
		$this->load->view('history_success3_cus', $data);
		$this->load->view('footer');
	}

	
}
