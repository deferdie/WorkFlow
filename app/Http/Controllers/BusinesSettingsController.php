<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BusinesSettingsController extends Controller
{
    
    public function index()
    {
    	return view('businessSettings.index');
    }
}
