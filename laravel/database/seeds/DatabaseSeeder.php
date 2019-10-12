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
        $this->call(AnggotasTableSeeder::class);
        $this->call(mRoleTableSeeder::class);
        $this->call(mParameterTableSeeder::class);
    }
}
