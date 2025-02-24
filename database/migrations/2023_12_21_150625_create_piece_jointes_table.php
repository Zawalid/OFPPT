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
        Schema::disableForeignKeyConstraints();
        Schema::create('piece_jointes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('URL');
            $table->integer('taille');
            $table->string('emplacement');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('evenements_id')->constrained()->onDelete('cascade');
            $table->foreignId('articles_id')->constrained()->onDelete('cascade');
            $table->foreignId('activites_id')->constrained()->onDelete('cascade');
            $table->foreignId('filiers_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piece_jointes');
    }
};
