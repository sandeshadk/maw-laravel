<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = [
            [
                'slug'       => 'home',
                'name'       => 'Home',
                'url'        => '/',
                'order'      => 0,
                'is_primary' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        DB::table('menus')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('menus')->insert($menus);

    }
}
