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
        Schema::create('teammates', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('school', 255)->nullable();
            $table->integer('age')->unsigned()->nullable();
            $table->boolean('is_coach')->default(false);
            $table->boolean('is_substitute')->default(false);
            $table->integer('teammate_id')->unsigned();
            $table->foreignId('team_id')->constrained('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teammates');
    }
};
