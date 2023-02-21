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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('image', 100);
            $table->string('title', 100);
            $table->text('summary')->nullable();
            $table->text('content');
            $table->integer('view')->default(0);
            $table->tinyInteger('hot')->default(0);
            $table->tinyInteger('appear')->default(1);
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users');
            // $table->foreign('category_id')->references('id')->on('news_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
