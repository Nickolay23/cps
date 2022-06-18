<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartmanufacturerSparepartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partmanufacturer_sparepart', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partmanufacturer_id')->constrained()->onDelete('cascade');
            $table->foreignId('sparepart_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('partmanufacturer_sparepart');
    }
}
