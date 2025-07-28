<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $factures = Facture::all();
        return view('factures.index', compact('factures'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('factures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'date_facture' => 'required|date',
            'produits' => 'required|array',
        ]);

        DB::transaction(function () use ($request) {
            $facture = Facture::create([
                'client_id' => $request->client_id,
                'date_facture' => $request->date_facture,
                'montant_total' => 0,
            ]);

            $total = 0;

            foreach ($request->produits as $produitData) {
                $produit = Produit::findOrFail($produitData['id']);
                $ligne = $facture->lignes()->create([
                    'produit_id' => $produit->id,
                    'quantite' => $produitData['quantite'],
                    'prix_unitaire' => $produit->prix_vente,
                    'total' => $produit->prix_vente * $produitData['quantite'],
                ]);
                $total += $ligne->total;
            }
            $facture->update(['montant_total' => $total]);
        });

        return redirect()->route('factures.index')->with('success', 'Facture créée avec succès.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
