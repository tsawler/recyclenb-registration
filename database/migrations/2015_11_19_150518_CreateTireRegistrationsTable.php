<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTireRegistrationsTable extends Migration
{
    public function up() {
        Schema::create('tire_registrations', function($table) {
            $table->increments('id');
            $table->string('name_of_applicant');
            $table->integer('sell_tires');
            $table->string('head_physical_location');
            $table->string('head_mailing_address');
            $table->string('head_province_state');
            $table->string('head_zip');

            $table->string('nb_physical_location');
            $table->string('nb_mailing_address');
            $table->string('nb_province_state');
            $table->string('nb_zip');

            $table->string('contact_name');
            $table->string('contact_mailing_address');
            $table->string('contact_province');
            $table->string('contact_zip');
            $table->string('contact_email');
            $table->string('contact_phone');
            $table->integer('remittance');
            $table->integer('type_of_company');

            $table->string('agent_name');
            $table->string('agent_company_name');
            $table->string('agent_mailing_address');
            $table->string('agent_province');
            $table->string('agent_zip');
            $table->string('agent_email');
            $table->string('agent_phone');

            $table->string('signature');
            $table->string('ip_address');

            $table->timestamps();
        });
    }

    public function down() {
        Schema::drop('tire_registrations');
    }
}
