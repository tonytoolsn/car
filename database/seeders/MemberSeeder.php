<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;
class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     Member::truncate();
     Member::create([
            'id' => 1,
            'name' => 'tony',
            'password' => 'password',
            'email' => 'web109btony712@gmail.com',
            'phone' => '0912345678',
    ]);
    }
}
