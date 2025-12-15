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
        Schema::create('checkes', function (Blueprint $table) {
            $table->id();
            $table->string('type_checkup');
            $table->date('date');
            $table->foreignId('simple_id')->constrained('simples');
              $table->foreignId('sik_id')->constrained('sickests');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('checkes');
    }
};
