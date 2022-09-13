<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\orderDetail;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        orderDetail::factory()->times(3)->create();
    }
}
