<?php

namespace App\Imports;

use App\Anggota;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Contracts\Queue\ShouldQueue; //IMPORT SHOUDLQUEUE
use Maatwebsite\Excel\Concerns\WithChunkReading; //IMPORT CHUNK READING

class AnggotaImport implements ToModel, WithHeadingRow, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {   
        // echo json_encode(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject(strtotime('10-10-2002')));die;
        // MODIFIKASI ARRAY NYA DENGAN MENAMBAHKAN KEY
        return new Anggota([    
            'role' => $row['role'],
            'password' => $row['password'],
            'nama' => $row['nama'],
            'marga' => $row['marga'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => $row['tanggal_lahir'],
            'jenis_kelamin' => $row['jenis_kelamin'],
            'telepon' => $row['telepon'],
            'email' => $row['email'],
            'alamat' => $row['alamat'],
            'domisili' => $row['domisili'],
            'sektor' => $row['sektor'],
            'pekerjaan' => $row['pekerjaan'],
            'pendidikan' => $row['pendidikan'],
            'jurusan' => $row['jurusan'],
            'sekolah' => $row['sekolah'],
            'perusahaan' => $row['perusahaan'],
            'hobi' => $row['hobi'],
            'tahun_ngawan' => $row['tahun_ngawan'],
            'lokasi_ngawan' => $row['lokasi_ngawan'],
            'instagram' => $row['instagram']
        ]);
    }

    //LIMIT CHUNKSIZE
    public function chunkSize(): int
    {
        return 1000; //ANGKA TERSEBUT PERTANDA JUMLAH BARIS YANG AKAN DIEKSEKUSI
    }
}
