<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildSubMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_sub_menus', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string('slug');
            $table->bigInteger('sub_menu_id')->unsigned()->index();
            $table->string('name')->nullable();
            $table->text('url')->nullable();
            $table->integer('order')->nullable();
            $table->string('icon')->nullable();
            $table->unique(['sub_menu_id', 'slug']);
            $table->foreign('sub_menu_id')
                ->references('id')
                ->on('sub_menus')
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
        Schema::dropIfExists('child_sub_menus');
        Schema::enableForeignKeyConstraints();
    }
}
