<?php

use Illuminate\Database\Seeder;

class AnggotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anggotas')->insert(
        	['id' => 0, 'role' => 1, 'nama' => 'super-admin','email' => 'admin@permatakita.com', 'password' => '$2y$10$ItWUDs5mbIn0bPjwsFvDTeEeqY26ZVcBC2eotNNZ0NUut5QmelPgu','isAdmin' => 1]
        	);
        // password : permatatambun
    }
}
