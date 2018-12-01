<?php

use Illuminate\Database\Seeder;

class DeptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'IT',
            'description' => 'sample description 1',
        ],
        [
            'name' => 'HR',
            'description' => 'sample description 2',
        ]
    );
    }
}
