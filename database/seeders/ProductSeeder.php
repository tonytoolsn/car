<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //清空
    Product::truncate();
    Product::create([
            'id' => 1,
            'cgy' => 'S1',
            'pattern' => '2020 MT-03 ABS',
            'seatheight' => '780mm',
            'tankcapacity' => '14L',
            'weight' => '170kg',
            'horsepower' => '75hp/9,000 rpm',
            'torque' =>'6.1kg-m/8,000rpm',
            'cariwh' => '2,140mm x 750mm x 1,150mm',
            'prcie' => '3500',
            'img' => 'portfolio-1'
    ]);
    Product::create([
            'id' => 2,
            'cgy' => 'S1',
            'pattern' => '2020 CB650R',
            'seatheight' => '780mm',
            'tankcapacity' => '15.4L',
            'weight' => '202kg',
            'horsepower' => '75HP/ 9,000 rpm',
            'torque' =>'64 Nm / 8,500 rpm',
            'cariwh' => '2,140mm x 780mm x 1,075mm',
            'prcie' => '3500',
            'img' => 'portfolio-2'
    ]);
    Product::create([
            'id' => 3,
            'cgy' => 'S1',
            'pattern' => '2020 KTM 390',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '149kg',
            'horsepower' => '75HP/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2,140mm x 780mm x 1,075mm',
            'prcie' => '3500',
            'img' => 'portfolio-3'
    ]);
     Product::create([
            'id' => 4,
            'cgy' => 'S2',
            'pattern' => '2020 CB150R ABS',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '125kg',
            'horsepower' => '75HP/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '1973mm x 750mm x 1,150mm',
            'prcie' => '3000',
            'img' => 'portfolio-4'
    ]);
    Product::create([
            'id' => 5,
            'cgy' => 'S2',
            'pattern' => '2020 CBR650R',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '208kg',
            'horsepower' => '75hp/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2140mm x 750mm x 1,150mm',
            'prcie' => '3000',
            'img' => 'portfolio-5'
    ]);
     Product::create([
            'id' => 6,
            'cgy' => 'S2',
            'pattern' => '2020 CB300R ABS',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '143kg',
            'horsepower' => '75hp/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2140mm x 750mm x 1,150mm',
            'prcie' => '3000',
            'img' => 'portfolio-6'
    ]);
    Product::create([
            'id' => 7,
            'cgy' => 'S3',
            'pattern' => '2020 CRF150L',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '143kg',
            'horsepower' => '75hp/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2140mm x 750mm x 1,150mm',
            'prcie' => '2500',
            'img' => 'portfolio-7'
    ]);
    Product::create([
            'id' => 8,
            'cgy' => 'S3',
            'pattern' => '2020 YZF-R6',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '143kg',
            'horsepower' => '75hp/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2140mm x 750mm x 1,150mm',
            'prcie' => '2500',
            'img' => 'portfolio-8'
    ]);
    Product::create([
            'id' => 9,
            'cgy' => 'S3',
            'pattern' => '2019 YZF-R3 ABS',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '143kg',
            'horsepower' => '75hp/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2140mm x 750mm x 1,150mm',
            'prcie' => '2500',
            'img' => 'portfolio-9'
    ]);
        Product::create([
            'id' => 10,
            'cgy' => 'S4',
            'pattern' => '2019 GSX-S1000S',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '143kg',
            'horsepower' => '75hp/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2140mm x 750mm x 1,150mm',
            'prcie' => '2000',
            'img' => 'portfolio-10'
    ]);
        Product::create([
            'id' => 11,
            'cgy' => 'S4',
            'pattern' => '2019 YZF-R3 ABS',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '143kg',
            'horsepower' => '75hp/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2140mm x 750mm x 1,150mm',
            'prcie' => '2000',
            'img' => 'portfolio-11'
    ]);
        Product::create([
            'id' => 12,
            'cgy' => 'S4',
            'pattern' => '2019 T-MAX',
            'seatheight' => '830 mm',
            'tankcapacity' => '13 L',
            'weight' => '143kg',
            'horsepower' => '75hp/ 9,000 rpm',
            'torque' =>'37 Nm / 7,000 rpm',
            'cariwh' => '2140mm x 750mm x 1,150mm',
            'prcie' => '2000',
            'img' => 'portfolio-12'
    ]);
    }
}
