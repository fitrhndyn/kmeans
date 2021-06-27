<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class MahasiswaModel extends Model
{
    public function allData()
    {
      return DB::table('mahasiswa')->get();
    }  
    
    public function tambahData($data)
    {
      DB::table('mahasiswa')->insert($data);
    }  

    public function detailData($id_mahasiswa)
    {
      return DB::table('mahasiswa')->where('id_mahasiswa',$id_mahasiswa)->first();
    }  
    
    public function ubahData($id_mahasiswa, $data)
    {
      DB::table('mahasiswa')
      ->where('id_mahasiswa',$id_mahasiswa)
      ->update($data);
    } 

    public function hapusData($id_mahasiswa)
    {
      DB::table('mahasiswa')
      ->where('id_mahasiswa',$id_mahasiswa)
      ->delete();
    } 
}
