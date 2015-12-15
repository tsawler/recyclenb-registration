<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OilNumbers extends Migration
{
    public function up() {
        Schema::create('oil_numbers', function($table) {
            $table->increments('id');
            $table->integer('brand_registration_id')->unsigned();
            $table->string('brand_name');
            $table->timestamps();

            $table->foreign('brand_registration_id')
                ->references('id')
                ->on('brand_registrations')
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    public function down() {
        Schema::drop('oil_numbers');
    }
}
