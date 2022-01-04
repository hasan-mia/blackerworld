<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('cat_id')->unsigned()->nullable();
            $table->integer('user_id')->unsigned();
            $table->text('title')->nullable();
            $table->string('slug');
            $table->longText('description')->nullable();
            $table->string('tags', 250)->nullable();
            $table->string('image', 255)->nullable();
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
        Schema::dropIfExists('blogs');
    }
}
