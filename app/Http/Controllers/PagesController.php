<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function home(){
		return view('welcome');
	}
	
	public function contact(){
		return view('contact');
	}
}
