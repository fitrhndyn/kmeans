<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

class PerhitunganController extends Controller
{
    public function index(){
        if(Session::get('login') != null){
            $users = DB::table('pengisian_kuesioner')
            ->join('mahasiswa', 'pengisian_kuesioner.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
            ->select('mahasiswa.npm','mahasiswa.nama_mahasiswa','mahasiswa.kelas', 'pengisian_kuesioner.jumlahVisual', 'pengisian_kuesioner.jumlahAuditorial', 'pengisian_kuesioner.jumlahKinestetik')
            ->get();
            return view('v_perhitungan',compact('users'));
        }else{
            return redirect()->route('landing');
        }
        
    }

    public function hitung(Request $req){
        $kelas = $req->kelas;
        $angkatan = $req->angkatan;
        $cluster = DB::table('pengisian_kuesioner')->join('mahasiswa', 'pengisian_kuesioner.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
                    ->where('mahasiswa.kelas','=',$kelas)
                    ->where('mahasiswa.angkatan','=',$angkatan)
                    ->select('mahasiswa.npm','mahasiswa.nama_mahasiswa','mahasiswa.kelas', 'pengisian_kuesioner.jumlahVisual', 'pengisian_kuesioner.jumlahAuditorial', 'pengisian_kuesioner.jumlahKinestetik')
                    ->limit(3)->get();
        $users = DB::table('pengisian_kuesioner')
            ->join('mahasiswa', 'pengisian_kuesioner.id_mahasiswa', '=', 'mahasiswa.id_mahasiswa')
            ->where('mahasiswa.kelas','=',$kelas)
            ->where('mahasiswa.angkatan','=',$angkatan)
            ->select('mahasiswa.npm','mahasiswa.nama_mahasiswa','mahasiswa.kelas', 'pengisian_kuesioner.jumlahVisual', 'pengisian_kuesioner.jumlahAuditorial', 'pengisian_kuesioner.jumlahKinestetik')
            ->get();
        $i = 0;
        $t = 0;
        $n = 0;
        $no_iterasi = 1;
        $jml_data_visual_c1 = 0;
        $jml_data_auditor_c1 = 0;
        $jml_data_kinestetik_c1 = 0; 
                      $jml_data_visual_c2 = 0;
                      $jml_data_auditor_c2 = 0;
                      $jml_data_kinestetik_c2 = 0; 
                      $jml_data_visual_c3 = 0;
                      $jml_data_auditor_c3 = 0;
                      $jml_data_kinestetik_c3 = 0; 
        foreach($cluster as $clust):
            $data_clust_visual[$i] = $clust->jumlahVisual;
                $data_clust_auditorial[$i] = $clust->jumlahAuditorial;
                $data_clust_kinestetik[$i] = $clust->jumlahKinestetik;
            $i++;
        endforeach;
        $lop = -1;
        foreach($users as $data):
            $lop += 1;
            $jarak[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[0]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[0]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[0]),2) );
            $jarak1[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[1]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[1]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[1]),2) );
            $jarak2[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[2]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[2]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[2]),2) );

                      if($jarak[$t] < $jarak1[$t] && $jarak[$t] < $jarak2[$t]){
                        $m_cluster[$t] = 1;
                      }
                      else if($jarak1[$t]< $jarak[$t] && $jarak1[$t]< $jarak2[$t]){
                        $m_cluster[$t] = 2;
                      }
                      else if($jarak2[$t]< $jarak[$t] && $jarak2[$t]< $jarak1[$t]){
                        $m_cluster[$t] = 3;
                      }

                      if($m_cluster[$n] == 1){
                        $n_data_visual_c1[$n] = $data->jumlahVisual;
                        $n_data_auditor_c1[$n] = $data->jumlahAuditorial;
                        $n_data_kinestetik_c1[$n] = $data->jumlahKinestetik;
                        $n_data_visual_c2[$n] = 0;
                        $n_data_auditor_c2[$n] = 0;
                        $n_data_kinestetik_c2[$n] = 0;
                        $n_data_visual_c3[$n] = 0;
                        $n_data_auditor_c3[$n] = 0;
                        $n_data_kinestetik_c3[$n] = 0;

                        $jml_data_visual_c1 += 1;
                        $jml_data_auditor_c1 += 1;
                        $jml_data_kinestetik_c1 += 1; 
                      }else if($m_cluster[$n] == 2){
                        $n_data_visual_c2[$n] = $data->jumlahVisual;
                        $n_data_auditor_c2[$n] = $data->jumlahAuditorial;
                        $n_data_kinestetik_c2[$n] = $data->jumlahKinestetik;
                        $n_data_visual_c1[$n] = 0;
                        $n_data_auditor_c1[$n] = 0;
                        $n_data_kinestetik_c1[$n] = 0;
                        $n_data_visual_c3[$n] = 0;
                        $n_data_auditor_c3[$n] = 0;
                        $n_data_kinestetik_c3[$n] = 0;
                        $jml_data_visual_c2 += 1;
                        $jml_data_auditor_c2 += 1;
                        $jml_data_kinestetik_c2 += 1;  
                      }else if($m_cluster[$n] == 3){
                        $n_data_visual_c3[$n] = $data->jumlahVisual;
                        $n_data_auditor_c3[$n] = $data->jumlahAuditorial;
                        $n_data_kinestetik_c3[$n] = $data->jumlahKinestetik;
                        $n_data_visual_c1[$n] = 0;
                        $n_data_auditor_c1[$n] = 0;
                        $n_data_kinestetik_c1[$n] = 0;
                        $n_data_visual_c2[$n] = 0;
                        $n_data_auditor_c2[$n] = 0;
                        $n_data_kinestetik_c2[$n] = 0;
    
                        $jml_data_visual_c3 += 1;
                        $jml_data_auditor_c3 += 1;
                        $jml_data_kinestetik_c3 += 1;  
                    }
            $n++;
            $t++;
        endforeach;

        $n_data_visual_cc1 = 0;
                  $n_data_auditor_cc1 = 0;
                  $n_data_kinestetik_cc1 = 0;
                  $n_data_visual_cc2= 0;
                  $n_data_auditor_cc2 = 0;
                  $n_data_kinestetik_cc2 = 0;
                  $n_data_visual_cc3 = 0;
                  $n_data_auditor_cc3 = 0;
                  $n_data_kinestetik_cc3 = 0;
                  for($no_1 = 0; $no_1 <= $lop; $no_1++){
                    $n_data_visual_cc1 += $n_data_visual_c1[$no_1];
                    $n_data_auditor_cc1 += $n_data_auditor_c1[$no_1];
                    $n_data_kinestetik_cc1 += $n_data_kinestetik_c1[$no_1]; 
                    $n_data_visual_cc2 += $n_data_visual_c2[$no_1];
                    $n_data_auditor_cc2 += $n_data_auditor_c2[$no_1];
                    $n_data_kinestetik_cc2 += $n_data_kinestetik_c2[$no_1]; 
                    $n_data_visual_cc3 += $n_data_visual_c3[$no_1];
                    $n_data_auditor_cc3 += $n_data_auditor_c3[$no_1];
                    $n_data_kinestetik_cc3 += $n_data_kinestetik_c3[$no_1]; 
                  }

                  $centro_visual[0] = number_format($n_data_visual_cc1/$jml_data_visual_c1,2);
                  $centro_auditor[0] = number_format ($n_data_auditor_cc1/$jml_data_auditor_c1,2);
                  $centro_kinestetik[0] = number_format($n_data_kinestetik_cc1/$jml_data_kinestetik_c1,2);
                  $centro_visual[1] =number_format ($n_data_visual_cc2/$jml_data_visual_c2,2);
                  $centro_auditor[1] = number_format ($n_data_auditor_cc2/$jml_data_auditor_c2,2);
                  $centro_kinestetik[1] = number_format($n_data_kinestetik_cc2/$jml_data_kinestetik_c2,2);
                  $centro_visual[2] = number_format($n_data_visual_cc3/$jml_data_visual_c3,2);
                  $centro_auditor[2] = number_format ($n_data_auditor_cc3/$jml_data_auditor_c3,2);
                  $centro_kinestetik[2] = number_format($n_data_kinestetik_cc3/$jml_data_kinestetik_c3,2);
        $data_insert = array(
            array(
            'jumlahVisual' => $centro_visual[0],
            'jumlahAuditorial' => $centro_auditor[0],
            'jumlahKinestetik' => $centro_kinestetik[0],
            ),
            array(
                'jumlahVisual' => $centro_visual[1],
                'jumlahAuditorial' => $centro_auditor[1],
                'jumlahKinestetik' => $centro_kinestetik[1],
            ),array(
                'jumlahVisual' => $centro_visual[2],
                'jumlahAuditorial' =>  $centro_auditor[2],
                'jumlahKinestetik' => $centro_kinestetik[2],
            ),

        );
        $data_centroid_baru = DB::table('tmp_centroid')->get();
        $data_cluster_baru = DB::table('tmp_cluster')->get();
        DB::table('tmp_centroid')->truncate();
        DB::table('tmp_cluster')->truncate();
        return view('v_hitung', compact('users','cluster','data_centroid_baru','data_cluster_baru'));
    }
}
