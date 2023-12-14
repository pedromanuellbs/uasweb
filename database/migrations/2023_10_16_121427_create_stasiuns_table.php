<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\train;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stasiuns', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(train::class)->constrained();
            $table->string('stasiun_awal');
            $table->string('stasiun_tiba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stasiuns');
    }
};
