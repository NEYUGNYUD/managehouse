<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeyFlatsBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flats_buyers', function(Blueprint $table) {
            $table->foreign('flat_id')->references('id')->on('flats');
            $table->foreign('buyer_id')->references('id')->on('buyers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flats_buyers', function(Blueprint $table) {
            $table->dropForeign('flats_buyers_flat_id_foreign');
            $table->dropForeign('flats_buyers_buyer_id_foreign');
        });
    }
}
