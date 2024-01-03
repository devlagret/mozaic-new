<?php

namespace Database\Seeders;

use App\Models\InvtItemCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        InvtItemCategory::factory()->count(20)->create();
    }
}