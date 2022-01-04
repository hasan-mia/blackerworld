<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table-> increments('id');
            $table->text('meta')->nullable()->default('text');
            $table->longText('title')->nullable()->default('text');
            $table->text('paragraph')->nullable()->default('text');
            $table-> string('link', 250)->nullable()->default('text');
            $table->string('youtubelink', 250)->nullable()->default('text');
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
        Schema::dropIfExists('banners');
    }
}
