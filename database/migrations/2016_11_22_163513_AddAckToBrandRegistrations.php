<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAckToBrandRegistrations extends Migration
{
    public function up()
    {
        Schema::table('brand_registrations', function($table) {
            $table->integer('ack')->default(0)->nullable();
        });
    }

    public function down()
    {

    }
}
