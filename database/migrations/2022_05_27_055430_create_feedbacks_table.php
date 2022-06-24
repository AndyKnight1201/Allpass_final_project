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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name')->nullable(); // 名稱
            $table->integer('salutation')->nullable(); // 稱呼 (value=1, 2, 3 分別是 先生, 小姐, 其他) 
            $table->string('date')->nullable(); // 日期
            $table->integer('period')->nullable(); // 時段 (value=1, 2, 3 分別是 早上, 中午, 下午)
            $table->string('suggestion')->nullable(); // 留言
            $table->integer('phone')->nullable(); // 電話
            $table->string('email')->nullable(); // 信箱

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feedbacks');
    }
};
