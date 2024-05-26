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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('id_ihs', 11)->unique();
            $table->string('nik', 16)->unique();
            $table->string('name');
            $table->string('specialist');
            $table->string('sip');
            $table->enum('gender', ['male', 'female']);
            $table->date('birth_date');
            $table->string('phone', 20);
            $table->string('email');
            $table->string('photo')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
