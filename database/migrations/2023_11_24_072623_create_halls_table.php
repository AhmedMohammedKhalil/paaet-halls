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
        Schema::create('halls', function (Blueprint $table) {
            $table->increments('id');
            $table->text('details');
            $table->string('gender');
            $table->string('number');
            $table->string('capacity');
            $table->text('cover');
            $table->text('vedio')->nullable();

            $table->integer('supervisor_id')->unsigned();
            $table->foreign('supervisor_id')
            ->references('id')->on('supervisors')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('building_id')->unsigned();
            $table->foreign('building_id')
            ->references('id')->on('buildings')
            ->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halls');
    }
};
