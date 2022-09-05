<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        order::factory()->times(5)->create();
    }
}
