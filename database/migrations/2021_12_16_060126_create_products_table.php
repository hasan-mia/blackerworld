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
            $table->id();
            $table->integer('cat_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->integer('brand_id')->unsigned();
            $table->integer('quantity')->unsigned();
            $table->integer('price')->nullable();
            $table->integer('offer')->nullable();
            $table->text('title')->nullable();
            $table->string('slug');
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(0);
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
