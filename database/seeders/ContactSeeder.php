<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        contact::factory()->times(10)->create();
    }
}
