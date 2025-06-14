<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
          $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title',100)->nullable();
            $table->string('slug',100);
            $table->text('content')->nullable();
            $table->string('first_button_title')->nullable();
            $table->string('second_button_title')->nullable();
            $table->string('first_button_url')->nullable();
            $table->string('second_button_url')->nullable();
            $table->boolean('is_primary')->default(false);
            $table->boolean('is_published')->default(false);
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
        Schema::dropIfExists('sliders');
    }
}
