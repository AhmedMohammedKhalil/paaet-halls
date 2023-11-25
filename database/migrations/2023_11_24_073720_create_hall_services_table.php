<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hall_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hall_id')->unsigned();
            $table->foreign('hall_id')
            ->references('id')->on('halls')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')
            ->references('id')->on('services')
            ->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hall_services');
    }
};
