<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{

		echo "merhaba salam aleyküm arkadaşlar ben altın çocuk";
		die();
		$this->load->view('welcome_message');
	}

	public function listele()
	{
		echo "VERİLER LİSTELENDİ";
	}

	public function uye_getir()
	{
		echo "ÜYELER LİSTELENDİ";
	}
}
