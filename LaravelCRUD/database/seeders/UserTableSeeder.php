<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Dẫn đến model
use App\Models\userCRUD;

//Thêm Faker để tạo dữ liệu ảo
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { // Tạo 10 bản ghi mẫu
            userCRUD::create([
                'ho_Ten' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'hinh_User' => $faker->imageUrl(),
                // 'ngay_Tao' sẽ tự động thêm theo mặc định
            ]);
        }
    }
}