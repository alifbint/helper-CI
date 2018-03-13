<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if(! function_exists('hitung_umur')){
	function hitung_umur($tanggal_lahir) {
	    list($year,$month,$day) = explode("-",$tanggal_lahir);
	    $year_diff  = date("Y") - $year;
	    $month_diff = date("m") - $month;
	    $day_diff   = date("d") - $day;
	    if ($month_diff < 0) $year_diff--;
	        elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
	    return $year_diff;
	}
	
}
