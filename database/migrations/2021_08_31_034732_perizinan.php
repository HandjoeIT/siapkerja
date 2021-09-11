<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Perizinan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('worker_permissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_workers');
            $table->foreign('id_workers')->references('id')->on('users')->onDelete('cascade');
            $table->enum('permission_type', ['sakit', 'keperluan', 'cuti menikah', 'cuti melahirkan']);
            $table->text('keperluan')->nullable();
            $table->timestamp('from')->nullable();
            $table->timestamp('up_to')->nullable();
            $table->unsignedBigInteger('first_approver')->nullable();
            $table->foreign('first_approver')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('second_approver')->nullable();
            $table->foreign('second_approver')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('last_approver')->nullable();
            $table->foreign('last_approver')->references('id')->on('users')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->enum('status', ['approved', 'not approved', 'on process']);
            $table->text('documentation')->nullable();
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
        Schema::dropIfExists('worker_permissions');
    }
}
