<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create([
            'name' => "Genel"
        ]);
        Categories::create([
            'name' => "Saglik"
        ]);
        Categories::create([
            'name' => "Teknoloji"
        ]);
        Categories::create([
            'name' => "Magazin"
        ]);
        Categories::create([
            'name' => "Spor"
        ]);
        Categories::create([
            'name' => "Siyaset"
        ]);
        Categories::create([
            'name' => "Ekonomi"
        ]);
    }
}
