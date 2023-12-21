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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('Titre');
            $table->date('Date');
            $table->string('Autheur');
            $table->string('Categorie');
            $table->text('Details');
            $table->string('Thumbnail');
            $table->unsignedBigInteger('Annee_Formation_id');
            $table->foreign('Annee_Formation_id')->references('id')->on('Annee_Formation')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
