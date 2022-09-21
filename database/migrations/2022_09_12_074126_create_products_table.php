<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique(); 
            $table->string('description')->nullable();
            $table->integer('quantity')->nullable(); 
            $table->integer('purchase_price')->nullable();
            $table->integer('sales_price')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->integer('quantity_sold')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}