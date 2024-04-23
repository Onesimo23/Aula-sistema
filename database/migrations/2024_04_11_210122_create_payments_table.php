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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_registrations_id')->constrained();
            // $table->foreignId('course_id')->constrained();
            $table->decimal('value')->default(0);
            // $table->datetime('transation_date'); //o timestamp já vem com campos que armazenam 
            $table->enum('status',['paid','pending'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
