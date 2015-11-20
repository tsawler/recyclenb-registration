<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandTypesTable extends Migration
{
    public function up() {
        Schema::create('brand_types', function($table) {
            $table->increments('id');
            $table->string('brand_name');
            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('brand_types');
    }
}
