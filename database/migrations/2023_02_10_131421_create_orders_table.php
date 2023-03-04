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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('name', 50);
            $table->string('phone', 10);
            $table->string('address', 100);
            $table->string('code', 50);
            $table->string('status', 30);
            $table->string('note', 255)->nullable();
            $table->string('admin_note', 255)->nullable();
            $table->integer('total');
            $table->timestamps();
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
