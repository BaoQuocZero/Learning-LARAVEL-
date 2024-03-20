<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Phone;

class UserPhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create users with phones
        User::factory()->count(10)->create()->each(function ($user) {
            $user->phone()->save(Phone::factory()->make());
        });
    }
}
