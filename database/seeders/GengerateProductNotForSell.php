<?php

namespace Database\Seeders;

use App\Models\ProductsNotForSell;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GengerateProductNotForSell extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Thỏ Thị Trấn', 'description' => 'Description 1', 'image' => 'image1.jpg', 'level' => 1],
            ['name' => 'Thỏ Thị Trấn V2', 'description' => 'Description 1', 'image' => 'image1.jpg', 'level' => 1],
            ['name' => '12 Con Giáp', 'description' => 'Description 2', 'image' => 'image2.jpg', 'level' => 2],
            ['name' => 'Macaron', 'description' => 'Description 3', 'image' => 'image3.jpg', 'level' => 3],
            ['name' => 'Macaron V2', 'description' => 'Description 4', 'image' => 'image4.jpg', 'level' => 4],
            ['name' => 'Hải Sản', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 5],
            ['name' => 'Côn Trùng', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 6],
            ['name' => 'Trái Cây', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 7],
            ['name' => 'Mèo Thần Tài', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 8],
            ['name' => 'Mèo Tỉ Phú', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 9],
            ['name' => 'Lila Zoo', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 10],
            ['name' => 'BB3 Dây Đeo', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 11],
            ['name' => 'Gương Thần', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 12],
            ['name' => 'Cung Hoàn Đạo', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 13],
            ['name' => 'Tây Du Kí', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 14],
            ['name' => 'Migo', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 15],
            ['name' => 'Migo 400%', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 16],
            ['name' => 'Ver Tết mini', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 17],
            ['name' => 'Ver Tết 400%', 'description' => 'Description 5', 'image' => 'image5.jpg', 'level' => 18],
        ];
        ProductsNotForSell::insert($data);
    }
}
