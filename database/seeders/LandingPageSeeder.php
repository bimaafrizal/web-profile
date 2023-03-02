<?php

namespace Database\Seeders;

use App\Models\LandingPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LandingPage::create([
            'title' => 'CV Digital Media Inovasi',
            'description' => 'Melayani pengembangan aplikasi dan website sesuai kebutuhan Anda',
            'about1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'about2' => 'Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'address' => 'Jl. Durian No.15, Krobyongan, Gawanan, Kec. Colomadu, Kabupaten Karanganyar, Jawa Tengah 57158',
            'email' => 'info@mediadigitalinovasi.com',
            'phone_num' => '082226591250',
            'twitter' => '',
            'facebook' => '',
            'instagram' => '',
            'linkedin' => '',
        ]);
    }
}