<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('clients_view.index');
    }

    public function create()
    {
        return view('clients_view.createClient');
    }
}
