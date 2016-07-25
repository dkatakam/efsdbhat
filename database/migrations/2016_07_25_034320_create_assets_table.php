<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('symbol');
            $table->string('assetname');
            $table->integer('assets');
            $table->float('acquired_price');
            $table->date('purchase_date');
            $table->integer('customer_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('assets', function (Blueprint $table) {
           $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assets');
    }
}
