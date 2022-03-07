<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {


	public function uye_getir()
	{

		$uyeler=array(

			"id"	 => "1",
			"ad"	 => "mustafa kemal",
			"soyad"	 => "aktaş",
			"mail"	 => "mka_311@gmail.com"

		);

		echo "<pre>";
		print_r($uyeler);
		echo "</pre>";

		echo "ÜYELER LİSTELENDİ";
	}
}
