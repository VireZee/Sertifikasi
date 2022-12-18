<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    function index()
    {
        return view('catalog', ['title' => 'Book']);
    }
}