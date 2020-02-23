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
        DB::table('anggota')->insert(
        	['id' => 0, 'role' => 1, 'nama' => 'super-admin','email' => 'kitapermatagbkp@gmail.com', 'password' => '$2y$10$ItWUDs5mbIn0bPjwsFvDTeEeqY26ZVcBC2eotNNZ0NUut5QmelPgu']
        	);
        // password : permatatambun
    }
}
