<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_menus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('slug');
            $table->integer('menu_id')->unsigned()->index();
            $table->string('name')->nullable();
            $table->text('url')->nullable();
            $table->integer('order')->nullable();
            $table->string('icon')->nullable();
            $table->unique(['menu_id', 'slug']);
            $table->foreign('menu_id')
                ->references('id')
                ->on('menus')
                ->onDelete('cascade');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('sub_menus');
        Schema::enableForeignKeyConstraints();
    }
}
