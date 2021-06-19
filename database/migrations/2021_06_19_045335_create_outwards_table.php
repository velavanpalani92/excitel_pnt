<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outwards', function (Blueprint $table) {
            $table->id();
            $table->string('partner_name')->unique();
            $table->string('partner_code')->unique();
            $table->string('serial_no',)->nullable();
            $table->string('mac_no',)->nullable();
            $table->string('type',)->nullable();
            $table->string('vendor_id',)->nullable();
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
        Schema::dropIfExists('outwards');
    }
}
