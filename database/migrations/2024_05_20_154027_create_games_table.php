<?php

use App\Models\Game;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('picture');
            $table->timestamps();
        });

        Game::create([
            'title' => 'Mobile Legends',
            'picture' => 'gambar(picture)'
        ]);

        Game::create([
            'title' => 'Free Fire',
            'picture' => 'gambar(picture)'
        ]);

        Game::create([
            'title' => 'Sudoku',
            'picture' => 'gambar(picture)'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
