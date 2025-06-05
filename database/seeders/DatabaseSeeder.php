<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Color;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Color::insert([
            [
                'hexadecimal' => '#000000',
                'created_at' => '2022-08-15 00:00:00',
                'updated_at' => '2022-08-15 00:00:00',
            ],
            [
                'hexadecimal' => '#ffffff',
                'created_at' => '2022-08-15 00:00:00',
                'updated_at' => '2022-08-15 00:00:00',
            ],
            [
                'hexadecimal' => '#ff0000',
                'created_at' => '2022-08-15 00:00:00',
                'updated_at' => '2022-08-15 00:00:00',
            ],
            [
                'hexadecimal' => '#00ff00',
                'created_at' => '2022-08-15 00:00:00',
                'updated_at' => '2022-08-15 00:00:00',
            ],
            [
                'hexadecimal' => '#0000ff',
                'created_at' => '2022-08-15 00:00:00',
                'updated_at' => '2022-08-15 00:00:00',
            ],
        ]);
    }
}
