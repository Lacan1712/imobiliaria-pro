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
        Schema::create('columns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('board_id')->constrained()->cascadeOnDelete();
            $table->string('title');
            $table->integer('sort_order')->default(100);
            $table->string('color', 20)->nullable();
            $table->timestampsTz();

            $table->index(['board_id', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('columns');
    }
};
