<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'purpose',
        'start_date',
        'end_date',
        'created_at',
        'updated_at',
        'user_id',
        'slug'
    ];

    // create a migration for this model: php artisan make:migration create_projects_table --create=projects

    // create a controller for this model: php artisan make:controller Admin/Projects/ProjectController --resource --model=Models/Admin/Projects

    // create a factory for this model: php artisan make:factory ProjectsFactory --model=Models/Admin/Projects

    // create a seeder for this model: php artisan make:seeder ProjectsSeeder

    // create a resource for this model: php artisan make:resource ProjectsResource

    // create a resource collection for this model: php artisan make:resource ProjectsCollection

    // create a request for this model: php artisan make:request ProjectsRequest

    // create a test for this model: php artisan make:test ProjectsTest

    // create a policy for this model: php artisan make:policy ProjectsPolicy --model=Models/Admin/Projects

    // create a migration for this model: php artisan make:migration create_projects_table --create=projects

    // create a controller for this model: php artisan make:controller Admin/Projects/ProjectController --resource --model=Models/Admin/Projects



    // project belongs to a user

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    // project has many features

    public function features()
    {
        return $this->hasMany('App\Models\Admin\Features');
    }

    // project has many bugs

    public function bugs()
    {
        return $this->hasMany('App\Models\Admin\Bugs');
    }

    // project can have many members or users working on the same project

    public function projectMembers()
    {
        return $this->belongsToMany('App\Models\User');
    }

}
