<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('clients_view.index', compact('clients') );
    }

    public function create()
    {
        return view('clients_view.createClient');
    }

    public function store(Request $request){
        $request->validate([
            'fullName' => 'string|required|max:255',
            'email' => 'string|max:255|required',
            'phone' => 'string|required',
            'address' => 'string|max:255|required',
            'date' => 'required',
        ]);

        Client::create([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'date' => $request->date,
            'status' => $request->status == 'on' ? 1 : 0,
        ]);

        return redirect()->route('index')->with('success', 'Client created successfully!');
    }

    public function update($id)
    {
        $client = Client::where('id', $id)->first();
        return view('clients_view.updateClient', compact('client'));
    }

    public function storeUpdate(Request $request,int $id)
    {
        $request->validate([
            'fullName' => 'string|required|max:255',
            'email' => 'string|max:255|required',
            'phone' => 'string|required',
            'address' => 'string|max:255|required',
            'date' => 'required',
        ]);

        $client = Client::where('id', $id)->first();

        $client->update([
            'fullName' => $request->fullName,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'date' => $request->date,
            'status' => $request->status == 'on' ? 1 : 0,
        ]);

        return redirect()->route('index')->with('success', 'Client updated successfully!');
    }
}
