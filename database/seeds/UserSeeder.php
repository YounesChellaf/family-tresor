<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'آل شارف عبد الله',
            'phone_number' => '+966 56 006 1615',
            'card_number' => '0000000000',
            'role' => 'admin',
            'location' => 'ينبــع',
            'job' => 'مدير الموقــع',
            'sexe' => 'ذكـــر',
            'confirmed' => true,
            'email' => 'abdelah-elhajari@gmail.com',
            'password' => Hash::make('el-hajari-admin-2020'),
        ]);
    }
}
