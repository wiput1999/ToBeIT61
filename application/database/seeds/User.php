<?php

use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            'name'     => 'Administrator',
            'email'    => 'tobe@it.kmitl.ac.th',
            'password' => Hash::make('ToBe#2017'),
        ));
    }
}
