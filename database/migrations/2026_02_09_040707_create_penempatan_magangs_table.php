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
        Schema::create('penempatan_magangs', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('location')->nullable();
            $table->string('academic_year')->nullable();
            $table->json('student_list')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penempatan_magangs');
    }
};
