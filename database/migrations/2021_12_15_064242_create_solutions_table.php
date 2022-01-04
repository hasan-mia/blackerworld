<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solutions', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250)->nullable()->default('title');
            $table->string('slug');
            $table->text('short_description')->nullable()->default('text');
            $table->longText('description')->nullable()->default('description');
            $table->string('image', 250)->nullable()->default('image');
            $table->tinyInteger('status')->default(0);
            $table->integer('admin_id');
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
        Schema::dropIfExists('solutions');
    }
}
