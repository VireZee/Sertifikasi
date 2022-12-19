<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    function index()
    {
        $data['title'] = 'Loan Management';
        $loan = Loan::all();
        return view('loan', $data, compact(['loan']));
    }
    function store(Request $req)
    {
        $req->validate([
            'loan_user' => 'required',
            'tanggal_balik' => 'required'
        ]);
        $current = Carbon::now()->addDay(7);
        $loan = new Loan([
            'loan_user' => $req->loan_user,
            'tanggal_balik' => $current
        ]);
        $loan->save();
        return redirect()->intended('loan');
    }
    function destroy($id)
    {
        $loan = Loan::find($id);
        $loan->delete();
        return redirect()->intended('loan');
    }
}