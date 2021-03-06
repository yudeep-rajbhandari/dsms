<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cashier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create table Cashier
        Schema::create('cashier', function(Blueprint $table){
            $table->increments('cashier_id');
            $table->integer('emp_id')->unsigned();
            $table->foreign('emp_id')
                ->references('id')->on('employee')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('cashier');
    }
}
