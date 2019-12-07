<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index(){
    	$data = Kategori::all();
    	return view('kategori.index')->with('kategori', $data);
    }
}
