@extends('layout.v_template')
@section('title','')
@section('content')
<div class="container">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">DATA PROFIL DOSEN</h3>
          </div>
          <div class="card-body">
          <a href="/profil/tambah" class="btn btn-primary ">Tambah Data Profil Dosen</a> <br> <br>
          
            @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-check"></i> Sukses.</h5>
                          {{ session('pesan') }}
            </div>
            @endif
            
            <table id="tabel_id"  class="table table-bordered table-hover" style="width:100%">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>NIDN</th>
                        <th>Nama</th>
                        <th>Matakuliah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                    @foreach ($profil as $data)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td>{{ $data->nidn }}</td>
                            <td>{{ $data->nama_profil }}</td>
                            <td>{{ $data->matakuliah }}</td>
                            <td align="center">
                                <a href="/profil/detail/{{ $data->id_profil }}" class="btn btn-sm btn-success">Detail</a>
                                
                                <a href="/profil/ubah/{{ $data->id_profil }}" class="btn btn-sm btn-primary">Ubah</a>
                           
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{ $data->id_profil }}">
                                Hapus
                                </button>
                            
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@foreach($profil as $data)

    <div class="modal fade" id="hapus{{ $data->id_profil }}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{ $data->nama_profil }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda yakin ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
              <a href="/profil/hapus/{{ $data->id_profil }}" class="btn btn-outline-light">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach
@endsection