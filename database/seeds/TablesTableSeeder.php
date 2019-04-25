<?php

use Illuminate\Database\Seeder;

class TablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1; $i <10; $i++) {
            $is_available = (bool)rand(0,1);
            DB::table('tables')->insert([
                'table_num' => 'table_'.$i,
                'is_available' => $is_available,
            ]);
        }

    }
}
