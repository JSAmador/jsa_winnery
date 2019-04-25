<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('roles')->insert([
            'name' => 'administrator',
            'id' => 1,
        ]);

        DB::table('roles')->insert([
            'name' => 'employee',
            'id' => 2,
        ]);
    }
}
