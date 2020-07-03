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
        // $this->call(UserSeeder::class);

        $this->call(MemosTableSeeder::class);

        $this->call(DepartmentTableSeeder::class);
        $this->call(SchoolTableSeeder::class);
        // $this->call(MessagesTableSeeder::class);
    }
}
