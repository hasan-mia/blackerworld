<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name', 250)->nullable()->default('text');
            $table->string('avatar', 250)->nullable()->default('text');
            $table->text('department', 250)->nullable()->default('text');
            $table->string('facebook', 250)->nullable()->default('text');
            $table->string('facebook_link', 250)->nullable()->default('text');
            $table->string('linkedin', 250)->nullable()->default('text');
            $table->string('linkedin_link', 250)->nullable()->default('text');
            $table->string('twitter', 250)->nullable()->default('text');
            $table->string('twitter_link', 250)->nullable()->default('text');
            $table->string('instagram', 250)->nullable()->default('text');
            $table->string('instagram_link', 250)->nullable()->default('text');
            $table->string('github', 250)->nullable()->default('text');
            $table->string('github_link', 250)->nullable()->default('text');
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
        Schema::dropIfExists('teams');
    }
}
