<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhychoseusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whychoseuses', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable()->default('text');
            $table->string('icon', 250)->nullable()->default('text');
            $table->string('title', 250)->nullable()->default('text');
            $table->string('number', 250)->nullable()->default('text');
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
        Schema::dropIfExists('whychoseuses');
    }
}
