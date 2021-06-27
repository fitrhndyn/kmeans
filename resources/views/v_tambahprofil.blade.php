@extends('layout.v_template')
@section('title','')
@section('content')
    <form action="/profil/tambahkan" method="POST" enctype="multipart/form-data">  
        @csrf
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="text-center">Halaman Tambah Data Profil Dosen</h3>
                            </div>
                            <div class="card-body">
                            <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                            <div class="form-group">
                                <label for="">NIDN</label> 
                                <input name="nidn" class="form-control" value="{{old('nidn')}}">  
                                <div class="text-danger">
                                    @error ('nidn')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Nama</label> 
                                <input name="nama_profil" class="form-control" value="{{old('nama_profil')}}">
                                <div class="text-danger">
                                    @error ('nama_profil')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>

                            <div class="form-group">
                                <label for="">Matakuliah</label> 
                                <input name="matakuliah" class="form-control" value="{{old('matakuliah')}}">
                                <div class="text-danger">
                                    @error ('matakuliah')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label> 
                                <select name="jenis_kelamin" class="form-control " data-placeholder="Pilih Jenis Kelamin" id="jenis_kelamin" value=" {{ old('jenis_kelamin') }} ">
                                    <option selected disabled>-- Pilih Jenis Kelamin --</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                <div class="text-danger">
                                    @error ('jenis_kelamin')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>

                            <div class="form-group">
                                <label for="">Email</label> 
                                <input name="email" class="form-control " value="{{old('email')}}">
                                <div class="text-danger">
                                    @error ('email')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label> 
                                <textarea class="form-control" name="alamat" id="alamat" value="{{old('alamat')}}"></textarea>
                                <div class="text-danger">
                                    @error ('alamat')
                                        {{ $message }}
                                    @enderror
                                </div>  
                            </div>

                            <div class="form-group" align="right">
                                <a href="/profil/" class="btn btn-default ">Batal</a>
                                <button class="btn btn-primary">Simpan</button>
                            </div>

                            </div>
                            <div class="col-md-4"></div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
@endsection