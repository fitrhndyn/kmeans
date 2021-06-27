<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Session;

class KuesionerModel extends Model
{
    use HasFactory;

    public function allData()
    {
      return DB::table('mahasiswa')->where('npm','=',Session::get('npm'))->get();
    }

    public function tambahData($data)
    {
      DB::table('pengisian_kuesioner')->insert($data);
    }  
}
