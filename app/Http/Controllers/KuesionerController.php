<?php

namespace App\Http\Controllers;
use App\Models\KuesionerModel;

use Illuminate\Http\Request;
use Session;
class KuesionerController extends Controller
{
    public function __construct()
    {
        $this->KuesionerModel = new KuesionerModel();
    }
    public function index(){
        if(Session::get('login') != null){
            $data = [
                'kuesioner' => $this->KuesionerModel->allData(),
            ];
            return view('v_kuesioner',$data);
        }else{
            return redirect()->route('landing');
        }

    }

    public function isi_kuesioner(Request $req){
        $jumlah_visual = 0;
        $jumlah_auditorial = 0;
        $jumlah_kinestetik = 0;
        $jumlah_visual += $req->v1a;
        $jumlah_visual += $req->v2a;
        $jumlah_visual += $req->v3a;
        $jumlah_visual += $req->v4a;
        $jumlah_visual += $req->v5a;
        $jumlah_visual += $req->v6a;
        $jumlah_visual += $req->v7a;
        $jumlah_visual += $req->v8a;
        $jumlah_visual += $req->v9a;
        $jumlah_visual += $req->v10a;
        $jumlah_visual += $req->v11a;
        $jumlah_visual += $req->v12a;
        $jumlah_auditorial += $req->v13a;
        $jumlah_auditorial += $req->v14a;
        $jumlah_auditorial += $req->v15a;
        $jumlah_auditorial += $req->v16a;
        $jumlah_auditorial += $req->v17a;
        $jumlah_auditorial += $req->v18a;
        $jumlah_auditorial += $req->v19a;
        $jumlah_auditorial += $req->v20a;
        $jumlah_auditorial += $req->v21a;
        $jumlah_auditorial += $req->v22a;
        $jumlah_auditorial += $req->v23a;
        $jumlah_auditorial += $req->v24a;
        $jumlah_kinestetik += $req->v25a;
        $jumlah_kinestetik += $req->v26a;
        $jumlah_kinestetik += $req->v27a;
        $jumlah_kinestetik += $req->v28a;
        $jumlah_kinestetik += $req->v29a;
        $jumlah_kinestetik += $req->v30a;
        $jumlah_kinestetik += $req->v31a;
        $jumlah_kinestetik += $req->v32a;
        $jumlah_kinestetik += $req->v33a;
        $jumlah_kinestetik += $req->v34a;
        $jumlah_kinestetik += $req->v35a;
        $jumlah_kinestetik += $req->v36a;
        $id_mhs = $req->mhs_id;
        $data = [
           'jumlahVisual' => $jumlah_visual,
           'jumlahAuditorial' => $jumlah_auditorial,
           'jumlahKinestetik' => $jumlah_kinestetik,
           'id_mahasiswa' => $id_mhs
        ];
        $this->KuesionerModel->tambahData($data);
        return redirect()->route('kuesioner')->with('pesan','Data berhasil dikirim.');
    }
}
