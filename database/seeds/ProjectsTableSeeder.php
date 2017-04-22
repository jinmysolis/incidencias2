<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create([
            'name'=>'Proyecto A',
            'description' => 'El proyecto A es para desarrollar un sitio web'
        ]);
        
         Project::create([
            'name'=>'Proyecto B',
            'description' => 'El proyecto A es para desarrollar una aplicacion androis'
        ]);
    }
}
