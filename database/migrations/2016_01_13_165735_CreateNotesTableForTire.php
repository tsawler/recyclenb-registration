<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTableForTire extends Migration
{
    public function up() {
        Schema::create('tire_registration_notes', function($table) {
            $table->increments('id');
            $table->integer('tire_registration_id')->unsigned();
            $table->string('user_name');
            $table->text('notes');
            $table->timestamps();

            $table->foreign('tire_registration_id')
                ->references('id')
                ->on('tire_registrations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down() {
        Schema::drop('tire_registration_notes');
    }
}
