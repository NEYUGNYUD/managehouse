<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('sellers')) {
            Schema::create('sellers', function (Blueprint $table) {
                $table->increments('id');
                $table->string('username', 50);
                $table->string('password');
                $table->string('email', 50);
                $table->string('phone', 11);
                $table->string('address');
                $table->string('company', 150);
                $table->char('for_lease', 1);
                $table->integer('money');
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
        Schema::dropIfExists('sellers');
    }
}
