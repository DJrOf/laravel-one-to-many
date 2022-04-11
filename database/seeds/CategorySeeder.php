<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

           $categories = [
            ['label' => 'CSS', 'color' => 'info'],
            ['label' => 'ES6', 'color' => 'warning'],
            ['label' => 'Bootstrap', 'color' => 'dark'],
            ['label' => 'PHP', 'color' => 'primary'],
            ['label' => 'SQL', 'color' => 'secondary'],
            ['label' => 'Laravel', 'color' => 'danger'],
            ['label' => 'VueJS', 'color' => 'success']
           ];


           foreach ($categories as $category) {
               $new_category = new Category();
               $new_category->label = $category['label'];
               $new_category->color = $category['color'];
               $new_category->save();
               
           }
    }
}
