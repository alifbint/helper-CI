<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(! function_exists('formatRP')){
	function formatRP($angka){
		$angka = intval($angka);
		$angka = "Rp. ".number_format($angka,2,',','.');
		return $angka;
	}
}
