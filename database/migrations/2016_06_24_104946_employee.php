<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Table for employee
        Schema::create('employee', function(Blueprint $emp){
            $emp->increments('id');
            $emp->string('first_name');
            $emp->string('middle_name');
            $emp->string('last_name');
            $emp->date('date_joined');
            $emp->string('email')->nullable();
            $emp->string('contact_number',15);
            $emp->string('address')->nullable();
            $emp->date('dob')->nullable();
            $emp->string('sex');
            $emp->string('position');
            $emp->string('salary');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop the table employee
        Schema::drop('employee');
    }
}
