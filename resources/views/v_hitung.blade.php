@extends('layout.v_template')
@section('title','')
@section('content')
<div class="container">
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">HASIL PERHITUNGAN <i>K-MEANS CLUSTERING</i> </h3>
          </div>
          <div class="card-body">
            <div class="row">
            <div style="overflow-x:auto;" >
            <p> <b> Titik Pusat 1 Tiap <i>Cluster</i></b> </p>
            <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="text-center">
              <th>Titik Pusat Awal</th>
              <th>Visual</th>
              <th>Auditorial</th>
              <th>Kinestetik</th>
              </tr>
              <tbody>

              <?php $no_cluster = 1;$i = 0;?>
              @foreach($cluster as $clust)
              <tr>
              <?php
                $data_clust_visual[$i] = $clust->jumlahVisual;
                $data_clust_auditorial[$i] = $clust->jumlahAuditorial;
                $data_clust_kinestetik[$i] = $clust->jumlahKinestetik;
                
              ?>
                <td><i>Cluster</i> {{$no_cluster++}}</td>
                <td>{{$centro_visual[$i] = $clust->jumlahVisual}}</td>
                <td>{{$centro_auditor[$i] = $clust->jumlahAuditorial}}</td>
                <td>{{$centro_kinestetik[$i] = $clust->jumlahKinestetik}}</td>
              </tr>
              <?php $i++;?>
              @endforeach
              </tbody>
            </thead>
            </table>
            <p> <b>Perhitungan Setiap Data Ke Setiap <i>Cluster</i> Iterasi 1</b> </p>
            <table id="example1" class="table table-bordered table-striped" >
              <thead>
                <tr class="text-center">
                  <th style="vertical-align: middle;" rowspan=2>No</th>
                  <th style="vertical-align: middle;" rowspan=2>NPM</th>
                  <th style="vertical-align: middle;" rowspan=2>Nama</th>
                  <th style="vertical-align: middle;" rowspan=2>Kelas</th>
                  <th style="vertical-align: middle;" rowspan=2>Visual</th>
                  <th style="vertical-align: middle;" rowspan=2>Auditori</th>
                  <th style="vertical-align: middle;" rowspan=2>Kinestetik</th>
                  <th colspan=3><i>Cluster Center</i> 1</th>
                  <th style="vertical-align: middle;" rowspan=2>Jarak <i>Record</i> Ke CC-1</th>
                  <th colspan=3><i>Cluster Center</i> 2</th>   
                  <th style="vertical-align: middle;" rowspan=2>Jarak <i>Record</i> Ke CC-2</th>
                  <th colspan=3><i>Cluster Center</i> 3</th> 
                  <th style="vertical-align: middle;" rowspan=2>Jarak <i>Record</i> Ke CC-3</th> 
                  <th style="vertical-align: middle;" rowspan=2><i>Cluster</i></th> 
                    <tr>
                        <th>V1</th>
                        <th>A1</th>
                        <th>K1</th>
                
                        <th>V2</th>
                        <th>A2</th>
                        <th>K2</th>

                        <th>V3</th>
                        <th>A3</th>
                        <th>K3</th>
                    </tr>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1;$t=0;?>
              <?php $iterasi = 0;
                  ${'m_cluster'.$iterasi} = [];?>
              @foreach($users as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->npm}}</td>
                  <td class="text-center">{{$data->nama_mahasiswa}}</td>
                  <td class="text-center">{{$data->kelas}}</td>
                  <td class="text-center">{{$data->jumlahVisual}}</td>
                  <td class="text-center">{{$data->jumlahAuditorial}}</td>
                  <td class="text-center">{{$data->jumlahKinestetik}}</td>
                  <td class="text-center">{{$data_clust_visual[0]}}</td>
                  <td class="text-center">{{$data_clust_auditorial[0]}}</td>
                  <td class="text-center">{{$data_clust_kinestetik[0]}}</td>
                  <td class="text-center">
                    <?php
                      $jarak[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[0]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[0]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[0]),2) );
                    ?>
                    {{number_format($jarak[$t], 2)}}
                  </td>
                  <td class="text-center">{{$data_clust_visual[1]}}</td>
                  <td class="text-center">{{$data_clust_auditorial[1]}}</td>
                  <td class="text-center">{{$data_clust_kinestetik[1]}}</td>
                  <td class="text-center">
                  <?php
                      $jarak1[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[1]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[1]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[1]),2) );
                    ?>
                    {{number_format($jarak1[$t], 2)}}
                  </td>
                  <td class="text-center">{{$data_clust_visual[2]}}</td>
                  <td class="text-center">{{$data_clust_auditorial[2]}}</td>
                  <td class="text-center">{{$data_clust_kinestetik[2]}}</td>
                  <td class="text-center">
                  <?php
                      $jarak2[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[2]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[2]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[2]),2) );
                    ?>
                    {{number_format($jarak2[$t], 2)}}
                  </td>
                  <td class="text-center">
                    <?php
                      if($jarak[$t] < $jarak1[$t] && $jarak[$t] < $jarak2[$t]){
                        array_push(${'m_cluster'.$iterasi},1);
                        echo "1";
                      }
                      else if($jarak1[$t]< $jarak[$t] && $jarak1[$t]< $jarak2[$t]){
                        array_push(${'m_cluster'.$iterasi},2);
                        echo "2";
                      }
                      else if($jarak2[$t]< $jarak[$t] && $jarak2[$t]< $jarak1[$t]){
                        array_push(${'m_cluster'.$iterasi},3);
                        echo "3";
                      }
                    ?>
                  </td>
                </tr>
                <?php $t++;?>
                @endforeach
              </tbody>
            </table>
          <p> <b>Pengelompokan Data Dari Iterasi 1</b> </p>
          <table id="example1" class="table table-bordered table-striped" >
          <thead>
                <tr class="text-center">
                  <th style="vertical-align: middle;" rowspan=2>No</th>
                  <th style="vertical-align: middle;" rowspan=2>Nama</th>
                  <th colspan=3><i>Cluster</i> 1</th>
                  <th colspan=3><i>Cluster</i> 2</th>   
                  <th colspan=3><i>Cluster</i> 3</th> 
                    <tr class="text-center">
                        <th>Visual</th>
                        <th>Auditorial</th>
                        <th>Kinestetik</th>
                
                        <th>Visual</th>
                        <th>Auditorial</th>
                        <th>Kinestetik</th>

                        <th>Visual</th>
                        <th>Auditorial</th>
                        <th>Kinestetik</th>
                    </tr>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1; $n=0; $lop = -1;
              $jml_data_visual_c1 = 0;
              $jml_data_auditor_c1 = 0;
              $jml_data_kinestetik_c1 = 0; 
              $jml_data_visual_c2 = 0;
              $jml_data_auditor_c2 = 0;
              $jml_data_kinestetik_c2 = 0; 
              $jml_data_visual_c3 = 0;
              $jml_data_auditor_c3 = 0;
              $jml_data_kinestetik_c3 = 0;  
              ?>
              <?php $n = 0;
              $nn = 0;?>
              @foreach($users as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->nama_mahasiswa}}</td>
                  <?php if(${'m_cluster'.$iterasi}[$nn] == 1){
                    echo '<td class="text-center">'.$data->jumlahVisual.'</td>';
                    echo '<td class="text-center">'.$data->jumlahAuditorial.'</td>';
                    echo '<td class="text-center">'.$data->jumlahKinestetik.'</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';

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
                  }else if(${'m_cluster'.$iterasi}[$nn] == 2){
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">'.$data->jumlahVisual.'</td>';
                    echo '<td class="text-center">'.$data->jumlahAuditorial.'</td>';
                    echo '<td class="text-center">'.$data->jumlahKinestetik.'</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
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
                  }else if(${'m_cluster'.$iterasi}[$nn]== 3){
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">'.$data->jumlahVisual.'</td>';
                    echo '<td class="text-center">'.$data->jumlahAuditorial.'</td>';
                    echo '<td class="text-center">'.$data->jumlahKinestetik.'</td>';
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
                  $lop += 1;
                  ?>
                  
                </tr>
                 
                @endforeach
                <tr class="text-center">
                <td colspan=2> <b>Jumlah</b></td>
                <?php
                  $n_data_visual_cc1 = 0;
                  $n_data_auditor_cc1 = 0;
                  $n_data_kinestetik_cc1 = 0;
                  $n_data_visual_cc2 = 0;
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
                ?>
                <td><b> {{$n_data_visual_cc1}} </b></td>
                <td><b>{{$n_data_auditor_cc1}} </b></td>
                <td><b>{{$n_data_kinestetik_cc1}} </b></td>
                <td><b> {{$n_data_visual_cc2}} </b></td>
                <td><b>{{$n_data_auditor_cc2}} </b></td>
                <td><b>{{$n_data_kinestetik_cc2}} </b></td>
                <td><b> {{$n_data_visual_cc3}} </b></td>
                <td><b>{{$n_data_auditor_cc3}} </b></td>
                <td><b>{{$n_data_kinestetik_cc3}} </b></td>
                </tr>
                <tr class="text-center">
                <td colspan=2>Jumlah Data</td>
                <td>{{$jml_data_visual_c1}}</td>
                <td>{{$jml_data_auditor_c1}}</td>
                <td>{{ $jml_data_kinestetik_c1}}</td>
                <td>{{$jml_data_visual_c2}}</td>
                <td>{{$jml_data_auditor_c2}}</td>
                <td>{{ $jml_data_kinestetik_c2}}</td>
                <td>{{$jml_data_visual_c3}}</td>
                <td>{{$jml_data_auditor_c3}}</td>
                <td>{{ $jml_data_kinestetik_c3}}</td>
                </tr>
                <tr class="text-center">
                <td colspan=2> <i> Centroid </i> Baru</td>
                <td>{{$centro_visual[0] = number_format($n_data_visual_cc1/$jml_data_visual_c1,2)}}</td>
                <td>{{$centro_auditor[0] = number_format ($n_data_auditor_cc1/$jml_data_auditor_c1,2)}}</td>
                <td>{{$centro_kinestetik[0] = number_format($n_data_kinestetik_cc1/$jml_data_kinestetik_c1,2)}}</td>
                <td>{{$centro_visual[1] =number_format ($n_data_visual_cc2/$jml_data_visual_c2,2)}}</td>
                <td>{{$centro_auditor[1] = number_format ($n_data_auditor_cc2/$jml_data_auditor_c2,2)}}</td>
                <td>{{$centro_kinestetik[1] = number_format($n_data_kinestetik_cc2/$jml_data_kinestetik_c2,2)}}</td>
                <td>{{$centro_visual[2] = number_format($n_data_visual_cc3/$jml_data_visual_c3,2)}}</td>
                <td>{{$centro_auditor[2] = number_format ($n_data_auditor_cc3/$jml_data_auditor_c3,2)}}</td>
                <td>{{$centro_kinestetik[2] = number_format($n_data_kinestetik_cc3/$jml_data_kinestetik_c3,2)}}</td>
                <td colspan=2> <i> Centroid </i> Baru</td>
                </tr>
              </tbody>
          </table>  
          </div>
        </div>
        <br>
<!-- Centroid Baru -->

        <div class="row">
            <div style="overflow-x:auto;" >
            <p> <b> Titik Pusat 2 Tiap <i>Cluster</i></b> </p>
            <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr class="text-center">
              <th>Titik Pusat Awal</th>
              <th>Visual</th>
              <th>Auditorial</th>
              <th>Kinestetik</th>
              </tr>
              <tbody>

              <?php $no_cluster = 1;$i = 0;?>
              @foreach($data_centroid_baru as $clust)
              <tr>
              <?php
                $data_clust_visual[$i] = $clust->jumlahVisual;
                $data_clust_auditorial[$i] = $clust->jumlahAuditorial;
                $data_clust_kinestetik[$i] = $clust->jumlahKinestetik;
                
              ?>
                <td><i>Cluster</i> {{$no_cluster++}}</td>
                <td>{{$centro_visual[$i] = $clust->jumlahVisual}}</td>
                <td>{{$centro_auditor[$i] = $clust->jumlahAuditorial}}</td>
                <td>{{$centro_kinestetik[$i] = $clust->jumlahKinestetik}}</td>
              </tr>
              <?php $i++;?>
              @endforeach
              </tbody>
            </thead>
            </table>
            <p> <b>Perhitungan Setiap Data Ke Setiap <i>Cluster</i> Iterasi 2</b> </p>
            <table id="example1" class="table table-bordered table-striped" >
              <thead>
                <tr class="text-center">
                  <th style="vertical-align: middle;" rowspan=2>No</th>
                  <th style="vertical-align: middle;" rowspan=2>NPM</th>
                  <th style="vertical-align: middle;" rowspan=2>Nama</th>
                  <th style="vertical-align: middle;" rowspan=2>Kelas</th>
                  <th style="vertical-align: middle;" rowspan=2>Visual</th>
                  <th style="vertical-align: middle;" rowspan=2>Auditori</th>
                  <th style="vertical-align: middle;" rowspan=2>Kinestetik</th>
                  <th colspan=3><i>Cluster Center</i> 1</th>
                  <th style="vertical-align: middle;" rowspan=2>Jarak <i>Record</i> Ke CC-1</th>
                  <th colspan=3><i>Cluster Center</i> 2</th>   
                  <th style="vertical-align: middle;" rowspan=2>Jarak <i>Record</i> Ke CC-2</th>
                  <th colspan=3><i>Cluster Center</i> 3</th> 
                  <th style="vertical-align: middle;" rowspan=2>Jarak <i>Record</i> Ke CC-3</th> 
                  <th style="vertical-align: middle;" rowspan=2><i>Cluster</i></th> 
                    <tr>
                        <th>V1</th>
                        <th>A1</th>
                        <th>K1</th>
                
                        <th>V2</th>
                        <th>A2</th>
                        <th>K2</th>

                        <th>V3</th>
                        <th>A3</th>
                        <th>K3</th>
                    </tr>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1;$t=0;?>
              @foreach($users as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->npm}}</td>
                  <td class="text-center">{{$data->nama_mahasiswa}}</td>
                  <td class="text-center">{{$data->kelas}}</td>
                  <td class="text-center">{{$data->jumlahVisual}}</td>
                  <td class="text-center">{{$data->jumlahAuditorial}}</td>
                  <td class="text-center">{{$data->jumlahKinestetik}}</td>
                  <td class="text-center">{{$data_clust_visual[0]}}</td>
                  <td class="text-center">{{$data_clust_auditorial[0]}}</td>
                  <td class="text-center">{{$data_clust_kinestetik[0]}}</td>
                  <td class="text-center">
                    <?php
                      $jarak[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[0]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[0]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[0]),2) );
                    ?>
                    {{number_format($jarak[$t], 2)}}
                  </td>
                  <td class="text-center">{{$data_clust_visual[1]}}</td>
                  <td class="text-center">{{$data_clust_auditorial[1]}}</td>
                  <td class="text-center">{{$data_clust_kinestetik[1]}}</td>
                  <td class="text-center">
                  <?php
                      $jarak1[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[1]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[1]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[1]),2) );
                    ?>
                    {{number_format($jarak1[$t], 2)}}
                  </td>
                  <td class="text-center">{{$data_clust_visual[2]}}</td>
                  <td class="text-center">{{$data_clust_auditorial[2]}}</td>
                  <td class="text-center">{{$data_clust_kinestetik[2]}}</td>
                  <td class="text-center">
                  <?php
                      $jarak2[$t] = sqrt( pow(($data->jumlahVisual-$data_clust_visual[2]),2)+
                      pow(($data->jumlahAuditorial-$data_clust_auditorial[2]),2)+
                      pow(($data->jumlahKinestetik-$data_clust_kinestetik[2]),2) );
                    ?>
                    {{number_format($jarak2[$t], 2)}}
                  </td>
                  <td class="text-center">
                    <?php
                      if($jarak[$t] < $jarak1[$t] && $jarak[$t] < $jarak2[$t]){
                        $m_cluster[$t] = 1;
                        echo "1";
                      }
                      else if($jarak1[$t]< $jarak[$t] && $jarak1[$t]< $jarak2[$t]){
                        $m_cluster[$t] = 2;
                        echo "2";
                      }
                      else if($jarak2[$t]< $jarak[$t] && $jarak2[$t]< $jarak1[$t]){
                        $m_cluster[$t] = 3;
                        echo "3";
                      }
                    ?>
                  </td>
                </tr>
                <?php $t++;?>
                @endforeach
              </tbody>
            </table>
          <p> <b>Pengelompokan Data Dari Iterasi 2</b> </p>
          <table id="example1" class="table table-bordered table-striped" >
          <thead>
                <tr class="text-center">
                  <th style="vertical-align: middle;" rowspan=2>No</th>
                  <th style="vertical-align: middle;" rowspan=2>Nama</th>
                  <th colspan=3><i>Cluster</i> 1</th>
                  <th colspan=3><i>Cluster</i> 2</th>   
                  <th colspan=3><i>Cluster</i> 3</th> 
                    <tr class="text-center">
                        <th>Visual</th>
                        <th>Auditorial</th>
                        <th>Kinestetik</th>
                
                        <th>Visual</th>
                        <th>Auditorial</th>
                        <th>Kinestetik</th>

                        <th>Visual</th>
                        <th>Auditorial</th>
                        <th>Kinestetik</th>
                    </tr>
                </tr>
              </thead>
              <tbody>
              <?php $no = 1; $n=0; $lop = -1;
              $jml_data_visual_c1 = 0;
              $jml_data_auditor_c1 = 0;
              $jml_data_kinestetik_c1 = 0; 
              $jml_data_visual_c2 = 0;
              $jml_data_auditor_c2 = 0;
              $jml_data_kinestetik_c2 = 0; 
              $jml_data_visual_c3 = 0;
              $jml_data_auditor_c3 = 0;
              $jml_data_kinestetik_c3 = 0;  
              ?>
              @foreach($users as $data)
                <tr>
                  <td class="text-center">{{$no++}}</td>
                  <td class="text-center">{{$data->nama_mahasiswa}}</td>
                  <?php if($m_cluster[$n] == 1){
                    echo '<td class="text-center">'.$data->jumlahVisual.'</td>';
                    echo '<td class="text-center">'.$data->jumlahAuditorial.'</td>';
                    echo '<td class="text-center">'.$data->jumlahKinestetik.'</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';

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
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">'.$data->jumlahVisual.'</td>';
                    echo '<td class="text-center">'.$data->jumlahAuditorial.'</td>';
                    echo '<td class="text-center">'.$data->jumlahKinestetik.'</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
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
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">0</td>';
                    echo '<td class="text-center">'.$data->jumlahVisual.'</td>';
                    echo '<td class="text-center">'.$data->jumlahAuditorial.'</td>';
                    echo '<td class="text-center">'.$data->jumlahKinestetik.'</td>';
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
                  $lop += 1;
                  ?>
                  
                </tr>
                 
                @endforeach
                <tr class="text-center">
                <td colspan=2> <b>Jumlah</b></td>
                <?php
                  $n_data_visual_cc1 = 0;
                  $n_data_auditor_cc1 = 0;
                  $n_data_kinestetik_cc1 = 0;
                  $n_data_visual_cc2 = 0;
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
                ?>
                <td><b> {{$n_data_visual_cc1}} </b></td>
                <td><b>{{$n_data_auditor_cc1}} </b></td>
                <td><b>{{$n_data_kinestetik_cc1}} </b></td>
                <td><b> {{$n_data_visual_cc2}} </b></td>
                <td><b>{{$n_data_auditor_cc2}} </b></td>
                <td><b>{{$n_data_kinestetik_cc2}} </b></td>
                <td><b> {{$n_data_visual_cc3}} </b></td>
                <td><b>{{$n_data_auditor_cc3}} </b></td>
                <td><b>{{$n_data_kinestetik_cc3}} </b></td>
                </tr>
                <tr class="text-center">
                <td colspan=2>Jumlah Data</td>
                <td>{{$jml_data_visual_c1}}</td>
                <td>{{$jml_data_auditor_c1}}</td>
                <td>{{ $jml_data_kinestetik_c1}}</td>
                <td>{{$jml_data_visual_c2}}</td>
                <td>{{$jml_data_auditor_c2}}</td>
                <td>{{ $jml_data_kinestetik_c2}}</td>
                <td>{{$jml_data_visual_c3}}</td>
                <td>{{$jml_data_auditor_c3}}</td>
                <td>{{ $jml_data_kinestetik_c3}}</td>
                </tr>
                <tr class="text-center">
                <td colspan=2> <i> Centroid </i> Baru</td>
                <td>{{$centro_visual[0] = number_format($n_data_visual_cc1/$jml_data_visual_c1,2)}}</td>
                <td>{{$centro_auditor[0] = number_format ($n_data_auditor_cc1/$jml_data_auditor_c1,2)}}</td>
                <td>{{$centro_kinestetik[0] = number_format($n_data_kinestetik_cc1/$jml_data_kinestetik_c1,2)}}</td>
                <td>{{$centro_visual[1] =number_format ($n_data_visual_cc2/$jml_data_visual_c2,2)}}</td>
                <td>{{$centro_auditor[1] = number_format ($n_data_auditor_cc2/$jml_data_auditor_c2,2)}}</td>
                <td>{{$centro_kinestetik[1] = number_format($n_data_kinestetik_cc2/$jml_data_kinestetik_c2,2)}}</td>
                <td>{{$centro_visual[2] = number_format($n_data_visual_cc3/$jml_data_visual_c3,2)}}</td>
                <td>{{$centro_auditor[2] = number_format ($n_data_auditor_cc3/$jml_data_auditor_c3,2)}}</td>
                <td>{{$centro_kinestetik[2] = number_format($n_data_kinestetik_cc3/$jml_data_kinestetik_c3,2)}}</td>
                </tr>
              </tbody>
          </table>  
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection