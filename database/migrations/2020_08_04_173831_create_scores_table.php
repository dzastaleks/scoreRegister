<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scores', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('season_id')->unsigned()->index();
            $table->bigInteger('host_id')->unsigned()->index();
            $table->bigInteger('guest_id')->unsigned()->index();
            $table->integer('host_score');
            $table->integer('guest_score');
            $table->date('played_at');

            $table->foreign('season_id')->references('id')->on('seasons')->onDelete('cascade');
            $table->foreign('guest_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreign('host_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['host_id','guest_id','season_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scores');
    }
}
