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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('name');
            $table->string('email');
            $table->string('telegram_username');
            $table->string('photo_url');
            $table->string('job_title');
            $table->string('workplace');
            $table->text('about');
            $table->text('description');
            $table->string('competencies');
            $table->string('price');
            $table->string('experience');
            $table->integer('menteeCount');
            $table->string('link_to_calendar');
            $table->boolean('privacy_policy_agreement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
