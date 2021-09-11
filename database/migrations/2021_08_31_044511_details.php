<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Details extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userjobdetails', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->enum('division', ['joemen', 'hipzo', 'import', 'alope', 'management', 'tim kreatif']);
            $table->string('position');
            $table->unsignedBigInteger('koordinator');
            $table->foreign('koordinator')->references('id')->on('users')->onDelete('cascade');
            $table->text('division_address');
            $table->text('division_logo');
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
        Schema::dropIfExists('userjobdetails');
    }
}
