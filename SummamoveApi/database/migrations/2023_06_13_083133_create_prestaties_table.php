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
        Schema::create('prestaties', function (Blueprint $table) {
            $table->id();
            $table->date('datum');
            $table->time('begintijd');
            $table->time('eindtijd');
            $table->integer('aantal');
            $table->foreignId('user_id');
            $table->foreignId('oefening_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestaties');
    }
};
