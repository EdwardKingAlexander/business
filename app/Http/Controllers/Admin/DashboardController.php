<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    //

    public function index()
    {

        $transactions = auth()->user()->expenses()->latest()->take(5)->get();

        return Inertia::render('Admin/Dashboard', [
            'transactions' => $transactions,
        ]);
    }

}
