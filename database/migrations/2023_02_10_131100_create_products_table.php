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
            $table->integer('id')->autoIncrement (); // ID Sản phẩm
            $table->integer('brand_id'); // ID thương hiệu
            $table->integer('product_category_id'); // ID danh mục
            $table->string('name', 255); // Tên sản phẩm
            $table->string('slug', 255)->unique(); // Slug
            $table->string('images', 500); // Hình ảnh sản phẩm
            $table->integer('view')->default(0); // Lượt xem
            $table->integer('bought')->default(0); // Đã mua
            $table->string('description', 1000)->nullable(); // Mô tả
            $table->text('content'); // Nội dung
            $table->string('keywords', 500)->nullable(); // Từ khoá SEO
            $table->integer('price'); // Giá sản phẩm
            $table->integer('discount'); // Giảm giá
            $table->string('sku', 100); //
            $table->tinyInteger('appear')->default(1); // Ẩn hiện
            $table->timestamps();
             $table->foreign('product_category_id')->references('id')->on('product_categories');
             $table->foreign('brand_id')->references('id')->on('brands');
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
