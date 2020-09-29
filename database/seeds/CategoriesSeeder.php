<?php

use Illuminate\Database\Seeder;
use App\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name'=> 'Planning'],
            ['name'=> 'Designing'],
            ['name'=> 'Testing'],

        ];
        foreach($categories as $category){
            Categories::create($category);
        }
    }
}
