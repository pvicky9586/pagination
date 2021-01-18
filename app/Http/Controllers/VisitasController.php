<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class VisitasController extends Controller
{
   public function index(){
  //  	$date = new \DateTime;

		// $check_if_exists = DB::table('visitor')->where('ip', $_SERVER['REMOTE_ADDR'])->first();

		// $get_visit_day = DB::table('visitor')->select('visit_date')->where('ip', $_SERVER['REMOTE_ADDR'])->first();

		// $value = date_create($get_visit_day->visit_date);

		// if(!$check_if_exists)
		// {

		//        DB::table('visitor')->insert(array('ip' => $_SERVER['REMOTE_ADDR'], 'hits' => '1', 'visit_date' => $date));

		// }else{

		//        DB::table('visitor')->where('ip', $_SERVER['REMOTE_ADDR'])->increment('hits');
		// }
		   	
   	return view('visitas');
   }
}
