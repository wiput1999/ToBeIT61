<?php

use Illuminate\Database\Seeder;
use App\Models\Config;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('config')->insert(array(
            'key' => 'REGISTER_ROUND',
            'value' => 1
        ));
        DB::table('config')->insert(array(
            'key' => 'REGISTER_ROUND_LIMIT',
            'value' => 120
        ));
    }
}
