<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

			$this->load->helper(array('url'));
	}

	public function index()
	{
		$data = array(
			'konten' => 'dashboard/dashboard',
		);
		$this->load->view('template_admin', $data);
	}
}
