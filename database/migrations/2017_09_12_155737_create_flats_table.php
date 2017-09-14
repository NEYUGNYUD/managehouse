<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('flats')) {
            Schema::create('flats', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('price');
                $table->string('floor_num', 3);
                $table->string('address_num', 6);
                $table->string('lane', 10);//ngõ
                $table->string('alley', 15);//ngách
                $table->string('street', 50);
//                $table->string('ward', 50);//phường
//                $table->string('district', 50);
//                $table->string('province');
                $table->string('region', 150);
                $table->integer('area');//diện tích
                $table->integer('room_num');
                $table->string('images', 150);//lưu list id ảnh
                $table->text('note');
                $table->integer('seller_id')->unsigned();
                $table->integer('admin_id')->unsigned();
                $table->char('status', 1);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flats');
    }
}
