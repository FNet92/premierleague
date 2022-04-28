<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->smallInteger('strength');
            $table->timestamps();
        });


        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team_1_id');
            $table->integer('team_2_id');
            $table->smallInteger('week')->nullable();
            $table->smallInteger('team_1_goals_scored')->default(0);
            $table->smallInteger('team_2_goals_scored')->default(0);
            $table->timestamps();

//            $table->foreign('team_1_id')->references('id')->on('teams')->onDelete('cascade');
//            $table->foreign('team_2_id')->references('id')->on('teams')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::dropIfExists('teams');
        Schema::dropIfExists('games');
    }
};
