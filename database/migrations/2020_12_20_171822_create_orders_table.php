<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            //定單
            $table->string('name',50); //承租人
            $table->string('phone',50); //電話
            $table->string('email',50); //電子郵件
            $table->string('pattern',50); //預定車型
            $table->string('rent',50); //總計租金
            $table->string('deposit',50); //訂金
            $table->string('place',50); //租車地點
            $table->integer('fawdays')->unsigned(); //共計幾天
            $table->datetime('usedate'); //使用日期
            $table->datetime('returndate'); //還車日期
            $table->string('remark',500)->nullable(); //備註
            $table->string('orderstatus',50); //定單狀態
            $table->string('adminremark',500)->nullable(); //管理員備註用
            $table->string('men_name',50); //哪位會員名稱
            $table->string('mem_email',50); //哪位會員電子郵件
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
        Schema::dropIfExists('orders');
    }
}
