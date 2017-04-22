<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Category::create([
            'name'=> 'Ctegoria A1',
            'description' => '',
            'project_id' => '1',
        ]);
       
       Category::create([
            'name'=> 'Ctegoria A2',
            'description' => '',
            'project_id' => '1',
        ]);
       
       Category::create([
            'name'=> 'Ctegoria B1',
            'description' => '',
            'project_id' => '2',
        ]);
       
       Category::create([
            'name'=> 'Ctegoria B2',
            'description' => '',
            'project_id' => '2',
        ]);
    }
}
