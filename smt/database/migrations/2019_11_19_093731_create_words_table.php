<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     * คำศัพท์
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->increments('id'); // ไอดี
            $table->string('ws'); // คำค้น
            $table->string('lang_ws'); // ภาษาต้นทาง
            $table->string('meaning'); // คำแปล
            $table->string('lang_m'); // ภาษาของคำแปล
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
        Schema::dropIfExists('words');
    }
}
