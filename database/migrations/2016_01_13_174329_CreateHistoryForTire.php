<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoryForTire extends Migration
{
    public function up() {
        Schema::create('tire_registration_histories', function($table) {
            $table->increments('id');
            $table->integer('tire_registration_id')->unsigned();
            $table->string('user_name');
            $table->text('history');
            $table->timestamps();

            $table->foreign('tire_registration_id')
                ->references('id')
                ->on('tire_registrations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down() {
        Schema::drop('tire_registration_histories');
    }
}
