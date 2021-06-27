<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class ProfilModel extends Model
{
    public function allData()
    {
      return DB::table('profil')->get();
    }  
    
    public function tambahData($data)
    {
      DB::table('profil')->insert($data);
    }  

    public function detailData($id_profil)
    {
      return DB::table('profil')->where('id_profil',$id_profil)->first();
    }  
    
    public function ubahData($id_profil, $data)
    {
      DB::table('profil')
      ->where('id_profil',$id_profil)
      ->update($data);
    } 

    public function hapusData($id_profil)
    {
      DB::table('profil')
      ->where('id_profil',$id_profil)
      ->delete();
    } 
}
