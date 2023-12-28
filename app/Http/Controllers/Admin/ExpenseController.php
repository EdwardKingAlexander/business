<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Expense;
use Illuminate\Http\Request;
use Inertia\Inertia;
Use App\Models\User;
use App\Http\Requests\Admin\ExpenseRequest;
use App\Http\Resources\Admin\ExpenseResource;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $expenses = auth()->user()->expenses()->orderBy('created_at', 'desc')->get();



       
 
        return Inertia::render('Admin/BillsTracker/Expenses/Index',
        [  
            'expenses' => $expenses,
            'message' => 'Expenses Tracker',
            'expenseTotal' => number_format($expenses->sum('amount'), 2),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return Inertia::render('Admin/BillsTracker/Expenses/Create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ExpenseRequest $request)
    {

        $expense = Expense::create($request->validated());
       
        return new ExpenseResource($expense);

    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return Inertia::render('Admin/BillsTracker/Expenses/Edit', [
            'expense' => $expense
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
