<?php

namespace Database\Seeders;

use App\Models\Admin\Task;
use App\Models\Admin\TaskCategory;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::factory()->count(5)->create();
    }
}
