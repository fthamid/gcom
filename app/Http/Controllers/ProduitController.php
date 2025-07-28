<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()     {
        $produits = Produit::all();
        return view('produits.index', compact('produits'),['currentRoute' => 'produits']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()   {
        return view('produits.create',['currentRoute' => 'produits']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)     {
        $request->validate([
            'nom' => 'required|string|max:255',
            'code' => 'required|unique:produits',
            'description' => 'required',
            'prix_vente_ttc' => 'required|numeric',
            'stock' => 'required|integer|min:0',
        ]);

        Produit::create($request->all());

        return redirect()->route('produits.index')->with('success', 'Produit ajouté');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)    {
        //
        //
        $produit = Produit::find($id);
        return view('produits.show', compact('produit'),['currentRoute' => 'produits']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produit $produit)     {
        return view('produits.edit', compact('produit'),['currentRoute' => 'produits']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produit $produit)     {
        $request->validate([
            'nom' => 'required|string|max:255',
            'code' => 'required|unique:produits,code',
            'prix_vente' => 'required|numeric',
            'stock' => 'required|integer|min:0',
        ]);

        $produit->update($request->all());

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)     {
        $produit->delete();
        return back()->with('success', 'Produit supprimé');
    }

}
