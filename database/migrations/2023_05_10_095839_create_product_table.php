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
        Schema::create('product', function (Blueprint $table) {
            $table->id('productId');
            $table->string('productName');
            $table->float('price');
            $table->boolean('productStatus')->default(1);
            $table->unsignedInteger("catalog_Id")
                ->foreign('catalog_Id')
                ->references('catalogId')
                ->on('catalog');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
