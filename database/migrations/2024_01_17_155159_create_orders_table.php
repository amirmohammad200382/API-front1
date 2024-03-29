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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId( 'user_id');
            $table->string('title');
            $table->integer('price')->unsigned();
            $table->timestamp( 'created_at')->useCurrent();
            $table->timestamp( 'updated_at')->useCurrent();
            $table->enum('status' , (['enable' , 'disable']));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
