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
        Schema::create('cards', function (Blueprint $table) {
            $table->id();

            $table->foreignId('board_id')->constrained()->cascadeOnDelete();
            $table->foreignId('column_id')->constrained('columns')->cascadeOnDelete();

            $table->unsignedBigInteger('cardable_id');
            $table->string('cardable_type');

            $table->foreignId('card_type_id')->nullable()->constrained()->nullOnDelete();

            $table->integer('sort_order')->default(100);

            $table->jsonb('meta')->nullable();

            $table->boolean('is_active')->default(true);

            $table->timestampsTz();

            $table->index(['board_id', 'column_id', 'sort_order']);
            $table->index(['cardable_type', 'cardable_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
