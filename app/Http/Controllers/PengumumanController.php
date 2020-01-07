<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;
use App\kategoriPengumuman;

class PengumumanController extends Controller
{
    public function index(){
        $listPengumuman=Pengumuman::all();
        return view('pengumuman.index', compact('listPengumuman'));
    }

    public function show($id){
        $pengumuman=Pengumuman::find($id);
        return view('pengumuman.show', compact('pengumuman'));
    }
    public function create(){
        $kategoriPengumuman= kategoriPengumuman::pluck('nama','id');

        return view ('pengumuman.create',compact('kategoriPengumuman'));
    }

    public function store(request $requirest){
        $input= $requirest->all();

        Pengumuman::create($input);

        return redirect(route('pengumuman.index'));
    }
}