<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTableForBrand extends Migration
{
    public function up() {
        Schema::create('brand_registration_notes', function($table) {
            $table->increments('id');
            $table->integer('brand_registration_id')->unsigned();
            $table->string('user_name');
            $table->text('notes');
            $table->timestamps();

            $table->foreign('brand_registration_id')
                ->references('id')
                ->on('brand_registrations')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down() {
        Schema::drop('brand_registration_notes');
    }
}
