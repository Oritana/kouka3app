<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'Tom Cruise',
            'mail' => 'tom@mail.com',
            'age' => 22,
            'user_id' => 1,
        ];
        DB::table('people')->insert($param);
     
        $param = [
            'name' => 'Anne Hathaway',
            'mail' => 'anne@mail.com',
            'age' => 24,
            'user_id' => 1,
        ];
        DB::table('people')->insert($param);
     
        $param = [
            'name' => ' Camila Cabello',
            'mail' => 'camila@mail.com',
            'age' => 23,
            'user_id' => 1,
        ];
        DB::table('people')->insert($param);
    }
}
