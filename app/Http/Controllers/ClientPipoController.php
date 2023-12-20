<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientPipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('clients_view.index', ['clients' => Client::all()] );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients_view.createClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request)
    {
        $request->validated($request->all());

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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('clients_view.updateClient', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client)
    {
        $request->validated($request->all());

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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('index')->with('success', 'Client deleted successfully!');
    }
}
