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
        Schema::create('group_specialization_specializations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('specialization_id')->constrained('specializations');
            $table->foreignId('group_specialization_id')->constrained('group_specialization');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_specialization_specializations');
    }
};
