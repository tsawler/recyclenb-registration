<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTireRegistrationsOfficersTable extends Migration
{
    public function up() {
        Schema::create('tire_registration_officers', function($table) {
            $table->increments('id');
            $table->integer('tire_registration_id')->unsigned();
            $table->string('officer_name');
            $table->string('officer_title');
            $table->string('officer_address');
            $table->string('officer_province');
            $table->string('officer_zip');

            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('tire_registration_officers');
    }
}
