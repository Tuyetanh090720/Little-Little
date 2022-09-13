<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        event::factory()->times(5)->create();
    }
}
