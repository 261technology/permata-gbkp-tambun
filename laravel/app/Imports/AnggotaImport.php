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
        // echo json_encode($row);die;
        // MODIFIKASI ARRAY NYA DENGAN MENAMBAHKAN KEY
        return new Anggota([
            'nama' => $row['nama'],
            'marga' => $row['marga'],
            'tempat_lahir' => $row['tempat_lahir'],
            'tanggal_lahir' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['tanggal_lahir']),
            'jenis_kelamin' => $row['jenis_kelamin'],
            'telepon' => "'".$row['telepon']."'",
            'email' => $row['email'],
            'alamat' => $row['alamat'],
            'domisili' => $row['domisili'],
            'pekerjaan' => $row['pekerjaan'],
            'pendidikan' => $row['pendidikan'],
            'jurusan' => $row['jurusan'],
            'sekolah' => $row['sekolah'],
            'kantor' => $row['kantor'],
            'hobi' => $row['hobi'],
            'sektor' => $row['sektor'],
            'tahun_ngawan' => $row['tahun_ngawan'],
            'lokasi_ngawan' => $row['lokasi_ngawan'],
            'instagram' => $row['instagram'],
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
    }

    //LIMIT CHUNKSIZE
    public function chunkSize(): int
    {
        return 1000; //ANGKA TERSEBUT PERTANDA JUMLAH BARIS YANG AKAN DIEKSEKUSI
    }
}
