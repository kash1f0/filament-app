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
            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('visibility')->nullable();
            $table->float('price')->nullable();
            $table->integer('sku')->nullable();
            $table->integer('cost_per_item')->nullable();
            $table->integer('compare_at_price')->nullable();
            $table->string('barcode')->nullable();
            $table->integer('quantity')->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories');
            $table->foreignId('brand_id')->nullable()->constrained('brands');
            $table->integer('security_stock')->nullable();
            $table->boolean('can_return')->nullable();
            $table->boolean('can_ship')->nullable();
            $table->date('deleted_at')->nullable();
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
