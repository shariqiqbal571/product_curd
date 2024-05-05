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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
          
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('summary')->nullable();
            $table->date('date')->nullable();
            $table->string('date_modified')->nullable();
            $table->string('categories')->nullable();
            $table->string('tags')->nullable();
            $table->text('image')->nullable();
            $table->string('reviews')->nullable();
            $table->string('stock')->nullable();
            $table->string('weight')->nullable();
            $table->string('dimensions')->nullable();
            $table->decimal('price')->nullable();
            $table->string('buy')->nullable();
            $table->Integer('status')->default('0');
            $table->Integer('seen')->default('0');


            
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
