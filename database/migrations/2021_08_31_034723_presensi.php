<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Presensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_workers');
            $table->foreign('id_workers')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('check_in');
            $table->timestamp('break')->nullable();
            $table->timestamp('back')->nullable();
            $table->timestamp('check_out')->nullable();
            $table->text('check_in_photo');
            $table->text('break_photo')->nullable();
            $table->text('back_photo')->nullable();
            $table->text('check_out_photo')->nullable();
            $table->text('location_check_in')->nullable();
            $table->text('link_check_in')->nullable();
            $table->text('location_break')->nullable();
            $table->text('location_back')->nullable();
            $table->text('location_check_out')->nullable();
            $table->text('description');
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
        Schema::dropIfExists('presensis');
    }
}
