<?php

namespace App\Http\Controllers;

use App\Client;
use App\Doctor;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients/index', compact('clients'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        $clients = new Client();
        return view('clients/create', compact('doctors', 'clients'));
    }

    public function store()
    {
        Client::create($this->validateRequest());

        return redirect('clients');
    }

    public function show(Client $client)
    {
        return view('clients/show', compact('client'));
    }

    private function validateRequest()
    {
        return request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'doctor_id' => 'required'
        ]);
    }
}
