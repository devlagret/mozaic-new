<?php

namespace Database\Seeders;

use App\Models\AcctAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcctAccount::factory()->count(10)->create();
    }
}
