<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    Order::truncate();
    Order::create([
            'id' => 1,
            'name' => '王大明',
            'phone' => '0912345678',
            'email' => 'web109btony712@gmail.com',
            'pattern' => '2020 MT-03 ABS',
            'rent' => '3500',
            'deposit' => '1050',
            'place' => '楊梅幼獅店',
            'fawdays' => '1',
            'usedate' => '2020-12-01',
            'returndate' => '2020-12-01',
            'remark' => '測試',
            'orderstatus' => '已下訂單',
            'adminremark' => '已下訂單 退單 已付訂金 付款完成',
            'men_name' => 'tony',
            'mem_phone' => '0912345678',
            'mem_email' => 'web109btony712@gmail.com',
    ]);
    }
}
