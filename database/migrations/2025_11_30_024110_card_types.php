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
        Schema::create('card_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();          // ex: Conversation, Lead, Ticket
            $table->string('model_class');             // App\Models\Conversation
            $table->text('description')->nullable();
            $table->string('icon', 50)->nullable();    // para UI
            $table->string('color', 20)->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestampsTz();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('card_types');
    }
};
