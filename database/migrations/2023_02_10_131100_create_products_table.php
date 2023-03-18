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
            $table->integer('brand_id')->unsigned();
            $table->integer('pr_category_id')->unsigned();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->string('images', 255);
            $table->integer('view')->default(0);
            $table->integer('bought')->default(0);
            $table->longText('description');
            $table->longText('contents');
            $table->bigInteger('price');
            $table->bigInteger('price_pay')->nullable();
            $table->bigInteger('discount');
            $table->string('sku', 100);
            $table->tinyInteger('sex',)->default(0);
            $table->tinyInteger('deleted')->default(0);
            $table->tinyInteger('appear')->default(1);
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
