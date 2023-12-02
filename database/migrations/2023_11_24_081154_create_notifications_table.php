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
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type')->nullable();
            $table->text('content');
            $table->integer('book_id');
            $table->integer('mark_as_read')->default(0);
            $table->string('author')->nullable();
            $table->integer('professor_id')->unsigned();
            $table->foreign('professor_id')
            ->references('id')->on('professors')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('hall_id')->unsigned();
            $table->foreign('hall_id')
            ->references('id')->on('halls')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->integer('supervisor_id')->unsigned();
            $table->foreign('supervisor_id')
            ->references('id')->on('supervisors')
            ->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
