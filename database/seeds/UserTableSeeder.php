<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'Somelier',
            'role_id' => 1,
            'email' => 'somelier@jsawinnery.test',
            'password' => bcrypt('somelier_admin'),
        ]);

        DB::table('users')->insert([
            'name' => 'Waiter1',
            'role_id' => 2,
            'email' => 'waiter1@jsawinnery.test',
            'password' => bcrypt('waiter1'),
        ]);

        DB::table('users')->insert([
            'name' => 'waiter2',
            'role_id' => 2,
            'email' => 'waiter2@jsawinnery.test',
            'password' => bcrypt('waiter2'),
        ]);
    }
}
