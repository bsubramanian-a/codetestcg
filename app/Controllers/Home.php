<?php

namespace App\Controllers;

class Home extends BaseController
{   
    public function __construct(){
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization,Basic");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    }
    
	public function index()
	{
		return view('welcome_message');
	}
	
	public function test()
	{
	    $data = file_get_contents("dataset.json");

	       
	            
	            return $data;
	}
}
