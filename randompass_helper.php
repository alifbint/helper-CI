<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if(! function_exists('random_pass')){
	function random_pass($char){
		$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdfghijklmnopqrstuvwxyz1234567890';
		$string = '';
		for($i = 0; $i < $char; $i++) {
			$pos = rand(0, strlen($karakter)-1);
			$string .= $karakter{$pos};
		}
		return $string;
	}
}
