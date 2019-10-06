<?php

use Illuminate\Database\Seeder;

class mParameterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_parameter')->insert(['type' => 'sektor','nama' => 'Bumi Lestari','tahun' => date('Y')]);
        DB::table('m_parameter')->insert(['type' => 'sektor','nama' => 'Graha Prima','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'sektor','nama' => 'Cibitung 1','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'sektor','nama' => 'Cibitung 2','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'sektor','nama' => 'Papan Mas','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'sektor','nama' => 'Tridaya','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'sektor','nama' => 'Griya Asri','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'marga','nama' => 'Ginting','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'marga','nama' => 'Karo-karo','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'marga','nama' => 'Tarigan','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'marga','nama' => 'Perangin-nangin','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'marga','nama' => 'Sembiring','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pekerjaan','nama' => 'Pegawai Negri','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pekerjaan','nama' => 'Pegawai Swasta','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pekerjaan','nama' => 'Wiraswasta','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pekerjaan','nama' => 'Pelajar/Mahasiswa','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'SD','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'SMP','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'SMA/K','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'D1','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'D2','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'D3','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'D4','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'S1','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'S2','tahun' => date('Y')]);
        	DB::table('m_parameter')->insert(['type' => 'pendidikan','nama' => 'S3','tahun' => date('Y')]);
    }
}
