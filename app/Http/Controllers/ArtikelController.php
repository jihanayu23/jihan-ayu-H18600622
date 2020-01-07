<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\kategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
        $listArtikel=Artikel::all();
        return view('artikel.index', compact('listArtikel'));
    }

    public function show($id){
        $artikel=Artikel::find($id);
        return view('artikel.show', compact('artikel'));

        if(empty($Artikel)){
            return redirect(route('artikel.index'));
        } 
    }
    public function create(){
        $kategoriArtikel= kategoriArtikel::pluck('nama','id');

        return view ('artikel.create',compact('kategoriArtikel'));
    }

    public function store(request $requirest){
        $input= $requirest->all();

        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
    public function edit($id){
        $Artikel=Artikel::find($id);
        
        if(empty($Artikel)){
            return redirect(route('artikel.index'));
        } 

        return view('artikel.edit',compact('Artikel'));
    }

    public function update($id,request $requirest){
        $Artikel=Artikel::find($id);
        $input= $requirest->all();
        
        if(empty($Artikel)){
            return redirect(route('artikel.index'));
        }
        
        $Artikel->update($input);

        return redirect(route('artikel.index'));
    }
}