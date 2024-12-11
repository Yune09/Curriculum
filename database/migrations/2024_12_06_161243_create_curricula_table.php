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
        Schema::create('curricula', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name', 45)->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->text('professional_profile')->nullable(); 
            $table->text('skills')->nullable(); 
            $table->longText('work_experience')->nullable(); 
            $table->longText('education')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curricula');
    }
};
