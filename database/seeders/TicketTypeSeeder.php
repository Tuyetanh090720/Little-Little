<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ticketType;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ticketType::factory()->times(10)->create();
    }
}
