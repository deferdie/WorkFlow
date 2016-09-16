<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Client;

class ClientController extends Controller
{
	private $Client;

	public function __construct(Client $client)
	{
		$this->Client = $client;
	}

    public function index()
    {
    	return view('client.index');
    }

    public function create()
    {
    	return view('client.createClient');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
	        'client_business_name' => 'required|max:255',
	        'client_contact_name' => 'required|max:255',
	        'client_contact_email' => 'required|max:255',
	        'client_contact_number' => 'required|max:14',
	    ]);

	    $this->Client->create([
	        'user_id' => \Auth::user()->id,
	        'company_id' => \Auth::user()->company_id,
	        'client_business_name' => $request->input('client_business_name'),
	        'client_contact_name' => $request->input('client_contact_name'),
	        'client_contact_email' => $request->input('client_contact_email'),
	        'client_contact_number' => $request->input('client_contact_number'),
	    ]);

    	return redirect('/client');
    }
}
