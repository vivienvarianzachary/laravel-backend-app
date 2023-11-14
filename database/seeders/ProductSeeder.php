<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $categories = Category::all();

        for ($i = 0; $i <100; $i++) {
            $user = $users->random();
            $category = $categories->random();

            Product::factory()->create([
                'user_id' => $user->id,
                'category_id' => $category-id,
            ]);
        }
    }
}
