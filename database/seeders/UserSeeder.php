<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        $password = Hash::make('12345678');

        for ($i = 1; $i <= 10; $i++) {

            User::create([
                'name' => $faker->name(),
                'email' => $faker->unique()->email(),
                'nomorhp' => '8'.rand(1111111111, 9999999999),
                // 'gender' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'password' => $password,
                'status' => rand(0,1) ? 'Pengguna' : 'Penghuni',
                'role_id'  => rand(1,4),
            ]);
        }
    }
}
