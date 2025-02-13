<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

class GenerateCategoriesDataTemp extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Full Set', 'slug' => 'full-set', 'description' => 'Baby Three Full Set', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::SET],
            ['name' => 'Box Lẻ New', 'slug' => 'box-le', 'description' => 'Baby Three Box Lẻ', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::BOX],
            ['name' => 'Box Check Card', 'slug' => 'box-check-card', 'description' => 'Baby Three Đã Check Card', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::BOX],
            ['name' => 'Lè Khe', 'slug' => 'le-khe', 'description' => 'Baby Three Lè Khe', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::EYE],
            ['name' => 'Mắt Rưng', 'slug' => 'mat-rung', 'description' => 'Baby Three Mắt Rưng', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::EYE],
            ['name' => 'Mắt Nước', 'slug' => 'mat-nuoc', 'description' => 'Baby Three Mắt Nước', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::EYE],
            ['name' => 'Mắt Dora', 'slug' => 'mat-dora', 'description' => 'Baby Three Mắt Dora', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::EYE],
            ['name' => 'Secret', 'slug' => 'secret', 'description' => 'Baby Three Secret', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::EYE],
            ['name' => 'Box 400%', 'slug' => 'box-400', 'description' => 'Baby Three 400%', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::BIG_BOX],
            ['name' => 'Box 600%', 'slug' => 'box-600', 'description' => 'Baby Three 600%', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::BIG_BOX],
            ['name' => 'Box 1000%', 'slug' => 'box-1000', 'description' => 'Baby Three 1000%', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::BIG_BOX],
            ['name' => 'Box Túi', 'slug' => 'box-tui', 'description' => 'Baby Three Túi', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::BAG],
            ['name' => 'Box Dây Đeo', 'slug' => 'box-day-deo', 'description' => 'Baby Three Dây Đeo', 'image' => 'electronics.jpg', 'parent_id' => null , 'type' => Categories::BAG],
        ];

        Categories::insert($data);
    }
}
