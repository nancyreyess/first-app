<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

/* before we seed them, we need to pull in those models 
anytime a laravel file is going to reference a model, we need to import that model like:*/
use App\Models\User;
use App\Models\Project;
use App\Models\Type;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Project::truncate();
        Type::truncate();
        
        User::factory()->count(2)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(10)->create(); /* project needs type & user so those need to be above*/
    }
}
