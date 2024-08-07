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
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status');
            $table->string('start_at');
            $table->string('end_at');
            $table->string('date');
            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')
            ->references('id')->on('professors')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->integer('hall_id')->unsigned();
            $table->foreign('hall_id')
            ->references('id')->on('halls')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserves');
    }
};
