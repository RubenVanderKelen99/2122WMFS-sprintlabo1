<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('competition_id')->constrained();
            $table->timestamp('starts_at');
            $table->foreignId('home_club_id')->constrained('clubs');
            $table->foreignId('away_club_id')->constrained('clubs');
            $table->smallInteger('home_score')->nullable();
            $table->smallInteger('away_score')->nullable();
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
        Schema::dropIfExists('games');
    }
}
