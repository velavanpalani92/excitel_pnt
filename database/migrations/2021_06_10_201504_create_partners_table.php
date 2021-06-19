<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('partnercode')->unique();
            $table->string('windowname')->unique();
            $table->string('auth_person')->nullable();
            $table->string('contact_num')->nullable();
            $table->string('address')->nullable();
            $table->string('latlong')->nullable();
            $table->string('area')->nullable();
            $table->string('zone')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('infra')->nullable();
            $table->string('onboard_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
