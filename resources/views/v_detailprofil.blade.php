@extends('layout.v_template')
@section('title','')
@section('content')
<div class="container">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">DETAIL DATA PROFIL DOSEN</h3>
          </div>
          <div class="card-body">
            <table id="profil" border="0" style="width:100%" class="table table-hover text-nowrap">
                <thead></thead>
                <tbody>
                    <tr align="left">
                        <td style="width:25%">NIDN</td>
                        <td style="width:1%">:</td>
                        <td>{{ $profil->nidn }}</td>
                    </tr>
                    <tr align="left">
                        <td style="width:25%">Nama</td>
                        <td style="width:1%">:</td>
                        <td>{{ $profil->nama_profil }}</td>
                    </tr>  
                    <tr align="left">
                        <td style="width:25%">Matakuliah</td>
                        <td style="width:1%">:</td>
                        <td>{{ $profil->matakuliah }}</td>
                    </tr>  
                    <tr align="left">
                        <td style="width:25%">Jenis Kelamin</td>
                        <td style="width:1%">:</td>
                        <td>{{ $profil->jenis_kelamin }}</td>
                    </tr>  
                    <tr align="left">
                        <td style="width:25%">Email</td>
                        <td style="width:1%">:</td>
                        <td>{{ $profil->email }}</td>
                    </tr>
                    <tr align="left">
                        <td style="width:25%">Alamat</td>
                        <td style="width:1%">:</td>
                        <td>{{ $profil->alamat }}</td>
                    </tr>             
            </table>
            <br>
            <div class="form-group" align="right">
                <a href="/profil/" class="btn btn-default ">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection