<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->nullable(false);
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->unsignedBigInteger('brand_id'); 
            $table->unsignedBigInteger('category_id'); 
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('brand_id')->references('id')->on('brand');
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}