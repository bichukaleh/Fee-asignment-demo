<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancialTransDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financial_tran_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('financial_tran_id');
            $table->decimal('amount',5,2);
            $table->string('head_name',255);
            $table->timestamps();

            $table->foreign('financial_tran_id')->references('id')->on('financial_trans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('financial_tran_details');
    }
}
