<?php

use App\Models\Item;
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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->integer('value');
            $table->integer('value_up');
            $table->string('info');
            $table->integer('price');
            $table->integer('id_game');
            $table->timestamps();
        });

        Item::create([
            'title' => 'Diamod',
            'value' => 50,
            'value_up' => 5,
            'info' => 'Top Up',
            'price' => 50000,
            'id_game' => 1
        ]);
        Item::create([
            'title' => 'Diamod',
            'value' => 5,
            'value_up' => 0,
            'info' => 'Top Up',
            'price' => 20000,
            'id_game' => 1
        ]);
        Item::create([
            'title' => 'Diamod',
            'value' => 10,
            'value_up' => 2,
            'info' => 'Top Up',
            'price' => 30000,
            'id_game' => 1
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
