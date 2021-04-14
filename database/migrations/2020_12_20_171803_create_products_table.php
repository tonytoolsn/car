<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('cgy',50);//分類
            $table->string('pattern',50);//車型名稱
            $table->string('seatheight',50);//座高
            $table->string('tankcapacity',50);//油箱容量
            $table->string('weight',50);//重量
            $table->string('horsepower',50);//最大馬力
            $table->string('torque',50);//最大扭力
            $table->string('cariwh',50);//車(長寬高)
            $table->string('prcie',50);//價格/日
            $table->string('img',50);//車圖名稱
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
