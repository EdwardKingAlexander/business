<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\ExpenseCategory;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'expenses';

    protected $fillable = [
        'expense',
        'amount',
        'entry_date',
        'description',
        'user_id'
    ];

    // Relationships 

    // Expenses belong to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Expenses belong to an expense category
    public function expenseCategory()
    {
        return $this->belongsTo(ExpenseCategory::class);
    }
}
