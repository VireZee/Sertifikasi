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
        // return redirect()->intended('catalogadmin');
        dd($req->all());
    }
}