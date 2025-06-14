<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('brand_id')->unsigned()->nullable();
            $table->string('slug', 100)->unique();
            $table->string('title', 100);
            $table->text('sub_description')->nullable();
            $table->text('content')->nullable();
            $table->tinyInteger('is_published')->default(false);
            $table->tinyInteger('is_featured')->default(false);         
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('set null');
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
        Schema::dropIfExists('services');
    }
}
