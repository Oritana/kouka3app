<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);   /* 追加シーダーの呼び出し */
        $this->call(PeopleTableSeeder::class);  /* Users → Peopleの順で呼び出し */
    }
}
