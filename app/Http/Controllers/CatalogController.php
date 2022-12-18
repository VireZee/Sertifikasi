<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    function index()
    {
        $data['title'] = 'Catalog Management';
        $cats = Catalog::all();
        return view('catalogadmin', $data, compact(['cats']));
    }
    function store(Request $req)
    {
        $req->validate([
            'judul' => 'required|unique:catalogs',
            'halaman' => 'required',
            'penerbit' => 'required'
        ]);
        $cats = new Catalog([
            'judul' => $req->judul,
            'halaman' => $req->halaman,
            'penerbit' => $req->penerbit
        ]);
        $cats->save();
        return redirect()->intended('catalogadmin');
    }
    function destroy($id)
    {
        $cats = Catalog::find($id);
        $cats->delete();
        return redirect()->intended('catalogadmin');
    }
    function read()
    {
        $cats = Catalog::all();
        $data['title'] = 'Catalog List';
        return view('catalog', $data, compact(['cats']));
    }
}