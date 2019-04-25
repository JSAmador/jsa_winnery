<?php

use Illuminate\Database\Seeder;

class OrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            'name' => 'pending',
            'id' => 1,
        ]);

        DB::table('order_statuses')->insert([
            'name' => 'process',
            'id' => 2,
        ]);

        DB::table('order_statuses')->insert([
            'name' => 'confirmed',
            'id' => 3,
        ]);

        DB::table('order_statuses')->insert([
            'name' => 'dispatched',
            'id' => 4,
        ]);
    }
}
