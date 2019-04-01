<?php

use Illuminate\Database\Seeder;

class test extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0 ; $i<=10; $i++){
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'test' . $i . '@test.com',
            'password' => bcrypt('123456789')
        ]);
    }
    }

}
