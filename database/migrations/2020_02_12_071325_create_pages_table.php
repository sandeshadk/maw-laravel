<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('url')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('content')->nullable();
            $table->enum('view',array('industrial-advisory','technical-advisory','leadership','others','about-us'));
            $table->boolean('is_featured')->default(0);
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
        Schema::dropIfExists('pages');
    }
}
