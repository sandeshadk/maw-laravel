<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->string('name');
          $table->string('position')->nullable();
          $table->string('slug')->unique();
          $table->text('content')->nullable();
          $table->string('email')->nullable();
          $table->enum('view',array('leadership','team','industrial-advisory','technical-advisory'));
                    $table->boolean('is_published')->nullable();
          $table->boolean('is_primary')->default(false);
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
