<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'task',
        'description',
        'due_date',
        'user_id',
        'category_id',
        'status',
    ];

    /**
     * @var string[]
     */

    protected $casts = [
        'due_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function taskCategory()
    {
        return $this->belongsTo(TaskCategory::class);
    } 


}
