<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('meal_name')->nullable(); //餐點名稱
            $table->string('class')->nullable(); // 餐點類別
            $table->integer('price')->nullable(); // 餐點價格
            $table->string('img_path')->nullable(); // 餐點圖片

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meals');
    }
};
