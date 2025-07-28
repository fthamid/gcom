@extends('layouts.listing',['title' => 'Liste des produits','headers'   => ['Code', 'Nom', 'Description', 'Prix', 'Stock'],
'fields'    => ['code', 'nom', 'description', 'prix_vente_ttc', 'stock'],'table'     => $produits,  'm_create'  =>  'produits.create' ,'m_edit'    => 'produits.edit' , 
'm_show'    =>  'produits.show' ,'m_destroy' =>'produits.destroy'])
