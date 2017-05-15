<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
    	return view('pages.index');
    }

    public function imprint() 
    {
    	return view('pages.imprint');
    }

    public function contact() 
    {
    	return view('pages.contact');
    }

    public function login() 
    {
    	return view('auth.login');
    }

    public function registry() 
    {
    	return view('auth.register');
    }
}
