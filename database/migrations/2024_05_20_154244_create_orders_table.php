<?php

use App\Models\Order;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('id_acc');
            $table->string('id_server');
            $table->integer('id_user');
            $table->integer('id_item');
            $table->timestamps();
        });

        Order::create([
            'id_acc' => '12343434',
            'id_server' => '445',
            'id_user' => 1,
            'id_item' => 1            
        ]);

        Order::create([
            'id_acc' => '12343434',
            'id_server' => '445',
            'id_user' => 1,
            'id_item' => 2            
        ]);
        
        Order::create([
            'id_acc' => '12343434',
            'id_server' => '445',
            'id_user' => 1,
            'id_item' => 3            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
