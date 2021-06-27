@extends('layout.v_template')
@section('title','')
@section('content')
<div class="container">
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">DATA MAHASISWA</h3>
          </div>
          <div class="card-body">
          <a href="/mahasiswa/tambah" class="btn btn-primary ">Tambah Data Mahasiswa</a> <br> <br>
          
            @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <h5><i class="icon fas fa-check"></i> Sukses.</h5>
                          {{ session('pesan') }}
            </div>
            @endif
            
            <table id="tabel_id" style="width:100%"  class="table table-bordered table-hover">
                <thead>
                    <tr align="center">
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama Mahasiswa</th>
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>Matakuliah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no=1; ?>
                    @foreach ($mahasiswa as $data)
                        <tr>
                            <td align="center">{{ $no++ }}</td>
                            <td>{{ $data->npm }}</td>
                            <td>{{ $data->nama_mahasiswa }}</td>
                            <td>{{ $data->kelas }}</td>
                            <td>{{ $data->angkatan }}</td>
                            <td>{{ $data->matakuliah }}</td>
                            <td align="center">
                                <a href="/mahasiswa/ubah/{{ $data->id_mahasiswa }}" class="btn btn-sm btn-primary">Ubah</a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus{{ $data->id_mahasiswa }}">
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
  </section>
</div>

      </div>
    </div>
  </div>
</div>

@foreach($mahasiswa as $data)

    <div class="modal fade" id="hapus{{ $data->id_mahasiswa }}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{ $data->nama_mahasiswa }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda yakin ingin menghapus data ini ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
              <a href="/mahasiswa/hapus/{{ $data->id_mahasiswa }}" class="btn btn-outline-light">Ya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endforeach
@endsection
<!-- 
    <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#mahasiswa').DataTable();
        } );
    </script>
 -->
