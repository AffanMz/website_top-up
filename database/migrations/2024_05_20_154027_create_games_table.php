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
            'picture' => '1716293209.jpg'
        ]);

        Game::create([
            'title' => 'Free Fire',
            'picture' => '1716293343.jpg'
        ]);

        Game::create([
            'title' => 'AOV',
            'picture' => '1716293560.jpg'
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
