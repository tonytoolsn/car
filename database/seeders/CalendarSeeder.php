<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Calendar;
class CalendarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Calendar::truncate();
    Calendar::create([
            'id' => 1,
            'title' => '2020 MT-03 ABS出租中',
            'start' => '2020-12-01',
            'end' => '2020-12-01',
    ]);
    }
}
