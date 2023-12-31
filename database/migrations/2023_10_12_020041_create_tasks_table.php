<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('task');
            $table->text('description');
            $table->date('due_date');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['Not Started', 'In Progress', 'Completed']);
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('task_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
