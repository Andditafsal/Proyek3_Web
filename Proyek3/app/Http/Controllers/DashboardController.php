<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Carbon\Carbon;

class DashboardController extends Controller

{
    public function index()
    {
        if(auth()->user()->role == 'Customer'){
            $transactions = Transaction::with('user', 'room', 'customer')
            ->where('user_id', auth()->user()->id)
            ->orderBy('check_out', 'ASC')
            ->orderBy('id', 'DESC')->get();
        }else{
            $transactions = Transaction::with('user', 'room', 'customer')
                ->where([['check_in', '<=', Carbon::now()], ['check_out', '>=', Carbon::now()]])
                ->orderBy('check_out', 'ASC')
                ->orderBy('id', 'DESC')->get();
        }

        return view('dashboard.index', compact('transactions'));
    }
}
