<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WorkerController extends Controller
{
    public function index()
    {
    	return view('worker.index');
    }

    public function create()
    {
    	return view('worker.create');
    }
}
