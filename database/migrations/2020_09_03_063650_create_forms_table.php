<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
          
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('course')->nullable();
            $table->string('location')->nullable();
            $table->string('graduate')->nullable();         
            $table->enum('view',array('apply-course','hire-graduates'));           
            $table->boolean('is_published')->default(0);
            $table->boolean('is_primary')->default(0);
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
        Schema::dropIfExists('forms');
    }
}
