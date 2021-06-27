@extends('layout.v_landing')
@section('title','')
@section('content')
<div class="card" style="width: 600px;">
  <!-- <img src="" class="card-img-top" alt="..."> -->
  <div class="card-body">
    <h5 class="card-title text-center">Aplikasi Data Mining Menggunakan Algoritma K-Means Clustering Untuk Mengelompokan Mahasiswa Berdasarkan Gaya Belajar Menurut DePorter</h5>
    <div class="row">             
                        <div class="col-md-6 col-sm-12 ">
                            <div class="card">
                            <img src="{{asset('img')}}/dosen.png"
                                class="card-img-top img-thumbnail" alt="Dosen" >
                                <div class="card-body">
                                    <button
                                        class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalDosen">Dosen</button>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <img src="{{asset('img')}}/mahasiswa.png"
                                    class="card-img-top img-thumbnail" alt="Mahasiswa">
                                <div class="card-body">
                                <button
                                        class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalMahasiswa">Mahasiswa</button>
                                </div>
                            </div>
                        </div>
                    </div>
  </div>
</div>
@endsection
<!-- Modal -->
<div class="modal fade" id="modalDosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Dosen</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('login_dosen')}}" method="post">
      @csrf
      @method('POST')
  <div class="form-group">
    <label for="nidn">NIDN</label>
    <input type="text" class="form-control" id="nidn" aria-describedby="emailHelp" name="username">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="password">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Masuk</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Mahasiswa-->
<div class="modal fade" id="modalMahasiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="{{route('login_mahasiswa')}}" method="post">
      @csrf
      @method('POST')
  <div class="form-group">
    <label for="nidn">NPM</label>
    <input type="text" class="form-control" id="nidn" aria-describedby="emailHelp" name="username">
  </div>
  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" name="password">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Masuk</button>
      </div>
      </form>
    </div>
  </div>
</div>