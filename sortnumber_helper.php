<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
Helper ini digunakan untuk mempersingkat angka
sebagai contoh 1000 akan di singkat jadi 1K
*/

if(! function_exists('sortNumber')){
	function sortNumber($number){
		if($number < 1000){
			$hasil = $number;
		}
		else if($number < 1000000){
			$hasil = number_format($number / 1000, 3) . 'K';
		}
		else if($number < 1000000000){
			$hasil = number_format($number / 1000000, 3) . 'M';
		}
		else{
			$hasil = number_format($number / 1000000000, 3) . 'B';
		}

		return $hasil;
	}
}
