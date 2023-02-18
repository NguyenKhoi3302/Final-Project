<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brand')->unsigned();
            $table->bigInteger('product_category')->unsigned();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->string('images', 255);
            $table->integer('view')->default(0);
            $table->integer('bought')->default(0);
            $table->string('description', 500);
            $table->text('content');
            $table->integer('price');
            $table->float('discount');
            $table->string('sku', 100);
            $table->string('sex', 50);
            $table->tinyInteger('appear')->default(0);
            $table->timestamps();
            // $table->foreign('product_category')->references('id')->on('product_categories');
            // $table->foreign('brand')->references('id')->on('brands');
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
};
