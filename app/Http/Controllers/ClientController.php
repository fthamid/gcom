<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class ClientController extends Controller
{
    public $perPage = 20;   // nombre de clients par page
    /**
     * Display a listing of the resource.
     */
    public function index()     {
        //
        $clients = Client::paginate($this->perPage);
        return view('clients.index', compact('clients'),['currentRoute' => 'clients']);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()     {
        //
        return view('clients.create',['currentRoute' => 'clients']);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)     {
        //
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|unique:clients',
            'telephone' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
        ]);
       
        Client::create($request->all());

        return redirect()->route('clients.index')->with('success', 'Client ajouté');

    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)     {
        //
        $client = Client::find($id);
        return view('clients.show', compact('client'),['currentRoute' => 'clients']);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)     {
        return view('clients.edit', compact('client'),['currentRoute' => 'clients']);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)  {
        $client->update($request->all());
        return redirect()->route('clients.index')->with('success', 'Client mis à jour');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)     {
        $client->delete();
        return back()->with('success', 'Client supprimé');
    }
}
