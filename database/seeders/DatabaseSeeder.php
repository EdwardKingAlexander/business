<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin\Expense;
use App\Models\Admin\ExpenseCategory;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Admin\Task;
use App\Models\Admin\TaskCategory;
// use App\Models\Admin\ExpenseCategory

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Edward',
            'email' => 'edward@rockymountainweb.design',
            'password' => bcrypt('password'),
            'is_administrator' => true,            
        ]);


        ExpenseCategory::factory()->count(6)->create();
        Expense::factory()->count(15)->create();

       
        TaskCategory::factory()->count(15)->create();
        Task::factory()->count(15)->create();
    }
}
