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
        Schema::create('publik', function (Blueprint $table) {
            // $table->id();
            $table->char('nik',16)->primary();
            $table->string('nama', 100);
            $table->string('username', 70)->unique();
            $table->string('password' ,35);
            $table->string('tlp', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publik');
    }
};
