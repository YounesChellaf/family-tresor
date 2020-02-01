<?php

use Illuminate\Database\Seeder;

class GeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\General::create([
            'phone_number' => 'لم يحـــدد بعد من الادارة',
            'email' => 'لم يحـــدد بعد من الادارة',
            'first_bank' => 'لم يحـــدد بعد من الادارة',
            'second_bank' => 'لم يحـــدد بعد من الادارة',
            'facebook' => '#',
            'twitter' => '#',
            'instagram' => '#',
        ]);
    }
}
